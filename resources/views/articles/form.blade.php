@extends("app")

@section("title"){{
    $title . ($article ? ": " . $article->title : "")
}}@endsection

@section("content")
    <h2>{{ $title }}</h2>

    <form method="post" class="form">
        @csrf

        <div class="form-group">
            <label for="title">Title</label>
            <input
                id="title"
                name="title"
                class="form-control @error('title') is-invalid @enderror"
                value="{{ old("title", $article ? $article->title : "") }}"
            />

            @error('title')
                <p class="invalid-feedback">
                    {{ $message }}
                </p>
            @enderror
        </div>

        <div class="form-group">
            <label for="content">Content</label>
            <textarea
                id="content"
                name="content"
                class="form-control @error('content') is-invalid @enderror"
            >{{
                old("content", $article ? $article->content : "")
            }}</textarea>

            @error('content')
                <p class="invalid-feedback">
                    {{ $message }}
                </p>
            @enderror
        </div>

        <button class="btn btn-success">{{ $button }}</button>
    </form>
@endsection
