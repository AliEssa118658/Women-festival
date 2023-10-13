@extends('layouts.master') @section('content')



<section class="about-back" style="background-color: ">
    <span class="p-line-miss"></span>  <h1 class="bigbig-font p-text text-center">{{__('About Us')}}</h1><span class="p-line-miss nom-2"></span>

    <img src="/images/svg/women.svg"  class="women-back">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-6 col-sm-12 box-vision">
                <h1 class="p2-text bold my-5 big-font text-center">{{__('Our goals')}}</h1>
                <ul style="line-height: 1.5">
                    <li class="p-text header-font-large mb-3 ">{{__('Bright indicators for women in the Arab world are gradually appearing throughout April 2019 and the following day: sports, pillow medicine, aviation, arts, education, media, nation, judiciary/prosecution, law/business, equestrian. Space and humanitarian work, environment, creativity, creativity, drama, theatre, art, literature, communication, social good, energy, international relations, fine art, culture, scientific research and higher education, volunteer work, better humanity, and adding winter in the coming years.')}}</li>
                    <li class="p-text header-font-large mb-3">{{__('Creating a platform for women in the Arab world to communicate together in exchanging texts, opinions and experiences')}}</li>
                    <li class="p-text header-font-large mb-3">{{__('Drawing the attention of the Arab media to what Arab women are achieving today, and what is hindering them and restricting their abilities and skills')}}</li>
                    <li class="p-text header-font-large mb-5    ">{{__('Allocating the “Miss Arab Social Media” award, in conjunction with the festival, to honor the star women of the Arab world, aiming to employ their teams on social media, to highlight the achievements of Arab women and the hidden capabilities of celebrities, so that this first award, “Miss Arab”, does not embody the external beauty of women. And do not shape it, so that it becomes its beauty and the richness of its mind and values.')}}</li>
                </ul>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-5 col-sm-12 box-vision">
                <h1 class="p2-text bold my-5 big-font text-center">{{__('Our vision')}}</h1>
                <ul style="line-height: 1.5">
                    <li class="p-text header-font-large mb-3 ">{{__('Arab women are the pillar of sustainable human development, and comprehensive development cannot be achieved in our Arab world without the contributions of Arab women and the activation of their role.')}}</li>
                    <li class="p-text header-font-large mb-3">{{__('Arab women have not yet written their history, and in all eras and eras they have played a role in shaping history and the present')}}</li>
                    <li class="p-text header-font-large mb-3">{{__('The Arab woman is the mother, wife, sister, companion and friend of the Arab man, and the relationship between them must be complementary.')}}</li>
                </ul>
            </div>
        </div>

    </div>
</section>

@endsection
