<div id="menu" class="w-[300px] sticky top-0">
    <div id="accordionExample5">
        <div class="h-12  flex text-white bg-gray-950"><a class="block title-admin self-center ml-6 " href="/dashboard?date1=2023-10-21&group=month">Административная
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
                            <div class="h-10 hover:bg-gray-950 px-4 flex">
                                <a class="block self-center w-full" href="{{$item["url"]}}">{{$item["name"]}}</a>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
