@extends('adminLayouts.app')

@section('admin-title')
    Admin | Project Type | Edit
@endsection

@section('admin-content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="slider-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <h4 class="m-0 text-uppercase">Project Type | Edit</h4>
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
                    <h5 class="p-0 m-0">Edit new project type</h5>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ url('/admin/projects-types/update/'.$project->id) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Name (AR)</label>
                            <input type="text" class="form-control" name="name_ar" value="{{ $project->name_ar }}">
                        </div>
                        <div class="form-group">
                            <label>Name (EN)</label>
                            <input type="text" class="form-control" name="name_en" value="{{ $project->name_en }}">
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
