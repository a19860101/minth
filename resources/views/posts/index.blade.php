@extends('template.master')
@section('main')
<section class="relative min-h-screen bg-center bg-no-repeat bg-cover">
    <div class="w-full h-[200px] relative">
        <img src="/images/newslist.jpg" alt="" class="w-full h-full object-cover">
        <h1 class="text-2xl text-white text-center absolute m-auto inset-0 w-full h-full bg-black/50 leading-[200px]">{{__('news')}}</h1>
    </div>
    <div class="py-5">
        <ul class="w-[800px] mx-auto">
            <li class="flex flex-wrap justify-between py-3">
                <span class="text-xl font-bold">{{__('title')}}</span>
                <span class="text-xl font-bold">{{__('public_time')}}</span>
            </li>
            @foreach($posts as $post)
            <li class="flex flex-wrap justify-between py-3 border-b-2">
                <a href="/news/{{$post->id}}" class="hover:text-blue-400">{{$post->title_en}}</a>
                <span>{{$post->created_at}}</span>
            </li>
            @endforeach
        </ul>
    </div>
</section>
@endsection