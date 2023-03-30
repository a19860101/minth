<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>敏孚機器工業股份有限公司</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body {
            background-image: url('/images/tesla.jpg');
            background-color: #ccc;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;

        }
    </style>
</head>
<body>
    <div class="w-full h-screen relative sm:block hidden">
        <div class="w-full h-full object-cover bg-white/60"></div>
        {{-- <img src="/images/bg.png" alt="" class="w-full h-full object-cover opacity-40"> --}}
        <div class="lg:w-2/3 w-10/12 h-fit m-auto absolute inset-0">
            <img src="/images/intro.png" alt="" class="w-full h-full object-cover">
            {{-- <a href="/equipment/feature" class="absolute lg:bottom-0 lg:right-0 bottom-[30px] right-[50px] px-8 py-1 text-black rounded-full bg-white hover:text-[#3175B3] transition">Enter</a> --}}
            <a href="/home" class="absolute lg:bottom-0 lg:right-0 bottom-[30px] right-[50px] px-8 py-1 text-black rounded-full bg-white hover:text-[#3175B3] transition">Enter</a>
        </div>
    </div>
    <div class="w-full h-screen sm:hidden block">
        <div class="w-full h-full object-cover bg-white/60"></div>
        <img src="/images/intro-s.png" alt="" class="absolute w-[480px] inset-0 m-auto">
        <a href="/home" class="absolute inset-0 translate-y-[150px] w-fit h-fit m-auto px-8 py-1 text-black rounded-full bg-white hover:text-[#3175B3] transition">Enter</a>
    </div>
    {{-- <div class="w-[1280px] h-[600px] absolute inset-0 m-auto"> --}}
        {{-- <div class="absolute bottom-[80px] right-[150px] space-x-4"> --}}
            {{-- <a href="/product" class="inline-block px-8 py-1 text-white border border-white rounded-full hover:bg-white hover:text-[#3175B3] transition">中&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;文</a> --}}
        {{-- </div> --}}
    {{-- </div> --}}
</body>
</html>
