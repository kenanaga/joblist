<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<!-- Mirrored from www.vasterad.com/themes/workscout_2019/browse-jobs.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 20 Sep 2019 19:42:29 GMT -->
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
<header class="sticky-header">
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


<!-- Titlebar
================================================== -->
<div id="titlebar">
	<div class="container">
		<div class="ten columns">
			<span>We found 1,412 jobs matching:</span>
			<h2>Web, Software & IT</h2>
		</div>

		<div class="six columns">
			<a href="dashboard-add-job.html" class="button">Post a Job, It’s Free!</a>
		</div>

	</div>
</div>


<!-- Content
================================================== -->
<div class="container">
	<!-- Recent Jobs -->
	<div class="eleven columns">
	<div class="padding-right">

		<div class="listings-container">
			
		
			</a>
			@foreach($axtardata as $adata)
			<!-- Listing -->
			<a href="/elan/{{ $adata->id }}/{{ str_replace(' ','-',$adata->compname) }}-{{ str_replace(' ','-',$adata->title) }}" class="listing freelance">
				<div class="listing-logo">
					<img src="images/job-list-logo-02.png" alt="">
				</div>
				<div class="listing-title">
					<h4>{{$adata->title }} <span class="listing-type">{{$adata->type }}</span></h4>
					<ul class="listing-icons">
						<li><i class="ln ln-icon-Management"></i>  {{$adata->compname }}</li>
						<li><i class="ln ln-icon-Map2"></i> {{$adata->city }}</li>
						<li><i class="ln ln-icon-Money-2"></i> {{$adata->summary }}</li>
						<li><div class="listing-date">{{ \Carbon\Carbon::parse($adata->created_at)->diffForHumans() }}</div></li>
					</ul>
				</div>
			</a>
             @endforeach
		
	
		</div>
		<div class="clearfix"></div>

		<div class="pagination-container">
			<nav class="pagination">
				<ul>
					<li><a href="#" class="current-page">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li class="blank">...</li>
					<li><a href="#">22</a></li>
				</ul>
			</nav>

			<nav class="pagination-next-prev">
				<ul>
					<li><a href="#" class="prev">Previous</a></li>
					<li><a href="#" class="next">Next</a></li>
				</ul>
			</nav>
		</div>

	</div>
	</div>


	<!-- Widgets -->
	<div class="five columns">

		<!-- Sort by -->
		<div class="widget">
			<h4>Sort by</h4>

			<!-- Select -->
			<select data-placeholder="Choose Category" class="chosen-select-no-single">
				<option selected="selected" value="recent">Newest</option>
				<option value="oldest">Oldest</option>
				<option value="expiry">Expiring Soon</option>
				<option value="ratehigh">Hourly Rate – Highest First</option>
				<option value="ratelow">Hourly Rate – Lowest First</option>
			</select>

		</div>

		<!-- Location -->
		<div class="widget">
			<h4>Location</h4>
			<form action="#" method="get">
				<input type="text" placeholder="State / Province" value=""/>
				<input type="text" placeholder="City" value=""/>

				<input type="text" class="miles" placeholder="Miles" value=""/>
				<label for="zip-code" class="from">from</label>
				<input type="text" id="zip-code" class="zip-code" placeholder="Zip-Code" value=""/><br>

				<button class="button">Filter</button>
			</form>
		</div>

		<!-- Job Type -->
		<div class="widget">
			<h4>Job Type</h4>

			<ul class="checkboxes">
				<li>
					<input id="check-1" type="checkbox" name="check" value="check-1" checked>
					<label for="check-1">Any Type</label>
				</li>
				<li>
					<input id="check-2" type="checkbox" name="check" value="check-2">
					<label for="check-2">Full-Time <span>(312)</span></label>
				</li>
				<li>
					<input id="check-3" type="checkbox" name="check" value="check-3">
					<label for="check-3">Part-Time <span>(269)</span></label>
				</li>
				<li>
					<input id="check-4" type="checkbox" name="check" value="check-4">
					<label for="check-4">Internship <span>(46)</span></label>
				</li>
				<li>
					<input id="check-5" type="checkbox" name="check" value="check-5">
					<label for="check-5">Freelance <span>(119)</span></label>
				</li>
			</ul>

		</div>

		<!-- Rate/Hr -->
		<div class="widget">
			<h4>Rate / Hr</h4>

			<ul class="checkboxes">
				<li>
					<input id="check-6" type="checkbox" name="check" value="check-6" checked>
					<label for="check-6">Any Rate</label>
				</li>
				<li>
					<input id="check-7" type="checkbox" name="check" value="check-7">
					<label for="check-7">$0 - $25 <span>(231)</span></label>
				</li>
				<li>
					<input id="check-8" type="checkbox" name="check" value="check-8">
					<label for="check-8">$25 - $50 <span>(297)</span></label>
				</li>
				<li>
					<input id="check-9" type="checkbox" name="check" value="check-9">
					<label for="check-9">$50 - $100 <span>(78)</span></label>
				</li>
				<li>
					<input id="check-10" type="checkbox" name="check" value="check-10">
					<label for="check-10">$100 - $200 <span>(98)</span></label>
				</li>
				<li>
					<input id="check-11" type="checkbox" name="check" value="check-11">
					<label for="check-11">$200+ <span>(21)</span></label>
				</li>
			</ul>

		</div>



	</div>
	<!-- Widgets / End -->


</div>


<!-- Footer
================================================== -->
<div class="margin-top-25"></div>

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
				<div class="copyrights">©  Copyright 2018 by <a href="#">Work Scout</a>. All Rights Reserved.</div>
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

</html>