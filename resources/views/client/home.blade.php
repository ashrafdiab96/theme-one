@extends('layouts.layout')

@section('title')
    {{ __('app.f_d') }} | {{ __('app.home') }}
@endsection

@section('content')
<div class="container-fluid p-0">
    {{-- Start slider section --}}
    <div class="row m-0">
        <div class="splide home-slider" role="group" aria-label="Splide Basic HTML Example">
            <div class="splide__track h-100">
                  <ul class="splide__list h-100">
                    @foreach ($slider as $sl)
                        <li class="splide__slide h-100">
                            <div class="slider-all">
                                <div class="slider-image">
                                    <img class="img-fluid" src="{{ url('assets/upload/slider/'.$sl->image) }}" alt="Slider image 1">
                                </div>
                                <div class="slider-content">
                                    <div class="slider-title">
                                        <h2>
                                            @if(app()->getLocale() == 'en')
                                                {{ $sl->title_en }}
                                            @else
                                                {{ $sl->title_ar }}
                                            @endif
                                        </h2>
                                    </div>
                                    <div class="slider-desc">
                                        <p>
                                            @if(app()->getLocale() == 'en')
                                                {{ $sl->desc_en }}
                                            @else
                                                {{ $sl->desc_ar }}
                                            @endif
                                        </p>
                                    </div>
                                    <div class="slider-button">
                                        <a class="btn btn-flat btn-sm text-capitalize">{{ __('app.more') }}</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach
                  </ul>
            </div>
          </div>
    </div>
    {{-- End slider section --}}

    {{-- Start services section --}}
    <section class="services">
        <div class="container">
            <div class="row main-title">
                <div class="services-title">
                    <h4 class="text-uppercase">{{ __('app.services') }}</h4>
                </div>
                <div class="services-desc">
                    <h2 class="text-capitalize">{{ __('app.what_we_do') }}</h2>
                </div>
            </div>
            <div class="row">
                @foreach ($services as $service)
                    <div class="col-md-4 animate__backInLeft my-4">
                        <div class="service-content">
                            <div class="service-image">
                                <img class="img-fluid" src="{{ url('assets/upload/services/'.$service->image) }}" alt="Services images">
                            </div>
                            <div class="service-title">
                                <h3>
                                    @if(app()->getLocale() == 'en')
                                        {{ $service->name_en }}
                                    @else
                                        {{ $service->name_ar }}
                                    @endif
                                </h3>
                            </div>
                            <a href="#" class="service-overlay">
                                <div class="overlay-plus">
                                    <i class="fas fa-plus-circle"></i>
                                </div>
                                <div class="overlay-title">
                                    <h3>
                                        @if(app()->getLocale() == 'en')
                                            {{ $service->name_en }}
                                        @else
                                            {{ $service->name_ar }}
                                        @endif
                                    </h3>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    {{-- End services section --}}

    <hr class="break-line">

    {{-- Start projects section --}}
    <section class="projects">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="projects-title">
                        <p class="text-uppercase text-muted m-0">{{ __('app.recent_projects') }}</p>
                        <h2 class="text-capitalize pb-2">{{ __('app.projects') }}</h2>
                    </div>
                </div>
                <div class="col-md-9">
                    @if (app()->getLocale() == 'en')
                        {{ $home->projects_desc }}
                    @else
                        {{ $home->projects_desc_ar }}
                    @endif
                </div>
            </div>
            <div class="row mt-5">
                @foreach ($projects as $project)
                    <div class="col-md-3">
                        <div class="project">
                            <a href="#" class="project-content">
                                <div class="project-img h-100">
                                    <img src="{{ asset('assets/upload/projects/'.$project->image) }}" alt="Project">
                                </div>
                            </a>
                            <a href="#" class="project-overlay">
                                <div class="overlay-plus">
                                    <i class="fas fa-plus-circle"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    {{-- End projects section --}}

    {{-- Start blogs section --}}
    <section class="blogs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="blogs-title">
                        <p class="text-uppercase text-muted m-0">{{ __('app.recent_blogs') }}</p>
                        <h2 class="text-capitalize pb-2">{{ __('app.our_blogs') }}</h2>
                        <p class="text-capitalize text-muted my-2 blogs-desc">
                            @if (app()->getLocale() == 'en')
                                {{ $home->blogs_desc_en }}
                            @else
                                {{ $home->blogs_desc_ar }}
                            @endif
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($blogs as $blog)
                    <div class="col-md-6">
                        <a href="#">
                            <div class="recent-blogs">
                                <div class="blog-img">
                                    <img src="{{ asset('assets/upload/blogs/'.$blog->image) }}" alt="Blog Image">
                                </div>
                                <div class="blog-title p-2">
                                    <span>
                                        <i class="far fa-calendar-alt"></i>
                                        {{ \Carbon\Carbon::parse($blog->created_at)->format('d-m-Y') }}
                                    </span>
                                    &nbsp;
                                    <span>
                                        <i class="far fa-clock"></i>
                                        {{ \Carbon\Carbon::parse($blog->created_at)->format('H::m') }}
                                    </span>
                                    <h2 class="text-capitalizt">
                                        @if (app()->getLocale() == 'en')
                                            {{ $blog->title_en }}
                                        @else
                                            {{ $blog->title_ar }}
                                        @endif
                                    </h2>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    {{-- End blogs section --}}

</div>
@endsection
