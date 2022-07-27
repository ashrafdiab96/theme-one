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
                      <li class="splide__slide h-100">
                        <div class="slider-all">
                            <div class="slider-image">
                                <img class="img-fluid" src="{{ url('assets/upload/slider/1.jpg') }}" alt="Slider image 1">
                            </div>
                            <div class="slider-content">
                                <div class="slider-title">
                                    <h2>Constructions</h2>
                                </div>
                                <div class="slider-desc">
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                    </p>
                                </div>
                                <div class="slider-button">
                                    <a class="btn btn-flat btn-sm text-capitalize">{{ __('app.more') }}</a>
                                </div>
                            </div>
                        </div>
                      </li>
                      <li class="splide__slide">
                        <div class="slider-all">
                            <div class="slider-image">
                                <img class="img-fluid" src="{{ url('assets/upload/slider/3.jpg') }}" alt="Slider image 1">
                            </div>
                            <div class="slider-content">
                                <div class="slider-title">
                                    <h2>Constructions</h2>
                                </div>
                                <div class="slider-desc">
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                    </p>
                                </div>
                                <div class="slider-button">
                                    <a class="btn btn-flat btn-sm text-capitalize">{{ __('app.more') }}</a>
                                </div>
                            </div>
                        </div>
                      </li>
                      <li class="splide__slide">
                        <div class="slider-all">
                            <div class="slider-image">
                                <img class="img-fluid" src="{{ url('assets/upload/slider/3.jpg') }}" alt="Slider image 1">
                            </div>
                            <div class="slider-content">
                                <div class="slider-title">
                                    <h2>Constructions</h2>
                                </div>
                                <div class="slider-desc">
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                    </p>
                                </div>
                                <div class="slider-button">
                                    <a class="btn btn-flat btn-sm text-capitalize">{{ __('app.more') }}</a>
                                </div>
                            </div>
                        </div>
                      </li>
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
                    <h3 class="text-capitalize">{{ __('app.what_we_do') }}</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 animate__backInLeft">
                    <div class="service-content">
                        <div class="service-image">
                            <img class="img-fluid" src="{{ url('assets/upload/services/1.jpg') }}" alt="Services images">
                        </div>
                        <div class="service-title">
                            <h3>Steel Design</h3>
                        </div>
                        <a href="#" class="service-overlay">
                            <div class="overlay-plus">
                                <i class="fas fa-plus-circle"></i>
                            </div>
                            <div class="overlay-title">
                                <h3>Steel Design</h3>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 animate__backInLeft">
                    <div class="service-content">
                        <div class="service-image">
                            <img class="img-fluid" src="{{ url('assets/upload/services/2.jpg') }}" alt="Services images">
                        </div>
                        <div class="service-title">
                            <h3>Arch Design</h3>
                        </div>
                        <a href="#" class="service-overlay">
                            <div class="overlay-plus">
                                <i class="fas fa-plus-circle"></i>
                            </div>
                            <div class="overlay-title">
                                <h3>Arch Design</h3>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 animate__backInLeft">
                    <div class="service-content">
                        <div class="service-image">
                            <img class="img-fluid" src="{{ url('assets/upload/services/3.jpg') }}" alt="Services images">
                        </div>
                        <div class="service-title">
                            <h3>Civil Design</h3>
                        </div>
                        <a href="#" class="service-overlay">
                            <div class="overlay-plus">
                                <i class="fas fa-plus-circle"></i>
                            </div>
                            <div class="overlay-title">
                                <h3>Civil Design</h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row my-5">
                <div class="col-md-4 animate__backInLeft">
                    <div class="service-content">
                        <div class="service-image">
                            <img class="img-fluid" src="{{ url('assets/upload/services/1.jpg') }}" alt="Services images">
                        </div>
                        <div class="service-title">
                            <h3>Steel Design</h3>
                        </div>
                        <a href="#" class="service-overlay">
                            <div class="overlay-plus">
                                <i class="fas fa-plus-circle"></i>
                            </div>
                            <div class="overlay-title">
                                <h3>Steel Design</h3>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 animate__backInLeft">
                    <div class="service-content">
                        <div class="service-image">
                            <img class="img-fluid" src="{{ url('assets/upload/services/2.jpg') }}" alt="Services images">
                        </div>
                        <div class="service-title">
                            <h3>Arch Design</h3>
                        </div>
                        <a href="#" class="service-overlay">
                            <div class="overlay-plus">
                                <i class="fas fa-plus-circle"></i>
                            </div>
                            <div class="overlay-title">
                                <h3>Arch Design</h3>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 animate__backInLeft">
                    <div class="service-content">
                        <div class="service-image">
                            <img class="img-fluid" src="{{ url('assets/upload/services/3.jpg') }}" alt="Services images">
                        </div>
                        <div class="service-title">
                            <h3>Civil Design</h3>
                        </div>
                        <a href="#" class="service-overlay">
                            <div class="overlay-plus">
                                <i class="fas fa-plus-circle"></i>
                            </div>
                            <div class="overlay-title">
                                <h3>Civil Design</h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- End services section --}}

    {{-- Start projects section --}}
    <section class="projects">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <p class="text-capitalize">{{ __('app.recent_projects') }}</p>
                    <h2 class="text-capitalize">{{ __('app.projects') }}</h2>
                </div>
                <div class="col-md-9"></div>
            </div>
        </div>
    </section>
    {{-- End projects section --}}

</div>
@endsection
