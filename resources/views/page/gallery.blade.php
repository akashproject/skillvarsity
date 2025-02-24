@extends('layouts.main')
    @section('content')
    <section class="td_page_heading td_center td_bg_filed td_hobble" data-src="{{ url('img/others/page_heading_bg.jpg') }}" style="background-image: url(&quot;assets/frontend/img/others/page_heading_bg.jpg&quot;);">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                  <div class="td_page_heading_in">
                    <ol class="breadcrumb m-0 td_fs_20 td_opacity_8 td_semibold ">
                        <li class="breadcrumb-item"><a href="{{ route('website') }}">Home</a></li>
                        <li class="breadcrumb-item active">{{ $contentMain->name}}</li>
                    </ol>
                    <h1 class=" td_fs_48 td_mb_10">{{ $contentMain->name}}</h1>
                    <div class="mb-0">{{ $contentMain->excerpt}}</div>
                  </div>
                </div>
                <div class="col-md-4 position-relative">
                    <img src="{{ url('assets/frontend/img/course-banner.gif') }}" >
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
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="td_mb_40 position-relative">
                        <ul class="td_list td_style_2 td_fs_24 td_medium td_heading_color td_mp_0">
                            @foreach(getGallery() as $value)
                            <li style="padding: 10px 32px;border: 1px solid #890c25;border-radius: 20px;">
                                <a href="?gallery-slug={{$value->slug}}" ><i class="fa fa-image" aria-hidden="true"></i>
                                {{ $value->name}}</a>
                            </li>
                            @endforeach
                        </ul>
                        <div class="td_list_2_shape">
                            <svg width="220" height="209" viewBox="0 0 220 209" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M90.7847 61.3658C91.6024 51.6359 99.3778 44.2904 108.872 44.2904H109.432L110.576 44.3708L199.107 52.276L108.927 0.757812L0 62.9865L108.927 125.219L174.727 87.6264L107.349 81.6096C97.3438 80.7169 89.9157 71.6346 90.7847 61.3658Z" fill="#00001B"></path>
                            <path d="M219.905 71.3829C219.427 68.7423 217.086 66.3805 214.452 66.154L109.454 56.7779C106.028 56.4523 103.168 59.0162 102.88 62.4429C102.535 65.8041 104.996 68.8134 108.399 69.1914L207.853 78.0735V121.651C207.766 123.846 208.902 125.914 210.817 127.039C212.731 128.162 215.116 128.162 217.032 127.039C218.947 125.914 220.083 123.846 219.994 121.651V72.3617C219.994 72.0323 219.964 71.7048 219.905 71.3829Z" fill="#00001B"></path>
                            <path d="M111.88 137.797C110.057 138.85 107.799 138.85 105.976 137.797L52.0037 106.964L14.5195 155.632C64.6571 160.466 97.5725 194.278 109.222 208.324C121.927 194.628 157.626 160.743 203.851 155.686L167.923 105.781L111.88 137.797Z" fill="#00001B"></path>
                            </svg>                  
                        </div>
                    </div>
                   
                </div>
                <div class="col-md-8">
                    
                        <div class="row">
                            @foreach(getGalleryImage() as $value)
                            <div class="col-md-4 mb-2">
                                <div class="gallery-image">
                                    <a href="#{{ $value}}">
                                        <img src="{{ $value}}">
                                    </a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    
                </div>
            </div>
        </div>
    </section>
@endsection