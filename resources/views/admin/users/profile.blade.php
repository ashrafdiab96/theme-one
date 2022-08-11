@extends('adminLayouts.app')

@section('admin-title')
    Admin | Profile | Show
@endsection

@section('admin-content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="users-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <h2 class="m-0 text-uppercase">Profile</h2>
                        </div>
                        <div class="col-md-6">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <div class="row align align-items-center">
                        <div class="col-md-6">
                            <h5 class="p-0 m-0">Edit Profile</h5>
                        </div>
                        <div class="col-md-6 text-right">
                            <a class="btn btn-warning btn-sm btn-flat" data-toggle="modal" data-target="#showBcModal">
                                <i class="far fa-edit"></i>
                                Edit Password
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @if(session()->has('prof_success'))
                        <div class="alert alert-success" role="alert">
                            {{ session()->get('prof_success') }}
                        </div>
                    @endif
                    @if(session()->has('prof_error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session()->get('prof_errors') }}
                        </div>
                    @endif
                    @if(session()->has('prof_pass_success'))
                        <div class="alert alert-success" role="alert">
                            {{ session()->get('prof_pass_success') }}
                        </div>
                    @endif
                    @if(session()->has('prof_pass_error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session()->get('prof_pass_error') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ url('/admin/user/edit-profile') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="name" value="{{ $user->name }}">
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="number" class="form-control" name="phone" value="{{ $user->phone }}">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" value="{{ $user->email }}">
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-success btn-sm btn-flat">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
    <div class="modal fade" id="showBcModal" tabindex="-1" role="dialog" aria-labelledby="showBcModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title">Edit Password</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ url('/admin/user/edit-profile-password') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Update</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
