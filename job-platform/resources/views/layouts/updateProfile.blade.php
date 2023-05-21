@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="card-header">
                    Profile
                    </div>
                    <form action="/updateProfile" method="POST">
                        @csrf
                        <input type="hidden"  class="form-control" id="id" name="id"value="{{ Auth()->user()->id }}">

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="name" class="form-control" id="name" name="name"value="{{ Auth()->user()->name }}" required>
                          </div>
                        <div class="form-group">
                          <label for="email">Email address</label>
                          <input type="email" class="form-control" name="email" value="{{ Auth()->user()->email }}" id="email" placeholder="name@example.com" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password" required>
                          </div>
                          <div class="form-group">
                            <label for="retyPassword">Rety password</label>
                            <input type="password" class="form-control" name="retyPassword" id="retyPassword" required>
                          </div>
                        <button class="btn btn-primary" type="submit">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection