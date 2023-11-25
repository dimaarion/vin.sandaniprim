<div class="w-1/4 my-4 date-selector">
    <table class="my-4">
        <tr>
            <td class="border border-gray-300 px-2 py-1 cursor-pointer hover:bg-amber-200 @if(request()->get("date1") == '7daysAgo') bg-amber-200 @endif">
                Неделя
            </td>
            <td class="border border-gray-300 px-2 py-1 cursor-pointer hover:bg-amber-200 @if(request()->get("date1") == '30daysAgo') bg-amber-200 @endif">
                Месяц
            </td>
            <td class="border border-gray-300 px-2 py-1 cursor-pointer hover:bg-amber-200 @if(request()->get("date1") == (date("Y") - 1)."-".date("m-d")) bg-amber-200 @endif">
                Год
            </td>
        </tr>
    </table>
    @if(request()->get("date1") == '7daysAgo' && request()->get("group") == 'day')
        <div>
            <select data-selector="7daysAgo" data-te-select-init class="period-group-selector">
                <option value="day">По дням</option>
                <option value="hour">По часам</option>
            </select>
        </div>
    @elseif(request()->get("date1") == '7daysAgo' && request()->get("group") == 'hour')
        <div>
            <select data-selector="7daysAgo" data-te-select-init class="period-group-selector">
                <option value="hour">По часам</option>
                <option value="day">По дням</option>
            </select>
        </div>
    @endif
    @if(request()->get("date1") == '30daysAgo' && request()->get("group") == 'week')
        <div>
            <select data-selector="30daysAgo" data-te-select-init class="period-group-selector">
                <option value="week">По неделям</option>
                <option value="day">По дням</option>
            </select>
        </div>
    @elseif(request()->get("date1") == '30daysAgo' && request()->get("group") == 'day')
        <div>
            <select data-selector="30daysAgo" data-te-select-init class="period-group-selector">
                <option value="day">По дням</option>
                <option value="week">По неделям</option>
            </select>
        </div>
    @endif

    @if(request()->get("date1") == (date("Y") - 1)."-".date("m-d") && request()->get("group") == 'month')
        <div>
            <select data-selector="year" data-te-select-init class="period-group-selector">
                <option value="month">По месяцам</option>
                <option value="week">По неделям</option>
            </select>
        </div>
    @elseif(request()->get("date1") == (date("Y") - 1)."-".date("m-d") && request()->get("group") == 'week')
        <div>
            <select data-selector="year" data-te-select-init class="period-group-selector">
                <option value="week">По неделям</option>
                <option value="month">По месяцам</option>
            </select>
        </div>
    @endif

