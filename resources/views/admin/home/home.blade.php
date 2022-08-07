@extends('adminLayouts.app')

@section('admin-title')
    Admin | Home | Show
@endsection

@section('admin-content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="home-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <h2 class="m-0 text-uppercase">Home</h2>
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
                            <h3 class="card-title m-0">Home page content</h3>
                        </div>
                        <div class="col-md-3">
                            <a class="btn btn-warning" href="{{ url('admin/home/edit') }}">Edit</a>
                        </div>
                    </div>

                </div>

                <div class="card-body">
                    @if(session()->has('home_success'))
                        <div class="alert alert-success" role="alert">
                            {{ session()->get('home_success') }}
                        </div>
                    @endif
                    @if(session()->has('home_fail'))
                        <div class="alert alert-danger" role="alert">
                            {{ session()->get('home_fail') }}
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
                                        <th class="w-25">Projects description (EN)</th>
                                        <td class="w-75">{{ $home->projects_desc }}</td>
                                    </tr>
                                    <tr>
                                        <th class="w-25">Projects description (AR)</th>
                                        <td class="w-75">{{ $home->projects_desc_ar }}</td>
                                    </tr>
                                    <tr>
                                        <th class="w-25">Establish at</th>
                                        <td class="w-75">{{ $home->establish }}</td>
                                    </tr>
                                    <tr>
                                        <th class="w-25">Projects number</th>
                                        <td class="w-75">{{ $home->projects }}</td>
                                    </tr>
                                    <tr>
                                        <th class="w-25">Employees number</th>
                                        <td class="w-75">{{ $home->employees }}</td>
                                    </tr>
                                    <tr>
                                        <th class="w-25">Customers number</th>
                                        <td class="w-75">{{ $home->customers }}</td>
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
