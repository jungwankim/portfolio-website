<h1>Projects</h1>
@foreach($projects as $project)
  <div class="row">
    <div class="col-md-6">
      <h3>{{$project->title}}</h3>
    </div>
    <div class="col-md-6">
      <h3>{{$project->subtitle}}</h3>    
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <h3>From {{$project->starting_date}} To {{$project->ending_date}}</h3>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <h3>{{$project->url}}</h3>
    </div>
  </div>
  <hr/>
@endforeach