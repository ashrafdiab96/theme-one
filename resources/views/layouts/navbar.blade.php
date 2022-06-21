<div class="container">
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <a class="navbar-brand" href="#">Logo</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-capitalize" href="{{ url('/') }}">{{ __('app.home') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-capitalize" href="{{ url('/about') }}">{{ __('app.about') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-capitalize" href="{{ url('/contacts') }}">{{ __('app.contact') }}</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown text-capitalize" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ __('app.lang') }}&nbsp;
                        <i class="fas fa-globe"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item text-capitalize" href="{{ url('/language', 'en') }}">{{ __('app.english') }}</a>
                        <a class="dropdown-item text-capitalize" href="{{ url('/language', 'ar') }}">{{ __('app.arabic') }}</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

</div>
