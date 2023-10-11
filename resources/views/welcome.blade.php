@extends('layouts.master')
@section('content')

<section class="home-banner hero-banner"  style="height:80vh">
    <!-- Slider main container -->
    <div class="swiper swiper1">
        <!-- Additional required wrapper -->
            <div class="swiper-wrapper">


                <div class="swiper-slide " style="height:80vh;    direction: rtl !important;" >
                    <div class="slide-img" style=" background-image:linear-gradient(90deg, #493686 8%, #6C2491 36%, #8f139cb0  65%, #b500a973 97%), url(/images/png/banner1.png)">
                        <div class="container mt-5">
                            <div class="row">
                                <div class="col-md-6 mt-5">

                                    <a href="{{route('news/5')}}" class="learn-more">{{__('Learn More')}}</a>
                                </div>
                                <div class="col-md-6">
                                    <img src="/images/svg/large-logo.svg" alt="" class="d-block m-auto" style="width:60%">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="swiper-slide " style="height:80vh">
                    <div class="slide-img" style=" background-image:linear-gradient(90deg, #493686 8%, #6C2491 36%, #8f139cb0  65%, #b500a973 97%), url(/images/png/banner-img-1.png);background-size:100% 100%">
                        <div class="container  mt-5">
                            <div class="col-md-6 mt-5">

                            </div>
                            <div class="col-md-6"></div>

                        </div>
                    </div>
                </div>

            </div>
            <div class="swiper-button-prev swiper1-prev  s-b-p">
                <img src="/images/svg/w-left.svg" alt="" >
            </div>

            <div class="swiper-button-next swiper1-next s-b-n">
                <img src="/images/svg/w-right.svg" alt="" >
            </div>

                <!-- If we need pagination -->
                <div class="home-banner-nav">
                    <div class="swiper-pagination nav-progressbar"></div>
                </div>



    </div>

</section>
<section class="second-sec" style="background-color: #FBFBFB">
    <div class="first-quote">
    <div class="row">
        <div class="col-lg-4" >
            <img src="/images/png/quate1.svg" alt="" class="Al-Maktoom-img" style="width: 100%;height:100%">
        </div>
        <div class="col-lg-8 quate-text">
            <span class="quatation-left"></span>
            <p class="mb-3"><span class="med-font4">{{__('Our mission')}}</span>{{__(' is to provide an environment that unleashes a woman’s potential – an environment that protects her dignity and femininity, helps her find the necessary balance in her life, and values her talents and abilities. If we succeed in providing this environment, I am confident that women will do wonders')}} </p>
            <p class="mb-2 blod quate-title">{{__('Mohammed bin Rashed Al-Maktoom')}}</p>
            <span class="quatation-right"></span>
        </div>
    </div>

    </div>

</section>

<section class="third-sec" >
    <img src="/images/svg/women.svg"  class="women-back">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-6 col-sm-12 box-vision">
                <h1 class="w-text bold my-5 big-font text-center">{{__('Our goals')}}</h1>
                <ul style="line-height: 1.5">
                    <li class="w-text header-font-large mb-3 ">{{__('Bright indicators for women in the Arab world are gradually appearing throughout April 2019 and the following day: sports, pillow medicine, aviation, arts, education, media, nation, judiciary/prosecution, law/business, equestrian. Space and humanitarian work, environment, creativity, creativity, drama, theatre, art, literature, communication, social good, energy, international relations, fine art, culture, scientific research and higher education, volunteer work, better humanity, and adding winter in the coming years.')}}</li>
                    <li class="w-text header-font-large mb-3">{{__('Creating a platform for women in the Arab world to communicate together in exchanging texts, opinions and experiences')}}</li>
                    <li class="w-text header-font-large mb-3">{{__('Drawing the attention of the Arab media to what Arab women are achieving today, and what is hindering them and restricting their abilities and skills')}}</li>
                    <li class="w-text header-font-large mb-5    ">{{__('Allocating the “Miss Arab Social Media” award, in conjunction with the festival, to honor the star women of the Arab world, aiming to employ their teams on social media, to highlight the achievements of Arab women and the hidden capabilities of celebrities, so that this first award, “Miss Arab”, does not embody the external beauty of women. And do not shape it, so that it becomes its beauty and the richness of its mind and values.')}}</li>
                </ul>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-5 col-sm-12 box-vision">
                <h1 class="w-text bold my-5 big-font text-center">{{__('Our vision')}}</h1>
                <ul style="line-height: 1.5">
                    <li class="w-text header-font-large mb-3 ">{{__('Arab women are the pillar of sustainable human development, and comprehensive development cannot be achieved in our Arab world without the contributions of Arab women and the activation of their role.')}}</li>
                    <li class="w-text header-font-large mb-3">{{__('Arab women have not yet written their history, and in all eras and eras they have played a role in shaping history and the present')}}</li>
                    <li class="w-text header-font-large mb-3">{{__('The Arab woman is the mother, wife, sister, companion and friend of the Arab man, and the relationship between them must be complementary.')}}</li>
                </ul>
            </div>
        </div>

    </div>
</section>

<section class=""  style="background-color: #FBFBFB">
    <div class="overflow-sec">
        <div class="row mb-5 pt-5 justify-content-center">
            <div class="col-md-7 text-center">
                <h1 class="lg-t blue-text text-center" >{{ __('The Events') }}</h1>
            </div>
        </div>
        <div class="mb-5 justify-content-center" >
            <div class="container   ">
                <div class="swiper swipper2">



                    <ul class="swiper-wrapper">
                        @foreach ($news as $new)
                        <li class="swiper-slide">
                            <a href="{{ route('news', $new->id) }}">
                                <!-- Card -->
                                <div class="card card-sec border-sh hover-card">
                                    <img src="{{ asset('/storage/screens/' . $new->logo) }}" class="card-img-top card2" alt="" />

                                    <div class="card-body">

                                        <div class="des-card">
                                            <h1 class="med-font2 b-text" id="title">{{__($new->title)}}</h1>
                                            <div class="border-yellow py-2"></div>

                                            <span class="t-des b-text subtitle header-font-large" id="">{{ __($new->subtitle)}}</span>




                                        </div>
                                    </div>
                                </div>
                            </a>
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

<section class="fourth-sec" style="background-color: #FBFBFB">
    <div class="first-quote">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10 quate-text2" style="align-items: center">
                <img src="/images/svg/quate2.svg" class="quate2-img" alt="">
                <span class="quatation-left2"></span>
                <h1 class="mb-3 blod mt-5 text-center">{{_('A quote from you')}}</h1>
                <p class="mb-3 text-center">{{__('Here is a sample quote about women which fills in the gap until we get the official one ')}} </p>
                        <span class="quatation-right2"></span>
            </div>

            <div class="col-lg-1"></div>
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

