@extends('adminLayouts.app')

@section('admin-title')
    Admin | Messages | Show
@endsection

@section('admin-content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="users-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <h2 class="m-0 text-uppercase">Messages</h2>
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
                            <h3 class="card-title p-0 m-0">Messages</h3>
                        </div>
                        <div class="col-md-6 text-right">

                        </div>
                    </div>
                </div>

                <div class="card-body">
                    @if(session()->has('message_success'))
                        <div class="alert alert-success" role="alert">
                            {{ session()->get('message_success') }}
                        </div>
                    @endif
                    @if(session()->has('message_failed'))
                        <div class="alert alert-danger" role="alert">
                            {{ session()->get('message_failed') }}
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
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Message</th>
                                            <th>Connected</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($messages as $message)
                                            <tr class="{{ $message->contacted == 1 ? 'alert-success' : '' }}">
                                                <td>{{ $message->id }}</td>
                                                <td>{{ $message->name }}</td>
                                                <td>{{ $message->phone }}</td>
                                                <td>{{ $message->email }}</td>
                                                <td>{{ $message->message }}</td>
                                                <td>
                                                    @if ($message->contacted == 0)
                                                        <a class="btn btn-info btn-sm btn-flat w-100" href="{{ url('admin/messages/connect/'.$message->id) }}">
                                                            <i class="fas fa-reply-all"></i>
                                                            Connect
                                                        </a>
                                                    @else
                                                        <p class="bg-success d-flex justify-content-center m-0 p-0">
                                                            <span class="p-1"><i class="fas fa-check-circle"></i></span>
                                                        </p>
                                                    @endif

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
