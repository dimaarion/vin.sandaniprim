<x-app-layout>
    <x-slot name="header">
        <div class="relative h-[50px]">
            <h2 class="font-semibold absolute left-0 text-xl text-gray-800 dark:text-gray-200 leading-tight">
                Административная панель
            </h2>
            <h2 id="response" class="text-green absolute right-0"></h2>
        </div>

    </x-slot>

    <div class="flex flex-row overflow-y-scroll h-[800px]">
        <div id="menu" class="w-[300px] sticky top-0">
            <div id="accordionExample5">
                <div class="h-12  flex text-white bg-gray-800"><a class="block title-admin self-center ml-6 "
                                                                  href="/dashboard?date1=2023-10-21&group=month">Административная
                        панель</a></div>
                @foreach($menu as $element)
                    <div
                        class="border border-t-0 border-neutral-200 bg-gray-800 dark:border-neutral-600 dark:bg-gray-800">
                        <h2 class="mb-0" id="heading{{$loop->iteration}}">
                            <button
                                class="group relative flex w-full items-center rounded-none border-0 bg-gray-800 px-5 py-4 text-left text-base text-white transition [overflow-anchor:none] hover:z-[2] focus:z-[3] focus:outline-none dark:bg-gray-800 dark:text-white [&:not([data-te-collapse-collapsed])]:bg-gray-800 [&:not([data-te-collapse-collapsed])]:text-white [&:not([data-te-collapse-collapsed])]:[box-shadow:inset_0_-1px_0_rgba(229,231,235)] dark:[&:not([data-te-collapse-collapsed])]:bg-gray-800 dark:[&:not([data-te-collapse-collapsed])]:text-white dark:[&:not([data-te-collapse-collapsed])]:[box-shadow:inset_0_-1px_0_rgba(75,85,99)]"
                                type="button"
                                data-te-collapse-init
                                data-te-collapse-collapsed
                                data-te-target="#collapse{{$loop->iteration}}"
                                aria-expanded="false"
                                aria-controls="collapse{{$loop->iteration}}">
                                <div class="px-3">
                                    {!! $element["category"]["icon"] !!}
                                </div>
                                {!! $element["category"]["text"] !!}
                                <span
                                    class="-mr-1 ml-auto h-5 w-5 shrink-0 rotate-[-180deg] fill-[#336dec] transition-transform duration-200 ease-in-out group-[[data-te-collapse-collapsed]]:mr-0 group-[[data-te-collapse-collapsed]]:rotate-0 group-[[data-te-collapse-collapsed]]:fill-[#212529] motion-reduce:transition-none dark:fill-blue-300 dark:group-[[data-te-collapse-collapsed]]:fill-white">
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
                d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
          </svg>
        </span>
                            </button>
                        </h2>
                        <div
                            id="collapse{{$loop->iteration}}"
                            class="!visible hidden"
                            data-te-collapse-item
                            aria-labelledby="heading{{$loop->iteration}}">
                            <div class="text-white">
                                @foreach($element["category"]["item"] as $item)
                                    <div class="h-10 hover:bg-gray-950 px-4 flex"><a class="block self-center w-full"
                                                                                     href="{{$item["url"]}}">{{$item["name"]}}</a>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="w-3/4 flex justify-center ml-5 mt-5 p-5 ">
            <div class="w-full">
                @if($id === "surliest")
                    <div id="surliest"
                         class="overflow-x-auto bg-white border border-gray-200 shadow-md dark:bg-neutral-700">
                        <!-- Table -->
                        <table class="min-w-full text-left text-xs whitespace-nowrap">

                            <!-- Table head -->
                            <thead class="uppercase tracking-wider border-b-2 dark:border-neutral-600 border-t">
                            <tr>
                                <th scope="col" class="px-6 py-6 border-x text-center dark:border-neutral-600">
                                    №
                                </th>
                                <th scope="col" class="px-6 py-6 border-x text-center dark:border-neutral-600">
                                    Имя
                                </th>
                                <th scope="col" class="px-6 py-6 border-x text-center dark:border-neutral-600">
                                    почта
                                </th>
                                <th scope="col" class="px-6 py-6 border-x text-center dark:border-neutral-600">
                                    Статус
                                </th>
                                <th scope="col" class="px-6 py-6 border-x text-center dark:border-neutral-600">
                                    Редактировать
                                </th>
                            </tr>
                            </thead>

                            <!-- Table body -->
                            <tbody>
                            @foreach($users as $key => $user)
                                <tr class="border-b dark:border-neutral-600 user_item">
                                    <th scope="row" class="px-6 py-6 border-x dark:border-neutral-600 user_id">
                                        {{$user->id}}
                                    </th>
                                    <td class="px-6 py-6 border-x dark:border-neutral-600 user_name">{{$user->name}}</td>
                                    <td class="px-6 py-6 border-x dark:border-neutral-600 user_email">{{$user->email}}</td>
                                    <td class="px-6 py-6 border-x dark:border-neutral-600">
                                        <div class="mb-[0.125rem] block min-h-[1.5rem] pl-[1.5rem] flex justify-center">
                                            <form method="post" action="/dashboard/surliest">
                                                <select class="role" data-te-select-init>
                                                    @if($user->role[0]->role == "user")
                                                        <option value="user">Пользователь</option>
                                                        <option value="administrator">Администратор</option>
                                                        <option value="moderator">Модератор</option>
                                                    @elseif($user->role[0]->role == "moderator")
                                                        <option value="moderator">Модератор</option>
                                                        <option value="administrator">Администратор</option
                                                        <option value="user">Пользователь</option>
                                                    @elseif($user->role[0]->role == "administrator")
                                                        <option value="administrator">Администратор</option>
                                                        <option value="moderator">Модератор</option>
                                                        <option value="user">Пользователь</option>
                                                    @endif

                                                </select>
                                            </form>

                                        </div>
                                    </td>
                                    <td>
                                        <div class="flex justify-center gap-1">
                                            <div class="cursor-pointer hover:text-pink-950 remove">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                     fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                                                </svg>
                                            </div>
                                        </div>

                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div id="remove" class="absolute m-auto left-0 right-0 top-0 bottom-0 hidden ">

                    </div>
                @else
                    <div id="metrics" class="border border-gray-200 shadow-md">
                        <div id="grafic-year" class="mx-auto w-full overflow-hidden relative">
                            <h2 class="text-2xl px-5 pt-1 h-[50px] sticky top-0 bg-white shadow">Сводка</h2>
                            <div id="chart"></div>
                        </div>
                    </div>
                    <div class="border border-gray-200 shadow-md mt-6">
                        <div id="grafic-year" class="mx-auto w-full overflow-hidden relative">
                            <h2 class="text-2xl px-5 pt-1 h-[50px] sticky top-0 bg-white shadow">Визиты</h2>
                            <div id="visits"></div>
                        </div>
                    </div>
                    <div class="border w-full border-gray-200 overflow-hidden shadow-md mt-6">
                        <div class="mx-auto relative">
                            <h2 class="text-2xl px-5 pt-1 h-[50px] sticky top-0 bg-white shadow">Поисковые фразы </h2>
                            <div id="search-phrases"></div>
                        </div>
                    </div>
                    <div class="border w-full border-gray-200 overflow-hidden shadow-md mt-6">
                        <div class="mx-auto relative">
                            <h2 class="text-2xl px-5 pt-1 h-[50px] sticky top-0 bg-white shadow">Страницы входа </h2>
                            <div id="search-content"></div>
                        </div>
                    </div>
                    <div class="border w-[400px] border-gray-200 overflow-y-scroll h-[500px]  shadow-md mt-6">
                        <div class="mx-auto relative">
                            <h2 class="text-2xl px-5 pt-1 h-[50px] sticky top-0 bg-white shadow">Браузеры </h2>
                            <div id="browsers"></div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>

</x-app-layout>
