<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>Domestic Worker</title>
		
		{{ HTML::style('tb/css/bootstrap.css') }}
		{{ HTML::style('tb/css/main.css') }}
		{{ HTML::script('tb/js/bootstrap.js') }}
  	
  </head>

	<body>
	 
		<div>
			<ul class="nav nav-tabs">
				@if(!Auth::check())
					<li class="first-nav">{{ HTML::link('users/register', 'Register') }}</li>
					<li>{{ HTML::link('users/login', 'Login') }}</li>
				@else
					<li class="first-nav">{{ HTML::link('users/logout', 'Logout') }}</li>
				@endif
			</ul>
		 
	
		</div>
	             
	  <div class="container">

	    @if(Session::has('message'))
	      <p class="alert alert-danger">{{ Session::get('message') }}</p>
	    @endif
	 
	    @yield('content')

	  </div>
	 
	</body>
</html>