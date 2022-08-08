@extends('adminLayouts.app')

@section('admin-title')
    Admin | About | Show
@endsection

@section('admin-content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="about-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <h2 class="m-0 text-uppercase">About</h2>
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
                    <div class="row align align-items-center">
                        <div class="col-md-9">
                            <h3 class="card-title m-0">About page content</h3>
                        </div>
                        <div class="col-md-3">
                            <a class="btn btn-warning btn-sm btn-flat" href="{{ url('admin/about/edit') }}">Edit</a>
                        </div>
                    </div>

                </div>

                <div class="card-body">
                    @if(session()->has('about_success'))
                        <div class="alert alert-success" role="alert">
                            {{ session()->get('about_success') }}
                        </div>
                    @endif
                    @if(session()->has('about_fail'))
                        <div class="alert alert-danger" role="alert">
                            {{ session()->get('about_fail') }}
                        </div>
                    @endif

                    <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12 col-md-6"></div>
                            <div class="col-sm-12 col-md-6"></div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table table-bordered table-hover dataTable dtr-inline" aria-describedby="example2_info">
                                    <tr>
                                        <th class="w-25">Company name (AR)</th>
                                        <td class="w-75">{{ $about->comp_name_ar }}</td>
                                    </tr>
                                    <tr>
                                        <th class="w-25">Company name (EN)</th>
                                        <td class="w-75">{{ $about->comp_name_en }}</td>
                                    </tr>
                                    <tr>
                                        <th class="w-25">Description (AN)</th>
                                        <td class="w-75">{!! $about->desc_ar !!}</td>
                                    </tr>
                                    <tr>
                                        <th class="w-25">Description (EN)</th>
                                        <td class="w-75">{!! $about->desc_en !!}</td>
                                    </tr>
                                    <tr>
                                        <th class="w-25">Founders message (AR)</th>
                                        <td class="w-75">{{ $about->founders_msg_ar }}</td>
                                    </tr>
                                    <tr>
                                        <th class="w-25">Founders message (EN)</th>
                                        <td class="w-75">{{ $about->founders_msg_en }}</td>
                                    </tr>
                                    <tr>
                                        <th class="w-25">About page background</th>
                                        <td class="w-75">
                                            <img class="about-img-bc" src="{{ asset('assets/upload/about/'.$about->background) }}" alt="About page background">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="w-25">Founder 1 image</th>
                                        <td class="w-75">
                                            <img class="about-img" src="{{ asset('assets/upload/about/'.$about->founder_1_img) }}" alt="Founder image">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="w-25">Founder 2 image</th>
                                        <td class="w-75">
                                            <img class="about-img" src="{{ asset('assets/upload/about/'.$about->founder_2_img) }}" alt="Founder image">
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
