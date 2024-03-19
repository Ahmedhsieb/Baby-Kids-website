@include('assets.navbar')
        <div class="nicdark_section nicdark_navigation fade-down">

    <div class="nicdark_menu_boxed">

        <div class="nicdark_space3 nicdark_bg_gradient"></div>

        <div class="nicdark_section nicdark_bg_grey nicdark_shadow nicdark_radius_bottom">
            <div class="nicdark_container nicdark_clearfix">

                <div class="grid grid_12 percentage">

                        <div class="nicdark_space20"></div>

                        <div class="nicdark_logo nicdark_marginleft10">
                            <a href=""><img alt="" src="{{asset('EndUserAssets/img/logo.png')}}"></a>
                        </div>

                        <a class="nicdark_btn_icon nicdark_zoom nicdark_bg_yellow_hover nicdark_right_sidebar_btn_open nicdark_marginright10 nicdark_bg_orange extrasmall nicdark_radius white right"><i class="icon-basket-1"></i></a>

                        <nav>
                            <ul class="nicdark_menu nicdark_margin010 nicdark_padding50">

                                <li class="orange">
                                    <a href="">HOME</a>
                                </li>
                                <li class="red">
                                    <a href="#">PAGES</a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="teachers.html">Teachers</a>
                                        </li>
                                        <li>
                                            <a href="courses.html">Courses</a>
                                        </li>
                                        <li><a href="faq.html">Faq</a></li>
                                    </ul>
                                </li>
                                <li class="blue">
                                    <a href="">COURSES</a>
                                </li>
                                <li class="grey">
                                    <a href="">CONTACTS</a>
                                </li>
                            </ul>
                        </nav>

                        <div class="nicdark_space20"></div>

                </div>

            </div>
            <!--end container-->

        </div>
        <!--end header-->

    </div>

</div>




<!--start-->
<!--start section-->
<section class="nicdark_section">

	<div class="tp-banner-container">
		<div class="nicdark_slide1" >

			<ul>

                @foreach($sliders as $slider)
                    <!--start Slider-->
                    <li data-transition="fade" data-slotamount="7" data-masterspeed="1000" data-saveperformance="on"  data-title="LESSON">
                        <img src="{{asset($slider->image)}}"  alt="" data-lazyload="{{asset($slider->image)}}" data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat">
                    </li>
                    <!--end Slider-->
                @endforeach


			</ul>

		</div>
	</div>

</section>
<!--end section--><!--start section-->
<section class="nicdark_section nicdark_margintop45_negative">

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">

		<div class="grid grid_12 percentage nomargin">
			<div class="nicdark_textevidence center">


                <div class="nicdark_textevidence nicdark_width_percentage50 nicdark_bg_blue nicdark_shadow nicdark_radius_left">
			        <div class="nicdark_textevidence">
			            <div class="nicdark_margin30">
			                <h2 class="white subtitle"><a class="white" href="#course">COURSES</a></h2>
			           </div>
			            <i class="nicdark_zoom icon-pencil-2 nicdark_iconbg left extrabig blue nicdark_displaynone_ipadland nicdark_displaynone_ipadpotr"></i>
			        </div>
			    </div>

			    <div class="nicdark_textevidence nicdark_width_percentage50 nicdark_bg_green nicdark_shadow nicdark_radius_right">
			        <div class="nicdark_textevidence">
			            <div class="nicdark_margin30">
			                <h2 class="white subtitle"><a class="white" href="#teacher">TEACHERS</a></h2>
			           </div>
			            <i class="nicdark_zoom icon-graduation-cap-1 nicdark_iconbg left extrabig green nicdark_displaynone_ipadland nicdark_displaynone_ipadpotr"></i>
			        </div>
			    </div>



			    <div class="nicdark_space5"></div>
			</div>
		</div>

	</div>
    <!--end nicdark_container-->

</section>
<!--end section--><!--start section-->
<section class="nicdark_section">

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">


        <div class="nicdark_space50"></div>


        <div class="grid grid_12">
            <h1 class="subtitle greydark">OUR ACTIVITIES</h1>
            <div class="nicdark_space20"></div>
            <h3 class="subtitle grey">OUR BEST SERVICES FOR YOUR KIDS</h3>
            <div class="nicdark_space20"></div>
            <div class="nicdark_divider left big"><span class="nicdark_bg_yellow nicdark_radius"></span></div>
            <div class="nicdark_space10"></div>
        </div>


        @foreach($activities as $activity)
            <div class="grid grid_4 nicdark_relative">

                <div class="nicdark_btn_iconbg nicdark_bg_yellow nicdark_absolute extrabig nicdark_shadow nicdark_radius">
                    <div>
                        <i class="nicdark_iconbg left big white">
                            <img width="50px" height="50px" src="{{asset($activity->icon)}}">
                        </i>
                    </div>
                </div>

                <div class="nicdark_activity nicdark_marginleft100">
                    <h4>{{$activity->title}}</h4>
                    <div class="nicdark_space20"></div>
                    <p>{{$activity->slug}}</p>
                    <div class="nicdark_space20"></div>
                    <a href="#" class="nicdark_btn grey"><i class="icon-right-open-outline"></i> More</a>
                    <div class="nicdark_space20"></div>
                </div>

            </div>
        @endforeach



        <div class="nicdark_space50"></div>

    </div>
    <!--end nicdark_container-->

