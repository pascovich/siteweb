$(function() {
"use strict";
  var graph = new Rickshaw.Graph( {
        element: document.querySelector("#area-chart"),
        series: [{
            color: '#5867dd',
            data: [
                { x: 0, y: 40 },
                { x: 1, y: 49 },
                { x: 2, y: 38 },
                { x: 3, y: 30 },
                { x: 4, y: 32 } ]
        }]
    });
    graph.render();
    
    //bar chart
      var graph_bar = new Rickshaw.Graph( {
        element: document.querySelector("#bar-chart"),
        renderer: 'bar',
        series: [
            {
                data: [ { x: 0, y: 40 }, { x: 1, y: 49 }, { x: 2, y: 38 }, { x: 3, y: 30 }, { x: 4, y: 32 } ],
                color: '#5867dd'
            }, {
                data: [ { x: 0, y: 20 }, { x: 1, y: 24 }, { x: 2, y: 19 }, { x: 3, y: 15 }, { x: 4, y: 16 } ],
                color: '#f5f5f5'
            } ]
    } );
    graph_bar.render();
    
    //line chart
      var graph_line = new Rickshaw.Graph({
        element: document.querySelector("#line-chart"),
        renderer: 'line',
        series: [{
            data: [ { x: 0, y: 40 }, { x: 1, y: 49 }, { x: 2, y: 38 }, { x: 3, y: 30 }, { x: 4, y: 32 } ],
            color: '#5867dd'
        }, {
            data: [ { x: 0, y: 20 }, { x: 1, y: 24 }, { x: 2, y: 19 }, { x: 3, y: 15 }, { x: 4, y: 16 } ],
            color: '#eee'
        }]
    });
    graph_line.render();
    
     var graph_scatterplot = new Rickshaw.Graph( {
        element: document.querySelector("#scatterplot-chart"),
        renderer: 'scatterplot',
        stroke: true,
        padding: { top: 0.05, left: 0.05, right: 0.05 },
        series: [ {
            data: [ { x: 0, y: 15 },
                { x: 1, y: 18 },
                { x: 2, y: 10 },
                { x: 3, y: 12 },
                { x: 4, y: 15 },
                { x: 5, y: 24 },
                { x: 6, y: 28 },
                { x: 7, y: 31 },
                { x: 8, y: 22 },
                { x: 9, y: 18 },
                { x: 10, y: 16 }
            ],
            color: '#5867dd'
        } ]
    } );
    graph_scatterplot.render();
});


