@extends('layouts.master')

@section('content')
	<div class="form-horisontal">
		<div class="form-group col-sm-6 col-sm-offset-3">
			{{ Form::open(array('url'=>'users/create')) }}
				<h2>Please Register</h2>

				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>

			{{ Form::text('firstname', null, array('class'=>'form-control', 'placeholder'=>'First Name')) }}	
			{{ Form::text('lastname', null, array('class'=>'form-control', 'placeholder'=>'Last Name')) }}	
			{{ Form::text('email', null, array('class'=>'form-control', 'placeholder'=>'Email')) }}
			{{ Form::password('password', array('class'=>'form-control', 'placeholder'=>'Password')) }}
			{{ Form::password('password_confirmation', array('class'=>'form-control', 'placeholder'=>'Confirm Password')) }}
			{{ Form::submit('Register', array('class'=>'btn btn-lg btn-primary btn-block')) }}
			{{ Form::close() }}
		</div>	
	</div>
@stop