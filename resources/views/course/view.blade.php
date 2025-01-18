@extends('layouts.main')
@section('content')
<!-- Start Page Heading Section -->
<section class="td_page_heading td_center td_bg_filed td_hobble" data-src="assets/img/others/page_heading_bg.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="td_page_heading_in">
          <ol class="breadcrumb m-0 td_fs_20 td_opacity_8 td_semibold ">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">{{ $contentMain->slug }}</li>
          </ol>
          <h1 class=" td_fs_48 td_mb_10">{{ $contentMain->name }}</h1>
          <div class="mb-0">{{ $contentMain->excerpt }}</div>
        </div>
        <div class="row mt-3">
            <h2 class="td_fs_24 td_mb_20">Courses Curriculum</h2>
            <div class="course_criteria">
              {!! $contentMain->criteria !!}
            </div>
        </div>
      </div>
      <div class="col-md-4 position-relative">
        <div class="td_card td_style_7 course-sidebar sticky">
            <h3 class="td_fs_20 td_semibold td_mb_15">Courses Includes:</h3>
            <ul class="td_card_list td_mp_0 td_fs_18 td_medium">
              <li>
                <span>
                  <i class="fa-solid fa-tasks"></i>
                  Total Modules :
                </span>
                <span class="td_semibold td_accent_color">{{ $contentMain->no_of_module }}</span>
              </li>
              <li>
                <span>
                  <i class="fa-solid fa-clock"></i>                     
                  Durations :
                </span>
                <span class="td_semibold td_accent_color">{{ $contentMain->duration }}</span>
              </li>
              <li>
                <span>
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19.3462 15.852V13.3536L18.2918 13.7638L18.2887 13.7569L18.2636 13.7112C17.8596 13.0822 17.2062 12.6445 16.4704 12.5111L13.9333 12.0495V11.8492C14.8821 11.2983 15.5769 10.3583 15.7934 9.24716C16.4963 9.10178 17.0264 8.47814 17.0264 7.73271V3.91391C17.0264 2.83481 16.3196 1.89374 15.2943 1.58752L15.1009 1.39421C14.2016 0.494893 13.0061 0 11.7345 0C9.10963 0 6.97386 2.13539 6.97386 4.76064V7.73271C6.97386 8.47814 7.50394 9.10178 8.20684 9.24716C8.42374 10.3583 9.11814 11.2986 10.0669 11.8492V12.0495L7.53023 12.5107C6.79523 12.6441 6.14221 13.081 5.73779 13.7097L5.71459 13.7661L4.65405 13.3536V15.852C4.01455 15.852 3.49414 16.3725 3.49414 17.012V18.5585C3.49414 19.198 4.01455 19.7184 4.65405 19.7184V21.1428L12.0001 24L19.3462 21.1428V19.7184C19.9857 19.7184 20.5061 19.198 20.5061 18.5585V17.012C20.5061 16.3725 19.9857 15.852 19.3462 15.852ZM14.6578 12.9674L16.332 13.2716C16.8249 13.3613 17.2615 13.6459 17.5526 14.0511L13.8119 15.5056L14.6578 12.9674ZM10.8731 12.2038C11.2299 12.3128 11.6081 12.3723 12.0001 12.3723C12.3922 12.3723 12.7703 12.3128 13.1272 12.2038L12.0001 13.0489L10.8731 12.2038ZM11.4117 13.574L10.6225 14.3627L10.1106 12.8274L10.3569 12.7829L11.4117 13.574ZM13.6433 12.7833L13.8896 12.8278L13.3777 14.3631L12.5886 13.5744L13.6433 12.7833ZM15.8665 8.39849V7.06692C16.0965 7.20108 16.2531 7.44776 16.2531 7.73271C16.2531 8.01766 16.0965 8.26433 15.8665 8.39849ZM8.13376 8.39849C7.90372 8.26433 7.74713 8.01766 7.74713 7.73271C7.74713 7.44776 7.90372 7.20108 8.13376 7.06692V8.39849ZM8.13376 5.79953V6.24107C7.99612 6.27702 7.86699 6.33115 7.74713 6.40113V4.76064C7.74713 2.56223 9.5357 0.773271 11.7345 0.773271C12.7993 0.773271 13.8011 1.18813 14.5542 1.9413L14.8952 2.28269L14.9992 2.30821C15.7377 2.49264 16.2531 3.15301 16.2531 3.91391V6.40113C16.1332 6.33115 16.0041 6.27664 15.8665 6.24107V5.79953H14.6405C13.5927 5.79953 12.5913 5.29922 11.963 4.46138L11.6556 4.05078L10.8874 4.81941C10.2548 5.45156 9.4143 5.79953 8.5204 5.79953H8.13376ZM8.90704 8.50598V6.55502C9.86164 6.46648 10.7474 6.05239 11.4341 5.36611L11.5845 5.21571C12.3597 6.07133 13.4763 6.5728 14.6405 6.5728H15.0932V8.50598C15.0932 10.2114 13.7056 11.5991 12.0001 11.5991C10.2947 11.5991 8.90704 10.2114 8.90704 8.50598ZM7.66826 13.2716L9.34239 12.9674L10.1883 15.5056L6.44687 14.0507C6.73801 13.6451 7.1753 13.3613 7.66826 13.2716ZM4.26741 18.5585V17.012C4.26741 16.7985 4.44101 16.6253 4.65405 16.6253C5.29354 16.6253 5.81395 17.1457 5.81395 17.7852C5.81395 18.4247 5.29354 18.9451 4.65405 18.9451C4.44101 18.9451 4.26741 18.7719 4.26741 18.5585ZM11.6135 23.0195L5.42732 20.6142V19.5545C6.10896 19.2552 6.58722 18.5759 6.58722 17.7852C6.58722 16.9946 6.10896 16.3152 5.42732 16.016V14.4841L11.6135 16.8898V23.0195ZM10.4656 15.6139L12.0001 14.0789L13.5347 15.6135L12.0001 16.2105L10.4656 15.6139ZM18.5729 20.6138L12.3868 23.0191V16.8898L18.5729 14.4841V16.016C17.8913 16.3152 17.413 16.9946 17.413 17.7852C17.413 18.5759 17.8913 19.2552 18.5729 19.5545V20.6138ZM19.7328 18.5585C19.7328 18.7719 19.5592 18.9451 19.3462 18.9451C18.7067 18.9451 18.1863 18.4247 18.1863 17.7852C18.1863 17.1457 18.7067 16.6253 19.3462 16.6253C19.5592 16.6253 19.7328 16.7985 19.7328 17.012V18.5585Z" fill="currentColor"/>
                  </svg>                      
                  Students :
                </span>
                <span class="td_semibold td_accent_color">{{ $contentMain->number_of_enrolled }}</span>
              </li>
              <li>
                <span>
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_34_14814)">
                    <path d="M9.17392 12.5653C9.13543 12.3726 7.80971 5.74402 7.76767 5.53397C7.702 5.20533 7.41339 4.96875 7.07823 4.96875H5.67198C5.33682 4.96875 5.04822 5.20533 4.98254 5.53397C4.93984 5.74758 3.61276 12.3829 3.57629 12.5652C3.50012 12.946 3.74711 13.3164 4.12787 13.3926C4.50864 13.4687 4.87909 13.2218 4.95522 12.841L5.40465 10.5938H7.34556L7.795 12.841C7.87117 13.222 8.24176 13.4688 8.62234 13.3926C9.00311 13.3164 9.25009 12.946 9.17392 12.5653ZM5.6859 9.1875L6.2484 6.375H6.50181L7.06431 9.1875H5.6859Z" fill="currentColor"/>
                    <path d="M20.4375 10.5938H18.3281V9.89062C18.3281 9.50231 18.0133 9.1875 17.625 9.1875C17.2367 9.1875 16.9219 9.50231 16.9219 9.89062V10.5938H14.8125C14.4242 10.5938 14.1094 10.9086 14.1094 11.2969C14.1094 11.6852 14.4242 12 14.8125 12H14.9827C15.3833 13.2943 15.9865 14.2878 16.6502 15.0839C16.11 15.5781 15.5633 15.9833 15.0764 16.3728C14.7732 16.6154 14.724 17.0579 14.9666 17.3611C15.2093 17.6645 15.6518 17.7134 15.9549 17.4709C16.4445 17.0791 17.0315 16.6438 17.625 16.0991C18.219 16.6442 18.807 17.0803 19.2951 17.4709C19.5983 17.7135 20.0408 17.6643 20.2834 17.3611C20.526 17.0579 20.4768 16.6154 20.1736 16.3728C19.6879 15.9842 19.1406 15.5785 18.5998 15.0839C19.2635 14.2878 19.8667 13.2943 20.2673 12H20.4375C20.8258 12 21.1406 11.6852 21.1406 11.2969C21.1406 10.9086 20.8258 10.5938 20.4375 10.5938ZM17.625 14.0505C17.1762 13.4871 16.7724 12.8146 16.468 11.9953H18.782C18.4776 12.8146 18.0738 13.4871 17.625 14.0505Z" fill="currentColor"/>
                    <path d="M21.8906 4.26562H11.7468L11.4454 1.84772C11.3138 0.794344 10.4139 0 9.35236 0H2.10938C0.946266 0 0 0.946266 0 2.10938V17.625C0 18.7881 0.946266 19.7344 2.10938 19.7344H8.03827L8.33583 22.1523C8.46727 23.2035 9.36708 24 10.4289 24H21.8906C23.0537 24 24 23.0537 24 21.8906V6.375C24 5.21189 23.0537 4.26562 21.8906 4.26562ZM2.10938 18.3281C1.72167 18.3281 1.40625 18.0127 1.40625 17.625V2.10938C1.40625 1.72167 1.72167 1.40625 2.10938 1.40625H9.35236C9.70622 1.40625 10.0062 1.671 10.05 2.02191C10.1519 2.83922 11.9816 17.5174 12.0827 18.3281H2.10938ZM9.69019 21.6445L9.45511 19.7344H11.3415L9.69019 21.6445ZM22.5938 21.8906C22.5938 22.2783 22.2783 22.5938 21.8906 22.5938H10.7285L13.4052 19.4975C13.5422 19.343 13.6036 19.1378 13.5753 18.9339L11.9221 5.67188H21.8906C22.2783 5.67188 22.5938 5.9873 22.5938 6.375V21.8906Z" fill="currentColor"/>
                    </g>
                    <defs>
                    <clipPath id="clip0_34_14814">
                    <rect width="24" height="24" fill="white"/>
                    </clipPath>
                    </defs>
                  </svg>                      
                  Language :
                </span>
                <span class="td_semibold td_accent_color">English</span>
              </li>
              <li>
                <span>
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20.6926 4.25056C20.2951 4.16806 19.8976 4.11556 19.5001 4.04806V3.64306C19.4999 3.35082 19.4376 3.06195 19.3174 2.79559C19.1971 2.52923 19.0217 2.29147 18.8026 2.09806C18.5791 1.90185 18.3163 1.75554 18.0318 1.6689C17.7472 1.58225 17.4475 1.55725 17.1526 1.59556C15.1899 1.8282 13.3688 2.73478 12.0001 4.16056C10.6314 2.73478 8.81025 1.8282 6.84757 1.59556C6.55263 1.55725 6.25291 1.58225 5.96839 1.6689C5.68387 1.75554 5.42109 1.90185 5.19757 2.09806C4.97849 2.29147 4.80301 2.52923 4.68276 2.79559C4.56251 3.06195 4.50024 3.35082 4.50007 3.64306V4.04806C4.10257 4.11556 3.70507 4.16806 3.30757 4.25056C2.79797 4.35278 2.33948 4.62827 2.00999 5.03022C1.68049 5.43218 1.50032 5.93581 1.50007 6.45556V19.1606C1.49753 19.4801 1.5631 19.7966 1.69243 20.0889C1.82175 20.3811 2.01185 20.6425 2.25007 20.8556C2.49145 21.0656 2.77486 21.2218 3.08137 21.3136C3.38789 21.4054 3.71046 21.4308 4.02757 21.3881C6.62806 21.0375 9.27492 21.4005 11.6851 22.4381C11.7776 22.4773 11.8771 22.4974 11.9776 22.4974C12.0781 22.4974 12.1775 22.4773 12.2701 22.4381C14.6802 21.4005 17.3271 21.0375 19.9276 21.3881C20.2472 21.4311 20.5724 21.4049 20.881 21.3112C21.1896 21.2176 21.4745 21.0587 21.7163 20.8453C21.9581 20.6319 22.1513 20.369 22.2826 20.0745C22.414 19.7799 22.4805 19.4606 22.4776 19.1381V6.45556C22.4784 5.93896 22.3014 5.43782 21.9764 5.03629C21.6513 4.63477 21.198 4.35732 20.6926 4.25056ZM17.3476 3.08056C17.4308 3.06957 17.5153 3.07661 17.5956 3.1012C17.6758 3.12579 17.7498 3.16735 17.8126 3.22306C17.8717 3.27591 17.9189 3.34064 17.9512 3.41302C17.9835 3.4854 18.0002 3.56379 18.0001 3.64306V16.6256C18.0043 16.7989 17.9483 16.9684 17.8417 17.1052C17.735 17.2419 17.5843 17.3375 17.4151 17.3756C15.6621 17.6746 14.038 18.4893 12.7501 19.7156V5.54806C13.9206 4.18024 15.5607 3.30001 17.3476 3.08056ZM6.00007 3.64306C6.00201 3.49249 6.06269 3.34864 6.16917 3.24216C6.27565 3.13568 6.4195 3.075 6.57007 3.07306H6.65257C8.44054 3.29446 10.0808 4.17745 11.2501 5.54806V19.7156C9.96406 18.4838 8.33977 17.6639 6.58507 17.3606C6.41588 17.3225 6.26513 17.2269 6.15847 17.0902C6.05181 16.9534 5.99583 16.7839 6.00007 16.6106V3.64306ZM3.84757 19.9031C3.74122 19.917 3.63311 19.908 3.53054 19.8766C3.42797 19.8452 3.33333 19.7922 3.25301 19.7211C3.17268 19.65 3.10853 19.5625 3.0649 19.4645C3.02127 19.3665 2.99916 19.2603 3.00007 19.1531V6.45556C2.99653 6.2801 3.05464 6.10896 3.16427 5.97192C3.2739 5.83488 3.42811 5.74062 3.60007 5.70556C3.90007 5.64556 4.20007 5.60056 4.50007 5.55556V16.6256C4.49992 17.1508 4.68357 17.6596 5.01917 18.0637C5.35478 18.4678 5.82119 18.7418 6.33757 18.8381C7.44079 19.0318 8.48499 19.4757 9.39007 20.1356C7.57088 19.7308 5.69428 19.652 3.84757 19.9031ZM21.0001 19.1531C21.001 19.2603 20.9789 19.3665 20.9352 19.4645C20.8916 19.5625 20.8275 19.65 20.7471 19.7211C20.6668 19.7922 20.5722 19.8452 20.4696 19.8766C20.367 19.908 20.2589 19.917 20.1526 19.9031C18.3059 19.652 16.4293 19.7308 14.6101 20.1356C15.5152 19.4757 16.5593 19.0318 17.6626 18.8381C18.179 18.7418 18.6454 18.4678 18.981 18.0637C19.3166 17.6596 19.5002 17.1508 19.5001 16.6256V5.57056C19.8001 5.61556 20.1001 5.66056 20.4076 5.72056C20.5781 5.75715 20.7306 5.85206 20.8388 5.98895C20.9469 6.12584 21.004 6.29615 21.0001 6.47056V19.1531Z" fill="currentColor"/>
                  </svg>                      
                  Lessons :
                </span>
                <span class="td_semibold td_accent_color">12</span>
              </li>
              <li>
                <span>
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M22 1.60156H2C0.895979 1.60288 0.00132245 2.49754 0 3.60156V18.0016C0.00132245 19.1056 0.895979 20.0002 2 20.0016H14V22.0016C14 22.1633 14.0975 22.3091 14.2469 22.371C14.3964 22.4329 14.5684 22.3987 14.6828 22.2844L16 20.9672L17.3172 22.2844C17.4316 22.3987 17.6036 22.4329 17.7531 22.371C17.9025 22.3091 18 22.1633 18 22.0016V20.0016H22C23.104 20.0002 23.9987 19.1056 24 18.0016V3.60156C23.9987 2.49754 23.104 1.60288 22 1.60156ZM12.924 9.42756C12.8622 9.39904 12.8177 9.34265 12.8044 9.27587C12.7911 9.20909 12.8106 9.13999 12.8568 9.08996C13.2147 8.70097 13.2147 8.10256 12.8568 7.71356C12.8105 7.66348 12.7909 7.59421 12.8043 7.52731C12.8177 7.4604 12.8624 7.40397 12.9244 7.37556C13.4036 7.15259 13.6323 6.59993 13.4508 6.10356C13.4272 6.03966 13.4356 5.96831 13.4734 5.91164C13.5112 5.85498 13.5739 5.81985 13.642 5.81716C14.1702 5.79497 14.5934 5.3718 14.6156 4.84356C14.6182 4.77538 14.6534 4.71261 14.7102 4.67476C14.767 4.63691 14.8384 4.62858 14.9024 4.65236C15.3988 4.83275 15.9509 4.60413 16.1744 4.12556C16.2027 4.06361 16.259 4.01902 16.3258 4.00571C16.3926 3.9924 16.4617 4.01199 16.5116 4.05836C16.9007 4.41633 17.4993 4.41633 17.8884 4.05836C17.9384 4.01202 18.0076 3.9925 18.0745 4.00589C18.1413 4.01927 18.1977 4.06394 18.226 4.12596C18.4491 4.60476 19.0014 4.83338 19.4976 4.65236C19.5616 4.62858 19.633 4.63691 19.6898 4.67476C19.7466 4.71261 19.7818 4.77538 19.7844 4.84356C19.8068 5.37253 20.231 5.79599 20.76 5.81756C20.828 5.82012 20.8907 5.85515 20.9286 5.91177C20.9664 5.96838 20.9748 6.0397 20.9512 6.10356C20.7696 6.60004 20.9985 7.15287 21.478 7.37556C21.5398 7.40408 21.5843 7.46047 21.5976 7.52725C21.6109 7.59403 21.5914 7.66314 21.5452 7.71316C21.1873 8.10216 21.1873 8.70057 21.5452 9.08956C21.5915 9.13964 21.6111 9.20891 21.5977 9.27582C21.5843 9.34272 21.5396 9.39916 21.4776 9.42756C20.9984 9.65054 20.7697 10.2032 20.9512 10.6996C20.9748 10.7635 20.9664 10.8348 20.9286 10.8915C20.8908 10.9481 20.8281 10.9833 20.76 10.986C20.2302 11.0072 19.8057 11.4318 19.7844 11.9616C19.7818 12.0297 19.7466 12.0925 19.6898 12.1304C19.633 12.1682 19.5616 12.1765 19.4976 12.1528C19.0011 11.9722 18.449 12.2008 18.2256 12.6796C18.1984 12.7421 18.1419 12.7871 18.0748 12.7996C18.0078 12.8136 17.9383 12.794 17.8884 12.7472C17.4992 12.3894 16.9008 12.3894 16.5116 12.7472C16.4617 12.7939 16.3922 12.8135 16.3252 12.7996C16.258 12.787 16.2014 12.7421 16.174 12.6796C15.951 12.2006 15.3986 11.9719 14.9024 12.1532C14.8384 12.1769 14.767 12.1686 14.7102 12.1308C14.6534 12.0929 14.6182 12.0301 14.6156 11.962C14.5944 11.4321 14.1699 11.0072 13.64 10.9856C13.572 10.983 13.5093 10.948 13.4714 10.8914C13.4336 10.8347 13.4252 10.7634 13.4488 10.6996C13.6307 10.2036 13.4027 9.65097 12.924 9.42756ZM17.3176 16.9184L17.2 17.036V13.276C17.2535 13.2758 17.3051 13.296 17.3444 13.3324C17.5298 13.5061 17.7743 13.6028 18.0284 13.6028C18.0964 13.6026 18.1641 13.5959 18.2308 13.5828C18.5491 13.5206 18.8175 13.308 18.9508 13.0124C18.9977 12.9115 19.1141 12.8635 19.2184 12.902C19.3401 12.9451 19.469 12.9645 19.598 12.9592V17.036L18.6808 16.1188C18.5246 15.9626 18.2714 15.9626 18.1152 16.1188L17.3176 16.9184ZM17.2 21.036L16.2828 20.1188C16.1266 19.9626 15.8734 19.9626 15.7172 20.1188L14.8 21.036V12.9584C14.929 12.9637 15.0579 12.9443 15.1796 12.9012C15.2837 12.8625 15.4001 12.9104 15.4468 13.0112C15.5805 13.3076 15.8499 13.5205 16.1692 13.582C16.2452 13.597 16.3226 13.6036 16.4 13.6016V18.0016C16.4 18.1633 16.4975 18.3091 16.6469 18.371C16.7964 18.4329 16.9684 18.3987 17.0828 18.2844L17.2 18.1672V21.036ZM23.2 18.0016C23.2 18.6643 22.6627 19.2016 22 19.2016H18V17.3672L18.4 16.9672L19.7172 18.2844C19.8316 18.3987 20.0036 18.4329 20.1531 18.371C20.3025 18.3091 20.4 18.1633 20.4 18.0016V12.5244C20.5116 12.3676 20.5754 12.1818 20.5836 11.9896C20.5885 11.8786 20.6774 11.7898 20.7884 11.7852C21.1127 11.7727 21.4113 11.6055 21.5916 11.3357C21.7718 11.0658 21.8118 10.7259 21.6992 10.4216C21.661 10.3175 21.709 10.2015 21.8096 10.1548C22.1046 10.0192 22.3168 9.75046 22.3801 9.43202C22.4435 9.11358 22.3503 8.78409 22.1296 8.54596C22.0544 8.46422 22.0544 8.3385 22.1296 8.25676C22.3503 8.01871 22.4435 7.68927 22.3801 7.37088C22.3168 7.0525 22.1046 6.7838 21.8096 6.64836C21.7087 6.60196 21.6605 6.48578 21.6988 6.38156C21.8114 6.07722 21.7714 5.73733 21.5912 5.46747C21.4109 5.19761 21.1123 5.03047 20.788 5.01796C20.677 5.0133 20.5881 4.92452 20.5832 4.81356C20.5711 4.48917 20.4041 4.19026 20.1343 4.00981C19.8644 3.82936 19.5244 3.78925 19.22 3.90196C19.1159 3.94128 18.9991 3.8932 18.9528 3.79196C18.8173 3.49693 18.5485 3.28477 18.2301 3.22143C17.9116 3.15809 17.5821 3.25126 17.344 3.47196C17.2624 3.54709 17.1368 3.54709 17.0552 3.47196C16.8172 3.25125 16.4877 3.15808 16.1693 3.22142C15.8509 3.28477 15.5822 3.49694 15.4468 3.79196C15.4004 3.89326 15.2836 3.94146 15.1792 3.90236C14.8748 3.78965 14.5348 3.82976 14.2649 4.01021C13.9951 4.19066 13.8281 4.48957 13.816 4.81396C13.8111 4.92492 13.7222 5.0137 13.6112 5.01836C13.2869 5.03087 12.9883 5.19801 12.808 5.46787C12.6278 5.73773 12.5878 6.07762 12.7004 6.38196C12.7386 6.48607 12.6906 6.60207 12.59 6.64876C12.295 6.7843 12.0828 7.05307 12.0195 7.37151C11.9561 7.68994 12.0493 8.01944 12.27 8.25756C12.3452 8.3393 12.3452 8.46502 12.27 8.54676C12.0493 8.78481 11.9561 9.11426 12.0195 9.43264C12.0828 9.75102 12.295 10.0197 12.59 10.1552C12.6909 10.2016 12.7391 10.3177 12.7008 10.422C12.5882 10.7263 12.6282 11.0662 12.8084 11.3361C12.9887 11.6059 13.2873 11.7731 13.6116 11.7856C13.7226 11.7902 13.8115 11.879 13.8164 11.99C13.8247 12.1821 13.8884 12.3677 14 12.5244V19.2016H2C1.33726 19.2016 0.8 18.6643 0.8 18.0016V3.60156C0.8 2.93882 1.33726 2.40156 2 2.40156H22C22.6627 2.40156 23.2 2.93882 23.2 3.60156V18.0016Z" fill="currentColor"/>
                    <path d="M4.3999 16.0047C3.73716 16.0047 3.1999 15.4674 3.1999 14.8047V6.80469C3.1999 6.14195 3.73716 5.60469 4.3999 5.60469H11.5999C11.8208 5.60469 11.9999 5.4256 11.9999 5.20469C11.9999 4.98377 11.8208 4.80469 11.5999 4.80469H4.3999C3.29588 4.80601 2.40122 5.70067 2.3999 6.80469V14.8047C2.40122 15.9087 3.29588 16.8034 4.3999 16.8047H11.9999C12.2208 16.8047 12.3999 16.6256 12.3999 16.4047C12.3999 16.1838 12.2208 16.0047 11.9999 16.0047H4.3999Z" fill="currentColor"/>
                    <path d="M4.7999 11.1984H10.3999C10.6208 11.1984 10.7999 11.0194 10.7999 10.7984C10.7999 10.5775 10.6208 10.3984 10.3999 10.3984H4.7999C4.57899 10.3984 4.3999 10.5775 4.3999 10.7984C4.3999 11.0194 4.57899 11.1984 4.7999 11.1984Z" fill="currentColor"/>
                    <path d="M4.7999 9.60469H10.3999C10.6208 9.60469 10.7999 9.4256 10.7999 9.20469C10.7999 8.98377 10.6208 8.80469 10.3999 8.80469H4.7999C4.57899 8.80469 4.3999 8.98377 4.3999 9.20469C4.3999 9.4256 4.57899 9.60469 4.7999 9.60469Z" fill="currentColor"/>
                    <path d="M4.7999 8.00313H10.3999C10.6208 8.00313 10.7999 7.82404 10.7999 7.60313C10.7999 7.38221 10.6208 7.20312 10.3999 7.20312H4.7999C4.57899 7.20312 4.3999 7.38221 4.3999 7.60313C4.3999 7.82404 4.57899 8.00313 4.7999 8.00313Z" fill="currentColor"/>
                    <path d="M4.43334 14.9643C4.49698 15.1102 4.64102 15.2044 4.80014 15.2043C4.8552 15.2046 4.90971 15.1933 4.96014 15.1711C5.33046 15.0336 5.67079 14.8259 5.96254 14.5595C6.07084 14.4515 6.16554 14.3306 6.24454 14.1995C6.39728 14.3713 6.5768 14.5171 6.77614 14.6315C7.05414 14.8133 7.40015 14.8575 7.71494 14.7515C7.8356 14.7047 7.94475 14.6324 8.03494 14.5395C8.21594 14.6526 8.41535 14.7332 8.62414 14.7775L8.92654 14.8491C9.54378 15.0299 10.1851 15.1149 10.8281 15.1011C10.9707 15.0908 11.0969 15.0053 11.1593 14.8767C11.2216 14.7481 11.2107 14.596 11.1305 14.4777C11.0503 14.3594 10.9131 14.2928 10.7705 14.3031C10.2094 14.3105 9.65047 14.2322 9.11294 14.0711L8.80374 13.9979C8.43054 13.9119 8.33454 13.7615 8.29494 13.6555C8.22523 13.4694 8.02946 13.3627 7.83527 13.405C7.64108 13.4473 7.50737 13.6257 7.52134 13.8239C7.52581 13.8957 7.49184 13.9643 7.43214 14.0043C7.33868 14.0162 7.24422 13.9919 7.16814 13.9363C6.84465 13.7349 6.60139 13.4272 6.48014 13.0659C6.41131 12.8799 6.21658 12.7724 6.02251 12.8133C5.82843 12.8542 5.69364 13.0312 5.70574 13.2291C5.71247 13.5153 5.60039 13.7914 5.39614 13.9919C5.17403 14.1862 4.91765 14.3373 4.64014 14.4375C4.54282 14.4799 4.46635 14.5593 4.42756 14.6581C4.38878 14.7569 4.39085 14.8671 4.43334 14.9643Z" fill="currentColor"/>
                    <path d="M17.2 11.6031C18.9673 11.6031 20.4 10.1704 20.4 8.40313C20.4 6.63581 18.9673 5.20312 17.2 5.20312C15.4327 5.20312 14 6.63581 14 8.40313C14.002 10.1696 15.4335 11.6011 17.2 11.6031ZM17.2 6.00313C18.5255 6.00313 19.6 7.07764 19.6 8.40313C19.6 9.72861 18.5255 10.8031 17.2 10.8031C15.8745 10.8031 14.8 9.72861 14.8 8.40313C14.8013 7.07819 15.8751 6.00445 17.2 6.00313Z" fill="currentColor"/>
                  </svg>                      
                  Certifications :
                </span>
                <span class="td_semibold td_accent_color">Yes</span>
              </li>
            </ul>
            <div class="td_height_30 td_height_lg_30"></div>
            <a href="#lead-generate-popup" class="td_btn td_style_1 td_radius_10 td_medium w-100 open-popup-link">
              <span class="td_btn_in td_white_color td_accent_bg">
                <span>Enroll Now</span>
              </span>             
            </a>
        </div>
      </div>
    </div>    
  </div>

  <div class="td_page_heading_shape_1 position-absolute td_hover_layer_3"></div>
  <div class="td_page_heading_shape_2 position-absolute td_hover_layer_5"></div>
  <div class="td_page_heading_shape_3 position-absolute">
    <img src="assets/img/others/page_heading_shape_3.svg" alt="">
  </div>
  <div class="td_page_heading_shape_4 position-absolute">
    <img src="assets/img/others/page_heading_shape_4.svg" alt="">
  </div>
  <div class="td_page_heading_shape_5 position-absolute">
    <img src="assets/img/others/page_heading_shape_5.svg" alt="">
  </div>
  <div class="td_page_heading_shape_6 position-absolute td_hover_layer_3"></div>
