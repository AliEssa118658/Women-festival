@extends('layouts.master')
@section('content')
<section class=""  >
    @if(app()->getLocale() === 'ar')
    <span class="p-line-first"></span>
    <h1 class="bigbig-font p-text text-center m-auto " >{{__('Honored women from Early pioneers')}}</h1>
    <span class="p-line-first nom-2"  ></span>
   @else
    <h1 class="bigbig-font p-text text-center m-auto " >{{__('Honored women from Early pioneers')}}</h1>

    @endif
        <div class="container   mt-5">
            <div class="row row-cols-1 row-cols-md-3 m-auto">
                @foreach ($firsts as $first)
                    <div class="col-lg-3 col-md-6 col-sm-12  mb-4 ">
                        <a href="{{ route('first', $first->id) }}">
                        <div class="card firsts">
                            <img src="{{ asset('/storage/screens/' . $first->image) }}" class="card-img-top card2 first" alt="" />
                            <div class="card-body text-center">
                                <h5 class="med-font2 b-text text-center p-text"  id="title">{{__($first->name)}}</h5>
                                <span class="t-des p2-text subtitle text-center w-79" id="">{{ __($first->country)}}</span><br>

                            </div>

                        </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>

</section>
@endsection
