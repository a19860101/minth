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
    <main class="">
        <nav class="h-screen bg-[#BFD7ED] left-[-330px] md:left-0 w-[330px] flex flex-col justify-between tracking-wider fixed z-50 overflow-scroll">
            <div class="text-center pt-20 pb-10">
                <x-application-logo></x-application-logo>
                <h1 class="mt-4">{{__('minth')}}</h1>
            </div>
            <div class="mb-auto w-full pl-4">
                <div class="py-2"><a href="#">{{__('product')}}</a></div>
                <ul class="pl-3">
                    @php
                        $products = \App\Models\Category::orderBy('id','DESC')->get();
                    @endphp
                    @foreach($products as $p)
                    <li class="py-1"><a href="/product/{{$p->id}}" class="text-[#686868] hover:text-[#075ba8]">{{$p->title_en}}</a></li>
                    @endforeach
                </ul>
                <div class="py-2"><a href="/equipment">{{__('equipment')}}</a></div>
                <ul class="pl-3">
                    <li class="py-1"><a href="/equipment/feature" class="text-[#686868] hover:text-[#075ba8]">{{__('feature_equipment')}}</a></li>
                    <li class="py-1"><a href="/equipment/machine" class="text-[#686868] hover:text-[#075ba8]">{{__('machine_equipment')}}</a></li>
                    <li class="py-1"><a href="/equipment/test" class="text-[#686868] hover:text-[#075ba8]">{{__('test_equipment')}}</a></li>
                </ul>
                <div class="py-2"><a href="/certified">{{__('certification')}}<i class="fa-solid fa-chevron-right pl-3 opacity-0"></i></a></div>
                <div class="py-2"><a href="#">{{__('news')}}</a></div>
                <ul class="pl-3">
                    <li class="py-1"><a href="/news" class="text-[#686868] hover:text-[#075ba8]">{{__('news_list')}}</a></li>
                    {{-- <li class="py-1"><a href="#" class="text-[#686868] hover:text-[#075ba8]">消息本文</a></li> --}}
                    <li class="py-1"><a href="/links" class="text-[#686868] hover:text-[#075ba8]">{{__('links')}}</a></li>
                </ul>
                <div class="py-2"><a href="#">{{__('company')}}</a></div>
                <ul class="pl-3">
                    <li class="py-1"><a href="/history" class="text-[#686868] hover:text-[#075ba8]">{{__('history')}}</a></li>
                    <li class="py-1"><a href="/philosophy" class="text-[#686868] hover:text-[#075ba8]">{{__('philosophy')}}</a></li>
                    <li class="py-1"><a href="/join-us" class="text-[#686868] hover:text-[#075ba8]">{{__('join_us')}}</a></li>
                </ul>
                <div class="py-2"><a href="/contact">{{__('contact')}}<i class="fa-solid fa-chevron-right pl-3 opacity-0"></i></a></div>
            </div>
            <div>
                <a href="#"></a>
            </div>
        </nav>
        <section class="absolute pl-0 md:pl-[330px] w-full">
            @yield('main')
            <footer class="w-full bg-[#d9d9d9] text-center py-4 mt-[-56px] relative">
                Copyright&copy;2022敏孚機器工業 All rights reserved
            </footer>
        </section>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
        $(function(){

            // $('.toggle').click(function(){
            //     $(this).parent().next().slideToggle();
            //     $(this).toggleClass('active');
            // })
            // let h = $('body').outerHeight();
            // $('nav').css('height',h)
        
            // let url = new URL(window.location.href);
            // console.log(url.pathname.includes('product'));
            // let pathname = url.pathname;
        
        })

    </script>
    @yield('js')
</body>
</html>