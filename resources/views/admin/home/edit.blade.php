@extends('adminLayouts.app')

@section('admin-title')
    Admin | Home | Edit
@endsection

@section('admin-content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="home-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <h4 class="m-0 text-uppercase">Home | Edit</h4>
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
                    <h5>Edit home form</h5>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ url('/admin/home/update') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Projects description (EN)</label>
                            <textarea type="text" class="form-control" name="proj_desc_en" value="{{ $home->projects_desc }}" rows="5">{{ $home->projects_desc }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Projects description (AR)</label>
                            <textarea type="text" class="form-control" name="proj_desc_ar" value="{{ $home->projects_desc_ar }}" rows="5">{{ $home->projects_desc_ar }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Establish date</label>
                            <input type="number" class="form-control" name="establish" value="{{ $home->establish }}">
                        </div>
                        <div class="form-group">
                            <label>Projects number</label>
                            <input type="number" class="form-control" name="projects" value="{{ $home->projects }}">
                        </div>
                        <div class="form-group">
                            <label>Employees number</label>
                            <input type="number" class="form-control" name="employees" value="{{ $home->employees }}">
                        </div>
                        <div class="form-group">
                            <label>Customers number</label>
                            <input type="number" class="form-control" name="customers" value="{{ $home->customers }}">
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
