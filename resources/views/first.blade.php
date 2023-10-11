@extends('layouts.master')
@section('content')

<section style="background-color: #">

    <span class="p-line-miss"></span> <span class="p-line-miss nom-2" ></span> <h1 class="big-font p-text text-center m-auto w-22" >{{__('Honored women from Early pioneers')}}</h1>

    <div class="first-gen-container my-5 m-auto pl-5">
        <img src="{{ asset('/storage/screens/' . $first->image) }}" class="my-5" alt="" style="width:25%" />
        <h1 class="lg2-t pt-5 px-5 p-text ">{{__($first->name)}}</h1>
        <h2 class="med-font3 pb-5 mb-2 p2-text px-5">{{__($first->country)}}</h2>


                <p class="med-font1 pb-5  px-5 w-80">{{__($first->description)}}</p>

    </div>

</section>
@endsection

