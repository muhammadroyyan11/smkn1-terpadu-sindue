
(function($) { 
	"use strict";
	
	/* --------------------------------------------
     Platform detect
     --------------------------------------------- */
    var mobileTest;
    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)) {
        mobileTest = true;
        $("html").addClass("mobile");
    }
    else {
        mobileTest = false;
        $("html").addClass("no-mobile");
    }
    
    var mozillaTest;
    if (/mozilla/.test(navigator.userAgent)) {
        mozillaTest = true;
    }
    else {
        mozillaTest = false;
    }
    var safariTest;
    if (/safari/.test(navigator.userAgent)) {
        safariTest = true;
    }
    else {
        safariTest = false;
    }
     // Detect touch devices    
    if (!("ontouchstart" in document.documentElement)) {
        document.documentElement.className += " no-touch";
    }

    // Set cursor focus to search form{
    $('.btn-search').on('click',function(){
    	$('#ModalSearch').modal('show');
    	$('#ModalSearch').on('shown.bs.modal', function () {
		    $('.input-search').focus();
		})  
    });

	
	/*==================DOCUMENT READY METHID==================*/
	$(document).ready(function(){
        
        $(window).trigger("resize");            
        
		//Initialize Menu
		init_menu();  				
		
		//Initialize scroll top
        init_scrolltop(); 		

		
		//Right sidebar Sub Menu Trigger
        $('.sn-main-menu li a.sub-menu-trigger').on('mouseenter', function(){
            $(this).next('.sub-menu').stop().slideDown(800);
        });
        $('.sn-main-menu li').on('mouseleave', function(){
            $('.sub-menu').stop().slideUp(800);
        });
		

    });
	/*==================END DOCUMENT READY METHID==================*/
	
    /*==================WINDOW RESIZE METHID==================*/
    $(window).resize(function(){
        
		//Initialize Menu on resize
        init_menu_resize();
		
		//Initialize Fullscreen on resize
        js_hight_fullscreen();
        
    });
	/*==================END WINDOW RESIZE METHID==================*/
	
	//Set Sections background image
	var pageSection = $(".page-section, .idea-item.bg-img,.article_author .portrait,.article-thumbnail, .macbook-fade .slick-item");
	pageSection.each(function(indx){			
		if ($(this).attr("data-background")){
			$(this).css("background-image", "url(" + $(this).data("background") + ")");
		}
	});
	
	//Initialize Menu variable
	var mobile_nav = $(".mobile-nav");
	var desktop_nav = $(".large-nav");
	
	// Initialize Projects filtering variable and portfolio grid
	var selector = 0;
	var project_grid = $("#project_grid, #isotope");
	
	// Function equal height
    !function(a){
        a.fn.equalHeights = function(){
            var b = 0, c = a(this);
            return c.each(function(){
                var c = a(this).innerHeight();
                c > b && (b = c)
            }), c.css("height", b)
        }, a("[data-equal]").each(function(){
            var b = a(this), c = b.data("equal");
            b.find(c).equalHeights()
        })
    }(jQuery);
	
	/* ==============================================
	Navigation resize
	=============================================== */	
    function init_menu_resize(){

		// Mobile menu max height
        $(".small-device-menu .large-nav > ul").css("max-height", $(window).height() - $(".forscroll").height() - 20 + "px");
        
        // Mobile menu style toggle
        if ($(window).width() <= 1024) {
            $(".forscroll").addClass("small-device-menu");			
			$(".forscroll-mobile").removeClass("dt-mobile-nav");
			$(".cd-right-content").removeClass("sidebar-section");
			$(".dt-sidebar").hide();			
        }else if ($(window).width() > 1024) {
			$(".forscroll").removeClass("small-device-menu");						
			$(".forscroll-mobile").addClass("dt-mobile-nav"); 			
			$(".cd-right-content").addClass("sidebar-section");
			$(".dt-sidebar").show();				
			desktop_nav.show();
		}
    }
		
	/* ==============================================
	Nav line height
	=============================================== */		
    function menu_line_height(height_initial, height_after){
        height_initial.height(height_after.height());
        height_initial.css({
            "line-height": height_after.height() + "px"
        });
    }
	    
	/* ==============================================
	Nav initialization
	=============================================== */		
	function init_menu(){
    
		// Navbar sticky
        $(".sticky").sticky({
            topSpacing: 0
        });
		
		//menu height
		menu_line_height($(".nav-wrapper > ul > li > a"), $(".forscroll"));
        menu_line_height(mobile_nav, $(".forscroll"));
        mobile_nav.css({
            "width": $(".forscroll").height() + "px"
        });

        // Transpaner menu        
        if ($(".forscroll").hasClass("transparent")){
           $(".forscroll").addClass("nav-transparent"); 
        }
		
		// On scroll nav height change
        $(window).on("scroll",function(){        
			if ($(window).scrollTop() > 10) {
				$(".nav-transparent").removeClass("transparent");
				$(".forscroll, .header-logo-wrap .logo, .mobile-nav, .header-nav-section .section-nav").addClass("scrollheight");
				$(".nav-wrapper ul li .cart-label").css('top','7px');
			}
			else {
				$(".nav-transparent").addClass("transparent");
				$(".forscroll, .header-logo-wrap .logo, .mobile-nav, .header-nav-section .section-nav").removeClass("scrollheight");
				$(".nav-wrapper ul li .cart-label").css('top','17px');
			}                        
        });

        // Mobile menu toggle        
		mobile_nav.on("click",function(){
            if (desktop_nav.hasClass("menu-opened")) {
                desktop_nav.slideUp("slow", "easeOutExpo").removeClass("menu-opened");
                $(this).removeClass("active");
            } else {
                desktop_nav.slideDown("slow", "easeOutQuart").addClass("menu-opened");
                $(this).addClass("active");
            }            
        });
		
		//set active menu link
		desktop_nav.find("a:not(.menu-down)").on("click",function(){
            if (mobile_nav.hasClass("active")) {
                desktop_nav.slideUp("slow", "easeOutExpo").removeClass("menu-opened");
                mobile_nav.removeClass("active");
            }            
        });
        
        /* ==============================================
		Sub menu
		=============================================== */		
       
        var menuSub = $(".menu-down");
        var menulist;
        
        $(".small-device-menu .menu-down").find(".fa:first").removeClass("fa-angle-right").addClass("fa-angle-down");		
				
		menuSub.on("click",function(){
            if ($(".forscroll").hasClass("small-device-menu")) {
                menulist = $(this).parent("li:first");
                if (menulist.hasClass("menu-opened")) {
                    menulist.find(".nav-sub:first").slideUp(function(){
                        menulist.removeClass("menu-opened");
                        menulist.find(".menu-down").find(".fa:first").removeClass("fa-angle-up").addClass("fa-angle-down");
                    });
                }
                else {
                    $(this).find(".fa:first").removeClass("fa-angle-down").addClass("fa-angle-up");
                    menulist.addClass("menu-opened");
                    menulist.find(".nav-sub:first").slideDown();
                }
                
                return false;
            }
            else {				
               
            }
            
        });
        
        menulist = menuSub.parent("li");
        menulist.hover(function(){        
            if (!($(".forscroll").hasClass("small-device-menu"))) {            
                /*$(this).find(".nav-sub:first").stop(true, true).slideToggle(0,"linear");*/
				$(this).find(".nav-sub:first").stop(true, true).fadeIn(600);
            }            
        }, function(){        
            if (!($(".forscroll").hasClass("small-device-menu"))) {            
                /*$(this).find(".nav-sub:first").stop(true, true).slideToggle(0,"linear");*/
				$(this).find(".nav-sub:first").stop(true, true).delay(100).fadeOut("fast");
			}            
        });       
			
    }

	/* ==============================================
	Scroll to homepage 
	=============================================== */
	function init_scrolltop(){		
		var offset = 450;
		var duration = 500;		
		jQuery('.top-button').on("click",function(event){
			event.preventDefault();
			jQuery('html, body').animate({scrollTop: 0}, duration);
			return false;
		})
	}	
	
	/* ==============================================
	Number Counter
	=============================================== */
	function init_counter(){
		$(".fact-wrapper").filter(":in-viewport:first").each(function(){
			$('.counter').counterUp({
				delay: 10,
				time: 2000
			});	
		});		
	}

	/* ==============================================
	Smooth scroll
	=============================================== */
	function init_smoothScroll(){		
		smoothScroll.init({
			speed: 400,
			easing: 'easeInOutCubic',
			offset: 40,
			updateURL: false,
			callbackBefore: function ( toggle, anchor ) {},
			callbackAfter: function ( toggle, anchor ) {}
		});
	}
	
	/* ==============================================
	Set fullscreen height
	=============================================== */
	function js_hight_fullscreen(){				
		$(".home").height($(window).height());        
		$(".fullscreen").height($(window).height());	
		$(".height-parent").each(function(){
			$(this).height($(this).parent().first().height());
		});		
	}
	
	/* ==============================================
	Individual section scroll
	=============================================== */
	function init_scroll_navigate(){        
        $(".local-scroll").localScroll({
            target: "body",
            duration: 1500,
            offset: 0,
            easing: "easeInOutExpo"
        });
        var sections = $(".page-section");
        var menu_links = $(".scroll-nav li a");
        var nav_arrow = $(".section-navigation");
		$(window).on("scroll",function(){           
            sections.filter(":in-viewport:first").each(function(){
                var active_section = $(this);
                var active_link = $('.scroll-nav li a[href="#' + active_section.attr("id") + '"]');
				var last_active_id = "#"+active_section.closest(".page-section").nextAll("section[id]").filter(':last').attr("id");
				var active_id = "#"+active_section.closest(".page-section").nextAll("section[id]").filter(':first').attr("id");
				if(last_active_id==active_id){					
					nav_arrow.find('span').removeClass("lnr-arrow-down").addClass("lnr-arrow-up");
					nav_arrow.find('a').attr("href", "#top");
				}else{
					nav_arrow.find('a').attr("href", active_id);
					if (nav_arrow.find('span').hasClass("lnr-arrow-up"))
						nav_arrow.find('span').removeClass("lnr-arrow-up").addClass("lnr-arrow-down");
				}
                menu_links.removeClass("active");
                active_link.addClass("active");
            });
            
        });
        
    }

  })(jQuery); 
