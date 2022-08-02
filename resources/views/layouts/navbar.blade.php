<div class="container-fluid p-0 main-nav-cont">

    <div class="container nav-container h-100">
        <nav class="navbar navbar-expand-sm navbar-light bg-trasperant h-100 p-0">
            <a class="navbar-brand main-logo" href="{{ url('/') }}">F & D ENGINEERING</a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse h-100" id="collapsibleNavId">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0 h-100">
                    <li class="nav-item {{ request()->is('/') ? 'active-after' : '' }}">
                        <a class="nav-link text-capitalize {{ request()->is('/') ? 'active-link' : '' }}" href="{{ url('/') }}">{{ __('app.home') }}</a>
                    </li>
                    <li class="nav-item {{ request()->is('about') ? 'active-after' : '' }}">
                        <a class="nav-link text-capitalize {{ request()->is('about') ? 'active-link' : '' }}" href="{{ url('/about') }}">{{ __('app.about') }}</a>
                    </li>
                    <li class="nav-item {{ request()->is('profile') ? 'active-after' : '' }}">
                        <a class="nav-link text-capitalize {{ request()->is('profile') ? 'active-link' : '' }}" href="{{ url('/profile') }}">{{ __('app.profile') }}</a>
                    </li>
                    <li class="nav-item dropdown {{ request()->is('services') || request()->is('service/*') ? 'active-after' : '' }}">
                        <a class="nav-link text-capitalize {{ request()->is('services') ? 'active-link' : '' }}" href="{{ url('/services') }}" id="dropdownId" data-hover="dropdown" aria-haspopup="true" aria-expanded="false">{{ __('app.serv') }}</a>
                        <div class="dropdown-menu services-drop-menu" aria-labelledby="dropdownId">
                            @foreach ($services_share as $service)
                                <a class="dropdown-item" href="{{ url('service/'.$service->id) }}">
                                    @if (app()->getLocale() == 'en')
                                        {{ $service->name_en }}
                                    @else
                                        {{ $service->name_ar }}
                                    @endif
                                </a>
                            @endforeach
                        </div>
                    </li>
                    <li class="nav-item {{ request()->is('projects') || request()->is('project/*') ? 'active-after' : '' }}">
                        <a class="nav-link text-capitalize {{ request()->is('projects') ? 'active-link' : '' }}" href="{{ url('/projects') }}">{{ __('app.projects') }}</a>
                    </li>
                    <li class="nav-item {{ request()->is('blogs') || request()->is('blog/*') ? 'active-after' : '' }}">
                        <a class="nav-link text-capitalize {{ request()->is('blogs') ? 'active-link' : '' }}" href="{{ url('/blogs') }}">{{ __('app.blog') }}</a>
                    </li>
                    <li class="nav-item {{ request()->is('contacts') ? 'active-after' : '' }}">
                        <a class="nav-link text-capitalize {{ request()->is('contacts') ? 'active-link' : '' }}" href="{{ url('/contacts') }}">{{ __('app.contact') }}</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

</div>
