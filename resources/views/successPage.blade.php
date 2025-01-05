@extends('layout')

@section('title', 'SANGFOR')

@section('content')

  <div  class=" relative">
    @include('components.navbar')
  </div> 
    
    <div class=" mt-28 sm:mt-48">
        @include('components.success-hero')
    </div>

    <div class="">
        @include('components.advantages')
    </div>


    <div class="">
        @include('components.footer')
    </div>

    

