@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="card-header">
                    Add new job
                    </div>
                    <form action="addJob" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Position</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                          </div>
                        <div class="form-group">
                          <label for="experience">Experience</label>
                          <input type="text" class="form-control" name="experience"  id="experience"  required>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" class="form-control" name="description"  id="description" required>
                          </div>
                          <div class="form-group">
                            <label for="city">City</label>
                            <input type="text" class="form-control" name="city" id="city" required>
                          </div>
                          <div class="form-group">
                            <label for="by">Qualification</label>
                            <input type="by" class="form-control" name="qualification" id="qualification">
                          </div>
                          <div class="form-group">
                            <label for="by">By</label>
                            <input type="by" class="form-control" name="by" id="by">
                          </div>
                        <button class="btn btn-primary" type="submit">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection