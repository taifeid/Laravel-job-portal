@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="card-header">
                    Edit job
                    </div>
                    <form action="/admin/updateJob" method="POST">
                        @csrf
                        <input type="hidden"  class="form-control" id="id" name="id"value="{{ $job_id  }}">
                        <div class="form-group">
                            <label for="name">Position</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $data->name }}" required>
                          </div>
                        <div class="form-group">
                          <label for="experience">Experience</label>
                          <input type="text" class="form-control" name="experience" value="{{ $data->experience }}" id="experience" placeholder="name@example.com" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" class="form-control" name="description" value="{{ $data->description }}"  id="description" required>
                          </div>
                          <div class="form-group">
                            <label for="city">City</label>
                            <input type="text" class="form-control" name="city" value="{{ $data->city }}"  id="city" required>
                          </div>
                          <div class="form-group">
                            <label for="by">By</label>
                            <input type="by" class="form-control" name="by"  value="{{ $data->by }}"  id="by" readonly>
                          </div>
                        <button class="btn btn-primary" type="submit">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection