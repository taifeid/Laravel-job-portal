@extends('layouts.app')

@section('content')
                      <div class="card">
                        <h5 class="card-header">Jobs</h5>
                        <div class="table-responsive text-nowrap" id="horizontal-example">
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Position</th>
                                <th>Experience</th>
                                <th>Description</th>
                                <th>City</th>
                                <th>By</th>
                                <th>Status</th>
                                <th></th>
                              </tr>
                            </thead>
                            @foreach ($jobs as $item)
                            <tbody class="table-border-bottom-0">
                              <tr>
                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $item->name}}</strong></td>
                                <td>{{ $item->experience }}</td>
                                <td>{{ $item->description }}</td>
                                <td>{{ $item->city}}</td>
                                <td>{{ $item->by}}</td>
                                <td><span class="badge bg-label-primary me-1">Active</span></td>
                                <td>
                                  @if (Auth::user()->role == 1)
                                  <a href="jobDesc/{{$item->id}}" type="hidden" hidden><button type="button" class="btn btn-primary"><i class="fa fa-paper-plane"></i></button></a>
                                  @else
                                  <a href="jobDesc/{{$item->id}}"><button type="button" class="btn btn-primary"><i class="fa fa-paper-plane"></i></button></a>
                                  @endif
                                </td>
                              </tr>
                            </tbody>
                            @endforeach ()
                          </table>
                        </div>
                      </div>
@endsection
