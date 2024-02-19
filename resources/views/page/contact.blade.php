@extends('template.master')
@section('css')

@endsection
@section('main')
<section class="relative min-h-screen bg-center bg-no-repeat bg-cover main flex flex-col" style="background-image:url('/images/bg.png')">
    <div class="bg-white/50 border border-[#3175B2] rounded-xl h-fit max-w-screen-md w-11/12 p-10 mx-auto mb-10 mt-16">
        <h2 class="text-2xl text-center w-full top-0 left-0 text-[#013565] mb-4">{{__('contact')}}</h2>
        <form action="/contact" method="post">
            @csrf
            <div class="flex items-center mb-4">
                <label for="" class="w-[100px] text-right pr-[10px]">{{__('name')}}</label>
                <div class="pl-4 flex-grow">
                    <input type="text" name="name" placeholder="" class="rounded-full w-full p-1">
                </div>
            </div>
            <div class="flex items-center mb-4">
                <label for="" class="w-[100px] text-right pr-[10px]">{{__('company_name')}}</label>
                <div class="pl-4 flex-grow">
                    <input type="text" name="company_name" placeholder="" class="rounded-full w-full p-1">
                </div>
            </div>
            <div class="flex items-center mb-4">
                <label for="" class="w-[100px] text-right pr-[10px]">{{__('company_phone')}}</label>
                <div class="pl-4 flex-grow">
                    <input type="text" name="company_phone" placeholder="" class="rounded-full w-full p-1">
                </div>
            </div>
            <div class="flex items-center mb-4">
                <label for="" class="w-[100px] text-right pr-[10px]">{{__('company_fax')}}</label>
                <div class="pl-4 flex-grow">
                    <input type="text" name="company_fax" placeholder="" class="rounded-full w-full p-1">
                </div>
            </div>
            <div class="flex items-center mb-4">
                <label for="" class="w-[100px] text-right pr-[10px]">{{__('company_address')}}</label>
                <div class="pl-4 flex-grow">
                    <input type="text" name="company_address" placeholder="" class="rounded-full w-full p-1">
                </div>
            </div>
            <div class="flex items-center mb-4">
                <label for="" class="w-[100px] text-right pr-[10px]">{{__('email')}}</label>
                <div class="pl-4 flex-grow">
                    <input type="email" name="email" placeholder="" class="rounded-full w-full p-1">
                </div>
            </div>
            <div class="flex items-center mb-4">
                <label for="" class="w-[100px] text-right pr-[10px]">{{__('comment')}}</label>
                <div class="pl-4 flex-grow">
                    <textarea name="comment" id="" cols="30" rows="8" class="rounded-3xl w-full"></textarea>
                </div>
            </div>
            <div class="text-right">
                <input type="submit" value="{{__('submit')}}" class="rounded-full bg-[#013565] py-1 px-2 text-white">
            </div>
        </form>
    </div>
    <div class="text-center text-sm bg-white mt-auto py-10 relative bottom-[56px]">
        <div class="mb-4"><span class="text-[#3175B2]">{{__('Company')}}</span> 7F., No. 53, Sec. 1, Nanchang Rd., Zhongzheng Dist., Taipei City  , Taiwan (R.O.C.) </div>
        <div  class="mb-4"><span class="text-[#3175B2]">{{__('Factory')}}</span> No. 5, Haiping Rd., Guishan Dist., Taoyuan City , Taiwan (R.O.C.)   </div>
        <div><span class="text-[#3175B2]">{{__('company_phone')}}</span> 886-3-3298671   <span class="text-[#3175B2]">{{__('company_fax')}}</span> 886-3-3295839 </div>
        <div>{{__('BusinessUnit')}}     E-mail: sales@minth.com.tw </div>
    </div>
</section>
{{-- <div class="text-center py-10">
    <div class="mb-6"><span class="text-[#3175B2]">公司住址</span> 台北市中正區南昌路1段53號7樓 </div>
    <div  class="mb-6"><span class="text-[#3175B2]">工廠地址</span> 桃園市龜山區海萍路5號   </div>
    <div><span class="text-[#3175B2]">工廠電話</span> 03-3298671   <span class="text-[#3175B2]">傳真</span> 03-3295839 </div>
    <div>業務部代表號:589     E-mail: sales@minth.com.tw </div>
</div> --}}

@endsection