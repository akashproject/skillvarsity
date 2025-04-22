<!-- Start Footer Section -->
<footer class="td_footer td_style_1">
  <div class="container">
    <div class="td_footer_row">
      <div class="td_footer_col">
        <div class="td_footer_widget">
          <div class="td_footer_text_widget td_fs_18">
            <img src="{{ url('assets/frontend/img/logo-footer.png') }}">                  
          </div>
          <ul class="td_footer_address_widget td_medium td_mp_0">
            <li><i class="fa-solid fa-envelope"></i><a href="tel:+{{ get_theme_setting('email') }}">{{ get_theme_setting('email') }}</a></li>
            <li><i class="fa-solid fa-phone-volume"></i><a href="tel:+{{ get_theme_setting('mobile') }}">{{ get_theme_setting('mobile') }}</a></li>
            <li><i class="fa-solid fa-location-dot"></i>{{ get_theme_setting('address') }}</li>
          </ul>
        </div>
      </div>
      <div class="td_footer_col">
        <div class="td_footer_widget">
          <h2 class="td_footer_widget_title td_fs_32 td_white_color td_medium td_mb_30">Navigate</h2>
          <ul class="td_footer_widget_menu">
            <li><a href="/">Home</a></li>
            <li><a href="/about-us">About</a></li>
            <li><a href="/contact">Contact</a></li>
            <li><a href="/privacy-policy">Privacy Policy</a></li>
          </ul>
        </div>
      </div>
      <div class="td_footer_col">
        <div class="td_footer_widget">
          <h2 class="td_footer_widget_title td_fs_32 td_white_color td_medium td_mb_30">Courses</h2>
          <ul class="td_footer_widget_menu">
            @foreach($courses as $course)
            <li><a href="{{ route('course-detail',$course->slug) }}">{{ $course->name }}</a></li>
            @endforeach
          </ul>
        </div>
      </div>
      <div class="td_footer_col">
        <div class="td_footer_widget">
          <h2 class="td_footer_widget_title td_fs_32 td_white_color td_medium td_mb_30">Subscribe Now</h2>
          <div class="td_newsletter td_style_1">
            <p class="td_mb_20 td_opacity_7">Far far away, behind the word mountains, far from the Consonantia.</p>
            <form action="#" class="td_newsletter_form">
              <input type="email" class="td_newsletter_input" placeholder="Email address">
              <button type="submit" class="td_btn td_style_1 td_radius_30 td_medium">
                <span class="td_btn_in td_white_color td_accent_bg">
                  <span>Subscribe</span>
                </span>             
              </button>
            </form>
          </div>
          <div class="td_footer_social_btns td_fs_20">
            <a href="{{ get_theme_setting('facebook') }}" class="td_center">
              <i class="fa-brands fa-facebook-f"></i>
            </a>
            <a href="{{ get_theme_setting('twitter') }}" class="td_center">
              <i class="fa-brands fa-x-twitter"></i>
            </a>
            <a href="{{ get_theme_setting('instagram') }}" class="td_center">
              <i class="fa-brands fa-instagram"></i>
            </a>
            <a href="{{ get_theme_setting('copyright') }}" class="td_center">
              <i class="fa-brands fa-pinterest-p"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="td_footer_bottom td_fs_18">
    <div class="container">
      <div class="td_footer_bottom_in">
        <p class="td_copyright mb-0">© {{ date("Y") }} - {{ get_theme_setting('copyright') }}</p>
        <ul class="td_footer_widget_menu">
          <li><a href="{{ url('term-condition') }}"> Terms & Conditions</a></li>
          <li><a href="{{ url('privacy-policy') }}">Privacy & Policy</a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>
<!-- End Footer Section -->
<!-- Start Scroll Up Button -->
<div class="td_scrollup">
  <i class="fa-solid fa-arrow-up"></i>
</div>
<!-- End Scroll Up Button -->

