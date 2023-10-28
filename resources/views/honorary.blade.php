@extends('layouts.master')
@section('content')

<section  class="mt-5 ">
    <span class="p-line-miss"></span>  <h1 class="bigbig-font bold p-text text-center">{{__('The Honorees')}}</h1><span class="p-line-miss nom-2" ></span>

    <img src="/images/png/square1.png?" alt="" class="scale-respo" style="position: absolute;right:0;top:60%;rotate:180deg">
    <img src="/images/png/square3.png?" alt="" class="scale-respo" style="position: absolute;left:0;top:80rem;width:15%">
    <img src="/images/png/square4.png?" alt="" class="scale-respo2" style="position: absolute;right:0;top:110rem;width:15%">

    <div class="container my-5">
        <div class="row mt-5">
            <div class="col-lg-5">
                <img src="{{ asset('images/svg/goal2.svg') }}" class="news-img" alt="" />
            </div>
                <div class="col-lg-7 mt-5">


                <p class="med-font3 p-text">{{__('Announced the Annual Festival of Arab Women 2024 in cooperation with Local and Arab institutions and bodies hold the annual Womens Festival Al Arabiya on March 9, 2024 in Dubai in the presence of high-ranking figures At the Arab level, a group of people of culture, science, and artistic stars And the media, to honor a group of Emirati women in sectors and fields Multiple women are selected according to criteria and nominations, in coordination with institutions Civil society.')}}</p>
                <p class="med-font3 p-text">{{__('Because the issues of Emirati women do not differ far from the issues of their Arab sisters, it was also decided to honor a group of Arab women in the same sectors on the same day, according to transparent nominations and criteria.')}}</p>
                <p class="med-font3 p-text">{{__('The festival also witnesses the honoring of a group of women from the Arab world, regardless of whether they are alive or have moved to the side of their Lord, who have had clear influential imprints in feminist work.')}}</p>


            </div>
        </div>
    </div>


</section>
<section class=""  >

    <div class="overflow-sec">
        <div class="row mb-5 pt-5 justify-content-center">
            <div class="col-md-7 text-center">
                <h1 class="bigb-font bold p-text text-center " >{{ __('The Honorees') }}</h1>
            </div>
        </div>
        <div class="mb-5 justify-content-center" >
            <div class="container swip   ">
                <div class="swiper swipper2">
                    <ul class="swiper-wrapper">
                        @foreach ($honorarys as $honorary)
                            <li class="swiper-slide">
                                    <div class="card card-sec border-sh hover-card " style="border-radius: 18px">
                                        <img src="{{ asset('/storage/screens/' . $honorary->image) }}" class="card-img-top card2 hono" alt="" />

                                        <img src="{{ asset('/images/svg/'.$honorary->category.'.svg') }}" class="cat-logo" alt="" />
                                        <div class="card-body hono miss">
                                            <h1 class="med-font3 p-text text-center" id="title">{{__($honorary->name)}}</h1>

                                                <span class="t-des p-text subtitle" id="">{{ __($honorary->country)}}</span><br>
                                                <span class="t-des p-text subtitle" id="">{{ __($honorary->category)}}{{__(' sector')}}</span>

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
</section>

<section class="mt-5">
    <div class="container">
        <p class="med-font3 p-text text-center mx-5">{{__('The organizing committee of the Annual Arab Women’s Festival 2024 announced the selection of 12 Arab female knights and ambassadors to lead the initiative')}} </p>
        <h1 class="big-font p-text text-center">{{__('“Our platforms... Empowering our sisters”')}}</h1>
        <p class="med-font3 p-text text-center mx-5">{{__('Which aims to employ social media platforms to Promoting the empowerment of Arab women and making them aware of their rights and touching their wounds, “Female Empowerment Ambassadors” will be gradually announced and selected From various general specializations and orientations,Among the stars and celebrities')}}</p>
    </div>
</section>

<section class=""  >

    <div class="overflow-sec">
        <div class="row mb-5 pt-5 justify-content-center">
            <div class="col-md-7 ">
                <h1 class="bigb-font bold p-text text-center" >{{ __('The Ambassadors') }}</h1>
            </div>
        </div>
        <div class="mb-5 justify-content-center" >
            <div class="container   ">
                <div class="swiper swipper2">
                    <ul class="swiper-wrapper">
                        @foreach ($ambassadors as $ambassador)
                            <li class="swiper-slide">
                                    <div class="card card-sec border-sh hover-card " style="border-radius: 18px">
                                        <img src="{{ asset('/storage/screens/' . $ambassador->image) }}" class="card-img-top card2" alt="" style="border:4px solid #88438D;border-radius:4px" />

                                        <img src="{{ asset('/images/svg/star.svg') }}" class="cat-logo amb" alt="" />
                                        <div class="card-body miss">
                                            <h1 class="med-font3 p-text text-center" id="title">{{__($ambassador->name)}}</h1>

                                                <span class="t-des p-text subtitle" id="">{{ __($ambassador->country)}}</span><br>
                                                <span class="t-des p-text subtitle" id="">{{ __($ambassador->work)}}</span>

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
</section>
@endsection


