<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    @vite(['resources/js/app.js'])

</head>
<body>
    <div class="d-flex">
        @include('layouts.partials.sidebar')
        <div class="content">
            @include('layouts.partials.header')
            <main>
                @yield('content') 
            </main>
        </div>
    </div>
</body>
</html>

