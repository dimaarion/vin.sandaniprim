<!-- TW Elements is free under AGPL, with commercial license required for specific uses. See more details: https://tw-elements.com/license/ and contact us for queries at tailwind@mdbootstrap.com -->
<form action="/dashboard/load-file" method="post" id="gallery" enctype="multipart/form-data">
    @csrf
    <div class="container mx-auto px-5 py-2 lg:px-32 lg:pt-12">
        <div class="flex flex-row mt-6">
            <div class="mx-6 w-1/2">
                <input name="file-gallery" class="relative m-0 block w-full min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary" type="file" id="add-product-file">
                <button class="my-6 p-3 bg-gray-500 hover:bg-gray-700 text-white" name="file-save" type="submit" value="file-save-gallery">Загрузить</button>
            </div>
        </div>
        <div class="-m-1 flex flex-wrap md:-m-2">
            @foreach($files as $file)
                @if(preg_match('[images/]',$file))
                    <div class="flex w-1/4 flex-wrap border m-2 relative">
                        <div data-name = "{{$file}}" class="delete-image right-0 absolute m-2 cursor-pointer bg-white p-1 rounded-full hover:text-pink-700">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"></path>
                            </svg>
                        </div>
                        <div class="w-full p-1 md:p-2">
                            <img
                                alt="gallery"
                                class="block modal-image-product cursor-pointer h-full w-full rounded-lg object-cover object-center"
                                src="{{@asset("storage/".$file)}}" />
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</form>

