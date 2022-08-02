@extends('layouts.layout')

@section('title')
    {{ __('app.f_d') }} | {{ __('app.contact') }}
@endsection

@section('content')
<div class="container-fluid p-0 m-0">
    <div class="contacts-header" style="height: 200px; background-image: url('{{ asset('assets/upload/contacts/'.$contacts->background) }}')">
        <div class="col-md-4 text-center">
            <a href="{{ url('/') }}" class="text-uppercase p-0 m-0">{{ __('app.home') }}</a>
            <h3 class="text-capitalize p-0 m-0">{{ __('app.contact') }}</h3>
        </div>
        <div class="col-md-8"></div>
    </div>

    <div class="contacts-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="text-muted text-capitalize p-0 m-0">{{ __('app.why_us') }}</p>
                    <p class="p-0 m-0">
                        @if (app()->getLocale() == 'en')
                            {!! $contacts->why_us !!}
                        @else
                            {!! $contacts->why_us_ar !!}
                        @endif
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="location">
                        <h3 class="text-capitalize loc-title">{{ __('app.location') }}</h3>
                        <p class="text-capitalize comp-name">{{ __('app.f_d') }}</p>
                        <p>
                            <i class="fas fa-location-arrow"></i>
                            @if (app()->getLocale() == 'en')
                                {{ $contacts->address_en }}
                            @else
                                {{ $contacts->address_ar }}
                            @endif
                        </p>
                    </div>
                    <div class="communication">
                        <h3 class="text-capitalize loc-title">{{ __('app.communication') }}</h3>
                        <p>
                            <i class="fas fa-phone"></i>
                            {{ $contacts->mobile }}
                        </p>
                        <p>
                            <i class="fas fa-envelope"></i>
                            {{ $contacts->email }}
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="contacts-form">
                        <form action="" method="POST" class="form-group w-75 m-auto">
                            <div class="form-group">
                                <label for="my-input" class="text-capitalize">
                                    {{ __('app.name') }}
                                    <span class="form-req">*</span>
                                </label>
                                <input class="form-control" type="text" name="name">
                            </div>
                            <div class="form-group">
                                <label for="my-input" class="text-capitalize">
                                    {{ __('app.phone') }}
                                </label>
                                <input class="form-control" type="text" name="phone">
                            </div>
                            <div class="form-group">
                                <label for="my-input" class="text-capitalize">
                                    {{ __('app.email') }}
                                    <span class="form-req">*</span>
                                </label>
                                <input class="form-control" type="text" name="email">
                            </div>
                            <div class="form-group">
                                <label for="my-input" class="text-capitalize">
                                    {{ __('app.message') }}
                                    <span class="form-req">*</span>
                                </label>
                                <textarea class="form-control" name="message" rows="5"></textarea>
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-success">
                                    <span class="text-capitalize">{{ __('app.send') }}</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
