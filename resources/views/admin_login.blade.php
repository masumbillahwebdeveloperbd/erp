
<!DOCTYPE html>
<html>
<head>
	<title>Apps @yield('title')</title>
	<link rel="stylesheet" type="text/css" href="{{asset('public/css/app.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('public/css/all.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('public/css/style.css')}}">
</head>
<body class="login-container">


<div class="container-fluid">
	
	<div class="row">

	    <div class="col-md-3 offset-md-5">
			
				{{Form::open(['route'=>'admin_login_submit','method'=>'POST'])}}

				<div class="icon-circle">
					<img src="{{asset('public/images/users-17.png')}}" alt="Admin Login">
				</div>
				<br>

				@foreach ($errors->all() as $message) 
					<p style="padding-bottom: 5px;margin:0px;color:#DD5044">{{$message}}</p>
				@endforeach



			  <div class="form-group">
			    <label for="email">Email address:</label>
			    <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email">
			  </div>
			  <div class="form-group">
			    <label for="pwd">Password:</label>
			    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
			  </div>
			  <div class="checkbox">
			    <label><input type="checkbox" name="remember" value="yes"> Remember me</label>
			  </div>
			  <button type="submit" style="margin-top: 20px;" class="btn btn-primary btn-block">Submit</button>
			</form>


		</div>
	</div>



</div>


<script src="{{asset('js/app.js')}}"></script>
</body>
</html>

