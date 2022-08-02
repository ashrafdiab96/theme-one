@extends('layouts.layout')

@section('title')
{{ __('app.f_d') }} | {{ __('app.blog') }}
@endsection

@section('content')
<div class="container-fluid p-0 m-0">
    <div class="projects-header" style="height: 200px; background-image: url('{{ asset('assets/upload/blogs/'.$home->blogs_bc) }}')">
        <div class="col-md-4 text-center">
            <a href="{{ url('/') }}" class="text-uppercase p-0 m-0">{{ __('app.home') }}</a>
            <h3 class="text-capitalize p-0 m-0">{{ __('app.blog') }}</h3>
        </div>
        <div class="col-md-8"></div>
    </div>
    <div class="blogs-content">
        <div class="container">
            <div class="row">
                @foreach ($blogs as $blog)
                    <div class="col-md-4">
                        <div class="blog">
                            <a href="{{ url('blog/'.$blog->id) }}">
                                <div class="blog-img">
                                    <img src="{{ asset('assets/upload/blogs/'.$blog->image) }}" alt="Service Image">
                                </div>
                                <div class="blog-desc">
                                    <h3 class="text-capitalize p-0 m-0">
                                        @if (app()->getLocale() == 'en')
                                            {{ $blog->title_en }}
                                        @else
                                            {{ $blog->title_ar }}
                                        @endif
                                    </h3>
                                </div>
                                <div class="blog-overlay">
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
