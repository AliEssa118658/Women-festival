@extends('layouts.master')
@section('content')
<section class="mb-5">
    <div class="news-header">
    </div>
</section>
<section style="background-color: #">
    <div class="container my-5">
        <h1 class="lg2-t text-center p-text bold m-auto news-title">{{__($new->title)}}</h1>
        <div class="row mt-5">
            <div class="col-lg-5 ">
                <img src="{{ asset('/storage/screens/' . $new->logo) }}" class="news-img mb-5" alt="" />
                @if ( isset($newnext))

                <div class="card mt-5 d-none d-md-block">

                    <a href="{{ route('news', $newnext->id) }}">
                        <!-- Card -->
                            <div class="card card-sec border-sh hover-card">
                                <img src="{{ asset('/storage/screens/' . $newnext->logo) }}" class="card-img-top card2" alt="" />
                                <div class="card-body">
                                    <div class="des-card">
                                        <h1 class="med-font2 p-text text-center" id="title">{{__($newnext->title)}}</h1>
                                        <div class="border-yellow py-2"></div>
                                        <span class=" p-text subtitle header-font-large" id="" style="    float: inline-start;">{{ __($newnext->subtitle)}}</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                @endif
            </div>
                <div class="col-lg-7">
                <h2 class="med-font3 p-text  mb-2 w-90">{{__($new->subtitle)}}</h2>
                <p class="med-font2 p-text w-90">{{__($new->description)}}</p>
            </div>
        </div>
    </div>

</section>
@endsection

