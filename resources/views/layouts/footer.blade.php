<footer class="new-footer">
    <div class="container new-footer-cont">
        <div class="row">
            <div class="col-md-11">
                <div class="row">
                    <div class="col-md-2 text-capitalize">
                        <a href="{{ url('/about') }}" class="footer-item">
                            {{ __('app.about') }}
                        </a>
                    </div>
                    <div class="col-md-2 text-capitalize">
                        <a href="{{ url('/profile') }}" class="footer-item">
                            {{ __('app.profile') }}
                        </a>
                    </div>
                    <div class="col-md-2 text-capitalize">
                        <a href="{{ url('/services') }}" class="footer-item">
                            {{ __('app.serv') }}
                        </a>
                    </div>
                    <div class="col-md-2 text-capitalize">
                        <a href="{{ url('/projects') }}" class="footer-item">
                            {{ __('app.projects') }}
                        </a>
                    </div>
                    <div class="col-md-2 text-capitalize">
                        <a href="{{ url('/blogs') }}" class="footer-item">
                            {{ __('app.blog') }}
                        </a>
                    </div>
                    <div class="col-md-2 text-capitalize">
                        <a href="{{ url('/contacts') }}" class="footer-item">
                            {{ __('app.contact') }}
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-1">
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{ $contacts->ln_url }}" target="_blank" title="LinkedIn">
                            <img class="linkedin-img" src="{{ asset('assets/icons/linkedin.png') }}" alt="linkedin">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-4">
                <div class="new-footer-about">
                    @if (app()->getLocale() == 'en')
                        {!! $contacts->why_us !!}
                    @else
                        {!! $contacts->why_us_ar !!}
                    @endif
                </div>
            </div>
            <div class="col-md-4">
                <div class="new-footer-about">
                    {{-- <h2 class="text-capitalize mb-3">
                        <i class="fas fa-address-card"></i>
                        {{ __('app.contact') }}
                    </h2> --}}
                    <div class="block-23">
                        <ul class="list-unstyled">
                            <li class="footer-contact-item">
                                <span>
                                    <i class="fas fa-location-arrow"></i>
                                    @if (app()->getLocale() == 'en')
                                        {{ $contacts->address_en }}
                                    @else
                                        {{ $contacts->address_ar }}
                                    @endif
                                </span>
                            </li>
                            {{-- <li class="footer-contact-item">
                                <span>
                                    <i class="fas fa-phone"></i>
                                    {{ $contacts->mobile }}
                                </span>
                            </li> --}}
                            <li class="footer-contact-item">
                                <span>
                                    <i class="fas fa-envelope"></i>
                                    {{ $contacts->email }}
                                </span>
                            </li>
                        </ul>
                    </div>
                    {{-- <div class="footer-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4367.830212390713!2d31.20588779625682!3d30.053347853929335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145841251e102def%3A0x9004caf808f0e283!2sGool%20Gamal%2C%20Al%20Huwaiteyah%2C%20Agouza%2C%20Giza%20Governorate!5e0!3m2!1sen!2seg!4v1659219962594!5m2!1sen!2seg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div> --}}
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</footer>

<div class="container-fluid new-copy-div p-0">
    <div class="new-copy-footer">
        <div class="col-md-12 text-center">
            <p class="m-0 p-3">
                {{ __('app.copyright') }} &copy;<script>document.write(new Date().getFullYear());</script>&copy; {{ __('app.rights_reserved') }} | {{ __('app.f_d') }} </a>
            </p>
        </div>
    </div>
</div>
