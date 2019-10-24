@extends("app")

@section("content")
    <p><strong>Search:</strong> “{{ $query }}”</p>

    @include("articles/_parts/list", [
        "articles" => $articles,
    ])
@endsection
