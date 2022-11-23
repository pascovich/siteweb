(function($) {
	"use strict";
	
    $(function () {
		
	// Vector Map
    $('#world-map-markers').vectorMap({
            map : 'us_aea_en',
            backgroundColor : 'transparent',
            zoomOnScroll: false,
            regionStyle : {
                initial : {
                    fill : '#c9d6de'
                }
            },
            markers: [{
                    latLng : [40.70, -78.00],
                    name : 'Newyork: 175'
                    , style: {fill: '#4b71fa'}
                },{
                    latLng : [39.00, -98.48],
                    name : 'Kansas: 386'
                    , style: {fill: '#f4516c'}
                },
              {
                latLng : [37.00, -122.05],
                name : 'Vally : 450'
                , style: {fill: '#F6BB42'}
              }]
        });

		
		// Page View Chart
		var ctx = document.getElementById('myChart').getContext("2d");
		let draw = Chart.controllers.line.prototype.draw;
		Chart.controllers.line = Chart.controllers.line.extend({
			draw: function() {
				draw.apply(this, arguments);
				let ctx = this.chart.chart.ctx;
				let _stroke = ctx.stroke;
				ctx.stroke = function() {
					ctx.save();
					ctx.shadowColor = 'rgba(0,0,0,0.3)';
					ctx.shadowBlur = 10;
					ctx.shadowOffsetX = 0;
					ctx.shadowOffsetY = 4;
					_stroke.apply(this, arguments)
					ctx.restore();
				}
			}
		});

		var myChart = new Chart(ctx, {
			type: 'line',
			data: {
				labels: ["January", "February", "March", "April", "May", "June", "July"],
				datasets: 
				[
					{				
						label: "Total ",
						borderColor: "#fff",
						pointBorderColor: "#fff",
						pointBackgroundColor: "#fff",
						pointHoverBackgroundColor: "#fff",
						pointHoverBorderColor: "#fff",
						pointBorderWidth: 3,
						pointHoverRadius: 6,
						pointHoverBorderWidth: 3,
						pointRadius: 3,
						fill: false,
						borderWidth: 3,
						 data: [120, 180, 120, 90, 120, 110, 170]
					},
					{				
						label: "New ",
						borderColor: "#00c5dc",
						pointBorderColor: "#00c5dc",
						pointBackgroundColor: "#00c5dc",
						pointHoverBackgroundColor: "#00c5dc",
						pointHoverBorderColor: "#fff",
						pointBorderWidth: 3,
						pointHoverRadius: 6,
						pointHoverBorderWidth: 3,
						pointRadius: 3,
						fill: false,
						borderWidth: 3,
						data: [100, 130, 170, 130, 150, 70, 190]
					},
					{				
						label: "Return ",
						borderColor: "#F6BB42 ",
						pointBorderColor: "#F6BB42 ",
						pointBackgroundColor: "#F6BB42 ",
						pointHoverBackgroundColor: "#F6BB42 ",
						pointHoverBorderColor: "#F6BB42 ",
						pointBorderWidth: 3,
						pointHoverRadius: 6,
						pointHoverBorderWidth: 3,
						pointRadius: 3,
						fill: false,
						borderWidth: 3,
						data: [40, 170, 100, 40, 70, 150, 140]
					}
	
				]
			},
			options: {    
				tooltips: {
				   callbacks: {
					labelColor: function(tooltipItem) {
						return {
							borderColor: 'rgba(255, 255, 255, 0.5)',
							backgroundColor: 'rgba(255, 255, 255, 0.5)'
						}
					}
				   },
				  backgroundColor: '#FFF',
				  titleFontSize: 16,
				  titleFontColor: '#455a64',
				  bodyFontColor: '#909fa7',
				  bodyFontSize: 14,
				  footerAlign: "center",
				  bodyFontFamily: "Montserrat",
				  borderColor:"#ccc",
				  borderWidth:1,
				  xPadding:20,
				  yPadding:20,
				  caretPadding:20,
				  mode: 'index',
                  intersect: false,
				  displayColors: false
				},	
				legend: {
					display: false
				},
				scales: {
					yAxes: [{
						ticks: {
							fontColor: "rgba(255,255,255,0.5)",
							beginAtZero: true,
							maxTicksLimit: 5,
							padding: 10,
							fontFamily:"Montserrat"
						},
						gridLines: {
							drawTicks: false,
							display: false
						}

					}],
					xAxes: [{
						gridLines: {
							zeroLineColor: "transparent"
						},
						ticks: {
							padding: 20,
							fontColor: "rgba(255,255,255,0.5)",
							fontFamily:"Montserrat"
						}
					}]
				}
			}
		});
		
		

		// Visit Separation
		var donut = c3.generate({
			bindto: '#donut',
			data: {
				columns: [
					['Other',15],
					['Desktop',45],
					['Tablet', 15],
					['Mobile', 25],
				],
				type : 'donut',
				onclick: function (d, i) { console.log("onclick", d, i); },
				onmouseover: function (d, i) { console.log("onmouseover", d, i); },
				onmouseout: function (d, i) { console.log("onmouseout", d, i); }
			},
			donut: {
				label: {
					show: false
				  },
				title:"Our Visits",
				width:20,
				
			},
			
			legend: {
			  hide: true
			},
			color: {
				  pattern: ['#909fa7', '#967ADC', '#00c5dc', '#5867dd']
			}
		});	
  });
})(jQuery);