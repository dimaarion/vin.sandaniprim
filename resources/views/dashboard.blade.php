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
                    @include("users")
                @elseif($id === "addproduct")
                    @include("addproduct")
                @elseif($id === "product")
                    @include("product")
                @else
                    @include("metrica")
                @endif
            </div>
        </div>
    </div>

</x-app-layout>
