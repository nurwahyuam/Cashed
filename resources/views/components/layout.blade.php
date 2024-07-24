<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cashed</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        * {
            font-family: 'Inter';
        }
    </style>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-black navbar-dark">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">Cashed</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <x-nav-link name="dashboard" label="dashboard"></x-nav-link>
                    <x-nav-link name="orders.index" label="order"></x-nav-link>
                    <x-nav-link name="categories.index" label="categories"></x-nav-link>
                    <x-nav-link name="products.index" label="products"></x-nav-link>
                    <x-nav-link name="users.index" label="users"></x-nav-link>
                </div>
            </div>
            <form action="{{ route('logout') }}" method="post" class="d-flex align-items-center">
                @csrf
                <div class="text-white fw-bold me-3">
                    {{ auth()->user()->name }}
                </div>
                <button type="submit" class="btn btn-sm btn-danger" href="/login">
                    Log Out
                </button>
            </form>
        </div>
    </nav>

    @isset($title)
        <div class="border-bottom mb-3">
            <h4 class="container py-4 fw-bold">{{ $title }}</h4>
        </div>
    @endisset

    {{ $slot }}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
