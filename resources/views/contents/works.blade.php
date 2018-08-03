<h1>Work Experience</h1>
@foreach($works as $work)
  <div class="row">
    <div class="col-md-6">
      <h3><a href="/works/{{$work->id}}" title="">{{$work->company_name}}</a></h3>
    </div>
    <div class="col-md-6">
      <h3>{{$work->position}}</h3>    
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <h3>
        From {{ \Carbon\Carbon::parse($work->starting_date)->format('F Y')}} 
        To {{ \Carbon\Carbon::parse($work->ending_date)->format('F Y')}} 
      </h3>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <h3>{{$work->location}}</h3>
    </div>
  </div>
  <hr/>
@endforeach