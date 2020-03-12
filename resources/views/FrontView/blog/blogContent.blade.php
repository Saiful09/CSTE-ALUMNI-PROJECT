<!DOCTYPE html>

<html>
<head>
	<meta charset="UTF-8" />
	<title>Organization - Nstu/Cste</title>
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
				<span>cste@flying.com <br /><br />+ 7958 917 9747 2481 000</span>
			</div>
			<ul>
				<li ><a href="{{URL::to('/')}}">Home</a></li>
				<li><a href="{{URL::to('postjob')}}">Post Job</a></li>
				<li><a href="{{URL::to('activity')}}">Activity</a></li>
				<li><a href="{{URL::to('gallery')}}">Gallery</a></li>
				<li class="current"><a href="{{URL::to('organization')}}">Organization</a></li>
				<li><a href="{{URL::to('sign')}}">Sign Up</a></li>
				<li><a href="{{URL::to('contact')}}">Contact us</a></li>
			</ul>
		</div>
		<div id="content">
			<div>
				<h3><u>Executive Committee Members</u></h3>
				<table class="table table-borderless">
            <thead>
          <tr>
          <th><figure>
          <img src="{{asset('frontEnd')}}/images/AzadSir.jpg" alt="Trulli" width="180px;" height="150px;">
           <figcaption>Abul Kalam Azad</br>President</figcaption> </figure></th>
         <th><figure><img src="{{asset('frontEnd')}}/images/YeasinSir.jpg" alt="Image"  width="180px;" height="150px;" /><figcaption>Yeasin Kabir</br>Vice-President</figcaption> </figure></th>
        <th><figure><img src="{{asset('frontEnd')}}/images/MarufBhai.jpg" alt="Image" width="180px;" height="150px;" /><figcaption>Maruf Hasan Bulbul</br>Senior vice President</figcaption> </figure></th>
         
        </tr>
       </thead>
        <tbody>
        <tr>
       <td><figure><img src="{{asset('frontEnd')}}/images/MarufBha.jpg" alt="Image" width="180px;" height="150px;" /><figcaption>Mahmadul Hasan Rana</br>Treasurer</figcaption> </figure></td>
     <td><figure><img src="{{asset('frontEnd')}}/images/MarufBha.jpg" alt="Image" width="180px;" height="150px;" /><figcaption></br></figcaption> </figure></td>
      <td><figure><img src="{{asset('frontEnd')}}/images/MarufBha.jpg" alt="Image" width="180px;" height="150px;" /><figcaption></br></figcaption> </figure></td>
      
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
						<li ><a href="{{URL::to('/')}}">Home</a></li>
				       <li><a href="{{URL::to('postjob')}}">Post Job</a></li>
				       <li><a href="{{URL::to('activity')}}">Activity</a></li>
				       <li><a href="{{URL::to('gallery')}}">Gallery</a></li>
				       <li class="current"><a href="{{URL::to('organization')}}">Organization</a></li>
				       <li><a href="{{URL::to('sign')}}">Sign Up</a></li>
				        <li><a href="{{URL::to('contact')}}">Contact us</a></li>
					</ul>
					<p>&copy; Copyright 0000. Company Name. All Rights Reserved.</p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>