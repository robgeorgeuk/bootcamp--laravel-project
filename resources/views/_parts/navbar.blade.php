<nav class="mt-4 navbar navbar-light bg-light">
    <a class="navbar-brand" href="/">My Amazing Blog</a>
    @include("_parts/search")
</nav>

@if (Auth::check())
<div class="mt-4 mb-4 clearfix">
    <a href="/articles/create" class="float-right btn btn-success">Create Article</a>
</div>
@endif
