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
                    <a href="{{route('care-packages')}}" class="header-font-large d-block text-center">{{__('Sponsorship packages')}}</a><br>
                    <a href="{{route('first-gen')}}" class="header-font-large d-block text-center">{{__('Early pioneers')}} </a><br>
                    <a href="{{route('honorary')}}" class="header-font-large d-block text-center">{{__('The Honorees')}} </a>

            </div>
            <div class="col-lg-4">

                    <h1 class="med-font2 bold p-text  mb-4 text-center" style="margin-top: 20%">{{__('Contact us')}}</h1>

                    <div class="d-flex justify-content-center "><img src="images/svg/p-phone.svg" class="ml-1" alt="" width="15"><a class=" header-font-large ml-2  text-center" href="">+ 971 50 000 00 00</a></div>
                    <br>
                    <div class="d-flex justify-content-center"><img src="images/svg/p-email.svg" class="ml-3" alt="" width="18"><a href="" class=" header-font-large ml-1 text-center"> Info@email.com</a></div>
                    <br>
                    <div class="d-flex justify-content-center"><img src="images/svg/p-location.svg" class="ml-3" alt="" width="18"><a href="" class=" header-font-large ml-1 text-center"> Dubai, First Street</a></div>


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
