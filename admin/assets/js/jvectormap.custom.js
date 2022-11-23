$(function() {
"use strict";

jQuery('#world-map-markers').vectorMap(
{
    map: 'world_mill_en',
    backgroundColor: '#fff',
    borderColor: '#818181',
    borderOpacity: 0.25,
    borderWidth: 1,
    color: '#f4f3f0',
    regionStyle : {
        initial : {
          fill : '#ddd'
        }
      },
    markerStyle: {
      initial: {
                    r: 9,
                    'fill': '#fff',
                    'fill-opacity':1,
                    'stroke': '#000',
                    'stroke-width' : 5,
                    'stroke-opacity': 0.4
                }
                },
    enableZoom: true,
    hoverColor: '#c9dfaf',
    markers : [{
        latLng : [38.6118797, 26.2539233],
        name : 'Turkey'
      
      }],
    hoverOpacity: null,
    normalizeFunction: 'linear',
    scaleColors: ['#b6d6ff', '#005ace'],
    selectedColor: '#c9dfaf',
    selectedRegions: [],
    showTooltip: true,
    onRegionClick: function(element, code, region)
    {
        var message = 'You clicked "'
            + region
            + '" which has the code: '
            + code.toUpperCase();

        alert(message);
    }
});


$('#india').vectorMap({
            map : 'in_mill',
            backgroundColor : 'transparent',
            regionStyle : {
                initial : {
                    fill : '#03A9F4'
                }
            }
        });


        $('#usa').vectorMap({
            map : 'us_aea_en',
            backgroundColor : 'transparent',
            regionStyle : {
                initial : {
                    fill : '#f42048'
                }
            }
        });
        
       
        
        $('#australia').vectorMap({
            map : 'au_mill',
            backgroundColor : 'transparent',
            regionStyle : {
                initial : {
                    fill : '#FF7043'
                }
            }
        });
        
         $('#uk').vectorMap({
            map : 'uk_mill_en',
            backgroundColor : 'transparent',
            regionStyle : {
                initial : {
                    fill : '#7986CB'
                }
            }
        });

       });
        