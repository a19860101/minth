@extends('template.master')
@section('main')
<section class="relative min-h-screen bg-center bg-no-repeat bg-cover main" style="background-image:url('/images/bg.png')">
    <div class="w-full h-[200px] relative">
        <img src="/images/news.jpg" alt="" class="w-full h-full object-cover">
        <h1 class="text-2xl text-white text-center absolute m-auto inset-0 w-full h-full bg-black/50 leading-[200px]">{{__('certification')}}</h1>
    </div>
    <div class="">
        {{-- <a href="#" class="absolute top-[-70px] left-0 text-[#013565]"><i class="fa-solid fa-chevron-left mr-3"></i>BACK</a> --}}
        <div class="w-fit h-fit absolute inset-0 m-auto">
            <img src="images/certification.png" alt="">
        </div>
    </div>
</section>
@endsection