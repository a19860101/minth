@extends('template.master')
@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css">
<style>
    .flash {
        animation: flash 1s infinite;
    }
     @keyframes flash{
        0% {
            opacity: .2;
            transform: scale(1.2);
        }
        50% {
            opacity: 1;
            transform: scale(1);
        }
        100% {
            opacity: .2;
            transform: scale(1.2);
        }
    }
</style>
@endsection
@section('main')
<section class="relative min-h-screen bg-center bg-no-repeat bg-cover bg-fixed main flex justify-center items-center pb-20" style="background-image:url('/images/feature-2.jpg')">
    <div class="bg-white/60 backdrop-blur-lg border border-[#3175B2] rounded-3xl h-fit w-fit p-20 shadow-md shadow-[#BFD7ED] w-[1000px]">
        {{-- <h2 class="text-4xl font-bold p-3">{{__($category->title_en)}}</h2> --}}
        @if(app()->getLocale() == 'zh_TW')
        <h2 class="text-4xl font-bold p-3">{{$category->title == 'V-TYPE' ? '變截面類型' : $category->title}}</h2>
        @else
        <h2 class="text-4xl font-bold p-3">{{$category->title_en == 'V-TYPE' ? 'Variable Extrusion Type' : $category->title_en}}</h2>

        @endif
        <div class="p-3">
            @if(app()->getLocale() == 'zh_TW')
            {!!$category->info!!}
            @else
            {!!$category->info_en!!}

            @endif
        </div>
        @if(!Request::is('product/7'))
        <div class="flex flex-wrap">
            @if($category->cover_1 != '')
            <div class="w-full aspect-[16/10] p-4">
                <a href="/images/{{$category->cover_1}}" data-fancybox="g">
                    <img src="/images/{{$category->cover_1}}" alt="" class="w-full h-full object-cover">
                </a>
            </div>
            @endif
            @if($category->cover_2 != '')
            <div class="w-full aspect-[16/10] p-4">
                <a href="/images/{{$category->cover_2}}" data-fancybox="g">
                    <img src="/images/{{$category->cover_2}}" alt="" class="w-full h-full object-cover">
                </a>
            </div>
            @endif
            @if($category->cover_3 != '')
            <div class="w-full aspect-[16/10] p-4">
                <a href="/images/{{$category->cover_3}}" data-fancybox="g">
                    <img src="/images/{{$category->cover_3}}" alt="" class="w-full h-full object-cover">
                </a>
            </div>
            @endif
            @if($category->cover_4 != '')
            <div class="w-full aspect-[16/10] p-4">
                <a href="/images/{{$category->cover_4}}" data-fancybox="g">
                    <img src="/images/{{$category->cover_4}}" alt="" class="w-full h-full object-cover">
                </a>
            </div>
            @endif
        </div>
        @else
        <div class="flex flex-wrap">
            <div class="w-full aspect-[16/10] p-4 relative">
                <a href="/images/{{$category->cover_1}}" data-fancybox="g">
                    <img src="/images/{{$category->cover_1}}" alt="" class="w-full h-full object-cover">
                </a>
                <a href="/images/{{$category->cover_2}}" data-fancybox="g" class="w-6 h-6 bg-red-400 absolute rounded-full top-[58%] left-[32%] flash"></a>
                <a href="/images/{{$category->cover_3}}" data-fancybox="g" class="w-6 h-6 bg-red-400 absolute rounded-full top-[24%] left-[80%] flash"></a>
            </div>
        </div>
        @endif
    </div>
</section>
@endsection
@section('js')
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
@endsection
