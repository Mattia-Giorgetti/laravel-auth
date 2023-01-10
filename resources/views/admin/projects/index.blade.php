@extends('layouts.app')

@section('content')
    <section id="proj_list" class="py-5">
        <div class="container">
            <div class="row">
                @foreach ($projects as $project)
                    <div class="col-4 mb-4 d-flex flex-column align-items-center mb-5">
                        <h4>{{ $project['title'] }}</h4>
                        <h4>{{ $project['code_lang'] }}</h4>
                        <button>
                            <a href="{{ route('admin.projects.show', $project->slug) }}">view {{ $project->title }}</a>
                        </button>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
