@extends("app")

@section("title"){{
    $article->title
}}@endsection

@section("content")
    <article class="card">
        <h2 class="card-header">
            {{ $article->title }}

            @if (Auth::check())
                <a href="/articles/{{ $article->id }}/edit" class="float-right btn btn-primary">Edit Article</a>
            @endif
        </h2>

        <div class="card-body">

            <p class="card-text">{{ $article->content }}</p>
        </div>

        <div class="card-footer text-muted text-right">
            {{ $article->relativeDate() }}
        </div>
    </article>

    <hr />

    <h3>Comments</h3>

    @if($article->comments->isNotEmpty())
        @include("articles/comments/list", [
            "comments" => $article->comments,
        ])
    @else
        <p class="alert alert-secondary">No comments found</p>
    @endif

    @include("articles/comments/form")
@endsection
