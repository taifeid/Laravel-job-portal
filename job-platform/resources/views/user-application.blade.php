@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('My application') }}</div>
                <div class="card-body">
                  @if( $user_id != Auth()->user()->id)
                  <div class="alert alert-danger" role="alert">
                    <h5>You didn't have applicate yet!</h5>
                  </div>
                  @else
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Position</th>
                            <th scope="col">Transfer</th>
                            <th scope="col">Desc</th>
                            <th scope="col">Resume</th>
                            <th scope="col">Status</th>
                          </tr>
                        </thead>
                        @foreach ($applications as $app)
                        <tbody>
                          <tr>
                            <th scope="row">{{ $app->position }}</th>
                            <td>{{ $app->transfer }}</td>
                            <td>{{ $app->desc }}</td>
                            <td>{{ $app->resume }}</td>
                            <td>{{ $app->status }}</td>
                          </tr>
                        </tbody>
                        @endforeach
                      </table>
                      @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


