@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="card-header">
                        Apply job for {{ $names->name }}
                    </div>
                    <form action="/applySubmit" method="POST">
                        @csrf
                        <input type="hidden"  class="form-control" id="id" name="id"value="{{ Auth()->user()->id }}">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="name" class="form-control" id="name" name="name"value="{{ Auth()->user()->name }}" required>
                          </div>
                          <div class="form-group">
                            <label for="phone_number">Phone number</label>
                            <input type="number" class="form-control" name="phone_number" id="phone_number" required>
                          </div>
                        <div class="form-group">
                          <label for="email">Email address</label>
                          <input type="email" class="form-control" name="email" value="{{ Auth()->user()->email }}" id="email" placeholder="name@example.com" required>
                        </div>
                        <div class="form-group">
                          <label for="position">Apply position</label>
                          <input type="text" class="form-control" name="position" value="{{$names->name }}" required>
                        </div>
                        <div class="form-group">
                            <label for="transfer">Are you ready to transfer to Riyadh؟</label>
                            <input type="text" class="form-control" name="transfer"  placeholder="yes/no" required>
                        </div>
                        </div>
                        <div class="form-group">
                          <label for="desc">Talk about you self?</label>
                          <textarea class="form-control" name="desc" id="desc" rows="4"></textarea>
                        </div>
                        <label for="resume" class="form-label">Uplode resume<small>*pdf , word</small></label>
                         <input class="form-control form-control-sm" name="resume" id="resume" type="file"  accept=".pdf,.doc,.docx"/> 
                        <button class="btn btn-primary" type="submit">Apply</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection