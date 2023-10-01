@extends('template.master')
@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">
@endsection
@section('main')
<section class="relative min-h-screen bg-center bg-no-repeat bg-cover main pb-12">
    <div class="w-full h-[200px] relative mb-8">
        <img src="/images/feature-1.jpg" alt="" class="w-full h-full object-cover">
        <h1 class="text-5xl text-white text-center absolute m-auto inset-0 w-full h-full bg-black/50 leading-[200px]">{{__('feature_equipment')}}</h1>
    </div>
    {{-- <div class="bg-white/70 border border-[#3175B2] rounded-3xl h-fit w-fit p-20 shadow-md shadow-[#BFD7ED] w-[1000px]"> --}}
       
    {{-- </div> --}}
    <div class="max-w-screen-lg mx-auto flex flex-wrap">
        <div class="w-1/2 md:w-1/4 aspect-square p-4">
            <a href="/images/feature-1.jpg" data-lightbox='g'>
                <img src="/images/feature-1.jpg" alt="" class="w-full h-full object-cover">
            </a>
        </div>
        {{-- <div class="w-1/2 md:w-1/4 aspect-square p-4">
            <a href="/images/feature-2.jpg" data-lightbox='g'>
                <img src="/images/feature-2.jpg" alt="" class="w-full h-full object-cover">
            </a>
        </div>
        <div class="w-1/2 md:w-1/4 aspect-square p-4">
            <a href="/images/feature-3.jpg" data-lightbox='g'>
                <img src="/images/feature-3.jpg" alt="" class="w-full h-full object-cover">
            </a>
        </div>
        <div class="w-1/2 md:w-1/4 aspect-square p-4">
            <a href="/images/feature-4.jpg" data-lightbox='g'>
                <img src="/images/feature-4.jpg" alt="" class="w-full h-full object-cover">
            </a>
        </div> --}}
        <div class="w-1/2 md:w-1/4 aspect-square p-4">
            <a href="/images/feature-5.jpg" data-lightbox='g'>
                <img src="/images/feature-5.jpg" alt="" class="w-full h-full object-cover">
            </a>
        </div>
        <div class="w-1/2 md:w-1/4 aspect-square p-4">
            <a href="/images/feature-6.jpg" data-lightbox='g'>
                <img src="/images/feature-6.jpg" alt="" class="w-full h-full object-cover">
            </a>
        </div>
        <div class="w-1/2 md:w-1/4 aspect-square p-4">
            <a href="/images/feature-7.jpg" data-lightbox='g'>
                <img src="/images/feature-7.jpg" alt="" class="w-full h-full object-cover">
            </a>
        </div>
        <div class="w-1/2 md:w-1/4 aspect-square p-4">
            <a href="/images/feature-8.jpg" data-lightbox='g'>
                <img src="/images/feature-8.jpg" alt="" class="w-full h-full object-cover">
            </a>
        </div>
        <div class="w-1/2 md:w-1/4 aspect-square p-4">
            <a href="/images/feature-9.jpg" data-lightbox='g'>
                <img src="/images/feature-9.jpg" alt="" class="w-full h-full object-cover">
            </a>
        </div>
        <div class="w-1/2 md:w-1/4 aspect-square p-4">
            <a href="/images/feature-10.jpg" data-lightbox='g'>
                <img src="/images/feature-10.jpg" alt="" class="w-full h-full object-cover">
            </a>
        </div>
        <div class="w-1/2 md:w-1/4 aspect-square p-4">
            <a href="/images/DSC00040.JPG" data-lightbox='g'>
                <img src="/images/DSC00040.JPG" alt="" class="w-full h-full object-cover">
            </a>
        </div>
        <div class="w-1/2 md:w-1/4 aspect-square p-4">
            <a href="/images/DSC00044.JPG" data-lightbox='g'>
                <img src="/images/DSC00044.JPG" alt="" class="w-full h-full object-cover">
            </a>
        </div>
        <div class="w-1/2 md:w-1/4 aspect-square p-4">
            <a href="/images/DSC00046.JPG" data-lightbox='g'>
                <img src="/images/DSC00046.JPG" alt="" class="w-full h-full object-cover">
            </a>
        </div>
        <div class="w-1/2 md:w-1/4 aspect-square p-4">
            <a href="/images/DSC00053.JPG" data-lightbox='g'>
                <img src="/images/DSC00053.JPG" alt="" class="w-full h-full object-cover">
            </a>
        </div>
    </div>
</section>
@endsection
@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox-plus-jquery.min.js"></script>
@endsection