<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Speedbots</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        This page is accessible without authentication. To login, please click <a href="/login">here</a>.

        @auth()
            You are currently logged in.
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <x-jet-dropdown-link href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                    <i class="fa fa-sign-out"></i>{{ __('Logout') }}
                </x-jet-dropdown-link>
            </form>
        @endauth
    </body>
</html>

