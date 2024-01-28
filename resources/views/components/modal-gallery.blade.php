
<!--Modal body-->
<div class="relative flex-auto p-4" data-te-modal-body-ref>
    <div class="container mx-auto px-5 py-2 lg:px-32 lg:pt-12">
        <div class="-m-1 flex flex-wrap md:-m-2">
            @foreach($files as $val)
                @if(preg_match('[images/]',$val))
                    <div class="flex w-1/3 flex-wrap">
                        <div class="w-full p-1 md:p-2 relative">
                            <div class="absolute"><input type="checkbox"></div>
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
