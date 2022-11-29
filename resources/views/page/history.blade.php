@extends('template.master')
@section('css')
<style>
    .tl::after {
        content:'';
        position: absolute;
        width: 1px;
        background-color: #013565;
        top: 0;
        bottom: 0;
        left: 50%;
    }
    .tl-item {
        position: relative;
    }
    .tl-item::after {
        content:'';
        position: absolute;
        width: 30px;
        height: 30px;
        background-color: #fff;
        border:1px solid #013565;
        border-radius: 50%;

        right: -15px;
        top: 0;
        z-index: 10;
    }
    .left {
        left:0;
    }
    .right {
        left: 100%;
    }
</style>
@endsection
@section('main')
<section class="relative h-full bg-center bg-no-repeat bg-cover" style="background-image:url('/images/bg.png')">
    <div class="flex items-start h-fit max-w-screen-xl w-11/12 absolute inset-0 m-auto p-24">
        <h2 class="text-2xl absolute text-center w-full top-0 left-0 text-[#013565]">公司沿革</h2>
        <div class="tl relative w-full">
            <div class="tl-item w-1/2 text-center pb-8">
                <div class="tl-content relative px-16 left">
                    <h4 class="text-xl">2012</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum pariatur temporibus a.</p>
                </div>
            </div>
            <div class="tl-item w-1/2 text-center pb-8">
                <div class="tl-content relative px-16 right">
                    <h4 class="text-xl">2015</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum pariatur temporibus a.</p>
                </div>
            </div>
            <div class="tl-item w-1/2 text-center pb-8">
                <div class="tl-content relative px-16 left">
                    <h4 class="text-xl">2017</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum pariatur temporibus a.</p>
                </div>
            </div>
            <div class="tl-item w-1/2 text-center pb-8">
                <div class="tl-content relative px-16 right">
                    <h4 class="text-xl">2021</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum pariatur temporibus a.</p>
                </div>
            </div>
            <div class="tl-item w-1/2 text-center pb-8">
                <div class="tl-content relative px-16 left">
                    <h4 class="text-xl">2017</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum pariatur temporibus a.</p>
                </div>
            </div>
            <div class="tl-item w-1/2 text-center pb-8">
                <div class="tl-content relative px-16 right">
                    <h4 class="text-xl">2021</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum pariatur temporibus a.</p>
                </div>
            </div>
            <div class="tl-item w-1/2 text-center pb-8">
                <div class="tl-content relative px-16 left">
                    <h4 class="text-xl">2017</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum pariatur temporibus a.</p>
                </div>
            </div>
            <div class="tl-item w-1/2 text-center pb-8">
                <div class="tl-content relative px-16 right">
                    <h4 class="text-xl">2021</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum pariatur temporibus a.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection