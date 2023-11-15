<x-main-layout>
    <x-slot name="title">
        <title>Интернет магазин Молдавских вин</title>
    </x-slot>
    <x-slot name="header">
        <div class="bg-amber-50 ">
            <div
                id="carouselExampleCaptions"
                class="relative"
                data-te-carousel-init
                data-te-ride="false">
                <!--Carousel indicators-->
                <div
                    class="absolute bottom-0 left-0 right-0 z-[2] mx-[15%] mb-4 flex list-none justify-center p-0"
                    data-te-carousel-indicators>
                    <button
                        type="button"
                        data-te-target="#carouselExampleCaptions"
                        data-te-slide-to="0"
                        data-te-carousel-active
                        class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                        aria-current="true"
                        aria-label="Slide 1"></button>
                    <button
                        type="button"
                        data-te-target="#carouselExampleCaptions"
                        data-te-slide-to="1"
                        class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                        aria-label="Slide 2"></button>
                    <button
                        type="button"
                        data-te-target="#carouselExampleCaptions"
                        data-te-slide-to="2"
                        class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                        aria-label="Slide 3"></button>
                </div>

                <!--Carousel items-->
                <div
                    class="relative w-full overflow-hidden after:clear-both after:block after:content-['']">
                    <!--First item-->
                    <div
                        class="relative float-left -mr-[100%] w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                        data-te-carousel-active
                        data-te-carousel-item
                        style="backface-visibility: hidden">
                        <div class="flex justify-center ">
                            <div class="container h-[400px] px-2">
                                <div class="columns-2 gap-5">
                                    <div class="">
                                        <img
                                            src="{{@asset('/storage/banner3.png')}}"
                                            class=""
                                            height="100%"
                                            alt="..."/>
                                    </div>
                                    <div class="pt-12">
                                        <p class="font-serif font-light text-lg  sm:text-xl  lg:text-4xl">
                                            Гармония вкуса и аромата молдавских вин не оставит равнодушным даже самого
                                            искушенного гурмана
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>
                    <!--Second item-->
                    <div
                        class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                        data-te-carousel-item
                        style="backface-visibility: hidden">
                        <img
                            src="https://tecdn.b-cdn.net/img/Photos/Slides/img%20(22).jpg"
                            class="block w-full"
                            alt="..."/>
                        <div
                            class="absolute inset-x-[15%] bottom-5 hidden py-5 text-center text-white md:block">
                            <h5 class="text-xl">Second slide label</h5>
                            <p>
                                Some representative placeholder content for the second slide.
                            </p>
                        </div>
                    </div>
                    <!--Third item-->
                    <div
                        class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                        data-te-carousel-item
                        style="backface-visibility: hidden">
                        <img
                            src="https://tecdn.b-cdn.net/img/Photos/Slides/img%20(23).jpg"
                            class="block w-full"
                            alt="..."/>
                        <div
                            class="absolute inset-x-[15%] bottom-5 hidden py-5 text-center text-white md:block">
                            <h5 class="text-xl">Third slide label</h5>
                            <p>
                                Some representative placeholder content for the third slide.
                            </p>
                        </div>
                    </div>
                </div>

                <!--Carousel controls - prev item-->
                <button
                    class="absolute bottom-0 left-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
                    type="button"
                    data-te-target="#carouselExampleCaptions"
                    data-te-slide="prev">
    <span class="inline-block h-8 w-8">
      <svg
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 24 24"
          stroke-width="1.5"
          stroke="currentColor"
          class="h-6 w-6">
        <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M15.75 19.5L8.25 12l7.5-7.5"/>
      </svg>
    </span>
                    <span
                        class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]"
                    >Previous</span
                    >
                </button>
                <!--Carousel controls - next item-->
                <button
                    class="absolute bottom-0 right-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
                    type="button"
                    data-te-target="#carouselExampleCaptions"
                    data-te-slide="next">
    <span class="inline-block h-8 w-8">
      <svg
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 24 24"
          stroke-width="1.5"
          stroke="currentColor"
          class="h-6 w-6">
        <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M8.25 4.5l7.5 7.5-7.5 7.5"/>
      </svg>
    </span>
                    <span
                        class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]"
                    >Next</span
                    >
                </button>
            </div>

        </div>
    </x-slot>
    <x-slot name="body">
        <div class="justify-center flex slider mt-6">
            <div class="container px-2 overflow-hidden slider-list">
                <h2 class="text-center font-bold font-cinzel text-4xl uppercase">Каталог вин</h2>
                <h3 class="text-center font-cinzel text-xl">
                    Откройте для себя разнообразие вкусов молдавских вин в нашем интернет-магазине
                </h3>

                <div id="catalog-header"
                     class="justify-center slider-track grid grid-flow-col auto-cols-max h-[250px]  mb-3">
                    <div id="catalog-tab-0" class="text-center px-2 py-2 mx-3 w-32 active relative slide tabs">
                        <div class="w-[128px] h-[128px] top-0 bottom-0 left-0 catalog-item-bg right-0 m-auto bg-amber-100 rounded-full absolute"></div>
                        <img class="w-[90%] top-0 bottom-0 left-0 right-0 m-auto absolute"
                             src="{{@asset('storage/catalog1.png')}}">
                       <div class="absolute bottom-0 m-auto left-0 right-0 my-4 py-4 text-xl">Красное вино</div>
                    </div>
                    <div class="justify-center self-center flex text-gray-700 w-[93px]">

                    </div>
                    <div id="catalog-tab-1" class="text-center px-2 py-2 mx-3 w-32 relative slide tabs">
                        <div class="w-[128px] h-[128px] top-0 bottom-0 left-0 catalog-item-bg right-0 m-auto bg-amber-100 rounded-full absolute"></div>
                        <img class="w-[90%] top-0 bottom-0 left-0 right-0 m-auto absolute"
                             src="{{@asset('storage/catalog1.png')}}">
                        <div class="absolute bottom-0 m-auto left-0 right-0 my-4 py-4 text-xl">Красное вино</div>
                    </div>
                    <div class="justify-center self-center flex text-gray-700 w-[93px]">

                    </div>
                    <div id="catalog-tab-2" class="text-center px-2 py-2 mx-3 w-32 relative slide tabs">
                        <div class="w-[128px] h-[128px] top-0 bottom-0 left-0 catalog-item-bg right-0 m-auto bg-amber-100 rounded-full absolute"></div>
                        <img class="w-[90%] top-0 bottom-0 left-0 right-0 m-auto absolute"
                             src="{{@asset('storage/catalog1.png')}}">
                        <div class="absolute bottom-0 m-auto left-0 right-0 my-4 py-4 text-xl">Красное вино</div>
                    </div>
                    <div class="justify-center self-center flex text-gray-700 w-[93px]">

                    </div>
                    <div id="catalog-tab-3" class="text-center px-2 py-2 mx-3 w-32 relative slide tabs">
                        <div class="w-[128px] h-[128px] top-0 bottom-0 left-0 catalog-item-bg right-0 m-auto bg-amber-100 rounded-full absolute"></div>
                        <img class="w-[90%] top-0 bottom-0 left-0 right-0 m-auto absolute"
                             src="{{@asset('storage/catalog1.png')}}">
                        <div class="absolute bottom-0 m-auto left-0 right-0 my-4 py-4 text-xl">Красное вино</div>
                    </div>
                    <div class="justify-center self-center flex text-gray-700 w-[93px]">

                    </div>
                    <div id="catalog-tab-4" class="text-center px-2 py-2 mx-3 w-32 relative slide tabs">
                        <div class="w-[128px] h-[128px] top-0 bottom-0 left-0 catalog-item-bg right-0 m-auto bg-amber-100 rounded-full absolute"></div>
                        <img class="w-[90%] top-0 bottom-0 left-0 right-0 m-auto absolute"
                             src="{{@asset('storage/catalog1.png')}}">
                        <div class="absolute bottom-0 m-auto left-0 right-0 my-4 py-4 text-xl">Красное вино</div>
                    </div>
                </div>
            </div>
            <div class="slider-arrows hidden">
                <button type="button" class="prev">&larr;</button>
                <button type="button" class="next">&rarr;</button>
            </div>
        </div>
        <div  class="justify-center flex mt-3">
            <div data-tab="catalog-tab-0" class="container products px-2 grid  sm:grid-cols-2 lg:grid-cols-4 gap-6 justify-center text-center">
                <div class="w-full h-[406px] px-3 product border border-amber-200 ">
                    <div class="relative">
                        <div class="absolute bg-green text-white px-3 mt-2 py-1">Новинка</div>
                        <div class="absolute  text-pink-950 px-3 py-1 top-0 right-0  m-auto">-10%</div>
                        <img
                            data-id="1"
                            alt="Table Full of Spices"
                            data-price="48,00 €"
                            data-description="Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!"
                            class="w-full cursor-pointer pt-12" src="{{@asset("storage/product.png")}}">
                        <div class="product-content ">
                            <div class="text-pink-950  px-3 py-1 "><h3 class="text-2xl mt-3 product-head">Aliquam Porro
                                    Quaerat</h3></div>
                            <div class="text-pink-950 px-3"><h3 class="text-2xl product-price">48,00 €</h3></div>
                        </div>
                        <div class="text-pink-950 px-3">
                            <div class="text-2xl  flex flex-row justify-center">
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-eye-fill" viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                        <path
                                            d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-heart-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                              d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-cart-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="w-full h-[406px] px-3 product border border-amber-200 ">
                    <div class="relative">
                        <div class="absolute bg-green text-white px-3 mt-2 py-1">Новинка</div>

                        <div class="absolute  text-pink-950 px-3 py-1 top-0 right-0  m-auto">-10%</div>
                        <img
                            data-id="2"
                            alt="Table Full of Spices2"
                            data-price="48,00 €"
                            data-description="Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!"
                            class="w-full cursor-pointer pt-12" src="{{@asset("storage/product.png")}}">
                        <div class="product-content ">
                            <div class="text-pink-950  px-3 py-1 "><h3 class="text-2xl mt-3 product-head">Aliquam Porro
                                    Quaerat</h3></div>
                            <div class="text-pink-950 px-3"><h3 class="text-2xl product-price">48,00 €</h3></div>
                        </div>
                        <div class="text-pink-950 px-3">
                            <div class="text-2xl  flex flex-row justify-center">
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-eye-fill" viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                        <path
                                            d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-heart-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                              d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-cart-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="w-full h-[406px] px-3 product border border-amber-200 ">
                    <div class="relative">
                        <div class="absolute bg-green text-white px-3 mt-2 py-1">Новинка</div>

                        <div class="absolute  text-pink-950 px-3 py-1 top-0 right-0  m-auto">-10%</div>
                        <img
                            data-id="3"
                            alt="Table Full of Spices3"
                            data-price="48,00 €"
                            data-description="Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!"
                            class="w-full cursor-pointer pt-12" src="{{@asset("storage/product.png")}}">
                        <div class="product-content ">
                            <div class="text-pink-950  px-3 py-1 "><h3 class="text-2xl mt-3 product-head">Aliquam Porro
                                    Quaerat</h3></div>
                            <div class="text-pink-950 px-3"><h3 class="text-2xl product-price">48,00 €</h3></div>
                        </div>
                        <div class="text-pink-950 px-3">
                            <div class="text-2xl  flex flex-row justify-center">
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-eye-fill" viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                        <path
                                            d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-heart-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                              d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-cart-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="w-full h-[406px] px-3 product border border-amber-200 ">
                    <div class="relative">
                        <div class="absolute bg-green text-white px-3 mt-2 py-1">Новинка</div>

                        <div class="absolute  text-pink-950 px-3 py-1 top-0 right-0  m-auto">-10%</div>
                        <img
                            data-id="4"
                            alt="Table Full of Spices"
                            data-price="48,00 €"
                            data-description="Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!"
                            class="w-full cursor-pointer pt-12" src="{{@asset("storage/product.png")}}">
                        <div class="product-content ">
                            <div class="text-pink-950  px-3 py-1 "><h3 class="text-2xl mt-3 product-head">Aliquam Porro
                                    Quaerat</h3></div>
                            <div class="text-pink-950 px-3"><h3 class="text-2xl product-price">48,00 €</h3></div>
                        </div>
                        <div class="text-pink-950 px-3">
                            <div class="text-2xl  flex flex-row justify-center">
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-eye-fill" viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                        <path
                                            d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-heart-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                              d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-cart-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="w-full h-[406px] px-3 product border border-amber-200 ">
                    <div class="relative">
                        <div class="absolute bg-green text-white px-3 mt-2 py-1">Новинка</div>

                        <div class="absolute  text-pink-950 px-3 py-1 top-0 right-0  m-auto">-10%</div>
                        <img
                            data-id="5"
                            alt="Table Full of Spices"
                            data-price="48,00 €"
                            data-description="Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!"
                            class="w-full cursor-pointer pt-12" src="{{@asset("storage/product.png")}}">
                        <div class="product-content ">
                            <div class="text-pink-950  px-3 py-1 "><h3 class="text-2xl mt-3 product-head">Aliquam Porro
                                    Quaerat</h3></div>
                            <div class="text-pink-950 px-3"><h3 class="text-2xl product-price">48,00 €</h3></div>
                        </div>
                        <div class="text-pink-950 px-3">
                            <div class="text-2xl  flex flex-row justify-center">
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-eye-fill" viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                        <path
                                            d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-heart-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                              d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-cart-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="w-full h-[406px] px-3 product border border-amber-200 ">
                    <div class="relative">
                        <div class="absolute bg-green text-white px-3 mt-2 py-1">Новинка</div>

                        <div class="absolute  text-pink-950 px-3 py-1 top-0 right-0  m-auto">-10%</div>
                        <img
                            data-id="6"
                            alt="Table Full of Spices"
                            data-price="48,00 €"
                            data-description="Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!"
                            class="w-full cursor-pointer pt-12" src="{{@asset("storage/product.png")}}">
                        <div class="product-content ">
                            <div class="text-pink-950  px-3 py-1 "><h3 class="text-2xl mt-3 product-head">Aliquam Porro
                                    Quaerat</h3></div>
                            <div class="text-pink-950 px-3"><h3 class="text-2xl product-price">48,00 €</h3></div>
                        </div>
                        <div class="text-pink-950 px-3">
                            <div class="text-2xl  flex flex-row justify-center">
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-eye-fill" viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                        <path
                                            d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-heart-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                              d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-cart-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="w-full h-[406px] px-3 product border border-amber-200 ">
                    <div class="relative">
                        <div class="absolute bg-green text-white px-3 mt-2 py-1">Новинка</div>

                        <div class="absolute  text-pink-950 px-3 py-1 top-0 right-0  m-auto">-10%</div>
                        <img
                            data-id="7"
                            alt="Table Full of Spices"
                            data-price="48,00 €"
                            data-description="Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!"
                            class="w-full cursor-pointer pt-12" src="{{@asset("storage/product.png")}}">
                        <div class="product-content ">
                            <div class="text-pink-950  px-3 py-1 "><h3 class="text-2xl mt-3 product-head">Aliquam Porro
                                    Quaerat</h3></div>
                            <div class="text-pink-950 px-3"><h3 class="text-2xl product-price">48,00 €</h3></div>
                        </div>
                        <div class="text-pink-950 px-3">
                            <div class="text-2xl  flex flex-row justify-center">
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-eye-fill" viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                        <path
                                            d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-heart-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                              d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-cart-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="w-full h-[406px] px-3 product border border-amber-200 ">
                    <div class="relative">
                        <div class="absolute bg-green text-white px-3 mt-2 py-1">Новинка</div>

                        <div class="absolute  text-pink-950 px-3 py-1 top-0 right-0  m-auto">-10%</div>
                        <img
                            data-id="8"
                            alt="Table Full of Spices"
                            data-price="48,00 €"
                            data-description="Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!"
                            class="w-full cursor-pointer pt-12" src="{{@asset("storage/product.png")}}">
                        <div class="product-content ">
                            <div class="text-pink-950  px-3 py-1 "><h3 class="text-2xl mt-3 product-head">Aliquam Porro
                                    Quaerat</h3></div>
                            <div class="text-pink-950 px-3"><h3 class="text-2xl product-price">48,00 €</h3></div>
                        </div>
                        <div class="text-pink-950 px-3">
                            <div class="text-2xl  flex flex-row justify-center">
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-eye-fill" viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                        <path
                                            d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-heart-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                              d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-cart-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="w-full h-[406px] px-3 product border border-amber-200 ">
                    <div class="relative">
                        <div class="absolute bg-green text-white px-3 mt-2 py-1">Новинка</div>

                        <div class="absolute  text-pink-950 px-3 py-1 top-0 right-0  m-auto">-10%</div>
                        <img
                            data-id="9"
                            alt="Table Full of Spices"
                            data-price="48,00 €"
                            data-description="Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!"
                            class="w-full cursor-pointer pt-12" src="{{@asset("storage/product.png")}}">
                        <div class="product-content ">
                            <div class="text-pink-950  px-3 py-1 "><h3 class="text-2xl mt-3 product-head">Aliquam Porro
                                    Quaerat</h3></div>
                            <div class="text-pink-950 px-3"><h3 class="text-2xl product-price">48,00 €</h3></div>
                        </div>
                        <div class="text-pink-950 px-3">
                            <div class="text-2xl  flex flex-row justify-center">
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-eye-fill" viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                        <path
                                            d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-heart-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                              d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-cart-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="w-full h-[406px] px-3 product border border-amber-200 ">
                    <div class="relative">
                        <div class="absolute bg-green text-white px-3 mt-2 py-1">Новинка</div>

                        <div class="absolute  text-pink-950 px-3 py-1 top-0 right-0  m-auto">-10%</div>
                        <img
                            data-id="10"
                            alt="Table Full of Spices"
                            data-price="48,00 €"
                            data-description="Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!"
                            class="w-full cursor-pointer pt-12" src="{{@asset("storage/product.png")}}">
                        <div class="product-content ">
                            <div class="text-pink-950  px-3 py-1 "><h3 class="text-2xl mt-3 product-head">Aliquam Porro
                                    Quaerat</h3></div>
                            <div class="text-pink-950 px-3"><h3 class="text-2xl product-price">48,00 €</h3></div>
                        </div>
                        <div class="text-pink-950 px-3">
                            <div class="text-2xl  flex flex-row justify-center">
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-eye-fill" viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                        <path
                                            d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-heart-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                              d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-cart-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="w-full h-[406px] px-3 product border border-amber-200 ">
                    <div class="relative">
                        <div class="absolute bg-green text-white px-3 mt-2 py-1">Новинка</div>

                        <div class="absolute  text-pink-950 px-3 py-1 top-0 right-0  m-auto">-10%</div>
                        <img
                            data-id="11"
                            alt="Table Full of Spices"
                            data-price="48,00 €"
                            data-description="Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!"
                            class="w-full cursor-pointer pt-12" src="{{@asset("storage/product.png")}}">
                        <div class="product-content ">
                            <div class="text-pink-950  px-3 py-1 "><h3 class="text-2xl mt-3 product-head">Aliquam Porro
                                    Quaerat</h3></div>
                            <div class="text-pink-950 px-3"><h3 class="text-2xl product-price">48,00 €</h3></div>
                        </div>
                        <div class="text-pink-950 px-3">
                            <div class="text-2xl  flex flex-row justify-center">
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-eye-fill" viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                        <path
                                            d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-heart-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                              d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-cart-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div data-tab="catalog-tab-1" class="container products hidden px-2 grid  sm:grid-cols-2 lg:grid-cols-4 gap-6 justify-center text-center">
                <div class="w-full h-[406px] px-3 product border border-amber-200 ">
                    <div class="relative">
                        <div class="absolute bg-green text-white px-3 mt-2 py-1">Новинка</div>
                        <div class="absolute  text-pink-950 px-3 py-1 top-0 right-0  m-auto">-10%</div>
                        <img
                            data-id="1"
                            alt="Table Full of Spices"
                            data-price="48,00 €"
                            data-description="Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!"
                            class="w-full cursor-pointer pt-12" src="{{@asset("storage/product.png")}}">
                        <div class="product-content ">
                            <div class="text-pink-950  px-3 py-1 "><h3 class="text-2xl mt-3 product-head">Aliquam Porro
                                    Quaerat</h3></div>
                            <div class="text-pink-950 px-3"><h3 class="text-2xl product-price">48,00 €</h3></div>
                        </div>
                        <div class="text-pink-950 px-3">
                            <div class="text-2xl  flex flex-row justify-center">
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-eye-fill" viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                        <path
                                            d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-heart-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                              d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-cart-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="w-full h-[406px] px-3 product border border-amber-200 ">
                    <div class="relative">
                        <div class="absolute bg-green text-white px-3 mt-2 py-1">Новинка</div>

                        <div class="absolute  text-pink-950 px-3 py-1 top-0 right-0  m-auto">-10%</div>
                        <img
                            data-id="2"
                            alt="Table Full of Spices2"
                            data-price="48,00 €"
                            data-description="Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!"
                            class="w-full cursor-pointer pt-12" src="{{@asset("storage/product.png")}}">
                        <div class="product-content ">
                            <div class="text-pink-950  px-3 py-1 "><h3 class="text-2xl mt-3 product-head">Aliquam Porro
                                    Quaerat</h3></div>
                            <div class="text-pink-950 px-3"><h3 class="text-2xl product-price">48,00 €</h3></div>
                        </div>
                        <div class="text-pink-950 px-3">
                            <div class="text-2xl  flex flex-row justify-center">
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-eye-fill" viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                        <path
                                            d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-heart-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                              d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-cart-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="w-full h-[406px] px-3 product border border-amber-200 ">
                    <div class="relative">
                        <div class="absolute bg-green text-white px-3 mt-2 py-1">Новинка</div>

                        <div class="absolute  text-pink-950 px-3 py-1 top-0 right-0  m-auto">-10%</div>
                        <img
                            data-id="3"
                            alt="Table Full of Spices3"
                            data-price="48,00 €"
                            data-description="Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!"
                            class="w-full cursor-pointer pt-12" src="{{@asset("storage/product.png")}}">
                        <div class="product-content ">
                            <div class="text-pink-950  px-3 py-1 "><h3 class="text-2xl mt-3 product-head">Aliquam Porro
                                    Quaerat</h3></div>
                            <div class="text-pink-950 px-3"><h3 class="text-2xl product-price">48,00 €</h3></div>
                        </div>
                        <div class="text-pink-950 px-3">
                            <div class="text-2xl  flex flex-row justify-center">
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-eye-fill" viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                        <path
                                            d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-heart-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                              d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-cart-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="w-full h-[406px] px-3 product border border-amber-200 ">
                    <div class="relative">
                        <div class="absolute bg-green text-white px-3 mt-2 py-1">Новинка</div>

                        <div class="absolute  text-pink-950 px-3 py-1 top-0 right-0  m-auto">-10%</div>
                        <img
                            data-id="4"
                            alt="Table Full of Spices"
                            data-price="48,00 €"
                            data-description="Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!"
                            class="w-full cursor-pointer pt-12" src="{{@asset("storage/product.png")}}">
                        <div class="product-content ">
                            <div class="text-pink-950  px-3 py-1 "><h3 class="text-2xl mt-3 product-head">Aliquam Porro
                                    Quaerat</h3></div>
                            <div class="text-pink-950 px-3"><h3 class="text-2xl product-price">48,00 €</h3></div>
                        </div>
                        <div class="text-pink-950 px-3">
                            <div class="text-2xl  flex flex-row justify-center">
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-eye-fill" viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                        <path
                                            d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-heart-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                              d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-cart-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="w-full h-[406px] px-3 product border border-amber-200 ">
                    <div class="relative">
                        <div class="absolute bg-green text-white px-3 mt-2 py-1">Новинка</div>

                        <div class="absolute  text-pink-950 px-3 py-1 top-0 right-0  m-auto">-10%</div>
                        <img
                            data-id="5"
                            alt="Table Full of Spices"
                            data-price="48,00 €"
                            data-description="Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!"
                            class="w-full cursor-pointer pt-12" src="{{@asset("storage/product.png")}}">
                        <div class="product-content ">
                            <div class="text-pink-950  px-3 py-1 "><h3 class="text-2xl mt-3 product-head">Aliquam Porro
                                    Quaerat</h3></div>
                            <div class="text-pink-950 px-3"><h3 class="text-2xl product-price">48,00 €</h3></div>
                        </div>
                        <div class="text-pink-950 px-3">
                            <div class="text-2xl  flex flex-row justify-center">
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-eye-fill" viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                        <path
                                            d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-heart-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                              d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-cart-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="w-full h-[406px] px-3 product border border-amber-200 ">
                    <div class="relative">
                        <div class="absolute bg-green text-white px-3 mt-2 py-1">Новинка</div>

                        <div class="absolute  text-pink-950 px-3 py-1 top-0 right-0  m-auto">-10%</div>
                        <img
                            data-id="6"
                            alt="Table Full of Spices"
                            data-price="48,00 €"
                            data-description="Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!"
                            class="w-full cursor-pointer pt-12" src="{{@asset("storage/product.png")}}">
                        <div class="product-content ">
                            <div class="text-pink-950  px-3 py-1 "><h3 class="text-2xl mt-3 product-head">Aliquam Porro
                                    Quaerat</h3></div>
                            <div class="text-pink-950 px-3"><h3 class="text-2xl product-price">48,00 €</h3></div>
                        </div>
                        <div class="text-pink-950 px-3">
                            <div class="text-2xl  flex flex-row justify-center">
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-eye-fill" viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                        <path
                                            d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-heart-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                              d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-cart-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="w-full h-[406px] px-3 product border border-amber-200 ">
                    <div class="relative">
                        <div class="absolute bg-green text-white px-3 mt-2 py-1">Новинка</div>

                        <div class="absolute  text-pink-950 px-3 py-1 top-0 right-0  m-auto">-10%</div>
                        <img
                            data-id="7"
                            alt="Table Full of Spices"
                            data-price="48,00 €"
                            data-description="Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!"
                            class="w-full cursor-pointer pt-12" src="{{@asset("storage/product.png")}}">
                        <div class="product-content ">
                            <div class="text-pink-950  px-3 py-1 "><h3 class="text-2xl mt-3 product-head">Aliquam Porro
                                    Quaerat</h3></div>
                            <div class="text-pink-950 px-3"><h3 class="text-2xl product-price">48,00 €</h3></div>
                        </div>
                        <div class="text-pink-950 px-3">
                            <div class="text-2xl  flex flex-row justify-center">
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-eye-fill" viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                        <path
                                            d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-heart-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                              d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-cart-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="w-full h-[406px] px-3 product border border-amber-200 ">
                    <div class="relative">
                        <div class="absolute bg-green text-white px-3 mt-2 py-1">Новинка</div>

                        <div class="absolute  text-pink-950 px-3 py-1 top-0 right-0  m-auto">-10%</div>
                        <img
                            data-id="8"
                            alt="Table Full of Spices"
                            data-price="48,00 €"
                            data-description="Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!"
                            class="w-full cursor-pointer pt-12" src="{{@asset("storage/product.png")}}">
                        <div class="product-content ">
                            <div class="text-pink-950  px-3 py-1 "><h3 class="text-2xl mt-3 product-head">Aliquam Porro
                                    Quaerat</h3></div>
                            <div class="text-pink-950 px-3"><h3 class="text-2xl product-price">48,00 €</h3></div>
                        </div>
                        <div class="text-pink-950 px-3">
                            <div class="text-2xl  flex flex-row justify-center">
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-eye-fill" viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                        <path
                                            d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-heart-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                              d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-cart-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="w-full h-[406px] px-3 product border border-amber-200 ">
                    <div class="relative">
                        <div class="absolute bg-green text-white px-3 mt-2 py-1">Новинка</div>

                        <div class="absolute  text-pink-950 px-3 py-1 top-0 right-0  m-auto">-10%</div>
                        <img
                            data-id="9"
                            alt="Table Full of Spices"
                            data-price="48,00 €"
                            data-description="Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!"
                            class="w-full cursor-pointer pt-12" src="{{@asset("storage/product.png")}}">
                        <div class="product-content ">
                            <div class="text-pink-950  px-3 py-1 "><h3 class="text-2xl mt-3 product-head">Aliquam Porro
                                    Quaerat</h3></div>
                            <div class="text-pink-950 px-3"><h3 class="text-2xl product-price">48,00 €</h3></div>
                        </div>
                        <div class="text-pink-950 px-3">
                            <div class="text-2xl  flex flex-row justify-center">
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-eye-fill" viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                        <path
                                            d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-heart-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                              d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-cart-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="w-full h-[406px] px-3 product border border-amber-200 ">
                    <div class="relative">
                        <div class="absolute bg-green text-white px-3 mt-2 py-1">Новинка</div>

                        <div class="absolute  text-pink-950 px-3 py-1 top-0 right-0  m-auto">-10%</div>
                        <img
                            data-id="10"
                            alt="Table Full of Spices"
                            data-price="48,00 €"
                            data-description="Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!"
                            class="w-full cursor-pointer pt-12" src="{{@asset("storage/product.png")}}">
                        <div class="product-content ">
                            <div class="text-pink-950  px-3 py-1 "><h3 class="text-2xl mt-3 product-head">Aliquam Porro
                                    Quaerat</h3></div>
                            <div class="text-pink-950 px-3"><h3 class="text-2xl product-price">48,00 €</h3></div>
                        </div>
                        <div class="text-pink-950 px-3">
                            <div class="text-2xl  flex flex-row justify-center">
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-eye-fill" viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                        <path
                                            d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-heart-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                              d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-cart-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="w-full h-[406px] px-3 product border border-amber-200 ">
                    <div class="relative">
                        <div class="absolute bg-green text-white px-3 mt-2 py-1">Новинка</div>

                        <div class="absolute  text-pink-950 px-3 py-1 top-0 right-0  m-auto">-10%</div>
                        <img
                            data-id="11"
                            alt="Table Full of Spices"
                            data-price="48,00 €"
                            data-description="Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!"
                            class="w-full cursor-pointer pt-12" src="{{@asset("storage/product.png")}}">
                        <div class="product-content ">
                            <div class="text-pink-950  px-3 py-1 "><h3 class="text-2xl mt-3 product-head">Aliquam Porro
                                    Quaerat</h3></div>
                            <div class="text-pink-950 px-3"><h3 class="text-2xl product-price">48,00 €</h3></div>
                        </div>
                        <div class="text-pink-950 px-3">
                            <div class="text-2xl  flex flex-row justify-center">
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-eye-fill" viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                        <path
                                            d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-heart-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                              d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-cart-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div data-tab="catalog-tab-2" class="container products hidden px-2 grid  sm:grid-cols-2 lg:grid-cols-4 gap-6 justify-center text-center">
                <div class="w-full h-[406px] px-3 product border border-amber-200 ">
                    <div class="relative">
                        <div class="absolute bg-green text-white px-3 mt-2 py-1">Новинка</div>
                        <div class="absolute  text-pink-950 px-3 py-1 top-0 right-0  m-auto">-10%</div>
                        <img
                            data-id="1"
                            alt="Table Full of Spices"
                            data-price="48,00 €"
                            data-description="Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!"
                            class="w-full cursor-pointer pt-12" src="{{@asset("storage/product.png")}}">
                        <div class="product-content ">
                            <div class="text-pink-950  px-3 py-1 "><h3 class="text-2xl mt-3 product-head">Aliquam Porro
                                    Quaerat</h3></div>
                            <div class="text-pink-950 px-3"><h3 class="text-2xl product-price">48,00 €</h3></div>
                        </div>
                        <div class="text-pink-950 px-3">
                            <div class="text-2xl  flex flex-row justify-center">
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-eye-fill" viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                        <path
                                            d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-heart-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                              d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-cart-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="w-full h-[406px] px-3 product border border-amber-200 ">
                    <div class="relative">
                        <div class="absolute bg-green text-white px-3 mt-2 py-1">Новинка</div>

                        <div class="absolute  text-pink-950 px-3 py-1 top-0 right-0  m-auto">-10%</div>
                        <img
                            data-id="2"
                            alt="Table Full of Spices2"
                            data-price="48,00 €"
                            data-description="Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!"
                            class="w-full cursor-pointer pt-12" src="{{@asset("storage/product.png")}}">
                        <div class="product-content ">
                            <div class="text-pink-950  px-3 py-1 "><h3 class="text-2xl mt-3 product-head">Aliquam Porro
                                    Quaerat</h3></div>
                            <div class="text-pink-950 px-3"><h3 class="text-2xl product-price">48,00 €</h3></div>
                        </div>
                        <div class="text-pink-950 px-3">
                            <div class="text-2xl  flex flex-row justify-center">
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-eye-fill" viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                        <path
                                            d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-heart-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                              d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-cart-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="w-full h-[406px] px-3 product border border-amber-200 ">
                    <div class="relative">
                        <div class="absolute bg-green text-white px-3 mt-2 py-1">Новинка</div>

                        <div class="absolute  text-pink-950 px-3 py-1 top-0 right-0  m-auto">-10%</div>
                        <img
                            data-id="3"
                            alt="Table Full of Spices3"
                            data-price="48,00 €"
                            data-description="Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!"
                            class="w-full cursor-pointer pt-12" src="{{@asset("storage/product.png")}}">
                        <div class="product-content ">
                            <div class="text-pink-950  px-3 py-1 "><h3 class="text-2xl mt-3 product-head">Aliquam Porro
                                    Quaerat</h3></div>
                            <div class="text-pink-950 px-3"><h3 class="text-2xl product-price">48,00 €</h3></div>
                        </div>
                        <div class="text-pink-950 px-3">
                            <div class="text-2xl  flex flex-row justify-center">
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-eye-fill" viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                        <path
                                            d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-heart-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                              d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-cart-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="w-full h-[406px] px-3 product border border-amber-200 ">
                    <div class="relative">
                        <div class="absolute bg-green text-white px-3 mt-2 py-1">Новинка</div>

                        <div class="absolute  text-pink-950 px-3 py-1 top-0 right-0  m-auto">-10%</div>
                        <img
                            data-id="4"
                            alt="Table Full of Spices"
                            data-price="48,00 €"
                            data-description="Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!"
                            class="w-full cursor-pointer pt-12" src="{{@asset("storage/product.png")}}">
                        <div class="product-content ">
                            <div class="text-pink-950  px-3 py-1 "><h3 class="text-2xl mt-3 product-head">Aliquam Porro
                                    Quaerat</h3></div>
                            <div class="text-pink-950 px-3"><h3 class="text-2xl product-price">48,00 €</h3></div>
                        </div>
                        <div class="text-pink-950 px-3">
                            <div class="text-2xl  flex flex-row justify-center">
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-eye-fill" viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                        <path
                                            d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-heart-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                              d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-cart-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="w-full h-[406px] px-3 product border border-amber-200 ">
                    <div class="relative">
                        <div class="absolute bg-green text-white px-3 mt-2 py-1">Новинка</div>

                        <div class="absolute  text-pink-950 px-3 py-1 top-0 right-0  m-auto">-10%</div>
                        <img
                            data-id="5"
                            alt="Table Full of Spices"
                            data-price="48,00 €"
                            data-description="Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!"
                            class="w-full cursor-pointer pt-12" src="{{@asset("storage/product.png")}}">
                        <div class="product-content ">
                            <div class="text-pink-950  px-3 py-1 "><h3 class="text-2xl mt-3 product-head">Aliquam Porro
                                    Quaerat</h3></div>
                            <div class="text-pink-950 px-3"><h3 class="text-2xl product-price">48,00 €</h3></div>
                        </div>
                        <div class="text-pink-950 px-3">
                            <div class="text-2xl  flex flex-row justify-center">
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-eye-fill" viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                        <path
                                            d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-heart-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                              d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-cart-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="w-full h-[406px] px-3 product border border-amber-200 ">
                    <div class="relative">
                        <div class="absolute bg-green text-white px-3 mt-2 py-1">Новинка</div>

                        <div class="absolute  text-pink-950 px-3 py-1 top-0 right-0  m-auto">-10%</div>
                        <img
                            data-id="6"
                            alt="Table Full of Spices"
                            data-price="48,00 €"
                            data-description="Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!"
                            class="w-full cursor-pointer pt-12" src="{{@asset("storage/product.png")}}">
                        <div class="product-content ">
                            <div class="text-pink-950  px-3 py-1 "><h3 class="text-2xl mt-3 product-head">Aliquam Porro
                                    Quaerat</h3></div>
                            <div class="text-pink-950 px-3"><h3 class="text-2xl product-price">48,00 €</h3></div>
                        </div>
                        <div class="text-pink-950 px-3">
                            <div class="text-2xl  flex flex-row justify-center">
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-eye-fill" viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                        <path
                                            d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-heart-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                              d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-cart-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="w-full h-[406px] px-3 product border border-amber-200 ">
                    <div class="relative">
                        <div class="absolute bg-green text-white px-3 mt-2 py-1">Новинка</div>

                        <div class="absolute  text-pink-950 px-3 py-1 top-0 right-0  m-auto">-10%</div>
                        <img
                            data-id="7"
                            alt="Table Full of Spices"
                            data-price="48,00 €"
                            data-description="Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!"
                            class="w-full cursor-pointer pt-12" src="{{@asset("storage/product.png")}}">
                        <div class="product-content ">
                            <div class="text-pink-950  px-3 py-1 "><h3 class="text-2xl mt-3 product-head">Aliquam Porro
                                    Quaerat</h3></div>
                            <div class="text-pink-950 px-3"><h3 class="text-2xl product-price">48,00 €</h3></div>
                        </div>
                        <div class="text-pink-950 px-3">
                            <div class="text-2xl  flex flex-row justify-center">
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-eye-fill" viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                        <path
                                            d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-heart-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                              d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-cart-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="w-full h-[406px] px-3 product border border-amber-200 ">
                    <div class="relative">
                        <div class="absolute bg-green text-white px-3 mt-2 py-1">Новинка</div>

                        <div class="absolute  text-pink-950 px-3 py-1 top-0 right-0  m-auto">-10%</div>
                        <img
                            data-id="8"
                            alt="Table Full of Spices"
                            data-price="48,00 €"
                            data-description="Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!"
                            class="w-full cursor-pointer pt-12" src="{{@asset("storage/product.png")}}">
                        <div class="product-content ">
                            <div class="text-pink-950  px-3 py-1 "><h3 class="text-2xl mt-3 product-head">Aliquam Porro
                                    Quaerat</h3></div>
                            <div class="text-pink-950 px-3"><h3 class="text-2xl product-price">48,00 €</h3></div>
                        </div>
                        <div class="text-pink-950 px-3">
                            <div class="text-2xl  flex flex-row justify-center">
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-eye-fill" viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                        <path
                                            d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-heart-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                              d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-cart-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="w-full h-[406px] px-3 product border border-amber-200 ">
                    <div class="relative">
                        <div class="absolute bg-green text-white px-3 mt-2 py-1">Новинка</div>

                        <div class="absolute  text-pink-950 px-3 py-1 top-0 right-0  m-auto">-10%</div>
                        <img
                            data-id="9"
                            alt="Table Full of Spices"
                            data-price="48,00 €"
                            data-description="Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!"
                            class="w-full cursor-pointer pt-12" src="{{@asset("storage/product.png")}}">
                        <div class="product-content ">
                            <div class="text-pink-950  px-3 py-1 "><h3 class="text-2xl mt-3 product-head">Aliquam Porro
                                    Quaerat</h3></div>
                            <div class="text-pink-950 px-3"><h3 class="text-2xl product-price">48,00 €</h3></div>
                        </div>
                        <div class="text-pink-950 px-3">
                            <div class="text-2xl  flex flex-row justify-center">
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-eye-fill" viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                        <path
                                            d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-heart-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                              d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-cart-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="w-full h-[406px] px-3 product border border-amber-200 ">
                    <div class="relative">
                        <div class="absolute bg-green text-white px-3 mt-2 py-1">Новинка</div>

                        <div class="absolute  text-pink-950 px-3 py-1 top-0 right-0  m-auto">-10%</div>
                        <img
                            data-id="10"
                            alt="Table Full of Spices"
                            data-price="48,00 €"
                            data-description="Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!"
                            class="w-full cursor-pointer pt-12" src="{{@asset("storage/product.png")}}">
                        <div class="product-content ">
                            <div class="text-pink-950  px-3 py-1 "><h3 class="text-2xl mt-3 product-head">Aliquam Porro
                                    Quaerat</h3></div>
                            <div class="text-pink-950 px-3"><h3 class="text-2xl product-price">48,00 €</h3></div>
                        </div>
                        <div class="text-pink-950 px-3">
                            <div class="text-2xl  flex flex-row justify-center">
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-eye-fill" viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                        <path
                                            d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-heart-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                              d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-cart-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="w-full h-[406px] px-3 product border border-amber-200 ">
                    <div class="relative">
                        <div class="absolute bg-green text-white px-3 mt-2 py-1">Новинка</div>

                        <div class="absolute  text-pink-950 px-3 py-1 top-0 right-0  m-auto">-10%</div>
                        <img
                            data-id="11"
                            alt="Table Full of Spices"
                            data-price="48,00 €"
                            data-description="Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!"
                            class="w-full cursor-pointer pt-12" src="{{@asset("storage/product.png")}}">
                        <div class="product-content ">
                            <div class="text-pink-950  px-3 py-1 "><h3 class="text-2xl mt-3 product-head">Aliquam Porro
                                    Quaerat</h3></div>
                            <div class="text-pink-950 px-3"><h3 class="text-2xl product-price">48,00 €</h3></div>
                        </div>
                        <div class="text-pink-950 px-3">
                            <div class="text-2xl  flex flex-row justify-center">
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-eye-fill" viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                        <path
                                            d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-heart-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                              d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-cart-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div data-tab="catalog-tab-3" class="container products hidden px-2 grid  sm:grid-cols-2 lg:grid-cols-4 gap-6 justify-center text-center">
                <div class="w-full h-[406px] px-3 product border border-amber-200 ">
                    <div class="relative">
                        <div class="absolute bg-green text-white px-3 mt-2 py-1">Новинка</div>
                        <div class="absolute  text-pink-950 px-3 py-1 top-0 right-0  m-auto">-10%</div>
                        <img
                            data-id="1"
                            alt="Table Full of Spices"
                            data-price="48,00 €"
                            data-description="Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!"
                            class="w-full cursor-pointer pt-12" src="{{@asset("storage/product.png")}}">
                        <div class="product-content ">
                            <div class="text-pink-950  px-3 py-1 "><h3 class="text-2xl mt-3 product-head">Aliquam Porro
                                    Quaerat</h3></div>
                            <div class="text-pink-950 px-3"><h3 class="text-2xl product-price">48,00 €</h3></div>
                        </div>
                        <div class="text-pink-950 px-3">
                            <div class="text-2xl  flex flex-row justify-center">
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-eye-fill" viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                        <path
                                            d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-heart-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                              d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-cart-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="w-full h-[406px] px-3 product border border-amber-200 ">
                    <div class="relative">
                        <div class="absolute bg-green text-white px-3 mt-2 py-1">Новинка</div>

                        <div class="absolute  text-pink-950 px-3 py-1 top-0 right-0  m-auto">-10%</div>
                        <img
                            data-id="2"
                            alt="Table Full of Spices2"
                            data-price="48,00 €"
                            data-description="Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!"
                            class="w-full cursor-pointer pt-12" src="{{@asset("storage/product.png")}}">
                        <div class="product-content ">
                            <div class="text-pink-950  px-3 py-1 "><h3 class="text-2xl mt-3 product-head">Aliquam Porro
                                    Quaerat</h3></div>
                            <div class="text-pink-950 px-3"><h3 class="text-2xl product-price">48,00 €</h3></div>
                        </div>
                        <div class="text-pink-950 px-3">
                            <div class="text-2xl  flex flex-row justify-center">
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-eye-fill" viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                        <path
                                            d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-heart-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                              d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-cart-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="w-full h-[406px] px-3 product border border-amber-200 ">
                    <div class="relative">
                        <div class="absolute bg-green text-white px-3 mt-2 py-1">Новинка</div>

                        <div class="absolute  text-pink-950 px-3 py-1 top-0 right-0  m-auto">-10%</div>
                        <img
                            data-id="3"
                            alt="Table Full of Spices3"
                            data-price="48,00 €"
                            data-description="Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!"
                            class="w-full cursor-pointer pt-12" src="{{@asset("storage/product.png")}}">
                        <div class="product-content ">
                            <div class="text-pink-950  px-3 py-1 "><h3 class="text-2xl mt-3 product-head">Aliquam Porro
                                    Quaerat</h3></div>
                            <div class="text-pink-950 px-3"><h3 class="text-2xl product-price">48,00 €</h3></div>
                        </div>
                        <div class="text-pink-950 px-3">
                            <div class="text-2xl  flex flex-row justify-center">
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-eye-fill" viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                        <path
                                            d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-heart-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                              d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-cart-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="w-full h-[406px] px-3 product border border-amber-200 ">
                    <div class="relative">
                        <div class="absolute bg-green text-white px-3 mt-2 py-1">Новинка</div>

                        <div class="absolute  text-pink-950 px-3 py-1 top-0 right-0  m-auto">-10%</div>
                        <img
                            data-id="4"
                            alt="Table Full of Spices"
                            data-price="48,00 €"
                            data-description="Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!"
                            class="w-full cursor-pointer pt-12" src="{{@asset("storage/product.png")}}">
                        <div class="product-content ">
                            <div class="text-pink-950  px-3 py-1 "><h3 class="text-2xl mt-3 product-head">Aliquam Porro
                                    Quaerat</h3></div>
                            <div class="text-pink-950 px-3"><h3 class="text-2xl product-price">48,00 €</h3></div>
                        </div>
                        <div class="text-pink-950 px-3">
                            <div class="text-2xl  flex flex-row justify-center">
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-eye-fill" viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                        <path
                                            d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-heart-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                              d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-cart-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="w-full h-[406px] px-3 product border border-amber-200 ">
                    <div class="relative">
                        <div class="absolute bg-green text-white px-3 mt-2 py-1">Новинка</div>

                        <div class="absolute  text-pink-950 px-3 py-1 top-0 right-0  m-auto">-10%</div>
                        <img
                            data-id="5"
                            alt="Table Full of Spices"
                            data-price="48,00 €"
                            data-description="Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!"
                            class="w-full cursor-pointer pt-12" src="{{@asset("storage/product.png")}}">
                        <div class="product-content ">
                            <div class="text-pink-950  px-3 py-1 "><h3 class="text-2xl mt-3 product-head">Aliquam Porro
                                    Quaerat</h3></div>
                            <div class="text-pink-950 px-3"><h3 class="text-2xl product-price">48,00 €</h3></div>
                        </div>
                        <div class="text-pink-950 px-3">
                            <div class="text-2xl  flex flex-row justify-center">
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-eye-fill" viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                        <path
                                            d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-heart-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                              d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-cart-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="w-full h-[406px] px-3 product border border-amber-200 ">
                    <div class="relative">
                        <div class="absolute bg-green text-white px-3 mt-2 py-1">Новинка</div>

                        <div class="absolute  text-pink-950 px-3 py-1 top-0 right-0  m-auto">-10%</div>
                        <img
                            data-id="6"
                            alt="Table Full of Spices"
                            data-price="48,00 €"
                            data-description="Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!"
                            class="w-full cursor-pointer pt-12" src="{{@asset("storage/product.png")}}">
                        <div class="product-content ">
                            <div class="text-pink-950  px-3 py-1 "><h3 class="text-2xl mt-3 product-head">Aliquam Porro
                                    Quaerat</h3></div>
                            <div class="text-pink-950 px-3"><h3 class="text-2xl product-price">48,00 €</h3></div>
                        </div>
                        <div class="text-pink-950 px-3">
                            <div class="text-2xl  flex flex-row justify-center">
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-eye-fill" viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                        <path
                                            d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-heart-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                              d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-cart-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="w-full h-[406px] px-3 product border border-amber-200 ">
                    <div class="relative">
                        <div class="absolute bg-green text-white px-3 mt-2 py-1">Новинка</div>

                        <div class="absolute  text-pink-950 px-3 py-1 top-0 right-0  m-auto">-10%</div>
                        <img
                            data-id="7"
                            alt="Table Full of Spices"
                            data-price="48,00 €"
                            data-description="Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!"
                            class="w-full cursor-pointer pt-12" src="{{@asset("storage/product.png")}}">
                        <div class="product-content ">
                            <div class="text-pink-950  px-3 py-1 "><h3 class="text-2xl mt-3 product-head">Aliquam Porro
                                    Quaerat</h3></div>
                            <div class="text-pink-950 px-3"><h3 class="text-2xl product-price">48,00 €</h3></div>
                        </div>
                        <div class="text-pink-950 px-3">
                            <div class="text-2xl  flex flex-row justify-center">
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-eye-fill" viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                        <path
                                            d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-heart-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                              d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-cart-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="w-full h-[406px] px-3 product border border-amber-200 ">
                    <div class="relative">
                        <div class="absolute bg-green text-white px-3 mt-2 py-1">Новинка</div>

                        <div class="absolute  text-pink-950 px-3 py-1 top-0 right-0  m-auto">-10%</div>
                        <img
                            data-id="8"
                            alt="Table Full of Spices"
                            data-price="48,00 €"
                            data-description="Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!"
                            class="w-full cursor-pointer pt-12" src="{{@asset("storage/product.png")}}">
                        <div class="product-content ">
                            <div class="text-pink-950  px-3 py-1 "><h3 class="text-2xl mt-3 product-head">Aliquam Porro
                                    Quaerat</h3></div>
                            <div class="text-pink-950 px-3"><h3 class="text-2xl product-price">48,00 €</h3></div>
                        </div>
                        <div class="text-pink-950 px-3">
                            <div class="text-2xl  flex flex-row justify-center">
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-eye-fill" viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                        <path
                                            d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-heart-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                              d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-cart-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="w-full h-[406px] px-3 product border border-amber-200 ">
                    <div class="relative">
                        <div class="absolute bg-green text-white px-3 mt-2 py-1">Новинка</div>

                        <div class="absolute  text-pink-950 px-3 py-1 top-0 right-0  m-auto">-10%</div>
                        <img
                            data-id="9"
                            alt="Table Full of Spices"
                            data-price="48,00 €"
                            data-description="Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!"
                            class="w-full cursor-pointer pt-12" src="{{@asset("storage/product.png")}}">
                        <div class="product-content ">
                            <div class="text-pink-950  px-3 py-1 "><h3 class="text-2xl mt-3 product-head">Aliquam Porro
                                    Quaerat</h3></div>
                            <div class="text-pink-950 px-3"><h3 class="text-2xl product-price">48,00 €</h3></div>
                        </div>
                        <div class="text-pink-950 px-3">
                            <div class="text-2xl  flex flex-row justify-center">
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-eye-fill" viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                        <path
                                            d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-heart-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                              d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-cart-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="w-full h-[406px] px-3 product border border-amber-200 ">
                    <div class="relative">
                        <div class="absolute bg-green text-white px-3 mt-2 py-1">Новинка</div>

                        <div class="absolute  text-pink-950 px-3 py-1 top-0 right-0  m-auto">-10%</div>
                        <img
                            data-id="10"
                            alt="Table Full of Spices"
                            data-price="48,00 €"
                            data-description="Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!"
                            class="w-full cursor-pointer pt-12" src="{{@asset("storage/product.png")}}">
                        <div class="product-content ">
                            <div class="text-pink-950  px-3 py-1 "><h3 class="text-2xl mt-3 product-head">Aliquam Porro
                                    Quaerat</h3></div>
                            <div class="text-pink-950 px-3"><h3 class="text-2xl product-price">48,00 €</h3></div>
                        </div>
                        <div class="text-pink-950 px-3">
                            <div class="text-2xl  flex flex-row justify-center">
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-eye-fill" viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                        <path
                                            d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-heart-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                              d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-cart-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="w-full h-[406px] px-3 product border border-amber-200 ">
                    <div class="relative">
                        <div class="absolute bg-green text-white px-3 mt-2 py-1">Новинка</div>

                        <div class="absolute  text-pink-950 px-3 py-1 top-0 right-0  m-auto">-10%</div>
                        <img
                            data-id="11"
                            alt="Table Full of Spices"
                            data-price="48,00 €"
                            data-description="Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!"
                            class="w-full cursor-pointer pt-12" src="{{@asset("storage/product.png")}}">
                        <div class="product-content ">
                            <div class="text-pink-950  px-3 py-1 "><h3 class="text-2xl mt-3 product-head">Aliquam Porro
                                    Quaerat</h3></div>
                            <div class="text-pink-950 px-3"><h3 class="text-2xl product-price">48,00 €</h3></div>
                        </div>
                        <div class="text-pink-950 px-3">
                            <div class="text-2xl  flex flex-row justify-center">
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-eye-fill" viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                        <path
                                            d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-heart-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                              d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-cart-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div data-tab="catalog-tab-4" class="container products hidden px-2 grid  sm:grid-cols-2 lg:grid-cols-4 gap-6 justify-center text-center">
                <div class="w-full h-[406px] px-3 product border border-amber-200 ">
                    <div class="relative">
                        <div class="absolute bg-green text-white px-3 mt-2 py-1">Новинка</div>
                        <div class="absolute  text-pink-950 px-3 py-1 top-0 right-0  m-auto">-10%</div>
                        <img
                            data-id="1"
                            alt="Table Full of Spices"
                            data-price="48,00 €"
                            data-description="Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!"
                            class="w-full cursor-pointer pt-12" src="{{@asset("storage/product.png")}}">
                        <div class="product-content ">
                            <div class="text-pink-950  px-3 py-1 "><h3 class="text-2xl mt-3 product-head">Aliquam Porro
                                    Quaerat</h3></div>
                            <div class="text-pink-950 px-3"><h3 class="text-2xl product-price">48,00 €</h3></div>
                        </div>
                        <div class="text-pink-950 px-3">
                            <div class="text-2xl  flex flex-row justify-center">
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-eye-fill" viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                        <path
                                            d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-heart-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                              d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-cart-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="w-full h-[406px] px-3 product border border-amber-200 ">
                    <div class="relative">
                        <div class="absolute bg-green text-white px-3 mt-2 py-1">Новинка</div>

                        <div class="absolute  text-pink-950 px-3 py-1 top-0 right-0  m-auto">-10%</div>
                        <img
                            data-id="2"
                            alt="Table Full of Spices2"
                            data-price="48,00 €"
                            data-description="Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!"
                            class="w-full cursor-pointer pt-12" src="{{@asset("storage/product.png")}}">
                        <div class="product-content ">
                            <div class="text-pink-950  px-3 py-1 "><h3 class="text-2xl mt-3 product-head">Aliquam Porro
                                    Quaerat</h3></div>
                            <div class="text-pink-950 px-3"><h3 class="text-2xl product-price">48,00 €</h3></div>
                        </div>
                        <div class="text-pink-950 px-3">
                            <div class="text-2xl  flex flex-row justify-center">
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-eye-fill" viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                        <path
                                            d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-heart-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                              d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-cart-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="w-full h-[406px] px-3 product border border-amber-200 ">
                    <div class="relative">
                        <div class="absolute bg-green text-white px-3 mt-2 py-1">Новинка</div>

                        <div class="absolute  text-pink-950 px-3 py-1 top-0 right-0  m-auto">-10%</div>
                        <img
                            data-id="3"
                            alt="Table Full of Spices3"
                            data-price="48,00 €"
                            data-description="Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!"
                            class="w-full cursor-pointer pt-12" src="{{@asset("storage/product.png")}}">
                        <div class="product-content ">
                            <div class="text-pink-950  px-3 py-1 "><h3 class="text-2xl mt-3 product-head">Aliquam Porro
                                    Quaerat</h3></div>
                            <div class="text-pink-950 px-3"><h3 class="text-2xl product-price">48,00 €</h3></div>
                        </div>
                        <div class="text-pink-950 px-3">
                            <div class="text-2xl  flex flex-row justify-center">
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-eye-fill" viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                        <path
                                            d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-heart-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                              d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-cart-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="w-full h-[406px] px-3 product border border-amber-200 ">
                    <div class="relative">
                        <div class="absolute bg-green text-white px-3 mt-2 py-1">Новинка</div>

                        <div class="absolute  text-pink-950 px-3 py-1 top-0 right-0  m-auto">-10%</div>
                        <img
                            data-id="4"
                            alt="Table Full of Spices"
                            data-price="48,00 €"
                            data-description="Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!"
                            class="w-full cursor-pointer pt-12" src="{{@asset("storage/product.png")}}">
                        <div class="product-content ">
                            <div class="text-pink-950  px-3 py-1 "><h3 class="text-2xl mt-3 product-head">Aliquam Porro
                                    Quaerat</h3></div>
                            <div class="text-pink-950 px-3"><h3 class="text-2xl product-price">48,00 €</h3></div>
                        </div>
                        <div class="text-pink-950 px-3">
                            <div class="text-2xl  flex flex-row justify-center">
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-eye-fill" viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                        <path
                                            d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-heart-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                              d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-cart-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="w-full h-[406px] px-3 product border border-amber-200 ">
                    <div class="relative">
                        <div class="absolute bg-green text-white px-3 mt-2 py-1">Новинка</div>

                        <div class="absolute  text-pink-950 px-3 py-1 top-0 right-0  m-auto">-10%</div>
                        <img
                            data-id="5"
                            alt="Table Full of Spices"
                            data-price="48,00 €"
                            data-description="Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!"
                            class="w-full cursor-pointer pt-12" src="{{@asset("storage/product.png")}}">
                        <div class="product-content ">
                            <div class="text-pink-950  px-3 py-1 "><h3 class="text-2xl mt-3 product-head">Aliquam Porro
                                    Quaerat</h3></div>
                            <div class="text-pink-950 px-3"><h3 class="text-2xl product-price">48,00 €</h3></div>
                        </div>
                        <div class="text-pink-950 px-3">
                            <div class="text-2xl  flex flex-row justify-center">
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-eye-fill" viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                        <path
                                            d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-heart-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                              d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-cart-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="w-full h-[406px] px-3 product border border-amber-200 ">
                    <div class="relative">
                        <div class="absolute bg-green text-white px-3 mt-2 py-1">Новинка</div>

                        <div class="absolute  text-pink-950 px-3 py-1 top-0 right-0  m-auto">-10%</div>
                        <img
                            data-id="6"
                            alt="Table Full of Spices"
                            data-price="48,00 €"
                            data-description="Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!"
                            class="w-full cursor-pointer pt-12" src="{{@asset("storage/product.png")}}">
                        <div class="product-content ">
                            <div class="text-pink-950  px-3 py-1 "><h3 class="text-2xl mt-3 product-head">Aliquam Porro
                                    Quaerat</h3></div>
                            <div class="text-pink-950 px-3"><h3 class="text-2xl product-price">48,00 €</h3></div>
                        </div>
                        <div class="text-pink-950 px-3">
                            <div class="text-2xl  flex flex-row justify-center">
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-eye-fill" viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                        <path
                                            d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-heart-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                              d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-cart-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="w-full h-[406px] px-3 product border border-amber-200 ">
                    <div class="relative">
                        <div class="absolute bg-green text-white px-3 mt-2 py-1">Новинка</div>

                        <div class="absolute  text-pink-950 px-3 py-1 top-0 right-0  m-auto">-10%</div>
                        <img
                            data-id="7"
                            alt="Table Full of Spices"
                            data-price="48,00 €"
                            data-description="Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!"
                            class="w-full cursor-pointer pt-12" src="{{@asset("storage/product.png")}}">
                        <div class="product-content ">
                            <div class="text-pink-950  px-3 py-1 "><h3 class="text-2xl mt-3 product-head">Aliquam Porro
                                    Quaerat</h3></div>
                            <div class="text-pink-950 px-3"><h3 class="text-2xl product-price">48,00 €</h3></div>
                        </div>
                        <div class="text-pink-950 px-3">
                            <div class="text-2xl  flex flex-row justify-center">
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-eye-fill" viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                        <path
                                            d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-heart-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                              d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-cart-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="w-full h-[406px] px-3 product border border-amber-200 ">
                    <div class="relative">
                        <div class="absolute bg-green text-white px-3 mt-2 py-1">Новинка</div>

                        <div class="absolute  text-pink-950 px-3 py-1 top-0 right-0  m-auto">-10%</div>
                        <img
                            data-id="8"
                            alt="Table Full of Spices"
                            data-price="48,00 €"
                            data-description="Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!"
                            class="w-full cursor-pointer pt-12" src="{{@asset("storage/product.png")}}">
                        <div class="product-content ">
                            <div class="text-pink-950  px-3 py-1 "><h3 class="text-2xl mt-3 product-head">Aliquam Porro
                                    Quaerat</h3></div>
                            <div class="text-pink-950 px-3"><h3 class="text-2xl product-price">48,00 €</h3></div>
                        </div>
                        <div class="text-pink-950 px-3">
                            <div class="text-2xl  flex flex-row justify-center">
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-eye-fill" viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                        <path
                                            d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-heart-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                              d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-cart-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="w-full h-[406px] px-3 product border border-amber-200 ">
                    <div class="relative">
                        <div class="absolute bg-green text-white px-3 mt-2 py-1">Новинка</div>

                        <div class="absolute  text-pink-950 px-3 py-1 top-0 right-0  m-auto">-10%</div>
                        <img
                            data-id="9"
                            alt="Table Full of Spices"
                            data-price="48,00 €"
                            data-description="Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!"
                            class="w-full cursor-pointer pt-12" src="{{@asset("storage/product.png")}}">
                        <div class="product-content ">
                            <div class="text-pink-950  px-3 py-1 "><h3 class="text-2xl mt-3 product-head">Aliquam Porro
                                    Quaerat</h3></div>
                            <div class="text-pink-950 px-3"><h3 class="text-2xl product-price">48,00 €</h3></div>
                        </div>
                        <div class="text-pink-950 px-3">
                            <div class="text-2xl  flex flex-row justify-center">
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-eye-fill" viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                        <path
                                            d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-heart-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                              d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-cart-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="w-full h-[406px] px-3 product border border-amber-200 ">
                    <div class="relative">
                        <div class="absolute bg-green text-white px-3 mt-2 py-1">Новинка</div>

                        <div class="absolute  text-pink-950 px-3 py-1 top-0 right-0  m-auto">-10%</div>
                        <img
                            data-id="10"
                            alt="Table Full of Spices"
                            data-price="48,00 €"
                            data-description="Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!"
                            class="w-full cursor-pointer pt-12" src="{{@asset("storage/product.png")}}">
                        <div class="product-content ">
                            <div class="text-pink-950  px-3 py-1 "><h3 class="text-2xl mt-3 product-head">Aliquam Porro
                                    Quaerat</h3></div>
                            <div class="text-pink-950 px-3"><h3 class="text-2xl product-price">48,00 €</h3></div>
                        </div>
                        <div class="text-pink-950 px-3">
                            <div class="text-2xl  flex flex-row justify-center">
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-eye-fill" viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                        <path
                                            d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-heart-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                              d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-cart-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="w-full h-[406px] px-3 product border border-amber-200 ">
                    <div class="relative">
                        <div class="absolute bg-green text-white px-3 mt-2 py-1">Новинка</div>

                        <div class="absolute  text-pink-950 px-3 py-1 top-0 right-0  m-auto">-10%</div>
                        <img
                            data-id="11"
                            alt="Table Full of Spices"
                            data-price="48,00 €"
                            data-description="Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!"
                            class="w-full cursor-pointer pt-12" src="{{@asset("storage/product.png")}}">
                        <div class="product-content ">
                            <div class="text-pink-950  px-3 py-1 "><h3 class="text-2xl mt-3 product-head">Aliquam Porro
                                    Quaerat</h3></div>
                            <div class="text-pink-950 px-3"><h3 class="text-2xl product-price">48,00 €</h3></div>
                        </div>
                        <div class="text-pink-950 px-3">
                            <div class="text-2xl  flex flex-row justify-center">
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-eye-fill" viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                        <path
                                            d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-heart-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                              d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                    </svg>
                                </div>
                                <div
                                    class="basis-auto mr-2 bg-pink-950 w-10 h-10 justify-center flex product-icon hover:bg-gray-dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi self-center  text-white bi-cart-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="justify-center flex mt-6 relative">
            <img class="w-full" src="{{@asset("storage/fon-baner.png")}}">
            <img class="w-1/3 absolute m-auto left-0 mt-min-1" src="{{@asset("storage/vinograd.png")}}">
            <div
                class="container h-full px-2 absolute flex flex-row  text-sm sm:text-sm  md:text-2xl lg:text-4xl font-serif">
                <div class="w-1/4"></div>
                <div class="w-3/4 self-center relative">
                    Широкий ассортимент качественных вин с доставкой на дом в нашем интернет-магазине – идеальный выбор
                    для истинных ценителей напитка
                    <div class="absolute m-auto bottom-0 right-0 h-0 w-1/4  flex">
                        <div
                            class="h-[32px] md:h-[72px] text-white w-full bg-pink-950 hover:bg-gray-950 self-center xl:mt-[200px]">
                            <a href="/#">
                                <svg xmlns="http://www.w3.org/2000/svg" height="100%" width="100%" fill="currentColor"
                                     class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                          d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="w-1/4"></div>
            </div>
        </div>
        <div class="flex justify-center mt-6">
            <div class="container px-2 grid  grid-cols-1 lg:grid-cols-2 gap-5">
                <div class="relative">
                    <img class="w-full" src="{{@asset("storage/banner.png")}}">
                    <div class="absolute flex m-auto top-0 w-full h-full">
                        <div class="w-1/2 text-center"></div>
                        <div class="w-1/2 text-center mt-6 font-serif relative">
                            <div class="text-pink-950 text-2xl px-5 leading-none">
                                20% Скидка
                            </div>
                            <div class=" text-xl sm:text-3xl px-5 leading-none lg:leading-tight">Фирменное розовое
                                вино
                            </div>
                            <div
                                class="text-2xl px-5 flex justify-center absolute m-auto bottom-0 left-0 mb-4   right-0">
                                <div class="bg-pink-950 hover:bg-gray-950 pt-1 text-white w-[150px] h-[50px]"><a
                                        class="block" href="/#">Купить</a></div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="relative">
                    <img class="w-full" src="{{@asset("storage/banner.png")}}">
                    <div class="absolute flex m-auto top-0 w-full h-full">
                        <div class="w-1/2 text-center"></div>
                        <div class="w-1/2 text-center mt-6 font-serif relative">
                            <div class="text-pink-950 text-2xl px-5 leading-none">
                                20% Скидка
                            </div>
                            <div class=" text-xl sm:text-3xl px-5 leading-none lg:leading-tight">Фирменное розовое
                                вино
                            </div>
                            <div
                                class="text-2xl px-5 flex justify-center absolute m-auto bottom-0 left-0 mb-4   right-0">
                                <div class="bg-pink-950 hover:bg-gray-950 pt-1 text-white w-[150px] h-[50px]"><a
                                        class="block" href="/#">Купить</a></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-center mt-6">
            <div class="container px-2">
                <h2 class="text-center font-bold font-cinzel text-4xl">НАШИ КЛИЕНТЫ</h2>
                <h3 class="text-center font-cinzel text-xl">Всегда найдется что сказать хорошего</h3>
                <div
                    id="carouselExampleControls2"
                    class="relative mt-6"
                    data-te-carousel-init
                    data-te-ride="false">
                    <!--Carousel items-->
                    <div
                        class="relative w-full overflow-hidden after:clear-both after:block after:content-['']">
                        <!--First item-->
                        <div
                            class="relative float-left -mr-[100%] w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                            data-te-carousel-item
                            data-te-carousel-active >
                            <div class="grid grid-cols-2 ">
                                <div class="flex flex-row">
                                    <div class="w-1/4"><img class="rounded-full w-full p-5"  src="{{@asset("storage/usersImg.png")}}"></div>
                                    <div class="ml-4 w-3/4 mt-8 font-serif">
                                        <div class="text-2xl">Дима</div>
                                        <div class="text-2xl">23.10.2023</div>
                                        <div class="text-xl">Как уроженец Калифорнии, я&nbsp;большой поклонник вина! Местное вино&nbsp;&mdash; мое слабое место, и&nbsp;я&nbsp;никогда не&nbsp;упускал возможности попробовать какое-нибудь новое вино... В&nbsp;принципе, именно поэтому я&nbsp;посещаю этот ресторан каждую неделю. У&nbsp;них есть обширный ассортимент местных калифорнийских вин, а&nbsp;также вин из&nbsp;других штатов!</div>
                                    </div>
                                </div>
                                <div class="flex flex-row">
                                    <div class="w-1/4"><img class="rounded-full w-full p-5"  src="{{@asset("storage/usersImg.png")}}"></div>
                                    <div class="ml-4 w-3/4 mt-8 font-serif">
                                        <div class="text-2xl">Дима</div>
                                        <div class="text-2xl">23.10.2023</div>
                                        <div class="text-xl">Как уроженец Калифорнии, я&nbsp;большой поклонник вина! Местное вино&nbsp;&mdash; мое слабое место, и&nbsp;я&nbsp;никогда не&nbsp;упускал возможности попробовать какое-нибудь новое вино... В&nbsp;принципе, именно поэтому я&nbsp;посещаю этот ресторан каждую неделю. У&nbsp;них есть обширный ассортимент местных калифорнийских вин, а&nbsp;также вин из&nbsp;других штатов!</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Second item-->
                        <div
                            class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                            data-te-carousel-item>
                            <div class="grid grid-cols-2 ">
                                <div class="flex flex-row">
                                    <div class="w-1/4"><img class="rounded-full w-full p-5"  src="{{@asset("storage/usersImg.png")}}"></div>
                                    <div class="ml-4 w-3/4 mt-8 font-serif">
                                        <div class="text-2xl">Дима</div>
                                        <div class="text-2xl">23.10.2023</div>
                                        <div class="text-xl">Как уроженец Калифорнии, я&nbsp;большой поклонник вина! Местное вино&nbsp;&mdash; мое слабое место, и&nbsp;я&nbsp;никогда не&nbsp;упускал возможности попробовать какое-нибудь новое вино... В&nbsp;принципе, именно поэтому я&nbsp;посещаю этот ресторан каждую неделю. У&nbsp;них есть обширный ассортимент местных калифорнийских вин, а&nbsp;также вин из&nbsp;других штатов!</div>
                                    </div>
                                </div>
                                <div class="flex flex-row">
                                    <div class="w-1/4"><img class="rounded-full w-full p-5"  src="{{@asset("storage/usersImg.png")}}"></div>
                                    <div class="ml-4 w-3/4 mt-8 font-serif">
                                        <div class="text-2xl">Дима</div>
                                        <div class="text-2xl">23.10.2023</div>
                                        <div class="text-xl">Как уроженец Калифорнии, я&nbsp;большой поклонник вина! Местное вино&nbsp;&mdash; мое слабое место, и&nbsp;я&nbsp;никогда не&nbsp;упускал возможности попробовать какое-нибудь новое вино... В&nbsp;принципе, именно поэтому я&nbsp;посещаю этот ресторан каждую неделю. У&nbsp;них есть обширный ассортимент местных калифорнийских вин, а&nbsp;также вин из&nbsp;других штатов!</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Third item-->
                        <div
                            class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                            data-te-carousel-item>
                            <div class="grid grid-cols-2 ">
                                <div class="flex flex-row">
                                    <div class="w-1/4"><img class="rounded-full w-full p-5"  src="{{@asset("storage/usersImg.png")}}"></div>
                                    <div class="ml-4 w-3/4 mt-8 font-serif">
                                        <div class="text-2xl">Дима</div>
                                        <div class="text-2xl">23.10.2023</div>
                                        <div class="text-xl">Как уроженец Калифорнии, я&nbsp;большой поклонник вина! Местное вино&nbsp;&mdash; мое слабое место, и&nbsp;я&nbsp;никогда не&nbsp;упускал возможности попробовать какое-нибудь новое вино... В&nbsp;принципе, именно поэтому я&nbsp;посещаю этот ресторан каждую неделю. У&nbsp;них есть обширный ассортимент местных калифорнийских вин, а&nbsp;также вин из&nbsp;других штатов!</div>
                                    </div>
                                </div>
                                <div class="flex flex-row">
                                    <div class="w-1/4"><img class="rounded-full w-full p-5"  src="{{@asset("storage/usersImg.png")}}"></div>
                                    <div class="ml-4 w-3/4 mt-8 font-serif">
                                        <div class="text-2xl">Дима</div>
                                        <div class="text-2xl">23.10.2023</div>
                                        <div class="text-xl">Как уроженец Калифорнии, я&nbsp;большой поклонник вина! Местное вино&nbsp;&mdash; мое слабое место, и&nbsp;я&nbsp;никогда не&nbsp;упускал возможности попробовать какое-нибудь новое вино... В&nbsp;принципе, именно поэтому я&nbsp;посещаю этот ресторан каждую неделю. У&nbsp;них есть обширный ассортимент местных калифорнийских вин, а&nbsp;также вин из&nbsp;других штатов!</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Carousel controls - prev item-->
                    <button
                        class="absolute bottom-0 left-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
                        type="button"
                        data-te-target="#carouselExampleControls2"
                        data-te-slide="prev">
    <span class="inline-block text-pink-950 absolute bottom-0 left-0 m-auto h-8 w-8">
      <svg
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 24 24"
          stroke-width="1.5"
          stroke="currentColor"
          class="h-6 w-6">
        <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M15.75 19.5L8.25 12l7.5-7.5"/>
      </svg>
    </span>
                        <span
                            class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]"
                        >Previous</span
                        >
                    </button>
                    <!--Carousel controls - next item-->
                    <button
                        class="absolute bottom-0 right-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
                        type="button"
                        data-te-target="#carouselExampleControls2"
                        data-te-slide="next">
    <span class="inline-block text-pink-950 absolute m-auto bottom-0 right-0 h-8 w-8">
      <svg
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 24 24"
          stroke-width="1.5"
          stroke="currentColor"
          class="h-6 w-6">
        <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M8.25 4.5l7.5 7.5-7.5 7.5" />
      </svg>
    </span>
                        <span
                            class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]"
                        >Next</span
                        >
                    </button>
                </div>
            </div>
        </div>
        <div class="flex justify-center mt-6">
            <div class="container px-2">
                <h2 class="text-center font-bold font-cinzel text-4xl uppercase">НОВОСТНОЙ БЛОГ</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5 mt-6">
                    <div>
                      <div class="flex font-alice">
                          <div class="w-1/4 p-4 bg-pink-950 flex w-[100px] justify-center">
                              <div class="self-center text-white ">
                                  <div class="text-center text-4xl">5</div>
                                  <div class="text-center">Декабрь</div>
                              </div>
                          </div>
                          <div class="mx-4 text-2xl "><h2>Новость</h2></div>
                      </div>
                        <div class="text-xl font-serif">Как уроженец Калифорнии, я большой поклонник вина! Местное вино - мое слабое место, и я никогда не упускал возможности попробовать какое-нибудь новое вино… </div>
                        <div class="text-xl text-right text-pink-950 hover:text-gray-950"><a href="/#">Подробнее . . .</a></div>
                    </div>
                    <div>
                        <div class="flex font-alice">
                            <div class="w-1/4 p-4 bg-pink-950 flex w-[100px] justify-center">
                                <div class="self-center text-white ">
                                    <div class="text-center text-4xl">5</div>
                                    <div class="text-center">Декабрь</div>
                                </div>
                            </div>
                            <div class="mx-4 text-2xl "><h2>Новость</h2></div>
                        </div>
                        <div class="text-xl font-serif">
                            Как уроженец Калифорнии, я большой поклонник вина! Местное вино - мое слабое место, и я никогда не упускал возможности попробовать какое-нибудь новое вино…
                        </div>
                        <div class="text-xl text-right text-pink-950 hover:text-gray-950"><a href="/#">Подробнее . . .</a></div>
                    </div>
                    <div>
                        <div class="flex font-alice">
                            <div class="w-1/4 p-4 bg-pink-950 flex w-[100px] justify-center">
                                <div class="self-center text-white ">
                                    <div class="text-center text-4xl">5</div>
                                    <div class="text-center">Декабрь</div>
                                </div>
                            </div>
                            <div class="mx-4 text-2xl "><h2>Новость</h2></div>
                        </div>
                        <div class="text-xl font-serif">Как уроженец Калифорнии, я большой поклонник вина! Местное вино - мое слабое место, и я никогда не упускал возможности попробовать какое-нибудь новое вино… </div>
                        <div class="text-xl text-right text-pink-950 hover:text-gray-950"><a href="/#">Подробнее . . .</a></div>
                    </div>
                    <div>
                        <div class="flex font-alice">
                            <div class="w-1/4 p-4 bg-pink-950 w-[100px] flex justify-center">
                                <div class="self-center text-white ">
                                    <div class="text-center text-4xl">5</div>
                                    <div class="text-center px-2">Декабрь</div>
                                </div>
                            </div>
                            <div class="mx-4 text-2xl "><h2>Новость</h2></div>
                        </div>
                        <div class="text-xl font-serif">Как уроженец Калифорнии, я большой поклонник вина! Местное вино - мое слабое место, и я никогда не упускал возможности попробовать какое-нибудь новое вино… </div>
                        <div class="text-xl text-right text-pink-950 hover:text-gray-950"><a href="/#">Подробнее . . .</a></div>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>

</x-main-layout>

