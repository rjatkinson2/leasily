(function ($, Drupal) {

  Drupal.behaviors.project_clear = {
    attach: function(context, settings) {

			var offer = $(".makeOffer");
			var hideButton = $(".btn1")
			$(offer).hide();
			
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
				{ label: "Neighborhood Average", data: d2 },
				{ label: "Leasily Average", data: d3 }
				], {
					
					colors: ["#D44332", "#0082A6", "#2EBFA2"],
					
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