</section>
<!-- Start Course Details Section -->
<section>
  <div class="container">
    <div class="row td_gap_y_50">
      <div class="col-lg-8">

        <div class="td_course_details">
          
          <div class="row mb-5">
            <h2 class="td_fs_24 td_mb_20">Courses Descriptions</h2>
            {!! $contentMain->description !!}
          </div>

          <div class="td_tabs td_style_1 td_mb_50 "> 
            <h2 class="td_fs_24 td_mb_30">Main Topics you’ll Learn it?</h2>
            
            <div class="course_highlights">
              {!! $contentMain->highlights !!}
            </div>
          </div>          
        </div>
      </div>
      <div class="col-lg-4">
        
      </div>
    </div>
  </div>
</section>
<!-- End Course Details Section -->

<section class="td_page_heading" style="background: #eceddb;">
  <div class="container-fluid">
    <div class="container">
      <div class="syllabus_content_wrapper">
        <h2 class="td_fs_40 td_mb_20">This Course Syllabus</h2>
        <div class="row mb-5 course_syllabus">
          <div class="col-md-8">
            {!! $contentMain->syllabus !!}
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Start Popular Courses -->
<section>
  <div class="td_height_60 td_height_lg_60"></div>
  <div class="container">
    <h2 class="td_fs_48 td_mb_50">Courses you May Like</h2>
    <div class="row td_gap_y_30 td_row_gap_30">
      @foreach($courses as $value)
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
<!-- End Popular Courses -->
@endsection