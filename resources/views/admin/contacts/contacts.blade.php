@extends('adminLayouts.app')

@section('admin-title')
    Admin | Contacts | Show
@endsection

@section('admin-content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="contacts-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <h2 class="m-0 text-uppercase">Contacts</h2>
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
                            <h3 class="card-title m-0">Contacts page content</h3>
                        </div>
                        <div class="col-md-3 text-right">
                            <a class="btn btn-warning btn-sm btn-flat" href="{{ url('admin/contacts/edit') }}">
                                <i class="far fa-edit"></i>
                                Edit
                            </a>
                        </div>
                    </div>

                </div>

                <div class="card-body">
                    @if(session()->has('contacts_success'))
                        <div class="alert alert-success" role="alert">
                            {{ session()->get('contacts_success') }}
                        </div>
                    @endif
                    @if(session()->has('contacts_fail'))
                        <div class="alert alert-danger" role="alert">
                            {{ session()->get('contacts_fail') }}
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
                                        <th class="w-25">Phone</th>
                                        <td class="w-75">{{ $contacts->phone }}</td>
                                    </tr>
                                    <tr>
                                        <th class="w-25">Mobile</th>
                                        <td class="w-75">{{ $contacts->mobile }}</td>
                                    </tr>
                                    <tr>
                                        <th class="w-25">Fax</th>
                                        <td class="w-75">{{ $contacts->fax }}</td>
                                    </tr>
                                    <tr>
                                        <th class="w-25">Address (AR)</th>
                                        <td class="w-75">{{ $contacts->address_ar }}</td>
                                    </tr>
                                    <tr>
                                        <th class="w-25">Address (EN)</th>
                                        <td class="w-75">{{ $contacts->address_en }}</td>
                                    </tr>
                                    <tr>
                                        <th class="w-25">Why Us (EN)</th>
                                        <td class="w-75">{!! $contacts->why_us !!}</td>
                                    </tr>
                                    <tr>
                                        <th class="w-25">Why Us (AR)</th>
                                        <td class="w-75">{!! $contacts->why_us_ar !!}</td>
                                    </tr>
                                    <tr>
                                        <th class="w-25">Email</th>
                                        <td class="w-75">{{ $contacts->email }}</td>
                                    </tr>
                                    <tr>
                                        <th class="w-25">Facebook URL</th>
                                        <td class="w-75">{{ $contacts->fb_url }}</td>
                                    </tr>
                                    <tr>
                                        <th class="w-25">Twitter URL</th>
                                        <td class="w-75">{{ $contacts->tw_url }}</td>
                                    </tr>
                                    <tr>
                                        <th class="w-25">Instagram URL</th>
                                        <td class="w-75">{{ $contacts->in_url }}</td>
                                    </tr>
                                    <tr>
                                        <th class="w-25">Linkedin URL</th>
                                        <td class="w-75">{{ $contacts->ln_url }}</td>
                                    </tr>
                                    <tr>
                                        <th class="w-25">Youtube URL</th>
                                        <td class="w-75">{{ $contacts->yu_url }}</td>
                                    </tr>
                                    <tr>
                                        <th class="w-25">Contacts page background</th>
                                        <td class="w-75">
                                            <img class="contacts-img-bc" src="{{ asset('assets/upload/contacts/'.$contacts->background) }}" alt="contacts page background">
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
