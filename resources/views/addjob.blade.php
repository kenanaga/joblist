<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<!-- Mirrored from www.vasterad.com/themes/workscout_2019/dashboard-add-job.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 20 Sep 2019 19:42:31 GMT -->
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
<link rel="stylesheet" href="{{ asset('front/') }}/dashboard-2.html">
<link rel="stylesheet" href="{{ asset('front/') }}/css/colors.css">

</head>

<body>
<div id="wrapper">



<!-- Header
================================================== -->
<header >
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

<!-- Dashboard -->
<div id="dashboard">

	<!-- Navigation
	================================================== -->

	


	<!-- Content
	================================================== -->
	<div  class="dashboard-content">


		<!-- Titlebar -->
		<div id="titlebar">
			<div class="row">
				<div class="col-md-12">
					<h2>Elan Yerləşdir</h2>
				</div>
			</div>
		</div>
	<form action="{{ route('addelan.post') }}" method="POST">
			@csrf
		<div class="row">
			
			<!-- Table-->
			<div class="col-lg-12 col-md-12">

				<div class="dashboard-list-box margin-top-0">
					<h4>Job Details</h4>
					<div class="dashboard-list-box-content">

					<div class="submit-page">

						<!-- Email -->
						<div class="form">
							<h5>E-Mail</h5>
							<input class="search-field" type="text" name="mail" placeholder="mail@example.com" value=""/>
						</div>

					

						<!-- Choose Category -->
						<div class="form">
							<div class="select">
								<h5>Kateqoriya</h5>
								<select data-placeholder="Choose Categories" name="catname"  class="chosen-select" >
									<option value="Proqramçı">Proqramçı</option>
									<option value="Web Proqramçı">Web Proqramçı</option>
									<option value="Mobil Proqramçı">Mobil Proqramçı</option>
									<option value="Web Dizayner">Web Dizayner</option>
									<option value="İT Mütəxəssisi">İT Mütəxəssisi</option>
									<option value="Tester">Tester</option>
								</select>
							</div>
						</div>

							<!-- Title -->
							<div class="form">
								<h5>Vəzifə</h5>
								<input class="search-field" name="title" type="text" placeholder="" value=""/>
							</div>

						<!-- Job Type -->
						<div class="form">
							<h5>İş Rejimi</h5>
							<select data-placeholder="Full-Time" name="type"   class="chosen-select-no-single">
								<option value="Tam Ştat">Tam Ştat</option>
								<option value="Yarım Ştat">Yarım Ştat</option>
								<option value="Təcrübəçi">Təcrübəçi</option>
								<option value="Frilans">Frilans</option>
							</select>
						</div>

						<!-- Location -->
						<div class="form">
							<h5>Şəhər</h5>
							<input class="search-field" type="text" name="city"  placeholder="e.g. London" value=""/>
							<p class="note">Leave this blank if the location is not important</p>
						</div>


						<!-- Tags -->
						<div class="form">
							<h5>Maaş</h5>
							<input class="search-field" type="text" name="summary"  placeholder="" value=""/>
							<p class="note">Comma separate tags, such as required skills or technologies, for this job.</p>
						</div>


						<!-- Description -->
						<div class="form" style="width: 100%;">
							<h5>Description</h5>
							<textarea  name="desc"   cols="40" rows="3" id="summary" spellcheck="true"></textarea>
						</div> 

					</div>

					</div>
				</div>


				<div class="dashboard-list-box margin-top-30">
					<h4>Company Details</h4>
					<div class="dashboard-list-box-content">

					<div class="submit-page">

						<!-- Company Name -->
						<div class="form">
							<h5>Company Name</h5>
							<input type="text" name="compname"  placeholder="Enter the name of the company">
						</div>

						<!-- Website -->
						<div class="form">
							<h5>Website <span>(optional)</span></h5>
							<input type="text" name="website"aceholder="http://">
						</div>

						<!-- Logo -->
						<div class="form">
							<h5>Logo <span>(optional)</span></h5>
							<label class="upload-btn">
							    <input type="file" multiple />
							    <i class="fa fa-upload"></i> Browse
							</label>
							<span class="fake-input">No file selected</span>
						</div>


					</div>

					</div>
				</div>
				
				<button class="button margin-top-30"  type="submit">Yerləşdirin<i class="fa fa-arrow-circle-right"></i></button>
			</div>
		</form>

			<!-- Copyrights -->
			<div class="col-md-12">
				<div class="copyrights">© 2019 Kodwork.org | All Rights Reserved.</div>
			</div>
		</div>

	</div>
	<!-- Content / End -->


</div>
<!-- Dashboard / End -->


</div>
<!-- Wrapper / End -->


<!-- Scripts ================================================== -->
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>tinymce.init({selector:'textarea'});</script>

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



</body>

</html>