<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel + Tailwind CSS - TechvBlogs</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <script src="{{ mix('js/app.js') }}"></script>
</head>

<body class="">
<div class="flex flex-col w-full">
    <div class="drawer">
        <input id="my-drawer-3" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content flex flex-col">
            <!-- Navbar -->
            <div class="w-full navbar z-50 bg-base-300">
                <div class="flex-none lg:hidden">
                    <label for="my-drawer-3" class="btn btn-square btn-ghost">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-6 h-6 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                    </label>
                </div>
                <div class="flex-1 px-2 mx-2">Navbar Title</div>
                <div class="flex-none hidden lg:block">
                    <ul class="menu menu-horizontal">
                        <!-- Navbar menu content here -->
                        <li><a>Navbar Item 1</a></li>
                        <li><a>Navbar Item 2</a></li>
                    </ul>
                </div>
            </div>
            <!-- Page content here -->
            <div class="hero min-h-screen bg-base-200 bg-white dark:bg-slate-800 ">
                <div class="carousel w-full">
                    <div id="slide1" class="carousel-item relative w-full">
                        <img src="https://picsum.photos/seed/picsum/200/300" class="w-full h-500" />
                        <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                            <a href="#slide4" class="btn btn-circle">❮</a>
                            <a href="#slide2" class="btn btn-circle">❯</a>
                        </div>
                    </div>
                    <div id="slide2" class="carousel-item relative w-full">
                        <img src="https://picsum.photos/seed/picsum/200/300" class="w-full w-full h-500" />
                        <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                            <a href="#slide1" class="btn btn-circle">❮</a>
                            <a href="#slide3" class="btn btn-circle">❯</a>
                        </div>
                    </div>
                    <div id="slide3" class="carousel-item relative w-full">
                        <img src="https://picsum.photos/seed/picsum/200/300" class="w-full w-full h-500" />
                        <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                            <a href="#slide2" class="btn btn-circle">❮</a>
                            <a href="#slide4" class="btn btn-circle">❯</a>
                        </div>
                    </div>
                    <div id="slide4" class="carousel-item relative w-full">
                        <img src="https://picsum.photos/seed/picsum/200/300" class="w-full w-full h-500" />
                        <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                            <a href="#slide3" class="btn btn-circle">❮</a>
                            <a href="#slide1" class="btn btn-circle">❯</a>
                        </div>
                    </div>
                </div>
            </div>

            <div
                class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center  py-4 sm:pt-0">
                <div class="w-full max-w-md text-center">
                    <h1 class="text-5xl font-bold "> Content</h1>
                    <p class="py-4 ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A alias atque beatae,
                        consequatur dolor ea eum ex fuga incidunt iste iure laudantium magni maiores mollitia numquam
                        odio officia possimus quam quo ratione, recusandae repellendus, sequi sit soluta temporibus
                        totam voluptatem!</p>
                </div>
            </div>
        </div>
        <div class="drawer-side">
            <label for="my-drawer-3" class="drawer-overlay"></label>
            <ul class="menu p-4 w-80 bg-base-100">
                <!-- Sidebar content here -->
                <li><a>Sidebar Item 1</a></li>
                <li><a>Sidebar Item 2</a></li>

            </ul>

        </div>
    </div>
</div>


</body>

</html>
