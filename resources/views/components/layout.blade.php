<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="id=edge">
    @vite('resources/css/app.css')
    <script src="//unpkg.com/alpinejs" defer></script>
    <title>Listings</title>
</head>
<body class="bg-teal-300">
    @include('partials._header')
<main>
    {{$slot}}
</main>
<footer class="left-0 w-full flex items-center justify-start font-bold bg-laravel text-white h-24 mt-24 opacity-90 md:justify-center"
>
    <p class="ml-2">Copyright &copy; 2022, All Rights reserved</p>

    <a
        href="/listings/create"
        class="absolute top-1/3 right-10 bg-black text-white py-2 px-5"
        >Post Job</a
    >
</footer>
<x-flash-message/>
</body>
</html>
