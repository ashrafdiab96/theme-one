@extends('layouts.layout')

@section('title')
{{ __('app.f_d') }} | {{ __('app.about') }}
@endsection

@section('content')
<div class="container-fluid p-0 m-0">
    <div class="about-header" style="height: 200px; background-image: url('{{ asset('assets/upload/about/'.$about->background) }}')">
        <div class="col-md-4 text-center">
            <a href="{{ url('/') }}" class="text-uppercase p-0 m-0">{{ __('app.home') }}</a>
            <h3 class="text-capitalize p-0 m-0">{{ __('app.about') }}</h3>
        </div>
        <div class="col-md-8"></div>
    </div>
    <div class="about-content">
        <div class="container">
            <div class="about-title">
                <p class="text-capitalize text-muted">{{ __('app.who_we_are') }}</p>
            </div>
            <div class="about-desc">
                <h2 class="text-capitalize">
                    @if (app()->getLocale() == 'en')
                        {{ $about->comp_name_en }}
                    @else
                        {{ $about->comp_name_ar }}
                    @endif
                </h2>
                <p>
                    @if (app()->getLocale() == 'en')
                        {!! $about->desc_en !!}
                    @else
                        {!! $about->desc_ar !!}
                    @endif
                </p>
            </div>
        </div>
    </div>
    <hr class="about-content-line">
    <div class="founder">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <img src="{{ asset('assets/upload/about/'.$about->founder_1_img) }}" alt="Founder Image">
                </div>
                <div class="col-md-6">
                    <h4>{{ __('app.founder_msg') }}</h4>
                    <p>
                        @if (app()->getLocale() == 'en')
                            {!! $about->founders_msg_en !!}
                        @else
                            {!! $about->founders_msg_ar !!}
                        @endif
                    </p>
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('assets/upload/about/'.$about->founder_2_img) }}" alt="Founder Image">
                </div>
            </div>
        </div>
    </div>
    <div class="statistics" id="statistics">
        <div class="container">
            <div class="row justify-content-around align-items-center">
                <div class="col-ms-3">
                    <h3 class="text-capitalize text-center numbers">{{ $home->establish }}</h3>
                    <p class="text-capitalize text-center text-muted m-0">
                        <i class="fas fa-external-link-alt"></i>
                        {{ __('app.establish') }}
                    </p>
                </div>
                <div class="col-ms-3">
                    <h3 class="text-capitalize text-center numbers">{{ $home->projects }}</h3>
                    <p class="text-capitalize text-center text-muted m-0">
                        <i class="fas fa-project-diagram"></i>
                        {{ __('app.projects') }}
                    </p>
                </div>
                <div class="col-ms-3">
                    <h3 class="text-capitalize text-center numbers">{{ $home->employees }}</h3>
                    <p class="text-capitalize text-center text-muted m-0">
                        <i class="fas fa-users"></i>
                        {{ __('app.employees') }}
                    </p>
                </div>
                <div class="col-ms-3">
                    <h3 class="text-capitalize text-center numbers">{{ $home->customers }}</h3>
                    <p class="text-capitalize text-center text-muted m-0">
                        <i class="fas fa-user-tie"></i>
                        {{ __('app.customers') }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('project-js')
<script>
    var section = document.querySelector('.statistics');
    var hasEntered = false;
    window.addEventListener('scroll', (e) => {
      var shouldAnimate = (window.scrollY + window.innerHeight) >= (section.offsetTop);
      console.log(shouldAnimate)
      if (shouldAnimate && !hasEntered) {
        hasEntered = true;
        // alert('sss')
        $('.numbers').each(function () {
          $(this).prop('Counter',0).animate({
            Counter: $(this).text()
          }, {
            duration: 4000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
          });
        });
      }
    });
</script>
@endsection