</section>
<!--end section--><!--start section-->
<div id="nicdark_parallax_2_btns" class="nicdark_section nicdark_imgparallax nicdark_parallax_img2">

    <div class="nicdark_filter greydark">

        <!--start nicdark_container-->
        <div class="nicdark_container nicdark_clearfix">

            <div class="nicdark_space40"></div>
            <div class="nicdark_space50"></div>

            <div class="grid grid_6 nicdark_aligncenter_iphoneland nicdark_aligncenter_iphonepotr">
                <a href="courses.html" class="nicdark_disable_floatright_iphoneland nicdark_disable_floatright_iphonepotr nicdark_btn nicdark_bg_blue medium right nicdark_shadow nicdark_radius white nicdark_press"><i class="icon-th-outline"></i>&nbsp;&nbsp;&nbsp;ALL COURSES</a>
            </div>
            <div class="grid grid_6 nicdark_aligncenter_iphoneland nicdark_aligncenter_iphonepotr">
                <a href="contact-1.html" class=" nicdark_btn nicdark_bg_blue medium nicdark_shadow nicdark_radius white nicdark_press"><i class="icon-pencil-1"></i>&nbsp;&nbsp;&nbsp;CONTACT US</a>
            </div>

            <div class="nicdark_space40"></div>
            <div class="nicdark_space50"></div>

        </div>
        <!--end nicdark_container-->

    </div>

</div>
<!--end section-->

<!--start section-->
<section  class="nicdark_section">

    <!--start nicdark_container-->
    <div id="teacher" class="nicdark_container nicdark_clearfix">


        <div class="nicdark_space50"></div>


        <div class="grid grid_12">
            <h1 class="subtitle greydark">OUR Teachers</h1>
            <div class="nicdark_space20"></div>
            <h3 class="subtitle grey">DON'T MISS TO KNOW OUR TEACHERS</h3>
            <div class="nicdark_space20"></div>
            <div class="nicdark_divider left big"><span class="nicdark_bg_green nicdark_radius"></span></div>
            <div class="nicdark_space10"></div>
        </div>

        @foreach($teachers as $teacher)
            <div class="grid grid_3">

                <!--archive1-->
                <div class="nicdark_archive1 nicdark_bg_yellow nicdark_radius nicdark_shadow">
                    <img alt=""  src="{{asset($teacher->image)}}">

                    <div class="nicdark_textevidence nicdark_bg_greydark">
                        <h4 class="white nicdark_margin20">{{$teacher->name}}</h4>
                    </div>

                    <div class="nicdark_margin20">
                        <h5 class="white"><i class="icon-pin-outline"></i> {{$teacher->course->name}}</h5>
                        <div class="nicdark_space20"></div>
                        <div class="nicdark_divider left small"><span class="nicdark_bg_white nicdark_radius"></span></div>
                        <div class="nicdark_space20"></div>
                        <p class="white">{{$teacher->description}}</p>
                        <div class="nicdark_space20"></div>
                        <a href="" class="nicdark_press nicdark_btn nicdark_bg_yellowdark white nicdark_radius nicdark_shadow medium">CHECK IT</a>
                    </div>

                </div>
                <!--archive1-->

            </div>
        @endforeach




        <div class="nicdark_space50"></div>

   </div>
   <!--end nicdark_container-->

</section>
<!--end section-->

<!--start section-->
<section id="nicdark_parallax_countdown" class="nicdark_section nicdark_imgparallax nicdark_parallax_img3">

    <div class="nicdark_filter greydark">

        <!--start nicdark_container-->
        <div class="nicdark_container nicdark_clearfix">

            <div class="nicdark_space40"></div>
            <div class="nicdark_space50"></div>

            <div class="grid grid_12">
                <h1 class="white center subtitle">FIRST DAY AT SCHOOL !</h1>
                <div class="nicdark_space10"></div>
                <h3 class="subtitle center white">ARE YOU READY ?</h3>
                <div class="nicdark_space20"></div>
                <div class="nicdark_divider center big"><span class="nicdark_bg_white nicdark_radius"></span></div>
                <div class="nicdark_space20"></div>
            </div>

            <div class="nicdark_countdown"></div>

            <div class="nicdark_space40"></div>
            <div class="nicdark_space50"></div>

        </div>
        <!--end nicdark_container-->

    </div>

