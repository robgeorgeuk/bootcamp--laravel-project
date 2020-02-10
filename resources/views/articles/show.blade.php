@extends("app")

@section("title"){{
    $article->title
}}@endsection

@section("content")
    <article class="card">
        <h2 class="card-header">{{ $article->title }}</h2>

        <div class="card-body">

            <p class="card-text">{{ $article->content }}</p>
        </div>

        <div class="card-footer text-muted text-right">
            {{ $article->relativeDate() }}
        </div>
    </article>
@endsection
