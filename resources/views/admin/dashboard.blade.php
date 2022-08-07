@extends('adminLayouts.app')

@section('admin-title')
    Admin | Dashboard
@endsection

@section('admin-content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-md-6">
                    <h2 class="m-0 text-uppercase">Dashboard</h2>
                </div>
                <div class="col-md-6">

                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{ $services_count }}</h3>
                            <p>Services</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{ $projects_count }}</h3>
                            <p>Projects</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>{{ $blogs_count }}</h3>
                            <p>Blogs</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header border-0">
                            <h3 class="card-title">Recent Services</h3>
                            <div class="card-tools">
                                <a href="#" class="btn btn-tool btn-sm" title="show">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </div>
                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-striped table-valign-middle">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name (EN)</th>
                                        <th>Name (AR)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($last_services as $service)
                                    <tr>
                                        <td>{{ $service->id }}</td>
                                        <td>{{ $service->name_en }}</td>
                                        <td>{{ $service->name_ar }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header border-0">
                            <h3 class="card-title">Recent Projects</h3>
                            <div class="card-tools">
                                <a href="#" class="btn btn-tool btn-sm" title="show">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </div>
                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-striped table-valign-middle">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name (EN)</th>
                                        <th>Name (AR)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($last_projects as $projects)
                                    <tr>
                                        <td>{{ $projects->id }}</td>
                                        <td>{{ $projects->name_en }}</td>
                                        <td>{{ $projects->name_ar }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header border-0">
                            <h3 class="card-title">Recent Blogs</h3>
                            <div class="card-tools">
                                <a href="#" class="btn btn-tool btn-sm" title="show">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </div>
                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-striped table-valign-middle">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name (EN)</th>
                                        <th>Name (AR)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($last_blogs as $blog)
                                    <tr>
                                        <td>{{ $blog->id }}</td>
                                        <td>{{ $blog->title_en }}</td>
                                        <td>{{ $blog->title_ar }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header border-0">
                            <h3 class="card-title">Recent Users</h3>
                            <div class="card-tools">
                                <a href="#" class="btn btn-tool btn-sm" title="show">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </div>
                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-striped table-valign-middle">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($last_users as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
