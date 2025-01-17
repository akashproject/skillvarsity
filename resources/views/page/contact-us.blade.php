@extends('layouts.main')
    @section('content')
<!-- Start Contact Section -->
    <section>
      <div class="td_height_40 td_height_lg_80"></div>
      <div class="container">
        <div class="row">
          <div class="col-xxl-10 offset-xxl-1">
            <div class="row align-items-center td_gap_y_40">
              <div class="col-lg-7">
                <div class="td_section_heading_left">
                  <p class="td_section_subtitle_up td_fs_18 td_semibold td_spacing_1 td_mb_10 text-uppercase td_accent_color"> Contact Us</p>
                  <h2 class="td_section_title td_fs_48 mb-3">Send Your Message </h2>
                </div>
                <form action="{{ route('save-contact') }}" method="post">
                  {{ csrf_field() }}
                  @if(session()->has('message'))
                    <div class="alert alert-success">
                      {{ session()->get('message') }}
                    </div>
                  @endif
                  <div class="row td_mb_10 td_row_gap_16">
                    <div class="col-md-6">
                      <input type="text" name="contact_first_name" class="td_form_field_2 td_mb_16" placeholder="First name">
                    </div>
                    <div class="col-md-6">
                      <input type="text" name="contact_last_name" class="td_form_field_2 td_mb_16" placeholder="Last name">
                    </div>
                    <div class="col-lg-12">
                      <input type="text" name="contact_email" class="td_form_field_2 td_mb_16" placeholder="Enter Your Email">
                    </div>
                    <div class="col-lg-12">
                      <input type="text" name="contact_subject" class="td_form_field_2 td_mb_16" placeholder="Enter Your Subject">
                    </div>
                    <div class="col-lg-12">
                      <textarea name="contact_message" class="td_form_field_2 td_mb_16" placeholder="Enter Your Message"></textarea>
                    </div>
                    <div class="row align-items-center td_row_reverse_lg td_gap_y_20">
                      <div class="col-lg-6 text-center-lg">
                        
                      </div>
                      <div class="col-lg-6">
                        <button class="td_btn td_style_1 td_radius_30 td_medium w-100">
                          <span class="td_btn_in td_white_color td_accent_bg">
                            <span>Place Order</span>
                          </span>             
                        </button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <div class="col-xl-4 offset-xl-1 col-lg-5">
                <div class="td_contact_info">
                  <div class="td_section_heading td_style_2 td_mb_20">
                    <h2 class="td_contact_info_title td_fs_36 mb-0">HO Office Address</h2>
                  </div>
                  <div class="td_mb_40">
                    <p class="td_fs_18 td_heading_color td_medium td_mb_10">{{ get_theme_setting('address') }}</p>
                    <p class="td_fs_18 td_heading_color td_medium td_mb_10 td_opacity_7">
                      <a href="tel:{{ get_theme_setting('mobile') }}" class="text-black" >{{ get_theme_setting('mobile') }}</a>
                    </p>
                    <p class="td_fs_18 td_heading_color td_medium mb-0 td_opacity_7">
                      <a href="mailto:{{ get_theme_setting('email') }}">{{ get_theme_setting('email') }}</a>
                    </p>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="td_height_120 td_height_lg_80"></div>
      <div class="td_map">
        <iframe id="map" src="{{ get_theme_setting('gmap') }}" allowfullscreen=""></iframe>
      </div>
    </section>
    <!-- End Contact Section -->
    @endsection