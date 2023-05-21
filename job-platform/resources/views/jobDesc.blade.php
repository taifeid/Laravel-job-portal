@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Job Description') }}</div>
                <div class="card-body">
          
                    <div class="card text-center">
                        <div class="card-header">
                            Job Description for {{ $data->name }} offerd by : <h5>{{ $data->by }}</h5>
                        </div>
                        <div class="card-body">
                          <h5 class="card-title">in {{ $data->city }}</h5>
                          <p class="card-text">Requirements {{ $data->description }} </p>
                          <h5 class="card-title">job qualification and requirement</h5>
                          <p class="card-text">* {{ $data->experience }}  yeas experience in this feild</p>
                          <p class="card-text">* {{ $data->qualification }} </p>
                          <a href="/dashbord" class="btn btn-light">Go back</a>
                          @if(Auth::check() && Auth::user()->role == 1)
                          <a href="/jobDesc/applyForm/{{ $data->id }}" class="btn btn-primary" type="hidden" hidden>Apply</a>
                          @else
                          <a href="/jobDesc/applyForm/{{ $data->id }}" class="btn btn-primary">Apply</a>
                          @endif
                          </div>
                        <div class="card-footer text-muted">
                           
                        </div>
                      </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection