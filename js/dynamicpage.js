var projectcategoryArray = ["hospitality","commercial","residential","recreational","architectural","urbanplanning","healthcare","institutional"],
hospitalityArray = ["le_meridien","bmasahara","bmahiranandani","hotel_in_indonesia","radisson_blu","the_lalit_ashok_bangalore","the_lalit_grand_palace_srinagar","the_lalit_kolkata","the_lalit_chandigarh","the_lalit_jaipur","the_lalit_mumbai","the_lalit_new_delhi","the_marriott_jaipur","radisson_blu_dwarka","the_sahara_star_mumbai","cym_jaisalmer","hotel_ambhara_indonesia","hotel_in_indonesia","le_meridien_new_delhi","marriott_noida","radisson_blue_west_delhi","the_lalit_ashok_bangalore","the_lalit_grand_palace_srinagar","the_lalit_kolkata","the_lalit_chandigarh","the_lalit_jaipur","the_lalit_mumbai","the_lalit_new_delhi","the_marriott_jaipur","radisson_blu_dwarka"],
commercialArray = ["bmaamphorgeoffice","bmahtgcorporation","bmak_rahejaconstructions","bmamagppieindia","bmatheprimeministerofwestindies","bmasaharaindiapariwar","bmac_jinternational","offices","aviation","retails","therobertlbradshawinternationalairport","collage_of_aircraft_ext_int","collage_sahara_air_lounge","airport"],
residentialArray = ["aamby_valley","hyderabad","indore","khandala","khar","napeansea_rd","santacruz"],
healthcareArray = ["park_healthcare_hospital_hyderabad","vijaya_diagnostics_hyderabad","metropolis_laboratories_mumbai"],
institutionalArray = ["whistling_woods_film_institute_mumbai","hiranandani_foundation_international_school_chennai","somaiya_college_of_engg","auditorium_somaiya_institute_mumbai"],
/* recreationalArray = ["recreational","clubhouse","upscale","kalpatru","kalpatruh","mumbai","kalpataruconstructionstarangancommunityy","sahara","saharaltd","heights","k_raheja_corp","bmaurwimages","kalpataru_constructions","city_club","club_house","country_club","the_raheja_exotica"], */
recreationalArray = ["the_raheja_exotica_madh_island","club_at_hiranandani_upscale_banglore","sahara_quest_city_club_5_star_india","sahara_quest_country_club_5_star_india","tarangan_community_centre_thane","club_house_at_tarangan_for_kalpataru_builders","club_siddhanchal_for_kalpataru_builders_thane","kalpataru_heights_mumbai","majas_clubhouse_for_kalpataru_builders_mumbai","karma_kshetra_clubhouse_for_kalpataru_builders","kalpataru_habitat","clubhouse_for_k_raheja_corp_goa","bptp_clubhouse_faridabad"],
architecturalArray = ["architectural"],
urban_planningArray = ["aamby_valley_city_lonavala","master_planning_new_chattisgsarh","master_plan_backwards_of_kerala","villa_development_at_mashobra_shimla"],
// NEW CODE
clientArray = [ "hospitality", "commercial", "residential", "menu_healthcare", "institutional", "urban_planning", "recreational" ];

