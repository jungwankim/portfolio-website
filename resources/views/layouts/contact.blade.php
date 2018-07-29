<div class="jumbotron mb-0">
	<div class="container">
	<form action="/contact/submit" method="POST" role="form">
			@csrf
			<h1 class="text-center mb-5">Conatact</h1>

			<div class="col-md-12">
				<p>Hi, Please fill out the form below to send out me a message.</p>
				<p class="mb-5">I appreciate all messages</p>
			</div>
			<div class="form-group col-md-6">
				<input type="text" name="name" class="form-control" id="" placeholder="Your name" maxlength="128" required>
			</div>
			<div class="form-group col-md-6">
				<input type="email" name="email" class="form-control" id="" placeholder="E-mail" maxlength="128" required>
			</div>
			<div class="form-group col-md-12">
				<textarea type="text" name="body" class="form-control" rows="5" placeholder="Please add a message here" required></textarea>
			</div>
	
			<div class="form-group col-md-12">
				<button type="submit" class="btn btn-primary pull-right">Send</button>

			</div>
		</form>
	</div>
</div>