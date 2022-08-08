@extends('adminLayouts.app')

@section('admin-title')
    Admin | Contacts | Edit
@endsection

@section('admin-content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="contacts-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <h4 class="m-0 text-uppercase">Contacts | Edit</h4>
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
                    <h5 class="p-0 m-0">Edit contacts form</h5>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ url('/admin/contacts/update') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="number" class="form-control" name="phone" value="{{ $contacts->phone }}">
                        </div>
                        <div class="form-group">
                            <label>Mobile</label>
                            <input type="number" class="form-control" name="mobile" value="{{ $contacts->mobile }}">
                        </div>
                        <div class="form-group">
                            <label>Fax</label>
                            <input type="number" class="form-control" name="fax" value="{{ $contacts->fax }}">
                        </div>
                        <div class="form-group">
                            <label>Address (AR)</label>
                            <input type="text" class="form-control" name="address_ar" value="{{ $contacts->address_ar }}">
                        </div>
                        <div class="form-group">
                            <label>Address (EN)</label>
                            <input type="text" class="form-control" name="address_en" value="{{ $contacts->address_en }}">
                        </div>
                        <div class="form-group">
                            <label>Why Us (AR)</label>
                            <textarea class="form-control ckeditor" name="why_us_ar" value="{{ $contacts->why_us_ar }}" rows="5">{{ $contacts->why_us_ar }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Why Us (EN)</label>
                            <textarea class="form-control ckeditor" name="why_us" value="{{ $contacts->why_us }}" rows="5">{{ $contacts->why_us }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" value="{{ $contacts->email }}">
                        </div>
                        <div class="form-group">
                            <label>Facebook URL</label>
                            <input type="text" class="form-control" name="fb_url" value="{{ $contacts->fb_url }}">
                        </div>
                        <div class="form-group">
                            <label>Twitter URL</label>
                            <input type="text" class="form-control" name="tw_url" value="{{ $contacts->tw_url }}">
                        </div>
                        <div class="form-group">
                            <label>Instagram URL</label>
                            <input type="text" class="form-control" name="in_url" value="{{ $contacts->in_url }}">
                        </div>
                        <div class="form-group">
                            <label>Linkedin URL</label>
                            <input type="text" class="form-control" name="ln_url" value="{{ $contacts->ln_url }}">
                        </div>
                        <div class="form-group">
                            <label>Youtube URL</label>
                            <input type="text" class="form-control" name="yu_url" value="{{ $contacts->yu_url }}">
                        </div>
                        <div class="form-group">
                            <label>Contacts background</label>
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
