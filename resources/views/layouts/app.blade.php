<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Project for Smart Head Kazakhstan</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

<div class="wrapper">
    <div class="inner-wrapper">
        <div class="top-side">
            <x-header />

            <main class="main">
                @yield('content')
            </main>
        </div>

        <x-footer />
    </div>
</div>

</body>
</html>
