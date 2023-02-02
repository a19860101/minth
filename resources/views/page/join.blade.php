@extends('template.master')
@section('css')

@endsection
@section('main')
<section class="relative min-h-screen bg-center bg-no-repeat bg-cover" style="background-image:url('/images/bg.png')">
    <div class="w-full h-[200px] relative">
        <img src="/images/news.jpg" alt="" class="w-full h-full object-cover">
        <h1 class="text-2xl text-white text-center absolute m-auto inset-0 w-full h-full bg-black/50 leading-[200px]">{{__('join_us')}}</h1>
    </div>
    <div class="py-20 w-4/5 m-auto">
        {{-- <h2 class="text-2xl text-center w-full top-0 left-0 text-[#013565] mb-10">{{__('join_us')}}</h2> --}}
        {{-- <div class="text-center space-y-6 mb-12 text-lg leading-10">
            本公司的經營理念係以人和為基礎、公司永續經營共創公司利潤以期能達到客戶滿意、員工滿意、股東滿意的目標。<br>
            如果您追求的是一個可以永續經營的跨國企業；<br>
            如果您追求的是一個可以不斷自我成長的機會；<br>
            如果您是一個不畏接受工作挑戰的人；<br>
            敏孚無疑就是您理想的歸屬；<br>
            因為我們深信唯有凝聚一流的人才，方能成就一流的企業。<br>
            歡迎您來了解本公司長年成長的軌跡與未來之願景。<br>
        </div>
        <div class="space-y-6 w-8/12 mx-auto text-xl">
            <div class="flex items-center">
                <h4 class="w-[150px] text-[#013565]">福利制度</h4>
                <div class="border border-[#3175B2] rounded-[12px] bg-white/50 p-4 text-base w-full">
                    <ol class="list-decimal list-inside">
                        <li>享勞、健保、 團體保險、週休二日休假制</li>
                        <li>專業訓練及管理訓練</li>
                        <li>年終晚會、三節獎金及生日禮券、婚喪喜慶補助、年終獎金、員工旅遊</li>
                    </ol>
                </div>
            </div>
            <div class="flex items-center">
                <h4 class="w-[150px] text-[#013565]">徵才項目</h4>
                <div class="border border-[#3175B2] rounded-[12px] bg-white/50 p-4 text-base w-full">
                    <ol class="list-decimal list-inside">
                        <li>作業員</li>
                        <li>技術員</li>
                    </ol>
                </div>
            </div>
        </div> --}}
        <div class="leading-8">
            The company's business philosophy is based on people and harmony, and the company's sustainable operation creates company profits in order to achieve the goals of customer satisfaction, employee satisfaction, and shareholder satisfaction.
            If you are pursuing a sustainable multinational enterprise;<br>
            If you are pursuing an opportunity for continuous self-growth;<br>
            If you are a person who is not afraid to accept the challenge of work;<br>
            Minfu is undoubtedly your ideal belonging;<br>
            Because we firmly believe that only by gathering first-class talents can we achieve a first-class enterprise.<br>
            Welcome to learn about the company's long-term growth trajectory and future vision.<br>
        </div>
        <div class="my-5">
            <div class="flex items-center mb-5">
                <h4 class="w-[150px] text-[#013565]">Welfare System</h4>
                <div class="border border-[#3175B2] rounded-[12px] bg-white/50 p-4 text-base w-full">
                    <ol class="list-decimal list-inside">
                        <li>Labor benefits, health insurance, group insurance, and two-day holidays per week
                            
                            </li>
                        <li>Professional training and management training</li>
                        <li>Year-end party, bonuses for three festivals and birthday gift certificates, subsidies for weddings and funerals, year-end bonuses, employee travel</li>
                    </ol>
                </div>
            </div>
            <div class="flex items-center mb-5">
                <h4 class="w-[150px] text-[#013565]">Recruitment project</h4>
                <div class="border border-[#3175B2] rounded-[12px] bg-white/50 p-4 text-base w-full">
                    <ol class="list-decimal list-inside">
                        <li>Operator</li>
                        <li>technician</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection