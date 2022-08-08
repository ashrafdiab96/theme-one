@extends('adminLayouts.app')

@section('admin-title')
    Admin | Services | Show
@endsection

@section('admin-content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="services-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <h2 class="m-0 text-uppercase">Services</h2>
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
                            <h3 class="card-title p-0 m-0">Services</h3>
                        </div>
                        <div class="col-md-3">
                            <a class="btn btn-info btn-sm btn-flat" href="{{ url('admin/service/new') }}">
                                <i class="fas fa-plus-circle"></i>
                                Add
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    @if(session()->has('services_success'))
                        <div class="alert alert-success" role="alert">
                            {{ session()->get('services_success') }}
                        </div>
                    @endif
                    @if(session()->has('services_fail'))
                        <div class="alert alert-danger" role="alert">
                            {{ session()->get('services_fail') }}
                        </div>
                    @endif
                    @if(session()->has('services_deleted'))
                        <div class="alert alert-success" role="alert">
                            {{ session()->get('services_deleted') }}
                        </div>
                    @endif
                    @if(session()->has('services_not_deleted'))
                        <div class="alert alert-danger" role="alert">
                            {{ session()->get('services_not_deleted') }}
                        </div>
                    @endif
                    @if(session()->has('service_updated'))
                        <div class="alert alert-success" role="alert">
                            {{ session()->get('service_updated') }}
                        </div>
                    @endif
                    @if(session()->has('service_not_updated'))
                        <div class="alert alert-danger" role="alert">
                            {{ session()->get('service_not_updated') }}
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
                                        @foreach ($services as $service)
                                            <tr>
                                                <td>{{ $service->id }}</td>
                                                <td>{{ $service->name_ar }}</td>
                                                <td>{{ $service->name_en }}</td>
                                                <td>
                                                    <img src="{{ asset('assets/upload/services/'.$service->image) }}" class="admin-service-img" alt="Service image">
                                                </td>
                                                <td>
                                                    <img src="{{ asset('assets/upload/services/'.$service->background) }}" class="admin-service-img" alt="Service background">
                                                </td>
                                                <td>
                                                    <a class="btn btn-warning btn-sm btn-flat" href="{{ url('admin/service/edit/'.$service->id) }}">
                                                        <i class="fas fa-edit"></i>
                                                        Edit
                                                    </a>
                                                    <button class="btn btn-danger btn-sm btn-flat" onclick="deleteService({{ $service->id }})">
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
    function deleteService(id) {
        Swal.fire({
            title: 'Are you sure you want to delete this service?',
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
                    url: "service/delete/"+id,
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
