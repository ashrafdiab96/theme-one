@extends('layouts.layout')

@section('title')
    {{ __('app.f_d') }} | {{ $service->name_en }}
@endsection

@section('content')
<div class="container-fluid p-0 m-0">
    <div class="service-header" style="height: 200px; background-image: url('{{ asset('assets/upload/services/'.$service->background) }}')">
        <div class="col-md-4 text-center">
            <a href="{{ url('/') }}" class="text-uppercase p-0 m-0">{{ __('app.home') }}</a>
            <h3 class="text-capitalize p-0 m-0">
                @if (app()->getLocale() == 'en')
                    {{ $service->name_en }}
                @else
                    {{ $service->name_ar }}
                @endif
            </h3>
        </div>
        <div class="col-md-8"></div>
    </div>

    <div class="service-page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-9">
                    <div class="service-page-title mb-4">
                        <p class="text-capitalize text-muted p-0 m-0">{{ __('app.services') }}</p>
                        <h2 class="text-capitalize">
                            @if (app()->getLocale() == 'en')
                                {{ $service->name_en }}
                            @else
                                {{ $service->name_ar }}
                            @endif
                        </h2>
                    </div>
                    <div class="service-page-img">
                        <img src="{{ asset('assets/upload/services/'.$service->image) }}" alt="Servie Iage">
                    </div>
                    <div class="service-page-desc py-5">
                        <p class="text-capitalize text-muted">{{ __('app.service_apply') }}</p>
                        <p>
                            @if (app()->getLocale() == 'en')
                                {!! $service->desc_en !!}
                            @else
                                {!! $service->desc_ar !!}
                            @endif
                        </p>
                    </div>
                    <div class="service-page-photos">
                        <div id="lightgallery">
                            @foreach ($service_imgs as $img)
                                <a href="{{ asset('assets/upload/services_images/'.$img->image) }}">
                                    <img src="{{ asset('assets/upload/services_images/'.$img->image) }}">
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="first-services py-3">
                        <h2 class="text-capitalize serice-page-sub-title">{{ __('app.serv') }}</h2>
                        @foreach ($first_services as $serv)
                            <a href="{{ url('service/'.$serv->id) }}" class="text-capitalize serice-page-link">
                                <p class="py-2 m-0">
                                    @if (app()->getLocale() == 'en')
                                        {{ $serv->name_en }}
                                    @else
                                        {{ $serv->name_ar }}
                                    @endif
                                </p>
                            </a>
                        @endforeach
                    </div>
                    <div class="last-blogs mt-5">
                        <h2 class="text-capitalize serice-page-blog-title">{{ __('app.recent_blogs') }}</h2>
                        @foreach ($last_blogs as $blog)
                            <div class="py-4">
                                <a href="{{ url('blog/'.$blog->id) }}" class="text-capitalize serice-blog-link">
                                    <p class="text-muted p-0 m-0">
                                        {{ \Carbon\Carbon::parse($blog->created_at)->format('M-d-Y') }}
                                    </p>
                                    <h3 class="m-0">
                                        @if (app()->getLocale() == 'en')
                                            {{ $blog->title_en }}
                                        @else
                                            {{ $blog->title_ar }}
                                        @endif
                                    </h3>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection

@section('project-js')
<script src="{{ asset('assets/lightgallery.js-master/dist/js/lightgallery.min.js') }}"></script>
<script src="{{ asset('assets/lightgallery.js-master/demo/js/lg-thumbnail.min.js') }}"></script>
<script src="{{ asset('assets/lightgallery.js-master/demo/js/lg-fullscreen.min.js') }}"></script>

<script>
    lightGallery(document.getElementById('lightgallery'));
</script>
@endsection
