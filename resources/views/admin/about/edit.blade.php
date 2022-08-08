@extends('adminLayouts.app')

@section('admin-title')
    Admin | About | Edit
@endsection

@section('admin-content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="about-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <h4 class="m-0 text-uppercase">About | Edit</h4>
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
                    <h5 class="p-0 m-0">Edit about form</h5>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ url('/admin/about/update') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Company name (AR)</label>
                            <input type="text" class="form-control" name="comp_name_ar" value="{{ $about->comp_name_ar }}">
                        </div>
                        <div class="form-group">
                            <label>Company name (EN)</label>
                            <input type="text" class="form-control" name="comp_name_en" value="{{ $about->comp_name_en }}">
                        </div>
                        <div class="form-group">
                            <label>Description (AR)</label>
                            <textarea class="form-control ckeditor" name="desc_ar" value="{{ $about->desc_ar }}" rows="5">{{ $about->desc_ar }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Description (EN)</label>
                            <textarea class="form-control ckeditor" name="desc_en" value="{{ $about->desc_en }}" rows="5">{{ $about->desc_en }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Founders message (AR)</label>
                            <textarea type="text" class="form-control" name="founders_msg_ar" value="{{ $about->founders_msg_ar }}" rows="5">{{ $about->founders_msg_ar }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Founders message (EN)</label>
                            <textarea type="text" class="form-control" name="founders_msg_en" value="{{ $about->founders_msg_en }}" rows="5">{{ $about->founders_msg_en }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>About background</label>
                            <input type="file" class="form-control" name="background">
                        </div>
                        <div class="form-group">
                            <label>Founder 1 image</label>
                            <input type="file" class="form-control" name="founder_1_img">
                        </div>
                        <div class="form-group">
                            <label>Founder 1 image</label>
                            <input type="file" class="form-control" name="founder_2_img">
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
