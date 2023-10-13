@extends('layouts.master')
@section('content')
<section class=""  >
    <span class="p-line-miss"></span>  <h1 class="bigbig-font p-text text-center m-auto w-22" >{{__('The Gallery')}}</h1><span class="p-line-miss nom-2"></span>

        <div class="container   mt-5">

            <div class="row row-cols-1 flex-column row-cols-md-3 m-auto gall-content">
                <ul class=" d-flex products-option ">
                    <li class=" products-li tab-links active-link active-border" onclick="window.tabLinks(this)" id="image">  {{ __('Images') }}</li>
                   <li class=" products-li tab-links "   onclick="window.tabLinks(this)"  id="videos"> {{ __('Videos') }}</li>
                </ul>
                <div id="image-item" class=" tab-contents active-tab my-5" id="image">
                    <div class="row">
                        @foreach ($galleryData as $item)
                        @if (is_array($item) && isset($item[0]))
                            @foreach ($item as $galleryItem)
                                    @if ($galleryItem['layout'] === 'image')
                                        <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">

                                            <div class="card ">
                                                <a class="search-btn-href" href="{{ asset('/storage/screens/'. $galleryItem['attributes']['image'])}}" target="_blank"><img src="/images/svg/search.svg" alt=""  style="width: 50%;    padding-top: 0.9rem;"></a>
                                                <img src="{{ asset('/storage/screens/' . $galleryItem['attributes']['image']) }}" class="card-img-top card2" alt="" onclick="change(this.src)" />
                                                <div class="card-body text-center">
                                                    <h5 class="t-des p-text subtitle" id="title">{{__($galleryItem['attributes']['description'])}}</h5>
                                                </div>

                                            </div>

                                        </div>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </div>
                </div>

                <div id="videos-item" class=" tab-contents active-tab my-5" id="videos" style="display: none">
                    <div class="d-flex">
                        @foreach ($galleryData as $item)
                        @if (is_array($item) && isset($item[0]))
                            @foreach ($item as $galleryItem)
                                    @if ($galleryItem['layout'] === 'video')
                                        <div class="col-4 mb-4 ">

                                            <div class="card ">
                                                <a class="play-btn-href" href="{{ asset('/storage/screens/'. $galleryItem['attributes']['video'])}}" target="_blank"><img class="play-btn" src="/images/svg/play.svg" alt=""></a>
                                                <video id="myVideo" class="card-img-top card2" preload="auto" loop>
                                                    <source src="{{ asset('/storage/screens/'. $galleryItem['attributes']['video'])}}" type="video/mp4">
                                                        Your browser does not support HTML5 video.
                                                </video>
                                                <div class="card-body text-center">
                                                    <h5 class="t-des p-text subtitle" id="title">{{__($galleryItem['attributes']['description'])}}</h5>
                                                </div>

                                            </div>

                                        </div>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </div>
                </div>


            </div>
        </div>

</section>
@endsection

