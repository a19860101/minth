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
<section class="main relative h-full bg-center bg-no-repeat bg-cover">
    <div class="flex items-start h-fit max-w-screen-xl w-11/12 absolute inset-0 m-auto p-24">
        <h2 class="text-2xl absolute text-center w-full top-0 left-0 text-[#013565]">公司沿革</h2>
        <div class="tl relative w-full">
            <div class="tl-item w-1/2 text-center pb-8">
                <div class="tl-content relative px-16 left">
                    <h4 class="text-xl">1991 / 09</h4>
                    <p>
                        Minth Technique Corp. was established
                    </p>
                </div>
            </div>
            <div class="tl-item w-1/2 text-center pb-8">
                <div class="tl-content relative px-16 right">
                    <h4 class="text-xl">1992 / 02</h4>
                    <p>Taiyu Rubber started business relationship
                    </p>
                </div>
            </div>
            <div class="tl-item w-1/2 text-center pb-8">
                <div class="tl-content relative px-16 left">
                    <h4 class="text-xl">1995 / 05</h4>
                    <p>Added PVC granulation line production and R&D department
                    </p>
                </div>
            </div>
            <div class="tl-item w-1/2 text-center pb-8">
                <div class="tl-content relative px-16 right">
                    <h4 class="text-xl">1998 / 11</h4>
                    <p>Obtained ISO9002 and QS9000 quality assurance system certification
                    </p>
                </div>
            </div>
            <div class="tl-item w-1/2 text-center pb-8">
                <div class="tl-content relative px-16 left">
                    <h4 class="text-xl">2001 / 02</h4>
                    <p>Ford Liuhe Motors started business relationship
                    </p>
                </div>
            </div>
            <div class="tl-item w-1/2 text-center pb-8">
                <div class="tl-content relative px-16 right">
                    <h4 class="text-xl">2001 / 06
                    </h4>
                    <p>Zhonghua Automobile started business relationship
                    </p>
                </div>
            </div>
            <div class="tl-item w-1/2 text-center pb-8">
                <div class="tl-content relative px-16 left">
                    <h4 class="text-xl">2003 / 05
                    </h4>
                    <p>Obtained ISO14000 environmental protection certification
                    </p>
                </div>
            </div>
            <div class="tl-item w-1/2 text-center pb-8">
                <div class="tl-content relative px-16 right">
                    <h4 class="text-xl">2004 / 06
                    </h4>
                    <p>Passed the evaluation of Q1 Quality Award of Ford Six Automobile
                    </p>
                </div>
            </div>
            <div class="tl-item w-1/2 text-center pb-8">
                <div class="tl-content relative px-16 left">
                    <h4 class="text-xl">2005 / 06

                    </h4>
                    <p>Taiwan Honda Motor Co., Ltd. started business relationship</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection