<section class="footer">
    <div class="container">
        <div class="row py-4">
            <div class="col-lg-4 ">
              <a href="{{route('welcome')}}"> <img src="{{asset('images/svg/logo-footer.svg')}}" alt="logo" class="footer-logo"></a>
            </div>
            <div class="col-lg-4 ">

                    <h1 class="med-font2  bold p-text mb-4 text-center" style="margin-top: 20%">{{__('Usefal Links')}}</h1>
                    <a href="{{route('about-us')}}" class="header-font-large d-block text-center">{{__('About us')}}</a><br>
                    <a href="{{route('miss-arab')}}" class="header-font-large d-block text-center">{{__('Miss Arab Social Media')}}</a><br>
                    <a href="{{route('first-gen')}}" class="header-font-large d-block text-center">{{__('Early pioneers')}} </a><br>
                    <a href="{{route('honorary')}}" class="header-font-large d-block text-center">{{__('The Honorees')}} </a>

            </div>
            <div class="col-lg-4" style="direction: ltr !important">

                    <h1 class="med-font2 bold p-text  mb-4 text-center" style="margin-top: 20%">{{__('Contact us')}}</h1>

                    <div class="d-flex justify-content-center ml-5"><img src="images/svg/p-phone.svg" style="margin-left:-2.8rem" alt="" width="15"><a class=" header-font-large ml-1  text-center" href="tel:+971529277779">+ 971 52 927 77 79</a></div>
                    <br>
                    <div class="d-flex justify-content-center"><img src="images/svg/p-email.svg" style="margin-left: 0.9rem" alt="" width="18"><a href="" class=" header-font-large ml-1 text-center"> Info@arabwomenfestival.com</a></div>
                    <br>
                    <div class="d-flex justify-content-center"><img src="images/svg/p-location.svg"  alt="" width="18"><a href="" class=" header-font-large ml-1 text-center"> {{__('Dubai, United Arab Emirates')}}</a></div>


            </div>

        </div>
    </div>
<div class="all-rights">

    <div class=" center-text mt-1" >


                <p class="text-center">{{__('All rights reserved')}}</p>



    </div>
</div>
</section>









<script src="{{ asset('js/main.js?v='.time().'') }}"></script>

<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ asset('js/jquery-3.6.0.js') }}"></script>
<script src="{{ asset('js/jquery.ihavecookies.min.js') }}"></script>
<script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
