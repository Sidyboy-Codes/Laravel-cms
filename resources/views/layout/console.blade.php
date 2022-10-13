<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>My Portfolio</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="{{url('app.css')}}">

        <script src="{{url('app.js')}}"></script>
        
    </head>
    <body>

        <header class="navbar">

            <h1 class="">Portfolio Manager</h1>

            @if (Auth::check())
            <i class="bi bi-person"></i> {{auth()->user()->first}} {{auth()->user()->last}} |
                <a href="/console/logout" class="logout_btn" >Log Out</a> | 
                <a href="/console/dashboard">Dashboard</a>
            @else
                <a href="/">Return to My Portfolio</a>
            @endif

        </header>


        @if (session()->has('message'))
            <div>
                <div class="messages">{{session()->get('message')}}</div>
            </div>
        @endif

        @yield ('content')

    </body>
</html>