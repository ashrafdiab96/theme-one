@extends('layouts.layout')

@section('title')
    {{ __('app.f_d') }} | {{ __('app.services') }}
@endsection

@section('content')
<div class="container-fluid p-0 m-0">
    <div class="services-header" style="height: 200px; background-image: url('{{ asset('assets/upload/services/'.$home->services_bc) }}')">
        <div class="col-md-4 text-center">
            <a href="{{ url('/') }}" class="text-uppercase p-0 m-0">{{ __('app.home') }}</a>
            <h3 class="text-capitalize p-0 m-0">{{ __('app.services') }}</h3>
        </div>
        <div class="col-md-8"></div>
    </div>

    <div class="services-content">
        <div class="container">
            <div class="row">
                @foreach ($services as $service)
                    <div class="col-md-4">
                        <div class="service">
                            <a href="{{ url('service/'.$service->id) }}">
                                <div class="service-img">
                                    <img src="{{ asset('assets/upload/services/'.$service->image) }}" alt="Service Image">
                                </div>
                                <div class="service-desc">
                                    <h3 class="text-capitalize p-0 m-0">
                                        @if (app()->getLocale() == 'en')
                                            {{ $service->name_en }}
                                        @else
                                            {{ $service->name_ar }}
                                        @endif
                                    </h3>
                                </div>
                                <div class="service-overlay">
                                    <i class="fas fa-plus-circle fa-2x"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
