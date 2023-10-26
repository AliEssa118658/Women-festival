@extends('layouts.master')
@section('content')

<section style="background-color: #">
    <img src="/images/png/square1.png?" alt="" class="scale-respo4" style="position: absolute;left:0;top:20%">
    <img src="/images/png/square2.png" alt="" class="scale-respo3" style="position: absolute;right:0;top:40%">
    <img src="/images/png/square3.png" alt="" class="scale-respo4" style="position: absolute;left:0;top:59rem">
    <img src="/images/png/square4.png" alt="" class="scale-respo3" style="position: absolute;right:0;top:70rem">

    <div class="container my-5">

        <div class="row mt-5">
           <div class="col-md-6 d-flex  mb-3">
            <h1 class="bigb-font text-center p-text bold m-auto news-title">{{__($new->title)}}</h1>

           </div>
           <div class="col-md-6">
            <img src="{{ asset('/storage/screens/' . $new->logo) }}" class="news-img mb-5" alt="" />

           </div>
        </div>
        <div class=" box-vision m-auto p-5 ">
        <h2 class="med-font4 p-text  mb-2  text-center">{{__($new->subtitle)}}</h2>
        <p class="med-font4 p-text  text-center">{{__($new->description)}}</p>
        </div>

    </div>

</section>

<section class=""  style="background-color: #FBFBFB">
    <div class="overflow-sec my-5">
        <div class="row  justify-content-center " >
            <div class="col-md-7 text-center">
                <h1 class="bigbig-font p-text text-center" >{{ __('Our Events') }}</h1>
            </div>
        </div>
        <div class=" row justify-content-center" style="margin: 8% 3% 12% auto" >
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

