<!DOCTYPE html>
<!-- Template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8" />
	<title>See Post</title>
	<link rel="stylesheet" type="text/css" href="{{asset('frontEnd')}}/style.css" />
	<!--[if IE 6]>
		<link rel="stylesheet" type="text/css" href="ie6.css" />
	<![endif]-->
	<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

   <!-- Latest compiled and minified JavaScript -->
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
	<div id="page">
		<div id="header">
			<div id="section">
				<div><a href="index.html"><img src="images/logo.gif" alt="Logo" /></a></div>
				<span>aviationschool@flying.com <br /><br />+ 7958 917 9747 2481 000</span>
			</div>
			<ul>
				<li ><a href="{{URL::to('/')}}">Home</a></li>
				<li><a href="{{URL::to('postjob')}}">Post Job</a></li>
				<li><a href="{{URL::to('activity')}}">Activity</a></li>
				<li><a href="{{URL::to('gallery')}}">Gallery</a></li>
				<li><a href="{{URL::to('blog')}}">Blog</a></li>
				<li><a href="{{URL::to('sign')}}">Sign Up</a></li>
				<li class="current"><a href="{{URL::to('contact')}}">Contact us</a></li>
			</ul>
		</div>
		<div id="content">
			<div>
				<table class="table">
    <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NAME</th>
      <th scope="col">EMAIL</th>
      <th scope="col">POST</th>
      <th scope="col">IMAGE</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($seeposts as $spost)
    <tr>
      <td>{{$spost->id}}</td>
      <td>{{$spost->name}}</td>
      <td>{{$spost->email}}</td>
      <td>{{$spost->post}}</td>
      <td><img src="{{asset('uploads/postjob/'.$spost->image)}}" width="100px;" height="100px;"></td>
    </tr>
    @endforeach
  </tbody>
</table>
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
						<li><a href="index.html">Home</a></li>
						<li><a href="about.html">About</a></li>
						<li><a href="admissions.html">Admissions</a></li>
						<li><a href="trainingcourses.html">Training Courses</a></li>
						<li><a href="career.html">Career</a></li>
						<li class="last"><a href="contactus.html">Contact Us</a></li>
					</ul>
					<p>&copy; Copyright 0000. Company Name. All Rights Reserved.</p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>