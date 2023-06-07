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
        animation: flash .6s alternate infinite;
        /* background: #ff5f72; */
    }
    @keyframes flash{
        to {
            opacity: .2;
            transform: scale(1.2);
        }
    }
</style>
@endsection
@section('main')
<section class="main relative  bg-center bg-no-repeat bg-cover">
    <div class="w-full h-[150px] relative">
        <h1 class="text-5xl text-black text-center absolute m-auto inset-0 w-full h-full bg-zinc-100 leading-[150px]">{{__('Major Product')}}</h1>
    </div>
</section>
<section class="relative min-h-screen bg-center bg-no-repeat bg-cover main flex justify-around pt-10 border border-red-500">
    {{-- <div class="w-[800px] shrink-0"> --}}
        {{-- <div class="front py-32 relative"> --}}
            <div class="flex flex-col w-[250px]  space-y-4">
                <a href="/product/6" class="btn" data-target="#belt">Door Belt Line Moulding</a>
                <a href="/product/7" class="btn" data-target="#vtype">Variable Extrusion Type</a>
                <a href="/product/4" class="btn" data-target="#wind">Windshield Moulding</a>
                <a href="/product/2" class="btn" data-target="#roof">Roof Moulding</a>
            </div>
            <div class="p-4  relative w-[800px] self-center">
                <img src="/images/home/front.png" alt="" class="">
                <div class="w-7 h-7 rounded-full absolute top-[5%] left-[55%] bg-sky-500 transition" id="vtype"></div>
                <div class="w-7 h-7 rounded-full absolute top-[25%] left-[76%] bg-sky-500 transition" id="belt"></div>
                <div class="w-7 h-7 rounded-full absolute top-[28%] left-[36%] bg-sky-500 transition" id="wind"></div>
                <div class="w-7 h-7 rounded-full absolute top-[1%] left-[73%] bg-sky-500 transition" id="roof"></div>
            </div>
        {{-- </div> --}}
    {{-- </div> --}}
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