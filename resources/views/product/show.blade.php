@extends('template.master')
@section('css')
<style>
    /* D6E6F5 */
    .img-shadow {
        box-shadow: 20px 20px 0px rgb(214 230 245 / .9)
    }
</style>
@endsection
@section('main')
<section class="relative h-full bg-center bg-no-repeat bg-cover" style="background-image:url('/images/bg-1.png')">
    <div class="bg-white/50 border border-[#3175B2] rounded-[66px] flex items-start h-fit w-fit absolute inset-0 m-auto px-20 py-32 shadow-md shadow-[#BFD7ED]">
        <a href="#" class="absolute top-[-70px] left-0 text-[#013565]"><i class="fa-solid fa-chevron-left mr-3"></i>BACK</a>
        <div class="w-[400px] h-[400px]">
            <img src="/images/{{$product->cover}}" alt="" class="block img-shadow w-full h-full object-cover">
        </div>
        <div class="w-[400px] text-center">
            <h3 class="text-3xl mb-6">{{$product->title_en}}</h3>
            <div class="mb-5">{{__('car_model')}}</div>
            <ul class="list-disc list-inside">
                @php
                    $car = explode(',',$product->car_en);
                @endphp
                @foreach($car as $c)
                <li>{{$c}}</li>
                @endforeach
            </ul>
        </div>
    </div>
</section>
@endsection