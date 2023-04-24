@extends('template.master')
@section('css')
<style>
    body {
        
        /* background-image:url('/images/／ㄒ-2.jpg'); */
        background-color: rgb(255 255 255 / .8);
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-blend-mode: overlay;
    }
    .btn {
        background-color: #eee;
        padding:12px 20px;
        border-radius:100px;
        transition: 300ms;
    }
    .btn:hover {
        background-color: #ff5f72;
    }
    .active {

        background: #ff5f72;
    }
</style>
@endsection
@section('main')
<section class="main relative  bg-center bg-no-repeat bg-cover">
    <div class="w-full h-[200px] relative">
        {{-- <img src="/images/feature-4.jpg" alt="" class="w-full h-full object-cover"> --}}
        <h1 class="text-5xl text-black text-center absolute m-auto inset-0 w-full h-full bg-zinc-100 leading-[200px]">{{__('Major Product')}}</h1>
    </div>
</section>
<section class="relative min-h-screen bg-center bg-no-repeat bg-cover main flex justify-center items-center backdrop-blur">
    {{-- <div class="bg-white/70 border border-[#3175B2] rounded-3xl h-fit w-fit p-20 shadow-md shadow-[#BFD7ED] w-[1000px]"> --}}
       
    {{-- </div> --}}
    {{-- <div class="w-[800px] shrink-0 lg:block hidden"> --}}
    <div class="w-[800px] shrink-0">
        <div class="front py-32 relative">
            <div class="absolute flex flex-col space-y-4 left-[-100px]">
                <a href="/product/5" class="btn" data-target="#inner">Door B-line Inner Moulding</a>
                <a href="/product/6" class="btn" data-target="#outer">Door B-line Outer Moulding</a>
                <a href="/product/4" class="btn" data-target="#wind">Windshield Moulding</a>
            </div>
            <img src="/images/home/front.png" alt="" class="">
            <div class="w-10 h-10 rounded-full absolute top-[200px] right-[70px] bg-sky-500 transition" id="outer">    
                {{-- <a href="/product/5" class="w-10 h-10 bg-sky-500 rounded-full block circle"></a> --}}
                {{-- <span class="block ml-2 circle-text text-transarent transition duration-700">Door B-line Inner Moulding</span> --}}
            </div>
            <div class="w-10 h-10 rounded-full absolute top-[212px] right-[150px] bg-sky-500 transition" id="inner">    
                {{-- <a href="/product/6" class="w-10 h-10 bg-sky-500 rounded-full block circle"></a> --}}
                {{-- <span class="block ml-2 circle-text text-transparent transition duration-700">Door B-line Outer Moulding</span> --}}
            </div>
            <div class="w-10 h-10 rounded-full absolute top-[230px] left-[270px] bg-sky-500 transition" id="wind">    
                {{-- <a href="/product/4" class="w-10 h-10 bg-sky-500 rounded-full block circle"></a> --}}
                {{-- <span class="block ml-2 circle-text text-transparent transition duration-700">Windshield Moulding</span> --}}
            </div>
        </div>
        <div class="back py-32 relative">
            <div class="absolute flex flex-col space-y-4 left-[-100px]">
                <a href="/product/1" class="btn" data-target="#side">Body Side Moulding</a>
                <a href="/product/2" class="btn" data-target="#roof">Roof Moulding</a>
                <a href="/product/3" class="btn" data-target="#rear">Rear Window Moulding</a>
            </div>
            <img src="/images/home/back.png" alt="" class="w-full">
            <div class="w-10 h-10 rounded-full absolute top-[300px] left-[600px] bg-sky-500 transition" id="side">    
                {{-- <a href="/product/1" class="w-10 h-10 bg-sky-500 rounded-full block circle"></a> --}}
                {{-- <span class="block ml-2 circle-text text-transparent transition duration-700">Body Side Moulding</span> --}}
            </div>
            <div class="w-10 h-10 rounded-full absolute top-[100px] right-[350px] bg-sky-500 transition" id="roof">    
                {{-- <a href="/product/2" class="w-10 h-10 bg-sky-500 rounded-full block circle"></a> --}}
                {{-- <span class="block ml-2 circle-text text-transparent transition duration-700">Roof Moulding</span> --}}
            </div>
            <div class="w-10 h-10 rounded-full absolute top-[200px] left-[150px] bg-sky-500 transition" id="rear">    
                {{-- <a href="/product/3" class="w-10 h-10 bg-sky-500 rounded-full block circle"></a> --}}
                {{-- <span class="block ml-2 circle-text text-transparent transition duration-700">Rear Window Moulding</span> --}}
            </div>
        </div>
    </div>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
    $(function(){
        // let ta = $('.btns').data('target');
        $('.btn').hover(function(){
            let ta = $(this).data('target');
            $(ta).toggleClass('active');
        });
    })
</script>
@endsection