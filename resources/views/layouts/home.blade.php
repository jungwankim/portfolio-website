@extends('layouts.master')
@section('content')

@include('layouts.homenavigation')

<div id="scrollspy" data-spy="scroll" data-target="#navbar">

  <div class="fullscreen welcome paraxify">
    <div class="sstar">
      
    </div>
    <div class="sstar sstar2">
      
    </div>
    <div class="sstar sstar3">
      
    </div>
    <div class="welcome-heading main-heading">
      <h2>IT's a place </h2> 
      <h2>where</h2>
      <h2> Make Wish</h2>
      <h2>Come True</h2>
    </div>
    <div class="fullscreen welcome-land paraxify">
    
    </div>
  </div>


  <div class="jumbotron" id="section1">
    <div class="container">
      <h1>Jungwan Kim</h1>
      <p>Hello World. I am a software and a web developer.</p>
      
    </div>
  </div>

  <div class="skill-section jumbotron container">
    @include('contents.skills')
  </div>

  <div class="halfscreen work paraxify mb-5" id="section2">

  </div>


  <div class="work-section jumbotron container">
    @include('contents.works')
  </div>

  <div class="halfscreen project paraxify mb-5" id="section3" >
    
  </div>

  <div class="project-section jumbotron container">
    @include('contents.projects')
  </div>

  
  @include('layouts.contact')
</div>



@endsection

@section('script')
<script src="/js/home.js"></script>

@endsection