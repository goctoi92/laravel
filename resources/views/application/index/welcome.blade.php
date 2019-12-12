@extends('application.master',[
        'title'=>'Bóng đá 365 - Trang chuyên tin bóng đá',
        'description' => 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Ciceros De Finibus Bonorum et Malorum for use in a type specimen book. It usually begins with',
        'keyword' => 'Lorem ipsum, or lipsum, as it is, sometimes known'
    ])
@section('content')

    <div class="col-lg-9">
        <div class="section_panel mb-3 mt-5 d-flex flex-row align-items-center justify-content-start">
            <div class="section_title">What's News Trending</div>
            <div class="section_tags ml-auto d-xs-none">
                <ul>
                    <li class="active"><a href="category.html">all</a></li>
                    <li><a href="category.html">vogue</a></li>
                    <li><a href="category.html">health &amp; fitness</a></li>
                    <li><a href="category.html">travel</a></li>
                </ul>
            </div>
        </div>
        <div id="main-content" class="p-0"></div>
        <div class="section_panel mb-5 mt-10 d-flex flex-row align-items-center justify-content-start">
            <div class="section_title">What's Videos hot</div>
            <div class="section_tags ml-auto d-xs-none">
                <ul>
                    <li class="active"><a href="category.html">all</a></li>
                    <li><a href="category.html">style hunter</a></li>
                    <li><a href="category.html">health &amp; fitness</a></li>
                    <li><a href="category.html">travel</a></li>
                </ul>
            </div>
        </div>
        <div id="main-content-video" class="p-0"></div>
    </div>


    <div id="right-sidebar" class="mt-1 col-lg-3">
        <div class="sidebar">
            <div class="sidebar_background"></div>

            <!-- Top Stories -->

            <div class="sidebar_section">
                <div class="sidebar_title_container">
                    <div class="sidebar_title">Top Stories</div>
                    <div class="sidebar_slider_nav">
                        <div class="custom_nav_container sidebar_slider_nav_container">
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     width="7px" height="12px" viewBox="0 0 7 12" enable-background="new 0 0 7 12" xml:space="preserve">
												<polyline fill="#bebebe" points="0,5.61 5.609,0 7,0 7,1.438 2.438,6 7,10.563 7,12 5.609,12 -0.002,6.39 "/>
											</svg>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     width="7px" height="12px" viewBox="0 0 7 12" enable-background="new 0 0 7 12" xml:space="preserve">
												<polyline fill="#bebebe" points="6.998,6.39 1.389,12 -0.002,12 -0.002,10.562 4.561,6 -0.002,1.438 -0.002,0 1.389,0 7,5.61 "/>
											</svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="sidebar_section_content">

                    <!-- Top Stories Slider -->
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="10000">
                        <div class="carousel-inner">

                            <!-- Top Stories Slider Item -->
                            <div class="carousel-item active">

                                <!-- Sidebar Post -->
                                <div class="side_post">
                                    <a href="post.html">
                                        <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                            <div class="side_post_image"><div><img src="/images/application/post/vid_1.jpg" alt=""></div></div>
                                            <div class="side_post_content">
                                                <div class="side_post_title">How Did van Gogh’s Turbulent Mind</div>
                                                <small class="post_meta">vnExpress</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <!-- Sidebar Post -->
                                <div class="side_post">
                                    <a href="post.html">
                                        <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                            <div class="side_post_image"><div><img src="/images/application/post/vid_2.jpg" alt=""></div></div>
                                            <div class="side_post_content">
                                                <div class="side_post_title">How Did van Gogh’s Turbulent Mind</div>
                                                <small class="post_meta">vnExpress</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <!-- Sidebar Post -->
                                <div class="side_post">
                                    <a href="post.html">
                                        <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                            <div class="side_post_image"><div><img src="/images/application/post/vid_3.jpg" alt=""></div></div>
                                            <div class="side_post_content">
                                                <div class="side_post_title">How Did van Gogh’s Turbulent Mind</div>
                                                <small class="post_meta">vnExpress</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <!-- Sidebar Post -->
                                <div class="side_post">
                                    <a href="post.html">
                                        <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                            <div class="side_post_image"><div><img src="/images/application/post/vid_4.jpg" alt=""></div></div>
                                            <div class="side_post_content">
                                                <div class="side_post_title">How Did van Gogh’s Turbulent Mind</div>
                                                <small class="post_meta">vnExpress</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>

                            <!-- Top Stories Slider Item -->
                            <div class="carousel-item">

                                <!-- Sidebar Post -->
                                <div class="side_post">
                                    <a href="post.html">
                                        <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                            <div class="side_post_image"><div><img src="/images/application/post/vid_1.jpg" alt=""></div></div>
                                            <div class="side_post_content">
                                                <div class="side_post_title">How Did van Gogh’s Turbulent Mind</div>
                                                <small class="post_meta">vnExpress</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <!-- Sidebar Post -->
                                <div class="side_post">
                                    <a href="post.html">
                                        <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                            <div class="side_post_image"><div><img src="/images/application/post/vid_2.jpg" alt=""></div></div>
                                            <div class="side_post_content">
                                                <div class="side_post_title">How Did van Gogh’s Turbulent Mind</div>
                                                <small class="post_meta">vnExpress</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <!-- Sidebar Post -->
                                <div class="side_post">
                                    <a href="post.html">
                                        <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                            <div class="side_post_image"><div><img src="/images/application/post/vid_3.jpg" alt=""></div></div>
                                            <div class="side_post_content">
                                                <div class="side_post_title">How Did van Gogh’s Turbulent Mind</div>
                                                <small class="post_meta">vnExpress</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <!-- Sidebar Post -->
                                <div class="side_post">
                                    <a href="post.html">
                                        <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                            <div class="side_post_image"><div><img src="/images/application/post/vid_4.jpg" alt=""></div></div>
                                            <div class="side_post_content">
                                                <div class="side_post_title">How Did van Gogh’s Turbulent Mind</div>
                                                <small class="post_meta">vnExpress</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>

                            <!-- Top Stories Slider Item -->
                            <div class="carousel-item">

                                <!-- Sidebar Post -->
                                <div class="side_post">
                                    <a href="post.html">
                                        <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                            <div class="side_post_image"><div><img src="/images/application/post/vid_1.jpg" alt=""></div></div>
                                            <div class="side_post_content">
                                                <div class="side_post_title">How Did van Gogh’s Turbulent Mind</div>
                                                <small class="post_meta">vnExpress</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <!-- Sidebar Post -->
                                <div class="side_post">
                                    <a href="post.html">
                                        <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                            <div class="side_post_image"><div><img src="/images/application/post/vid_2.jpg" alt=""></div></div>
                                            <div class="side_post_content">
                                                <div class="side_post_title">How Did van Gogh’s Turbulent Mind</div>
                                                <small class="post_meta">vnExpress</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <!-- Sidebar Post -->
                                <div class="side_post">
                                    <a href="post.html">
                                        <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                            <div class="side_post_image"><div><img src="/images/application/post/vid_3.jpg" alt=""></div></div>
                                            <div class="side_post_content">
                                                <div class="side_post_title">How Did van Gogh’s Turbulent Mind</div>
                                                <small class="post_meta">vnExpress</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <!-- Sidebar Post -->
                                <div class="side_post">
                                    <a href="post.html">
                                        <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                            <div class="side_post_image"><div><img src="/images/application/post/vid_4.jpg" alt=""></div></div>
                                            <div class="side_post_content">
                                                <div class="side_post_title">How Did van Gogh’s Turbulent Mind</div>
                                                <small class="post_meta">vnExpress</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Newest Videos -->

            <div class="sidebar_section newest_videos">
                <div class="sidebar_title_container">
                    <div class="sidebar_title">Newest Videos</div>
                    <div class="sidebar_slider_nav">
                        <div class="custom_nav_container sidebar_slider_nav_container">
                            <a class="carousel-control-prev" href="#carouselExampleControlsVideo" role="button" data-slide="prev">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     width="7px" height="12px" viewBox="0 0 7 12" enable-background="new 0 0 7 12" xml:space="preserve">
												<polyline fill="#bebebe" points="0,5.61 5.609,0 7,0 7,1.438 2.438,6 7,10.563 7,12 5.609,12 -0.002,6.39 "/>
											</svg>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControlsVideo" role="button" data-slide="next">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     width="7px" height="12px" viewBox="0 0 7 12" enable-background="new 0 0 7 12" xml:space="preserve">
												<polyline fill="#bebebe" points="6.998,6.39 1.389,12 -0.002,12 -0.002,10.562 4.561,6 -0.002,1.438 -0.002,0 1.389,0 7,5.61 "/>
											</svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="sidebar_section_content">

                    <!-- Sidebar Slider -->
                    <div id="carouselExampleControlsVideo" class="carousel slide" data-ride="carousel" data-interval="7000">
                        <div class="carousel-inner">

                            <!-- Top Stories Slider Item -->
                            <div class="carousel-item active">

                                <!-- Sidebar Post -->
                                <div class="side_post">
                                    <a href="post.html">
                                        <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                            <div class="side_post_image"><div><img class="rounded-circle" src="/images/application/post/vid_1.jpg" alt=""></div></div>
                                            <div class="side_post_content">
                                                <div class="side_post_title">How Did van Gogh’s Turbulent Mind</div>
                                                <small class="post_meta">vnExpress</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <!-- Sidebar Post -->
                                <div class="side_post">
                                    <a href="post.html">
                                        <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                            <div class="side_post_image"><div><img class="rounded-circle" src="/images/application/post/vid_2.jpg" alt=""></div></div>
                                            <div class="side_post_content">
                                                <div class="side_post_title">How Did van Gogh’s Turbulent Mind</div>
                                                <small class="post_meta">vnExpress</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <!-- Sidebar Post -->
                                <div class="side_post">
                                    <a href="post.html">
                                        <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                            <div class="side_post_image"><div><img class="rounded-circle" src="/images/application/post/vid_3.jpg" alt=""></div></div>
                                            <div class="side_post_content">
                                                <div class="side_post_title">How Did van Gogh’s Turbulent Mind</div>
                                                <small class="post_meta">vnExpress</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <!-- Sidebar Post -->
                                <div class="side_post">
                                    <a href="post.html">
                                        <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                            <div class="side_post_image"><div><img class="rounded-circle" src="/images/application/post/vid_4.jpg" alt=""></div></div>
                                            <div class="side_post_content">
                                                <div class="side_post_title">How Did van Gogh’s Turbulent Mind</div>
                                                <small class="post_meta">vnExpress</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>

                            <!-- Top Stories Slider Item -->
                            <div class="carousel-item">

                                <!-- Sidebar Post -->
                                <div class="side_post">
                                    <a href="post.html">
                                        <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                            <div class="side_post_image"><div><img class="rounded-circle" src="/images/application/post/vid_1.jpg" alt=""></div></div>
                                            <div class="side_post_content">
                                                <div class="side_post_title">How Did van Gogh’s Turbulent Mind</div>
                                                <small class="post_meta">vnExpress</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <!-- Sidebar Post -->
                                <div class="side_post">
                                    <a href="post.html">
                                        <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                            <div class="side_post_image"><div><img class="rounded-circle" src="/images/application/post/vid_2.jpg" alt=""></div></div>
                                            <div class="side_post_content">
                                                <div class="side_post_title">How Did van Gogh’s Turbulent Mind</div>
                                                <small class="post_meta">vnExpress</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <!-- Sidebar Post -->
                                <div class="side_post">
                                    <a href="post.html">
                                        <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                            <div class="side_post_image"><div><img class="rounded-circle" src="/images/application/post/vid_3.jpg" alt=""></div></div>
                                            <div class="side_post_content">
                                                <div class="side_post_title">How Did van Gogh’s Turbulent Mind</div>
                                                <small class="post_meta">vnExpress</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <!-- Sidebar Post -->
                                <div class="side_post">
                                    <a href="post.html">
                                        <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                            <div class="side_post_image"><div><img class="rounded-circle" src="/images/application/post/vid_4.jpg" alt=""></div></div>
                                            <div class="side_post_content">
                                                <div class="side_post_title">How Did van Gogh’s Turbulent Mind</div>
                                                <small class="post_meta">vnExpress</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>

                            <!-- Top Stories Slider Item -->
                            <div class="carousel-item">

                                <!-- Sidebar Post -->
                                <div class="side_post">
                                    <a href="post.html">
                                        <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                            <div class="side_post_image"><div><img class="rounded-circle" src="/images/application/post/vid_1.jpg" alt=""></div></div>
                                            <div class="side_post_content">
                                                <div class="side_post_title">How Did van Gogh’s Turbulent Mind</div>
                                                <small class="post_meta">vnExpress</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <!-- Sidebar Post -->
                                <div class="side_post">
                                    <a href="post.html">
                                        <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                            <div class="side_post_image"><div><img class="rounded-circle" src="/images/application/post/vid_2.jpg" alt=""></div></div>
                                            <div class="side_post_content">
                                                <div class="side_post_title">How Did van Gogh’s Turbulent Mind</div>
                                                <small class="post_meta">vnExpress</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <!-- Sidebar Post -->
                                <div class="side_post">
                                    <a href="post.html">
                                        <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                            <div class="side_post_image"><div><img class="rounded-circle" src="/images/application/post/vid_3.jpg" alt=""></div></div>
                                            <div class="side_post_content">
                                                <div class="side_post_title">How Did van Gogh’s Turbulent Mind</div>
                                                <small class="post_meta">vnExpress</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <!-- Sidebar Post -->
                                <div class="side_post">
                                    <a href="post.html">
                                        <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                            <div class="side_post_image"><div><img class="rounded-circle" src="/images/application/post/vid_4.jpg" alt=""></div></div>
                                            <div class="side_post_content">
                                                <div class="side_post_title">How Did van Gogh’s Turbulent Mind</div>
                                                <small class="post_meta">vnExpress</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
@stop

