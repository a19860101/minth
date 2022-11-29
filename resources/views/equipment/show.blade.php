@extends('template.master')
@section('css')
<style>

</style>
@endsection
@section('main')
<section class="relative h-full bg-center bg-no-repeat bg-cover" style="background-image:url('/images/bg-2.png')">
    <div class="flex items-start h-fit max-w-screen-xl w-10/12 absolute inset-0 m-auto p-32">
        <a href="#" class="absolute top-[-70px] left-0 text-[#013565]"><i class="fa-solid fa-chevron-left mr-3"></i>BACK</a>
        <h2 class="text-2xl absolute text-center w-full top-[-100px] left-0 text-[#013565]">設備說明</h2>
        <div class="flex">
            <div class="w-1/2 px-8">
                <img src="https://picsum.photos/id/32/600" alt="" class="w-full">
            </div>
            <div class="w-1/2 px-8 border-l border-black flex flex-col justify-center">
                <h3 class="text-2xl mb-4">押出機</h3>
                <div class="text-zinc-500">
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat voluptatum est quas laboriosam id illum iste eum. Consequuntur enim aut voluptate animi voluptates, itaque officia modi omnis, iure dolore dicta.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('js')

@endsection