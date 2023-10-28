@extends('layouts.master')
@section('content')

<section style="background-color: #">
    <img src="/images/png/square1.png?" alt="" class="scale-respo4" style="position: absolute;left:0;top:20%">
    <img src="/images/png/square2.png" alt="" class="scale-respo3" style="position: absolute;right:0;top:35%">
    <img src="/images/png/square3.png" alt="" class="scale-respo4" style="position: absolute;left:0;top:200%">
    <img src="/images/png/square4.png" alt="" class="scale-respo3" style="position: absolute;right:0;top:80rem">

    <div class="container my-5">

        <div class="row ">
           <div class="col-md-6 d-flex  mb-3">
            <h1 class="bigb-font text-center p-text bold m-auto news-title">{{__($new->title)}}</h1>

           </div>
           <div class="col-md-6 mt-4">
            <img src="{{ asset('/storage/screens/' . $new->logo) }}" class="news-img mb-5" alt="" />

           </div>
        </div>
        <div class=" box-vision m-auto p-5 ">
            <p class="p-text  text-center" style="font-size: 1px">{{__($new->description)}}</p>
        <h2 class="med-font3 p-text  mb-2  text-center" style="font-size: 23px">{{__($new->subtitle)}}</h2>
        </div>

    </div>

</section>

<section class=""  style="background-color: #FBFBFB">
    <div class="overflow-sec my-5">
        <div class="row  justify-content-center " >
            <div class="col-md-7 text-center">
                <h1 class="bigb-font bold p-text text-center" >{{ __('Our Events') }}</h1>
            </div>
        </div>
        <div class=" row justify-content-center" style="margin:3% 3% 12% auto" >
            <div class="event-square mb-3">
                <img src="/images/svg/miss-arab.svg?" alt="" style="width: 63%;">
                <div>
                <h1 class=" text-center m-auto"  >{{__('Miss Arab Social Media 2024')}}</h1>
                <a href="{{ route('miss-arab')}}" class="learn-more-p" style="margin-top: -1rem">{{__('Learn More')}}</a>
                        </div>
            </div>
            <div class="event-square mb-3">
                <img src="/images/png/daimond.jpeg?" alt="">
                <div>
                <h1 class=" text-center m-auto"  style="margin-top: 40% !important">{{__('Mother of the Emirates necklace')}}</h1>
                <a href="{{ route('news', ['news' => 1]) }}" class="learn-more-p">{{__('Learn More')}}</a>
                            </div>
            </div>
            <div class="event-square mb-3">
                <img src="/images/png/koakb.jpg?" alt="">
                <div>
                <h1 class=" text-center m-auto" style="margin-top: 40% !important">{{__('Twelve Planets')}}</h1>
                <a href="{{ route('news', ['news' =>2]) }}" class="learn-more-p">{{__('Learn More')}}</a>
                            </div>
            </div>
        </div>
    </div>
    <!-- ....... -->

    <!-- ...... -->
</section>
@endsection

