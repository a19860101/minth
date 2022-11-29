@extends('template.master')
@section('css')

@endsection
@section('main')
<section class="relative h-full bg-center bg-no-repeat bg-cover" style="background-image:url('/images/bg.png')">
    <div class="bg-white/50 border border-[#3175B2] rounded-[66px] h-fit max-w-screen-md w-1/2 absolute inset-0 m-auto p-12">
        <h2 class="text-2xl text-center w-full top-0 left-0 text-[#013565] mb-10">聯絡我們</h2>
        <form action="">
            <div class="flex items-center mb-6">
                <label for="" class="w-[100px] text-right pr-[20px]">姓名</label>
                <div class="pl-4 flex-grow">
                    <input type="text" placeholder="請填寫姓名" class="rounded-full w-full">
                </div>
            </div>
            <div class="flex items-center mb-6">
                <label for="" class="w-[100px] text-right pr-[20px]">公司名稱</label>
                <div class="pl-4 flex-grow">
                    <input type="text" placeholder="請填寫公司全名" class="rounded-full w-full">
                </div>
            </div>
            <div class="flex items-center mb-6">
                <label for="" class="w-[100px] text-right pr-[20px]">公司電話</label>
                <div class="pl-4 flex-grow">
                    <input type="text" placeholder="EX. 02-1234-5678" class="rounded-full w-full">
                </div>
            </div>
            <div class="flex items-center mb-6">
                <label for="" class="w-[100px] text-right pr-[20px]">公司傳真</label>
                <div class="pl-4 flex-grow">
                    <input type="text" placeholder="EX. 02-1234-5678" class="rounded-full w-full">
                </div>
            </div>
            <div class="flex items-center mb-6">
                <label for="" class="w-[100px] text-right pr-[20px]">公司地址</label>
                <div class="pl-4 flex-grow">
                    <input type="text" placeholder="EX. XX市XX區XX街XX巷XX號X樓" class="rounded-full w-full">
                </div>
            </div>
            <div class="flex items-center mb-6">
                <label for="" class="w-[100px] text-right pr-[20px]">Email</label>
                <div class="pl-4 flex-grow">
                    <input type="text" placeholder="EX. Name@mail.com" class="rounded-full w-full">
                </div>
            </div>
            <div class="flex items-center mb-6">
                <label for="" class="w-[100px] text-right pr-[20px]">相關意見</label>
                <div class="pl-4 flex-grow">
                    <textarea name="" id="" cols="30" rows="10" class="rounded-3xl w-full"></textarea>
                </div>
            </div>
            <div class="text-right">
                <input type="submit" value="送出" class="rounded-full bg-[#013565] py-1 px-2 text-white">
            </div>
        </form>
    </div>
    
</section>
<div class="text-center py-10">
    <div class="mb-6"><span class="text-[#3175B2]">公司住址</span> 台北市中正區南昌路1段53號7樓 </div>
    <div  class="mb-6"><span class="text-[#3175B2]">工廠地址</span> 桃園市龜山區海萍路5號   </div>
    <div><span class="text-[#3175B2]">工廠電話</span> 03-3298671   <span class="text-[#3175B2]">傳真</span> 03-3295839 </div>
    <div>業務部代表號:589     E-mail: sales@minth.com.tw </div>
</div>
@endsection