@extends('template.master')
@section('css')
<style>
    section.main {
        background-image: 
            linear-gradient(to right top,rgba(255, 195, 235, 0.9),rgba(196, 229, 255, 0.9)),
            url('/images/ph.jpg')
    }
</style>
@endsection
@section('main')
<section class="relative min-h-screen bg-center bg-no-repeat bg-cover main">
    <div class="w-full h-[200px] relative">
        <img src="/images/philosophy.jpg" alt="" class="w-full h-full object-cover">
        <h1 class="text-2xl text-white text-center absolute m-auto inset-0 w-full h-full bg-black/50 leading-[200px]">{{__('philosophy')}}</h1>
    </div>
    <div class="p-10 md:p-20 max-w-screen-md mx-auto">
        {{-- <div class="text-center space-y-6 mb-12 text-xl">
            <div>顧客滿意</div>
            <div>員工滿意</div>
            <div>股東滿意</div>
            <div>永續經營</div>
            <div>回饋社會</div>
        </div>
        <div class="space-y-6 w-1/2 mx-auto text-xl">
            <div>-秉持人和理念經營-</div>
            <div class="text-center">-共同合作開創未來-</div>
            <div class="text-right">-貢獻成果予與社會-</div>
        </div> --}}
        <div class="text-center space-y-6 mb-12 text-xl">
            <div class="">Customer Satisfaction</div>
            <div class="">Employee satisfaction</div>
            <div class="">Shareholder satisfaction</div>
            <div class="">Sustainable development</div>
            <div class="">Give back to society</div>
        </div>
        <div class="space-y-6 w-1/2 mx-auto text-xl">
            <div class="text-center">-Adhering to people and philosophy management-</div>
            <div class="text-center">-Work together to create the future-</div>
            <div class="text-center">-Contribute results to the society-</div>
        </div>
    </div>
</section>
@endsection