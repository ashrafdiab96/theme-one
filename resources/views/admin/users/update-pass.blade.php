@extends('adminLayouts.app')

@section('admin-title')
    Admin | User | Edit Password
@endsection

@section('admin-content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="about-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <h4 class="m-0 text-uppercase">Users | Edit Password</h4>
                        </div>
                        <div class="col-md-6">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="p-0 m-0">Edit user password</h5>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ url('/admin/user/updatePass/'.$user->id) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>New Password</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-success btn-sm btn-flat">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
