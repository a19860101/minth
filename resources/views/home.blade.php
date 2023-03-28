@extends('template.master')
@section('css')
<style>
    .circle-group:hover {
        background-color: #e0f2fe;
    }
    .circle-text {
        transform: translateX(-5%);
    }
    .circle-group:hover .circle-text{
        color: #111;
        transform: translateX(0);
    }
    .circle {
        animation: b 2s infinite;
    }
    @keyframes b {
        33% {
            transform: scale(1.5);
            opacity: .5;
        }
        66% {
            transform: scale(1);
            opacity: 1;
        }
    }
</style>
@endsection
@section('main')
<section class="relative min-h-screen bg-center bg-no-repeat bg-cover main flex justify-center items-center">
    {{-- <div class="bg-white/70 border border-[#3175B2] rounded-3xl h-fit w-fit p-20 shadow-md shadow-[#BFD7ED] w-[1000px]"> --}}
       
    {{-- </div> --}}
    {{-- <div class="w-[800px] shrink-0 lg:block hidden"> --}}
    <div class="w-[800px] shrink-0">
        <div class="front py-32 relative">
            <img src="/images/home/front.png" alt="" class="">
            <div class="flex items-center rounded-full w-max pr-4 absolute top-[268px] right-[98px] bg-transparent transition duration-700 circle-group">    
                <a href="/product/5" class="w-10 h-10 bg-sky-500 rounded-full block circle"></a>
                <span class="block ml-4 circle-text text-transparent transition duration-700">Door B-line Inner Moulding</span>
            </div>
            <div class="flex items-center rounded-full w-max pr-4 absolute top-[218px] right-[-100px] bg-transparent transition duration-700 circle-group">    
                <a href="/product/6" class="w-10 h-10 bg-sky-500 rounded-full block circle"></a>
                <span class="block ml-4 circle-text text-transparent transition duration-700">Door B-line Outer Moulding</span>
            </div>
            <div class="flex items-center rounded-full w-max pr-4 absolute top-[230px] left-[270px] bg-transparent transition duration-700 circle-group">    
                <a href="/product/4" class="w-10 h-10 bg-sky-500 rounded-full block circle"></a>
                <span class="block ml-4 circle-text text-transparent transition duration-700">Windshield Moulding</span>
            </div>
        </div>
        <div class="back py-32 relative">
            <img src="/images/home/back.png" alt="" class="w-full">
            <div class="flex items-center rounded-full w-max pr-4 absolute top-[300px] left-[600px] bg-transparent transition duration-700 circle-group">    
                <a href="/product/1" class="w-10 h-10 bg-sky-500 rounded-full block circle"></a>
                <span class="block ml-4 circle-text text-transparent transition duration-700">Body Side Moulding</span>
            </div>
            <div class="flex items-center rounded-full w-max pr-4 absolute top-[100px] right-[150px] bg-transparent transition duration-700 circle-group">    
                <a href="/product/2" class="w-10 h-10 bg-sky-500 rounded-full block circle"></a>
                <span class="block ml-4 circle-text text-transparent transition duration-700">Roof Moulding</span>
            </div>
            <div class="flex items-center rounded-full w-max pr-4 absolute top-[200px] left-[200px] bg-transparent transition duration-700 circle-group">    
                <a href="/product/3" class="w-10 h-10 bg-sky-500 rounded-full block circle"></a>
                <span class="block ml-4 circle-text text-transparent transition duration-700">Rear Window Moulding</span>
            </div>
        </div>
    </div>
</section>
@endsection