</section>
<!--end section-->

<!--start section-->
<section class="nicdark_section">

    <!--start nicdark_container-->
    <div id="course" class="nicdark_container nicdark_clearfix">


        <div class="nicdark_space50"></div>


        <div class="grid grid_12">
            <h1 class="subtitle greydark">ORANGE CLASS</h1>
            <div class="nicdark_space20"></div>
            <h3 class="subtitle grey">FULL TIME · AGE: 3-6 YEARS OLD</h3>
            <div class="nicdark_space20"></div>
            <div class="nicdark_divider left big"><span class="nicdark_bg_orange nicdark_radius"></span></div>
            <div class="nicdark_space10"></div>
        </div>



        @foreach($courses as $course)
            <div class="grid grid_3">

                <!--archive1-->
                <div class="nicdark_archive1 nicdark_bg_yellow nicdark_radius nicdark_shadow">


                    <img alt=""  src="{{asset($course->image)}}">

                    <div class="nicdark_textevidence nicdark_bg_greydark">
                        <h4 class="white nicdark_margin20">{{$course->name}}</h4>
                    </div>

                    <div class="nicdark_margin20">
                        <h5 class="white"><i class="icon-pin-outline"></i> {{$course->price}}</h5>
                        <div class="nicdark_space20"></div>
                        <div class="nicdark_divider left small"><span class="nicdark_bg_white nicdark_radius"></span></div>
                        <div class="nicdark_space20"></div>
                        <p class="white">{{$course->description}}</p>
                        <div class="nicdark_space20"></div>
                        <a href="" class="nicdark_press nicdark_btn nicdark_bg_yellowdark white nicdark_radius nicdark_shadow medium">CHECK IT</a>
                    </div>

                </div>
                <!--archive1-->

            </div>
        @endforeach


        <div class="nicdark_space50"></div>


	</div>
	<!--end nicdark_container-->

</section>
<!--end section--><!--start section-->
<section id="nicdark_parallax_counter" class="nicdark_section nicdark_imgparallax nicdark_parallax_img1">

    <div class="nicdark_filter greydark">

        <!--start nicdark_container-->
        <div class="nicdark_container nicdark_clearfix">

            <div class="nicdark_space40"></div>
            <div class="nicdark_space50"></div>


            <div class="grid grid_3">
                <div class="nicdark_textevidence center">
                    <a href="#" class="nicdark_width50 white nicdark_btn nicdark_bg_blue nicdark_bg_bluedark_hover nicdark_transition nicdark_shadow extrasize nicdark_radius_circle subtitle nicdark_counter" data-to="69" data-speed="1000">69</a>
                    <div class="nicdark_space20"></div>
                    <h4 class="white">TEACHERS</h4>
                </div>
            </div>
            <div class="grid grid_3">
                <div class="nicdark_textevidence center">
                    <a href="#" class="nicdark_width50 white nicdark_btn nicdark_bg_green nicdark_bg_greendark_hover nicdark_transition nicdark_shadow extrasize nicdark_radius_circle subtitle nicdark_counter" data-to="32" data-speed="1000">32</a>
                    <div class="nicdark_space20"></div>
                    <h4 class="white">COURSES</h4>
                </div>
            </div>
            <div class="grid grid_3">
                <div class="nicdark_textevidence center">
                    <a href="#" class="nicdark_width50 white nicdark_btn nicdark_bg_yellow nicdark_bg_yellowdark_hover nicdark_transition nicdark_shadow extrasize nicdark_radius_circle subtitle nicdark_counter" data-to="48" data-speed="1000">48</a>
                    <div class="nicdark_space20"></div>
                    <h4 class="white">LESSONS</h4>
                </div>
            </div>
            <div class="grid grid_3">
                <div class="nicdark_textevidence center">
                    <a href="#" class="nicdark_width50 white nicdark_btn nicdark_bg_violet nicdark_bg_violetdark_hover nicdark_transition nicdark_shadow extrasize nicdark_radius_circle subtitle nicdark_counter" data-to="72" data-speed="1000">72</a>
                    <div class="nicdark_space20"></div>
                    <h4 class="white">ACTIVITIES</h4>
                </div>
            </div>

            <div class="nicdark_space40"></div>
            <div class="nicdark_space50"></div>

        </div>
        <!--end nicdark_container-->

    </div>

</section>
<!--end section-->


@include('assets.footer')
