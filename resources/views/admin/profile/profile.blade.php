@extends('adminLayouts.app')

@section('admin-title')
    Admin | Profile | Show
@endsection

@section('admin-content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="profile-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <h2 class="m-0 text-uppercase">Profile</h2>
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
                            <h3 class="card-title m-0">Profile page content</h3>
                        </div>
                        <div class="col-md-3">
                            <a class="btn btn-warning" href="{{ url('admin/profile/edit') }}">Edit</a>
                        </div>
                    </div>

                </div>

                <div class="card-body">
                    @if(session()->has('profile_success'))
                        <div class="alert alert-success" role="alert">
                            {{ session()->get('profile_success') }}
                        </div>
                    @endif
                    @if(session()->has('profile_fail'))
                        <div class="alert alert-danger" role="alert">
                            {{ session()->get('profile_fail') }}
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
                                        <th class="w-25">Missions (AR)</th>
                                        <td class="w-75">{!! $profile->missions_ar !!}</td>
                                    </tr>
                                    <tr>
                                        <th class="w-25">Missions (EN)</th>
                                        <td class="w-75">{!! $profile->missions_en !!}</td>
                                    </tr>
                                    <tr>
                                        <th class="w-25">Vision (AN)</th>
                                        <td class="w-75">{!! $profile->vision_ar !!}</td>
                                    </tr>
                                    <tr>
                                        <th class="w-25">Vision (EN)</th>
                                        <td class="w-75">{!! $profile->vision_en !!}</td>
                                    </tr>
                                    <tr>
                                        <th class="w-25">Strength (AR)</th>
                                        <td class="w-75">{!! $profile->strength_ar !!}</td>
                                    </tr>
                                    <tr>
                                        <th class="w-25">Strength (EN)</th>
                                        <td class="w-75">{!! $profile->strength_en !!}</td>
                                    </tr>
                                    <tr>
                                        <th class="w-25">Profile page background</th>
                                        <td class="w-75">
                                            <img class="profile-img-bc" src="{{ asset('assets/upload/profile/'.$profile->background) }}" alt="profile page background">
                                        </td>
                                    </tr>
                                    <tr>
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
