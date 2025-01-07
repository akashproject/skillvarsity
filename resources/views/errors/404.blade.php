@extends('layouts.main')
@section('content')
<!-- Start Error Section Section -->
<section>
    <div class="td_height_120 td_height_lg_80"></div>
    <div class="container">
    <div class="td_error text-center">
        <img src="assets/img/others/error.svg" alt="">
        <div class="td_height_90 td_height_lg_40"></div>
        <h2 class="td_fs_48 td_mb_27">OOPS! Nothing Was Found</h2>
        <p class="td_mb_35">Oops! it could be you or us, there is no page here. It might have <br>been moved or deleted.Back To Home
        </p>
        <a href="{{ route('website') }}" class="td_btn td_style_1 td_radius_10 td_medium">
        <span class="td_btn_in td_white_color td_accent_bg">
            <span>Go Back To Home</span>
            <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M15.1575 4.34302L3.84375 15.6567" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M15.157 11.4142C15.157 11.4142 16.0887 5.2748 15.157 4.34311C14.2253 3.41142 8.08594 4.34314 8.08594 4.34314" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg> 
        </span>             
        </a>
    </div>
    </div>
    <div class="td_height_120 td_height_lg_80"></div>
</section>
<!-- End Error Section Section -->
@endsection