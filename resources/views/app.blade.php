<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8" />
        <title>@yield("title") » My Amazing AWS Hosted Blog</title>
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
            crossorigin="anonymous"
        />
    </head>
    <body>
        <div class="container">
            @include("_parts/navbar")

            <div class="row mt-4">
                <main class="col-9">
                    @yield("content")
                </main>

                @include("_parts/sidebar")
            </div>

            @include("_parts/footer")
        </div>
    </body>
</html>
