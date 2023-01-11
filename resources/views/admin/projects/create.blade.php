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
            <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" id="title">
                <label for="proj_description">Description</label>
                <input type="text" name="proj_description" id="proj_description" required>
                <label for="code_lang">Used Linguages</label>
                <input type="text" name="code_lang" id="code_lang" required>
                <label for="github_link">GitHub Link</label>
                <input type="text" name="github_link" id="github_link" required>
                <label for="cover_image">Image</label>
                <input type="file" name="cover_image" id="cover_image">



                <input class="form_btn" type="submit" value="Send">
            </form>
        </div>
    </section>
@endsection
