@extends('template.master')
@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
<style>
    /* D6E6F5 */
    .img-shadow {
        box-shadow: 20px 20px 0px rgb(214 230 245 / .9)
    }
    .slick-next:before, .slick-prev:before {color: #013565;}
</style>
@endsection
@section('main')
<section class="relative min-h-screen bg-center bg-no-repeat bg-cover main" style="background-image:url('/images/bg-2.png')">
    <div class="bg-white/50 border border-[#3175B2] rounded-[66px] flex justify-around items-start h-fit max-w-screen-xl w-11/12 absolute inset-0 m-auto px-20 py-32 shadow-md shadow-[#BFD7ED]">
        {{-- <h2 class="text-2xl absolute text-center w-full top-[-100px] left-0 text-[#013565]">設備介紹</h2> --}}

        <div>

            <ul>
                <h3 class="text-3xl font-bold mb-4">Test Equipment</h3>

                <li>Multi-function test machine</li>
                <li>High-temperature Tester</li>
                <li>Environmental Humidity & Temperature Chamber</li>
                <li>Low-temperature Tester</li>
                <li>Friction facility</li>
                <li>Impact facility</li>
                <li>Fall ball test machine</li>
                <li>HV & HSD Hardness Tester</li>
                <li>Rubber & Plastic Specific Gravimeter</li>
                <li>Salt Spray Chamber</li>
                <li>MI tester</li>
                <li>Gloss Meters</li>
            </ul>
        </div>
            
        {{-- <div class="slider w-full">
            <div class="mx-2">
                <a href="#">
                    <img src="https://picsum.photos/id/98/200" alt="" class="w-full">
                </a>
                <div class="text-center mt-4">Title</div>
            </div>
            <div class="mx-2">
                <a href="#">
                    <img src="https://picsum.photos/id/18/200" alt="" class="w-full">
                </a>
                <div class="text-center mt-4">Title</div>
            </div>
            <div class="mx-2">
                <a href="#">
                    <img src="https://picsum.photos/id/28/200" alt="" class="w-full">
                </a>
                <div class="text-center mt-4">Title</div>
            </div>
            <div class="mx-2">
                <a href="#">
                    <img src="https://picsum.photos/id/38/200" alt="" class="w-full">
                </a>
                <div class="text-center mt-4">Title</div>
            </div>
            <div class="mx-2">
                <a href="#">
                    <img src="https://picsum.photos/id/48/200" alt="" class="w-full">
                </a>
                <div class="text-center mt-4">Title</div>
            </div>
        </div> --}}
    </div>
</section>
@endsection
@section('js')
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script>
    $(function(){
        $('.slider').slick({
            slidesToShow:1,
            centerMode: true,
            centerPadding: '250px',
            infinite: false
        })
    })
</script> --}}
@endsection