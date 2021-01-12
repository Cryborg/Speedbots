<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Speedbots</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body style="background-color : #d2d2d2;">
        <div id="app">
            <auth-box></auth-box>
        </div>
    </body>
    <script src="{{ asset('js/app.js') }}"></script>
</html>

