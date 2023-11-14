<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

{{$title}}

<!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Upright:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alice&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/mobile-detect@1.4.5/mobile-detect.min.js"></script>
</head>
<body>
<div class="bg-gray-dark  text-white flex flex-row justify-center pt-1 font-alice head-bar">
    <div class="container p-2 flex ">
        <div class="flex-col pr-4 mt-2 hidden sm:block">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                     class="bi bi-geo-alt"
                     viewBox="0 0 16 16">
                    <path
                        d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                    <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                </svg>
            </div>
        </div>
        <div class="flex-col pr-4 mt-1 hidden sm:block">
            <div>
                r-nul Anenii Noi, s. Bulboaca, str. Stefan cel Mare, 1
            </div>
        </div>
        <div class="flex-col pr-4 mt-2 hidden sm:block">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                     class="bi bi-telephone" viewBox="0 0 16 16">
                    <path
                        d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                </svg>
            </div>
        </div>
        <div class="flex-col pr-4 mt-1 hidden sm:block">
            <div>
                (373) 69-916-819
            </div>
        </div>
        <div class="flex-col pr-4 mt-2 hidden xl:block">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                     class="bi bi-envelope" viewBox="0 0 16 16">
                    <path
                        d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                </svg>
            </div>
        </div>
        <div class="flex-col pr-4 mt-1 hidden xl:block">
            <div>
                19197908an@mail.ru
            </div>
        </div>
        <div class="flex-col pr-4 mt-2 hidden xl:block">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                     class="bi bi-clock"
                     viewBox="0 0 16 16">
                    <path
                        d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                </svg>
            </div>
        </div>
        <div class="flex-col pr-4 mt-1 hidden xl:block">
            <div>
                Ore de lucru de la 8:00 la 17:00
            </div>
        </div>
        <div class=" grow  pr-4 flex flex-row ml-4  justify-center sm:justify-end">
            <div class="flex-col pr-4 ml-4 cursor-pointer">
                <div class="relative">
                    <button class="on-search">
                        <x-icon-search width="30" height="30" class="bi bi-search"/>
                    </button>

                    <div class="absolute pt-2 rounded hidden z-50" id="in-search">
                        <div class="flex relative">
                            <div class=" pt-1">
                                <input
                                    class="on-search text-gray border rounded border-gray focus:border-pink focus:ring-pink"
                                    placeholder="Поиск"
                                    type="text"/>
                            </div>
                            <div class=" text-gray-950 m-auto w-4 h-4 right-0 mr-3 top-0 bottom-0 absolute ">
                                <x-icon-search width="20" height="20" class="bi bi-search hover:text-pink"/>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <div class="flex-col pr-4 ml-4 cursor-pointer relative" id="flag">
                <div>
                    <x-flag-md/>
                </div>
                <div class="absolute pt-1 hidden z-50" id="in-flag">
                    <div id="flag-ru">
                        <a href="/ru" class="flag-item">
                            <x-flag-ru/>
                        </a>
                    </div>
                    <div class="pt-1" id="flag-en">
                        <a href="/en" class="flag-item">
                            <x-flag-en/>
                        </a>
                    </div>
                </div>
            </div>
            <div class="flex-col pr-4 ml-4 cursor-pointer">
                <div class="relative">
                    <div id="on-user">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                             class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            <path fill-rule="evenodd"
                                  d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                        </svg>
                    </div>

                    <div id="in-user"
                         class="absolute border border-gray bg-white mt-[19px] text-black z-50 hidden">
                        <h2 class="font-semibold">Авторизация</h2>
                        <div class="mt-2">
                            <div class="h-16 relative">
                                <label id="email-label"
                                       class="font-medium text-sm text-black absolute mt-3 ml-2"
                                       for="email">
                                    Email
                                </label>
                                <input id="email" type="text"
                                       class="rounded  border-gray focus:border-pink focus:ring-pink">
                            </div>
                            <div class="h-8">
                                <label id="password-label"
                                       class="font-medium text-sm text-black  absolute mt-3 ml-2"
                                       for="password">
                                    password
                                </label>
                                <input id="password" type="password"
                                       class="rounded border-gray focus:border-pink focus:ring-pink">
                            </div>
                            <div class=" mt-4 text-left pb-3">
                                <label for="remember_me"
                                       class="inline-flex ml-4 pl-3  items-center justify-end">
                                    <input id="remember_me" type="checkbox"
                                           class="rounded text-pink border-gray focus:border-pink focus:bg-pink focus:text-pink focus:ring-pink"
                                           name="remember">
                                    <span
                                        class="ml-2 text-sm text-gray-800 ">Remember me</span>
                                </label>
                            </div>
                            <div class="text-left pb-3">
                                <a class="underline ml-4 pl-3 text-sm text-gray-600 dark:text-gray-400 hover:text-pink rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                                   href="http://vin.sandaniprim/forgot-password">
                                    Forgot your password?
                                </a>
                            </div>
                            <div class="h-16 justify-center w-full">
                                <button type="submit"
                                        class="inline-flex w-3/4 justify-center items-center  py-2 bg-pink-950 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-dark dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150 ">
                                    Войти
                                </button>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div class="flex-col pr-4 ml-4 cursor-pointer">
                <svg id="main-cart" xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                     fill="currentColor"
                     viewBox="0 0 16 16" class="bi  bi-cart-fill">
                    <path
                        d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                    <circle r="5" fill="#621212" cx="11" cy="5"/>
                    <text x="11" y="8" font-size="8" text-anchor="middle" fill="white">1</text>
                </svg>
            </div>
        </div>

    </div>
