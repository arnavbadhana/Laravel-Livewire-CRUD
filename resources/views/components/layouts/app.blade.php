<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('bootstrap-5.0.2-dist/css/bootstrap.min.css') }}">
        <title>{{ $title ?? 'Page Title' }}</title>
    </head>
    <body>
        
        <div class="container">
            {{ $slot }}
        </div>

        <script src="{{ asset('jquery/jquery.js') }}"></script>
        <script src="{{ asset('bootstrap-5.0.2-dist/js/bootstrap.min.js') }}"></script>
    </body>
</html>
