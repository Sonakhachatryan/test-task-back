<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href={{ asset("favicon.ico") }} />

    <title>{{ env('APP_NAME') }} - @yield('title')</title>
    <link href="{{ asset("/css/app.css") }}" rel="stylesheet" />

</head>
<body>

    @include('layout.navbar')
    <div class="container">
        @yield('content')
    </div>

    <script src="{{ asset("/js/app.js") }}"></script>
</body>
</html>
