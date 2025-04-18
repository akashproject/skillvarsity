@extends('layouts.main')
    @section('content')
    <section class="td_page_heading td_center td_bg_filed td_hobble" data-src="{{ url('img/others/page_heading_bg.jpg') }}" style="background-image: url(&quot;/assets/frontend/frontend/img/others/page_heading_bg.jpg&quot;);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                  <div class="td_page_heading_in">
                    <ol class="breadcrumb m-0 td_fs_20 td_opacity_8 td_semibold ">
                        <li class="breadcrumb-item"><a href="{{ route('website') }}">Home</a></li>
                        <li class="breadcrumb-item active">{{ $contentMain->name}}</li>
                    </ol>
                    <h1 class="td_mb_10">5,000+ students found their dream jobs with Skillvarsity <span style="color: #890c25;">You could be next!</span></h1>
                    <div class="mb-0">{{ $contentMain->excerpt}}</div>
                  </div>
                </div>
            
            </div>    
        </div>

        <div class="td_page_heading_shape_1 position-absolute td_hover_layer_3"></div>
        <div class="td_page_heading_shape_2 position-absolute td_hover_layer_5"></div>
        <div class="td_page_heading_shape_3 position-absolute">
            <img src="{{ url('img/others/page_heading_shape_3.svg')}}" alt="">
        </div>
        <div class="td_page_heading_shape_4 position-absolute">
            <img src="{{ url('img/others/page_heading_shape_4.svg')}}" alt="">
        </div>
        <div class="td_page_heading_shape_5 position-absolute">
            <img src="{{ url('img/others/page_heading_shape_5.svg')}}" alt="">
        </div>
        <div class="td_page_heading_shape_6 position-absolute td_hover_layer_3"></div>
    </section>
    <!-- Start Courses Grid View -->
     <!-- Start About Section -->
    <section style="background: #fff2e8;">
      <div class="td_height_120 td_height_lg_80"></div>
      <div class="container">
        <div class="row align-items-center td_gap_y_40">
          <div class="col-lg-6">
            <div class="td_image_box td_style_6 td_type_1">
              <div class="td_image_box_img_1 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
                <img src="/assets/frontend/img/home_7/about_img_1.jpg" alt="">
              </div>
              <div class="td_image_box_img_2 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
                <div class="td_image_box_img_2_in">
                  <img src="/assets/frontend/img/home_7/about_img_2.jpg" alt="">
                  <a href="https://www.youtube.com/embed/rRid6GCJtgc" class="td_video_open">
                    <span class="td_player_btn td_center">
                      <span></span>
                    </span>
                  </a>
                </div>
              </div>
              <div class="td_image_box_shape_1 position-absolute"></div>
              <div class="td_image_box_shape_2 position-absolute">
                <img src="/assets/frontend/img/home_5/about_shape_2.svg" alt="">
              </div>
              <div class="td_image_box_shape_3 position-absolute td_accent_color">
                <img src="/assets/frontend/img/home_7/about_shape_3.svg" alt="">
              </div>
            </div>
          </div>
          <div class="col-lg-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
            <div class="td_section_heading td_style_1 td_mb_30">
              <p class="td_section_subtitle_up td_fs_18 td_medium td_spacing_1 td_mb_10 td_accent_color">About us</p>
              <h2 class="td_section_title td_fs_48 td_mb_30">Providing you with the best motivational courses</h2>
              <h3 class="td_fs_24 td_medium td_mb_30 fst-italic">“We’ve 20 years Advance it Motivational  Services Academy Courses Experience.”</h3>
              <p class="td_section_subtitle td_fs_18 mb-0">Far far away, behind the word mountains, far from the Consonantia, there live the blind texts. Separated they marks grove right at the coast of the Semantics a large language ocean</p>
            </div>
            <div class="td_mb_40">
              <ul class="td_list td_style_2 td_type_1 td_fs_24 td_medium td_heading_color td_mp_0">
                <li>
                  <svg class="td_heading_color" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M21.668 3.44522C19.7068 2.31076 17.4299 1.66146 15.0013 1.66146C7.6375 1.66146 1.66797 7.631 1.66797 14.9948C1.66797 22.3586 7.6375 28.3281 15.0013 28.3281C22.3651 28.3281 28.3346 22.3586 28.3346 14.9948C28.3346 14.0816 28.2428 13.1898 28.0679 12.3281" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                    <path d="M9.66797 15.6641C9.66797 15.6641 11.668 15.6641 14.3346 20.3307C14.3346 20.3307 21.7464 8.10851 28.3346 5.66406" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>                                       
                  Motivate is your  Mind Our Motivational Courses
                </li>
                <li>
                  <svg class="td_heading_color" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M21.668 3.44522C19.7068 2.31076 17.4299 1.66146 15.0013 1.66146C7.6375 1.66146 1.66797 7.631 1.66797 14.9948C1.66797 22.3586 7.6375 28.3281 15.0013 28.3281C22.3651 28.3281 28.3346 22.3586 28.3346 14.9948C28.3346 14.0816 28.2428 13.1898 28.0679 12.3281" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                    <path d="M9.66797 15.6641C9.66797 15.6641 11.668 15.6641 14.3346 20.3307C14.3346 20.3307 21.7464 8.10851 28.3346 5.66406" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
                  Embrace & Enhance Customer Care Services
                </li>
              </ul>
            </div>
            <div class="td_btns_group">
              <a href="courses-grid-with-sidebar.html" class="td_btn td_style_1 td_type_2 td_radius_30 td_medium">
                <span class="td_btn_in td_white_color td_accent_bg">
                  <span>Find Courses</span>
                  <span class="td_btn_icon td_center td_accent_bg td_white_color">
                    <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M1.24811 1.49512C1.24811 1.49512 8.74803 7.01878 8.74805 8.99518C8.74807 10.9716 1.24805 16.4951 1.24805 16.4951" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>                    
                  </span>
                </span>             
              </a>
              <a href="https://www.youtube.com/embed/rRid6GCJtgc" class="td_player_btn_wrap td_type_1 td_video_open td_medium td_heading_color">
                <span class="td_player_btn td_center">
                  <span></span>
                </span>
                <span class="td_play_btn_text">Watch Intro</span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="td_height_120 td_height_lg_80"></div>
    </section>
    <!-- End About Section -->
    <!-- Start Feature Section -->
    <div class="td_heading_bg">
      <div class="td_height_80 td_height_lg_80"></div>
      <div class="container">
        <div class="row td_gap_y_30">
          <div class="col-xl-3 col-md-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
            <div class="td_iconbox td_style_9">
              <div class="td_iconbox_icon td_center td_accent_bg td_radius_10">
                <img src="/assets/frontend/img/home_7/feature_icon_1.svg" alt="">
              </div>
              <div class="td_iconbox_right">
                <h3 class="td_iconbox_title td_white_color td_fs_20 td_mb_8">Commitment</h3>
                <p class="td_iconbox_subtitle mb-0 td_fs_14 td_white_color td_opacity_7">Far far away, behind the word mountains, far from the</p>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.25s">
            <div class="td_iconbox td_style_9">
              <div class="td_iconbox_icon td_center td_accent_bg td_radius_10">
                <img src="/assets/frontend/img/home_7/feature_icon_2.svg" alt="">
              </div>
              <div class="td_iconbox_right">
                <h3 class="td_iconbox_title td_white_color td_fs_20 td_mb_8">Professional</h3>
                <p class="td_iconbox_subtitle mb-0 td_fs_14 td_white_color td_opacity_7">Far far away, behind the word mountains, far from the</p>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
            <div class="td_iconbox td_style_9">
              <div class="td_iconbox_icon td_center td_accent_bg td_radius_10">
                <img src="/assets/frontend/img/home_7/feature_icon_3.svg" alt="">
              </div>
              <div class="td_iconbox_right">
                <h3 class="td_iconbox_title td_white_color td_fs_20 td_mb_8">Experiences</h3>
                <p class="td_iconbox_subtitle mb-0 td_fs_14 td_white_color td_opacity_7">Far far away, behind the word mountains, far from the</p>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.35s">
            <div class="td_iconbox td_style_9">
              <div class="td_iconbox_icon td_center td_accent_bg td_radius_10">
                <img src="/assets/frontend/img/home_7/feature_icon_4.svg" alt="">
              </div>
              <div class="td_iconbox_right">
                <h3 class="td_iconbox_title td_white_color td_fs_20 td_mb_8">Personal Motivate</h3>
                <p class="td_iconbox_subtitle mb-0 td_fs_14 td_white_color td_opacity_7">Far far away, behind the word mountains, far from the</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="td_height_80 td_height_lg_80"></div>
    </div>
    <!-- End Feature Section -->
    <!-- Start Why Choose Us Section -->
    <section class="td_gray_bg_6">
      <div class="td_height_120 td_height_lg_80"></div>
      <div class="container">
        <div class="row align-items-center td_gap_y_40">
          <div class="col-lg-6 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
            <div class="td_pr_20">
              <div class="td_section_heading td_style_1 td_mb_30">
                <p class="td_section_subtitle_up td_fs_18 td_medium td_spacing_1 td_mb_10 td_accent_color">Why Choose us</p>
                <h2 class="td_section_title td_fs_48 td_mb_24">You can learn new skills any time and at anywhere</h2>
                <p class="td_section_subtitle td_fs_18 mb-0">Far far away, behind the word mountains, far from the Consonantia, there live the blind texts. Separated.</p>
              </div>
              <div class="td_mb_40">
                <ul class="td_list td_style_2 td_fs_20 td_medium td_heading_color td_mp_0">
                  <li>
                    <svg class="td_accent_color" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <circle cx="12" cy="12" r="12" fill="currentColor"/>
                      <path d="M7.5 14.1136C7.5 14.1136 8.52273 14.1136 9.88636 16.5C9.88636 16.5 13.6765 10.25 17.0455 9" stroke="white" stroke-width="0.8" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    Proven Track Record of Success
                  </li>
                  <li>
                    <svg class="td_accent_color" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <circle cx="12" cy="12" r="12" fill="currentColor"/>
                      <path d="M7.5 14.1136C7.5 14.1136 8.52273 14.1136 9.88636 16.5C9.88636 16.5 13.6765 10.25 17.0455 9" stroke="white" stroke-width="0.8" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    Engaging and Dynamic Presentation Style
                  </li>
                  <li>
                    <svg class="td_accent_color" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <circle cx="12" cy="12" r="12" fill="currentColor"/>
                      <path d="M7.5 14.1136C7.5 14.1136 8.52273 14.1136 9.88636 16.5C9.88636 16.5 13.6765 10.25 17.0455 9" stroke="white" stroke-width="0.8" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    Customized Content to Meet Your Needs
                  </li>
                  <li>
                    <svg class="td_accent_color" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <circle cx="12" cy="12" r="12" fill="currentColor"/>
                      <path d="M7.5 14.1136C7.5 14.1136 8.52273 14.1136 9.88636 16.5C9.88636 16.5 13.6765 10.25 17.0455 9" stroke="white" stroke-width="0.8" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    Practical Tools and Strategies
                  </li>
                </ul>
              </div>
              <a href="courses-grid-with-sidebar.html" class="td_btn td_style_1 td_type_2 td_radius_30 td_medium">
                <span class="td_btn_in td_white_color td_accent_bg">
                  <span>Find Courses</span>
                  <span class="td_btn_icon td_center td_accent_bg td_white_color">
                    <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M1.24811 1.49512C1.24811 1.49512 8.74803 7.01878 8.74805 8.99518C8.74807 10.9716 1.24805 16.4951 1.24805 16.4951" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>                    
                  </span>
                </span>             
              </a>
            </div>
          </div>
          <div class="col-lg-6 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
            <div class="td_pl_65">
              <img src="/assets/frontend/img/home_7/why_chose_us_thumb.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
      <div class="td_height_120 td_height_lg_80"></div>
    </section>
    <!-- End Why Choose Us Section -->
    <!-- Start Instructor Section -->
    <section>
      <div class="td_height_112 td_height_lg_75"></div>
      <div class="container">
        <div class="td_section_heading td_style_1 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
          <p class="td_section_subtitle_up td_fs_18 td_medium td_spacing_1 td_mb_10 td_accent_color">Expert Instructor</p>
          <h2 class="td_section_title td_fs_48 mb-0">Meet our International Quran <br>Hafez Instructor </h2>
        </div>
        <div class="td_height_50 td_height_lg_50"></div>
        <div class="row td_gap_y_30">
          <div class="col-xl-3 col-sm-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
            <div class="td_team td_style_5 td_type_1 text-center">
              <div class="td_team_thumb d-block td_mb_16">
                <img src="/assets/frontend/img/home_7/team_member_1.jpg" alt="" class="w-100">
                <div class="td_team_social_list td_fs_14 td_white_color">
                  <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                  <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                  <a href="#"><i class="fa-brands fa-instagram"></i></a>
                  <a href="#"><i class="fa-brands fa-pinterest-p"></i></a>
                </div>
              </div>
              <div class="td_team_info">
                <div class="td_team_info_in">
                  <h3 class="td_team_member_title td_fs_20 mb-0">
                    <a href="team-member-details.html">Hafiz Din Mohammed Islam</a>
                  </h3>
                  <p class="td_team_member_designation mb-0 td_fs_16 td_opacity_6 td_heading_color">Teacher</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.35s">
            <div class="td_team td_style_5 td_type_1 text-center">
              <div class="td_team_thumb d-block td_mb_16">
                <img src="/assets/frontend/img/home_7/team_member_2.jpg" alt="" class="w-100">
                <div class="td_team_social_list td_fs_14 td_white_color">
                  <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                  <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                  <a href="#"><i class="fa-brands fa-instagram"></i></a>
                  <a href="#"><i class="fa-brands fa-pinterest-p"></i></a>
                </div>
              </div>
              <div class="td_team_info">
                <div class="td_team_info_in">
                  <h3 class="td_team_member_title td_fs_20 mb-0">
                    <a href="team-member-details.html">Hafiza Dina Asmaul Islam</a>
                  </h3>
                  <p class="td_team_member_designation mb-0 td_fs_16 td_opacity_6 td_heading_color">Teacher</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
            <div class="td_team td_style_5 td_type_1 text-center">
              <div class="td_team_thumb d-block td_mb_16">
                <img src="/assets/frontend/img/home_7/team_member_3.jpg" alt="" class="w-100">
                <div class="td_team_social_list td_fs_14 td_white_color">
                  <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                  <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                  <a href="#"><i class="fa-brands fa-instagram"></i></a>
                  <a href="#"><i class="fa-brands fa-pinterest-p"></i></a>
                </div>
              </div>
              <div class="td_team_info">
                <div class="td_team_info_in">
                  <h3 class="td_team_member_title td_fs_20 mb-0">
                    <a href="team-member-details.html">Alfaqul Mamunur Islam</a>
                  </h3>
                  <p class="td_team_member_designation mb-0 td_fs_16 td_opacity_6 td_heading_color">Teacher</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.45s">
            <div class="td_team td_style_5 td_type_1 text-center">
              <div class="td_team_thumb d-block td_mb_16">
                <img src="/assets/frontend/img/home_7/team_member_4.jpg" alt="" class="w-100">
                <div class="td_team_social_list td_fs_14 td_white_color">
                  <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                  <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                  <a href="#"><i class="fa-brands fa-instagram"></i></a>
                  <a href="#"><i class="fa-brands fa-pinterest-p"></i></a>
                </div>
              </div>
              <div class="td_team_info">
                <div class="td_team_info_in">
                  <h3 class="td_team_member_title td_fs_20 mb-0">
                    <a href="team-member-details.html">Hafiza Rehnuma Annesa</a>
                  </h3>
                  <p class="td_team_member_designation mb-0 td_fs_16 td_opacity_6 td_heading_color">Teacher</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="td_height_60 td_height_lg_40"></div>
        <div class="text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <a href="team-members.html" class="td_btn td_style_1 td_type_2 td_radius_30 td_medium">
            <span class="td_btn_in td_white_color td_accent_bg">
              <span>View All</span>
              <span class="td_btn_icon td_center td_accent_bg td_white_color">
                <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M1.24811 1.49512C1.24811 1.49512 8.74803 7.01878 8.74805 8.99518C8.74807 10.9716 1.24805 16.4951 1.24805 16.4951" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>                    
              </span>
            </span>             
          </a>
        </div>
      </div>
      <div class="td_height_120 td_height_lg_80"></div>
    </section>
    <!-- End Instructor Section -->
    <!-- Start Accordion Section -->
    <section class="container-fluid">
      <div class="td_faq_1">
        <div class="td_faq_1_left wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
          <div class="td_faq_1_img td_bg_filed" data-src="/assets/frontend/img/home_7/faq_img.jpg"></div>
        </div>
        <div class="td_faq_1_right wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
          <div class="td_section_heading td_style_1">
            <p class="td_section_subtitle_up td_fs_18 td_medium td_spacing_1 td_mb_10 td_accent_color">Faqs</p>
          </div>
          <div class="td_accordians td_style_1 td_type_2 td_mb_40">
            <div class="td_accordian">
              <div class="td_accordian_head">
                <h2 class="td_accordian_title td_fs_24">How this Educve works?</h2>
                <span class="td_accordian_toggle"></span>
              </div>
              <div class="td_accordian_body td_fs_18">
                <p>We want every employee and trade partner to feel that they are part of a common good and cohesive team. We help our teams form stronger relationships with trade partners by emphasizing people.</p>
              </div>
            </div><!-- .td_accordian -->
            <div class="td_accordian active">
              <div class="td_accordian_head">
                <h2 class="td_accordian_title td_fs_24">How can i make Cancel here?</h2>
                <span class="td_accordian_toggle"></span>
              </div>
              <div class="td_accordian_body td_fs_18">
                <p>We want every employee and trade partner to feel that they are part of a common good and cohesive team. We help our teams form stronger relationships with trade partners by emphasizing people.</p>
              </div>
            </div><!-- .td_accordian -->
            <div class="td_accordian ">
              <div class="td_accordian_head">
                <h2 class="td_accordian_title td_fs_24">How to get an quote?</h2>
                <span class="td_accordian_toggle"></span>
              </div>
              <div class="td_accordian_body td_fs_18">
                <p>We want every employee and trade partner to feel that they are part of a common good and cohesive team. We help our teams form stronger relationships with trade partners by emphasizing people.</p>
              </div>
            </div><!-- .td_accordian -->
          </div>
          <a href="contact.html" class="td_btn td_style_2 td_type_2 td_heading_color td_medium td_mb_10">
            Get In Touch
            <i>
              <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15.1575 4.34302L3.84375 15.6567" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M15.157 11.4142C15.157 11.4142 16.0887 5.2748 15.157 4.34311C14.2253 3.41142 8.08594 4.34314 8.08594 4.34314" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg>  
              <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15.1575 4.34302L3.84375 15.6567" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M15.157 11.4142C15.157 11.4142 16.0887 5.2748 15.157 4.34311C14.2253 3.41142 8.08594 4.34314 8.08594 4.34314" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg>
            </i>
          </a>
        </div>
      </div>
    </section>
    <!-- End Accordion Section -->
    <!-- Start Brands Section -->
    <div class="td_height_120 td_height_lg_80"></div>
    <div class="container wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
      <div class="td_slider td_style_1 td_slider_gap_24">
        <div class="td_slider_container" data-autoplay="0" data-loop="1" data-speed="800" data-center="0" data-variable-width="0" data-slides-per-view="responsive" data-xs-slides="2" data-sm-slides="3" data-md-slides="4" data-lg-slides="5" data-add-slides="6">
          <div class="td_slider_wrapper">
            <div class="td_slide">
              <div class="td_brand td_style_1">
                <img src="/assets/frontend/img/home_7/brand_1.svg" alt="">
              </div>
            </div>
            <div class="td_slide">
              <div class="td_brand td_style_1">
                <img src="/assets/frontend/img/home_7/brand_2.svg" alt="">
              </div>
            </div>
            <div class="td_slide">
              <div class="td_brand td_style_1">
                <img src="/assets/frontend/img/home_7/brand_3.svg" alt="">
              </div>
            </div>
            <div class="td_slide">
              <div class="td_brand td_style_1">
                <img src="/assets/frontend/img/home_7/brand_4.svg" alt="">
              </div>
            </div>
            <div class="td_slide">
              <div class="td_brand td_style_1">
                <img src="/assets/frontend/img/home_7/brand_5.svg" alt="">
              </div>
            </div>
            <div class="td_slide">
              <div class="td_brand td_style_1">
                <img src="/assets/frontend/img/home_7/brand_6.svg" alt="">
              </div>
            </div>
          </div>
        </div>
        <!-- <div class="td_height_50 td_height_lg_40"></div>
        <div class="td_pagination td_style_1"></div> -->
      </div>
    </div>
    <div class="td_height_120 td_height_lg_80"></div>
    <!-- End Brands Section -->
    <!-- Start Testimonials Section -->
    <section class="td_heading_bg">
      <div class="td_height_112 td_height_lg_75"></div>
      <div class="container">
        <div class="td_section_heading td_style_1 td_type_1 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
          <div class="td_section_heading_left">
            <p class="td_section_subtitle_up td_fs_18 td_semibold td_spacing_1 td_mb_10 td_white_color">Testimonials</p>
            <h2 class="td_section_title td_fs_48 mb-0 td_white_color">What Student Says Our <br>Learning Services</h2>
          </div>
          <div class="td_section_heading_right">
            <p class="td_section_subtitle td_fs_18 mb-0 td_white_color td_opacity_9">Platforms like Coursera, edX, and university-specific online programs offer flexibility</p>
          </div>
        </div>
        <div class="td_height_50 td_height_lg_50"></div>
        <div class="row align-items-center td_gap_y_40 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="col-xl-5 col-lg-6">
            <div class="td_image_box td_style_11 position-relative">
              <img src="/assets/frontend/img/home_7/testimonial_img_1.png" alt="">
              <div class="td_image_box_text td_heading_bg text-center">
                <h3 class="td_fs_20 td_white_color mb-0">Marvin Celina's</h3>
                <p class="mb-0 td_white_color td_opacity_7 td_fs_14">Businesswoman</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 offset-xl-1">
            <div class="td_testimonial td_style_2">
              <div class="td_mb_40">
                <svg width="65" height="46" viewBox="0 0 65 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path opacity="0.5" d="M13.9286 26.6H1V1H26.8571V27.362L17.956 45H6.26764L14.8213 28.0505L15.5534 26.6H13.9286ZM51.0714 26.6H38.1429V1H64V27.362L55.0988 45H43.4105L51.9642 28.0505L52.6962 26.6H51.0714Z" stroke="white" stroke-width="2"/>
                </svg> 
              </div> 
              <h3 class="td_white_color td_fs_24 td_semibold td_mb_30 fst-italic">I’m Satisfied with your Motivational Speaker !</h3>
              <blockquote class="td_testimonial_text td_fs_20 td_medium td_opacity_6 td_mb_40 td_white_color">The pandemic has accelerated the shift to online and hybrid learning models. Platforms like Coursera, edX, and university-specific online programs offer flexibility and accessibility to a wider audience.</blockquote>
              <div class="td_btns_group">
                <a href="signup.html" class="td_btn td_style_1 td_radius_30 td_medium">
                  <span class="td_btn_in td_white_color td_accent_bg">
                    <span>Get Feedback</span>
                    <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M15.1575 4.34302L3.84375 15.6567" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M15.157 11.4142C15.157 11.4142 16.0887 5.2748 15.157 4.34311C14.2253 3.41142 8.08594 4.34314 8.08594 4.34314" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg> 
                  </span>             
                </a>
                <div class="td_avatars_wrap">
                  <div class="td_avatars">
                    <div><img src="/assets/frontend/img/avatar_1.png" alt=""></div>
                    <div><img src="/assets/frontend/img/avatar_2.png" alt=""></div>
                    <div><img src="/assets/frontend/img/avatar_1.png" alt=""></div>
                    <div><img src="/assets/frontend/img/avatar_2.png" alt=""></div>
                    <div>
                      <img src="/assets/frontend/img/avatar_3.png" alt="">
                      <i class="fa-solid fa-plus"></i>
                    </div>
                  </div>
                  <div>
                    <h3 class="mb-0 td_fs_16 td_medium td_white_color">6k Satisfied <br>Clients</h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="td_height_120 td_height_lg_80"></div>
    </section>
    <!-- End Testimonials Section -->
    @endsection