(function ($, window, document, undefined) {
    var rememberToken =$('#remember-token').val();
    var chart1 = {
        init:function() {
            var url = $.get("http://www.infra911.com/data.php?Act=data1_1&paramGID="+rememberToken+"&GidList=", function () {
            }).done(function (data) {
                var newdata = $.parseJSON(data.replace(/'/g, '"'));
                [].forEach.call(newdata, function (inst, i) {
                    // Iterate through all the keys
                    [].forEach.call(Object.keys(inst), function (y) {
                        // Check if string is Numerical string
                        if (!isNaN(newdata[i][y]))
                        //Convert to numerical value
                            newdata[i][y] = +newdata[i][y];
                    });

                });
                var chart = AmCharts.makeChart("chart1", {
                    "type": "serial",
                    "theme": "none",
                    "marginRight": 40,
                    "marginLeft": 40,
                    "autoMarginOffset": 20,
                    "mouseWheelZoomEnabled":true,
                    "dataDateFormat": "YYYY-MM-DD",
                    "valueAxes": [{
                        "id": "v1",
                        "axisAlpha": 0,
                        "position": "left",
                        "ignoreAxisWidth":true
                    }],
                    "balloon": {
                        "borderThickness": 1,
                        "shadowAlpha": 0
                    },
                    "graphs": [{
                        "id": "g1",
                        "balloon":{
                            "drop":true,
                            "adjustBorderColor":false,
                            "color":"#ffffff"
                        },
                        "bullet": "square",
                        "bulletBorderAlpha": 1,
                        "bulletColor": "#FFFFFF",
                        "bulletSize": 5,
                        "hideBulletsCount": 50,
                        "lineThickness": 2,
                        "title": "red line",
                        "useLineColorForBulletBorder": true,
                        "valueField": "value",
                        "balloonText": "<span style='font-size:18px;'>[[value]]</span>"
                    }],
                    "chartScrollbar": {
                        "graph": "g1",
                        "oppositeAxis":false,
                        "offset":30,
                        "scrollbarHeight": 80,
                        "backgroundAlpha": 0,
                        "selectedBackgroundAlpha": 0.1,
                        "selectedBackgroundColor": "#888888",
                        "graphFillAlpha": 0,
                        "graphLineAlpha": 0.5,
                        "selectedGraphFillAlpha": 0,
                        "selectedGraphLineAlpha": 1,
                        "autoGridCount":true,
                        "color":"#AAAAAA",
                        "enabled":false
                    },
                    "chartCursor": {
                        "pan": true,
                        "valueLineEnabled": true,
                        "valueLineBalloonEnabled": true,
                        "cursorAlpha":1,
                        "cursorColor":"#258cbb",
                        "limitToGraph":"g1",
                        "valueLineAlpha":0.2,
                        "valueZoomable":true,
                        "enabled":false
                    },
                    "valueScrollbar":{
                        "oppositeAxis":false,
                        "offset":50,
                        "scrollbarHeight":10
                    },
                    "categoryField": "polltime",
                    "categoryAxis": {
                        "parseDates": false,
                        "dashLength": 1,
                        "minorGridEnabled": true,
                        "tickLength": 20
                    },
                    "export": {
                        "enabled": false
                    },
                    "dataProvider": newdata
                });


            });

        }
    };
    var chart2 = {
        init: function () {
            var url = $.get("http://www.infra911.com/data.php?Act=data1_2&paramGID="+rememberToken+"&GidList=", function () {
            }).done(function (data) {
                var newdata = $.parseJSON(data.replace(/'/g, '"'));
                [].forEach.call(newdata, function (inst, i) {
                    // Iterate through all the keys
                    [].forEach.call(Object.keys(inst), function (y) {
                        // Check if string is Numerical string
                        if (!isNaN(newdata[i][y]))
                        //Convert to numerical value
                            newdata[i][y] = +newdata[i][y];
                    });

                });
                var chart = AmCharts.makeChart("chart2", {
                    "type": "serial",
                    "theme": "none",
                    "marginRight": 40,
                    "marginLeft": 40,
                    "autoMarginOffset": 20,
                    "mouseWheelZoomEnabled":true,
                    "dataDateFormat": "YYYY-MM-DD",
                    "valueAxes": [{
                        "id": "v1",
                        "axisAlpha": 0,
                        "position": "left",
                        "ignoreAxisWidth":true
                    }],
                    "balloon": {
                        "borderThickness": 1,
                        "shadowAlpha": 0
                    },
                    "graphs": [{
                        "id": "g1",
                        "balloon":{
                            "drop":true,
                            "adjustBorderColor":false,
                            "color":"#ffffff"
                        },
                        "bullet": "square",
                        "bulletBorderAlpha": 1,
                        "bulletColor": "#FFFFFF",
                        "bulletSize": 5,
                        "hideBulletsCount": 50,
                        "lineThickness": 2,
                        "title": "red line",
                        "useLineColorForBulletBorder": true,
                        "valueField": "value",
                        "balloonText": "<span style='font-size:18px;'>[[value]]</span>"
                    }],
                    "chartScrollbar": {
                        "graph": "g1",
                        "oppositeAxis":false,
                        "offset":30,
                        "scrollbarHeight": 80,
                        "backgroundAlpha": 0,
                        "selectedBackgroundAlpha": 0.1,
                        "selectedBackgroundColor": "#888888",
                        "graphFillAlpha": 0,
                        "graphLineAlpha": 0.5,
                        "selectedGraphFillAlpha": 0,
                        "selectedGraphLineAlpha": 1,
                        "autoGridCount":true,
                        "color":"#AAAAAA",
                        "enabled":false
                    },
                    "chartCursor": {
                        "pan": true,
                        "valueLineEnabled": true,
                        "valueLineBalloonEnabled": true,
                        "cursorAlpha":1,
                        "cursorColor":"#258cbb",
                        "limitToGraph":"g1",
                        "valueLineAlpha":0.2,
                        "valueZoomable":true,
                        "enabled":false
                    },
                    "valueScrollbar":{
                        "oppositeAxis":false,
                        "offset":50,
                        "scrollbarHeight":10
                    },
                    "categoryField": "polltime",
                    "categoryAxis": {
                        "parseDates": false,
                        "dashLength": 1,
                        "minorGridEnabled": true,
                        "tickLength": 20
                    },
                    "export": {
                        "enabled": false
                    },
                    "dataProvider": newdata
                });


            });
        }

    };
    var chart3 = {
        init:function() {
            var url = $.get("http://www.infra911.com/data.php?Act=data1_3&paramGID="+rememberToken+"&GidList=", function () {
            }).done(function (data) {
                var newdata = $.parseJSON(data.replace(/'/g, '"'));
                [].forEach.call(newdata, function (inst, i) {
                    // Iterate through all the keys
                    [].forEach.call(Object.keys(inst), function (y) {
                        // Check if string is Numerical string
                        if (!isNaN(newdata[i][y]))
                        //Convert to numerical value
                            newdata[i][y] = +newdata[i][y];
                    });

                });
                var chart = AmCharts.makeChart("chart3", {
                    "type": "serial",
                    "theme": "none",
                    "marginRight": 40,
                    "marginLeft": 40,
                    "autoMarginOffset": 20,
                    "mouseWheelZoomEnabled": true,
                    "dataDateFormat": "YYYY-MM-DD",
                    "valueAxes": [{
                        "id": "v1",
                        "axisAlpha": 0,
                        "position": "left",
                        "ignoreAxisWidth": true
                    }],
                    "balloon": {
                        "borderThickness": 1,
                        "shadowAlpha": 0
                    },
                    "graphs": [{
                        "id": "g1",
                        "balloon": {
                            "drop": true,
                            "adjustBorderColor": false,
                            "color": "#ffffff"
                        },
                        "bullet": "round",
                        "bulletBorderAlpha": 1,
                        "bulletColor": "#FFFFFF",
                        "bulletSize": 5,
                        "hideBulletsCount": 50,
                        "lineThickness": 2,
                        "title": "red line",
                        "useLineColorForBulletBorder": true,
                        "valueField": "value",
                        "balloonText": "<span style='font-size:18px;'>[[value]]</span>"
                    }],
                    "chartScrollbar": {
                        "graph": "g1",
                        "oppositeAxis": false,
                        "offset": 30,
                        "scrollbarHeight": 80,
                        "backgroundAlpha": 0,
                        "selectedBackgroundAlpha": 0.1,
                        "selectedBackgroundColor": "#888888",
                        "graphFillAlpha": 0,
                        "graphLineAlpha": 0.5,
                        "selectedGraphFillAlpha": 0,
                        "selectedGraphLineAlpha": 1,
                        "autoGridCount": true,
                        "color": "#AAAAAA",
                        "enabled": false
                    },
                    "chartCursor": {
                        "pan": true,
                        "valueLineEnabled": true,
                        "valueLineBalloonEnabled": true,
                        "cursorAlpha": 1,
                        "cursorColor": "#258cbb",
                        "limitToGraph": "g1",
                        "valueLineAlpha": 0.2,
                        "valueZoomable": true,
                        "enabled": false
                    },
                    "valueScrollbar": {
                        "oppositeAxis": false,
                        "offset": 50,
                        "scrollbarHeight": 10
                    },
                    "categoryField": "polltime",
                    "categoryAxis": {
                        "parseDates": false,
                        "dashLength": 1,
                        "minorGridEnabled": true,
                        "tickLength": 20
                    },
                    "export": {
                        "enabled": false
                    },
                    "dataProvider": newdata
                });
            });

        }
    };
    var chart4 = {
        init:function() {
            var url = $.get("http://www.infra911.com/data.php?Act=data1_4&paramGID="+rememberToken+"&GidList=", function () {
            }).done(function (data) {
                var newdata = $.parseJSON(data.replace(/'/g, '"'));
                [].forEach.call(newdata, function (inst, i) {
                    // Iterate through all the keys
                    [].forEach.call(Object.keys(inst), function (y) {
                        // Check if string is Numerical string
                        if (!isNaN(newdata[i][y]))
                        //Convert to numerical value
                            newdata[i][y] = +newdata[i][y];
                    });

                });
                var chart = AmCharts.makeChart("chart4", {
                    "type": "serial",
                    "theme": "none",
                    "marginRight": 40,
                    "marginLeft": 40,
                    "autoMarginOffset": 20,
                    "mouseWheelZoomEnabled": true,
                    "dataDateFormat": "YYYY-MM-DD",
                    "valueAxes": [{
                        "id": "v1",
                        "axisAlpha": 0,
                        "position": "left",
                        "ignoreAxisWidth": true
                    }],
                    "balloon": {
                        "borderThickness": 1,
                        "shadowAlpha": 0
                    },
                    "graphs": [{
                        "id": "g1",
                        "balloon": {
                            "drop": true,
                            "adjustBorderColor": false,
                            "color": "#ffffff"
                        },
                        "bullet": "round",
                        "bulletBorderAlpha": 1,
                        "bulletColor": "#FFFFFF",
                        "bulletSize": 5,
                        "hideBulletsCount": 50,
                        "lineThickness": 2,
                        "title": "red line",
                        "useLineColorForBulletBorder": true,
                        "valueField": "value",
                        "balloonText": "<span style='font-size:18px;'>[[value]]</span>"
                    }],
                    "chartScrollbar": {
                        "graph": "g1",
                        "oppositeAxis": false,
                        "offset": 30,
                        "scrollbarHeight": 80,
                        "backgroundAlpha": 0,
                        "selectedBackgroundAlpha": 0.1,
                        "selectedBackgroundColor": "#888888",
                        "graphFillAlpha": 0,
                        "graphLineAlpha": 0.5,
                        "selectedGraphFillAlpha": 0,
                        "selectedGraphLineAlpha": 1,
                        "autoGridCount": true,
                        "color": "#AAAAAA",
                        "enabled": false
                    },
                    "chartCursor": {
                        "pan": true,
                        "valueLineEnabled": true,
                        "valueLineBalloonEnabled": true,
                        "cursorAlpha": 1,
                        "cursorColor": "#258cbb",
                        "limitToGraph": "g1",
                        "valueLineAlpha": 0.2,
                        "valueZoomable": true,
                        "enabled": false
                    },
                    "valueScrollbar": {
                        "oppositeAxis": false,
                        "offset": 50,
                        "scrollbarHeight": 10
                    },
                    "categoryField": "polltime",
                    "categoryAxis": {
                        "parseDates": false,
                        "dashLength": 1,
                        "minorGridEnabled": true,
                        "tickLength": 20
                    },
                    "export": {
                        "enabled": false
                    },
                    "dataProvider": newdata
                });
            });

        }
    };
    var chart9 = {
        init:function() {
            /*AmCharts.makeChart("chart9",
                {
                    "type": "serial",
                    "categoryField": "polltime",
                    "autoMarginOffset": 40,
                    "marginRight": 70,
                    "marginTop": 70,
                    "startDuration": 1,
                    "fontSize": 13,
                    "theme": "patterns",
                    "categoryAxis": {
                        "gridPosition": "start"
                    },
                    "trendLines": [],
                    "graphs": [
                        {
                            "balloonText": "[[title]] of [[value1]]:[[value]]",
                            "fillAlphas": 0.9,
                            "id": "AmGraph-1",
                            "title": "graph 1",
                            "type": "column",
                            "valueField": "value1"
                        },
                        {
                            "balloonText": "[[title]] of [[value2]]:[[value]]",
                            "fillAlphas": 0.9,
                            "id": "AmGraph-2",
                            "title": "graph 2",
                            "type": "column",
                            "valueField": "value2"
                        }
                    ],
                    "guides": [],
                    "valueAxes": [
                        {
                            "id": "ValueAxis-1",
                            "title": "Axis title"
                        }
                    ],
                    "allLabels": [],
                    "balloon": {},
                    "titles": [],
                    "dataLoader": {
                        "url": "/dataJsonChart/chart9.json",
                        "format": "json"
                    }
                }
            );*/

        }
    };

    var chart5 = {
        init:function() {
            var url = $.get("http://www.infra911.com/data.php?Act=data1_5&paramGID="+rememberToken+"&GidList=", function () {
            }).done(function (data) {
                var newdata = $.parseJSON(data.replace(/'/g, '"'));
                [].forEach.call(newdata, function (inst, i) {
                    // Iterate through all the keys
                    [].forEach.call(Object.keys(inst), function (y) {
                        // Check if string is Numerical string
                        if (!isNaN(newdata[i][y]))
                        //Convert to numerical value
                            newdata[i][y] = +newdata[i][y];
                    });

                });
                var chart = AmCharts.makeChart("chart5", {
                    "type": "serial",
                    "theme": "light",
                    "marginRight": 70,
                    "dataProvider": newdata,
                    "valueAxes": [{
                        "axisAlpha": 0,
                        "position": "left",
                        "title": ""
                    }],
                    "startDuration": 1,
                    "graphs": [{
                        "balloonText": "<b>[[category]]: [[value]]</b>",
                        "fillColorsField": "color",
                        "fillAlphas": 0.9,
                        "lineAlpha": 0.2,
                        "type": "column",
                        "valueField": "value"
                    }],
                    "chartCursor": {
                        "categoryBalloonEnabled": false,
                        "cursorAlpha": 0,
                        "zoomable": false
                    },
                    "categoryField": "polltime",
                    "categoryAxis": {
                        "gridPosition": "start",
                        "labelRotation": 45
                    },
                    "export": {
                        "enabled": false
                    }

                });
            });
        }
    };
    var chart6 = {
        init:function() {
            var url = $.get("http://www.infra911.com/data.php?Act=data1_6&paramGID="+rememberToken+"&GidList=", function () {
            }).done(function (data) {
                var newdata = $.parseJSON(data.replace(/'/g, '"'));
                [].forEach.call(newdata, function (inst, i) {
                    // Iterate through all the keys
                    [].forEach.call(Object.keys(inst), function (y) {
                        // Check if string is Numerical string
                        if (!isNaN(newdata[i][y]))
                        //Convert to numerical value
                            newdata[i][y] = +newdata[i][y];
                    });

                });
                var chart = AmCharts.makeChart("chart6", {
                    "theme": "none",
                    "type": "serial",
                    "dataProvider": newdata,
                    "valueAxes": [{
                        "stackType": "3d",
                        "unit": "%",
                        "position": "left",
                        "title": "",
                    }],
                    "legend": {
                        "horizontalGap": 10,
                        "maxColumns": 1,
                        "position": "right",
                        "useGraphSettings": true,
                        "markerSize": 10
                    },
                    "startDuration": 1,
                    "graphs": [{
                        "balloonText": "warning [[category]] : <b>[[value]]</b>",
                        "fillAlphas": 0.9,
                        "lineAlpha": 0.2,
                        "title": "warning",
                        "type": "column",
                        "valueField": "warning"
                    }, {
                        "balloonText": "alarm [[category]] : <b>[[value]]</b>",
                        "fillAlphas": 0.9,
                        "lineAlpha": 0.2,
                        "title": "alarm",
                        "type": "column",
                        "valueField": "alarm"
                    }, {
                        "balloonText": "critical [[category]] : <b>[[value]]</b>",
                        "fillAlphas": 0.9,
                        "lineAlpha": 0.2,
                        "title": "critical",
                        "type": "column",
                        "valueField": "critical"
                    }, {
                        "balloonText": "down [[category]]: <b>[[value]]</b>",
                        "fillAlphas": 0.9,
                        "lineAlpha": 0.2,
                        "title": "down",
                        "type": "column",
                        "valueField": "down"
                    }],
                    "plotAreaFillAlphas": 0.1,
                    "depth3D": 20,
                    "angle": 30,
                    "categoryField": "polltime",
                    "categoryAxis": {
                        "gridPosition": "start"
                    },
                    "export": {
                        "enabled": false
                    }
                });
            });
            jQuery('.chart-input').off().on('input change',function() {
                var property	= jQuery(this).data('property');
                var target		= chart;
                chart.startDuration = 0;

                if ( property == 'topRadius') {
                    target = chart.graphs[0];
                    if ( this.value == 0 ) {
                        this.value = undefined;
                    }
                }

                target[property] = this.value;
                chart.validateNow();
            });
        }
    };
    var chart7 = {
        init:function() {
            var url = $.get("http://www.infra911.com/data.php?Act=data1_7&paramGID="+rememberToken+"&GidList=", function () {
            }).done(function (data) {
                var newdata = $.parseJSON(data.replace(/'/g, '"'));
                [].forEach.call(newdata, function (inst, i) {
                    // Iterate through all the keys
                    [].forEach.call(Object.keys(inst), function (y) {
                        // Check if string is Numerical string
                        if (!isNaN(newdata[i][y]))
                        //Convert to numerical value
                            newdata[i][y] = +newdata[i][y];
                    });

                });
                var chart = AmCharts.makeChart("chart7", {
                    "type": "pie",
                    "theme": "none",
                    "titles": [{
                        "text": "",
                        "size": 16
                    }],
                    "legend": {
                        "horizontalGap": 10,
                        "maxColumns": 1,
                        "position": "right",
                        "useGraphSettings": true,
                        "markerSize": 10
                    },
                    "dataProvider": newdata,
                    "valueField": "value",
                    "titleField": "group",
                    "startEffect": "elastic",
                    "startDuration": 2,
                    "labelRadius": 15,
                    "innerRadius": "50%",
                    "depth3D": 10,
                    "balloonText": "[[title]]<br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</span>",
                    "angle": 15,
                    "export": {
                        "enabled": false
                    }
                });
                jQuery(document).ajaxComplete(function () {
                    jQuery("a[title='JavaScript charts']").remove();
                });
            });
        }
    };

    var chart1Packet = {
        init:function() {
            var url = $.get("http://www.infra911.com/pkt_data.php?Act=pkt_dash1_1&prefix=p1", function () {
            }).done(function (data) {
                var newdata = $.parseJSON(data.replace(/'/g, '"'));

                var chart = AmCharts.makeChart("chart1-packet", {
                    "theme": "light",
                    "type": "serial",
                    "startDuration": 2,
                    "dataProvider": newdata,
                    "valueAxes": [{
                        "position": "left",
                        "title": ""
                    }],
                    "graphs": [{
                        "balloonText": "[[category]]: <b>[[value]]</b>",
                        "fillColorsField": "lineColor",
                        "fillAlphas": 1,
                        "lineAlpha": 0.1,
                        "type": "column",
                        "valueField": "value"
                    }],
                    "depth3D": 20,
                    "angle": 30,
                    "chartCursor": {
                        "categoryBalloonEnabled": false,
                        "cursorAlpha": 0,
                        "zoomable": false
                    },
                    "categoryField": "label",
                    "categoryAxis": {
                        "gridPosition": "start",
                        "labelRotation": 90
                    },
                    "export": {
                        "enabled": false
                    }

                });
            });
        }
    };
    var chart2Packet = {
        init:function() {
            var url = $.get("http://www.infra911.com/pkt_data.php?Act=pkt_dash2_1&prefix=p2", function () {
            }).done(function (data) {
                var newdata = $.parseJSON(data.replace(/'/g, '"'));

                var chart = AmCharts.makeChart("chart2-packet", {
                    "theme": "light",
                    "type": "serial",
                    "startDuration": 2,
                    "dataProvider": newdata,
                    "valueAxes": [{
                        "position": "left",
                        "title": ""
                    }],
                    "graphs": [{
                        "balloonText": "[[category]]: <b>[[value]]</b>",
                        "fillColorsField": "lineColor",
                        "fillAlphas": 1,
                        "lineAlpha": 0.1,
                        "type": "column",
                        "valueField": "value"
                    }],
                    "depth3D": 20,
                    "angle": 30,
                    "chartCursor": {
                        "categoryBalloonEnabled": false,
                        "cursorAlpha": 0,
                        "zoomable": false
                    },
                    "categoryField": "label",
                    "categoryAxis": {
                        "gridPosition": "start",
                        "labelRotation": 90
                    },
                    "export": {
                        "enabled": false
                    }

                });
            });
        }
    };
    var chart3Packet = {
        init:function() {
            var url = $.get("http://www.infra911.com/pkt_data.php?Act=pkt_dash3_1&prefix=p3", function () {
            }).done(function (data) {
                var newdata = $.parseJSON(data.replace(/'/g, '"'));

                var chart = AmCharts.makeChart("chart3-packet", {
                    "theme": "light",
                    "type": "serial",
                    "startDuration": 2,
                    "dataProvider": newdata,
                    "valueAxes": [{
                        "position": "left",
                        "title": ""
                    }],
                    "graphs": [{
                        "balloonText": "[[category]]: <b>[[value]]</b>",
                        "fillColorsField": "lineColor",
                        "fillAlphas": 1,
                        "lineAlpha": 0.1,
                        "type": "column",
                        "valueField": "value"
                    }],
                    "depth3D": 20,
                    "angle": 30,
                    "chartCursor": {
                        "categoryBalloonEnabled": false,
                        "cursorAlpha": 0,
                        "zoomable": false
                    },
                    "categoryField": "label",
                    "categoryAxis": {
                        "gridPosition": "start",
                        "labelRotation": 90
                    },
                    "export": {
                        "enabled": false
                    }

                });
            });
        }
    };
    var chart4Packet = {
        init:function() {
            var url = $.get("http://www.infra911.com/pkt_data.php?Act=pkt_dash4_1&prefix=p4", function () {
            }).done(function (data) {
                var newdata = $.parseJSON(data.replace(/'/g, '"'));

                var chart = AmCharts.makeChart("chart4-packet", {
                    "theme": "light",
                    "type": "serial",
                    "startDuration": 2,
                    "dataProvider": newdata,
                    "valueAxes": [{
                        "position": "left",
                        "title": ""
                    }],
                    "graphs": [{
                        "balloonText": "[[category]]: <b>[[value]]</b>",
                        "fillColorsField": "lineColor",
                        "fillAlphas": 1,
                        "lineAlpha": 0.1,
                        "type": "column",
                        "valueField": "value"
                    }],
                    "depth3D": 20,
                    "angle": 30,
                    "chartCursor": {
                        "categoryBalloonEnabled": false,
                        "cursorAlpha": 0,
                        "zoomable": false
                    },
                    "categoryField": "label",
                    "categoryAxis": {
                        "gridPosition": "start",
                        "labelRotation": 90
                    },
                    "export": {
                        "enabled": false
                    }

                });
            });
        }
    };
    var chart5Packet = {
        init:function() {
            var url = $.get("http://www.infra911.com/pkt_data.php?Act=pkt_dash5_1&prefix=p5", function () {
            }).done(function (data) {
                var newdata = $.parseJSON(data.replace(/'/g, '"'));

                var chart = AmCharts.makeChart("chart5-packet", {
                    "theme": "light",
                    "type": "serial",
                    "startDuration": 2,
                    "dataProvider": newdata,
                    "valueAxes": [{
                        "position": "left",
                        "title": ""
                    }],
                    "graphs": [{
                        "balloonText": "[[category]]: <b>[[value]]</b>",
                        "fillColorsField": "color",
                        "fillAlphas": 1,
                        "lineAlpha": 0.1,
                        "type": "column",
                        "valueField": "value1"
                    },{
                        "balloonText": "[[category]]: <b>[[value]]</b>",
                        "fillColorsField": "color",
                        "fillAlphas": 1,
                        "lineAlpha": 0.1,
                        "type": "column",
                        "valueField": "value2"
                    }],
                    "depth3D": 20,
                    "angle": 30,
                    "chartCursor": {
                        "categoryBalloonEnabled": false,
                        "cursorAlpha": 0,
                        "zoomable": false
                    },
                    "categoryField": "label",
                    "categoryAxis": {
                        "gridPosition": "start",
                        "labelRotation": 90
                    },
                    "export": {
                        "enabled": false
                    }

                });
            });
        }
    };
    var chart6Packet = {
        init:function() {
            var url = $.get("http://www.infra911.com/pkt_data.php?Act=pkt_dash6_1&prefix=p6", function () {
            }).done(function (data) {
                var newdata = $.parseJSON(data.replace(/'/g, '"'));

                var chart = AmCharts.makeChart("chart6-packet", {
                    "theme": "light",
                    "type": "serial",
                    "startDuration": 2,
                    "dataProvider": newdata,
                    "valueAxes": [{
                        "position": "left",
                        "title": ""
                    }],
                    "graphs": [{
                        "balloonText": "[[category]]: <b>[[value]]</b>",
                        "fillColorsField": "lineColor",
                        "fillAlphas": 1,
                        "lineAlpha": 0.1,
                        "type": "column",
                        "valueField": "value"
                    }],
                    "depth3D": 20,
                    "angle": 30,
                    "chartCursor": {
                        "categoryBalloonEnabled": false,
                        "cursorAlpha": 0,
                        "zoomable": false
                    },
                    "categoryField": "label",
                    "categoryAxis": {
                        "gridPosition": "start",
                        "labelRotation": 90
                    },
                    "export": {
                        "enabled": false
                    }

                });
            });
        }
    };

    $(document).ready(function () {
        chart1.init();
        chart2.init();
        chart3.init();
        chart4.init();
        chart5.init();
        chart6.init();
        chart7.init();
        chart1Packet.init();
        chart2Packet.init();
        chart3Packet.init();
        chart4Packet.init();
        chart5Packet.init();
        chart6Packet.init();
        //chart7Packet.init();
        setInterval(function(){
            chart1.init();
            chart2.init();
            chart3.init();
            chart4.init();
            chart5.init();
            chart6.init();
            chart7.init();
            chart1Packet.init();
            chart2Packet.init();
            chart3Packet.init();
            chart4Packet.init();
            chart5Packet.init();
            chart6Packet.init();
            //chart7Packet.init();
        }, 60000);
    });
})(jQuery, window, document);