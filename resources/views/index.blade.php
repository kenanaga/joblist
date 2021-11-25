@include('front.header')
<!-- Banner
================================================== -->
<div id="banner" style="background-image: url({{ asset('front/') }}/images/banner-home-01.jpg)" class="parallax background" data-img-width="2000" data-img-height="1330" data-diff="400">
	<div class="container">
		<div class="sixteen columns">
			
			<div class="search-container">

				<!-- Form -->
				<h2>Elan Axtar</h2>
			<form action="{{route('axtar')}}" method="GET">
				
				<input type="text" name="title" class="ico-01" placeholder="job title, keywords or company name" value=""/>
				<input type="text" name="city" class="ico-02" placeholder="city, province or region" value=""/>
				<button class="submit"><i class="fa fa-search"></i></button>
			     </form>

				<!-- Browse Jobs -->
				<div class="browse-jobs">
					Browse job offers by <a href="browse-categories.html"> category</a> or <a href="#">location</a>
				</div>
				
				<!-- Announce -->
				<div class="announce">
					We’ve over <strong>15 000</strong> job offers for you!
				</div>

			</div>

		</div>
	</div>
</div>







<!-- Recent Works -->
<div class="container">
	
	<!-- Recent Jobs -->
	<div class="eleven columns">
	<div class="padding-right">
		<h3 class="margin-bottom-25">SON İŞ ELANLARI</h3>
		<div class="listings-container">
			
			@foreach($data as $dat)
            
			<!-- Listing -->
			<a href="/elan/{{ $dat->id }}/{{ str_replace(' ','',$dat->compname) }}-{{ str_replace(' ','-',$dat->title) }}" class="listing full-time">
				<div class="listing-logo">
					<img src="{{ asset('front/') }}/images/job-list-logo-02.png" alt="">
				</div>
				<div class="listing-title">
					<h4>{{ $dat->title }} <span class="listing-type">{{ $dat->type }}</span></h4>
					<ul class="listing-icons">
						<li><i class="ln ln-icon-Management"></i> {{ $dat->compname }}</li>
						<li><i class="ln ln-icon-Map2"></i> {{ $dat->city }}</li>
						<li><i class="ln ln-icon-Money-2"></i>  {{ $dat->summary }}</li>
						<li><div class="listing-date">{{ \Carbon\Carbon::parse($dat->created_at)->diffForHumans() }}</div></li>
					</ul>
				</div>
			</a>
            @endforeach
			
		</div>

		<a href="browse-jobs.html" class="button centered"><i class="fa fa-plus-circle"></i> Daha Çox Göstər</a>
		<div class="margin-bottom-55"></div>
	</div>
	</div>

	<!-- Job Spotlight -->
	<div class="five columns">
		<h3 class="margin-bottom-5">Vip Elan</h3>

		<!-- Navigation -->
		
		<div class="clearfix"></div>
		
		<!-- Showbiz Container -->
		<div id="job-spotlight" class="showbiz-container">
			<div class="showbiz" data-left="#showbiz_left_1" data-right="#showbiz_right_1" data-play="#showbiz_play_1" >
				<div class="overflowholder">

					<ul>
                         @foreach($vipdata as $vip)
						<li>
							<div class="job-spotlight">
								<a href="/single/{{ $vip->id }}"><h4>{{ $vip->title }}<span class="part-time">{{ $vip->type }}</span></h4></a>
								<span><i class="fa fa-briefcase"></i> {{ $vip->compname }}</span>
								<span><i class="fa fa-map-marker"></i> {{ $vip->city }}</span>
								<span><i class="fa fa-money"></i> {{ $vip->summary }}</span>
								<p>{{ \Illuminate\Support\Str::words($vip->desc,25) }}</p>
								<a href="/single/{{ $vip->id }}" class="button">Ətraflı Bax</a>
							</div>
						</li>
						@endforeach
					</ul>
					<div class="clearfix"></div>

				</div>
				<div class="clearfix"></div>
			</div>
		</div>

	</div>
</div>


<!-- Infobox -->
<div class="infobox margin-reset">
	<div class="container">
		<div class="sixteen columns">Start Building Your Own Job Board Now <a href="my-account.html">Get Started</a></div>
	</div>
</div>

@include('front.footer')
