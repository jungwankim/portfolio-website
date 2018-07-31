@extends('layouts.master')
@section('content')

@include('layouts.navigation')

<div id="scrollspy" data-spy="scroll" data-target="#navbar">

  <div class="fullscreen education">
    
  </div>

  <div class="jumbotron" id="section1">
    <div class="container">
      <h1>Jungwan Kim</h1>
      <p>Hello World. I am a software and a web developer.</p>
      
    </div>
  </div>

  <div class="jumbotron container">
    @include('contents.skills')
  </div>

  <div class="halfscreen work" id="section2">

  </div>


  <div class="jumbotron container">
    @include('contents.works')
  </div>

  <div class="halfscreen project" id="section3" >
    
  </div>

  <div class="jumbotron container">
    @include('contents.projects')
  </div>

  
  @include('layouts.contact')
</div>



@endsection

@section('script')
<script src="/js/app.js"></script>

@endsection