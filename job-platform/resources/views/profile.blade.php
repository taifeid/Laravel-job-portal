@extends('layouts.app')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Account Settings /</span> Account</h4>

  <div class="row">
    <div class="col-md-12">
      <ul class="nav nav-pills flex-column flex-md-row mb-3">
        <li class="nav-item">
          <a class="nav-link active" href="javascript:void(0);"><i class="bx bx-user me-1"></i> Account</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('notifications') }}"
            ><i class="bx bx-bell me-1"></i> Notifications</a
          >
        </li>
      </ul>
      <div class="card mb-4">
        <h5 class="card-header">Profile Details</h5>
        <!-- Account -->
        <hr class="my-0" />
        <div class="card-body">
          <form id="formAccountSettings" method="POST" action="/updateProfile">
            @csrf
            <div class="row">
              <div class="mb-3 col-md-6">
                <label for="name" class="form-label">Name</label>
                <input
                  class="form-control"
                  type="text"
                   id="name"
                  name="name"
                 value="{{ Auth()->user()->name }}" required
                />
              </div>
              <div class="mb-3 col-md-6">
                <label for="email" class="form-label">E-mail</label>
                <input
                  class="form-control"
                  type="text"
                 name="email" 
                 value="{{ Auth()->user()->email }}" 
                 id="email" 
                 placeholder="name@example.com" 
         required
                />
              </div>
              <div class="mb-3 col-md-6">
                <label class="form-label" for="phoneNumber">Phone Number</label>
                <div class="input-group input-group-merge">
                  <span class="input-group-text">(+966)</span>
                  <input
                    type="text"
                    id="phoneNumber"
                    name="phoneNumber"
                    class="form-control"
                    placeholder="053 555 0111"
                  />
                </div>
              </div>
              <div class="mb-3 col-md-6">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" name="address" placeholder="Address" />
              </div>
                            <div class="mb-3 col-md-6">
                <label for="password" class="form-label">Password</label>
                <input
                  class="form-control"
                  type="password"
                  id="password"
                  name="password"
                  autofocus
                />
              </div>
              <div class="mb-3 col-md-6">
                <label for="retyPassword" class="form-label">Rety retyPassword</label>
                <input
                  class="form-control"
                  type="retyPassword"
                  id="retyPassword"
                  name="retyPassword"
                  autofocus
                />
              </div>
            </div>
            <div class="mt-2">
              <button type="submit" class="btn btn-primary me-2">Save changes</button>
            </div>
          </form>
        </div>
        <!-- /Account -->
      </div>
    </div>
  </div>
</div>
@endsection