@extends('template.master')
@section('main')
<section class="relative min-h-screen bg-center bg-no-repeat bg-cover">
    <div class="w-full h-[200px] relative">
        <img src="/images/link.jpg" alt="" class="w-full h-full object-cover">
        <h1 class="text-2xl text-white text-center absolute m-auto inset-0 w-full h-full bg-black/50 leading-[200px]">{{__('links')}}</h1>
    </div>
</section>
@endsection