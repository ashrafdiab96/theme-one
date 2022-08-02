<div class="container-fluid p-0 bg-dark">

    <div class="container top-nav">
        <div class="row">
                <div class="col-md-4">
                    <span class="top-nav-mail">
                        <i class="fas fa-envelope m-1"></i>
                        <span>{{ $contacts->email }}</span>
                    </span>
                </div>
                <div class="col-md-6">
                    <span class="nav-item mx-5 top-nav-phone">
                        <img class="mx-2" src="{{ url('assets/icons/egypt.png') }}" alt="Egypt Flag" width="25" height="25">
                        <i class="fas fa-phone-square-alt"></i>&nbsp;
                        <span>{{ $contacts->mobile }}</span>
                    </span>
                </div>
                <div class="col-md-2">
                    <span class="nav-item top-nav-lang">
                        @if (app()->getLocale() == 'ar')
                            <a class="text-capitalize" href="{{ url('/language', 'en') }}">
                                <i class="fas fa-globe"></i>&nbsp;
                                {{ __('app.lang') }}
                            </a>
                        @else
                            <a class="text-capitalize" href="{{ url('/language', 'ar') }}">
                                <i class="fas fa-globe"></i>&nbsp;
                                {{ __('app.lang') }}
                            </a>
                        @endif
                    </span>
                </div>
            </div>
    </div>
</div>
