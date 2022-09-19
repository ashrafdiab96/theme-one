@extends('adminLayouts.app')

@section('admin-title')
    Admin | Projects Types | Show
@endsection

@section('admin-content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="slider-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <h2 class="m-0 text-uppercase">Projects Types</h2>
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
                            <h3 class="card-title p-0 m-0">Projects Types</h3>
                        </div>
                        <div class="col-md-6 text-right">
                            <a class="btn btn-info btn-sm btn-flat" href="{{ url('admin/projects-types/new') }}">
                                <i class="fas fa-plus-circle"></i>
                                Add
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    @if(session()->has('proj_type_success'))
                        <div class="alert alert-success" role="alert">
                            {{ session()->get('proj_type_success') }}
                        </div>
                    @endif
                    @if(session()->has('proj_type_fail'))
                        <div class="alert alert-danger" role="alert">
                            {{ session()->get('proj_type_fail') }}
                        </div>
                    @endif
                    @if(session()->has('proj_type_deleted'))
                        <div class="alert alert-success" role="alert">
                            {{ session()->get('proj_type_deleted') }}
                        </div>
                    @endif
                    @if(session()->has('proj_type_not_deleted'))
                        <div class="alert alert-danger" role="alert">
                            {{ session()->get('proj_type_not_deleted') }}
                        </div>
                    @endif
                    @if(session()->has('proj_type_updated'))
                        <div class="alert alert-success" role="alert">
                            {{ session()->get('proj_type_updated') }}
                        </div>
                    @endif
                    @if(session()->has('proj_type_not_updated'))
                        <div class="alert alert-danger" role="alert">
                            {{ session()->get('proj_type_not_updated') }}
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
                                            <th>Control Tools</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($projets as $projet)
                                            <tr>
                                                <td>{{ $projet->id }}</td>
                                                <td>{{ $projet->name_ar }}</td>
                                                <td>{{ $projet->name_en }}</td>
                                                <td>
                                                    <a class="btn btn-warning btn-sm btn-flat" href="{{ url('admin/projects-types/edit/'.$projet->id) }}">
                                                        <i class="fas fa-edit"></i>
                                                        Edit
                                                    </a>
                                                    <button class="btn btn-danger btn-sm btn-flat" onclick="deleteSlider({{ $projet->id }})">
                                                        <i class="fas fa-minus-circle"></i>
                                                        Delete
                                                    </button>
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
</div>
@endsection

@section('admin-js')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function deleteSlider(id) {
        Swal.fire({
            title: 'Are you sure you want to delete this projet type?',
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
                    url: "projects-types/delete/"+id,
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
