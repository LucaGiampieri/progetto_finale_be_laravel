<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('title')</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Monsters</a>
        </div>
    </nav>

    <main class="py-4">
        <div class="container">

            <h1 class="mb-4 fw-bold">
                @yield('title')
            </h1>

            <div class="card shadow-sm">
                <div class="card-body">
                    @yield('content')
                </div>
            </div>

        </div>
    </main>

</body>

</html>