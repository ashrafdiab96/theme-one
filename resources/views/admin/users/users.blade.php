@extends('adminLayouts.app')

@section('admin-title')
    Admin | Users | Show
@endsection

@section('admin-content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="users-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <h2 class="m-0 text-uppercase">Users</h2>
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
                            <h3 class="card-title p-0 m-0">Users</h3>
                        </div>
                        <div class="col-md-3">
                            <a class="btn btn-info btn-sm btn-flat" href="{{ url('admin/user/new') }}">
                                <i class="fas fa-plus-circle"></i>
                                Add
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    @if(session()->has('users_success'))
                        <div class="alert alert-success" role="alert">
                            {{ session()->get('users_success') }}
                        </div>
                    @endif
                    @if(session()->has('users_fail'))
                        <div class="alert alert-danger" role="alert">
                            {{ session()->get('users_fail') }}
                        </div>
                    @endif
                    @if(session()->has('users_updated'))
                        <div class="alert alert-success" role="alert">
                            {{ session()->get('users_updated') }}
                        </div>
                    @endif
                    @if(session()->has('users_not_updated'))
                        <div class="alert alert-danger" role="alert">
                            {{ session()->get('users_not_updated') }}
                        </div>
                    @endif
                    @if(session()->has('user_deleted'))
                        <div class="alert alert-success" role="alert">
                            {{ session()->get('user_deleted') }}
                        </div>
                    @endif
                    @if(session()->has('users_not_deleted'))
                        <div class="alert alert-danger" role="alert">
                            {{ session()->get('users_not_deleted') }}
                        </div>
                    @endif
                    @if(session()->has('user_pass_upd'))
                        <div class="alert alert-success" role="alert">
                            {{ session()->get('user_pass_upd') }}
                        </div>
                    @endif
                    @if(session()->has('users_pass_not_upd'))
                        <div class="alert alert-danger" role="alert">
                            {{ session()->get('users_pass_not_upd') }}
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
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Control Tools</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                            <tr>
                                                <td>{{ $user->id }}</td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->phone }}</td>
                                                <td>
                                                    <a class="btn btn-warning btn-sm btn-flat" href="{{ url('admin/user/edit/'.$user->id) }}">
                                                        <i class="fas fa-edit"></i>
                                                        Edit
                                                    </a>
                                                    <a class="btn btn-primary btn-sm btn-flat" href="{{ url('admin/user/editPass/'.$user->id) }}">
                                                        <i class="fas fa-edit"></i>
                                                        Edit Password
                                                    </a>
                                                    <button class="btn btn-danger btn-sm btn-flat" onclick="deleteUser({{ $user->id }})">
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
    function deleteUser(id) {
        Swal.fire({
            title: 'Are you sure you want to delete this user?',
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
                    url: "user/delete/"+id,
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
