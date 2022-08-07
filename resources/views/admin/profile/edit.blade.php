@extends('adminLayouts.app')

@section('admin-title')
    Admin | Profile | Edit
@endsection

@section('admin-content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="profile-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <h4 class="m-0 text-uppercase">Profile | Edit</h4>
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
                    <h5>Edit profile form</h5>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ url('/admin/profile/update') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Missions (AR)</label>
                            <textarea class="form-control ckeditor" name="missions_ar" value="{{ $profile->missions_ar }}" rows="5">{{ $profile->missions_ar }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Missions (EN)</label>
                            <textarea class="form-control ckeditor" name="missions_en" value="{{ $profile->missions_en }}" rows="5">{{ $profile->missions_en }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Vision (AR)</label>
                            <textarea class="form-control ckeditor" name="vision_ar" value="{{ $profile->vision_ar }}" rows="5">{{ $profile->vision_ar }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Vision (EN)</label>
                            <textarea class="form-control ckeditor" name="vision_en" value="{{ $profile->vision_en }}" rows="5">{{ $profile->vision_en }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Strength (AR)</label>
                            <textarea class="form-control ckeditor" name="strength_ar" value="{{ $profile->strength_ar }}" rows="5">{{ $profile->strength_ar }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Strength (EN)</label>
                            <textarea class="form-control ckeditor" name="strength_en" value="{{ $profile->strength_en }}" rows="5">{{ $profile->strength_en }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>profile background</label>
                            <input type="file" class="form-control" name="background">
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

@section('admin-js')
<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
       $('.ckeditor').ckeditor();
    });
</script>
@endsection
