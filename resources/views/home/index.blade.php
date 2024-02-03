<!DOCTYPE html>
<html lang="NL">


<head>
    <title>Stonks pizza</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=julius-sans-one:400" rel="stylesheet" />
</head>

    <header class="grid h-22 bg-red-600 border-green-800 border-solid border-4
                        m-0 text-center text-light text-white text-4xl">
        <h1>Welkom bij Stonks Pizza!</h1>
        <div class="grid h-14 w-20 bg-orange-600 border-green-800 border-solid border-4
                         text-center text-light text-white text-xl"><a class="nav-link" href="{{route('login.index')}}"><span>Inloggen</span></a></div>
    </header>

    <body class="bg-orange-200 ">
    <div></div>
        <div class="h-4/5 grid grid-cols-2 gap-2 content-center">
            <div class="grid bg-red-600 border-green-800 border-solid border-4 absolute inset-y-0 right-0 w-20 h-auto">
                <div class="grid bg-red-600 h-8 border-b-green-800 border-solid border-4 text-white text-center text-light"><a class="nav-link" href="{{route('home.index')}}"><span>Home</span></a></div>
                <div class="grid bg-red-600 h-8 border-b-green-800 border-solid border-4 text-white text-center text-light"><a class="nav-link" href="{{route('menu.index')}}"><span>Menu</span></a></div>
               <div class="grid bg-red-600 h-8 border-b-green-800 border-solid border-4 text-white text-center text-light"><a class="nav-link" href="{{route('about.index')}}"><span>Over ons</span></a></div>
                <div class="grid bg-red-600 h-8 border-b-green-800 border-solid border-4 text-white text-center text-light"><a class="nav-link" href="{{route('order.index')}}"><span>Bestellen</span></a></div>
            </div>
            <div class="grid bg-orange-600 border-red-600 border-solid border-4 w-3/4 h-80">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse aliquam maximus est, ut tristique lectus eleifend eu. Nunc purus dolor, malesuada non mauris in, sollicitudin efficitur ante. Phasellus dapibus tortor in nibh pretium, non ultricies dolor tempor. Ut accumsan bibendum est, a feugiat orci porta in. Etiam interdum consectetur sem pellentesque imperdiet. Nunc eget accumsan augue, id tristique lectus. Sed tincidunt dignissim orci, vitae molestie leo imperdiet vel. Etiam mattis metus et massa dictum pellentesque. Phasellus sed molestie leo. Maecenas volutpat nulla ac dapibus fermentum. Nunc in fermentum lectus. Proin ac lacus ultrices, vulputate ligula vel, molestie magna. Morbi posuere aliquam metus ut finibus. Sed bibendum nibh nec dignissim varius. Pellentesque arcu augue, mollis a finibus a, pharetra a tellus. Integer tincidunt enim id lorem convallis, vel tincidunt nisi semper.
            </div>
        </div>
    <div></div>
    </body>

    <footer class="grid h-16 bg-red-600 border-green-800 border-solid border-4 inset-x-0 bottom-0"></footer>


</html>
