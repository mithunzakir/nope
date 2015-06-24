@extends('app')

@section('content')
<div class="row">
	<div class="col-md-6 col-md-offset-3">
		
		<form action="/do_register" method="post">
			<input type="hidden" name="_token" value="{{csrf_token()}}">

		  <div class="form-group">
		    <label for="exampleInputEmail1">Email address</label>
		    <input name="email" type="email" class="form-control">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Password</label>
		    <input name="password" type="password" class="form-control">
		  </div>
		  
		   
		  <button type="submit" class="btn btn-default">Submit</button>

		</form>
	</div>
</div>

@endsection