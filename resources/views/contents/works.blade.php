<h1>Work Experience</h1>
@foreach($works as $work)
  <div class="row">
    <div class="col-md-6">
      <h3>{{$work->company_name}}</h3>
    </div>
    <div class="col-md-6">
      <h3>{{$work->position}}</h3>    
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <h3>From {{$work->starting_date}} To {{$work->ending_date}}</h3>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <h3>{{$work->location}}</h3>
    </div>
  </div>
  <hr/>
@endforeach