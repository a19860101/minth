@extends('template.master')
@section('main')
<section>
    <div class="w-full h-[200px] relative">
        <img src="/images/links.jpg" alt="" class="w-full h-full object-cover">
        <h1 class="text-2xl text-white text-center absolute m-auto inset-0 w-full h-full bg-black/50 leading-[200px]">{{__('links')}}</h1>
    </div>
</section>
@endsection