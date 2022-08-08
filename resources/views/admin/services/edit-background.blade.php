@extends('adminLayouts.app')

@section('admin-title')
    Admin | Services | Edit background
@endsection

@section('admin-content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="service-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <h4 class="m-0 text-uppercase">Services | Edit background</h4>
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
                    <h5 class="p-0 m-0">Edit service background</h5>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ url('/admin/service/updateBack/') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Background</label>
                            <input type="file" class="form-control" name="background">
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
