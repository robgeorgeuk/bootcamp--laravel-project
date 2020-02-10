@extends("app")

@section("title"){{ "All Articles" }}@endsection

@section("content")
    @include("articles/_parts/list", [
        "articles" => $articles,
    ])

    <div class="mt-4">
        {{ $articles->links() }}
    </div>
@endsection
