<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
   <style>
        
        a {
            text-decoration: none !important;
        }
   </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</head>

<body class="antialiased">
    @if (Route::has('login'))
        <nav class="navbar navbar-expand-lg bg-dark">
            <div class="container-fluid justify-content-end">
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-sm text-white">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm  text-white me-4">Log in</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-white">Register</a>
                    @endif
                @endauth
            </div>
        </nav>
    @endif
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        @yield("content")
    </div>
    <footer class="mt-5"></footer>
</body>

</html>
