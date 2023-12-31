@extends('layouts.master')
@section('content')

<section style="background-color: #">
    <span class="p-line-first"></span>  <h1 class="bigb-font bold p-text text-center">{{__('Honored women from Early pioneers')}}</h1><span class="p-line-first nom-2" ></span>

    <div class="first-gen-container my-5 m-auto pl-5">
        <h1 class="lg2-t pt-5 px-5 p-text ">{{__($first->name)}}</h1>
        <h2 class="med-font3 mb-2 p2-text px-5">{{__($first->country)}}</h2>
        <div class="d-flex column text-center center-align" style="align-items:center;">

            <p class="med-font2 p-text pb-5  px-5 w-80">{{__($first->description)}}</p>
            <img src="{{ asset('/storage/screens/' . $first->image) }}" class="my-5" alt="" style="width:33%" />
    </div>

    </div>

</section>
@endsection

