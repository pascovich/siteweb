$(function () {
"use strict";
    /*Line chart*/
    var chart = c3.generate({
        bindto: '#lineChart',
        data: {
            columns: [
                ['data1', 30, 200, 100, 200, 150, 250],
                ['data2', 70, 120, 80, 250, 100, 60],
				['data3', 50, 300, 10, 40, 15, 130]
            ],
            colors: {
                data1: '#5867dd',
                data2: '#f4516c',
				data3: '#F6BB42',

            }
        }
    });
    /*time series*/
    var chart = c3.generate({
        bindto: '#timeseriesChart',
        data: {
            x: 'x',
//        xFormat: '%Y%m%d', // 'xFormat' can be used as custom format of 'x'
            columns: [
                ['x', '2013-01-01', '2013-01-02', '2013-01-03', '2013-01-04', '2013-01-05', '2013-01-06'],
//            ['x', '20130101', '20130102', '20130103', '20130104', '20130105', '20130106'],
                ['data1', 30, 200, 100, 400, 150, 250],
                ['data2', 130, 340, 200, 500, 250, 350]
            ],
            colors: {
               data1: '#36a3f7',
                data2: '#f4516c',
			
            }
        },
        axis: {
            x: {
                type: 'timeseries',
                tick: {
                    format: '%Y-%m-%d'
                }
            }
        }
    });

    setTimeout(function () {
        chart.load({
            columns: [
                ['data3', 400, 500, 450, 700, 600, 500]
            ]
        });
    }, 1000);
    /*scatter charts*/
    var chart = c3.generate({
        bindto: '#scatterChart',
        data: {
            xs: {
                setosa: 'setosa_x',
                versicolor: 'versicolor_x'
            },
            // iris data from R
            columns: [
                ["setosa_x", 3.5, 3.0, 3.2, 3.1, 3.6, 3.9, 3.4, 3.4, 2.9, 3.1, 3.7, 3.4, 3.0, 3.0, 4.0, 4.4, 3.9, 3.5, 3.8, 3.8, 3.4, 3.7, 3.6, 3.3, 3.4, 3.0, 3.4, 3.5, 3.4, 3.2, 3.1, 3.4, 4.1, 4.2, 3.1, 3.2, 3.5, 3.6, 3.0, 3.4, 3.5, 2.3, 3.2, 3.5, 3.8, 3.0, 3.8, 3.2, 3.7, 3.3],
                ["versicolor_x", 3.2, 3.2, 3.1, 2.3, 2.8, 2.8, 3.3, 2.4, 2.9, 2.7, 2.0, 3.0, 2.2, 2.9, 2.9, 3.1, 3.0, 2.7, 2.2, 2.5, 3.2, 2.8, 2.5, 2.8, 2.9, 3.0, 2.8, 3.0, 2.9, 2.6, 2.4, 2.4, 2.7, 2.7, 3.0, 3.4, 3.1, 2.3, 3.0, 2.5, 2.6, 3.0, 2.6, 2.3, 2.7, 3.0, 2.9, 2.9, 2.5, 2.8],
                ["setosa", 0.2, 0.2, 0.2, 0.2, 0.2, 0.4, 0.3, 0.2, 0.2, 0.1, 0.2, 0.2, 0.1, 0.1, 0.2, 0.4, 0.4, 0.3, 0.3, 0.3, 0.2, 0.4, 0.2, 0.5, 0.2, 0.2, 0.4, 0.2, 0.2, 0.2, 0.2, 0.4, 0.1, 0.2, 0.2, 0.2, 0.2, 0.1, 0.2, 0.2, 0.3, 0.3, 0.2, 0.6, 0.4, 0.3, 0.2, 0.2, 0.2, 0.2],
                ["versicolor", 1.4, 1.5, 1.5, 1.3, 1.5, 1.3, 1.6, 1.0, 1.3, 1.4, 1.0, 1.5, 1.0, 1.4, 1.3, 1.4, 1.5, 1.0, 1.5, 1.1, 1.8, 1.3, 1.5, 1.2, 1.3, 1.4, 1.4, 1.7, 1.5, 1.0, 1.1, 1.0, 1.2, 1.6, 1.5, 1.6, 1.5, 1.3, 1.3, 1.3, 1.2, 1.4, 1.2, 1.0, 1.3, 1.2, 1.3, 1.3, 1.1, 1.3]
            ],
            colors: {
                setosa_x: '#36a3f7',
                versicolor_x: '#36a3f7',
                setosa: '#36a3f7',
                versicolor: '#f4516c',
                virginica_x: '#f4516c',
                virginica: '#f4516c'
            },
            type: 'scatter'
        },
        axis: {
            x: {
                label: 'Sepal.Width',
                tick: {
                    fit: false
                }
            },
            y: {
                label: 'Petal.Width'
            }
        }
    });



    /*pie chart*/
    c3.generate({
        bindto: '#pieChart',
        data: {
            columns: [
                ['data1', 30],
                ['data2', 120],
				['data3', 20]
            ],
            colors: {
                data1: '#F6BB42',
                data2: '#36a3f7',
				data3: '#37BC9B',
            },
            type: 'pie'
        }
    });

    c3.generate({
        bindto: '#stocked',
        data: {
            columns: [
                ['data1', 30, 200, 100, 400, 150, 250],
                ['data2', 50, 20, 10, 40, 15, 25]
            ],
            colors: {
                data1: '#36a3f7',
                data2: '#5867dd'
            },
            type: 'bar',
            groups: [
                ['data1', 'data2']
            ]
        }
    });

    c3.generate({
        bindto: '#gauge',
        data: {
            columns: [
                ['data', 91.4]
            ],
            type: 'gauge'
        },
        color: {
            pattern: ['#36a3f7', '#ddd']

        }
    });
    
   c3.generate({
       bindto: '#donut',
    data: {
        columns: [
            ['data1', 30],
            ['data2', 120]
        ],
        type : 'donut'
    },
    donut: {
        title: "FixedPlus"
    },
     color: {
            pattern: ['#36a3f7', '#5867dd']

        }
});
});
