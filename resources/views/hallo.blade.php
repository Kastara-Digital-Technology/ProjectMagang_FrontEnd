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
    <div class="drawer">
        <input id="my-drawer-3" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content flex flex-col">
            <!-- Navbar -->
            <div class="w-full fixed navbar shadow z-50 bg-base-300">
                <div class="flex-none lg:hidden">
                    <label for="my-drawer-3" class="btn btn-square btn-ghost">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            class="inline-block w-6 h-6 stroke-current">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </label>
                </div>
                <div class="flex-1 px-2 mx-2">Logo</div>
                <div class="flex-none hidden lg:block">
                    <ul class="menu menu-horizontal">
                        <!-- Navbar menu content here -->
                        <li><a>Navbar Item 1</a></li>
                        <li><a>Navbar Item 2</a></li>
                    </ul>
                </div>
            </div>
            <!-- Page content here -->
            
            {{-- Hero --}}
            <div class="hero min-h-screen"
                style="background-image: url(https://source.unsplash.com/random/1920x1080?money);">
                <div class="hero-overlay bg-opacity-60"></div>
                <div class="hero-content text-center text-neutral-content">
                    <div class="max-w-md">
                        <h1 class="mb-5 text-5xl font-bold">Tagihan</h1>
                        <p class="mb-5">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi
                            exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
                        <input type="text" placeholder="Nomor Tagihan" class="input w-full max-w-xs" />
                        <button class="btn btn-primary">Cari</button>
                    </div>
                </div>
            </div>
            {{-- Hero end --}}

            {{-- Konten --}}
            <div
                class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center  py-4 sm:pt-0">
                <div class="w-full max-w-6xl text-center">
                    <h1 class="text-5xl font-bold mb-8">Blog</h1>

                    <div class="flex flex-wrap">
                        <div class="card w-96 bg-base-100 shadow-xl image-full mx-2">
                            <figure><img src="https://source.unsplash.com/random/1920x1080?shoe/sig=1" alt="Shoes" />
                            </figure>
                            <div class="card-body">
                                <h2 class="card-title">Shoes!</h2>
                                <p>If a dog chews shoes whose shoes does he choose?</p>
                                <div class="card-actions justify-end">
                                    <button class="btn btn-primary text-xs">Baca Selengkapnya</button>
                                </div>
                            </div>
                        </div>

                        <div class="card w-96 bg-base-100 shadow-xl image-full mx-2">
                            <figure><img src="https://source.unsplash.com/random/1920x1080?shoe/sig=2" alt="Shoes" />
                            </figure>
                            <div class="card-body">
                                <h2 class="card-title">Shoes!</h2>
                                <p>If a dog chews shoes whose shoes does he choose? lorem</p>
                                <div class="card-actions justify-end pt-20">
                                    <button class="btn btn-primary text-xs">Baca Selengkapnya</button>
                                </div>
                            </div>
                        </div>

                        <div class="card w-96 bg-base-100 shadow-xl image-full mx-2">
                            <figure><img src="https://source.unsplash.com/random/1920x1080?shoe/sig=3" alt="Shoes" />
                            </figure>
                            <div class="card-body">
                                <h2 class="card-title">Shoes!</h2>
                                <p>If a dog chews shoes whose shoes does he choose?</p>
                                <div class="card-actions justify-end">
                                    <button class="btn btn-primary text-xs">Baca Selengkapnya</button>
                                </div>
                            </div>
                        </div>

                        <div class="card w-96 bg-base-100 shadow-xl image-full mx-2">
                            <figure><img src="https://source.unsplash.com/random/1920x1080?shoe/sig=1" alt="Shoes" />
                            </figure>
                            <div class="card-body">
                                <h2 class="card-title">Shoes!</h2>
                                <p>If a dog chews shoes whose shoes does he choose?</p>
                                <div class="card-actions justify-end">
                                    <button class="btn btn-primary text-xs">Baca Selengkapnya</button>
                                </div>
                            </div>
                        </div>

                        <div class="card w-96 bg-base-100 shadow-xl image-full mx-2">
                            <figure><img src="https://source.unsplash.com/random/1920x1080?shoe/sig=2" alt="Shoes" />
                            </figure>
                            <div class="card-body">
                                <h2 class="card-title">Shoes!</h2>
                                <p>If a dog chews shoes whose shoes does he choose? lorem</p>
                                <div class="card-actions justify-end pt-20">
                                    <button class="btn btn-primary text-xs">Baca Selengkapnya</button>
                                </div>
                            </div>
                        </div>

                        <div class="card w-96 bg-base-100 shadow-xl image-full mx-2">
                            <figure><img src="https://source.unsplash.com/random/1920x1080?shoe/sig=3" alt="Shoes" />
                            </figure>
                            <div class="card-body">
                                <h2 class="card-title">Shoes!</h2>
                                <p>If a dog chews shoes whose shoes does he choose?</p>
                                <div class="card-actions justify-end">
                                    <button class="btn btn-primary text-xs">Baca Selengkapnya</button>
                                </div>
                            </div>
                        </div>
                    </div>

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

</body>

</html>
