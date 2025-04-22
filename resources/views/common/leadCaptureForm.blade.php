<div class="leadModel" >
    <div class="row">
        <div class="col-md-7">
            <div class="leadModelHeader">
                <div class="headerLogo">
                    <a class="td_site_branding td_accent_color" href="http://localhost/eduversity">
                        <img src="{{ url('assets/frontend/img/logo.png') }}">                         
                    </a> 
                </div>
            </div>
            <div class="leadModelBody">
                <div class="">
                    <a >Contact Details</a>
                </div>
                
                <form id="leadCaptureForm" action="{{ route('insert-lead-records')}}" method="post" >
                    {{ csrf_field() }}
                    <div class="lead_steps step_1 active">
                        <h3 class="td_mb_20 td_fs_24 td_semibold">Let’s get you started!</h3>
                        <p class="td_fs_14 m-0">First we need your phone number</p>
                        <input type="tel" class="td_form_field_2" placeholder="Mobile Number" name="lead_mobile_number" required>
                        <p class="td_fs_14 td_mb_20 mt-3">By entering the OTP and clicking continue I confirm that I have read, understood and agree with the Terms and Conditions and Privacy Policy.</p>
                        <div class="row align-items-center td_row_reverse_lg td_gap_y_20">
                            <div class="col-lg-6 text-center-lg">
                            
                            </div>
                            <div class="col-lg-6">
                                <button type="submit" class="td_btn td_style_1 td_radius_30 td_medium w-100">
                                    <span class="td_btn_in td_white_color td_accent_bg">
                                    <span>Continue OTP</span>
                                    </span>             
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="lead_steps step_2">
                        <h3 class="td_mb_20 td_fs_24 td_semibold">We’ve sent you an OTP</h3>
                        <p class="td_fs_14 m-0">On your phone number <a href="javascript:void(0)" class="backstep">+91 <span class="submitted_lead_mobile_no">62905-65997</span> <i class="fa-solid fa-pencil" ></i> </a></p>
                        <div id="otp_target"></div>
                        <label id="otp_target-error" class="otp_error" style="display:none">Please Enter valid OTP</label>
                        <div class="otp-content">
                            <p class="message"> Did not receive OTP?
                                <span class="countdown_label"> Resend in <span class="countdown" >59</span> Sec </span>
                                <a class="resendOtp display-none" href="javascript:void(0)"> Resend OTP </a>
                            </p>
                        </div>
                        <p class="td_fs_14 td_mb_20 mt-3">By entering the OTP and clicking continue I confirm that I have read, understood and agree with the Terms and Conditions and Privacy Policy.</p>
                    </div>
                    <div class="lead_steps step_3">
                        <h3 class="td_mb_20 td_fs_24 td_semibold">Let’s get you started!</h3>  

                        <div class="row td_mb_10 td_row_gap_16">
                            <div class="col-md-6">
                                <input type="text" name="lead_first_name" class="td_form_field_2 td_mb_16" placeholder="First name">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="lead_last_name" class="td_form_field_2 td_mb_16" placeholder="Last name">
                            </div>
                        </div>

                        <div class="row td_mb_10 td_row_gap_16">
                            <div class="col-md-6">
                                <input type="text" name="lead_email" class="td_form_field_2 td_mb_16" placeholder="Email Address">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="lead_city" class="td_form_field_2 td_mb_16" placeholder="City">
                            </div>
                        </div>
                        
                        <div class="row align-items-center td_row_reverse_lg td_gap_y_20">
                            <div class="col-lg-6 text-center-lg">
                            
                            </div>
                            <div class="col-lg-6">
                                <button type="submit" class="td_btn td_style_1 td_radius_30 td_medium w-100">
                                    <span class="td_btn_in td_white_color td_accent_bg">
                                    <span>Register Now</span>
                                    </span>             
                                </button>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" class="formFieldOtpResponse" > 
                    <input type="hidden" name="university" value="{{ (isset($universityName))?$universityName:'' }}" >
                    <input type="hidden" name="utm_campaign" value="{{ getUtmCampaign(isset($contentMain->utm_campaign)?$contentMain->utm_campaign:null) }}">
                    <input type="hidden" name="utm_source" value="{{ getUtmSource(isset($contentMain->utm_source)?$contentMain->utm_source:null) }}">
                    <input type="hidden" name ="LeadType" value="{{ getCommunicationMedium(isset($contentMain->lead_type)?$contentMain->lead_type:null) }}" >
                    <input type="hidden" name ="utm_term" value="{{ (isset($_GET['utm_term']))?$_GET['utm_term']:'' }}" >  
                    <input type="hidden" name ="utm_device" value="{{ (isset($_GET['utm_device']))?$_GET['utm_device']:'' }}" >  
                    <input type="hidden" name ="utm_adgroup" value="{{(isset($_GET['utm_adgroup']))?$_GET['utm_adgroup']:''}}" >  
                    <input type="hidden" name ="utm_content" value="{{(isset($_GET['utm_content']))?$_GET['utm_content']:''}}" >   
                    <input type="hidden" name ="ref_code" value="{{ (isset($_GET['ref']))?$_GET['ref']:'' }}" >  
                    <input type="hidden" name ="utm_url" value="{{ url()->current() }}" >
                </form>
            </div>
        </div>
        <div class="col-md-5">
            <div class="modelSideBanner">
                <div class="placement_card">
                    <h3> "I now have clarity and confidence in my career choice." </h3>
                    <div class="placementGrid">
                        <img src="{{ url('assets/frontend/img/home_3/course_thumb_1.jpg') }}" >
                    </div>
                    <div class="placement_content mt-3">
                        <h5 class="mb-2">Anjali Saxena</h5>
                        <h5 class="m-0" style="font-size: 14px;color: #333;">Senior Accounts Manager</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
