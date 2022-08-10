@extends('adminLayouts.app')

@section('admin-title')
    Admin | Blogs | Add
@endsection

@section('admin-content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="about-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <h4 class="m-0 text-uppercase">Blogs | Add</h4>
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
                    <h5 class="p-0 m-0">Add new blog</h5>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ url('/admin/blog/save') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Title (AR)</label>
                            <input type="text" class="form-control" name="title_ar">
                        </div>
                        <div class="form-group">
                            <label>Title (EN)</label>
                            <input type="text" class="form-control" name="title_en">
                        </div>
                        <div class="form-group">
                            <label>Content (AR)</label>
                            <textarea class="form-control ckeditor" name="content_ar" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Content (EN)</label>
                            <textarea class="form-control ckeditor" name="content_en" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" class="form-control" name="image">
                        </div>
                        <div class="form-group">
                            <label>Images Gallery</label>
                            <input type="file" class="form-control" name="images[]" multiple>
                        </div>
                        <div class="form-group">
                            <label>Background</label>
                            <input type="file" class="form-control" name="background">
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-success btn-sm btn-flat">Save</button>
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
