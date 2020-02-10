@extends("app")

@section("title"){{ "Search: {$query}" }}@endsection

@section("content")
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Search</li>
            <li class="breadcrumb-item active" aria-current="page">
                &ldquo;{{ $query }}&rdquo;
            </li>
        </ol>
    </nav>

    @if($articles->isNotEmpty())
        @include("articles/_parts/list", [
            "articles" => $articles,
        ])
    @else
        <p class="alert alert-warning" role="alert">
            No results found
        </p>
    @endif
@endsection
