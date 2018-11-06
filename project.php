<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>BM&amp;A - Bobby Mukherji &amp; Associates</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css" />
<link href="css/jquery-ui.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<script src="js/jquery.mousewheel.min.js"></script>
<script src="js/jquery.mCustomScrollbar.js"></script>
<script>
function slideSwitch() {
    var $active = $('#slideshow IMG.active');

    if ( $active.length == 0 ) $active = $('#slideshow IMG:last');

    // use this to pull the images in the order they appear in the markup
    var $next =  $active.next().length ? $active.next()
        : $('#slideshow IMG:first');

    // uncomment the 3 lines below to pull the images in random order
    
    // var $sibs  = $active.siblings();
    // var rndNum = Math.floor(Math.random() * $sibs.length );
    // var $next  = $( $sibs[ rndNum ] );

    $active.addClass('last-active');

    $next.css({opacity: 0.0})
        .addClass('active')
        .animate({opacity: 1.0}, 0, function() {
            $active.removeClass('active last-active');
        });
}

$(function() {
    setInterval( "slideSwitch()", 0 );
});

$(document).ready (function(e){
	$(".data").mCustomScrollbar({
		scrollButtons:{
			enable:false,
		},autoDraggerLength:false,
		advanced:{
			updateOnBrowserResize:true,
			updateOnContentResize:true,
		}
	});
	
	$(document).on('click','.data-head',function(e){
			var dataheight = $('.content-wrapper').css('height');
			if(dataheight=='40px')
			{
				$('.content-wrapper').stop(true,false).animate({height:'460px'});
				$('.data').slideDown();
				$('.project-gallery').show();
				$('.data-head img').attr('src','images/u-arrow.png');
			}
			else
			{
				$('.content-wrapper').stop(true,false).animate({height:'40px'});
				$('.data').slideUp();
				$('.project-gallery').hide();
				$('.data-head img').attr('src','images/d-arrow.png');
			}
		});
});

</script>
</style>
</head>
<body>
<div id="slideshow">		
	<img src="images/bg2.jpg" alt="Slideshow Image 1" class="active"/>
	
</div>
<div id="leadershow" class="forleaderpage"  style="display:none" >
	<img src="images/boby.jpg" alt="Slideshow Image 1" class="active" />	
</div>
<header id="header">
	<div class="logo">
		<a href="home.html">
			<img src="images/logo.png" height="60px" width="150px" />
		</a>
	</div>
</header>


