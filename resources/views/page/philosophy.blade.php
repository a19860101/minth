@extends('template.master')
@section('css')

@endsection
@section('main')
<section class="relative h-full bg-center bg-no-repeat bg-cover" style="background-image:url('/images/bg.png')">
    <div class="h-fit max-w-screen-xl w-11/12 absolute inset-0 m-auto p-12">
        <h2 class="text-2xl text-center w-full top-0 left-0 text-[#013565] mb-10">經營理念</h2>
        <div class="text-center space-y-6 mb-12 text-xl">
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
        </div>
    </div>
</section>
@endsection