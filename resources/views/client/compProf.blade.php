@extends('layouts.layout')

@section('title')
    {{ __('app.f_d') }} | {{ __('app.cmp_prof') }}
@endsection

@section('content')
<div class="container-fluid p-0 m-0">
    <div class="profile-header" style="height: 200px; background-image: url('{{ asset('assets/upload/profile/'.$profile->background) }}')">
        <div class="col-md-4 text-center">
            <a href="{{ url('/') }}" class="text-uppercase p-0 m-0">{{ __('app.home') }}</a>
            <h3 class="text-capitalize p-0 m-0">{{ __('app.cmp_prof') }}</h3>
        </div>
        <div class="col-md-8"></div>
    </div>
</div>
<div class="profile-content">
    <div class="container">
        <div class="profile-title">
            <h3 class="text-capitalize">{{ __('app.mission') }}</h3>
        </div>
        <div class="profile-desc">
            <p>
                @if (app()->getLocale() == 'en')
                    {!! $profile->missions_en !!}
                @else
                    {!! $profile->missions_ar !!}
                @endif
            </p>
        </div>
    </div>

    <div class="container">
        <div class="values-header">
            <h3 class="text-capitalize">{{ __('app.our_values') }}</h3>
        </div>
        <div class="values-diagram">
            <div class="anyone">
                @foreach ($values as $value)
                    @if (app()->getLocale() == 'en')
                        <a class="sc_object">{{ $value->value_en }}</a>
                    @else
                        <a class="sc_object">{{ $value->value_ar }}</a>
                    @endif
                @endforeach
                <a class="sc_center">{{ __('app.values') }}</a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="vision-title">
            <h3 class="text-capitalize">{{ __('app.vision') }}</h3>
        </div>
        <div class="vision-desc">
            <p>
                @if (app()->getLocale() == 'en')
                    {!! $profile->vision_en !!}
                @else
                    {!! $profile->vision_ar !!}
                @endif
            </p>
        </div>
    </div>

    <div class="container">
        <div class="strength-title">
            <h3 class="text-capitalize">{{ __('app.strength') }}</h3>
        </div>
        <div class="strength-desc">
            <p>
                @if (app()->getLocale() == 'en')
                    {!! $profile->strength_en !!}
                @else
                    {!! $profile->strength_ar !!}
                @endif
            </p>
        </div>
    </div>

</div>
@endsection

@section('project-js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript" src="{{ asset('assets/smartCyclic/smartCycle.min.js') }}"></script>
<script>
    $(".anyone").smartCycle();
</script>
@endsection
