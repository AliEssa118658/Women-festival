@extends('layouts.master')
@section('content')
<section class="mb-5 mt-5"  >
    <div class="container ">
        <div class="row logos-container">
            <div class="col-lg-6  my-3" ><img src="/images/svg/logo-big.svg" class="w-70" alt=""></div>
            <div class="col-lg-6  my-3"><img src="/images/svg/miss-arab.svg" class="w-50" alt=""></div>
        </div>
    </div>
</section>
<section  class="mt-5 ">
    <span class="p-line-miss"></span>  <h1 class="big-font p-text text-center">{{__('Miss Arab Social Media')}}</h1><span class="p-line-miss nom-2" ></span>
    <div class="container my-5">
        <div class="row mt-5">
            <div class="col-lg-5">
                <img src="{{ asset('images/svg/goal.svg') }}" class="news-img" alt="" />
            </div>
                <div class="col-lg-7">


                <p class="med-font2">{{__('Miss Arab Social Media” is an award coinciding with the “Annual Arab Women’s Festival”remote areas, the desert, the countryside, villages and camps.We believe in the importance of using social media to broadcast content and deliver knowledgeable content to Arab women, explaining to them their rights and gains, and calling on them to participate actively, from their position, in shaping the present and future of Arab women.Perhaps granting this award to a group of women from the Arab world, from various specializations and sectors, and from stars and celebrities, constitutes an incentive to activate these platforms for lofty goals and objectives.')}}</p>
            </div>
        </div>
    </div>
    <img src="/images/svg/tiktok-back.svg" alt="" style="position: absolute;top: 58rem;left:0;">
    <img src="/images/svg/snapchat-back.svg" alt=""  style="position:absolute;top:120rem;left:5%;">
    <img src="/images/svg/at-back.svg" alt=""   style="position: absolute;top:85rem;left:2rem">
    <img src="/images/svg/hash.svg" alt=""   style="position: absolute;top:103rem;left:0rem">

</section>
<section class=""  >
    <div class="overflow-sec">
        <div class="row mb-5 pt-5 justify-content-center">
            <div class="col-md-7 text-center">
                <h1 class="lg-t p-text text-center" >{{ __('Social Media Winners') }}</h1>
            </div>
        </div>
        <div class="mb-5 justify-content-center" >
            <div class="container   ">
                <div class="swiper swipper2">
                    <ul class="swiper-wrapper">
                        @foreach ($missarabs as $miss)
                            <li class="swiper-slide">
                                    <div class="card card-sec border-sh hover-card " style="border-radius: 18px">
                                        <img src="{{ asset('/storage/screens/' . $miss->image) }}" class="card-img-top card2 category {{$miss->categiry}}" alt="" />

                                        <img src="{{ asset('/images/svg/'.$miss->categiry.'.svg') }}" class="cat-logo" alt="" />
                                        <div class="card-body miss">
                                            <h1 class="med-font3 b-text" id="title">{{__($miss->name)}}</h1>

                                                <span class="t-des b-text subtitle" id="">{{ __($miss->work)}}</span><br>
                                                <span class="t-des b-text subtitle" id="">{{ __($miss->country)}}</span><br>
                                                <span class="t-des b-text subtitle" id="">{{ __($miss->workplace)}}</span>

                                        </div>
                                    </div>
                            </li>
                        @endforeach
                    </ul>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>

                </div>
            </div>
        </div>
    </div>
    <!-- ....... -->

    <!-- ...... -->
</section>

@endsection

