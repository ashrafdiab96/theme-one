@extends('adminLayouts.app')

@section('admin-title')
    Admin | Projects | Show
@endsection

@section('admin-content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="project-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <h2 class="m-0 text-uppercase">Projects</h2>
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
                        <div class="col-md-6">
                            <h3 class="card-title p-0 m-0">Projects</h3>
                        </div>
                        <div class="col-md-6 text-right">
                            <a class="btn btn-info btn-sm btn-flat" href="{{ url('admin/project/new') }}">
                                <i class="fas fa-plus-circle"></i>
                                Add
                            </a>
                            <button type="button" class="btn btn-secondary btn-sm btn-flat" data-toggle="modal" data-target="#showBcModal">
                                <i class="far fa-eye"></i>
                                Show background
                            </button>
                            <a class="btn btn-primary btn-sm btn-flat" href="{{ url('admin/project/editBack') }}">
                                <i class="far fa-edit"></i>
                                Edit background
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    @if(session()->has('project_success'))
                        <div class="alert alert-success" role="alert">
                            {{ session()->get('project_success') }}
                        </div>
                    @endif
                    @if(session()->has('project_fail'))
                        <div class="alert alert-danger" role="alert">
                            {{ session()->get('project_fail') }}
                        </div>
                    @endif
                    @if(session()->has('project_deleted'))
                        <div class="alert alert-success" role="alert">
                            {{ session()->get('project_deleted') }}
                        </div>
                    @endif
                    @if(session()->has('project_not_deleted'))
                        <div class="alert alert-danger" role="alert">
                            {{ session()->get('project_not_deleted') }}
                        </div>
                    @endif
                    @if(session()->has('project_updated'))
                        <div class="alert alert-success" role="alert">
                            {{ session()->get('project_updated') }}
                        </div>
                    @endif
                    @if(session()->has('project_not_updated'))
                        <div class="alert alert-danger" role="alert">
                            {{ session()->get('project_not_updated') }}
                        </div>
                    @endif
                    @if(session()->has('bc_success'))
                        <div class="alert alert-success" role="alert">
                            {{ session()->get('bc_success') }}
                        </div>
                    @endif
                    @if(session()->has('bc_fail'))
                        <div class="alert alert-danger" role="alert">
                            {{ session()->get('bc_fail') }}
                        </div>
                    @endif
                    <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12 col-md-6"></div>
                            <div class="col-sm-12 col-md-6"></div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="example2" class="table table-bordered table-hover dataTable dtr-inline" aria-describedby="example2_info">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name (AR)</th>
                                            <th>Name (EN)</th>
                                            <th>Image</th>
                                            <th>Background</th>
                                            <th>Control Tools</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($projects as $project)
                                            <tr>
                                                <td>{{ $project->id }}</td>
                                                <td>{{ $project->name_ar }}</td>
                                                <td>{{ $project->name_en }}</td>
                                                <td>
                                                    <img src="{{ asset('assets/upload/projects/'.$project->image) }}" class="admin-service-img" alt="project image">
                                                </td>
                                                <td>
                                                    <img src="{{ asset('assets/upload/projects/'.$project->background) }}" class="admin-service-img" alt="project background">
                                                </td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-md-6 px-1">
                                                            <a class="btn btn-warning btn-sm btn-flat w-100" href="{{ url('admin/project/edit/'.$project->id) }}">
                                                                <i class="fas fa-edit"></i>
                                                                Edit
                                                            </a>
                                                        </div>
                                                        <div class="col-md-6 px-1">
                                                            <button class="btn btn-danger btn-sm btn-flat w-100" onclick="deleteproject({{ $project->id }})">
                                                                <i class="fas fa-minus-circle"></i>
                                                                Delete
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-2">
                                                        <div class="col-md-12 px-1">
                                                            <a class="btn btn-dark btn-sm btn-flat w-100" href="{{ url('/admin/project/gallery/'.$project->id) }}">
                                                                Project Gallery
                                                            </a>
                                                        </div>
                                                    </div>
                                                </td>
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
    </div>
    <div class="modal fade" id="showBcModal" tabindex="-1" role="dialog" aria-labelledby="showBcModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="{{ asset('assets/upload/projects/'.$home->projects_bc) }}" class="img-fluid" alt="project page background">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('admin-js')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function deleteproject(id) {
        Swal.fire({
            title: 'Are you sure you want to delete this project?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });
                $.ajax({
                    type: 'DELETE',
                    url: "project/delete/"+id,
                    data: {},
                    success: (data) => {
                        window.location.reload();
                    },
                    error: (data) => {
                        window.location.reload();
                    }
                });
            }
        });
    }
</script>
@endsection
