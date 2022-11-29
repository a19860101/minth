<!DOCTYPE html>
<html lang="zh-hant">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>敏孚</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('css')
    <style>
        .active {
            transform: rotate(90deg);
        }
    </style>
</head>
<body>
    <main class="flex flex-wrap">
        <nav class="h-screen bg-[#BFD7ED] w-[330px] flex flex-col items-center justify-between tracking-widest">
            <div class="text-center pt-20 pb-10">
                <x-application-logo></x-application-logo>
                <h1 class="mt-4">敏孚機器工業股份有限公司</h1>
            </div>
            <div class="mb-auto w-full text-center">
                <div class="hover:bg-white/50 py-3 transition duration-500"><a href="#">產品介紹</a><i class="fa-solid fa-chevron-right pl-3 toggle transition"></i></div>
                <ul class="pl-2 hidden">
                    <li class="py-3"><a href="#" class="text-[#686868] hover:text-[#075ba8]">外水切</a></li>
                    <li class="py-3"><a href="#" class="text-[#686868] hover:text-[#075ba8]">內水切</a></li>
                    <li class="py-3"><a href="#" class="text-[#686868] hover:text-[#075ba8]">前檔飾條</a></li>
                    <li class="py-3"><a href="#" class="text-[#686868] hover:text-[#075ba8]">後檔飾條</a></li>
                    <li class="py-3"><a href="#" class="text-[#686868] hover:text-[#075ba8]">車頂飾條</a></li>
                    <li class="py-3"><a href="#" class="text-[#686868] hover:text-[#075ba8]">車身飾條</a></li>
                </ul>
                <div class="hover:bg-white/50 py-3 transition duration-500"><a href="#">設備說明</a><i class="fa-solid fa-chevron-right pl-3 toggle transition"></i></div>
                <ul class="pl-2 hidden">
                    <li class="py-3"><a href="#" class="text-[#686868] hover:text-[#075ba8]">設備介紹</a></li>
                    <li class="py-3"><a href="#" class="text-[#686868] hover:text-[#075ba8]">設備說明</a></li>
                </ul>
                <div class="hover:bg-white/50 py-3 transition duration-500"><a href="/certified" class="pr-5">相關認證</a></div>
                <div class="hover:bg-white/50 py-3 transition duration-500"><a href="#">最新消息</a><i class="fa-solid fa-chevron-right pl-3 toggle transition"></i></div>
                <ul class="pl-2 hidden">
                    <li class="py-3"><a href="#" class="text-[#686868] hover:text-[#075ba8]">消息列表</a></li>
                    <li class="py-3"><a href="#" class="text-[#686868] hover:text-[#075ba8]">消息本文</a></li>
                    <li class="py-3"><a href="#" class="text-[#686868] hover:text-[#075ba8]">相關連結</a></li>
                </ul>
                <div class="hover:bg-white/50 py-3 transition duration-500"><a href="#">公司簡介</a><i class="fa-solid fa-chevron-right pl-3 toggle transition"></i></div>
                <ul class="pl-2 hidden">
                    <li class="py-3"><a href="/history" class="text-[#686868] hover:text-[#075ba8]">公司沿革</a></li>
                    <li class="py-3"><a href="/philosophy" class="text-[#686868] hover:text-[#075ba8]">經營理念</a></li>
                    <li class="py-3"><a href="/join-us" class="text-[#686868] hover:text-[#075ba8]">徵才資訊</a></li>
                </ul>
                <div class="hover:bg-white/50 py-3 transition duration-500"><a href="/contact" class="pr-5">聯絡我們</a></div>
            </div>
            <div>
                <a href="#"></a>
            </div>
        </nav>
        <div class="flex-grow flex flex-col">
            @yield('main')
            <footer class="w-full bg-[#d9d9d9] text-center py-4 mt-auto">
                Copyright&copy;2022敏孚機器工業 All rights reserved
            </footer>
        </div>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
        $(function(){

            $('.toggle').click(function(){
                $(this).parent().next().slideToggle();
                $(this).toggleClass('active');
            })
        })
    </script>
    @yield('js')
</body>
</html>