$(function() {

    var newHash      = "",
        $mainContent = $("#main-content");
		
		projectArray = hospitalityArray.concat(commercialArray);
		projectArray = projectArray.concat(residentialArray);
		projectArray = projectArray.concat(healthcareArray);
		projectArray = projectArray.concat(institutionalArray);
		projectArray = projectArray.concat(recreationalArray);
		projectArray = projectArray.concat(architecturalArray);
		projectArray = projectArray.concat(urban_planningArray);
		
	$(document).on('click','a',function(e){
		if($(this).attr("href")!=undefined && $(this).attr("href")!="javascript:;" && $(this).attr("href")!="javascript:void(0)")
		{
		window.location.hash = $(this).attr("href");
        return false;
		}
		else
		{
			return false;
		}
	});

    $(window).bind('hashchange', function(){

        newHash = window.location.hash.substring(1);

        if (newHash) {
			$('.footer-wrapper').fadeOut(200);
			$mainContent
				.find(".changeablediv")
                .fadeOut(200, function() {
					$('.overlay').fadeIn(10,function(e){
						var pGress = setInterval(function() {
						var getwidth  = $('.loader-count span').html();
						var fixwidth = +getwidth+1;
						if (fixwidth > 100) {
							clearInterval(pGress);
							$('.overlay').fadeOut(10,function(e){
								$('.loader-count span').html('0');
								$('.loader-train').css('width','0%');
								$mainContent.hide().load(newHash + " .changeablediv", function() {
									setCustomScrollbar();
									$mainContent.fadeIn(200);
									var slidehash = newHash;
									slidehash = slidehash.split(".");
									slidehash = slidehash[0];
									count_click = 0;
									clearInterval(mainsliderinterval);
									if(slidehash == "leaders"){
										/*  scripts for the new leader page */
										var count=0,slide_speed = 300;
										$(document).on('click','.new_leader_detail_single',function(e){
											var show_desc = $(this).attr('desc');
											$('.new_leader_detail_left').removeClass('active');
											$('.new_leader_detail_left').css('z-index','1000');
											$(this).parent().css('z-index','1001');
											$(this).parent().addClass('active');
											$('.new_leader_detail_left:eq(0)').stop(true,false).animate({marginLeft: '0px'}, slide_speed, showHideHead);
											$('.new_leader_detail_left:eq(1)').stop(true,false).animate({marginLeft: (-(($('.new_leader_detail_left').width())*1))}, slide_speed, showHideHead);
											$('.new_leader_detail_left:eq(2)').stop(true,false).animate({marginLeft: (-(($('.new_leader_detail_left').width())*1))}, slide_speed, showHideHead);
											$('.new_leader_detail_left:eq(3)').stop(true,false).animate({marginLeft: (-(($('.new_leader_detail_left').width())*1))}, slide_speed, function(e){
												showHideHead();
												$('#'+show_desc).fadeIn(slide_speed);
											});
										});
										
										$(document).on('click','#close_box',function(e){
											alert( "close" );
											$('.new_leader_detail_left').removeClass('active');
											$('.new_leader_detail_left').css('z-index','1000');
											$('.new_leader_detail_right').hide();
											$('.new_leader_detail_left .new_leader_detail_single .new_leader_text_holder').show();
											$('.new_leader_detail_left .new_leader_detail_single .new_leader_text_holder .new_leader_desc').show();
											$('.new_leader_detail_left:eq(0)').stop(true,false).animate({marginLeft: '55px'}, slide_speed,function(e){});
											$('.new_leader_detail_left:gt(0)').stop(true,false).animate({marginLeft: '20px'}, slide_speed,function(e){});
										});
										/* scripts for the new leader page ends */
										$("#mainslideshow").fadeOut(200);
										$("#leadershow").html(/* '<img src="images/boby.jpg" alt="Slideshow Image 1" class="active" />' */);										
										$("#leadershow").fadeIn(200);
									}else if($.inArray(slidehash,projectArray)+1){
										$("#mainslideshow").fadeOut(200);
										if(slidehash=="offices"){
											slidehash="bmaamphorgeoffice";
										}
										$("#leadershow").html('<img src="images/'+slidehash+'/1.jpg" alt="Slideshow Image 1" class="active" />');
										$("#leadershow").fadeIn(200);
										setTimeout(function(){
											mainsliderinterval = setInterval("nextprojectimg()",7000);
										},5000);
									}else{
										$("#leadershow").html("");
										$("#leadershow").hide();
										$("#mainslideshow").show();
									}
									
									/* if($('#pro-image-wrapper').length != 0){
										prothumb = $('#pro-image-wrapper').find('div.img').length;
										if(prothumb > 7){
											$('#pro-image-wrapper').css('max-width','93.3%');
											$("#pro-image-wrapper").mCustomScrollbar({
												scrollButtons:{
													enable:false
												},
												horizontalScroll:true,
												DraggerRail:false,
												autoDraggerLength:false,
												contentTouchScroll:true,
												advanced:{
													updateOnBrowserResize:true,
													updateOnContentResize:true
												},
												theme:"light-thin"
											});
										}
									} */
									
									if(newHash.indexOf("index.html#") !== -1){
										
										var m = newHash;
										m = m.split("#");
										if($.inArray(m[1],projectcategoryArray)+1){
											$(document).find("#menu-wrapper [tab=2]").trigger("click");
											$(document).find("#project-cont [forid="+m[1]+"] a").trigger("click");
										}
									}
									if(newHash != 'home.html'||newHash.indexOf( "project.php" )!= -1){
										console.log( "inside.." );
										$('.footer-wrapper .footer-menu div').hide();
										$('.footer-wrapper').fadeIn(200);
										var n = newHash;
										n = n.split(".");
										// place the menu name here for which you want to show the footer links
										if($.inArray(n[0],["about_us","leaders","press","awards","keypersonal","philosophy"])+1){
											$('.footer-menu div[page=profile]').show();
											$('.footer-menu div[page=menu]').show();
											$(".footer-menu .footer-menu-tab a").removeClass("active");
											$(".footer-menu .footer-menu-tab a."+n[0]).addClass('active');
										}
										// NEW CODE
										else if($.inArray(n[0],clientArray)+1){
											$('.footer-menu div[page=profile]').show();
											$('.footer-menu div[page=menu]').show();
											$(".footer-menu .footer-menu-tab a").removeClass("active");
											$(".footer-menu .footer-menu-tab a.clients").addClass('active');
										}
										else if($.inArray(n[0],projectArray)+1){
											currentProject = n[0];
											if($.inArray(n[0],hospitalityArray)+1){
												projectselectclass="hospitality";
											}
											else if($.inArray(n[0],commercialArray)+1){
												projectselectclass="commercial";
											}
											else if($.inArray(n[0],residentialArray)+1){
												projectselectclass="residential";
											}
											else if($.inArray(n[0],recreationalArray)+1){
												projectselectclass="recreational";
											}
											else if($.inArray(n[0],healthcareArray)+1){
												projectselectclass="healthcare";
											}
											else if($.inArray(n[0],institutionalArray)+1){
												projectselectclass="institutional";
											}
											else if($.inArray(n[0],architecturalArray)+1){
												projectselectclass="architectural";
											}
											else if($.inArray(n[0],urban_planningArray)+1){
												projectselectclass="urban_planning";
											}
											$('.footer-menu div[page=project]').show();
											$('.footer-menu div[page=menu]').show();
											$(".footer-menu .footer-menu-tab a").removeClass("active");
											$(".footer-menu .footer-menu-tab a."+projectselectclass).addClass('active');
										}
										else if( n[0]=='project' )
										{
											var x = newHash.split("?");
											var y = x[1].split("&");
											var z = y[ 0 ].split("=");
											
											var projectselectclass = z[1].toLowerCase();
											
											$('.footer-menu div[page=project]').show();
											$('.footer-menu div[page=menu]').show();
											$(".footer-menu .footer-menu-tab a").removeClass("active");
											$(".footer-menu .footer-menu-tab a."+projectselectclass).addClass('active');
										}	
										else if($.inArray(n[0],["contact_us"])+1)
										{
											$('.footer-menu div[page=contact]').show();
											$('.footer-menu div[page=menu]').show();
											$(".footer-menu .footer-menu-tab a").removeClass("active");
											$(".footer-menu .footer-menu-tab a.contact_us").addClass('active');
										}
										$('[page=project] .footer-submenu').removeClass('active').animate({bottom:'0px',opacity:0});
									}
								});
							});
						} else {
							$('.loader-count span').html(fixwidth);
							$('.loader-train').css('width',fixwidth+'%');
						}
						},10);
					});
                });
        };

    });

    $(window).trigger('hashchange');

	
});