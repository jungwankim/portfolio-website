@extends('layouts.master')
@section('content')
<div data-spy="scroll" data-target=".navbar" data-offset="50">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active eduction">
        <div class="carousel-caption">
          <h3>Who am I?</h3>
          <p>I am a Fullstack and software developer</p>
        </div>
      </div>
      <div class="item eduction">
        <div class="carousel-caption">
          <h3>Los Angeles</h3>
          <p>LA is always so much fun!</p>
        </div>
      </div>
      <div class="item work">
        <div class="carousel-caption">
          <h3>Chicago</h3>
          <p>Thank you, Chicago!</p>
        </div>
      </div>
      <div class="item project">
        <div class="carousel-caption">
          <h3>New York</h3>
          <p>We love the Big Apple!</p>
        </div>
      </div>
    </div>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  
  <div class="jumbotron">
    <div class="container">
      <h1>Company</h1>
      <p>We specialize in blablabla</p>
      
    </div>
  </div>
  @include('layouts.navigation')
  <div id="section1" class="jumbotron container">
    @include('contents.works')
  </div>
  <div id="section2" class="jumbotron container">
    @include('contents.projects')
  </div>
  <div id="section3" class="jumbotron container">
    @include('contents.skills')
  </div>
  
  @include('layouts.contact')
</div>
@endsection