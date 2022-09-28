<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Akabnam: vendez vos produits et services à des milliers de personnes dans le monde</title>
    @vite('resources/js/app.js')
    {{-- <script src='build/assets/app.6fa5fd16.js'></script>
    <link src='build/assets/app.b0c75cb4.css' rel='stylesheet'/> --}}

</head>
<body>
<div class="container-fluid bcg">
    @include('partials.navbar')
    @yield('content')
    @include('partials.footer')
</div>

</body>
</html>