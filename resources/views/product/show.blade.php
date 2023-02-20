@extends('template.master')
@section('css')
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css"> --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css">
<style>
    /* D6E6F5 */
    .img-shadow {
        box-shadow: 20px 20px 0px rgb(214 230 245 / .9)
    }
</style>
@endsection
@section('main')
<section class="relative min-h-screen bg-center bg-no-repeat bg-cover main flex justify-center items-center" style="background-image:url('/images/feature-1.jpg')">
    <div class="bg-white/60 backdrop-blur-lg border border-[#3175B2] rounded-3xl flex items-start h-fit w-fit p-20 shadow-md shadow-[#BFD7ED] w-[1000px]">
        <a href="#" class="absolute top-[-70px] left-0 text-[#013565]" onclick="history.back()"><i class="fa-solid fa-chevron-left mr-3"></i>BACK</a>
        <div class="w-1/2 aspect-square">
            <a href="/images/{{$product->cover}}" data-fancybox="g">
                <img src="/images/{{$product->cover}}" alt="" class="w-full h-full object-cover">
            </a>
        </div>
        <div class="w-1/2 px-4">
            <h3 class="text-2xl font-bold mb-4">{{$product->title}}</h3>
            <div>
                {!!$product->body!!}
            </div>
        </div>
    </div>
</section>
@endsection
@section('js')
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox-plus-jquery.min.js"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
@endsection
