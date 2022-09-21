@extends('layouts.layout')

@section('title')
    {{ __('app.f_d') }} | {{ __('app.projects') }}
@endsection

@section('content')
<div class="container p-0 m-auto">
    {{-- <div class="projects-header" style="height: 200px; background-image: url('{{ asset('assets/upload/projects/'.$home->projects_bc) }}')">
        <div class="col-md-4 text-center">
            <a href="{{ url('/') }}" class="text-uppercase p-0 m-0">{{ __('app.home') }}</a>
            <h3 class="text-capitalize p-0 m-0">{{ __('app.our_project') }}</h3>
        </div>
        <div class="col-md-8"></div>
    </div> --}}

    {{-- <div class="projects-type">
        <div class="container">
            <div class="types">
                @foreach ($projectsTypes as $type)
                    <a href="">
                        @if(app()->getLocale() == 'en')
                            {{ $type->name_en }}
                        @else
                            {{ $type->name_ar }}
                        @endif
                    </a>
                @endforeach
            </div>
        </div>
    </div> --}}

    <div class="projects-content">
        <div class="container">
            <div class="row">
                @foreach ($projects as $project)
                    <div class="col-md-4">
                        <div class="project">
                            <a href="{{ url('project/'.$project->id) }}">
                                <div class="project-img">
                                    <img src="{{ asset('assets/upload/projects/'.$project->image) }}" alt="Service Image">
                                </div>
                                <div class="project-desc">
                                    <h3 class="text-capitalize p-0 m-0">
                                        @if (app()->getLocale() == 'en')
                                            {{ $project->name_en }}
                                        @else
                                            {{ $project->name_ar }}
                                        @endif
                                    </h3>
                                </div>
                                <div class="project-overlay">
                                    <i class="fas fa-plus-circle fa-2x"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            {{-- <div class="row">
                <span>
                    {{ $projects->links() }}
                </span>
            </div> --}}
        </div>
    </div>

</div>
@endsection
