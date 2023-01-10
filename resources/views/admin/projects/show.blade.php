@extends('layouts.app')

@section('content')
    <section id="proj_page" class="py-5">
        <div class="container">
            <h2>{{ $project->title }}</h2>
            <p>{{ $project->proj_description }}</p>
            <p>{{ $project->code_lang }}</p>
            <p>{{ $project->github_link }}</p>
            <button class="mt-3">
                <a href="{{ route('admin.projects.index') }}">Back to Projects</a>
            </button>
        </div>
    </section>
@endsection
