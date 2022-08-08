@extends('adminLayouts.app')

@section('admin-title')
    Admin | Services | Edit
@endsection

@section('admin-content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="about-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <h4 class="m-0 text-uppercase">Services | Edit</h4>
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
                    <h5 class="p-0 m-0">Edit service</h5>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ url('/admin/service/update/'.$service->id) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Name (AR)</label>
                            <input type="text" class="form-control" name="name_ar" value="{{ $service->name_ar }}">
                        </div>
                        <div class="form-group">
                            <label>Name (EN)</label>
                            <input type="text" class="form-control" name="name_en" value="{{ $service->name_en }}">
                        </div>
                        <div class="form-group">
                            <label>Description (AR)</label>
                            <textarea class="form-control ckeditor" name="desc_ar" value="{{ $service->desc_ar }}" rows="5">{{ $service->desc_ar }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Description (EN)</label>
                            <textarea class="form-control ckeditor" name="desc_en" value="{{ $service->desc_en }}" rows="5">{{ $service->desc_en }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" class="form-control" name="image">
                        </div>
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

@section('admin-js')
<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
       $('.ckeditor').ckeditor();
    });
</script>
@endsection
