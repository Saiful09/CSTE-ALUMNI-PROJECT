<!DOCTYPE html>

<html>
<head>
	<meta charset="UTF-8" />
	<title>Gallery - Nstu/Cste</title>
	<link rel="stylesheet" type="text/css" href="{{asset('frontEnd')}}/style.css" />
	<!--[if IE 6]>
		<link rel="stylesheet" type="text/css" href="ie6.css" />
	<![endif]-->
</head>
<body>
	<div id="page">
		<div id="header">
			<div id="section">
				<div><h1 style="color: #fff;">CSTE ALUMNI ASSOCIATION</h1></div>
				<span>cste@gmail.com <br /><br />+ 7958 917 9747 2481 000</span>
			</div>
			<ul>
				<li><a href="{{URL::to('/')}}">Home</a></li>
				<li><a href="{{URL::to('postjob')}}">Post Job</a></li>
				<li><a href="{{URL::to('activity')}}">Activity</a></li>
				<li  class="current"><a href="{{URL::to('gallery')}}">Gallery</a></li>
				<li><a href="{{URL::to('organization')}}">Organization</a></li>
				<li><a href="{{URL::to('sign')}}">Sign Up</a></li>
				<li><a href="{{URL::to('contact')}}">Contact us</a></li>
			</ul>
		</div>
		<div id="content">
		<div>
			<table class="table table-borderless">
        <caption><h1 style="color: red;"><u>Beauties of CSTE dept</u></h1> </caption>
            <thead>
          <tr>
         <th><img src="{{asset('frontEnd')}}/images/images.jpg" alt="Image" width="250px;" height="180px;" /></th>
         <th><img src="{{asset('frontEnd')}}/images/index.jpg" alt="Image" width="250px;" height="180px;" /></th>
         <th><img src="{{asset('frontEnd')}}/images/images.jpg" alt="Image" width="250px;" height="180px;" /></th>
         
        </tr>
       </thead>
        <tbody>
        <tr>
      <td><img src="{{asset('frontEnd')}}/images/nature1.jpg" alt="Image" width="250px;" height="180px;"/></td>
      <td><img src="{{asset('frontEnd')}}/images/nstu.jpg" alt="Image" width="250px;"height="180px;" /></td>
      <td><img src="{{asset('frontEnd')}}/images/nstu4.jpg" alt="Image" width="250px;"height="180px;" /></td>
    </tr>
    <tr>
      <td><img src="{{asset('frontEnd')}}/images/nstu2.jpg" alt="Image" width="250px;"height="180px;" /></td>
      <td><img src="{{asset('frontEnd')}}/images/nstu3.jpg" alt="Image" width="250px;"height="180px;" /></td>
      <td><img src="{{asset('frontEnd')}}/images/nstu8.jpg" alt="Image" width="250px;"height="180px;" /></td>
    </tr>
    <tr>
      <td><img src="{{asset('frontEnd')}}/images/nstu5.jpg" alt="Image" width="250px;"height="180px;" /></td>
      <td><img src="{{asset('frontEnd')}}/images/nstu7.jpg" alt="Image"  width="250px;"height="180px;"/></td>
      <td><img src="{{asset('frontEnd')}}/images/nstu4.jpg" alt="Image" width="250px;"height="180px;" /></td>
    </tr>
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
						<li><a href="{{URL::to('/')}}">Home</a></li>
                        <li><a href="{{URL::to('postjob')}}">Post Job</a></li>
                        <li><a href="{{URL::to('activity')}}">Activity</a></li>
                        <li  class="current"><a href="{{URL::to('gallery')}}">Gallery</a></li>
                        <li><a href="{{URL::to('organization')}}">Organization</a></li>
                        <li><a href="{{URL::to('sign')}}">Sign Up</a></li>
                        <li><a href="{{URL::to('contact')}}">Contact us</a></li>
					</ul>
					<p>&copy; Copyright 0000. Company Name. All Rights Reserved.</p>
				</div>
			</div>
		</div>
</body>
</html>