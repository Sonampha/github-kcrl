(function ($, root, undefined) {
	
	$(function () {

		var viewPort = $(window).width();
		
		//Toggle Mobile navigation
		$('#nav-toogle, #close-nav').click(function(event) {
			$('html,body').toggleClass('nav-showing nav-open');
			setTimeout(function(){
				$('.header-right').toggleClass('slideInLeft animated active');
				
			}, 300);
		});

		//Toggle Mobile login
		$('.btn-login-toggle').click(function(event) {
			$('.mobile-login').fadeToggle();
			$(this).toggleClass('active');
		});

		toggleFn();
		function toggleFn() {
			$('.btn-function-name').click(function(e) {
				// Reset
				$('.btn-function-name').removeClass('active');
				$('.single-function').hide();
				$('.single-function').removeClass('active-fn');

				var activeFn = $(this).attr('data-open-function');

				$(this).toggleClass('active');
				$(activeFn).show();
				$(activeFn).toggleClass('active-fn');

				e.stopPropagation();
			});	
		} //toogleFn

		toggleFnMobile();
		function toggleFnMobile() {
			$('.btn-function-name, #close-function-mobile').click(function(e) {
				$('#function-content').toggleClass('active animated');
				$('body, html').toggleClass('nav-showing');				
				e.stopPropagation();
			});	
		}		

		//Toggle mega menu
		$('.dropdown-toggle').click(function(event) {
			if ($(this).hasClass('active')) {
				$(this).removeClass('active');
			}
			else {
				$('.dropdown-toggle').removeClass('active');
				$(this).addClass('active');
			}
			event.preventDefault();
		});

		/////////////////////////////////////////////////////////
		Homepage();
		function Homepage() {
			// Slider Of News
			$('.header-news-slider').slick({
				autoplay : true,
			   	vertical : true,
			   	arrows : false, 
			   	dots : false
			});

			// Slider Of Banner
			$('#banner-hero').slick({
				autoplay : true,
				fade: true,
			   	arrows : false, 
			   	dots : true,
			   	responsive: [
			    {
			      breakpoint: 780,
			      settings: {
			        autoplay : false
			      }
			    }
			  ]
			   	// appendDots: $('.banner-hero-info')
			});

			flightDatepicker();
			function flightDatepicker() {
		        // Datepicker - Affection function when select day and add color for that day
		        function datepickerDateHightLight(date, departDate, returnDate) {
		            var thisReturn = [true, ''];
		            if (departDate && returnDate) {
		                if (date >= departDate && date <= returnDate) {
		                    thisReturn[1] = 'travel-dare-hightlight';
		                }
		            }
		            if (departDate) {
		                if (date.getTime() == departDate.getTime()) {
		                    thisReturn[1] = 'depart-date-hightlight';
		                }
		            }
		            if (returnDate) {
		                if (date.getTime() == returnDate.getTime()) {
		                    thisReturn[1] = 'return-date-hightlight';
		                }
		            }
		            return thisReturn;
		        }

		        // Datepicker -  Option for datepicker on desktop version
		        var dateToday = new Date();
		        var datePickerOptions = {
		            showButtonPanel: true,
		            changeMonth: false,
		            changeYear: false,
		            numberOfMonths: 1,
		            dayNamesMin: ["S", "M", "T", "W", "T", "F", "S"],
		            inline: true,
		            minDate: dateToday,
		            maxDate: '+331D',
		            dateFormat: "mm/dd/yy",
		            showOtherMonths: false
		        };

		        // **************************************************//
		        $("#find-flight-depart").datepicker($.extend(
					{},
		            datePickerOptions, {
		                beforeShowDay: function (date) {
		                    var departDate = $("#find-flight-depart").datepicker('getDate');
		                    var returnDate = $("#find-flight-return").datepicker('getDate');
		                    return datepickerDateHightLight(date, departDate, returnDate);
		                },
		                onClose: function (selectedDate, inst) {
		                    $("#find-flight-return").datepicker("option", "minDate", selectedDate);
		                    if(inst.isSelected) {
		                        $("#find-flight-return").focus();
		                    }
		                },
		                beforeShow: function(input, inst) {
		                    inst.isSelected = false;
		                }
		            }
		        ));

		        $("#find-flight-return").datepicker($.extend(
					{},
		            datePickerOptions, 
					{
		                beforeShowDay: function (date) {
		                    var departDate = $("#find-flight-depart").datepicker('getDate');
		                    var returnDate = $("#find-flight-return").datepicker('getDate');
		                    return datepickerDateHightLight(date, departDate, returnDate);
		                },	                
		                onClose: function (selectedDate) {
		                    $("#find-flight-depart").datepicker("option", "maxDate", selectedDate);                 
		                }             
		            }
		        ));
				
				$("#FindFlightScheduleDepart").datepicker($.extend(
					{},
		            datePickerOptions, 
					{
		                beforeShow: function(input, inst) {
		                    inst.isSelected = false;
		                }
		            }
		        ));
				
		        //Find date on purple holiday
		        $("#datefrom").datepicker({
		            showButtonPanel: true,
		            changeMonth: false,
		            changeYear: false,
		            numberOfMonths: 1,
		            dayNamesMin: ["S", "M", "T", "W", "T", "F", "S"],
		            inline: true,
		            minDate: "+1d",
		            maxDate: '+331D',
		            dateFormat: "dd-M-yy",
		            showOtherMonths: false,
					beforeShowDay: function (date) {
						var departDate = $("#datefrom").datepicker('getDate');
						var returnDate = $("#dateto").datepicker('getDate');
						return datepickerDateHightLight(date, departDate, returnDate);
					},
					onClose: function (selectedDate, inst) {
						//$("#dateto").datepicker("option", "minDate", selectedDate);
						if(inst.isSelected) {
							$("#dateto").focus();
						}
					},
					beforeShow: function(input, inst) {
						inst.isSelected = false;
					}
		        })
				.datepicker("setDate", "+1d")
				.on('change', function() {
					var dateFromObj = $("#datefrom").datepicker("getDate");
					var dateToObj = $("#dateto").datepicker("getDate");
					
					if(dateToObj == null || dateFromObj.getTime() >= dateToObj.getTime()) {
						$("#dateto").datepicker("setDate", new Date(dateFromObj.getTime() + 24 * 60 * 60 * 1000));
					}
					
					$("#dateto").datepicker("option", "minDate", new Date(dateFromObj.getTime() + 24 * 60 * 60 * 1000));
				});

				$("#dateto").datepicker({
					showButtonPanel: true,
		            changeMonth: false,
		            changeYear: false,
		            numberOfMonths: 1,
		            dayNamesMin: ["S", "M", "T", "W", "T", "F", "S"],
		            inline: true,
		            minDate: "+2d",
		            maxDate: '+331D',
					defaultDate: "+2d",
		            dateFormat: "dd-M-yy",
		            showOtherMonths: false,
					beforeShowDay: function (date) {
						var departDate = $("#datefrom").datepicker('getDate');
						var returnDate = $("#dateto").datepicker('getDate');
						return datepickerDateHightLight(date, departDate, returnDate);
					}
				})
				.datepicker("setDate", "+2d");
   			} // flightDatepicker

   			$('#main-function .group-50 input').on("focusin", function(){
   				$(this).parent().addClass('active');
   			});
   			$('#main-function .group-50 input').on("focusout", function(){
   				$(this).parent().removeClass('active');
   			});

   			$("#main-function .form-group label").click(function(event) {
   				$(this).parent().find("select").select2('open');
   			});
   			 /********************************************************/

			// Block megamenu when click
		    $('.dropdown-menu').click(function (event) {
		        event.stopPropagation();
		    });

		    $(".close-sub-nav").click(function(event) {
	    		$(this).closest('.dropdown').removeClass('open');
	    		$(".dropdown-toggle").removeClass("active");
		        event.stopPropagation();
		        return false;
		    });

			// Popup Box Login
			$("#link-login-txt").click(function (){
				$(this).parent().toggleClass("active animated fadeIn");
				$(".overlay").toggleClass("active animated fadeIn");

				$(".close-form-login").click(function (){
					$(".link-login").removeClass("active animated fadeIn");
					$(".overlay").removeClass("active animated fadeIn");
				});
			});

			///////////////////////////////
			// Screen resize
			//////////////////////////////
			var resizeTimer;
			$(window).on('load resize', function(e) {
				clearTimeout(resizeTimer);
				resizeTimer = setTimeout(function() {
					// Resizing has "stopped"
					var screenSize = $(window).width();
					var IndexAdultChildInfantSize;

					if (screenSize >= 1024) {} { 
						IndexAdultChildInfantSize = "115px"; // for Adult, Child, Infant select
					}

					if (screenSize < 1024) {
						IndexAdultChildInfantSize = "100%"; // for Adult, Child, Infant select
					}	

					// CSS set select
					$('.num-select').css('width', IndexAdultChildInfantSize);

					$('.num-select').on('select2:open', function (e) {
						$("body").addClass('selec2-showing');
					});

					$('.num-select').on('select2:close', function (e) {
						$("body").removeClass('selec2-showing');
					});

					//Select2 init

					$("#find-flight-adults").select2({
						minimumResultsForSearch: Infinity,
						dropdownParent: $('#select-number-wap01')
					});

					$("#find-flight-child").select2({
						minimumResultsForSearch: Infinity,
						dropdownParent: $('#select-number-wap02')	
					});		

					$("#find-flight-infant").select2({
						minimumResultsForSearch: Infinity,
						dropdownParent: $('#select-number-wap03')	
					});
					
					$("#seat-class-dropdown").select2({
						minimumResultsForSearch: Infinity,
						dropdownParent: $('#seat-class-wrap')
					});

					// ************* Select2 Purple Field Function *************
					// *** Select Room 
					$("#cboRoom").select2({
						minimumResultsForSearch: Infinity,
						dropdownParent: $('#select-room-purple')
					});	

					// ---------------- ROOM 1---------------------
					// *** Room 1: Select Adult
					$("#number_of_adults_1").select2({
						minimumResultsForSearch: Infinity,
						dropdownParent: $('#number_of_adults_1_wap')
					});
					// ***  Room 1:  Children 
					$("#number_of_children_1").select2({
						minimumResultsForSearch: Infinity,
						dropdownParent: $('#number_of_children_1_wap')
					});
					// ***  Room 1:  Adult 
					$("#number_of_adults_2").select2({
						minimumResultsForSearch: Infinity,
						dropdownParent: $('#number_of_adults_2_wap')
					});
					// ***  Room 1:  Children 
					$("#number_of_children_2").select2({
						minimumResultsForSearch: Infinity,
						dropdownParent: $('#number_of_children_2_wap')
					});
					// ***  Room 1:  Children Age 1
					$("#child_age_1_1").select2({
						minimumResultsForSearch: Infinity,
						dropdownParent: $('#child_age_1_1_wap')
					});
					// ***  Room 1:  Children Age 2
					$("#child_age_1_2").select2({
						minimumResultsForSearch: Infinity,
						dropdownParent: $('#child_age_1_2_wap')
					});
					// ***  Room 1:  Children Age 3
					$("#child_age_1_3").select2({
						minimumResultsForSearch: Infinity,
						dropdownParent: $('#child_age_1_3_wap')
					});

					// ---------------- ROOM 2 ---------------------
					// *** Room 2: Select Adult
					$("#number_of_adults_2").select2({
						minimumResultsForSearch: Infinity,
						dropdownParent: $('#number_of_adults_2_wap')
					});
					// ***  Room 2:  Children 
					$("#number_of_children_2").select2({
						minimumResultsForSearch: Infinity,
						dropdownParent: $('#number_of_children_2_wap')
					});
					// ***  Room 2:  Adult 
					$("#number_of_adults_2").select2({
						minimumResultsForSearch: Infinity,
						dropdownParent: $('#number_of_adults_2_wap')
					});
					// ***  Room 2:  Children 
					$("#number_of_children_2").select2({
						minimumResultsForSearch: Infinity,
						dropdownParent: $('#number_of_children_2_wap')
					});
					// ***  Room 2:  Children Age 1
					$("#child_age_2_1").select2({
						minimumResultsForSearch: Infinity,
						dropdownParent: $('#child_age_2_1_wap')
					});
					// ***  Room 2:  Children Age 2
					$("#child_age_2_2").select2({
						minimumResultsForSearch: Infinity,
						dropdownParent: $('#child_age_2_2_wap')
					});
					// ***  Room 2:  Children Age 3
					$("#child_age_2_3").select2({
						minimumResultsForSearch: Infinity,
						dropdownParent: $('#child_age_2_3_wap')
					});

					// ---------------- ROOM 3 ---------------------
					// *** Room 3: Select Adult
					$("#number_of_adults_3").select2({
						minimumResultsForSearch: Infinity,
						dropdownParent: $('#number_of_adults_3_wap')
					});
					// ***  Room 3:  Children 
					$("#number_of_children_3").select2({
						minimumResultsForSearch: Infinity,
						dropdownParent: $('#number_of_children_3_wap')
					});
					// ***  Room 3:  Adult 
					$("#number_of_adults_3").select2({
						minimumResultsForSearch: Infinity,
						dropdownParent: $('#number_of_adults_3_wap')
					});
					// ***  Room 3:  Children 
					$("#number_of_children_3").select2({
						minimumResultsForSearch: Infinity,
						dropdownParent: $('#number_of_children_3_wap')
					});
					// ***  Room 3:  Children Age 1
					$("#child_age_3_1").select2({
						minimumResultsForSearch: Infinity,
						dropdownParent: $('#child_age_3_1_wap')
					});
					// ***  Room 3:  Children Age 2
					$("#child_age_3_2").select2({
						minimumResultsForSearch: Infinity,
						dropdownParent: $('#child_age_3_2_wap')
					});
					// ***  Room 3:  Children Age 3
					$("#child_age_3_3").select2({
						minimumResultsForSearch: Infinity,
						dropdownParent: $('#child_age_3_3_wap')
					});
				}, 250);

				e.stopPropagation();

			});
			// End resize
			/////////////////////////////////////

			$("#lastest-offers-location").select2({
				minimumResultsForSearch: Infinity,
				dropdownParent: $('#lastest-offers-location-wap')	
			});

			// Padding for function booking
			$('.btn-function-name').click(function(event) {
				inputPadding();
			});

			inputPadding();
			
			function inputPadding() {
				$("#main-function").find('.form-group').each(function(index, el) {

					var labelWidth = ($(this).find('label').width()) + 25;

					$(this).find('input').css('padding-left', labelWidth);
				});

				var fromLabel  = $("label[for='find-flight-from']").width() + 30;
				$('#find-flight-from, #find-flight-to').css('padding-left', fromLabel);

			}


		}
		//======== End Function ========//
		///////////////////////////////////////////////////////

		//Load Spin Circle
		overLoadPage();
		function overLoadPage() {
			$(window).load(function () {
				$("html, body").animate({scrollTop : 0});
				setTimeout(function () {
					$(".spin").fadeOut();
				}, 200);
				setTimeout(function () {
					$(".spin-wap").fadeOut();
				}, 400);
			});
		}
		//======== End Function ========//

		findFlightSwitcher();
		function findFlightSwitcher() {
			$('.find-flight-switcher').click(function(event) {

				$('.find-flight-switcher').removeClass('btn-yellow');
			    setTimeout(function(){
			    	$('.find-flight-switcher').addClass('btn-white')
			    }, 1);	

			    $(this).addClass('btn-yellow');

				var myFind = $(this).attr('id');
				if (myFind == 'find-oneway') {
                    $('#journey-span-field').val("OW");
                    $('.group-find-return').hide();
                    $('#find-flight-return').prop("disabled", true);
                    $('.group-find-depart').removeClass('group-50');
                }
                else {
				    $('#journey-span-field').val("RT");
				    $("#find-flight-return").prop('disabled', false);
                    $('.group-find-depart').addClass('group-50');
                    $('.group-find-return').show();
                }

				event.preventDefault();
			});			
		} //findFlightSwitcher
		//======== End Function ========//
		var resizeTimer;
		$(window).on('resize load', function() {
			
		  	clearTimeout(resizeTimer);
		  	resizeTimer = setTimeout(function() {
			  	if($(window).width() < 1024) {
			  		
			  	}else{
			  		$("#list-term-condistion").removeClass("active menu-fix-top").removeAttr("style");
			  		$("#list-term-condistion ol").removeClass("active");
					$(".banner-navigation-box ul").removeClass("active animated fadeIn");
					$(".list-ul-icon-visible-mb").removeClass("active animated fadeIn");
					$(".overlay").removeClass("active");
					$("body").removeClass("list-ul-icon-active");

			  	}   
		  }, 250);

		});


		NavigationWithIcon();
		function NavigationWithIcon(){
		// Navigation with icon
		
			$(".list-ul-icon-visible-mb").on("click", function(e){
				if($(window).width() < 1024) {
					$("body").toggleClass("list-ul-icon-active");
					$(this).toggleClass("active animated fadeIn");
					$(".banner-navigation-box ul").toggleClass("animated fadeIn active");
					$(".overlay").toggleClass("active animated fadeIn");
					return false;
				}
			});

			var listUlIcon = $(".list-ul-icon-visible-mb");
			
			if (listUlIcon.length == 1) {
				// Nav Fixed Top
				var listUlIconTop = listUlIcon.offset().top;

				$(window).scroll(function(){

					var heightNav = $(".header-top").innerHeight();
					var listUlIconHeight = $(".list-ul-icon-visible-mb").outerHeight();
					var wTop = $(this).scrollTop();

					if($(window).width() < 1024) {

						if ((wTop - listUlIconTop) > -heightNav) {
							$(".list-ul-icon-visible-mb").addClass("menu-fix-top").css({'top' : heightNav});
							$(".banner-navigation-box ul").addClass("menu-fix-top").css({'top' : (heightNav + listUlIconHeight) });
						
						}else{
							$(".list-ul-icon-visible-mb").removeClass("menu-fix-top").removeAttr("style");
							$(".banner-navigation-box ul").removeClass("menu-fix-top").removeAttr("style");
						}
					}
				});

				$('.overlay').click(function(){
					// Close Menu With Icon
					$(this).addClass("fadeOut");
					$(".banner-navigation-box ul").addClass("fadeOut");
					$(".list-ul-icon-visible-mb").removeClass("active fadeIn animated");

					// Close Popup Login
					$(".link-login").removeClass("active animated fadeIn");

					var removeClass = setInterval(function(){ 
						$('.overlay').removeClass("active animated fadeIn fadeOut");
						$(".banner-navigation-box ul").removeClass("active animated fadeOut fadeIn");
						$("body").removeClass("list-ul-icon-active");
						clearInterval(removeClass); 
					}, 200);
				});
			}				
		} //nav Fix top

		NavigationWithNumber();
		function NavigationWithNumber(){
			
			$("#list-term-condistion").on("click", function(){
				if($(window).width() < 1024) {
					$(this).toggleClass("active");
					$("#list-term-condistion ol").toggleClass("animated fadeIn active");
				}
			});
			
			var listUlNumber = $("#list-term-condistion");
			if (listUlNumber.length == 1) {

				var listUlNumberTop = listUlNumber.offset().top;
				
				// Nav Fixed Top
				$(window).scroll(function(){
					var wTop = $(this).scrollTop();
					var heightNav = $(".header-top").height();	
					
					if($(window).width() < 1024) {
						if (wTop - listUlNumberTop > -heightNav) {
							$("#list-term-condistion").addClass("menu-fix-top");
							$(".menu-fix-top").css({'top' : heightNav + 10});
						}else{
							$("#list-term-condistion").removeClass("menu-fix-top");
							$("#list-term-condistion").removeAttr("style");
						}
					}

				});
			}
			
		}		

		//hide input-error on change
		$('.form-control').change(function(event) {
			$('span.input-error').fadeOut();
			$('span.input-error').remove();
		});

		jQuery.validator.addMethod("lettersonly", function(value, element) {
			return this.optional(element) || /^[a-z ]+$/i.test(value);
		}, "Letters only.");		

		// Footer Navigation Responsive
		navigationFooterResponsive();
		function navigationFooterResponsive(){
			$('.nav-footer-col .title').click(function() {
				var navFooter = $(this).parent();
				if ($(navFooter).hasClass("active") == false){
					$('.nav-footer-col').removeClass("active");
					$('.nav-footer-col ul').removeClass("active");
					$(this).parent().addClass("active");	
					$(this).siblings("ul").addClass("active animated fadeIn");	
					return false;

				}else{
					$(this).siblings("ul").removeClass("active animated fadeIn");	
					$(navFooter).removeClass("active");

				}
			});
		}

		//Subscribe Modal
		$('#subscribe-enews').click(function(event) {
			$('#subscribeModal').modal('show');			
		});
	}); // Document ready
})(jQuery, this);