<?php
	
						
	$title_arr = array( 
					"cym_jaisalmer" => "CYM, Jaisalmer",
					"hotel_ambhara_indonesia" => "Hotel Ambhara, Indonesia",
					"hotel_in_indonesia" => "Hotel in Indonesia",
					"le_meridien_new_delhi" => "Le Meridien, New Delhi",
					"marriott_noida" => "Marriott, Noida",
					"radisson_blue_west_delhi" => "Radisson Blu, West Delhi",
					"the_lalit_ashok_bangalore" => "The Lalit Ashok, Bangalore",
					"the_lalit_grand_palace_srinagar" => "The Lalit Grand Palace, Srinagar",
					"the_lalit_kolkata" => "The Lalit, Kolkata",
					"the_lalit_chandigarh" => "The Lalit, Chandigarh",
					"the_lalit_jaipur" => "The Lalit, Jaipur",
					"the_lalit_mumbai" => "The Lalit, Mumbai",
					"the_lalit_new_delhi" => "The Lalit, New Delhi",
					"the_marriott_jaipur" => "The Marriott, Jaipur",
					"radisson_blu_dwarka" => "The Radisson Blu, Dwarka",
					"the_sahara_star_mumbai" => "The Sahara Star, Mumbai",
					"nero_bar_delhi" => "Nero Bar, Delhi",
					"oro_bar_delhi" => "Oro Bar, Delhi",
					"kitty_su_delhi" => "Kitty Su, Delhi",
					"lounge_18_jaipur" => "Lounge 18, Jaipur",
					"zepplin_delhi" => "Zeppelin, Delhi",
					"ra_mumbai" => "Ra, Mumbai",
					"club_escape" => "Club Escape",
					"hrc_lagos_nigeria" => "HRC Lagos, Nigeria",
					"shiro_restaurant_lagos" => "Shiro Restaurant, Lagos, Nigeria",		
					"collage_of_aircraft_ext_int" => "Collage of Aircraft Exterior + Interior",
					"collage_sahara_air_lounge" => "Collage of Sahara Air Lounges",
					"santacruz" => "Santacruz",
					"aamby_valley_city" => "Aamby Valley City",
					"khar" => "Khar",
					"khandala" => "Khandala",
					"napeansea_rd" => "Napeansea Road",
					"residence_in_delhi" => "Residence in Delhi",
					"indore" => "Indore",
					"hyderabad" => "Hyderabad",
					"show_flat_hiranandani_construct" => "Show flat for Hiranandani Constructions"
					/* "park_healthcare_hospital_hyderabad" => "Park-Healthcare-Hospital, Hyderabad",
					"vijaya_diagnostics_hyderabad" => "Vijaya-Diagnostics, Hyderabad",
					"metropolis_laboratories_mumbai" => "Metropolis-Laboratories, Mumbai",
					"whistling_woods_film_institute_mumbai" => "Whistling Woods Film Institute, Mumbai",
					"hiranandani_foundation_international_school_chennai" => "Hiranandani Foundation International School, Chennai",
					"somaiya_college_of_engg" => "Somaiya College of Engineering",
					"auditorium_somaiya_institute_mumbai" => "Auditorium Somaiya Institute Mumbai",
					"aamby_valley_city_lonavala" => "Aamby Valley City, Lonavala",
					"master_planning_new_chattisgsarh" => "Master Planning for New Capital City of Chhattisgard",
					"master_plan_backwards_of_kerala" => "Master Plan for the Integrated Development of the backwaters of Kerala - Govt Kerala Dept of tourism",
					"villa_development_at_mashobra_shimla" => "Villa Development at Mashobra, Shimla (India)",
					"the_raheja_exotica_madh_island" => "The Raheja Exotica, Madh Island",
					"club_at_hiranandani_upscale_banglore" => "Club at Hiranandani Upscale, Bangalore",
					"sahara_quest_city_club_5_star_india" => "Sahara Quest City Club + 5 Star Hotel, India",
					"sahara_quest_country_club_5_star_india" => "Sahara Quest Country Club + 5 Star Resort, India",
					"tarangan_community_centre_thane" => "Tarangan Community Centre for Kalpataru Builders, Thane (Near Mumbai)",
					"club_house_at_tarangan_for_kalpataru_builders" => "Club house at Tarangan for Kalpataru Builders, Thane (Near Mumbai)",
					"club_siddhanchal_for_kalpataru_builders_thane" => "Club Siddhachal for Kalpataru Builders, Thane",
					"kalpataru_heights_mumbai" => "Kalpataru Heights, Mumbai",
					"majas_clubhouse_for_kalpataru_builders_mumbai" => "Majas clubhouse for Kalpataru Builders, Mumbai",
					"karma_kshetra_clubhouse_for_kalpataru_builders" => "Karma Kshetra clubhouse for Kalpataru Builders, Mumbai",
					"kalpataru_habitat" => "Kalpataru Habitat",
					"clubhouse_for_k_raheja_corp_goa" => "Clubhouse for K.Raheja Corp., Goa",
					"bptp_clubhouse_faridabad" => "BPTP Clubhouse, Faridabad" */
				);
				
	$dir_name_arr = array( 
					"cym_jaisalmer" => "CYM, Jaisalmer Final",
					"hotel_ambhara_indonesia" => "Hotel Ambhara, Indonesia Final",
					"hotel_in_indonesia" => "Hotel in Indonesia Final",
					"le_meridien_new_delhi" => "Le Meridien New Delhi Final",
					"marriott_noida" => "Marriott, Noida",
					"radisson_blue_west_delhi" => "Radisson Blu, West Delhi Final",
					"the_lalit_ashok_bangalore" => "The Lalit Ashok, Bangalore Final",
					"the_lalit_grand_palace_srinagar" => "The Lalit Grand Palace, Srinagar",
					"the_lalit_kolkata" => "The Lalit Kolkata",
					"the_lalit_chandigarh" => "The Lalit, Chandigarh",
					"the_lalit_jaipur" => "The Lalit, Jaipur",
					"the_lalit_mumbai" => "The Lalit, Mumbai",
					"the_lalit_new_delhi" => "The Lalit, New Delhi Final",
					"the_marriott_jaipur" => "The Marriott, Jaipur Final",
					"radisson_blu_dwarka" => "The Radisson Blu, Dwarka",
					"the_sahara_star_mumbai" => "The Sahara Star, Mumbai Final",
					"nero_bar_delhi" => "1 Nero Bar, Delhi",
					"oro_bar_delhi" => "2 Oro Bar, Delhi",
					"kitty_su_delhi" => "3 Kitty Su, Delhi",
					"lounge_18_jaipur" => "4 Lounge 18, Jaipur",
					"zepplin_delhi" => "5 Zeppelin, Delhi",
					"ra_mumbai" => "6 Ra, Mumbai",
					"club_escape" => "7 Club Escape",
					"hrc_lagos_nigeria" => "8 HRC Lagos, Nigeria",
					"shiro_restaurant_lagos" => "9 Shiro Restaurant, Lagos, Nigeria",		
					"collage_of_aircraft_ext_int" => "Collage of Aircraft Exterior + Interior",
					"collage_sahara_air_lounge" => "Collage of Sahara Air Lounges",
					"santacruz" => "1 Santacruz",
					"aamby_valley_city" => "2 Aamby Valley City",
					"khar" => "3 Khar",
					"khandala" => "4 Khandala",
					"napeansea_rd" => "5 Napeansea Rd",
					"residence_in_delhi" => "6.6 Residence in Delhi",
					"indore" => "7.7 Indore",
					"hyderabad" => "8.8 Hyderabad",
					"show_flat_hiranandani_construct" => "9.9 Showflat for Hiranandani Constructions"
					/* "park_healthcare_hospital_hyderabad" => "Park-Healthcare-Hospital, Hyderabad",
					"vijaya_diagnostics_hyderabad" => "Vijaya-Diagnostics, Hyderabad",
					"metropolis_laboratories_mumbai" => "Metropolis-Laboratories, Mumbai",
					"whistling_woods_film_institute_mumbai" => "Whistling Woods Film Institute, Mumbai",
					"hiranandani_foundation_international_school_chennai" => "Hiranandani Foundation International School, Chennai",
					"somaiya_college_of_engg" => "Somaiya College of Engineering",
					"auditorium_somaiya_institute_mumbai" => "Auditorium Somaiya Institute Mumbai",
					"aamby_valley_city_lonavala" => "Aamby Valley City, Lonavala",
					"master_planning_new_chattisgsarh" => "Master Planning for New Capital City of Chhattisgard",
					"master_plan_backwards_of_kerala" => "Master Plan for the Integrated Development of the backwaters of Kerala - Govt Kerala Dept of tourism",
					"villa_development_at_mashobra_shimla" => "Villa Development at Mashobra, Shimla (India)",
					"the_raheja_exotica_madh_island" => "The Raheja Exotica, Madh Island",
					"club_at_hiranandani_upscale_banglore" => "Club at Hiranandani Upscale, Bangalore",
					"sahara_quest_city_club_5_star_india" => "Sahara Quest City Club + 5 Star Hotel, India",
					"sahara_quest_country_club_5_star_india" => "Sahara Quest Country Club + 5 Star Resort, India",
					"tarangan_community_centre_thane" => "Tarangan Community Centre for Kalpataru Builders, Thane (Near Mumbai)",
					"club_house_at_tarangan_for_kalpataru_builders" => "Club house at Tarangan for Kalpataru Builders, Thane (Near Mumbai)",
					"club_siddhanchal_for_kalpataru_builders_thane" => "Club Siddhachal for Kalpataru Builders, Thane",
					"kalpataru_heights_mumbai" => "Kalpataru Heights, Mumbai",
					"majas_clubhouse_for_kalpataru_builders_mumbai" => "Majas clubhouse for Kalpataru Builders, Mumbai",
					"karma_kshetra_clubhouse_for_kalpataru_builders" => "Karma Kshetra clubhouse for Kalpataru Builders, Mumbai",
					"kalpataru_habitat" => "Kalpataru Habitat",
					"clubhouse_for_k_raheja_corp_goa" => "Clubhouse for K.Raheja Corp., Goa",
					"bptp_clubhouse_faridabad" => "BPTP Clubhouse, Faridabad" */
				);
	$proj = $_GET[ 'proj' ]; // hospitality
	$proj_name_key = $_GET[ 'name' ]; 
	$sub_proj = $_GET[ 'sub_proj' ]; // hotels
	$proj_dir = $dir_name_arr[ $proj_name_key ];
	
