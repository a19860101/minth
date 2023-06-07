<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>敏孚機器工業股份有限公司</title>
    <link href="{{ asset('css/app.css?123') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Ubuntu:wght@300;400&display=swap');        
    /* .cover {
            background-image: url('/images/tesla.jpg');
            background-color: #ccc;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;

        } */
        .slider {
            width: 100%;
            height: 100vh;
            margin: auto;
            position: relative;
        }
        .slider-item {
            position: absolute;
            opacity: 0;
            z-index: -1;
            transition: 500ms;
        }
        .slider-item.active {
            opacity: 1;
        }
        .slider-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <div class="flex w-full h-screen">
        <div class="grow relative">
            <div class="w-full h-full relative">
                <div class="slider">
                    {{-- <div class="slider-item w-full h-full active">
                        <img src="/images/tesla.jpg" alt="">
                    </div> --}}
                    <div class="slider-item w-full h-full active">
                        <img src="/images/S__27000887.jpg" alt="">
                    </div>
                    <div class="slider-item w-full h-full">
                        <img src="/images/S__27000890.jpg" alt="">
                    </div>
                    {{-- <div class="slider-item w-full h-full">
                        <img src="/images/S__27000892.jpg" alt="">
                    </div> --}}
                    <div class="slider-item w-full h-full">
                        <img src="/images/S__27000907.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="absolute bg-white w-full min-h-[100px] z-50 bottom-0 left-0 flex flex-wrap justify-center items-center">
                <div class="p-2 w-16 grow-0"><img src="/images/ford.png" alt="" class="w-full"></div>
                <div class="p-2 w-16 grow-0"><img src="/images/mitsubishi.png" alt="" class="w-full"></div>
                <div class="p-2 w-16 grow-0"><img src="/images/toyota.png" alt="" class="w-full"></div>
                <div class="p-2 w-16 grow-0"><img src="/images/honda.png" alt="" class="w-full"></div>
                <div class="p-2 w-16 grow-0"><img src="/images/bmw.png" alt="" class="w-full"></div>
                <div class="p-2 w-16 grow-0"><img src="/images/benz.png" alt="" class="w-full"></div>
                <div class="p-2 w-16 grow-0"><img src="/images/audi.png" alt="" class="w-full"></div>
                <div class="w-full 2xl:hidden"></div>
                <div class="p-2 w-16 grow-0"><img src="/images/landrover.png" alt="" class="w-full"></div>
                <div class="p-2 w-16 grow-0"><img src="/images/lexus.png" alt="" class="w-full"></div>
                <div class="p-2 w-16 grow-0"><img src="/images/vw.png" alt="" class="w-full"></div>
                <div class="p-2 w-16 grow-0"><img src="/images/nissan.png" alt="" class="w-full"></div>
                <div class="p-2 w-16 grow-0"><img src="/images/mazda.png" alt="" class="w-full"></div>
                <div class="p-2 w-16 grow-0"><img src="/images/hyundai.png" alt="" class="w-full"></div>
                <div class="p-2 w-16 grow-0"><img src="/images/subaru.png" alt="" class="w-full"></div>
            </div>
        </div>
        <div class="xl:w-[500px] w-[450px] bg-zinc-200 ml-auto grow-0 shrink-0 text-center pt-20 relative flex flex-col">
            <h1 class="text-center mb-12">
                <span class="text-4xl inline-block mb-2">Minth Technique Corp</span>
                <br>
                <span class="text-2xl inline-block">敏孚機器工業股份有限公司</span>
            </h1>
            <h2 class="text-3xl mb-16 font-sans font-thin tracking-tight text-zinc-600">Taiwan No.1 <br> OEM moulding Manufacturer</h2>
            <div class="p-4 text-2xl space-y-4 font-serif tracking-wide">
                <div>OEM Quality</div>
                <div>AM Competitive Price</div>
                <div>Offer Best Service</div>
                <div>Sustainability</div>
            </div>
            <a href="/home" class="mx-auto mt-auto mb-24 text-2xl w-fit h-fit px-12 py-2 text-white rounded-full bg-black hover:text-black hover:bg-zinc-200 transition">Enter</a>

        </div>
    </div>
    {{-- <div class="bg-black/50 w-full h-screen text-white fixed"> --}}
        {{-- <div class="w-[100px] space-y-4 p-4">
            <img src="/images/ford.png" alt="" class="w-full">
            <img src="/images/mitsubishi.png" alt="" class="w-full">
            <img src="/images/toyota.png" alt="" class="w-full">
            <img src="/images/honda.png" alt="" class="w-full">
            <img src="/images/bmw.png" alt="" class="w-full">
            <img src="/images/benz.png" alt="" class="w-full">
            <img src="/images/landrover.png" alt="" class="w-full">
            <img src="/images/lexus.png" alt="" class="w-full">
            <img src="/images/vw.png" alt="" class="w-full">
            <img src="/images/nissan.png" alt="" class="w-full">
            <img src="/images/mazda.png" alt="" class="w-full">
            <img src="/images/hyundai.png" alt="" class="w-full">
            <img src="/images/subaru.png" alt="" class="w-full">
        </div> --}}
        
    {{-- </div> --}}
    <script>
        let imgs = document.querySelectorAll('.slider-item');
        let total = imgs.length;
        let currentIndex = 0;
        let next = document.querySelector('.slider-next');
        let prev = document.querySelector('.slider-prev');


        function slider(direction){
            currentIndex = (currentIndex+1) % total;
            document.querySelector('.slider-item.active').classList.remove('active');
            imgs[currentIndex].classList.add('active');
        }

        setInterval(slider,6000);

    </script>
</body>
</html>
