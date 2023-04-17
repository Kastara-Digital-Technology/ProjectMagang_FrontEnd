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
        {{-- Struktur Drawer
        .drawer // The root container
            ├── .drawer-toggle // A hidden checkbox to toggle the visibility of the sidebar
            ├── .drawer-content // All your page content goes here
            │    ├── // navbar
            │    ├── // content
            │    └── // footer
            └── .drawer-side // Sidebar wrapper
                ├── .drawer-overlay // A dark overlay that covers the whole page when the drawer is open
                └── // Sidebar content (menu or anything) --}}

        <input id="my-drawer-3" type="checkbox" class="drawer-toggle" />

        <div class="drawer-content">
            <!-- Navbar Start -->
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
                        <li><a href="#home">Beranda</a></li>
                        <li><a href="#blog">Blog</a></li>
                        <li><a href="#kontak">Kontak</a></li>
                    </ul>
                </div>
            </div>
            <!-- Navbar End -->

            <!-- Hero Start -->
            <div id="home" class="hero min-h-screen" style="background-image: url(img/hero.jpg);">
                <div class="hero-overlay bg-opacity-60"></div>
                <div class="hero-content text-center text-neutral-content">
                    <div class="max-w-md">
                        <h1 class="mb-5 text-5xl font-bold text-accent">Tagihan</h1>
                        <p class="mb-5">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi
                            exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
                        <input type="text" placeholder="Nomor Tagihan" class="input w-full max-w-xs" />
                        <button class="btn btn-accent">Cari</button>
                    </div>
                </div>
            </div>
            <!-- Hero End -->

            <!-- Blog Start -->
            <section id="blog" class="pt-36 pb-32 min-h-screen">
                <div class="container mx-auto">
                    <div class="w-full px-4">
                        <div class="max-w-xl mx-auto text-center mb-16">
                            <h2 class="font-bold text-3xl text-accent mb-4 sm:text-4xl lg:text-5xl">Tulisan Terkini</h2>
                            <p class="font-medium text-md text-base-content md:text-lg">Lorem ipsum dolor, sit amet
                                consectetur adipisicing elit. Consectetur suscipit sed cupiditate dolores?</p>
                        </div>
                    </div>
                    <div class="flex flex-wrap">
                        <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                            <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
                                <img src="img/blog/tech.jpg" alt="keyboard" class="w-full">
                                <div class="py-8 px-6">
                                    <h3>
                                        <a href="#"
                                            class="block mb-3 font-semibold text-xl text-base-300 hover:text-accent truncate">Cara
                                            Menghindari Pencurian Data Pribadi</a>
                                    </h3>
                                    <p class="font-medium text-base text-base-content mb-6">Lorem ipsum dolor sit amet
                                        consectetur adipisicing elit. Molestias, numquam?</p>
                                    <a href="#"
                                        class="font-medium text-sm text-white bg-accent py-2 px-4 rounded-lg hover:opacity-80">Baca
                                        Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                        <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                            <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
                                <img src="img/blog/transportation.jpg" alt="transportation" class="w-full">
                                <div class="py-8 px-6">
                                    <h3>
                                        <a href="#"
                                            class="block mb-3 font-semibold text-xl text-base-300 hover:text-accent truncate">Manfaat
                                            Bayar Pajak Bagi Negara</a>
                                    </h3>
                                    <p class="font-medium text-base text-base-content mb-6">Lorem ipsum dolor sit amet
                                        consectetur adipisicing elit. Molestias, numquam?</p>
                                    <a href="#"
                                        class="font-medium text-sm text-white bg-accent py-2 px-4 rounded-lg hover:opacity-80">Baca
                                        Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                        <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                            <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
                                <img src="img/blog/electric.jpg" alt="electric" class="w-full">
                                <div class="py-8 px-6">
                                    <h3>
                                        <a href="#"
                                            class="block mb-3 font-semibold text-xl text-base-300 hover:text-accent truncate">Dampak
                                            Penggunaan Listrik Berlebih</a>
                                    </h3>
                                    <p class="font-medium text-base text-base-content mb-6">Lorem ipsum dolor sit amet
                                        consectetur adipisicing elit. Molestias, numquam?</p>
                                    <a href="#"
                                        class="font-medium text-sm text-white bg-accent py-2 px-4 rounded-lg hover:opacity-80">Baca
                                        Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Blog End -->
        </div>
        <!-- Blog End -->

        <!-- Footer Start -->
        <!-- Footer End -->

        <!-- Sidebar Start -->
        <div class="drawer-side">
            <label for="my-drawer-3" class="drawer-overlay"></label>
            <ul class="menu p-4 w-80 bg-base-100">
                <!-- Sidebar content here -->
                <li><a>Sidebar Item 1</a></li>
                <li><a>Sidebar Item 2</a></li>

            </ul>
        </div>
        <!-- Sidebar End -->
    </div>

</body>

</html>