</div>
<header>
    <nav>
        <div class="justify-center flex ">
            <div class="sm:container p-2 justify-center sm:flex flex-row  ">
                <div class=" w-[250px] sm:basis-1/7  sm:hidden">
                    <a href="/"><img class="w-full" src="{{@asset('storage/logo.png')}}"/></a>
                </div>
                <x-main-menu/>
            </div>
        </div>
    </nav>
</header>
{{$header}}
{{$body}}
<footer>
    <div class="map mt-6">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m24!1m12!1m3!1d43497.99932049255!2d28.76290149937895!3d47.0475896978286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m9!3e6!4m1!2sr-nul%20Anenii%20Noi%2C%20s.%20Bulboaca%2C%20str.%20Stefan%20cel%20Mare%2C%201!4m5!1s0x40c97dc3dd773c71%3A0xaa1596d32b1fa7ca!2zQW5lbmlpIE5vaSBzLiBCdWxib2FjYSBzdHIuIMiYdGVmYW4gY2VsIE1hcmUgMSwgU3RyYWRhIE1lc2FnZXIgNS80LCBDaGnFn2luxIN1LCDQnNC-0LvQtNC-0LLQsA!3m2!1d47.0475378!2d28.8040213!5e0!3m2!1sru!2s!4v1699518248767!5m2!1sru!2s"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="bg-gray-950 h-[400px] text-white flex justify-center w-full">
        <div class="container grid grid-cols-4 gap-5 mt-6">
            <div class="">
                <h2 class="text-3xl pl-4">Контакты</h2>
                <div class="mt-6 flex flex-row contacts">
                    <div class="bg-pink-950 justify-center flex w-12 h-12 rounded-full icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                             class="bi w-6 h-6 self-center bi-geo-alt" viewBox="0 0 16 16">
                            <path
                                d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"></path>
                            <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
                        </svg>
                    </div>
                    <div class="pl-4 w-3/4">r-nul Anenii Noi, s. Bulboaca, str. Stefan cel Mare, 1</div>
                </div>
                <div class="mt-6 flex flex-row contacts">
                    <div class="bg-pink-950 justify-center flex  w-12 h-12 rounded-full icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                             class="bi  w-6 h-6 self-center bi-telephone" viewBox="0 0 16 16">
                            <path
                                d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"></path>
                        </svg>
                    </div>
                    <div class="pl-4 w-3/4">
                        (373) 69-916-819
                    </div>
                </div>
                <div class="mt-6 flex flex-row contacts">
                    <div class="bg-pink-950 justify-center flex  w-12 h-12 rounded-full icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                             class="bi w-6 h-6 self-center bi-envelope" viewBox="0 0 16 16">
                            <path
                                d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"></path>
                        </svg>
                    </div>
                    <div class="pl-4 w-3/4">
                        19197908an@mail.ru
                    </div>
                </div>
            </div>
            <div>
                <h2 class="text-2xl pl-4">Мой аккаунт</h2>
                <div class="mt-6 footer-list">
                    <div class="pl-4 w-3/4">Личная информация</div>
                    <div class="pl-4 w-3/4 mt-3">Заказы</div>
                    <div class="pl-4 w-3/4 mt-3">Кредитные квитанции</div>
                    <div class="pl-4 w-3/4 mt-3">Адреса</div>
                    <div class="pl-4 w-3/4 mt-3">Мои списки желаний</div>
                </div>

            </div>
            <div>
                <h2 class="text-2xl pl-4">Продукция</h2>
                <div class="mt-6 footer-list">
                    <div class="pl-4 w-3/4">Личная информация</div>
                    <div class="pl-4 w-3/4 mt-3">Заказы</div>
                    <div class="pl-4 w-3/4 mt-3">Кредитные квитанции</div>
                    <div class="pl-4 w-3/4 mt-3">Адреса</div>
                    <div class="pl-4 w-3/4 mt-3">Мои списки желаний</div>
                </div>
            </div>
            <div>
                <h2 class="text-2xl pl-4">О нас</h2>
                <div class="mt-6 footer-list">
                    <div class="pl-4 w-3/4">Личная информация</div>
                    <div class="pl-4 w-3/4 mt-3">Заказы</div>
                    <div class="pl-4 w-3/4 mt-3">Кредитные квитанции</div>
                    <div class="pl-4 w-3/4 mt-3">Адреса</div>
                    <div class="pl-4 w-3/4 mt-3">Мои списки желаний</div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-gray-dark h-12 w-full flex flex-row justify-center text-white">
        <div class="self-center">
            <div>© <span id="data">2022</span>, vin.sandaniprim.md</div>
        </div>
    </div>
    <div id="scrolls" class="flex justify-center fixed right-0 bottom-[150px] text-pink-950 cursor-pointer hover:text-gray-900 opacity-0 transition-opacity duration-500">
        <svg xmlns="http://www.w3.org/2000/svg" width="50"  fill="currentColor" class="bi self-center bi-chevron-up" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"/>
        </svg>
    </div>
</footer>

</body>
</html>
