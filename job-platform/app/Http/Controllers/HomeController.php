<?php

namespace App\Http\Controllers;

use App\Models\Applicants;
use App\Models\Job;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View as FacadesView;
use Illuminate\Support\Facades\Auth;
use Hash;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $user;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(function ($request, $next) {

            $this->user = Auth::user();

            return $next($request);
        });
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $jobs=DB::select('SELECT * FROM jobs');
        return view('home',['jobs'=>$jobs]);
    } 

    public function dashbord()
    {
        $jobs=DB::select('SELECT * FROM jobs');
         return view('dashbord',['jobs'=>$jobs]);
    }

    public function jobDesc($id){
        $data=Job::find($id);
        return view('jobDesc',['data'=>$data]);
    }

    public function applyForm($id){
        $names=Job::findOrFail($id);
        $data=DB::select('SELECT * FROM jobs');
      return view('applyForm',['names'=>$names],['data'=>$data]);
    }

    public function applySubmit(Request $request)
    {
        $name=$request->name;
        $email=$request->email;
        $phone_number=$request->phone_number;
        $position=$request->position;
        $transfer=$request->transfer;
        $desc =$request->desc;
        $resume=$request->resume;
        $id=$request->id;

        $app=new Applicants;
        $app->name=$name;
        $app->email=$email;
        $app->phone_number=$phone_number;
        $app->position=$position;
        $app->transfer=$transfer;
        $app->desc =$desc;
        $app->resume=$resume;
        $app->user_id=$id;

        $app->save();

        return redirect()->route('message-success');
    }

    public function userApplication()
    {
        $applications=DB::table('applicants')->select('position','transfer','desc','resume','status')->where('user_id',Auth()->user()->id)
        ->get();
        $user_id = DB::table('applicants')->select('user_id')->where('user_id', '=', Auth()->user()->id)->value('user_id');
        return view('user-application',['applications'=>$applications,'user_id'=>$user_id]);
    } 
    public function profile(){
       
        return view('profile');
    }
    public function success(){
       
        return view('success');
    }
    public function messageSuccess(){
       
        return view('message-success');
    }
    public function updateProfile(Request $request){
        $user_data = User::find($request->id);
       if($user_data !=null){
        $user_data->name = $request->name;
        $user_data->email = $request->email;
        $user_data->password = Hash::make($request->password);
        $user_data->update();
        return redirect()->route('success');
       }
       else{
        return redirect()->route('error');
       }
    }
    public function notifications(){
       
        return view('notifications');
    }
    public function error(){
       
        return view('error');
    }
};