?>

<section id="main-content">
	<div class="changeablediv">
	<div class="content-wrapper content-wrapper-new clubadj" small="true">
		<div class="data-head club projdatahead projectheadnew">
			<?php echo( $title_arr[ $proj_name_key ] ); ?>
            <div id="close_box" class="cross" style="margin-right:5px;display:none">X</div>
			<span class="arrow">
				<img src="images/d-arrow.png">&nbsp;
			</span></div>
		<div class="data clubadj no-scroll datanew">
			<strong>Client Name:</strong> Mr. Surendra Hiranandani<br>
			<strong>Area:</strong> 2,00,000 sq ft<br>
			<strong>Location:</strong> Chennai<br>
			<strong>Use:</strong> International School<br>
			<strong>Scope:</strong> Architecture, Interior & Lighting Design
		</div>
		<div class="project-gallery newgallery" style="display:none">
			<div id="image-holder">
				<div id="pro-image-wrapper">
				
					<?php
						// $dir_path = "images/new_images/".$proj."/".$sub_proj."/".$proj_dir."/*";
						$dir_path = "images/test_new_images/".$proj."/".$sub_proj."/".$proj_dir."/*";
						$dir = glob( $dir_path );
						
						foreach( $dir as $img_path )
						{
							if( $img_path != '.' && $img_path != '..' )
							{
								echo( '<div class="img"><div class="active"><img src="'.$img_path.'" class="le1" height="50" width="60"></div></div>' );
							}
						}
						
					?>
					
					<!-- <div class="img"><div class="active"><img src="images/new_images/Hospitality/Hotels/The Sahara Star, Mumbai Final/Thumbnails/1.jpg" class="le1" height="50" width="60"></div></div>
					<div class="img"><div class="active"><img src="images/new_images/Hospitality/Hotels/The Sahara Star, Mumbai Final/Thumbnails/2.jpg" class="le1" height="50" width="60"></div></div>
					<div class="img"><div class="active"><img src="images/new_images/Hospitality/Hotels/The Sahara Star, Mumbai Final/Thumbnails/3.jpg" class="le1" height="50" width="60"></div></div>
					<div class="img"><div class="active"><img src="images/new_images/Hospitality/Hotels/The Sahara Star, Mumbai Final/Thumbnails/4.jpg" class="le1" height="50" width="60"></div></div>
					<div class="img"><div class="active"><img src="images/new_images/Hospitality/Hotels/The Sahara Star, Mumbai Final/Thumbnails/5.jpg" class="le1" height="50" width="60"></div></div>
					<div class="img"><div class="active"><img src="images/new_images/Hospitality/Hotels/The Sahara Star, Mumbai Final/Thumbnails/6.jpg" class="le1" height="50" width="60"></div></div>
					<div class="img"><div class="active"><img src="images/new_images/Hospitality/Hotels/The Sahara Star, Mumbai Final/Thumbnails/7.jpg" class="le1" height="50" width="60"></div></div>
					<div class="img"><div class="active"><img src="images/new_images/Hospitality/Hotels/The Sahara Star, Mumbai Final/Thumbnails/8.jpg" class="le1" height="50" width="60"></div></div>
					<div class="img"><div class="active"><img src="images/new_images/Hospitality/Hotels/The Sahara Star, Mumbai Final/Thumbnails/9.jpg" class="le1" height="50" width="60"></div></div>
					<div class="img"><div class="active"><img src="images/new_images/Hospitality/Hotels/The Sahara Star, Mumbai Final/Thumbnails/10.jpg" class="le1" height="50" width="60"></div></div>
					<div class="img"><div class="active"><img src="images/new_images/Hospitality/Hotels/The Sahara Star, Mumbai Final/Thumbnails/11.TIF" class="le1" height="50" width="60"></div></div>
					<div class="img"><div class="active"><img src="images/new_images/Hospitality/Hotels/The Sahara Star, Mumbai Final/Thumbnails/12.tif" class="le1" height="50" width="60"></div></div>
					<div class="img"><div class="active"><img src="images/new_images/Hospitality/Hotels/The Sahara Star, Mumbai Final/Thumbnails/13.tif" class="le1" height="50" width="60"></div></div>
					<div class="img"><div class="active"><img src="images/new_images/Hospitality/Hotels/The Sahara Star, Mumbai Final/Thumbnails/14.TIF" class="le1" height="50" width="60"></div></div>
					<div class="img"><div class="active"><img src="images/new_images/Hospitality/Hotels/The Sahara Star, Mumbai Final/Thumbnails/15.jpg" class="le1" height="50" width="60"></div></div>
					<div class="img"><div class="active"><img src="images/new_images/Hospitality/Hotels/The Sahara Star, Mumbai Final/Thumbnails/16.jpg" class="le1" height="50" width="60"></div></div>
					<div class="img"><div class="active"><img src="images/new_images/Hospitality/Hotels/The Sahara Star, Mumbai Final/Thumbnails/17.jpg" class="le1" height="50" width="60"></div></div>
					<div class="img"><div class="active"><img src="images/new_images/Hospitality/Hotels/The Sahara Star, Mumbai Final/Thumbnails/18.jpg" class="le1" height="50" width="60"></div></div>
					<div class="img"><div class="active"><img src="images/new_images/Hospitality/Hotels/The Sahara Star, Mumbai Final/Thumbnails/18.jpg" class="le1" height="50" width="60"></div></div>
					<div class="img"><div class="active"><img src="images/new_images/Hospitality/Hotels/The Sahara Star, Mumbai Final/Thumbnails/19.jpg" class="le1" height="50" width="60"></div></div>
					<div class="img"><div class="active"><img src="images/new_images/Hospitality/Hotels/The Sahara Star, Mumbai Final/Thumbnails/20.jpg" class="le1" height="50" width="60"></div></div>
					<div class="img"><div class="active"><img src="images/new_images/Hospitality/Hotels/The Sahara Star, Mumbai Final/Thumbnails/21.jpg" class="le1" height="50" width="60"></div></div>
					<div class="img"><div class="active"><img src="images/new_images/Hospitality/Hotels/The Sahara Star, Mumbai Final/Thumbnails/22.jpg" class="le1" height="50" width="60"></div></div>
					<div class="img"><div class="active"><img src="images/new_images/Hospitality/Hotels/The Sahara Star, Mumbai Final/Thumbnails/23.jpg" class="le1" height="50" width="60"></div></div>
					<div class="img"><div class="active"><img src="images/new_images/Hospitality/Hotels/The Sahara Star, Mumbai Final/Thumbnails/24.jpg" class="le1" height="50" width="60"></div></div>
					<div class="img"><div class="active"><img src="images/new_images/Hospitality/Hotels/The Sahara Star, Mumbai Final/Thumbnails/25.jpg" class="le1" height="50" width="60"></div></div>
					<div class="img"><div class="active"><img src="images/new_images/Hospitality/Hotels/The Sahara Star, Mumbai Final/Thumbnails/26.jpg" class="le1" height="50" width="60"></div></div>
					<div class="img"><div class="active"><img src="images/new_images/Hospitality/Hotels/The Sahara Star, Mumbai Final/Thumbnails/27.jpg" class="le1" height="50" width="60"></div></div> -->
            </div>
			</div>
			<!-- Macgregor Changes -->
			<!-- <div id="project-next" onclick="nextprojectimagescroll()"><img src="images/right-arrow.png"></div> -->
			<div id="project-next" onclick="nextprojectimg()"><img src="images/right-arrow.png"></div>
			<!-- <div id="project-prev" onclick="prevprojectimagescroll()"><img src="images/left-arrow.png"></div> -->
			<div id="project-prev" onclick="prevprojectimg()"><img src="images/left-arrow.png"></div>
		</div>
	</div>
	<div class="rightarrow">
		<!-- Macgregor Changes -->
		<!-- <img id="leader-left" src="images/left.png" onclick="prevprojectimg()"/> -->
		<img id="leader-left" src="images/left.png" onclick="prevprojectdetail()"/>
		<!-- <img id="leader-right" src="images/right.png" onclick="nextprojectimg()"/> -->
		<img id="leader-right" src="images/right.png" onclick="nextprojectdetail()"/>
		
	</div>
	</div>
