<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>敏孚機器工業股份有限公司</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @php
        $imgs = ['home_1','home_2','home_3','home_4','home_5',];
        shuffle($imgs);
    @endphp
    <style>
        body {
            background-image: url('/images/{{$imgs[0]}}.jpg');
            background-color: #ccc;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;

        }
    </style>
</head>
<body>
    <div class="w-full h-screen relative">
        <img src="/images/bg.png" alt="" class="w-full h-full object-cover opacity-80">
        <div class="w-[1000px] h-fit m-auto absolute inset-0">
            <img src="/images/intro.png" alt="" class="w-full h-full object-cover">
            <a href="/home" class="absolute right-0 px-8 py-1 text-white border border-white rounded-full hover:bg-white hover:text-[#3175B3] transition">Enter</a>
        </div>
    </div>
    {{-- <div class="w-[1280px] h-[600px] absolute inset-0 m-auto"> --}}
        {{-- <div class="absolute bottom-[80px] right-[150px] space-x-4"> --}}
            {{-- <a href="/product" class="inline-block px-8 py-1 text-white border border-white rounded-full hover:bg-white hover:text-[#3175B3] transition">中&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;文</a> --}}
        {{-- </div> --}}
    {{-- </div> --}}
</body>
</html>