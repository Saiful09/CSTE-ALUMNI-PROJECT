<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>NSTU/CSTE</title>
	<link rel="stylesheet" type="text/css" href="{{asset('frontEnd')}}/style.css" />
	<!--[if IE 6]>
		<link rel="stylesheet" type="text/css" href="ie6.css" />
	<![endif]-->
	
</head>
<body>
	<div id="page">
		<div id="header">
			<div id="section">
				<div> 
					<h1 style="color: #fff;">CSTE ALUMNI ASSOCIATION</h1>
				</div>
				<span>cste@flying.com <br /><br />+ 7958 917 9747 2481 000</span>
			</div>
			<ul>
				<li ><a href="{{URL::to('/')}}">Home</a></li>
				<li class="current"><a href="{{URL::to('postjob')}}">Post Job</a></li>
				<li><a href="{{URL::to('activity')}}">Activity</a></li>
				<li><a href="{{URL::to('gallery')}}">Gallery</a></li>
				<li><a href="{{URL::to('organization')}}">Organization</a></li>
				<li><a href="{{URL::to('sign')}}">Sign Up</a></li>
				<li><a href="{{URL::to('contact')}}">Contact us</a></li>
				<li><a href="{{URL::to('seepost')}}">See Post</a></li>
			</ul>
		</div>
		<div id="content">
			<div>
				<h3>About</h3>
				<div class="first">
					<a href="index.html"><img src="{{asset('frontEnd')}}/images/nstu.jpg" alt="nstu" /></a>
					<h2>Welcome to the  cste  dept</h2>
					
				</div>
				<div class="jumbotron">
				<div>
					
					<h2><u>post your job</u></h2>
					<form name="myform" action="{{url('/job')}}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="form-group">
						<label for="myName">Full Name *</label>
						<input id="myName" name="name" class="form-control" type="text" data-validation="required">
						<span id="error_name" class="text-danger"></span>
					</div>
					<div class="form-group">
						<label for="lastname">Email-address *</label>
						<input id="lastname" name="email" class="form-control" type="text" data-validation="email">
						<span id="error_lastname" class="text-danger"></span>
					</div>
					<div class="form-group">
                        <label for="exampleFormControlTextarea1">Post job *</label>
                             <textarea class="form-control" id="exampleFormControlTextarea1" name="post" rows="3"></textarea>
                       </div>
					<div class="custom-file">
                   <input type="file" name="image" class="custom-file-input"id="customFileLang" lang="es">
                          <label class="custom-file-label" for="customFileLang"></label>
                       </div>
					
					<button id="submit" type="submit" value="submit" class="btn btn-primary center">submit info</button>
			
				</form>
			</div>
				</div>
				<div>
					<h2>Be Part of Our Community</h2>
					<p>If you're experiencing issues and concerns about this website, join the discussion  and meet other people in the community who share the same interests with you.</p>
				</div>
				<div>
					<h2> details</h2>
					<p></p>
					<p>Website  details, discussion and updates for this . Please feel free to remove some or all the text and links of this page and replace it with your own About content.</p>
				</div>
			</div>
		</div>
		<div id="footer">
			<div>
				<div id="connect">
					<a href="http://facebook.com/freewebsitetemplates" target="_blank"><img src="{{asset('frontEnd')}}/images/icon-facebook.gif" alt="Facebook" /></a>
					<a href="http://twitter.com/fwtemplates" target="_blank"><img src="{{asset('frontEnd')}}/images/icon-twitter.gif" alt="Twitter" /></a>
					<a href="http://www.youtube.com/fwtemplates" target="_blank"><img src="{{asset('frontEnd')}}/images/icon-youtube.gif" alt="Youtube" /></a>
				</div>
				<div class="section">
					<ul>
						<li ><a href="{{URL::to('/')}}">Home</a></li>
				<li class="current"><a href="{{URL::to('postjob')}}">Post Job</a></li>
				<li><a href="{{URL::to('activity')}}">Activity</a></li>
				<li><a href="{{URL::to('gallery')}}">Gallery</a></li>
				<li><a href="{{URL::to('blog')}}">Blog</a></li>
				<li><a href="{{URL::to('sign')}}">Sign Up</a></li>
				<li><a href="{{URL::to('contact')}}">Contact us</a></li>
					</ul>
					<p>&copy; Copyright 0000. All Rights Reserved.</p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>