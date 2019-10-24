<div class="list-group">
    @foreach ($articles as $article)
    <a href="/articles/{{ $article->id }}" class="list-group-item list-group-item-action">
        <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">{{ $article->title }}</h5>
            <small>{{ $article->relativeDate() }}</small>
        </div>
        <p class="mb-1">{{ $article->content }}</p>
    </a>
    @endforeach
</div>
