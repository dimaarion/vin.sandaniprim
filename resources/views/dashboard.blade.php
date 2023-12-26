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
        @include("menu-left-admin")
        <div class="w-3/4 flex justify-center ml-5 mt-5 p-5 ">
            <div class="w-full">
                @if($id === "surliest")
                    <nav class="w-full rounded-md">
                        <ol class="list-reset flex">
                            <li>
                                <a
                                    href="/dashboard"
                                    class="text-primary transition duration-150 ease-in-out hover:text-primary-600 focus:text-primary-600 active:text-primary-700 dark:text-primary-400 dark:hover:text-primary-500 dark:focus:text-primary-500 dark:active:text-primary-600"
                                >Административная панель</a
                                >
                            </li>
                            <li>
                                <span class="mx-2 text-neutral-500 dark:text-neutral-400">/</span>
                            </li>
                            <li class="text-neutral-500 dark:text-neutral-400">Пользователи</li>
                        </ol>
                    </nav>
                    @include("users")
                @elseif($id === "addproduct")
                    <nav class="w-full rounded-md">
                        <ol class="list-reset flex">
                            <li>
                                <a
                                    href="/dashboard"
                                    class="text-primary transition duration-150 ease-in-out hover:text-primary-600 focus:text-primary-600 active:text-primary-700 dark:text-primary-400 dark:hover:text-primary-500 dark:focus:text-primary-500 dark:active:text-primary-600"
                                >Административная панель</a
                                >
                            </li>
                            <li>
                                <span class="mx-2 text-neutral-500 dark:text-neutral-400">/</span>
                            </li>
                            <li class="text-neutral-500 dark:text-neutral-400">Добавить продукцию</li>
                        </ol>
                    </nav>
                    @include("addproduct")
                @elseif($id === "product")
                    <nav class="w-full rounded-md">
                        <ol class="list-reset flex">
                            <li>
                                <a
                                    href="/dashboard"
                                    class="text-primary transition duration-150 ease-in-out hover:text-primary-600 focus:text-primary-600 active:text-primary-700 dark:text-primary-400 dark:hover:text-primary-500 dark:focus:text-primary-500 dark:active:text-primary-600"
                                >Административная панель</a
                                >
                            </li>
                            <li>
                                <span class="mx-2 text-neutral-500 dark:text-neutral-400">/</span>
                            </li>
                            <li class="text-neutral-500 dark:text-neutral-400">Продукция</li>
                        </ol>
                    </nav>
                    @include("product")
                @elseif($id === "addCategory")
                    <nav class="w-full rounded-md">
                        <ol class="list-reset flex">
                            <li>
                                <a
                                    href="/dashboard"
                                    class="text-primary transition duration-150 ease-in-out hover:text-primary-600 focus:text-primary-600 active:text-primary-700 dark:text-primary-400 dark:hover:text-primary-500 dark:focus:text-primary-500 dark:active:text-primary-600"
                                >Административная панель</a
                                >
                            </li>
                            <li>
                                <span class="mx-2 text-neutral-500 dark:text-neutral-400">/</span>
                            </li>
                            <li class="text-neutral-500 dark:text-neutral-400">Категории</li>
                        </ol>
                    </nav>
                    @include("add-category")
                @else
                    <nav class="w-full rounded-md">
                        <ol class="list-reset flex">
                            <li class="text-neutral-500 dark:text-neutral-400">Административная панель</li>
                        </ol>
                    </nav>
                    @include("metrica")
                @endif
            </div>
        </div>
    </div>

</x-app-layout>
