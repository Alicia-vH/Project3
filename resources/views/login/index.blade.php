<!DOCTYPE html>
<html lang="NL">


<head>
    <title>Inloggen</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=julius-sans-one:400" rel="stylesheet" />
</head>

<header class="grid h-16 bg-red-600 border-green-800 border-solid border-4
                        m-0 h-50 text-center text-light text-white text-4xl">Inloggen</header>

<body class="bg-orange-200">

    <div class="h-4/5 grid grid-cols-2 gap-2 content-center">

            <div class="grid bg-red-600 border-green-800 border-solid border-4 absolute inset-y-0 right-0 w-20 h-auto">
                <div class="grid bg-red-600 h-8 border-b-green-800 border-solid border-4 text-white text-center text-light"><a class="nav-link" href="{{route('home.index')}}"><span>Home</span></a></div>
                <div class="grid bg-red-600 h-8 border-b-green-800 border-solid border-4 text-white text-center text-light"><a class="nav-link" href="{{route('menu.index')}}"><span>Menu</span></a></div>
                <div class="grid bg-red-600 h-8 border-b-green-800 border-solid border-4 text-white text-center text-light"><a class="nav-link" href="{{route('about.index')}}"><span>Over ons</span></a></div>
                <div class="grid bg-red-600 h-8 border-b-green-800 border-solid border-4 text-white text-center text-light"><a class="nav-link" href="{{route('order.index')}}"><span>Bestellen</span></a></div>
            </div>
        <div class="grid bg-orange-600 border-red-600 border-solid border-4 w-3/4 h-80">

        </div>
    </div>

</body>

<footer class="grid h-16 bg-red-600 border-green-800 border-solid border-4 inset-x-0 bottom-0"></footer>

</html>
