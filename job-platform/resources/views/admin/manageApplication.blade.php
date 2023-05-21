@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h3>{{ __('Admin panel mange applicants') }}</h3></div>

                <div class="card-body">
                    <div class="container">
                        <div class="row">
                          <div class="col-12">
                            <table class="table table-bordered">
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
                            <td>
                               <!--view profile --><a href="profileCandidate/{{$app->id}}"><button type="button" class="btn btn-primary"><i class="fa fa-user"></i></button></a>
                              <!-- accept--><a href="updateStatusApprove/{{$app->id}}"><button type="button" class="btn btn-success"><i class="fa fa-check"></i></button></a>
                              <!-- reject--> <a href="updateStatusReject/{{$app->id}}"><button type="button" class="btn btn-danger"><i class="fa fa-times"></i></button></a>
                            </td>
                          </tr>
                        </tbody>
                        @endforeach
                            </table>
                          </div>
                        </div>
                      </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection