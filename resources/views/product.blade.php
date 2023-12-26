<ul
    class="mb-5 flex list-none flex-col flex-wrap pl-0 md:flex-row mt-6"
    role="tablist"
    data-te-nav-ref>
    @foreach($productCategory as $val)
        <li role="presentation">
            <a
                href="#pills-{{$val->id}}"
                class="my-2 block rounded bg-neutral-100 px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 data-[te-nav-active]:!bg-neutral-800 data-[te-nav-active]:text-neutral-50 dark:bg-neutral-700 dark:text-white dark:data-[te-nav-active]:!bg-neutral-900 dark:data-[te-nav-active]:text-neutral-50 md:mr-4"
                id="pills-home-{{$val->id}}"
                data-te-toggle="pill"
                data-te-target="#pills-{{$val->id}}"
                @if ($loop->first)
                data-te-nav-active
                @endif

                role="tab"
                aria-controls="pills-{{$val->id}}"
                aria-selected="true"
            >{{$val->name}}</a
            >
        </li>
    @endforeach
    <li role="presentation">
        <a
            href="#pills-noCategory"
            class="my-2 block rounded bg-neutral-100 px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 data-[te-nav-active]:!bg-neutral-800 data-[te-nav-active]:text-neutral-50 dark:bg-neutral-700 dark:text-white dark:data-[te-nav-active]:!bg-neutral-900 dark:data-[te-nav-active]:text-neutral-50 md:mr-4"
            id="pills-home-noCategory"
            data-te-toggle="pill"
            data-te-target="#pills-noCategory"
            role="tab"
            aria-controls="pills-noCategory"
            aria-selected="true"
        >Без категории</a
        >
    </li>
</ul>

<!--Pills content for neutral-800 color-->
<div class="mb-6">
    @foreach($productCategory as $value)

        <div
            class="hidden opacity-100 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
            id="pills-{{$value->id}}"
            role="tabpanel"
            aria-labelledby="pills-home-{{$value->id}}"
            @if ($loop->first)
            data-te-tab-active
            @endif
        >

            <div class="relative bg-white border border-gray-200 shadow-md dark:bg-neutral-700 p-6">
                <table class="min-w-full text-left text-xs whitespace-nowrap">

                    <!-- Table head -->
                    <thead class="uppercase tracking-wider border-b-2 dark:border-neutral-600 border-t">
                    <tr>
                        <th scope="col" class="px-6 py-6 border-x text-center dark:border-neutral-600">
                            №
                        </th>
                        <th scope="col" class="px-6 py-6 border-x text-center dark:border-neutral-600">
                            Изображение
                        </th>
                        <th scope="col" class="px-6 py-6 border-x text-center dark:border-neutral-600">
                            Название
                        </th>
                        <th scope="col" class="px-6 py-6 border-x text-center dark:border-neutral-600">
                            Категория
                        </th>
                        <th scope="col" class="px-6 py-6 border-x text-center dark:border-neutral-600">
                            Редактировать
                        </th>
                    </tr>
                    </thead>

                    <!-- Table body -->
                    <tbody>
                    @foreach($value->product as $val)
                        <tr class="border-b dark:border-neutral-600 user_item">
                            <td scope="row" class="px-6 py-6 text-center border-x dark:border-neutral-600 product_id">
                                {{$val->id}}
                            </td>
                            <td class="px-6 py-6 border-x dark:border-neutral-600 product_image"><img class="w-[100px]"
                                                                                                      src="{{$val->image}}">
                            </td>
                            <td class="px-6 py-6 border-x dark:border-neutral-600 product_name">{{$val->name == "-1"?"":$val->name}}</td>

                            <td class="px-6 py-6 border-x dark:border-neutral-600 product_name">{{$val->name == "-1"?"":$val->name}}</td>
                            <td class="px-6 py-6 border-x dark:border-neutral-600 product_email">
                                <div class="flex justify-center gap-1">
                                    <div class="cursor-pointer hover:text-pink-950" title="Редактировать">
                                        <a href="/dashboard/edit/{{$val->id}}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                 fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                <path
                                                    d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                <path fill-rule="evenodd"
                                                      d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="cursor-pointer hover:text-pink-950 delete-product"
                                         data-id="{{$val->id}}" title="Удалить">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                             fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endforeach
    <div
        class="hidden opacity-100 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
        id="pills-noCategory"
        role="tabpanel"
        aria-labelledby="pills-home-noCategory"
    >

        <div class="relative bg-white border border-gray-200 shadow-md dark:bg-neutral-700 p-6">
            <table class="min-w-full text-left text-xs whitespace-nowrap">

                <!-- Table head -->
                <thead class="uppercase tracking-wider border-b-2 dark:border-neutral-600 border-t">
                <tr>
                    <th scope="col" class="px-6 py-6 border-x text-center dark:border-neutral-600">
                        №
                    </th>
                    <th scope="col" class="px-6 py-6 border-x text-center dark:border-neutral-600">
                        Изображение
                    </th>
                    <th scope="col" class="px-6 py-6 border-x text-center dark:border-neutral-600">
                        Название
                    </th>
                    <th scope="col" class="px-6 py-6 border-x text-center dark:border-neutral-600">
                        Категория
                    </th>
                    <th scope="col" class="px-6 py-6 border-x text-center dark:border-neutral-600">
                        Редактировать
                    </th>
                </tr>
                </thead>

                <!-- Table body -->
                <tbody>
                @foreach($product as $key => $prod)
                    @foreach($category as $cat)
                        @if($cat->id != $prod->category_id)
                            <tr class="border-b dark:border-neutral-600 user_item">
                                <td scope="row" class="px-6 py-6 text-center border-x dark:border-neutral-600 product_id">
                                    {{$prod->id}}
                                </td>
                                <td class="px-6 py-6 border-x dark:border-neutral-600 product_name"><img class="w-[100px]"
                                                                                                         src="{{$prod->image}}">
                                </td>
                                <td class="px-6 py-6 border-x dark:border-neutral-600 product_name">{{$prod->name}}</td>

                                <td class="px-6 py-6 border-x dark:border-neutral-600 product_name">{{$prod->name}}</td>
                                <td class="px-6 py-6 border-x dark:border-neutral-600 product_email">
                                    <div class="flex justify-center gap-1">
                                        <div class="cursor-pointer hover:text-pink-950" title="Редактировать">
                                            <a href="/dashboard/edit/{{$prod->id}}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                     fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                    <path
                                                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                    <path fill-rule="evenodd"
                                                          d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="cursor-pointer hover:text-pink-950 delete-product"
                                             data-id="{{$prod->id}}" title="Удалить">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                 fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
