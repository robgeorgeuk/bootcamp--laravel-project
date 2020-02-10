<div class="list-group">
    @foreach ($comments as $comment)
    <div class="d-flex w-100 justify-content-between">
        <h5 class="mb-1">{{ $comment->email }}</h5>
    </div>
    <p class="mb-1">{{ $comment->comment }}</p>
    @endforeach
</div>
