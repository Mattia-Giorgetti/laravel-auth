@extends('layouts.app')
@section('content')
    <section id="create_form">
        <div class="container py-5">
            <div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <form action="{{ route('admin.projects.update', $project->slug) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <label for="title">Title</label>
                <input type="text" name="title" id="title" value="{{ old('title', $project->title) }}">
                <label for="proj_description">Description</label>
                <input type="text" name="proj_description" id="proj_description"
                    value="{{ old('proj_description', $project->proj_description) }}" required>
                <label for="code_lang">Used Linguages</label>
                <input type="text" name="code_lang" id="code_lang" value="{{ old('code_lang', $project->code_lang) }}"
                    required>
                <label for="github_link">GitHub Link</label>
                <input type="text" name="github_link" id="github_link"
                    value="{{ old('github_link', $project->github_link) }}" required>
                <div class="mt-2">
                    <p>Previous Image</p>
                    <img width="300px" src="{{ asset('storage/' . $project->cover_image) }}" alt="{{ $project->title }}">
                </div>
                <label for="cover_image">New Image</label>
                <input type="file" name="cover_image" id="cover_image">



                <input class="form_btn" type="submit" value="Send">
            </form>
        </div>
    </section>
@endsection
