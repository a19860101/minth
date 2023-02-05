@extends('template.master')
@section('main')
<section class="relative min-h-screen bg-center bg-no-repeat bg-cover">
    <div class="w-full h-[200px] relative">
        <img src="/images/news.jpg" alt="" class="w-full h-full object-cover">
        <h1 class="text-2xl text-white text-center absolute m-auto inset-0 w-full h-full bg-black/50 leading-[200px]">{{__('news')}}</h1>
    </div>
    <div class="py-20 relative w-[800px] mx-auto">
        <h3 class="text-3xl font-bold mb-6 text-center">{{$post->title_en}}</h3>
        <div>
            {!!$post->body_en!!}
        </div>
        <a href="#" onclick="history.back()" class="absolute px-3 py-1 border border-2 border-blue-400 rounded-xl right-0 hover:bg-blue-200 transition">Back</a>
    </div>
</section>
@endsection