@extends('template.master')
@section('css')
<style>
    .tl::after {
        content:'';
        position: absolute;
        width: 1px;
        background-color: #013565;
        top: 0;
        bottom: 0;
        left: 50%;
    }
    .tl-item {
        position: relative;
    }
    .tl-item::after {
        content:'';
        position: absolute;
        width: 30px;
        height: 30px;
        background-color: #fff;
        border:1px solid #013565;
        border-radius: 50%;

        right: -15px;
        top: 0;
        z-index: 10;
    }
    .left {
        left:0;
    }
    .right {
        left: 100%;
    }
    section.main {
        background-image: 
            linear-gradient(to right top,rgba(255, 195, 235, 0.5),rgba(196, 229, 255, 0.5));
    }
</style>
@endsection
@section('main')

<section class="main relative min-h-screen bg-center bg-no-repeat bg-cover">
    <div class="w-full h-[200px] relative">
        <img src="/images/history.jpg" alt="" class="w-full h-full object-cover">
        <h1 class="text-5xl text-white text-center absolute m-auto inset-0 w-full h-full bg-black/50 leading-[200px]">{{__('history')}}</h1>
    </div>
    <div class="flex py-12 pb-20">
        @if(app()->getLocale() == 'zh_TW')
        <div class="tl relative w-[1000px] mx-auto">
            <div class="tl-item w-1/2 text-center pb-8">
                <div class="tl-content relative px-8 md:px-16 left">
                    <h4 class="text-xl">1965 / 12</h4>
                    <p>
                        信泰機器工業股份有限公司創立(敏孚前身)
                    </p>
                </div>
            </div>
            <div class="tl-item w-1/2 text-center pb-8">
                <div class="tl-content relative px-8 md:px-16 right">
                    <h4 class="text-xl">1973 / 10</h4>
                    <p>與日本橋本工業技術合作
                    </p>
                </div>
            </div>
            <div class="tl-item w-1/2 text-center pb-8">
                <div class="tl-content relative px-8 md:px-16 left">
                    <h4 class="text-xl">1978 / 09</h4>
                    <p>
                        桃園壽山工業區龜山廠成立
                    </p>
                </div>
            </div>
            <div class="tl-item w-1/2 text-center pb-8">
                <div class="tl-content relative px-8 md:px-16 right">
                    <h4 class="text-xl">1981 / 06</h4>
                    <p>國內一体複合押出成形線首度成立
                    </p>
                </div>
            </div>
            <div class="tl-item w-1/2 text-center pb-8">
                <div class="tl-content relative px-8 md:px-16 left">
                    <h4 class="text-xl">1991 / 09</h4>
                    <p>
                        敏孚機器工業股份有限公司成立
                    </p>
                </div>
            </div>
            <div class="tl-item w-1/2 text-center pb-8">
                <div class="tl-content relative px-8 md:px-16 right">
                    <h4 class="text-xl">1992 / 02</h4>
                    <p>與台裕橡膠工業股份有限公司正式業務往來
                    </p>
                </div>
            </div>
            <div class="tl-item w-1/2 text-center pb-8">
                <div class="tl-content relative px-8 md:px-16 left">
                    <h4 class="text-xl">1995 / 05</h4>
                    <p>成立PVC造粒之生產及研發部門
                    </p>
                </div>
            </div>
            <div class="tl-item w-1/2 text-center pb-8">
                <div class="tl-content relative px-8 md:px-16 right">
                    <h4 class="text-xl">1998 / 11</h4>
                    <p>取得ISO9002及QS9000之認證
                    </p>
                </div>
            </div>
            <div class="tl-item w-1/2 text-center pb-8">
                <div class="tl-content relative px-8 md:px-16 left">
                    <h4 class="text-xl">2001 / 02</h4>
                    <p>與福特六和汽車建立業務關係
                    </p>
                </div>
            </div>
            <div class="tl-item w-1/2 text-center pb-8">
                <div class="tl-content relative px-8 md:px-16 right">
                    <h4 class="text-xl">2001 / 06
                    </h4>
                    <p>與中華汽車正式業務往來
                    </p>
                </div>
            </div>
            <div class="tl-item w-1/2 text-center pb-8">
                <div class="tl-content relative px-8 md:px-16 left">
                    <h4 class="text-xl">2003 / 05
                    </h4>
                    <p>取得ISO14001環境政策之認證
                    </p>
                </div>
            </div>
            <div class="tl-item w-1/2 text-center pb-8">
                <div class="tl-content relative px-8 md:px-16 right">
                    <h4 class="text-xl">2004 / 06
                    </h4>
                    <p>通過福特六車Q1品質獎評審
                    </p>
                </div>
            </div>
            <div class="tl-item w-1/2 text-center pb-8">
                <div class="tl-content relative px-8 md:px-16 left">
                    <h4 class="text-xl">2004 / 09
                    </h4>
                    <p>TPO.TPV製品生產開始
                    </p>
                </div>
            </div>
            <div class="tl-item w-1/2 text-center pb-8">
                <div class="tl-content relative px-8 md:px-16 right">
                    <h4 class="text-xl">2005 / 01

                    </h4>
                    <p>FORD Q1 CERTIFICATE之認證</p>
                </div>
            </div>
            <div class="tl-item w-1/2 text-center pb-8">
                <div class="tl-content relative px-8 md:px-16 left">
                    <h4 class="text-xl">2005 / 10
                    </h4>
                    <p>與日本東海興業株式會社技術合作
                    </p>
                </div>
            </div>
            <div class="tl-item w-1/2 text-center pb-8">
                <div class="tl-content relative px-8 md:px-16 right">
                    <h4 class="text-xl">2006 / 11
                    </h4>
                    <p>取得TS16949認證
                    </p>
                </div>
            </div>
            <div class="tl-item w-1/2 text-center pb-8">
                <div class="tl-content relative px-8 md:px-16 left">
                    <h4 class="text-xl">2008 / 03

                    </h4>
                    <p>國內首條TPO.TPV複合式三押生產線設立</p>
                </div>
            </div>
        </div>
        @else
        <div class="tl relative w-[1000px] mx-auto">
            <div class="tl-item w-1/2 text-center pb-8">
                <div class="tl-content relative px-8 md:px-16 left">
                    <h4 class="text-xl">1965 / 12</h4>
                    <p>
                        Xintai Machinery Industry Co., Ltd. was founded (the predecessor of Minth)
                    </p>
                </div>
            </div>
            <div class="tl-item w-1/2 text-center pb-8">
                <div class="tl-content relative px-8 md:px-16 right">
                    <h4 class="text-xl">1973 / 10</h4>
                    <p>Technical cooperation with Japan's Hashimoto Industrial
                    </p>
                </div>
            </div>
            <div class="tl-item w-1/2 text-center pb-8">
                <div class="tl-content relative px-8 md:px-16 left">
                    <h4 class="text-xl">1978 / 09</h4>
                    <p>
                        The Guishan Factory in Taoyuan Shoushan Industrial Zone was established
                    </p>
                </div>
            </div>
            <div class="tl-item w-1/2 text-center pb-8">
                <div class="tl-content relative px-8 md:px-16 right">
                    <h4 class="text-xl">1981 / 06</h4>
                    <p>The first domestic integrated composite extrusion forming line was established
                    </p>
                </div>
            </div>
            <div class="tl-item w-1/2 text-center pb-8">
                <div class="tl-content relative px-8 md:px-16 left">
                    <h4 class="text-xl">1991 / 09</h4>
                    <p>
                        Minth Technique Corp. was established
                    </p>
                </div>
            </div>
            <div class="tl-item w-1/2 text-center pb-8">
                <div class="tl-content relative px-8 md:px-16 right">
                    <h4 class="text-xl">1992 / 02</h4>
                    <p>Taiyu Rubber started business relationship
                    </p>
                </div>
            </div>
            <div class="tl-item w-1/2 text-center pb-8">
                <div class="tl-content relative px-8 md:px-16 left">
                    <h4 class="text-xl">1995 / 05</h4>
                    <p>Added PVC granulation line production and R&D department
                    </p>
                </div>
            </div>
            <div class="tl-item w-1/2 text-center pb-8">
                <div class="tl-content relative px-8 md:px-16 right">
                    <h4 class="text-xl">1998 / 11</h4>
                    <p>Obtained ISO9002 and QS9000 quality assurance system certification
                    </p>
                </div>
            </div>
            <div class="tl-item w-1/2 text-center pb-8">
                <div class="tl-content relative px-8 md:px-16 left">
                    <h4 class="text-xl">2001 / 02</h4>
                    <p>Ford Liuhe Motors started business relationship
                    </p>
                </div>
            </div>
            <div class="tl-item w-1/2 text-center pb-8">
                <div class="tl-content relative px-8 md:px-16 right">
                    <h4 class="text-xl">2001 / 06
                    </h4>
                    <p>Zhonghua Automobile started business relationship
                    </p>
                </div>
            </div>
            <div class="tl-item w-1/2 text-center pb-8">
                <div class="tl-content relative px-8 md:px-16 left">
                    <h4 class="text-xl">2003 / 05
                    </h4>
                    <p>Obtained ISO14000 environmental protection certification
                    </p>
                </div>
            </div>
            <div class="tl-item w-1/2 text-center pb-8">
                <div class="tl-content relative px-8 md:px-16 right">
                    <h4 class="text-xl">2004 / 06
                    </h4>
                    <p>Passed the evaluation of Q1 Quality Award of Ford Six Automobile
                    </p>
                </div>
            </div>
            <div class="tl-item w-1/2 text-center pb-8">
                <div class="tl-content relative px-8 md:px-16 left">
                    <h4 class="text-xl">2004 / 09
                    </h4>
                    <p>Production of TPO.TPV products begins
                    </p>
                </div>
            </div>
            <div class="tl-item w-1/2 text-center pb-8">
                <div class="tl-content relative px-8 md:px-16 right">
                    <h4 class="text-xl">2005 / 01

                    </h4>
                    <p>FORD Q1 CERTIFICATE certification</p>
                </div>
            </div>
            <div class="tl-item w-1/2 text-center pb-8">
                <div class="tl-content relative px-8 md:px-16 left">
                    <h4 class="text-xl">2005 / 10
                    </h4>
                    <p>Technical cooperation with Japan Tokai Industrial Co., Ltd.
                    </p>
                </div>
            </div>
            <div class="tl-item w-1/2 text-center pb-8">
                <div class="tl-content relative px-8 md:px-16 right">
                    <h4 class="text-xl">2006 / 11
                    </h4>
                    <p>Obtained TS16949 certification
                    </p>
                </div>
            </div>
            <div class="tl-item w-1/2 text-center pb-8">
                <div class="tl-content relative px-8 md:px-16 left">
                    <h4 class="text-xl">2008 / 03

                    </h4>
                    <p>The first domestic TPO.TPV composite three-press production line was established</p>
                </div>
            </div>
        </div>
        @endif
    </div>
</section>
@endsection