<!-- Spinner Start -->
<!-- Start Preloader -->
<div class="td_preloader">
	<div class="td_preloader_in">
	<span></span>
	<span></span>
	</div>
</div>
    <!-- End Preloader -->
<!-- Spinner End -->
<!-- Start Header Section -->
<header class="td_site_header td_style_1 td_type_2 td_sticky_header td_medium td_heading_color">
	<div class="td_top_header td_heading_bg td_white_color">
	<div class="container">
		<div class="td_top_header_in">
		<div class="td_top_header_left">
			<ul class="td_header_contact_list td_mp_0 td_normal">
			<li>
				<img src="assets/frontend/img/icons/call.svg" alt="">
				<span>
				Call: <a href="tel:{{ get_theme_setting('mobile') }}">{{ get_theme_setting('mobile') }}</a>
				</span>
			</li>
			<li>
				<img src="assets/frontend/img/icons/envlop.svg" alt="">
				<span>
				Email: <a href="mailto:{{ get_theme_setting('email') }}">{{ get_theme_setting('email') }}</a>
				</span>
			</li>
			</ul>
		</div>
		<div class="td_top_header_right">
			<span>
			<a href="#lead-generate-popup" class="open-popup-link">Login</a>/
			<a href="#lead-generate-popup" class="open-popup-link">Register</a>
			</span>
			<a href="#lead-generate-popup" class="td_btn td_style_1 td_medium open-popup-link">
			<span class="td_btn_in td_white_color td_accent_bg">
				<span>Apply Now</span>
				<svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M15.1575 4.34302L3.84375 15.6567" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
				<path d="M15.157 11.4142C15.157 11.4142 16.0887 5.2748 15.157 4.34311C14.2253 3.41142 8.08594 4.34314 8.08594 4.34314" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
				</svg> 
			</span>             
			</a>
		</div>
		</div>
	</div>
	</div>
	<div class="td_main_header">
	<div class="container">
		<div class="td_main_header_in">
		<div class="td_main_header_left">
			<a class="td_site_branding td_accent_color" href="{{ url('/') }}">
				<img src="{{ url('assets/frontend/img/logo.png') }}">               
			</a>
			<div class="td_header_category_wrap position-relative">
				<button class="td_header_dropdown_btn td_medium td_heading_color">
					<img src="{{ url('assets/frontend/img/icons/menu-square.svg')}}" alt="" class="td_header_dropdown_btn_icon">
					<span>All Courses</span>
					<span class="td_header_dropdown_btn_tobble_icon td_center">
						<svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M9 4.99997C9 4.99997 6.05404 1.00001 4.99997 1C3.94589 0.999991 1 5 1 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
						</svg> 
					</span>                 
				</button>
				<ul class="td_header_dropdown_list td_mp_0">
					@foreach($courses as $key => $value)
					<li>
						<a href="{{ route('course-detail',$value->slug) }}">{{$value->name}}</a>
					</li>
					@endforeach
				</ul>
			</div>
		</div>
		<div class="td_main_header_right">
			<nav class="td_nav">
			<div class="td_nav_list_wrap">
				<div class="td_nav_list_wrap_in">
					<ul class="td_nav_list">
						<li class="menu-item-has-children">
                        	<a href="{{ url('universities') }}">University</a>
							<ul>
								@foreach($universities as $key => $value)
								<li>
									<a href="{{ route('university-detail',$value->slug) }}">{{$value->name}}</a>
								</li>
								@endforeach
							</ul>
						</li>
						@foreach($primaryMenu as $key => $menu)
						<li><a href="{{ $key }}"> {{$menu}} </a></li>
						@endforeach
					</ul>
				</div>
			</div>
			</nav>
			<div class="td_hero_icon_btns position-relative">
			
			
			</div>
		</div>
		</div>
	</div>
	</div>
</header>
<!-- End Header Section -->
<div class="td_side_header">
	<button class="td_close"></button>
	<div class="td_side_header_overlay"></div>
	<div class="td_side_header_in">
	<div class="td_side_header_shape"></div>
	<a class="td_site_branding" href="index.html">
		<img src="assets/frontend/img/logo_black.svg" alt="Logo">
	</a>
	<div class="td_side_header_box">
		<h2 class="td_side_header_heading">Do you have a project in your  <br> mind? Keep connect us.</h2>
	</div>
	<div class="td_side_header_box">
		<h3 class="td_side_header_title td_heading_color">Contact Us</h3>
		<ul class="td_side_header_contact_info td_mp_0">
		<li>
			<i class="fa-solid fa-phone"></i>
			<span><a href="tel:+444547800112">+44 454 7800 112</a></span>
		</li>
		<li>
			<i class="fa-solid fa-envelope"></i>             
			<span><a href="mailto:example@gmail.com">example@gmail.com</a></span>
		</li>
		<li>
			<i class="fa-solid fa-location-dot"></i>            
			<span>50 Wall Street Suite, 44150 <br>Ohio, United States</span>
		</li>
		</ul>
	</div>
	<div class="td_side_header_box">
		<h3 class="td_side_header_title td_heading_color">Subscribe</h3>
		<div class="td_newsletter td_style_1">
		<form action="#" class="td_newsletter_form">
			<input type="email" class="td_newsletter_input" placeholder="Email address">
			<button type="submit" class="td_btn td_style_1 td_radius_30 td_medium">
			<span class="td_btn_in td_white_color td_accent_bg">
				<span>Subscribe Now</span>
			</span>             
			</button>
		</form>
		</div>
	</div>
	<div class="td_side_header_box">
		<h3 class="td_side_header_title td_heading_color">Follow Us</h3>
		<div class="td_social_btns td_style_1 td_heading_color">
		<a href="#" class="td_center">
			<i class="fa-brands fa-linkedin-in"></i>
		</a>
		<a href="#" class="td_center">
			<i class="fa-brands fa-twitter"></i>
		</a>
		<a href="#" class="td_center">
			<i class="fa-brands fa-youtube"></i>
		</a>
		<a href="#" class="td_center">
			<i class="fa-brands fa-facebook-f"></i>
		</a>
		</div>
	</div>
	</div>
</div>
<!-- End Header Section -->
<div class="top-header-gap"></div>
<div class="header-gap"></div>