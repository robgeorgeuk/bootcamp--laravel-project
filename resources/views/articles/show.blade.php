@extends("app")

@section("content")
    <small class="float-right badge badge-info">
        {{ $article->relativeDate() }}
    </small>

    <h2 class="mb-1">{{ $article->title }}</h2>

    <article class="mt-4">
        <p class="mb-1">{{ $article->content }}</p>
    </article>
@endsection
