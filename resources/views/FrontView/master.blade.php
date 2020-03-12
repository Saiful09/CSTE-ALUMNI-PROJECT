<!DOCTYPE html>

<html>
<head>
	<meta charset="UTF-8" />
	<title>Home @yield('title_area')</title>
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

					<!--<img src="{{asset('frontEnd')}}/images/logo.gif" alt="Logo"  />-->
				</div>
				<span>cste@gmail.com <br /><br />+ 7958 917 9747 2481 000</span>
			</div>
			<ul>
				<li class="current"><a href="{{URL::to('/')}}">Home</a></li>
				<li><a href="{{URL::to('postjob')}}">Post Job</a></li>
				<li><a href="{{URL::to('activity')}}">Activity</a></li>
				<li><a href="{{URL::to('gallery')}}">Gallery</a></li>
				<li><a href="{{URL::to('organization')}}">Organization</a></li>
				<li><a href="{{URL::to('sign')}}">Sign Up</a></li>
				<li><a href="{{URL::to('contact')}}">Contact us</a></li>
				<li><a href="{{URL::to('seepost')}}">See Post</a></li>
			</ul>
			<div id="tagline">
				<div>
					<h4>WELCOME TO CSTE FAMILY</h4>
					<p></p>
				</div>
			</div>
		</div>
		<div id="content">
			<div id="home">
				<div>
					<div id="aside">
						<div>
							
								<h1 style="color:red;" >Department of Computer Science and Telecommunication Engineering</h1>
								<p><font size="3">
							Department of Computer Science and Telecommunication Engineering in one of the four founding departments of Noakhali Science and Technology University. The department currently offers Bachelor of Science (Engineering) in CSTE and Masters of Science (Engineering) in Telecommunication Engineeing. The department is different than other traditional Computer Science departments in the way that, courses of Communication Technology is equally emphasized along with courses of Computer Science in the curriculum. The department has highly qualified faculty members and is equipped with state of the art Computer, Electronics and Communication Labs.
                         </font>
						</p>
						</div>
						<ul>
							<li>
								<h1 style="color:red;" >Latest News </h1>
                                 give the news here</br>
                                 give the news here
							</li>
							<li>
								<h1 style="color:red;" >Journey of CSTE </h1>
							</li>
						</ul>
					</div>
					<div id="calendar">
						<h3>Dept of cste</h3>
						<ul>
							<li>
								<div>
									<span><br/>January events</span>
									<h2><a href="">This is just a place holder.</a></h2>
								</div>
								<p>This website  has been designed by <a href=""></a> for you, for free. You can replace all this text with your own text.</p>
							</li>
							<li>
								<div>
									<span>14<br />Jan</span>
									<h2><a href="">This is just a place holder.</a></h2>
								</div>
								<p>You can remove any link to our website from this website template, you're free to use this website template without linking back to us.</p>
							</li>
							<li>
								<div>
									<span>30<br />Jan</span>
									<h2><a href="">This is just a place holder.</a></h2>
								</div>
								<p>If you're having problems editing this website template, then don't hesitate to ask for help on the <a href="">Forum</a>.</p>
							</li>
						</ul>
					</div>
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
						<li class="current"><a href="{{URL::to('/')}}">Home</a></li>
				        <li><a href="{{URL::to('postjob')}}">Post Job</a></li>
				        <li><a href="{{URL::to('activity')}}">Activity</a></li>
				        <li><a href="{{URL::to('gallery')}}">Gallery</a></li>
				        <li><a href="{{URL::to('organization')}}">Organization</a></li>
				        <li><a href="{{URL::to('sign')}}">Sign Up</a></li>
				        <li><a href="{{URL::to('contact')}}">Contact us</a></li>
				        <li><a href="{{URL::to('seepost')}}">See Post</a></li>
					</ul>
					<p>&copy; Copyright  2020. dept. of cste. All Rights Reserved.</p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
