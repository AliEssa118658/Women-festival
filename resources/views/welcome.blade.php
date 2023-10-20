@extends('layouts.master')
@section('content')

<section class="home-banner hero-banner"  style="height:80vh">
    <img src="/images/png/square1.png" alt="" class="scale-respo" style="position: absolute;left:0;top:60%">
    <img src="/images/png/square2.png" alt="" class="scale-respo2" style="position: absolute;right:0;top:20%">
    <img src="/images/png/square3.png" alt="" class="scale-respo" style="position: absolute;left:0;top:70rem">
    <img src="/images/png/square4.png" alt="" class="scale-respo2" style="position: absolute;right:0;top:110rem">
    <div class="container ">
        <div class="row" style="direction: rtl !important">
            <div class="col-md-6">
                <img src="/images/svg/main-square1.svg" alt="" class="main-square one">
                <img src="/images/svg/main-square3.svg" alt="" class="main-square sec">
                <img src="/images/svg/main-square2.svg" alt="" class="main-square third">
                <img src="/images/svg/main-square4.svg" alt="" class="main-square fourth">

            </div>
            <div class="col-md-6  mt-5">
                <img src="/images/svg/large-logo.svg?" alt="" class="d-block m-auto large-logo" style="width:60%" >
                <a href="{{ route('news', ['news' => 5]) }}" class="learn-more-p">{{__('Learn More')}}</a>
            </div>
        </div>
    </div>

</section>
<section class="second-sec my-5" style="background-color: #FBFBFB">
    <div class="first-quote">
        <div class="container">
            <div class="row">
                <div class="col-lg-4" >
                    <img src="/images/png/quate1.svg" alt="" class="Al-Maktoom-img" style="width:100%;height:100%">
                 </div>
                <div class="col-lg-1"></div>
                 <div class="col-lg-7 quate-text">
                        <span class="quatation-left"></span>
                         <p class="mb-3"><span class="med-font4">{{__('Our mission')}}</span>{{__(' is to provide an environment that unleashes a woman’s potential – an environment that protects her dignity and femininity, helps her find the necessary balance in her life, and values her talents and abilities. If we succeed in providing this environment, I am confident that women will do wonders')}} </p>
                         <p class="mb-2 blod quate-title">{{__('Mohammed bin Rashed Al-Maktoom')}}</p>
                          <span class="quatation-right"></span>
                  </div>
            </div>
        </div>
    </div>

</section>

<section class="third-sec" >
    <img src="/images/svg/women.svg"  class="women-back">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-6 col-sm-12 box-vision w-back">
                <h1 class="p-text bold my-5 big-font text-center">{{__('Our goals')}}</h1>
                <ul style="line-height: 1.5">
                    <li class="p-text header-font-large mb-3 ">{{__('Bright indicators for women in the Arab world are gradually appearing throughout April 2019 and the following day: sports, pillow medicine, aviation, arts, education, media, nation, judiciary/prosecution, law/business, equestrian. Space and humanitarian work, environment, creativity, creativity, drama, theatre, art, literature, communication, social good, energy, international relations, fine art, culture, scientific research and higher education, volunteer work, better humanity, and adding winter in the coming years.')}}</li>
                    <li class="p-text header-font-large mb-3">{{__('Creating a platform for women in the Arab world to communicate together in exchanging texts, opinions and experiences')}}</li>
                    <li class="p-text header-font-large mb-3">{{__('Drawing the attention of the Arab media to what Arab women are achieving today, and what is hindering them and restricting their abilities and skills')}}</li>
                    <li class="p-text header-font-large mb-5    ">{{__('Allocating the “Miss Arab Social Media” award, in conjunction with the festival, to honor the star women of the Arab world, aiming to employ their teams on social media, to highlight the achievements of Arab women and the hidden capabilities of celebrities, so that this first award, “Miss Arab”, does not embody the external beauty of women. And do not shape it, so that it becomes its beauty and the richness of its mind and values.')}}</li>
                </ul>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-5 col-sm-12 box-vision w-back">
                <h1 class="p-text bold my-5 big-font text-center">{{__('Our vision')}}</h1>
                <ul style="line-height: 1.5">
                    <li class="p-text header-font-large mb-3 ">{{__('Arab women are the pillar of sustainable human development, and comprehensive development cannot be achieved in our Arab world without the contributions of Arab women and the activation of their role.')}}</li>
                    <li class="p-text header-font-large mb-3">{{__('Arab women have not yet written their history, and in all eras and eras they have played a role in shaping history and the present')}}</li>
                    <li class="p-text header-font-large mb-3">{{__('The Arab woman is the mother, wife, sister, companion and friend of the Arab man, and the relationship between them must be complementary.')}}</li>
                </ul>
            </div>
        </div>

    </div>
</section>

<section class=""  style="background-color: #FBFBFB">
    <div class="overflow-sec my-5">
        <div class="row mb-5 pt-5 justify-content-center " >
            <div class="col-md-7 text-center">
                <h1 class="bigbig-font p-text text-center" >{{ __('Our Events') }}</h1>
            </div>
        </div>
        <div class=" row justify-content-center" style="margin: 8% 3% 12% auto" >
            <div class="event-square">
                <h1 class=" text-center m-auto"  style="        padding: 77px 0px 35px 34px;">{{__('Miss Arab Social Media 2024')}}</h1>
             <span>   <a class="" href="{{ route('news', ['news' => 3]) }}">{{__('Learn More')}}</a></span>
            </div>
            <div class="event-square">
                <h1 class=" text-center m-auto">{{__('Mother of the Emirates necklace')}}</h1>
                <span style="    margin: -7.7rem 11rem 2rem 0rem;">   <a class="" href="{{ route('news', ['news' => 1]) }}">{{__('Learn More')}}</a></span>
            </div>
            <div class="event-square">
                <h1 class=" text-center m-auto">{{__('Twelve Planets')}}</h1>
                <span style="    margin: -7.7rem 11rem 2rem 0rem;">   <a class="" href="{{ route('news', ['news' => 2]) }}">{{__('Learn More')}}</a></span>
            </div>
        </div>
    </div>
    <!-- ....... -->

    <!-- ...... -->
</section>

<section class="fourth-sec" style="background-color: #FBFBFB">
    <div class="first-quote">
        <div class="container">

            <div class=" quate-text2" style="align-items: center">
                <h1 class="mb-3 blod big-font mt-5 text-center">{{_('A quote from you')}}</h1>
                <p class="mb-3 med-font3 text-center">{{__('Here is a sample quote about women which fills in the gap until we get the official one ')}} </p>
            </div>
        </div>
    </div>

    <img src="/images/png/flags-1.3.gif" alt="" class="my-5" style="width:100%">

</section>

<section class="six-sec pb-5" style="background-color: #FBFBFB">
    <div class="container">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10 contact-nomination " style="align-items: center">
                <img src="/images/svg/women2.svg"  alt="">
                <p class="mt-3 w-text bold med-font4 m-auto text-center w-60 pb-2" >{{__('Do you believe you deserve a nomination or you know some one else that does ?')}} </p>
                    <p class="mt-3 w-text bold med-font4 m-auto text-center w-60 pb-2">{{__('Lets hear your voice!!')}}</p>

                    <a href="{{route('contact-us')}}" class="m-auto mt-3">{{__('Click here')}}</a>
            </div>
            <div class="col-lg-1"></div>

        </div>
    </div>


</section>

@endsection