</div>
<div class="grid gap-4 grid-cols-2">
    <div id="metrics" class="border border-gray-200 shadow-md">
        <div id="grafic-year" class="mx-auto w-full overflow-hidden relative">
            <h2 class="text-2xl px-5 pt-1 h-[50px] sticky top-0 bg-white shadow">Сводка
            </h2>
            <div id="chart"></div>
        </div>

        <div class="container px-6 mx-auto mt-6">
            <section class="text-gray-800 text-center">
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-x-6 lg:gap-x-0 items-center">
                    <div class="mb-12 lg:mb-0 relative  h-[200px] list-summary list-select-city">
                        <div
                            class="text-center m-auto absolute top-0 left-0 right-0 bottom-0 h-[100px]">
                            <h5 class="text-lg font-medium cursor-pointer text-gray-950 font-bold border-b-2 border-gray-950 hover:border-gray-950 mb-4 ">
                                Города</h5>
                        </div>
                    </div>
                    <div class="mb-12 lg:mb-0 relative  h-[200px] list-summary list-select-browser">
                        <div
                            class="text-center m-auto absolute top-0 left-0 right-0 bottom-0 h-[100px]">
                            <h5 class="text-lg font-medium cursor-pointer text-gray-950 font-bold border-b-2  hover:border-gray-950 mb-4 ">
                                Браузеры</h5>
                        </div>
                    </div>
                    <div class="mb-12 lg:mb-0 relative  h-[200px] list-summary list-select-systems">
                        <div
                            class="text-center m-auto absolute top-0 left-0 right-0 bottom-0 h-[100px]">
                            <h5 class="text-lg font-medium cursor-pointer text-gray-950 font-bold border-b-2  hover:border-gray-950 mb-4 ">
                                Поисковые системы</h5>
                        </div>
                    </div>
                    <div class="mb-12 lg:mb-0 relative  h-[200px] list-summary list-select-systems">
                        <div
                            class="text-center m-auto absolute top-0 left-0 right-0 bottom-0 h-[100px]">
                            <h5 class="text-lg font-medium cursor-pointer text-gray-950 font-bold border-b-2  hover:border-gray-950 mb-4 ">
                                Интересы</h5>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <div class="border border-gray-200 shadow-md">
        <div id="grafic-visits" class="mx-auto w-full overflow-hidden relative">
            <h2 class="text-2xl px-5 pt-1 h-[50px] sticky top-0 bg-white shadow">Визиты</h2>
            <div id="visits"></div>
            <div class="container px-6 mx-auto mt-6">
                <section class="text-gray-800 text-center">
                    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-x-6 lg:gap-x-0 items-center">
                        <div class="mb-12 lg:mb-0 relative  h-[200px] list-select-max">
                            <div
                                class="text-center m-auto absolute top-0 left-0 right-0 bottom-0 h-[100px]">
                                <h5 class="text-lg font-medium text-gray-950 font-bold border-b-2 border-gray-950 hover:border-gray-950 mb-4 visit-max">
                                    0</h5>
                                <h6 class="font-medium text-gray-800 text-lg">Визиты</h6>
                                <hr class="absolute right-0 top-0 w-px  h-full hidden lg:block"/>
                            </div>
                        </div>
                        <div class="mb-12 lg:mb-0 relative  h-[200px] list-select-max">
                            <div class=" m-auto absolute top-0 left-0 right-0 bottom-0 h-[100px]">
                                <h5 class="text-lg font-medium text-gray-950 hover:border-gray-950  border-b-2 font-bold mb-4 pageviews-max">
                                    0</h5>
                                <h6 class="font-medium text-gray-800 text-lg">Просмотры</h6>
                                <hr class="absolute right-0 top-0 w-px  h-full hidden lg:block"/>
                            </div>
                        </div>
                        <div class="mb-12 lg:mb-0 relative h-[200px] list-select-max">
                            <div class=" m-auto absolute top-0 left-0 right-0 bottom-0 h-[100px]">
                                <h5 class="text-lg font-medium text-gray-950 border-b-2 hover:border-gray-950  font-bold mb-4 users-max">
                                    0</h5>
                                <h6 class="font-medium text-gray-800 text-lg">Уникальные
                                    посетители</h6>
                                <hr class="absolute right-0 top-0 w-px  h-full hidden lg:block"/>
                            </div>
                        </div>
                        <div class="mb-12 lg:mb-0 relative  h-[200px]  list-select-max">
                            <div class=" m-auto absolute top-0 left-0 right-0 bottom-0 h-[100px]">
                                <h5 class="text-lg font-medium text-gray-950 border-b-2 hover:border-gray-950  font-bold mb-4 page-count-max">
                                    0</h5>
                                <h6 class="font-medium text-gray-800 text-lg">Количество
                                    просмотренных
                                    страниц</h6>
                                <hr class="absolute right-0 top-0 w-px  h-full hidden lg:block"/>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Section: Design Block -->
            </div>
        </div>
    </div>
    <div
        class="border w-full border-gray-200 overflow-hidden overflow-y-scroll shadow-md h-[400px]">
        <div class="mx-auto relative">
            <h2 class="text-2xl px-5 pt-1 h-[50px] sticky top-0 bg-white z-50 shadow">Поисковые
                фразы </h2>
            <div id="search-phrases"></div>
        </div>
    </div>
    <div
        class="border w-full border-gray-200 overflow-hidden overflow-y-scroll shadow-md h-[400px] ">
        <div class="mx-auto relative">
            <h2 class="text-2xl px-5 pt-1 h-[50px] sticky top-0 bg-white shadow z-50">Страницы
                входа </h2>
            <div id="search-content"></div>
        </div>
    </div>
</div>
