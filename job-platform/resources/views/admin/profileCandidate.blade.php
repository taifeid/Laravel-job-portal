@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="card-header">
                        Profile Candidate
                    </div>
                    <form action="">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="name" class="form-control" id="name" name="name"value="{{ $data->name }}" readonly>
                          </div>
                        <div class="form-group">
                          <label for="email">Email address</label>
                          <input type="email" class="form-control" name="email" value="{{ $data->email }}" id="email" placeholder="name@example.com" readonly>
                        </div>
                        <div class="form-group">
                            <label for="phone_number">Phone number</label>
                            <input type="text" class="form-control" name="phone_number" value="{{ $data->phone_number }}" id="phone_number"  readonly>
                          </div>
                          <br />
                          <br />
                       <a href="{{ url('admin/manageApplication') }}"><button class="btn btn-light" type="button">Go back</button></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection