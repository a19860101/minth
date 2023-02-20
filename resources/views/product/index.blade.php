@extends('template.master')
@section('main')
<section class="relative min-h-screen bg-center bg-no-repeat bg-cover bg-fixed main flex justify-center items-center pb-20" style="background-image:url('/images/feature-2.jpg')">
    <div class="bg-white/60 backdrop-blur-lg border border-[#3175B2] rounded-3xl h-fit w-fit p-20 shadow-md shadow-[#BFD7ED] w-[1000px]">
        <h2 class="text-4xl font-bold p-3">{{__($category->title_en)}}</h2>
        @php
        $brands = \App\Models\Brand::get();
        @endphp
        <div>
            @foreach($brands as $brand)
            @if($brand->products->first())
            <h3 class="text-3xl font-bold p-3">{{$brand->title}}</h3>
            @endif
            <div class="flex flex-wrap">
                @foreach($products as $prod)
                    @if($prod->brand_id == $brand->id)
                    <div class="w-1/4 p-3">
                        <div class="aspect-square">
                            <img src="/images/{{$prod->cover}}" alt="" class="w-full h-full object-cover">
                        </div>
                        <div><a href="/product/detail/{{$prod->id}}">{{$prod->title}}</a></div>
                    </div>
                    @endif
                @endforeach
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
