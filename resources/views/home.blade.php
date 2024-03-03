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
    .v-active {
        transform: rotate(180deg);
    }
    @keyframes flash{
        to {
            opacity: .5;
            transform: scale(1.2);
            background: yellow;
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
                <a href="/product/{{app()->getLocale()}}/6" class="btn" data-target="#belt">{{__('Door Belt Line Moulding')}}</a>
                {{-- <a href="/product/7" class="btn" data-target="#vtype">V-Type</a> --}}
                <a href="#" class="btn v flex justify-between items-center" data-target="#vtype2">{{__('Windshield Moulding')}}<i class="fa-solid fa-chevron-down duration-500"></i></a>
                <div class="flex flex-col space-y-4 hidden vo">
                    <a href="/product/{{app()->getLocale()}}/7" class="btn block" data-target="#vtype">{{__('Variable Extrusion Type')}}</a>
                    <a href="/product/{{app()->getLocale()}}/4" class="btn block" data-target="#wind">{{__('Normal Type')}}</a>
                    <a href="/product/{{app()->getLocale()}}/9" class="btn block" data-target="#wind2">{{__('Bottom Moulding')}}</a>
                </div>
                <a href="/product/{{app()->getLocale()}}/2" class="btn" data-target="#roof">{{__('Roof Moulding')}}</a>
            </div>
            <div class="p-4  relative w-[800px] self-center">
                <img src="/images/home/front.png" alt="" class="">
                <div class="w-7 h-7 rounded-full absolute top-[5%] left-[55%] bg-sky-500 transition" id="vtype"></div>
                <div class="w-7 h-7 rounded-full absolute top-[21%] left-[84%] bg-sky-500 transition" id="belt"></div>
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
            console.log(ta);
            if(ta === '#vtype2'){
                $('#wind').toggleClass('active');
                $('#vtype').toggleClass('active');
            }else{
                $(ta).toggleClass('active');
            }
        });
        $('.v').click(function(){
            $(this).find('i').toggleClass('v-active');
            $('.vo').slideToggle();
            return false;
        })
    })
</script>
@endsection