@extends('layouts.master') @section('content')



    <section class="" style="background-color: #FBFBFB">
        <div class="container py-5">
            <div class="row contact-us ">
                <div class="col-lg-4 col-md-12 my-3">
                    <div class="light-blue-bg2 px-5 h-100 pb-5">
                        <h1 class="med-font4 p2-text pt-5 pb-4 p-line2 text-center">{{ __('Contact information') }}
                        </h1>
                        <br>
                       <img src="/images/svg/p-phone.svg" alt="" class="pb-1"> <span class="med-font2 ml-3 contact-info-contact-us">{{ __('+11-1144-223') }}</span> <br><br>
                       <img src="/images/svg/p-email.svg" alt=""> <span class="med-font2 ml-2 contact-info-contact-us"> <a href="mailto:ali6721985@gmail.com" class="y-text">ali6721985@gmail.com</a></span><br><br>
                       <img src="/images/svg/p-location.svg" class="pb-1" alt=""> <span class="med-font2 ml-3 contact-info-contact-us">{{ __('Dubai, First Street') }}</span> <br>

                       <div class="col-lg-12 mt-5 text-center">
                        <p>{{__('You can also find us on')}}</p>
                       </div>
                       <div class="d-flex  justify-content-around">
                        <img src="/images/svg/p-facebook.svg" alt="">
                        <img src="/images/svg/p-instagram.svg" alt="">
                        <img src="/images/svg/p-linkedin.svg" alt="">
                        <img src="/images/svg/p-x.svg" alt="">
                       </div>

                    </div>
                </div>
                <div class="col-lg-1" style="background-color: #FBFBFB"></div>
                <div class="col-lg-7 col-md-12 my-3">
                    <form class="pb-5" data-parsley-validate="" id="contact-form">
                        <div class="col-12">
                            <h1 class="med-font4 p2-text pt-5 pb-4 p-line">{{ __('Contact us') }}</h1>
                            <div class="row mb-3">
                                <div class="col-4 d-flex align-items-center radio-subject">
                                    <input type="radio" name="subject" id="complaints" value="{{ __('Complaints') }}"
                                        required data-parsley-error-message=" required." />
                                    <label for="complaints"
                                        class="blue-text  font-xs">{{ __('Complaints') }}</label>
                                </div>
                                <div class="col-4 d-flex align-items-center radio-subject">
                                    <input type="radio" name="subject" id="suggestions" value="{{ __('Suggestions') }}"
                                        required data-parsley-error-message=" required." />
                                    <label for="suggestions"
                                        class="blue-text  font-xs">{{ __('Suggestions') }}</label>
                                </div>
                                <div class="col-4 d-flex align-items-center radio-subject">
                                    <input type="radio" name="subject" id="inquiries" value="{{ __('Question') }}"
                                        required data-parsley-error-message=" required." />
                                    <label for="inquiries"
                                        class="blue-text  font-xs">{{ __('Question') }}</label>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-4 d-flex align-items-center radio-subject">
                                    <input type="radio" name="subject" id="appreciation" value="{{ __('Nominee yourself') }}"
                                        required data-parsley-error-message=" required." />
                                    <label for="appreciation"
                                        class="blue-text  font-xs">{{ __('Nominee yourself') }}</label>
                                </div>
                                <div class="col-4 d-flex align-items-center radio-subject">
                                    <input type="radio" name="subject" id="appreciation" value="{{ __('Nominee some one else') }}"
                                        required data-parsley-error-message=" required." />
                                    <label for="appreciation"
                                        class="blue-text  font-xs">{{ __('Nominee some one else') }}</label>
                                </div>
                                <div class="col-4 d-flex align-items-center radio-subject">
                                    <input type="radio" name="subject" id="appreciation" value="{{ __('Other') }}"
                                        required data-parsley-error-message=" required." />
                                    <label for="appreciation"
                                        class="blue-text  font-xs">{{ __('Other') }}</label>
                                </div>
                            </div>

                        </div>
                        <div class="col-12">

                            <div class="row  mt-5">
                                <div class="col-6">

                                    <div>
                                        <input type="text" name="name" id="name" class="w-100 input-contact px-3"
                                            required data-parsley-error-message="Full Name is required." placeholder="{{__('*FUll Name')}}" />
                                    </div>
                                </div>
                                <div class="col-6">

                                    <div>
                                        <input type="text" name="phone" id="phone"
                                            class="w-100 input-contact only-num-field px-3" required
                                            data-parsley-error-message="Phone Number is required."placeholder="{{__('*Phone Number')}}" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12  mt-5">

                                    <div>
                                        <input type="email" name="email" id="email" class="w-100 input-contact px-3"
                                            required
                                            data-parsley-error-message="Email is required and should be in valid format." placeholder="{{__('*Email')}}"/>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-12 mt-5">

                                    <div>
                                        <textarea name="msg" id="msg" class="textarea-contact w-100 px-3" required
                                            data-parsley-error-message="Message is required." placeholder="{{__('Write The Message here...')}}" ></textarea>
                                    </div>
                                </div>
                            </div>

                            <button class="d-flex my-4 justify-content-center contact-submit">
                                <h2 class="med-font2 w-text">{{ __('Submit') }}</h2>
                                <img class="arrow-icon mt-1 ml-2" src="/images/svg/w-right.svg" alt="Card image cap" />
                            </button>
                        </div>

                    </form>
                </div>
                    <div id="email-response-popup" style="display: none">
                        <button class="close-response-popup">
                            <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                                <circle class="checkmark_circle" cx="26" cy="26" r="25" fill="none" stroke="transparent" />
                                <path class="checkmark_check" fill="none" d="M14.1 14.1l23.8 23.8 m0,-23.8 l-23.8,23.8" />
                              </svg>
                        </button>
                        <div class="response-popup-container">
                          <div class="align-self-center w-100 text-center">
                            <div class="response-popup-loader">
                              <div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
                            </div>
                            <div class="response-popup-corect response-popup-content">
                              <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                                  <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none" />
                                  <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" />
                              </svg>
                              <h1 class="light-t pt-4">{{__('Thank you for contacting us, you will be notified on the status within 2 working days.')}}</h1>
                            </div>
                            <div class="response-popup-error response-popup-content">
                              <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                              <circle class="checkmark_circle" cx="26" cy="26" r="25" fill="none" stroke="transparent" />
                              <path class="checkmark_check" fill="none" d="M14.1 14.1l23.8 23.8 m0,-23.8 l-23.8,23.8" />
                            </svg>
                            <h1 class="light-t pt-4">{{__('Something went wrong, please try again.')}}</h1>
                            </div>
                          </div>
                        </div>
                    </div>


            </div>

            <div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14441.076181636467!2d55.26772670078076!3d25.19414780994425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f682f700cf983%3A0xb5cc58b076c0b904!2sDowntown%20Dubai%20-%20Dubai%20-%20United%20Arab%20Emirates!5e0!3m2!1sen!2sus!4v1696103683822!5m2!1sen!2sus" width="1050" height="559" style="border:0;width:100% !important;border-radius: 25px;    margin-top: 5%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" ></iframe>
            </div>
        </div>
    </section>

@endsection
