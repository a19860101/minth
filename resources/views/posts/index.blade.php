@extends('template.master')
@section('main')
<section>
    <div class="w-full h-[300px]">
        <img src="/images/news.jpg" alt="" class="w-full h-full object-cover">
    </div>
    <div>
        <h1 class="text-2xl text-[#013565] text-center py-8">{{__('news')}}</h1>
    </div>
</section>
@endsection