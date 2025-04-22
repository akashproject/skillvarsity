@extends('layouts.main')
@section('content')
 <!-- Start Hero Section -->
    <section class="td_hero td_style_3 td_center td_hobble">
      <div class="container">
        <div class="td_hero_text wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
          <p class="td_hero_subtitle_up td_fs_18 td_accent_color td_spacing_1 td_semibold text-uppercase td_mb_14">100 % Quality Qurantee</p>
          <h1 class="td_hero_title td_fs_64 td_mb_20">Build The Skills with {{ $contentMain->name }} </h1>
          <p class="td_hero_subtitle td_fs_18 td_heading_color td_opacity_7 td_mb_30">{{$contentMain->exerpt }}</p>
          <div class="td_btns_group">
            <a href="{{ url('courses') }}" class="td_btn td_style_1 td_radius_30 td_medium">
              <span class="td_btn_in td_white_color td_accent_bg">
                <span>Explore All Courses</span>
                <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M15.1575 4.34302L3.84375 15.6567" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M15.157 11.4142C15.157 11.4142 16.0887 5.2748 15.157 4.34311C14.2253 3.41142 8.08594 4.34314 8.08594 4.34314" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg> 
              </span>             
            </a>
          </div>
        </div>
      </div>
      <div class="td_hero_img_box">
        <img src="{{ url('assets/frontend/img/university-banner.gif') }}" alt="" class="td_hero_img_1 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
        <div class="td_hero_shape_1 td_hover_layer_3 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s"></div>
        <div class="td_hero_shape_2">
          <img src="{{ url('assets/frontend/img/home_3/hero_shape_1.svg') }}" alt="" class="td_hover_layer_5">
        </div>
      </div>
      <div class="td_hero_shape_3 td_hover_layer_3"></div>
      <div class="td_hero_shape_4"><img src="{{ url('assets/frontend/img/home_3/hero_shape_2.svg') }}" alt=""></div>
      <div class="td_hero_shape_5"><img src="{{ url('assets/frontend/img/home_3/hero_shape_3.svg') }}" alt=""></div>
      <div class="td_hero_shape_6 td_hover_layer_3"><img src="{{ url('assets/frontend/img/home_3/hero_shape_4.svg') }}" alt=""></div>
      <div class="td_hero_shape_7 td_hover_layer_5"></div>
    </section>
    <!-- End Hero Section -->
    <!-- Start Rate Section -->
    <section class="td_heading_bg td_rate_section td_type_1">
      <div class="td_rate_heading td_fs_20 td_semibold td_white_color">
        Excellent Rated On Trustpilot
        <div class="td_rating_wrap">
          <div class="td_rating" data-rating="5">
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i>
            <div class="td_rating_percentage">
              <i class="fa-solid fa-star fa-fw"></i>
              <i class="fa-solid fa-star fa-fw"></i>
              <i class="fa-solid fa-star fa-fw"></i>
              <i class="fa-solid fa-star fa-fw"></i>
              <i class="fa-solid fa-star fa-fw"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="td_rate_feature_list_wrap">
        <div class="td_moving_box_wrap">
          <div class="td_moving_box_in">
            <div class="td_moving_box">
              <ul class="td_rate_feature_list td_mp_0">
                <li>
                  <div class="td_rate_feature_icon td_center td_white_bg">
                    <img src="{{ url('assets/frontend/img/home_2/cs_rate_feature_icon_1.svg') }}" alt="">
                  </div>
                  <div class="td_rate_feature_right">
                    <h3 class="td_fs_24 td_semibold td_white_color td_mb_4">30K+ Online Courses</h3>
                    <p class="mb-0 td_white_color td_opacity_7">Solid Questions Solving & Fresh Topics</p>
                  </div>
                </li>
                <li>
                  <div class="td_rate_feature_icon td_center td_white_bg">
                    <img src="{{ url('assets/frontend/img/home_2/cs_rate_feature_icon_2.svg') }}" alt="">
                  </div>
                  <div class="td_rate_feature_right">
                    <h3 class="td_fs_24 td_semibold td_white_color td_mb_4">Expert Instructor</h3>
                    <p class="mb-0 td_white_color td_opacity_7">Learn and More expertise</p>
                  </div>
                </li>
                <li>
                  <div class="td_rate_feature_icon td_center td_white_bg">
                    <img src="{{ url('assets/frontend/img/home_2/cs_rate_feature_icon_3.svg') }}" alt="">
                  </div>
                  <div class="td_rate_feature_right">
                    <h3 class="td_fs_24 td_semibold td_white_color td_mb_4">Life time access</h3>
                    <p class="mb-0 td_white_color td_opacity_7">Behind the word mountains</p>
                  </div>
                </li>
                <li>
                  <div class="td_rate_feature_icon td_center td_white_bg">
                    <img src="{{ url('assets/frontend/img/home_2/cs_rate_feature_icon_4.svg') }}" alt="">
                  </div>
                  <div class="td_rate_feature_right">
                    <h3 class="td_fs_24 td_semibold td_white_color td_mb_4">Get Certificate</h3>
                    <p class="mb-0 td_white_color td_opacity_7">Behind the word mountains</p>
                  </div>
                </li>
              </ul>
            </div>
            <div class="td_moving_box">
              <ul class="td_rate_feature_list td_mp_0">
                <li>
                  <div class="td_rate_feature_icon td_center td_white_bg">
                    <img src="{{ url('assets/frontend/img/home_2/cs_rate_feature_icon_1.svg') }}" alt="">
                  </div>
                  <div class="td_rate_feature_right">
                    <h3 class="td_fs_24 td_semibold td_white_color td_mb_4">30K+ Online Courses</h3>
                    <p class="mb-0 td_white_color td_opacity_7">Solid Questions Solving & Fresh Topics</p>
                  </div>
                </li>
                <li>
                  <div class="td_rate_feature_icon td_center td_white_bg">
                    <img src="{{ url('assets/frontend/img/home_2/cs_rate_feature_icon_2.svg') }}" alt="">
                  </div>
                  <div class="td_rate_feature_right">
                    <h3 class="td_fs_24 td_semibold td_white_color td_mb_4">Expert Instructor</h3>
                    <p class="mb-0 td_white_color td_opacity_7">Learn and More expertise</p>
                  </div>
                </li>
                <li>
                  <div class="td_rate_feature_icon td_center td_white_bg">
                    <img src="{{ url('assets/frontend/img/home_2/cs_rate_feature_icon_3.svg') }}" alt="">
                  </div>
                  <div class="td_rate_feature_right">
                    <h3 class="td_fs_24 td_semibold td_white_color td_mb_4">Life time access</h3>
                    <p class="mb-0 td_white_color td_opacity_7">Behind the word mountains</p>
                  </div>
                </li>
                <li>
                  <div class="td_rate_feature_icon td_center td_white_bg">
                    <img src="{{ url('assets/frontend/img/home_2/cs_rate_feature_icon_4.svg') }}" alt="">
                  </div>
                  <div class="td_rate_feature_right">
                    <h3 class="td_fs_24 td_semibold td_white_color td_mb_4">Get Certificate</h3>
                    <p class="mb-0 td_white_color td_opacity_7">Behind the word mountains</p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Rate Section -->
     <!-- Start Courses Section -->
    <section>
      <div class="td_height_112 td_height_lg_75"></div>
      <div class="container">
        <div class="td_section_heading td_style_1 td_type_1 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
          <div class="td_section_heading_left">
            <p class="td_section_subtitle_up td_fs_18 td_semibold td_spacing_1 td_mb_10 text-uppercase td_accent_color">Our Latest courses</p>
            <h2 class="td_section_title td_fs_48 mb-0">Pick Our Latest Courses <br>and Build your Skills </h2>
          </div>
          <div class="td_section_heading_right">
            <p class="td_section_subtitle td_fs_18 td_mb_16 td_heading_color td_opacity_9">Far far away, behind the word mountains, far from the Conson antia, there live the blind texts. Separated they marks</p>
            
          </div>
        </div>
        <div class="td_height_40 td_height_lg_40"></div>
        <div class="row td_gap_y_30 td_row_gap_30 justified-center">
          @foreach($universityCourses as $value)
          <div class="col-lg-4 col-md-6">
            <div class="td_card td_style_3 d-block td_radius_10">
              <div class="row" style="margin-top: 6px;">
                <div class="col-8">
                  <a href="{{ route('course-detail',$value->slug) }}" class="td_card_thumb">
                    <img src="{{ url('assets/frontend/img/course/course-1.gif')}}" alt="">
                  </a>
                </div>
                <div class="col-4">
                  <span class="td_card_label td_accent_bg td_white_color">Advanced</span>
                </div>
              </div>
              <div class="td_card_info td_white_bg">
                <div class="td_card_info_in">
                  <ul class="td_card_meta td_mp_0 td_fs_18 td_medium td_heading_color">
                    <li>
                      <img src="{{ url('assets/frontend/img/icons/user_3.svg')}}" alt="">
                      <span class="td_opacity_7">{{ $value->number_of_enrolled }} Enrolled</span>
                    </li>
                    <li>
                      <img src="{{ url('assets/frontend/img/icons/book.svg')}}" alt="">
                      <span class="td_opacity_7">{{ $value->no_of_module }} Modules</span>
                    </li>
                  </ul>
                  <!-- <a href="courses-grid-with-sidebar.html" class="td_card_category td_fs_14 td_bold td_heading_color td_mb_14"><span>Data Analytics</span></a> -->
                  <h2 class="td_card_title td_fs_24 td_mb_16"><a href="{{ route('course-detail',$value->slug) }}">{{$value->name}}</a></h2>
                  <p class="td_card_subtitle td_heading_color td_opacity_7 td_mb_20">{{$value->excerpt}}</p>
                  <div class="td_card_review">
                    <div class="td_rating" data-rating="4.5">
                      <i class="fa-regular fa-star"></i>
                      <i class="fa-regular fa-star"></i>
                      <i class="fa-regular fa-star"></i>
                      <i class="fa-regular fa-star"></i>
                      <i class="fa-regular fa-star"></i>
                      <div class="td_rating_percentage">
                        <i class="fa-solid fa-star fa-fw"></i>
                        <i class="fa-solid fa-star fa-fw"></i>
                        <i class="fa-solid fa-star fa-fw"></i>
                        <i class="fa-solid fa-star fa-fw"></i>
                        <i class="fa-solid fa-star fa-fw"></i>
                      </div>
                    </div>
                    <span class="td_heading_color td_opacity_5 td_medium">(4.5/5 Ratings)</span>
                  </div>
                  <div class="td_card_btn">
                    <a href="#lead-generate-popup" class="td_btn td_style_1 td_radius_10 td_medium open-popup-link">
                      <span class="td_btn_in td_white_color td_accent_bg">
                        <span>Enroll Now</span>
                      </span>             
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
      <div class="td_height_120 td_height_lg_80"></div>
    </section>
    <!-- End Courses Section -->
    <!-- Start About Section -->
    <section class="td_shape_section_9">
      <div class="td_shape_position_1 position-absolute">
        <img src="{{ url('assets/frontend/img/home_3/about_shape_1.svg') }}" alt="">
      </div>
      <div class="td_shape_position_2 position-absolute">
        <img src="{{ url('assets/frontend/img/home_3/about_shape_2.svg') }}" alt="">
      </div>
      <div class="td_height_112 td_height_lg_75"></div>
      <div class="container">
        <div class="row td_gap_y_40 align-items-center">
          <div class="col-lg-6">
            <div class="td_image_box td_style_3">
              <div class="td_image_box_img_1 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.25s">
                <img src="{{ url('assets/frontend/img/home_3/about_img_1.jpg') }}" alt="" class="td_radius_10">
              </div>
              <div class="td_image_box_img_2 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
                <img src="{{ url('assets/frontend/img/home_3/about_img_2.jpg') }}" alt="" class="td_radius_10">
              </div>
              <div class="td_review_box td_heading_bg text-center td_center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.35s">
                <div class="td_review_box_in">
                  <img src="{{ url('assets/frontend/img/home_3/review_img.png') }}" alt="">
                  <h3 class="td_fs_32 td_medium td_white_color">30k+</h3>
                  <p class="mb-0 td_light td_opacity_7 td_white_color">Positive Reviews</p>
                </div>
              </div>
              <div class="td_sign_box wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.4s">
                <div class="td_sign_box_in">
                  <img src="{{ url('assets/frontend/img/home_3/sign.svg') }}" alt="">
                  <h3 class="td_fs_20 td_semibold mb-0">Jesika Rehman Roy</h3>
                  <p class="mb-0 td_heading_color td_opacity_6">Marketing Instructor</p>
                </div>
                <svg width="220" height="209" viewBox="0 0 220 209" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M90.7847 61.3658C91.6024 51.6359 99.3778 44.2904 108.872 44.2904H109.432L110.576 44.3708L199.107 52.276L108.927 0.757812L0 62.9865L108.927 125.219L174.727 87.6264L107.349 81.6096C97.3438 80.7169 89.9157 71.6346 90.7847 61.3658Z" fill="#00001B"/>
                  <path d="M219.905 71.3829C219.427 68.7423 217.086 66.3805 214.452 66.154L109.454 56.7779C106.028 56.4523 103.168 59.0162 102.88 62.4429C102.535 65.8041 104.996 68.8134 108.399 69.1914L207.853 78.0735V121.651C207.766 123.846 208.902 125.914 210.817 127.039C212.731 128.162 215.116 128.162 217.032 127.039C218.947 125.914 220.083 123.846 219.994 121.651V72.3617C219.994 72.0323 219.964 71.7048 219.905 71.3829Z" fill="#00001B"/>
                  <path d="M111.88 137.797C110.057 138.85 107.799 138.85 105.976 137.797L52.0037 106.964L14.5195 155.632C64.6571 160.466 97.5725 194.278 109.222 208.324C121.927 194.628 157.626 160.743 203.851 155.686L167.923 105.781L111.88 137.797Z" fill="#00001B"/>
                </svg>
                <div class="td_award_box_icon td_center">
                  <img src="{{ url('assets/frontend/img/home_2/cs_award_box_icon.svg') }}" alt="">
                </div>
              </div>
            </div>
          </div>
          {!! $contentMain->description !!}
        </div>
      </div>
      <div class="td_height_120 td_height_lg_80"></div>
    </section>
    <!-- End About Section -->
    <!-- Start Category Section -->
    <section class="td_gray_bg_5">
      <div class="td_height_112 td_height_lg_75"></div>
      <div class="container">
        <div class="td_section_heading td_style_1 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
          <p class="td_section_subtitle_up td_fs_18 td_semibold td_spacing_1 td_mb_10 text-uppercase td_accent_color">Browse Categories</p>
          <h2 class="td_section_title td_fs_48 mb-0">Explore Treding Subject <i class="fa fa-line-chart" aria-hidden="true"></i></h2>
        </div>
        <div class="td_height_50 td_height_lg_50"></div>
        <div class="row td_gap_y_24">
          @foreach($subjects as $subject)
            <div class="col-xxl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
              <a href="{{ route('subject-detail',$subject->slug) }}" class="td_iconbox td_style_3 td_fs_18 td_semibold td_radius_10 td_white_bg td_heading_color">
                <span class="td_iconbox_icon">
                  <img src="{{ url('assets/frontend/img/icons/topic-list.png') }}" alt="">
                </span>
                <span class="td_iconbox_title">{{$subject->name}}</span>
              </a>
            </div>
          @endforeach
        </div>
      </div>
      <div class="td_height_120 td_height_lg_80"></div>
    </section>
    <!-- End Category Section -->
    <!-- Start Certificate Section -->
    <section class="td_heading_bg td_shape_section_9">
      <div class="td_shape_position_3 position-absolute"></div>
      <div class="td_height_112 td_height_lg_75"></div>
      <div class="container">
        <div class="td_section_heading td_style_1 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
          <p class="td_section_subtitle_up td_fs_18 td_semibold td_spacing_1 td_mb_10 text-uppercase td_white_color">Why Us</p>
          <h2 class="td_section_title td_fs_48 mb-0 td_white_color">Graduate with 1 Year of Industry Experience</h2>
        </div>
        <div class="td_height_50 td_height_lg_50"></div>
        <div class="row align-items-center td_gap_y_40">
          <div class="col-xl-6 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
            <div class="td_pr_35">
              <img src="{{ url('assets/frontend/img/home_3/certificate_thumb.jpg') }}" alt="" class="td_radius_5 w-100">
            </div>
          </div>
          <div class="col-xl-6 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
            <div class="row td_gap_y_30 td_row_gap_30">
              <div class="col-md-6">
                <div class="td_iconbox td_style_4 td_radius_10">
                  <div class="td_iconbox_icon td_mb_16">
                    <img src="{{ url('assets/frontend/img/home_3/achievement_icon_1.svg') }}" alt="">
                  </div>
                  <h3 class="td_iconbox_title td_fs_24 td_mb_12 td_semibold td_white_color">Classroom Training</h3>
                  <p class="td_iconbox_subtitle mb-0 td_fs_14 td_white_color td_opacity_7">Learn from expert faculty through interactive sessions.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="td_iconbox td_style_4 td_radius_10">
                  <div class="td_iconbox_icon td_mb_16">
                    <img src="{{ url('assets/frontend/img/home_3/achievement_icon_2.svg') }}" alt="">
                  </div>
                  <h3 class="td_iconbox_title td_fs_24 td_mb_12 td_semibold td_white_color">Simulation Software</h3>
                  <p class="td_iconbox_subtitle mb-0 td_fs_14 td_white_color td_opacity_7">Get practical understanding of concepts using 10 simulation tools.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="td_iconbox td_style_4 td_radius_10">
                  <div class="td_iconbox_icon td_mb_16">
                    <img src="{{ url('assets/frontend/img/home_3/achievement_icon_3.svg') }}" alt="">
                  </div>
                  <h3 class="td_iconbox_title td_fs_24 td_mb_12 td_semibold td_white_color">Mandatory Internship</h3>
                  <p class="td_iconbox_subtitle mb-0 td_fs_14 td_white_color td_opacity_7">Get 1 year paid internship for real industry exposure.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="td_iconbox td_style_4 td_radius_10">
                  <div class="td_iconbox_icon td_mb_16">
                    <img src="{{ url('assets/frontend/img/home_3/achievement_icon_4.svg') }}" alt="">
                  </div>
                  <h3 class="td_iconbox_title td_fs_24 td_mb_12 td_semibold td_white_color">Placement Assistance</h3>
                  <p class="td_iconbox_subtitle mb-0 td_fs_14 td_white_color td_opacity_7">Get placement support after course completion.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="td_height_120 td_height_lg_80"></div>
    </section>
    <!-- End Certificate Section -->
    <!-- Start Feature Section -->
    <section class="td_features_2_wrap">
      <div class="td_height_120 td_height_lg_80"></div>
      <div class="container">
        <div class="td_features td_style_2">
          <div class="td_features_thumb td_radius_10 td_center td_bg_filed" data-src="{{ url('assets/frontend/img/home_3/video_bg.jpg') }}">
            <a href="https://www.youtube.com/embed/rRid6GCJtgc" class="td_player_btn_wrap td_video_open td_medium td_heading_color wow zoomIn" data-wow-duration="1s" data-wow-delay="0.2s">
              <span class="td_player_btn td_center">
                <span></span>
              </span>
            </a>
          </div>
          <div class="td_features_content_wrap">
            <div class="td_features_content td_white_bg td_radius_10 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
              {!! $contentMain->facilities !!}
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Feature Section -->
    <!-- Start Funfact Section -->
    <!-- <div class="td_accent_bg">
      <div class="td_height_80 td_height_lg_80"></div>
      <div class="container">
        <div class="td_funfact_1_wrap">
          <div class="td_funfact td_style_1">
            <div class="td_funfact_in">
              <div class="td_funfact_icon">
                <img src="{{ url('assets/frontend/img/home_3/funfact_icon_1.svg') }}" alt="">
              </div>
              <div class="td_funfact_right">
                <h3 class="td_fs_36 td_white_color mb-0"><span class="odometer" data-count-to="78"></span>+</h3>
                <p class="mb-0 td_white_color td_opacity_7">Classes Complete</p>
              </div>
            </div>
            <svg width="140" height="120" viewBox="0 0 140 120" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect x="1" y="1" width="138" height="118" rx="9" stroke="white" stroke-width="2" stroke-dasharray="8 8"/>
            </svg>              
          </div>
          <div class="td_funfact td_style_1">
            <div class="td_funfact_in">
              <div class="td_funfact_icon">
                <img src="{{ url('assets/frontend/img/home_3/funfact_icon_2.svg') }}" alt="">
              </div>
              <div class="td_funfact_right">
                <h3 class="td_fs_36 td_white_color mb-0"><span class="odometer" data-count-to="8465"></span>+</h3>
                <p class="mb-0 td_white_color td_opacity_7">Total Students</p>
              </div>
            </div>
            <svg width="140" height="120" viewBox="0 0 140 120" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect x="1" y="1" width="138" height="118" rx="9" stroke="white" stroke-width="2" stroke-dasharray="8 8"/>
            </svg>              
          </div>
          <div class="td_funfact td_style_1">
            <div class="td_funfact_in">
              <div class="td_funfact_icon">
                <img src="{{ url('assets/frontend/img/home_3/funfact_icon_3.svg') }}" alt="">
              </div>
              <div class="td_funfact_right">
                <h3 class="td_fs_36 td_white_color mb-0"><span class="odometer" data-count-to="400"></span>+</h3>
                <p class="mb-0 td_white_color td_opacity_7">Library Books</p>
              </div>
            </div>
            <svg width="140" height="120" viewBox="0 0 140 120" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect x="1" y="1" width="138" height="118" rx="9" stroke="white" stroke-width="2" stroke-dasharray="8 8"/>
            </svg>              
          </div>
          <div class="td_funfact td_style_1">
            <div class="td_funfact_in">
              <div class="td_funfact_icon">
                <img src="{{ url('assets/frontend/img/home_3/funfact_icon_4.svg') }}" alt="">
              </div>
              <div class="td_funfact_right">
                <h3 class="td_fs_36 td_white_color mb-0"><span class="odometer" data-count-to="800"></span>+</h3>
                <p class="mb-0 td_white_color td_opacity_7">Certified Teachers</p>
              </div>
            </div>
            <svg width="140" height="120" viewBox="0 0 140 120" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect x="1" y="1" width="138" height="118" rx="9" stroke="white" stroke-width="2" stroke-dasharray="8 8"/>
            </svg>              
          </div>
        </div>
      </div>
      <div class="td_height_120 td_height_lg_80"></div>
    </div> -->
    <!-- End Funfact Section -->
    
    <!-- Start Instructor Section -->
    <section class="td_shape_section_9 td_hobble">
      <div class="td_shape_position_6 position-absolute td_hover_layer_3">
        <img src="{{ url('assets/frontend/img/home_3/instructure_shape_1.png') }}" alt="">
      </div>
      <div class="td_shape_position_7 position-absolute td_hover_layer_5">
        <img src="{{ url('assets/frontend/img/home_3/instructure_shape_2.png') }}" alt="">
      </div>
      <div class="td_shape_position_8 position-absolute td_hover_layer_3">
        <img src="{{ url('assets/frontend/img/home_3/instructure_shape_3.png') }}" alt="">
      </div>
      <div class="td_shape_position_9 position-absolute td_hover_layer_5">
        <img src="{{ url('assets/frontend/img/home_3/instructure_shape_4.png') }}" alt="">
      </div>
      <div class="td_height_112 td_height_lg_75"></div>
      <div class="container">
        <div class="row td_gap_y_40">
          <div class="col-lg-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
            <div class="td_image_box td_style_4">
              <div class="td_image_box_img_1">
                <img src="{{ url('assets/frontend/img/home_3/instructor_img_1.png') }}" alt="" class="td_radius_10">
              </div>
              <div class="td_image_box_shape_1 td_accent_color">
                <svg width="540" height="314" viewBox="0 0 540 314" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M0.642023 204.034C0.642023 199.857 3.23902 196.119 7.15436 194.662L525.953 1.59735C532.515 -0.844766 539.491 4.03967 539.44 11.0415L537.989 212.199C537.954 217.026 534.477 221.139 529.723 221.976L12.376 313.066C6.25379 314.144 0.642023 309.434 0.642023 303.218L0.642023 204.034Z" fill="currentColor"/>
                </svg>                  
              </div>
              <div class="td_image_box_shape_2">
                <img src="{{ url('assets/frontend/img/home_3/img_box_shape_2.svg') }}" alt="">                
              </div>
              <div class="td_image_box_shape_3 td_accent_color">
                <svg width="584" height="396" viewBox="0 0 584 396" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g opacity="0.5">
                  <path d="M523.324 75.9476C523.513 76.3363 523.451 76.9078 523.01 77.7125C522.574 78.5076 521.8 79.4702 520.69 80.5932C518.473 82.8366 514.958 85.6754 510.268 89.0357C500.892 95.754 486.855 104.531 469.2 114.761C433.891 135.22 384.13 161.481 328.287 188.692C272.444 215.903 221.097 238.91 183.223 254.111C164.286 261.712 148.722 267.358 137.652 270.603C132.115 272.226 127.713 273.245 124.579 273.609C123.011 273.791 121.775 273.808 120.88 273.661C119.974 273.513 119.485 273.21 119.296 272.821C119.106 272.432 119.169 271.861 119.61 271.056C120.046 270.261 120.82 269.298 121.93 268.175C124.147 265.932 127.662 263.093 132.351 259.733C141.727 253.015 155.764 244.238 173.42 234.008C208.729 213.548 258.49 187.288 314.333 160.077C370.176 132.866 421.523 109.859 459.396 94.6578C478.334 87.057 493.897 81.4103 504.967 78.1656C510.504 76.5427 514.906 75.524 518.04 75.1597C519.609 74.9774 520.844 74.9611 521.739 75.1077C522.645 75.256 523.134 75.5588 523.324 75.9476Z" stroke="currentColor" stroke-width="0.5"/>
                  <path d="M534.634 99.1384C534.817 99.5142 534.752 100.074 534.306 100.869C533.865 101.655 533.086 102.607 531.971 103.72C529.743 105.944 526.219 108.764 521.521 112.106C512.126 118.787 498.073 127.531 480.404 137.733C445.067 158.137 395.29 184.362 339.446 211.573C283.603 238.784 232.273 261.826 194.427 277.083C175.502 284.712 159.955 290.392 148.903 293.674C143.375 295.315 138.982 296.353 135.857 296.738C134.293 296.93 133.063 296.956 132.172 296.82C131.27 296.681 130.789 296.388 130.606 296.012C130.423 295.636 130.488 295.077 130.934 294.281C131.375 293.496 132.154 292.543 133.269 291.43C135.496 289.206 139.021 286.386 143.719 283.045C153.114 276.363 167.167 267.619 184.836 257.417C220.173 237.014 269.95 210.788 325.794 183.577C381.637 156.366 432.967 133.324 470.813 118.067C489.738 110.438 505.285 104.758 516.337 101.477C521.865 99.8351 526.258 98.7969 529.383 98.4127C530.947 98.2203 532.177 98.1939 533.067 98.3305C533.97 98.4689 534.451 98.7625 534.634 99.1384Z" stroke="currentColor" stroke-width="0.5"/>
                  <path d="M546.464 122.479C546.654 122.868 546.591 123.439 546.15 124.244C545.714 125.039 544.941 126.001 543.831 127.124C541.613 129.368 538.099 132.207 533.409 135.567C524.033 142.285 509.996 151.062 492.34 161.292C457.032 181.752 407.271 208.012 351.428 235.223C295.585 262.434 244.237 285.441 206.364 300.642C187.426 308.243 171.863 313.89 160.793 317.134C155.256 318.757 150.854 319.776 147.72 320.14C146.151 320.322 144.916 320.339 144.021 320.192C143.115 320.044 142.626 319.741 142.437 319.352C142.247 318.964 142.31 318.392 142.751 317.587C143.186 316.792 143.96 315.83 145.07 314.707C147.288 312.463 150.802 309.624 155.492 306.264C164.868 299.546 178.905 290.769 196.56 280.539C231.869 260.079 281.63 233.819 337.473 206.608C393.316 179.397 444.664 156.39 482.537 141.189C501.475 133.588 517.038 127.942 528.108 124.697C533.645 123.074 538.047 122.055 541.181 121.691C542.75 121.509 543.985 121.492 544.88 121.639C545.786 121.787 546.275 122.09 546.464 122.479Z" stroke="currentColor" stroke-width="0.5"/>
                  </g>
                  <g opacity="0.5">
                  <path d="M470.417 247.215C470.287 247.612 469.85 247.968 468.975 248.228C468.112 248.484 466.889 248.625 465.313 248.647C462.165 248.69 457.672 248.258 451.972 247.382C440.576 245.632 424.401 242.115 404.616 237.126C365.048 227.149 311.062 211.289 252.039 191.911C193.017 172.533 140.137 153.308 102.356 137.891C83.464 130.182 68.353 123.428 58.1378 118.083C53.0286 115.41 49.154 113.095 46.6449 111.195C45.389 110.243 44.488 109.405 43.9446 108.687C43.3939 107.959 43.2536 107.414 43.3842 107.017C43.5147 106.619 43.9512 106.263 44.8263 106.003C45.6898 105.747 46.9126 105.606 48.4882 105.585C51.6361 105.541 56.1293 105.973 61.8291 106.849C73.2249 108.6 89.3999 112.117 109.185 117.106C148.754 127.083 202.739 142.943 261.762 162.32C320.785 181.698 373.665 200.923 411.446 216.34C430.337 224.049 445.448 230.804 455.664 236.148C460.773 238.821 464.647 241.136 467.156 243.037C468.412 243.988 469.313 244.826 469.857 245.544C470.407 246.272 470.548 246.818 470.417 247.215Z" stroke="currentColor" stroke-width="0.5"/>
                  <path d="M460.972 275.973C460.841 276.37 460.405 276.726 459.53 276.986C458.666 277.242 457.443 277.383 455.868 277.405C452.72 277.448 448.227 277.016 442.527 276.14C431.131 274.389 414.956 270.873 395.171 265.884C355.602 255.906 301.617 240.047 242.594 220.669C183.571 201.291 130.691 182.066 92.9103 166.649C74.0187 158.94 58.9077 152.185 48.6925 146.841C43.5833 144.168 39.7087 141.853 37.1996 139.953C35.9437 139.001 35.0427 138.163 34.4993 137.445C33.9486 136.717 33.8083 136.172 33.9389 135.774C34.0694 135.377 34.5059 135.021 35.381 134.761C36.2445 134.505 37.4673 134.364 39.0429 134.342C42.1907 134.299 46.684 134.731 52.3838 135.607C63.7796 137.358 79.9546 140.874 99.7399 145.863C139.308 155.841 193.294 171.701 252.317 191.078C311.339 210.456 364.219 229.681 402 245.098C420.892 252.807 436.003 259.562 446.218 264.906C451.327 267.579 455.202 269.894 457.711 271.795C458.967 272.746 459.868 273.584 460.411 274.302C460.962 275.03 461.102 275.576 460.972 275.973Z" stroke="currentColor" stroke-width="0.5"/>
                  <path d="M451.097 306.035C450.966 306.433 450.53 306.789 449.655 307.048C448.791 307.305 447.568 307.445 445.993 307.467C442.845 307.511 438.352 307.079 432.652 306.203C421.256 304.452 405.081 300.935 385.296 295.946C345.727 285.969 291.742 270.109 232.719 250.731C173.696 231.354 120.816 212.129 83.0353 196.712C64.1437 189.003 49.0327 182.248 38.8175 176.904C33.7083 174.231 29.8337 171.916 27.3246 170.015C26.0687 169.064 25.1677 168.225 24.6243 167.507C24.0736 166.78 23.9333 166.234 24.0639 165.837C24.1944 165.44 24.6309 165.083 25.506 164.824C26.3695 164.568 27.5923 164.427 29.1679 164.405C32.3157 164.361 36.809 164.794 42.5088 165.669C53.9046 167.42 70.0796 170.937 89.8649 175.926C129.433 185.903 183.419 201.763 242.442 221.141C301.464 240.518 354.344 259.743 392.125 275.161C411.017 282.87 426.128 289.624 436.343 294.968C441.452 297.641 445.327 299.956 447.836 301.857C449.092 302.809 449.993 303.647 450.536 304.365C451.087 305.093 451.227 305.638 451.097 306.035Z" stroke="currentColor" stroke-width="0.5"/>
                  </g>
                </svg>                  
              </div>
              <div class="td_image_box_shape_4 td_accent_color">
                <svg width="321" height="179" viewBox="0 0 321 179" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path opacity="0.5" d="M318.075 59.6884C322.237 81.8165 309.033 105.527 283.232 125.998C257.511 146.404 219.696 163.205 175.873 171.441C132.05 179.678 90.712 177.755 59.3334 168.081C27.8555 158.376 6.93756 141.08 2.7751 118.951C-1.38736 96.8233 11.8169 73.1129 37.6185 52.6421C63.3389 32.2358 101.155 15.4353 144.977 7.19844C188.8 -1.03841 230.138 0.884654 261.517 10.5587C292.995 20.2633 313.913 37.5602 318.075 59.6884Z" stroke="currentColor" stroke-width="4"/>
                </svg>                                 
              </div>
            </div>
          </div>
          <div class="col-lg-6 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
            <div class="td_section_heading td_style_1">
              <p class="td_section_subtitle_up td_fs_18 td_semibold td_spacing_1 td_mb_10 text-uppercase td_accent_color">Inspired instructor</p>
              <h2 class="td_section_title td_fs_48 td_mb_20">Become an Instructor</h2>
              <p class="td_section_subtitle td_fs_18 td_mb_36">Far far away, behind the word mountains, far from the Conson antia, there live the blind texts. Separated they marks</p>
              <div class="td_mb_40 td_list_3_wrap">
                <ul class="td_list td_style_3 td_mp_0">
                  <li>
                    <div class="td_list_icon td_center">
                      <img src="{{ url('assets/frontend/img/home_3/feature_icon_5.svg') }}" alt="">
                    </div>
                    <div class="td_list_right">
                      <h3 class="td_fs_24 td_semibold td_mb_6">Earn Money</h3>
                      <p class="mb-0 td_heading_color td_opacity_7">Far from the Conson antia</p>
                    </div>
                  </li>
                  <li>
                    <div class="td_list_icon td_center">
                      <img src="{{ url('assets/frontend/img/home_3/feature_icon_6.svg') }}" alt="">
                    </div>
                    <div class="td_list_right">
                      <h3 class="td_fs_24 td_semibold td_mb_6">Inspired Students</h3>
                      <p class="mb-0 td_heading_color td_opacity_7">Behind the word mountains, far from Conson </p>
                    </div>
                  </li>
                  <li>
                    <div class="td_list_icon td_center">
                      <img src="{{ url('assets/frontend/img/home_3/feature_icon_7.svg') }}" alt="">
                    </div>
                    <div class="td_list_right">
                      <h3 class="td_fs_24 td_semibold td_mb_6">Join Our Community</h3>
                      <p class="mb-0 td_heading_color td_opacity_7">Behind the word mountains, far from Conson </p>
                    </div>
                  </li>
                </ul>
                <div class="td_list_3_box td_accent_bg text-center">
                  <h2 class="td_fs_64 td_white_color mb-0">4k</h2>
                  <p class="mb-0 td_fs_14 td_white_color td_opacity_8">Worldwide Satisfied Students</p>
                </div>
              </div>
              <a href="team-members.html" class="td_btn td_style_1 td_radius_30 td_medium">
                <span class="td_btn_in td_white_color td_accent_bg">
                  <span>See All Instructors</span>
                  <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15.1575 4.34302L3.84375 15.6567" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M15.157 11.4142C15.157 11.4142 16.0887 5.2748 15.157 4.34311C14.2253 3.41142 8.08594 4.34314 8.08594 4.34314" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                  </svg> 
                </span>             
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="td_height_120 td_height_lg_80"></div>
    </section>
    <!-- End Instructor Section -->
    <!-- Start App Section -->
    <section class="td_heading_bg td_center td_cta td_style_1 td_hobble">
      <div class="container">
        <div class="td_cta_text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.4s">
          <div class="td_section_heading td_style_1 td_mb_40">
            <p class="td_section_subtitle_up td_fs_18 td_semibold td_spacing_1 td_mb_10 text-uppercase td_white_color td_opacity_7">AVAILABLE ON ANDROID & APPS STORE </p>
            <h2 class="td_section_title td_fs_48 mb-0 td_white_color">Let’s Find <br>The Right Courses For you</h2>
          </div>
          <div class="td_btns_group">
            <a href="courses-grid-view.html" class="td_btn td_style_1 td_type_3 td_radius_30 td_medium">
              <span class="td_btn_in td_white_color">
                <svg width="23" height="25" viewBox="0 0 23 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M1.27919 1.60156C0.99445 1.97711 0.835938 2.43909 0.835938 2.93347V22.5016C0.835938 22.9608 0.973168 23.3922 1.22103 23.7526L11.8891 12.6469L1.27919 1.60156Z" fill="currentColor"/>
                  <path d="M12.8722 11.6309L16.3331 8.02815L4.16781 1.01832C3.6398 0.714004 3.034 0.64186 2.46875 0.800429L12.8722 11.6309Z" fill="currentColor"/>
                  <path d="M12.868 13.6641L2.35938 24.6039C2.58595 24.6799 2.82042 24.7181 3.05507 24.7181C3.43576 24.7181 3.81663 24.6182 4.16356 24.4182L16.4164 17.3579L12.868 13.6641Z" fill="currentColor"/>
                  <path d="M21.1419 10.7995L17.5853 8.75L13.8438 12.6448L17.6726 16.631L21.1419 14.6319C21.8362 14.232 22.2506 13.5155 22.2506 12.7157C22.2506 11.9157 21.8362 11.1994 21.1419 10.7995Z" fill="currentColor"/>
                </svg>                  
                <span>Google play</span>
              </span>             
            </a>
            <a href="courses-grid-view.html" class="td_btn td_style_1 td_type_3 td_radius_30 td_medium">
              <span class="td_btn_in td_white_color">
                <svg width="20" height="25" viewBox="0 0 20 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M14.6212 0.71875C14.677 0.71875 14.7329 0.71875 14.7919 0.71875C14.9289 2.41128 14.2829 3.67594 13.4977 4.59176C12.7273 5.50126 11.6724 6.38335 9.96617 6.24951C9.85235 4.58122 10.4994 3.41036 11.2835 2.49664C12.0107 1.64511 13.3439 0.887371 14.6212 0.71875Z" fill="currentColor"/>
                  <path d="M19.7851 18.3371C19.7851 18.3539 19.7851 18.3687 19.7851 18.3845C19.3056 19.8368 18.6216 21.0814 17.7869 22.2364C17.025 23.2851 16.0912 24.6962 14.424 24.6962C12.9833 24.6962 12.0264 23.7698 10.5499 23.7445C8.98808 23.7193 8.12917 24.5191 6.70116 24.7204C6.53781 24.7204 6.37446 24.7204 6.21427 24.7204C5.16566 24.5687 4.3194 23.7382 3.70288 22.99C1.88493 20.7789 0.480112 17.9229 0.21875 14.2681C0.21875 13.9097 0.21875 13.5525 0.21875 13.1942C0.329407 10.5784 1.60039 8.4517 3.28976 7.421C4.18134 6.87298 5.407 6.40612 6.77177 6.61478C7.35668 6.70542 7.95423 6.90565 8.478 7.10378C8.97438 7.29454 9.59512 7.63283 10.1832 7.61492C10.5815 7.60332 10.9778 7.39571 11.3793 7.24922C12.5555 6.82451 13.7084 6.33761 15.2281 6.56631C17.0545 6.84242 18.3507 7.65391 19.1517 8.90592C17.6067 9.88919 16.3853 11.3709 16.5939 13.9013C16.7794 16.1998 18.1157 17.5446 19.7851 18.3371Z" fill="currentColor"/>
                </svg>                  
                <span>Apple Store</span>
              </span>             
            </a>
          </div>
        </div>
      </div>
      <div class="td_cta_thumb wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
        <img src="{{ url('assets/frontend/img/home_3/cta_img.png') }}" alt="">
        <div class="td_cta_thumb_shape"></div>
      </div>
      <div class="td_cta_shape_1 td_hover_layer_3"></div>
      <div class="td_cta_shape_2">
        <svg width="80" height="75" viewBox="0 0 80 75" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path opacity="0.1" d="M79.5044 30.5007C77.861 24.1313 74.6722 18.2654 70.2204 13.4227C65.7685 8.57998 60.1911 4.90994 53.9821 2.73765C47.7731 0.565352 41.1242 -0.0421462 34.6243 0.968964C28.1244 1.98007 21.9742 4.57858 16.7185 8.53432C11.4628 12.4901 7.26371 17.6809 4.49329 23.6471C1.72286 29.6133 0.466584 36.1706 0.835726 42.7383C1.20487 49.306 3.18804 55.6813 6.60957 61.2994C10.0311 66.9176 14.7854 71.6052 20.4513 74.9471L40.7727 40.4936L79.5044 30.5007Z" fill="white"/>
        </svg>          
      </div>
      <div class="td_cta_shape_3 td_hover_layer_5">
        <svg width="74" height="81" viewBox="0 0 74 81" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path opacity="0.7" d="M0.194636 62.4504C4.26063 68.4736 9.8907 73.2753 16.4801 76.3398C23.0695 79.4043 30.3693 80.6158 37.5954 79.8441C44.8214 79.0724 51.7008 76.3467 57.4944 71.9597C63.2881 67.5728 67.7771 61.6904 70.4794 54.9444C73.1818 48.1983 73.9952 40.8436 72.8324 33.67C71.6696 26.4965 68.5746 19.7753 63.8796 14.2283C59.1847 8.68129 53.0673 4.51814 46.1845 2.18597C39.3017 -0.146194 31.9137 -0.559235 24.8138 0.991205L27.6734 14.0858C32.3942 13.0549 37.3067 13.3295 41.8832 14.8802C46.4597 16.4309 50.5273 19.1991 53.649 22.8874C56.7708 26.5757 58.8288 31.0448 59.6019 35.8146C60.3751 40.5844 59.8342 45.4748 58.0374 49.9604C56.2406 54.4459 53.2557 58.3573 49.4034 61.2742C45.5511 64.1912 40.9769 66.0036 36.1721 66.5167C31.3673 67.0298 26.5136 66.2243 22.1321 64.1866C17.7507 62.149 14.0071 58.9562 11.3036 54.9512L0.194636 62.4504Z" fill="white"/>
        </svg>          
      </div>
    </section>
    <!-- End App Section -->
    <!-- Start Testimonials Section -->
    <section class="td_shape_section_9 td_hobble">
      <div class="td_shape_position_4 position-absolute td_hover_layer_3">
        <img src="{{ url('assets/frontend/img/home_3/testimonial_shape_1.svg') }}" alt="">
      </div>
      <div class="td_shape_position_5 position-absolute td_accent_color td_hover_layer_5">
        <svg width="242" height="231" viewBox="0 0 242 231" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g filter="url(#filter0_d_34_832)">
          <path d="M127.325 39.3635C128.652 37.8865 131.088 39.0374 130.79 41.0006L125.127 78.2822C124.952 79.4327 125.793 80.4889 126.953 80.5768L169.471 83.7988C171.566 83.9575 172.03 86.8264 170.092 87.6379L134.887 102.378C133.625 102.906 133.254 104.518 134.159 105.545L161.133 136.154C162.555 137.768 160.776 140.182 158.814 139.301L119.833 121.805C118.666 121.281 117.315 121.972 117.055 123.224L109.608 159.155C109.196 161.139 106.436 161.325 105.763 159.414L92.3189 121.263C91.949 120.214 90.7938 119.668 89.7483 120.048L51.7387 133.888C49.8354 134.581 48.2261 132.33 49.4973 130.753L72.5265 102.184C73.3289 101.188 73.004 99.7059 71.8589 99.1372L33.5908 80.133C31.6643 79.1763 32.3994 76.269 34.549 76.3429L75.3234 77.7447C76.6912 77.7918 77.701 76.482 77.3078 75.1712L66.3403 38.615C65.7365 36.6024 68.2476 35.1394 69.7007 36.6572L99.1874 67.4574C99.9921 68.298 101.342 68.2767 102.12 67.4112L127.325 39.3635Z" fill="currentColor"/>
          <path d="M127.511 39.5306C128.672 38.2382 130.804 39.2453 130.543 40.9631L124.88 78.2447C124.683 79.539 125.629 80.7272 126.934 80.8261L169.452 84.048C171.285 84.187 171.692 86.6972 169.996 87.4073L134.791 102.147C133.371 102.742 132.954 104.555 133.972 105.71L160.945 136.319C162.19 137.731 160.633 139.844 158.916 139.073L119.935 121.577C118.623 120.988 117.103 121.764 116.811 123.173L109.363 159.105C109.003 160.84 106.588 161.003 105.999 159.331L92.5546 121.18C92.1386 119.999 90.839 119.385 89.6628 119.814L51.6532 133.653C49.9878 134.259 48.5797 132.29 49.692 130.91L72.7211 102.341C73.6238 101.221 73.2584 99.5531 71.9701 98.9133L33.702 79.9091C32.0163 79.072 32.6595 76.5281 34.5405 76.5928L75.3148 77.9946C76.8535 78.0475 77.9896 76.574 77.5472 75.0993L66.5798 38.5432C66.0514 36.7821 68.2486 35.502 69.5201 36.8301L99.0068 67.6303C99.9122 68.576 101.431 68.552 102.306 67.5783L127.511 39.5306Z" stroke="currentColor" stroke-width="0.5"/>
          </g>
          <g clip-path="url(#clip0_34_832)">
          <path d="M117.885 90.793C117.885 87.5059 115.219 84.8398 111.932 84.8398C108.645 84.8398 105.979 87.5059 105.979 90.793C105.979 94.0801 108.645 96.7461 111.932 96.7461C112.916 96.7461 113.824 96.4883 114.645 96.0664C113.59 100.707 109.436 104.187 104.479 104.187C103.658 104.187 102.99 104.855 102.99 105.676C102.99 106.496 103.658 107.164 104.479 107.164C111.873 107.164 117.885 101.152 117.885 93.7578V90.793Z" fill="white"/>
          <path d="M103.018 90.793C103.018 87.5059 100.352 84.8398 97.0645 84.8398C93.7773 84.8398 91.1113 87.5059 91.1113 90.793C91.1113 94.0801 93.7773 96.7461 97.0645 96.7461C98.0488 96.7461 98.957 96.4883 99.7773 96.0664C98.7227 100.707 94.5684 104.187 89.6113 104.187C88.791 104.187 88.123 104.855 88.123 105.676C88.123 106.496 88.791 107.164 89.6113 107.164C97.0059 107.164 103.018 101.152 103.018 93.7578V90.793Z" fill="white"/>
          </g>
          <defs>
          <filter id="filter0_d_34_832" x="2.47656" y="6.02954" width="238.844" height="224.72" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
          <feFlood flood-opacity="0" result="BackgroundImageFix"/>
          <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
          <feOffset dx="20" dy="20"/>
          <feGaussianBlur stdDeviation="25"/>
          <feComposite in2="hardAlpha" operator="out"/>
          <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.104167 0 0 0 0.15 0"/>
          <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_34_832"/>
          <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_34_832" result="shape"/>
          </filter>
          <clipPath id="clip0_34_832">
          <rect width="30" height="30" fill="white" transform="matrix(-1 0 0 -1 118.002 111)"/>
          </clipPath>
          </defs>
        </svg>          
      </div>
      <div class="td_height_112 td_height_lg_75"></div>
      <div class="container">
        <div class="td_section_heading td_style_1 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
          <p class="td_section_subtitle_up td_fs_18 td_semibold td_spacing_1 td_mb_10 text-uppercase td_accent_color">Testimonials</p>
          <h2 class="td_section_title td_fs_48 mb-0">What Our Students Say About <br>Our Services</h2>
        </div>
        <div class="td_height_50 td_height_lg_50"></div>
        <div class="td_slider td_style_1 td_slider_gap_24 td_remove_overflow wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="td_slider_container" data-autoplay="0" data-loop="1" data-speed="800" data-center="0" data-variable-width="0" data-slides-per-view="responsive" data-xs-slides="1" data-sm-slides="2" data-md-slides="2" data-lg-slides="2" data-add-slides="3">
            <div class="td_slider_wrapper">
              @foreach(getTestimonials() as $key => $testimonial)
              <div class="td_slide">
                <div class="td_testimonial td_style_1 td_type_2 td_white_bg td_radius_5">
                  <div class="td_rating td_mb_20" data-rating="5">
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <div class="td_rating_percentage">
                      <i class="fa-solid fa-star fa-fw"></i>
                      <i class="fa-solid fa-star fa-fw"></i>
                      <i class="fa-solid fa-star fa-fw"></i>
                      <i class="fa-solid fa-star fa-fw"></i>
                      <i class="fa-solid fa-star fa-fw"></i>
                    </div>
                  </div>
                  <blockquote class="td_testimonial_text td_fs_18 td_medium td_heading_color td_mb_30 td_opacity_9">{!! $testimonial->comment !!}</blockquote>
                  <div class="td_testimonial_meta td_mb_24">
                    <img src="{{ url('assets/frontend/img/home_1/avatar_1.png') }}" alt="">
                    <div class="td_testimonial_meta_right">
                      <h3 class="td_fs_20 td_semibold td_mb_2">{!! $testimonial->name !!}</h3>
                      <p class="td_fs_14 mb-0 td_heading_color td_opacity_7">10th Batch Students</p>
                    </div>
                  </div>
                  <span class="td_quote_icon td_accent_color">
                    <svg width="65" height="46" viewBox="0 0 65 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path opacity="0.05" d="M13.9305 26.6H1.00195V1H26.8591V27.362L17.9579 45H6.26959L14.8233 28.0505L15.5553 26.6H13.9305ZM51.0734 26.6H38.1448V1H64.002V27.362L55.1008 45H43.4124L51.9661 28.0505L52.6982 26.6H51.0734Z" stroke="currentColor" stroke-width="2"/>
                    </svg>                      
                  </span> 
                </div>
              </div>
              @endforeach
            </div>
          </div>
          <div class="td_height_40 td_height_lg_40"></div>
          <div class="td_slider_arrows td_style_1">
            <div class="td_left_arrow td_accent_bg rounded-circle td_center td_white_color">
              <svg width="18" height="12" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.00194 6.00024L17.002 6.00024" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M6.00191 1C6.00191 1 1.00196 4.68244 1.00195 6.00004C1.00194 7.31763 6.00195 11 6.00195 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>                            
            </div>
            <div class="td_right_arrow td_accent_bg rounded-circle td_center td_white_color">
              <svg width="18" height="12" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M17.002 5.99976L1.00195 5.99976" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M12.002 11C12.002 11 17.0019 7.31756 17.002 5.99996C17.002 4.68237 12.002 1 12.002 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>                               
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Testimonials Section -->
@endsection