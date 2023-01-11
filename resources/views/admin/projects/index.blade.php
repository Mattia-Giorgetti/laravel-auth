@extends('layouts.app')

@section('content')
    <section id="proj_list" class="py-5">
        <div class="container">
            <button class="mb-5">
                <a href="{{ route('admin.projects.create') }}">Add Project</a>
            </button>
            @if (session()->has('message'))
                <div class="alert alert-info mb-4">
                    {{ session()->get('message') }}
                </div>
            @endif
            <div class="row justify-content-between">
                @foreach ($projects as $project)
                    <div class="col-12 d-flex align-items-center gap-5 mb-5">
                        <h4>{{ $project['title'] }}</h4>
                        <span>{{ $project['code_lang'] }}</span>
                        <button class="ms-auto">
                            <a href="{{ route('admin.projects.show', $project->slug) }}">view {{ $project->title }}</a>
                        </button>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
