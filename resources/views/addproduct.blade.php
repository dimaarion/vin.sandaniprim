<form id="add-product" method="post" action="/dashboard/addproduct" enctype="multipart/form-data">
    @csrf
    <div class="relative bg-white border border-gray-200 shadow-md dark:bg-neutral-700 mt-6">
        <div class="flex flex-row">
            <div class="w-1/2">
                <div class="relative m-6" data-te-input-wrapper-init>
                    <input
                        type="text"
                        class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                        id="add-name-product"
                        placeholder="Название товара"/>
                    <label
                        for="name-product"
                        class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                    >Название товара
                    </label>
                </div>
                <div class="relative m-6" data-te-input-wrapper-init>
                    <input
                        type="text"
                        class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                        id="add-title-product"
                        placeholder="Заголовок товара"/>
                    <label
                        for="add-title-product"
                        class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                    >Заголовок товара
                    </label>
                </div>
                <div class="relative m-6" data-te-input-wrapper-init>
                <textarea
                    class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                    id="add-description-product"
                    rows="3"
                    placeholder="Описание товара"></textarea>
                    <label
                        for="add-description-product"
                        class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                    >Описание товара</label
                    >
                </div>
                <div class="relative m-6" data-te-input-wrapper-init>
                    <input
                        type="text"
                        class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                        id="add-title-page-product"
                        placeholder="Заголовок страницы"/>
                    <label
                        for="add-title-page-product"
                        class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                    >Заголовок страницы
                    </label>
                </div>
                <div class="relative m-6" data-te-input-wrapper-init>
                <textarea
                    class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                    id="add-description-page-product"
                    rows="3"
                    placeholder="Описание страницы"></textarea>
                    <label
                        for="add-description-page-product"
                        class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                    >Описание страницы</label
                    >
                </div>
                <div class="relative m-6" data-te-input-wrapper-init>
                    <input
                        type="text"
                        class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                        id="add-keyword-product"
                        placeholder="Ключевые слова"/>
                    <label
                        for="add-keyword-product"
                        class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                    >Ключевые слова
                    </label>
                </div>
                <div class="m-6 flex flex-row">
                    <div>
                        <div class="my-4">Категория</div>
                        <select id="add-category-product" data-te-select-init>
                            @foreach($category as $val)
                                <option value="{{$val->id}}">{{$val->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="relative w-[250px] ml-4">
                        <div class="m-auto bottom-0">
                            <div class="relative" data-te-input-wrapper-init>
                                <input
                                    type="text"
                                    class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                    id="add-category-text"
                                    placeholder="Добавить категорию"/>
                                <label
                                    for="add-category-text"
                                    class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                                >Добавить категорию
                                </label>
                            </div>
                        </div>
                        <div class="m-auto bottom-0 mt-5">
                            <div class="relative" data-te-input-wrapper-init>
                                <input
                                    type="text"
                                    class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                    id="add-sub-category-text"
                                    placeholder="Добавить под категорию"/>
                                <label
                                    for="add-sub-category-text"
                                    class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                                >Добавить под категорию
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="w-[40px] mx-2 relative cursor-pointer" id="add-category-save"
                         title="Добавить категорию">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" fill="currentColor"
                             class="bi bi-plus-square m-auto bottom-0 absolute" viewBox="0 0 16 16">
                            <path
                                d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
                            <path
                                d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                        </svg>
                    </div>
                </div>

            </div>
            <div class="w-1/2 relative">
                <div class="flex flex-row mt-6">
                    <div class="mx-6 w-1/2">
                        <input
                            name="file-product"
                            class="relative m-0 block w-full min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary"
                            type="file"
                            id="add-product-file"
                        />
                        <button class="my-6 p-3 bg-gray-500 hover:bg-gray-700 text-white" name="file-save" type="submit" value="file-save">Загрузить</button>

                           <!-- Button trigger modal -->
                           <button
                               type="button"
                               class="my-6 p-3 ml-2 bg-gray-500 hover:bg-gray-700 text-white"
                               data-te-toggle="modal"
                               data-te-target="#addProductModalLabel"
                               data-te-ripple-init
                               data-te-ripple-color="light">
                               Выбрать изображение
                           </button>


                        <div class="relative flex flex-wrap items-stretch mt-6">
                            <input
                                id="add-price-product"
                                type="text"
                                class="relative m-0 -ml-px block w-[1px] min-w-0 flex-auto rounded-l border border-solid border-neutral-300 bg-transparent bg-clip-padding px-3 py-[0.25rem] text-base font-normal leading-[1.6] text-neutral-700 outline-none transition duration-200 ease-in-out focus:z-[3] focus:border-primary focus:text-neutral-700 focus:shadow-[inset_0_0_0_1px_rgb(59,113,202)] focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:focus:border-primary"
                                aria-label="Dollar amount (with dot and two decimal places)"
                                placeholder="Цена"
                            />
                            <span
                                class="flex items-center whitespace-nowrap border border-x-1 border-solid border-neutral-300 px-3 py-[0.25rem] text-center text-base font-normal leading-[1.6] text-neutral-700 dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200"
                            >$</span
                            >

                        </div>
                        <div class="relative flex flex-wrap items-stretch mt-6">
                            <input
                                id="add-discount-product"
                                type="text"
                                class="relative m-0 -ml-px block w-[1px] min-w-0 flex-auto rounded-l border border-solid border-neutral-300 bg-transparent bg-clip-padding px-3 py-[0.25rem] text-base font-normal leading-[1.6] text-neutral-700 outline-none transition duration-200 ease-in-out focus:z-[3] focus:border-primary focus:text-neutral-700 focus:shadow-[inset_0_0_0_1px_rgb(59,113,202)] focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:focus:border-primary"
                                aria-label="Dollar amount (with dot and two decimal places)"
                                placeholder="Скидка"
                            />
                            <span
                                class="flex items-center whitespace-nowrap border border-x-1 border-solid border-neutral-300 px-3 py-[0.25rem] text-center text-base font-normal leading-[1.6] text-neutral-700 dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200"
                            >$</span
                            >

                        </div>
                    </div>

                    <div class="w-1/2 relative mx-3 overflow-hidden">
                        <div class="text-center h-[30px] absolute m-auto bg-white w-full name-image text-ellipsis">
                            Изображение
                        </div>
                        <img class="w-full image mt-8" src="{{@asset("storage/photo_default.png")}}">
                    </div>

                </div>

                <div class="absolute m-auto p-5 right-0 left-0 bottom-0 w-[100px]">
                    <button id="add-product-save" class="bg-gray-500 p-5 hover:bg-gray-700 text-white" type="button"
                            value="add-product-save">Сохранить
                    </button>
                </div>
            </div>
        </div>

    </div>
    <!-- Modal -->
    <div
        data-te-modal-init
        class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
        id="addProductModalLabel"
        tabindex="-1"
        aria-labelledby="addProductModalLabel"
        aria-hidden="true">
        <div
            data-te-modal-dialog-ref
            class="pointer-events-none relative w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[50%]">
            <div
                class="min-[576px]:shadow-[0_0.5rem_1rem_rgba(#000, 0.15)] pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
                <div
                    class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                    <!--Modal title-->
                    <h5
                        class="text-xl font-medium leading-normal text-neutral-800 dark:text-neutral-200"
                        id="addProductModalLabel">
                        Изображения
                    </h5>
                    <!--Close button-->
                    <button
                        type="button"
                        class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                        data-te-modal-dismiss
                        aria-label="Close">
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
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <!--Modal body-->
                <div class="relative flex-auto p-4" data-te-modal-body-ref>
                       <div class="container mx-auto px-5 py-2 lg:px-32 lg:pt-12">
                           <div class="-m-1 flex flex-wrap md:-m-2">
                               @foreach($files as $val)
                                   @if(preg_match('[images/]',$val))
                                   <div class="flex w-1/3 flex-wrap">
                                       <div class="w-full p-1 md:p-2">
                                           <img
                                               alt="gallery"
                                               class="block modal-image-product cursor-pointer h-full w-full rounded-lg object-cover object-center"
                                               src="{{@asset("storage/".$val)}}" />
                                       </div>
                                   </div>
                                   @endif
                               @endforeach

                           </div>
                       </div>
                </div>

                <!--Modal footer-->
                <div class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">

                </div>
            </div>
        </div>
    </div>
</form>
