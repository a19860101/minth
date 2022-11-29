@extends('template.master')
@section('css')

@endsection
@section('main')
<section class="relative h-full bg-center bg-no-repeat bg-cover" style="background-image:url('/images/bg.png')">
    <div class="h-fit max-w-screen-xl w-11/12 absolute inset-0 m-auto p-12">
        <h2 class="text-2xl text-center w-full top-0 left-0 text-[#013565] mb-10">徵才資訊</h2>
        <div class="text-center space-y-6 mb-12 text-lg leading-10">
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
        </div>
    </div>
</section>
@endsection