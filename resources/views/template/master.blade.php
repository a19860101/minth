<!DOCTYPE html>
<html lang="zh-hant">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{__('minth')}}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link href="{{ asset('css/app.css?123') }}" rel="stylesheet">
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
                <h1 class="mt-4">{{__('minth')}}</h1>
            </div>
            <div class="mb-auto w-full text-center">
                <div class="hover:bg-white/50 py-3 transition duration-500"><a href="#">{{__('product')}}</a><i class="fa-solid fa-chevron-right pl-3 toggle transition"></i></div>
                <ul class="pl-2 hidden">
                    @php
                        $products = \App\Models\Product::get();
                    @endphp
                    @foreach($products as $p)
                    <li class="py-3"><a href="/product/{{$p->id}}" class="text-[#686868] hover:text-[#075ba8]">{{$p->title_en}}</a></li>
                    @endforeach
                </ul>
                <div class="hover:bg-white/50 py-3 transition duration-500"><a href="/equipment">{{__('equipment')}}</a><i class="fa-solid fa-chevron-right pl-3 toggle transition"></i></div>
                <ul class="pl-2 hidden">
                    <li class="py-3"><a href="/equipment/machine" class="text-[#686868] hover:text-[#075ba8]">{{__('machine_equipment')}}</a></li>
                    <li class="py-3"><a href="/equipment/test" class="text-[#686868] hover:text-[#075ba8]">{{__('test_equipment')}}</a></li>
                </ul>
                <div class="hover:bg-white/50 py-3 transition duration-500"><a href="/certified">{{__('certification')}}<i class="fa-solid fa-chevron-right pl-3 opacity-0"></i></a></div>
                <div class="hover:bg-white/50 py-3 transition duration-500"><a href="#">{{__('news')}}</a><i class="fa-solid fa-chevron-right pl-3 toggle transition"></i></div>
                <ul class="pl-2 hidden">
                    <li class="py-3"><a href="/news" class="text-[#686868] hover:text-[#075ba8]">{{__('news_list')}}</a></li>
                    {{-- <li class="py-3"><a href="#" class="text-[#686868] hover:text-[#075ba8]">消息本文</a></li> --}}
                    <li class="py-3"><a href="/links" class="text-[#686868] hover:text-[#075ba8]">{{__('links')}}</a></li>
                </ul>
                <div class="hover:bg-white/50 py-3 transition duration-500"><a href="#">{{__('company')}}</a><i class="fa-solid fa-chevron-right pl-3 toggle transition"></i></div>
                <ul class="pl-2 hidden">
                    <li class="py-3"><a href="/history" class="text-[#686868] hover:text-[#075ba8]">{{__('history')}}</a></li>
                    <li class="py-3"><a href="/philosophy" class="text-[#686868] hover:text-[#075ba8]">{{__('philosophy')}}</a></li>
                    <li class="py-3"><a href="/join-us" class="text-[#686868] hover:text-[#075ba8]">{{__('join_us')}}</a></li>
                </ul>
                <div class="hover:bg-white/50 py-3 transition duration-500"><a href="/contact">{{__('contact')}}<i class="fa-solid fa-chevron-right pl-3 opacity-0"></i></a></div>
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
            let h = $('body').outerHeight();
            $('nav').css('height',h)
        
            // let url = new URL(window.location.href);
            // console.log(url.pathname.includes('product'));
            // let pathname = url.pathname;
        
        })

    </script>
    @yield('js')
</body>
</html>