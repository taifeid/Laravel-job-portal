@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <div class="container">
                        <div class="row">
                          <div class="col-12">
                            <table class="table table-bordered">
                              <thead>
                                <tr>
                                  <th scope="col">Position</th>
                                  <th scope="col">Experience</th>
                                  <th scope="col">Description</th>
                                  <th scope="col">City</th>
                                  <th scope="col">By</th>
                                  <th scope="col"></th>
                                </tr>
                              </thead>
                              @foreach ($jobs as $item)
                              <tbody>
                                <tr >
                                  <th scope="row">{{ $item->name}}</th>
                                  <td>{{ $item->experience }}</td>
                                  <td>{{ $item->description }}</td>
                                  <td>{{ $item->city}}</td>
                                  <td>{{ $item->by }}</td>
                                  <td>
                                    @if (Auth::user()->role == 1)
                                    <a href="jobDesc/{{$item->id}}" type="hidden" hidden><button type="button" class="btn btn-primary"><i class="fa fa-paper-plane"></i></button></a>
                                    @else
                                    <a href="jobDesc/{{$item->id}}"><button type="button" class="btn btn-primary"><i class="fa fa-paper-plane"></i></button></a>
                                    @endif
                                  </td>
                                </tr>
                              </tbody>
                              @endforeach()
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