</section>
<footer id="footer">
	<div class="footer-wrapper">
		<div class="footer-menu">
			<div class="footer-menu-spacer" page="profile"></div>
			<div class="footer-menu-tab" page="profile">
				<a class="about_us" href="about_us.html">ABOUT US</a>
			</div>
			<div class="footer-menu-spacer" page="profile"></div>
			<div class="footer-menu-tab" page="profile">
				<a class="leaders" href="leaders.html">LEADERS</a>
			</div>
			<div class="footer-menu-spacer" page="profile"></div>
			<div class="footer-menu-tab" page="profile">
				<a class="press" href="press.html">PRESS</a>
			</div>
			<div class="footer-menu-spacer" page="profile"></div>
			<div class="footer-menu-tab" page="profile">
				<a class="awards" href="awards.html">AWARDS</a>
			</div>
			<div class="footer-menu-spacer" page="project"></div>
			<div class="footer-menu-tab" page="project">
				<a class="hospitality" href="awards.html">HOSPITALITY</a>
			</div>
			<div class="footer-menu-spacer" page="project"></div>
			<div class="footer-menu-tab" page="project">
				<a class="commercial" href="awards.html">COMMERCIAL</a>
			</div>
			<div class="footer-menu-spacer" page="project"></div>
			<div class="footer-menu-tab" page="project">
				<a class="residetial" href="awards.html">RESIDENTIAL</a>
			</div>
			<div class="footer-menu-spacer" page="project"></div>
			<div class="footer-menu-tab" page="project">
				<a class="recreational" href="awards.html">RECREATIONAL</a>
			</div>
			<div class="footer-menu-spacer" page="project"></div>
			<div class="footer-menu-tab" page="project">
				<a class="architectural" href="awards.html">ARCHITECTURAL</a>
			</div>
			<div class="footer-menu-spacer" page="project"></div>
			<div class="footer-menu-tab" page="project">
				<a class="urban_planning" href="awards.html">URBAN PLANNING</a>
			</div>
			<div class="footer-menu-spacer" page="contact"></div>
			<div class="footer-menu-tab" page="contact">
				<a class="contact_us" href="awards.html">CONTACT US</a>
			</div>
			<div class="footer-menu-spacer" page="menu"></div>
			<div class="footer-menu-tab" page="menu">
				<a class="menu" href="home.html">MENU</a>
			</div>
		</div>
	</div>
</footer>
<div class="overlay" style="background:none;display:none">
<img src="images/left_hover.png" style="display:none;opacity:0;visibility:hidden">
<img src="images/right_hover.png" style="display:none;opacity:0;visibility:hidden">
<div class="percent-count">
<div class="loader-count"><span>0</span>%</div>
<div class="loader-train"></div>
<div class="loader-rail"></div>
</div>
</div>
</body>
</html>
