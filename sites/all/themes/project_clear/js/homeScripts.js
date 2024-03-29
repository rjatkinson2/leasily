(function ($, Drupal) {

  Drupal.behaviors.project_clear = {
    attach: function(context, settings) {
    		
    		
    		/*var container = $(".topSecondBar");
    		var triangle = $(".arrow-down");
			calculation();
			$(window).resize(calculation);
			
			function calculation() {
				var width = container.width()/4;
				var height = container.height()/4;
			
				$(triangle).css({
					'position': 'absolute',
					'bottom': height + 'px',
					'left': width + 'px'
				});
			}*/
			
			var winWidth = $(document).width();
			var leftMarg = (winWidth-1000)/2+60;
			$("#learn").css("left" , leftMarg+'px'); 
			
			$( window ).resize(function() {
				var winWidth = $(document).width();
				var leftMarg = (winWidth-1000)/2+60;
				$("#learn").css("left" , leftMarg+'px');
			});
			
			$("#learn").delay(800).animate({"bottom" : "9%"}, 2000);
			
			var promo = $("#promoDetails");
			var seeDetails = $("#seeDetails");
			
			$(seeDetails).click(function(){
				$(promo).slideToggle();
				$("#learn").slideToggle();
			});
			
			$(".centerTest").click(function(){
				$("#learn").slideToggle();
			});
			
			$(".dotted h4").hover(
				function (e) {
					$this = $(this)
					$this.animate({
						paddingLeft : '1.7em'
					}, 300);
				},
			 
				function () {
					$this = $(this)
					$this.animate({
						paddingLeft : '1.5em'
					}, 300);
				}
			);    
    
			var divs = $('#learn > h3, .arrow-down'),
			    limit = 650;  /* scrolltop value when opacity should be 0 */
			
			$(window).on('scroll', function() {
			   var st = $(this).scrollTop();
			
			   /* avoid unnecessary call to jQuery function */
			   if (st <= limit) {
			      divs.css({ 'opacity' : (1 - st/limit) });
			   }
			});
			    		
    		/*$('.socialImg img').hover(function(){
    			alert('heyo!');
    			}
    		);*/
    		
			$("#signupReturn").click(function(){
			    $('html, body').animate({
			        scrollTop: 0
			    },
			    {
				    duration: 1500
			    });
			});    		
    		
    		var getOffer = $('#edit-submitted-rate').val();
    		
    		$("#edit-submitted-rate")
				.keyup(function () {
					var rate = $('#edit-submitted-rate').val();
					if($('#edit-submitted-number-of-tenants').val() == ''){
						var str = '$' + ' --';
					}
					else{
						var str = '$' + Math.ceil(rate/$('#edit-submitted-number-of-tenants').val());
					}
					$("#priceCalc").text(str);
				})
				
    		$("#edit-submitted-number-of-tenants")
				.change(function () {
					var rate = $('#edit-submitted-rate').val();
					if($('#edit-submitted-rate').val() == ''){
						var str = '$' + ' --';
					}
					else{
						var str = '$' + Math.ceil(rate/$('#edit-submitted-number-of-tenants').val());
					}
					$("#priceCalc").text(str);
				})

    		
    
			var $tabs = $('section');
			
			var setProgress = function(){
				var checkId = $tabs.filter('.active.topLevel').attr('id');
				var multiplier = checkId.substr(checkId.length - 1);
			    var spanWidth = $('div.progress').width() * .2 * multiplier;
			    $('span.meter').css('width', spanWidth);
			}
			
			$('#prevtab').on('click', function() {
				if(percentage != '1') {
					var currentID = $tabs.filter('.active.topLevel').attr('id');
					var percentage = currentID.substr(currentID.length - 1);
					var locale = parseInt(percentage) - 1;
					var linkIdent = '#hometab' + locale + ' > p > a';
					$(linkIdent).trigger( 'click' );
					setProgress();
				}
			});
			
			$('#nexttab').on('click', function() {
				if(percentage != '5') {
					var currentID = $tabs.filter('.active.topLevel').attr('id');
					var percentage = currentID.substr(currentID.length - 1);
					var locale = parseInt(percentage) + 1;
					var linkIdent = '#hometab' + locale + ' > p > a';
					$(linkIdent).trigger( 'click' );
					setProgress();
				}
			});
						
			    
			var offer = $(".makeOffer");
			var hideButton = $(".btn1");
		    if($('form.webform-client-form').find('.required.error').length != 0){
				$(offer).show();
			    $('html, body').animate({
			        scrollTop: $("form.webform-client-form").offset().top
			    });
			}
			
			$(hideButton).click(function(){
				$(offer).slideToggle();
			});
						
			// $("#views-exposed-form-front-map-block").addClass("custom");
			
			$('.bxslider').bxSlider({adaptiveHeight: true, mode:'fade', speed:300 });
			
			/*var d1 = [];
				for (var i = 0; i < 3000; i += 0.5) {
				d1.push([i, Math.sin(i)*3000]);
			}*/
    								
			var d1 = [[2009, 2300],[2010, 2800],[2011, 3500],[2012, 3600],[2013, 3200]];
			
			var d2 = [[2009, 2500], [2011, 2600], [2012, 2800], [2013, 3500]];
			
			// A null signifies separate line segments
			var d3 = [[2009, 1200], [2010, 1300], null, [2012, 2400], [2013, 2750]];
			
			$.plot("#placeholder", [
				{ label: "Rent", data: d1 },
				{ label: "Neighborhood Average", data: d2 }/*
				{ label: "Leasily Average", data: d3 }*/
				], {
					
					/*colors: ["#D44332", "#0082A6", "#2EBFA2"],*/
					colors: ["#0082A6", "#D44332"],

					legend:{
						noColumns: 3
					},
					
					series: {
					lines: { show: true },
					points: { show: true }
					},
					
					xaxis: {
					ticks: 5,
					min: 2009,
					max: 2013,
					tickDecimals: 0
					},
					
					yaxis: {
					ticks: 5,
					min: 0,
					max: 5000,
					tickDecimals: 2
					},
					
					grid: {
					backgroundColor: "#fff",
					borderWidth: {
					top: 0,
					right: 0,
					bottom: 0,
					left: 0
					}
				}
			});
    }
  };

})(jQuery, Drupal);
