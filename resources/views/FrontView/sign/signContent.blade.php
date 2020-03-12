<!DOCTYPE html>

<html>
<head>
	<meta charset="UTF-8" />
	<title>Cste Alumni Association</title>
	<link rel="stylesheet" type="text/css" href="{{asset('frontEnd')}}/style.css" />
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<!--[if IE 6]>
		<link rel="stylesheet" type="text/css" href="ie6.css" />
	<![endif]-->
</head>
<body>
	<div id="page">
		<div id="header">
			<div id="section">
				<div>
					<a href="index.html">
						<h1 style="color: #fff;">CSTE ALUMNI ASSOCIATION</h1>

						<!-- <img src="{{asset('frontEnd')}}/images/logo.gif" alt="Logo" /> -->
				</a>
			</div>
				<span>cste@flying.com <br /><br />+ 7958 917 9747 2481 000</span>
			</div>
			<ul>
				<li ><a href="{{URL::to('/')}}">Home</a></li>
				<li><a href="{{URL::to('postjob')}}">Post Job</a></li>
				<li><a href="{{URL::to('activity')}}">Activity</a></li>
				<li><a href="{{URL::to('gallery')}}">Gallery</a></li>
				<li><a href="{{URL::to('blog')}}">Blog</a></li>
				<li  class="current"><a href="{{URL::to('sign')}}">Sign Up</a></li>
				<li><a href="{{URL::to('contact')}}">Contact us</a></li>
			</ul>
		</div>
		<div class="row">
    <div class="col-md-6 col-sm-12 col-lg-6 col-md-offset-3">
		<div class="panel panel-primary">

			<p class="alert-success">
							<?php
							$message=Session::get('message');
							if($message){
								echo $message;
								Session::put('message',null);
							 
							}
							?>
							
						</p>
						  @if ($errors->any())
      								<div class="alert alert-danger">
      					  <ul>
         							   @foreach ($errors->all() as $error)
            				  <li>{{ $error }}</li>
          					  @endforeach
       						 </ul>
     					 </div><br />
   						 @endif
						</p>
			<div class="panel-heading">Enter Your Details for Alumni registration
			</div>
			<div class="panel-body">
				<form name="myform" action="{{url('/alumni-reg')}}" method="post">
					@csrf
					<div class="form-group">
						<label for="myName">Full Name *</label>
						<input id="myName" name="myName" class="form-control" type="text" data-validation="required">
						<span id="error_name" class="text-danger"></span>
					</div>
					<div class="form-group">
						<label for="lastname">Email-address *</label>
						<input id="lastname" name="email" class="form-control" type="text" data-validation="email">
						<span id="error_lastname" class="text-danger"></span>
					</div>
					<div class="form-group">
						<label for="age">Batch *</label>
						<input id="age" name="batch"  class="form-control" type="text" >
						<span id="error_age" class="text-danger"></span>
					</div>
					
					<div class="form-group">
						<label for="gender">Gender</label>
						<select name="gender" id="gender" class="form-control">
							<option selected>Male</option>
							<option>Female</option>
							<option>Other</option>
						</select>
						<span id="error_gender" class="text-danger"></span>
					</div>
					<div class="form-group">
						<label for="phone">Phone Number *</label>
						<input type="text" id="phone" name="phone" class="form-control" >
						<span id="error_phone" class="text-danger"></span>
					</div>
					<div class="form-group">
						<label for="disc">Discription</label>
						<input type="text" id="description" name="description" class="form-control" >
					</div>
					
					<button id="submit" type="submit" value="submit" class="btn btn-primary center">Create your Account</button>
			
				</form>

			</div>
		</div>
	</div>
</div>
		<div id="footer">
			<div>
				<div id="connect">
					<a href="http://facebook.com/freewebsitetemplates" target="_blank"><img src="images/icon-facebook.gif" alt="Facebook" /></a>
					<a href="http://twitter.com/fwtemplates" target="_blank"><img src="images/icon-twitter.gif" alt="Twitter" /></a>
					<a href="http://www.youtube.com/fwtemplates" target="_blank"><img src="images/icon-youtube.gif" alt="Youtube" /></a>
				</div>
				<div class="section">
					<ul>
						<li ><a href="{{URL::to('/')}}">Home</a></li>
				        <li><a href="{{URL::to('postjob')}}">Post Job</a></li>
				        <li><a href="{{URL::to('activity')}}">Activity</a></li>
				        <li><a href="{{URL::to('gallery')}}">Gallery</a></li>
				        <li><a href="{{URL::to('blog')}}">Blog</a></li>
				        <li  class="current"><a href="{{URL::to('sign')}}">Sign Up</a></li>
				        <li><a href="{{URL::to('contact')}}">Contact us</a></li>
					</ul>
					<p>&copy; Copyright 0000. Company Name. All Rights Reserved.</p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>