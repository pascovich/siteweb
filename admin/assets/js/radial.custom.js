
    $(function () {
		"use strict";

                $(".knob").knob({
                    width: '150',
                    height: '150'
                });
           
                $('#easypie1').easyPieChart({
                   lineWidth: 8,
                   barColor: '#1E88E5',
				   size:150,
                   lineCap: "circle"});
				   
                $('#easypie2').easyPieChart({
                    animate: {duration: 800, enabled: !0},
                    barColor: '#f4516c',
					size:150,
                    lineWidth: 2, lineCap: "circle"});

                $('#easypie3').easyPieChart({
                    animate: {duration: 800, enabled: !0},
                    barColor: '#ffb822',
					size:150,
                    lineWidth:5, lineCap: "circle"});
                
                $('#easypie4').easyPieChart({
					animate:{duration:800,enabled:!0},
					barColor:'#f4516c',
					trackColor:'#ffb822',
					scaleColor:'#eef5f9',
					lineWidth:20,
					size:150,
					lineCap:"circle"});
         
    });


