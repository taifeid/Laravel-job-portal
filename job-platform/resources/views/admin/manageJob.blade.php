@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h3>{{ __('Admin panel mange jobs') }}</h3></div>

                <div class="card-body">
                    <div class="container">
                        <div class="row">
                          <a href="indexaddJob"><button type="button" class="btn btn-success"><i class="fa fa-plus"></i>Add new job</button></a>
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
                                    <a href="editJob/{{$item->id}}"><button type="button" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i></button></a>
                                    <form method="POST" action="delete/{{ $item->id }}">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                    </form>
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