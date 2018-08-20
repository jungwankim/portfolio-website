@extends('layouts.master')
@section('content')
@include('layouts.navigation')
<div class="fullscreen education">
	<div class="overlay">
		
	</div>
	<div class="main-heading education-heading">
		<h1>McGill University</h1>
		<h3>B.Sc Computer Science</h3>
		<h4>Graduated 2017 Winter</h4>
		<div class="icon-scroll">
			
		</div>
	</div>
</div>
<div class="jumbotron">
	<div class="container">
		<h1>Hello, world!</h1>
		<p>
			I joined McGill University in 2011 when the QS rank of McGill was 18th. I started with B.Sc freshman course.
			And after the fresh year, I joined Honor Mathmathics and Physics major; I had been good at math and problem solving.
			Then I took my first programming course that changed my life. I loved the programming and the way of thinking as a programmer.
			Especially when I read and follow someonesle's code, I felt that I became one with the person, understanding the logic he or she made.
			So I decided to change my major to computer science. Even in military, I pursued learning at night and teached friends who wanted to learn programming. And now I am a McGill Allumi who want to work in the programming field. I listed courses that I took below. 
		</p>
		</div>
	</div>
	<div class="panel panel-default container">
		<div class="panel-body">
			<table class="table table-hover table-dark text-center">
				<thead>
					<tr>
						<th scope="col-sm-6">Grade</th>
						<th scope="col-sm-6">GPA</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>A</td>
						<td>4</td>
					</tr>
					<tr>
						<td>A-</td>
						<td>3.7</td>
					</tr>
					<tr>
						<td>B+</td>
						<td>3.3</td>
					</tr>
					<tr>
						<td>B</td>
						<td>3.0</td>
					</tr>
					<tr>
						<td>B-</td>
						<td>2.7</td>
					</tr>
					<tr>
						<td>C+</td>
						<td>2.3</td>
					</tr>
					<tr>
						<td>C</td>
						<td>2.0</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<div class="container">
		{{-- <div class="panel bg-info">
			<div class="panel-body">
				<p><span class="badge">A</span> : my grade</p>
				<p><span class="badge badge-danger">A</span> : class average</p>
			</div>
		</div> --}}
		<div class="card-group">
			<div class="card bg-primary text-white">
				<div class="card-header">Science</div>
				<div class="card-body text-left text-dark">
					<ul class="list-group">
						<li class="list-group-item">
							<p class="course">CHEM 110</p> Gerneral Chemistry 1
							<span class="badge pull-right">A</span>
							<span class="badge badge-danger pull-right">B+</span>
						</li>
						<li class="list-group-item">
							<p class="course">CHEM 120</p> Gernerl Chemistry 2
							<span class="badge pull-right">A</span>
							<span class="badge badge-danger pull-right">B</span>
						</li>
						<li class="list-group-item">
							<p class="course">PHYS 131</p> Mechanics and Waves
							<span class="badge pull-right">A</span>
							<span class="badge badge-danger pull-right">B-</span></li>
							<li class="list-group-item">
								<p class="course">PHYS 142</p> Electromagnetism & Optics
								<span class="badge pull-right">A</span>
								<span class="badge badge-danger pull-right">B-</span>
							</li>
							<li class="list-group-item">
								<p class="course">PHYS 257</p>Experimental Method 1
								<span class="badge pull-right">A-</span>
								<span class="badge badge-danger pull-right">B</span>
							</li>
							<li class="list-group-item">
								<p class="course">PHYS 251</p>
								Honours Classical Mechanics 1
								<span class="badge pull-right">B+</span>
								<span class="badge badge-danger pull-right">B+</span>
							</li>
							<li class="list-group-item">
								<p class="course">PHYS 260</p></p> Modern Physics and Relativity	
								<span class="badge pull-right">B</span> 	
								<span class="badge badge-danger pull-right">B-</span>
							</li>
							<li class="list-group-item">My Average GPA 3.71</li>
							<li class="list-group-item">Average GPA 2.95</li>
						</ul>
					</div>
				</div>
				<div class="card bg-warning text-white">
					<div class="card-header">Math</div>
					<div class="card-body text-left text-dark">
						<ul class="list-group">
							<li class="list-group-item">
								<p class="course">MATH 133</p> Linear Algebra and Geometry	
								<span class="badge pull-right">A</span> 	
								<span class="badge badge-danger pull-right">B-</span>
							</li>
							<li class="list-group-item">
								<p class="course">Math 150</p> Calculus A 					
								<span class="badge pull-right">A</span> 	
								<span class="badge badge-danger pull-right">B-</span>
							</li>
							<li class="list-group-item">
								<p class="course">MATH 151</p> Calculus B						
								<span class="badge pull-right">B</span> 	
								<span class="badge badge-danger pull-right">B-</span>
							</li>
							<li class="list-group-item">
								<p class="course">MATH 248</p> Honours Advanced Calculus		
								<span class="badge pull-right">A-</span>	
								<span class="badge badge-danger pull-right">B+</span>
							</li>
							<li class="list-group-item">
								<p class="course">MATH 235</p> Algebra 1 						
								<span class="badge pull-right">B+</span>	
								<span class="badge badge-danger pull-right">B-</span>
							</li>
							<li class="list-group-item">
								<p class="course">MATH 270</p> Applied Linear Algebra			
								<span class="badge pull-right">A</span> 	
								<span class="badge badge-danger pull-right">B-</span>
							</li>
							<li class="list-group-item">
								<p class="course">MATH 263</p> ODEs for Engineers				
								<span class="badge pull-right">A</span> 	
								<span class="badge badge-danger pull-right">B+</span>
							</li>
							<li class="list-group-item">
								<p class="course">MATH 363</p> Discrete Mathematics			
								<span class="badge pull-right">B+</span>	
								<span class="badge badge-danger pull-right">B+</span>
							</li>
							<li class="list-group-item">
								<p class="course">MATH 323</p> Probablity 					
								<span class="badge pull-right">B</span> 	
								<span class="badge badge-danger pull-right">C+</span>
							</li>
							<li class="list-group-item">
								<p class="course">MATH 324</p> Statisitcs						
								<span class="badge pull-right">B+</span>	
								<span class="badge badge-danger pull-right">B</span>
							</li>
							<li class="list-group-item">My Average GPA 3.56</li>
							<li class="list-group-item">Average GPA 2.87</li>
						</ul>
					</div>
				</div>
				<div class="card bg-success text-white">
					<div class="card-header">Engineering Practice</div>
					<div class="card-body text-left text-dark">
						<ul class="list-group">
							<li class="list-group-item">
								<p class="course">ECSE 191</p> Electrial Measurements  		
								<span class="badge pull-right">B+</span>	
								<span class="badge badge-danger pull-right">B</span>
							</li>
							<li class="list-group-item">
								<p class="course">ECSE 200</p> Electic Circuits 1				
								<span class="badge pull-right">B+</span>	
								<span class="badge badge-danger pull-right">B-</span>
							</li>
							<li class="list-group-item">
								<p class="course">ECSE 210</p> Electric Circuits 2			
								<span class="badge pull-right">B+</span>	
								<span class="badge badge-danger pull-right">C+</span>
							</li>
							<li class="list-group-item">
								<p class="course">FACC 100</p> Intro to the Eng. Professional	
								<span class="badge pull-right">B+</span>	
								<span class="badge badge-danger pull-right">B+</span>
							</li>
							<li class="list-group-item">
								<p class="course">FACC 400</p> Eng Professional Practice		
								<span class="badge pull-right">A</span> 	
								<span class="badge badge-danger pull-right">A</span>
							</li>
							<li class="list-group-item">My Average GPA 3.44</li>
							<li class="list-group-item">Average GPA 3.06</li>
						</ul>
					</div>
				</div>
				<div class="card bg-danger text-white">
					<div class="card-header">Programming</div>
					<div class="card-body text-left text-dark">
						<ul class="list-group">
							<li class="list-group-item">
								<p class="course">COMP 202</p> Foundation of programming 		
								<span class="badge pull-right">A</span> 	
								<span class="badge badge-danger pull-right">B</span>
							</li>
							<li class="list-group-item">
								<p class="course">COMP 206</p> Intro to Software Systmes 		
								<span class="badge pull-right">A</span> 	
								<span class="badge badge-danger pull-right">B+</span>
							</li>
							<li class="list-group-item">
								<p class="course">COMP 250</p> Intro to Computer Science 		
								<span class="badge pull-right">B+</span>	
								<span class="badge badge-danger pull-right">B</span>
							</li>
							<li class="list-group-item">
								<p class="course">ECSE 221</p> Intro to Computer Engineering 	
								<span class="badge pull-right">A</span>	
								<span class="badge badge-danger pull-right">B-</span>
							</li>
							<li class="list-group-item">
								<p class="course">ECSE 321</p> Intro to Software Engineering 	
								<span class="badge pull-right">B+</span>	
								<span class="badge badge-danger pull-right">A-</span>
							</li>
							<li class="list-group-item">
								<p class="course">COMP 302</p> Programming Lang & Paradigms	
								<span class="badge pull-right">A</span> 	
								<span class="badge badge-danger pull-right">B</span>
							</li>
							<li class="list-group-item">
								<p class="course">COMP 251</p> Algorithms and Data Structure	
								<span class="badge pull-right">A</span> 	
								<span class="badge badge-danger pull-right">B+</span>
							</li>
							<li class="list-group-item">
								<p class="course">ECSE 211</p> Design Principles and Methods 	
								<span class="badge pull-right">B+</span>	
								<span class="badge badge-danger pull-right">B+</span>
							</li>
							<li class="list-group-item">
								<p class="course">COMP 360</p> Algorithm Design				
								<span class="badge pull-right">A-</span>	
								<span class="badge badge-danger pull-right">B</span>
							</li>
							<li class="list-group-item">
								<p class="course">ECSE 322</p> Computer Engineering			
								<span class="badge pull-right">C</span> 	
								<span class="badge badge-danger pull-right">B-</span>
							</li>
							<li class="list-group-item">
								<p class="course">ECSE 429</p> Software Validation			
								<span class="badge pull-right">B</span> 	
								<span class="badge badge-danger pull-right">B+</span>
							</li>
							<li class="list-group-item">
								<p class="course">COMP 421</p> Database Systmes 				
								<span class="badge pull-right">B</span> 	
								<span class="badge badge-danger pull-right">B</span>
							</li>
							<li class="list-group-item">
								<p class="course">COMP 424</p> Artificial Intelligence		
								<span class="badge pull-right">B+</span>	
								<span class="badge badge-danger pull-right">B+</span>
							</li>
							<li class="list-group-item">
								<p class="course">COMP 557</p> Funamentals of Computer Graphics	
								<span class="badge pull-right">B-</span>	
								<span class="badge badge-danger pull-right">B</span>
							</li>
							<li class="list-group-item">
								<p class="course">COMP 322</p> Introduction to C++			
								<span class="badge pull-right">A</span> 	
								<span class="badge badge-danger pull-right">A-</span>
							</li>
							<li class="list-group-item">
								<p class="course">COMP 535</p> Computer Networks				
								<span class="badge pull-right">A-</span> 	
								<span class="badge badge-danger pull-right">B+</span>
							</li>
							<li class="list-group-item">
								<p class="course">COMP 551</p> Applied Machine Learning 		
								<span class="badge pull-right">A-</span> 	
								<span class="badge badge-danger pull-right">A-</span>
							</li>
							<li class="list-group-item">My Average GPA:3.44</li>
							<li class="list-group-item">Average GPA 3.17</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		@endsection

@section('script')
<script src="/js/app.js"></script>

@endsection