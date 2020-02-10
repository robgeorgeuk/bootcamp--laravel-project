@extends("app")

@section("title"){{ "All Articles" }}@endsection

@section("content")
    @include("articles/_parts/list", [
        "articles" => $articles,
    ])
@endsection
