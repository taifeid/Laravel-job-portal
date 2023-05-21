<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Applicants;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminHomeController extends Controller
{
    public function index(){
        return view("admin.home");
       }

       public function manageJob(){
        $jobs=DB::select('SELECT * FROM jobs');
        return view('admin.manageJob',['jobs'=>$jobs]);
       }
       public function editJob($id){
        $data=Job::find($id);
        $job_id= $id;
        return view('admin.editJob',['data'=>$data,'job_id'=>$job_id]);
       }

       public function updateJob(Request $request){

        $job=Job::find($request->id);
        $job->name = $request->name;
        $job->experience = $request->experience;
        $job->description = $request->description;
        $job->city = $request->city;
        $job->update();
        
        $jobs=DB::select('SELECT * FROM jobs');
        return view('admin.managejob',['jobs'=>$jobs]);
       }

       public function delete($id){
        $job=Job::find($id);
        $job->delete();
        
        $jobs=DB::select('SELECT * FROM jobs');
        return redirect()->route('admin_manageJob')->with(['jobs'=>$jobs]);

       }
       
       public function indexaddJob(){
        return view("admin.addJob");
       }

       public function addJob(Request $request){

        $job=new Job;
        $job->name = $request->name;
        $job->experience = $request->experience;
        $job->description = $request->description;
        $job->city = $request->city;
        $job->qualification = $request->qualification;
        $job->by=$request->by;

        $job->save();

        $jobs=DB::select('SELECT * FROM jobs');
        return view('admin.managejob',['jobs'=>$jobs]);
       }

       public function manageApplication(){
        $applications =DB::select('SELECT * FROM applicants');
        return view('admin.manageApplication',['applications'=>$applications]);
       }

       public function profileCandidate($id){
        $data =Applicants::find($id);
        return view('admin.profileCandidate',['data'=>$data]);
       } 

       public function  updateStatusApprove($id){
        $app =Applicants::find($id);
        $app->status='Approve'; 
        $app->save();
        $applications =DB::select('SELECT * FROM applicants');
        return redirect()->route('manageApplication')->with( ['applications'=>$applications]);

       } 

       public function  updateStatusReject($id){
        $app =Applicants::find($id);
        $app->status='Reject'; 
        $app->save();
        $applications =DB::select('SELECT * FROM applicants');
        return redirect()->route('manageApplication')->with( ['applications'=>$applications]);
       } 
};
