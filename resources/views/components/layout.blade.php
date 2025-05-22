{{--<!DOCTYPE html>--}}
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
{{--<head>--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1">--}}

{{--    <title>Laravel</title>--}}

{{--    <!-- Fonts -->--}}
{{--    <link rel="preconnect" href="https://fonts.bunny.net">--}}
{{--    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />--}}

{{--</head>--}}

{{--<body>--}}
{{--<ul>--}}
{{--    <li><a href="/"> Welcome </a> </li>--}}
{{--    <li><a href="/projects"> Projects </a> </li>--}}
{{--</ul>--}}

{{--    {{$slot}}--}}
{{--</body>--}}

{{--</html>--}}

    <!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Marmitouille')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<!-- En-tête -->
<div class="text-center mb-5 mt-2">
    <a href="{{ route('recettes.index') }}">
    <img src="/Logo.png"
         alt="Logo Marmitouille"
         class="img-fluid"
         style="max-height: 150px; object-fit: contain;">
    </a>
    <p class="text-muted mb-1" style="margin-left: 150px;">by CuisineNet</p>
    <h2 class="h5 fst-italic text-secondary">Un mix douteux entre génie culinaire et foutoir total.</h2>
</div>
<div class="container mt-5">
    @yield('content')
</div>
</body>
</html>
