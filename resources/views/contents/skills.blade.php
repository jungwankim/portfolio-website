<h1>My Skills</h1>
@php
  $previous_skill_category = null;
@endphp
@foreach($skills as $skill)
  @if($previous_skill_category != $skill->category)
    @if($previous_skill_category != null)
      </div>
      <hr>
    @endif
    <div class="row">
      <div class="col-sm-12">
        <h3>{{$skill->category}}</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-6 col-md-2 text-center mb-3">
        <i class="devicon-{{$skill->name}}-original devicon-{{$skill->name}}-plain colored skillcon"></i>
        <a href="/skills/{{$skill->name}}" title="{{$skill->name}}">{{$skill->name}}</a>

      </div>
  @else
    <div class="col-6 col-md-2 text-center mb-3">
      <i class="devicon-{{$skill->name}}-original devicon-{{$skill->name}}-plain colored skillcon"></i>
       <a href="/skills/{{$skill->name}}" title="{{$skill->name}}">{{$skill->name}}</a>
    </div>
  @endif
  @php
    $previous_skill_category = $skill->category
  @endphp
@endforeach
</div>