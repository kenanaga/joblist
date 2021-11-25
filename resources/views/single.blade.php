<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head>

<!-- Basic Page Needs
================================================== -->
<meta charset="utf-8">
<title>Work Scout</title>

<!-- Mobile Specific Metas
================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="{{ asset('front/') }}/css/style.css">
<link rel="stylesheet" href="{{ asset('front/') }}/css/colors.css">



</head>

<body>
<div id="wrapper">


<!-- Header
================================================== -->
<header>
<div class="container">
	<div class="sixteen columns">

		<!-- Logo -->
		<div id="logo">
			<h1><a href="/"><img src="{{ asset('front/') }}/images/logo.png" alt="Work Scout" /></a></h1>
		</div>

		<nav id="navigation" class="menu">
			

			<ul class="responsive float-right">
				
				<li><a href="/addelan"><i class="fa fa-lock"></i> Pulsuz Elan Yerləşdir</a></li>
			</ul>

		</nav>
	</div>
</div>
</header>
<div class="clearfix"></div>

   @foreach($singledata as $data)

<!-- Titlebar
================================================== -->
<div id="titlebar" class="photo-bg" style="background: url(images/job-page-photo.jpg)">
	<div class="container">
		<div class="ten columns">
			<span><a href="browse-jobs.html">{{ $data->catname }}</a></span>
			<h2>{{ $data->title }} <span class="full-time">{{ $data->type }}</span></h2>
		</div>

		

	</div>
</div>


<!-- Content
================================================== -->
<div class="container">
	
	<!-- Recent Jobs -->
	<div class="eleven columns">
	<div class="padding-right">
		
		<!-- Company Info -->
		<div class="company-info">
			<img src="images/company-logo.png" alt="">
			<div class="content">
				<h4>{{ $data->compname }}</h4>
				<span><a href="https://{{ $data->website }}" target="_blank"><i class="fa fa-link"></i> Website</a></span>
				<span><a href="#"><i class="fa fa-facebook-official"></i> @kingrestaurants</a></span>
			</div>
			<div class="clearfix"></div>
		</div>

		<p>{!! $data->desc !!}</p>
	</div>
	</div>


	<!-- Widgets -->
	<div class="five columns">

		<!-- Sort by -->
		<div class="widget">
			

			<div class="job-overview">
				
				<ul>
					<li>
						<i class="fa fa-map-marker"></i>
						<div>
							<strong>Şəhər:</strong>
                        <span>{{ $data->city }}</span>
						</div>
					</li>
				
                    <li>
						<i class="fa fa-calendar-check-o"></i>
						<div>
							<strong>Elanın tarixi</strong>
							<span>{{ \Carbon\Carbon::parse($data->created_at)->format('d/m/Y') }}</span>  
						</div>
					</li>
					
					<li>
						<i class="fa fa-calendar-o"></i>
						<div>
							<strong>Bitmə tarixi</strong>
							<span>{{ \Carbon\Carbon::parse($data->created_at)->addMonths(1)->format('d/m/Y') }}</span>  
						</div>
                    </li>
                    
                    <li>
						<i class="fa fa-envelope-o"></i>
						<div>
							<strong>E-mail</strong>
							<span>{{ $data->mail }}</span>
						</div>
                    </li>

					<li>
						<i class="fa fa-money"></i>
						<div>
							<strong>Maaş:</strong>
							<span>{{ $data->summary }}</span>
						</div>
					</li>
				</ul>
			</div>

		</div>

	</div>
	<!-- Widgets / End -->
@endforeach

</div>


<!-- Footer
================================================== -->
<div class="margin-top-50"></div>

<div id="footer">
	<!-- Main -->
	<div class="container">

		<div class="seven columns">
			<h4>About</h4>
			<p>Morbi convallis bibendum urna ut viverra. Maecenas quis consequat libero, a feugiat eros. Nunc ut lacinia tortor morbi ultricies laoreet ullamcorper phasellus semper.</p>
			<a href="#" class="button">Get Started</a>
		</div>

		<div class="three columns">
			<h4>Company</h4>
			<ul class="footer-links">
				<li><a href="#">About Us</a></li>
				<li><a href="#">Careers</a></li>
				<li><a href="#">Our Blog</a></li>
				<li><a href="#">Terms of Service</a></li>
				<li><a href="#">Privacy Policy</a></li>
				<li><a href="#">Hiring Hub</a></li>
			</ul>
		</div>
		
		<div class="three columns">
			<h4>Press</h4>
			<ul class="footer-links">
				<li><a href="#">In the News</a></li>
				<li><a href="#">Press Releases</a></li>
				<li><a href="#">Awards</a></li>
				<li><a href="#">Testimonials</a></li>
				<li><a href="#">Timeline</a></li>
			</ul>
		</div>		

		<div class="three columns">
			<h4>Browse</h4>
			<ul class="footer-links">
				<li><a href="#">Freelancers by Category</a></li>
				<li><a href="#">Freelancers in USA</a></li>
				<li><a href="#">Freelancers in UK</a></li>
				<li><a href="#">Freelancers in Canada</a></li>
				<li><a href="#">Freelancers in Australia</a></li>
				<li><a href="#">Find Jobs</a></li>

			</ul>
		</div>

	</div>

	<!-- Bottom -->
	<div class="container">
		<div class="footer-bottom">
			<div class="sixteen columns">
				<h4>Follow Us</h4>
				<ul class="social-icons">
					<li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
					<li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
					<li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
					<li><a class="linkedin" href="#"><i class="icon-linkedin"></i></a></li>
				</ul>
				<div class="copyrights">©  Copyright 2019 by <a href="kenanaga.tk">Kodwork.org</a>. All Rights Reserved.</div>
			</div>
		</div>
	</div>

</div>

<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>

</div>
<!-- Wrapper / End -->


<!-- Scripts
================================================== -->
<script src="{{ asset('front/') }}/scripts/jquery-3.4.1.min.js"></script>
<script src="{{ asset('front/') }}/scripts/jquery-migrate-3.1.0.min.js"></script>
<script src="{{ asset('front/') }}/scripts/custom.js"></script>
<script src="{{ asset('front/') }}/scripts/jquery.superfish.js"></script>
<script src="{{ asset('front/') }}/scripts/jquery.themepunch.tools.min.js"></script>
<script src="{{ asset('front/') }}/scripts/jquery.themepunch.revolution.min.js"></script>
<script src="{{ asset('front/') }}/scripts/jquery.themepunch.showbizpro.min.js"></script>
<script src="{{ asset('front/') }}/scripts/jquery.flexslider-min.js"></script>
<script src="{{ asset('front/') }}/scripts/chosen.jquery.min.js"></script>
<script src="{{ asset('front/') }}/scripts/jquery.magnific-popup.min.js"></script>
<script src="{{ asset('front/') }}/scripts/waypoints.min.js"></script>
<script src="{{ asset('front/') }}/scripts/jquery.counterup.min.js"></script>
<script src="{{ asset('front/') }}/scripts/jquery.jpanelmenu.js"></script>
<script src="{{ asset('front/') }}/scripts/stacktable.js"></script>
<script src="{{ asset('front/') }}/scripts/slick.min.js"></script>
<script src="{{ asset('front/') }}/scripts/headroom.min.js"></script>






</body>

<!-- Mirrored from www.vasterad.com/themes/workscout_2019/job-page-alt.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 20 Sep 2019 19:42:13 GMT -->
</html>