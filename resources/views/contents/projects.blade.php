<h1 class="mb-4">Projects</h1>
@foreach($projects as $project)
  <div class="row">
    <div class="col-md-6">
      <h3><a href="/projects/{{$project->id}}" title="{{$project->title}}">{{$project->title}}</a></h3>
    </div>
    <div class="col-md-6">
      <h3>{{$project->subtitle}}</h3>    
    </div>
  </div>
  @if(isset($project->starting_date))
    <div class="row">
      <div class="col-md-6">
        <h3>From {{$project->starting_date}} To {{$project->ending_date}}</h3>
      </div>
    </div>
  @endif
  <hr/>
@endforeach