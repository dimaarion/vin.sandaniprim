<x-main-layout>
    <x-slot name="title">
        <title>{{$product->title_meta}}</title>
        <script defer="defer" src={{asset("/cart/static/js/main.7c43538e.js")}}></script>
        <link href={{asset("/cart/static/css/main.1e93b59a.css")}} rel="stylesheet">

    </x-slot>
    <x-slot name="header">

    </x-slot>
    <x-slot name="body">
        <div id="main-add-cart"></div>
    </x-slot>
</x-main-layout>


