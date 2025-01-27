@extends('layout')

@section('title', 'SANGFOR')

@section('content')

  <div  class=" relative">
    @include('components.navbar')
  </div> 
    
    <div class=" mt-28 sm:mt-48">
        @include('components.hero')
    </div>



    <div class="">
        @include('components.about-form')
    </div>

    <div class="">
        @include('components.advantages')
    </div>

    <div class="">
        @include('components.features')
    </div>

    <div class="">
        @include('components.value')
    </div>

    <div class="">
        @include('components.explore')
    </div>

    <div class="">
        @include('components.footer')
    </div>


    



