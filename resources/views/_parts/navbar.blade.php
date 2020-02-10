<nav class="mt-4 navbar navbar-light bg-light">
    <a class="navbar-brand" href="/">My Amazing Blog</a>
    @include("_parts/search")
</nav>

@if (Auth::check())
<form class="mt-4 mb-4 clearfix text-right" method="post" action="/logout">
    <a href="/articles/create" class="btn btn-success">Create Article</a>

    @csrf
    <button class="btn btn-danger">Logout</button>
</form>
@else
<div class="mt-4 mb-4 clearfix text-right">
    <a href="/login" class="btn btn-primary">Login</a>
</div>
@endif
