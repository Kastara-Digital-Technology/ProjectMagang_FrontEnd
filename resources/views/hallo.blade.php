<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="dark">

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
                        <li><a href="#contact">Kontak</a></li>
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
                        <input type="text" placeholder="Nomor Tagihan"
                            class="input w-full max-w-xs bg-slate-200 text-slate-700" />
                        <button class="btn btn-accent">Cari</button>
                    </div>
                </div>
            </div>
            <!-- Hero End -->

            <!-- Blog Start -->
            <section id="blog" class="pt-36 pb-32 min-h-screen bg-base-300">
                <div class="container mx-auto">
                    <div class="w-full px-4">
                        <div class="max-w-xl mx-auto text-center mb-16">
                            <h2 class="font-bold text-3xl text-accent mb-4 sm:text-4xl lg:text-5xl">Tulisan Terkini</h2>
                            <p class="font-medium text-md text-base-content md:text-lg">Lorem ipsum dolor, sit amet
                                consectetur adipisicing elit. Consectetur suscipit sed cupiditate dolores?</p>
                        </div>
                    </div>
                    <div class="flex flex-wrap justify-center">
                        <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                            <div class="bg-primary-content rounded-xl shadow-lg overflow-hidden mb-10">
                                <img src="img/blog/tech.jpg" alt="keyboard" class="w-full">
                                <div class="py-8 px-6">
                                    <h3>
                                        <a href="#"
                                            class="block mb-3 font-semibold text-xl text-accent hover:text-accent-focus truncate">Cara
                                            Menghindari Pencurian Data Pribadi</a>
                                    </h3>
                                    <p class="font-medium text-base text-base-content mb-6">Lorem ipsum dolor sit
                                        amet
                                        consectetur adipisicing elit. Molestias, numquam?</p>
                                    <a href="#"
                                        class="font-medium text-sm text-white bg-accent py-2 px-4 rounded-lg hover:opacity-80">Baca
                                        Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                        <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                            <div class="bg-primary-content rounded-xl shadow-lg overflow-hidden mb-10">
                                <img src="img/blog/transportation.jpg" alt="transportation" class="w-full">
                                <div class="py-8 px-6">
                                    <h3>
                                        <a href="#"
                                            class="block mb-3 font-semibold text-xl text-accent hover:text-accent-focus truncate">Manfaat
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
                            <div class="bg-primary-content rounded-xl shadow-lg overflow-hidden mb-10">
                                <img src="img/blog/electric.jpg" alt="electric" class="w-full">
                                <div class="py-8 px-6">
                                    <h3>
                                        <a href="#"
                                            class="block mb-3 font-semibold text-xl text-accent hover:text-accent-focus truncate">Dampak
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

            <!-- Contact Start -->
            <section id="contact" class="pt-36 pb-32">
                <div class="container mx-auto">
                    <div class="w-full px-4">
                        <div class="max-w-xl mx-auto text-center mb-16">
                            <h2 class="font-bold text-3xl text-accent mb-4 sm:text-4xl lg:text-5xl">Hubungi Kami</h2>
                            <p class="font-medium text-md text-base-content md:text-lg">Lorem ipsum dolor, sit amet
                                consectetur adipisicing elit. Consectetur suscipit sed cupiditate dolores?</p>
                        </div>
                    </div>
                    <form>
                        <div class="w-full lg:w-2/3 lg:mx-auto">
                            <div class="w-full px-4 mb-8">
                                <label for="name" class="text-base font-bold text-accent">Nama</label>
                                <input type="text" id="name"
                                    class="w-full bg-slate-200 text-slate-700 p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary">
                            </div>
                            <div class="w-full px-4 mb-8">
                                <label for="email" class="text-base font-bold text-accent">Email</label>
                                <input type="text" id="email"
                                    class="w-full bg-slate-200 text-slate-700 p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary">
                            </div>
                            <div class="w-full px-4 mb-8">
                                <label for="message" class="text-base font-bold text-accent">Pesan</label>
                                <textarea type="text" id="email"
                                    class="w-full bg-slate-200 text-slate-700 p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary h-32"></textarea>
                            </div>
                            <div class="w-full px-4">
                                <button
                                    class="font-semibold text-base text-white bg-accent py-3 px-8 rounded-full w-full hover:opacity-80 hover:shadow-lg transition duration-500">Kirim</button>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
            <!-- Contact End -->

            <!-- Footer Start -->
            <footer class="footer footer-center p-10 bg-base-200 text-base-content rounded">
                <div class="grid grid-flow-col gap-4">
                    <a href="#home" class="link link-hover">Beranda</a>
                    <a href="#blog" class="link link-hover">Blog</a>
                    <a href="#contact" class="link link-hover">Kontak</a>
                </div>
                <div>
                    <div class="grid grid-flow-col gap-4">
                        <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                class="fill-current">
                                <path
                                    d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z">
                                </path>
                            </svg></a>
                        <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                class="fill-current">
                                <path
                                    d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z">
                                </path>
                            </svg></a>
                        <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                class="fill-current">
                                <path
                                    d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z">
                                </path>
                            </svg></a>
                    </div>
                </div>
                <div>
                    <p>Copyright © 2023 - Projek Akhir Magang</p>
                </div>
            </footer>
            <!-- Footer End -->
        </div>

        <!-- Sidebar Start -->
        <div class="drawer-side">
            <label for="my-drawer-3" class="drawer-overlay"></label>
            <ul class="menu p-4 w-80 bg-base-100">
                <!-- Sidebar content here -->
                <li><a href="#home">Beranda</a></li>
                <li><a href="#blog">Blog</a></li>
                <li><a href="#contact">Kontak</a></li>
            </ul>
        </div>
        <!-- Sidebar End -->
    </div>

</body>

</html>
