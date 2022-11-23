$(function () {
	"use strict";
 
    /**
     * Data for Bar chart
     */
    // Bar chart
	new Chart(document.getElementById("barchart"), {
		type: 'bar',
		data: {
		  labels: ["Africa", "Asia", "Europe", "Latin America", "North America"],
		  datasets: [
			{
			  label: "Population (millions)",
			  backgroundColor: ["#03a9f4", "#e861ff","#08ccce","#e2b35b","#e40503"],
			  data: [8478,6267,5734,4784,1833]
			}
		  ]
		},
		options: {
		  legend: { display: false },
		  title: {
			display: true,
			text: 'Predicted world population (millions) in 2050'
		  }
		}
	});

	
	//Line Chart

	new Chart(document.getElementById("linechart"), {
	  type: 'line',
	  data: {
		labels: [4500,3500,3200,3050,2700,2450,2200,1750,1499,2050],
		datasets: [{ 
			data: [86,114,106,106,107,111,133,221,783,2478],
			label: "Africa",
			borderColor: "#3e95cd",
			fill: false
		  }, { 
			data: [282,350,411,502,635,809,947,1402,3700,5267],
			label: "Asia",
			borderColor: "#36a2eb",
			fill: false
		  }, { 
			data: [168,170,178,190,203,276,408,547,675,734],
			label: "Europe",
			borderColor: "#07b107",
			fill: false
		  }, { 
			data: [40,20,10,16,24,38,74,167,508,784],
			label: "Latin America",
			borderColor: "#ff6384",
			fill: false
		  }, { 
			data: [6,3,2,2,7,26,82,172,312,433],
			label: "North America",
			borderColor: "#4bc0c0",
			fill: false
		  }
		]
	  },
	  options: {
		title: {
		  display: true,
		  text: 'World population per region (in millions)'
		}
	  }
	});
	
	
	// New chart
	new Chart(document.getElementById("piechart"), {
		type: 'pie',
		data: {
		  labels: ["Africa", "Asia", "Europe", "Latin America"],
		  datasets: [{
			label: "Population (millions)",
			backgroundColor: ["#36a2eb", "#ff6384","#4bc0c0","#ffcd56","#07b107"],
			data: [2478,5267,3734,2784]
		  }]
		},
		options: {
		  title: {
			display: true,
			text: 'Predicted world population (millions) in 2050'
		  }
		}
	});
	
	// Horizental Bar Chart
	new Chart(document.getElementById("bar-chart-horizontal"), {
		type: 'horizontalBar',
		data: {
		  labels: ["Africa", "Asia", "Europe", "Latin America", "North America"],
		  datasets: [
			{
			  label: "Population (millions)",
			  backgroundColor: ["#03a9f4", "#e861ff","#08ccce","#e2b35b","#e40503"],
			  data: [8478,6267,5534,4784,3433]
			}
		  ]
		},
		options: {
		  legend: { display: false },
		  title: {
			display: true,
			text: 'Predicted world population (millions) in 2050'
		  }
		}
	});
	
	//Polar Chart
	new Chart(document.getElementById("polar-chart"), {
		type: 'polarArea',
		data: {
		  labels: ["Africa", "Asia", "Europe", "Latin America"],
		  datasets: [
			{
			  label: "Population (millions)",
			  backgroundColor: ["#36a2eb", "#ff6384","#4bc0c0","#ffcd56","#07b107"],
			  data: [2478,5267,5734,3784]
			}
		  ]
		},
		options: {
		  title: {
			display: true,
			text: 'Predicted world population (millions) in 2050'
		  }
		}
	});

	//Radar chart
	new Chart(document.getElementById("radar-chart"), {
		type: 'radar',
		data: {
		  labels: ["Africa", "Asia", "Europe", "Latin America", "North America"],
		  datasets: [
			{
			  label: "250",
			  fill: true,
			  backgroundColor: "rgba(179,181,198,0.2)",
			  borderColor: "rgba(179,181,198,1)",
			  pointBorderColor: "#fff",
			  pointBackgroundColor: "rgba(179,181,198,1)",
			  data: [8.77,55.61,21.69,6.62,6.82]
			}, {
			  label: "4050",
			  fill: true,
			  backgroundColor: "rgba(255,99,132,0.2)",
			  borderColor: "rgba(255,99,132,1)",
			  pointBorderColor: "#fff",
			  pointBackgroundColor: "rgba(255,99,132,1)",
			  pointBorderColor: "#fff",
			  data: [25.48,54.16,7.61,8.06,4.45]
			}
		  ]
		},
		options: {
		  title: {
			display: true,
			text: 'Distribution in % of world population'
		  }
		}
	});

});


