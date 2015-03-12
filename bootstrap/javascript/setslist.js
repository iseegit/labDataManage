var map;

function callback(points){
	var temp = null;
	for (var index in points){
		temp = points[index];
		if (temp.error != 0 ){continue;}
		var point = new BMap.Point(temp.x,temp.y);
		var marker = new BMap.Marker(point);
		map.addOverlay(marker);
		map.setCenter(point);
	} 
}

function map_init(){

	map = new BMap.Map("allEqp_map");          // 创建地图实例  
	map.addControl(new BMap.ScaleControl({anchor: BMAP_ANCHOR_TOP_LEFT})); 
	map.addControl(new BMap.NavigationControl());            
	map.addControl(new BMap.NavigationControl({anchor: BMAP_ANCHOR_TOP_RIGHT, type: BMAP_NAVIGATION_CONTROL_SMALL})); 
	map.centerAndZoom(new BMap.Point(116.404, 39.915), 5);
	
	var gpsPoint = [new BMap.Point(116.9187,28.9423),
					new BMap.Point(117.9187,29.9423),
					new BMap.Point(116.9187,27.9423),
					new BMap.Point(115.9187,30.9423),
					new BMap.Point(114.9187,26.9423),
					new BMap.Point(113.9187,31.9423)
					];
					
			
	var markers=[];
	
	setTimeout(function(){
		BMap.Convertor.transMore(gpsPoint,0,callback);     //真实经纬度转成百度坐标
	},1000);
}

$(document).ready(function(){
	$('#dataTables-example').dataTable();
    
	function loadJScript() {
		var script0 = document.createElement("script");
		script0.type = "text/javascript";
		script0.src = "http://api.map.baidu.com/api?v=1.5&ak=09a12fee552d5ad4aa2de5c0626c9c10&callback=map_init";
		
		var script1 = document.createElement("script");
		script1.type = "text/javascript";
		script1.src = "http://developer.baidu.com/map/jsdemo/demo/changeMore.js";
		
		document.body.appendChild(script1);
		document.body.appendChild(script0);
	}
    //chart
    
    var d0 = [[1196463600000, 0], [1196550000000, 10], [1196636400000, 12], [1196722800000, 17], [1196809200000, 36], [1196895600000, 37], [1196982000000, 37], [1197068400000, 86], [1197154800000, 86], [1197241200000, 120], [1197327600000, 165], [1197414000000, 165], [1197500400000, 165], [1197586800000, 165], [1197673200000, 165], [1197759600000, 165], [1197846000000, 275], [1197932400000, 481], [1198018800000, 481], [1198105200000, 481], [1198191600000, 481], [1198278000000, 481], [1198364400000, 481], [1198450800000, 686], [1198537200000, 686], [1198623600000, 686], [1198710000000, 686], [1198796400000, 686], [1198882800000, 686], [1198969200000, 686]];
    var d1 = [[1196463600000, 0], [1196550000000, 7], [1196636400000, 10], [1196722800000, 17], [1196809200000, 36], [1196895600000, 35], [1196982000000, 27], [1197068400000, 85], [1197154800000, 86], [1197241200000, 120], [1197327600000, 159], [1197414000000, 147], [1197500400000, 147], [1197586800000, 165], [1197673200000, 164], [1197759600000, 153], [1197846000000, 275], [1197932400000, 480], [1198018800000, 410], [1198105200000, 466], [1198191600000, 465], [1198278000000, 334], [1198364400000, 352], [1198450800000, 520], [1198537200000, 590], [1198623600000, 649], [1198710000000, 681], [1198796400000, 592], [1198882800000, 682], [1198969200000, 608]];
    var d2 = [[1196463600000, 0], [1196550000000, 7], [1196636400000, 8], [1196722800000, 9], [1196809200000, 33], [1196895600000, 35], [1196982000000, 27], [1197068400000, 80], [1197154800000, 67], [1197241200000, 120], [1197327600000, 150], [1197414000000, 140], [1197500400000, 140], [1197586800000, 160], [1197673200000, 143], [1197759600000, 130], [1197846000000, 157], [1197932400000, 458], [1198018800000, 359], [1198105200000, 408], [1198191600000, 454], [1198278000000, 313], [1198364400000, 335], [1198450800000, 468], [1198537200000, 270], [1198623600000, 644], [1198710000000, 568], [1198796400000, 562], [1198882800000, 582], [1198969200000, 508]];
    
   /* 
    var d0 = [[1, 0], [2, 10], [3, 12], [4, 17], [5, 36], [6, 37], [7, 37], [8, 86], [9, 86], [10, 120], [11, 165], [12, 165], [13, 165], [14, 165], [15, 165], [16, 165], [17, 275], [18, 481], [19, 481], [20, 481], [21, 481], [22, 481], [23, 481], [24, 686], [25, 686], [26, 686], [27, 686], [28, 686], [29, 686], [30, 686]];
    var d1 = [[1, 0], [2, 7], [3, 10], [4, 17], [5, 36], [6, 35], [7, 27], [8, 85], [9, 86], [10, 120], [11, 159], [12, 147], [13, 147], [14, 165], [15, 164], [16, 153], [17, 275], [18, 480], [19, 410], [20, 466], [21, 465], [22, 334], [23, 352], [24, 520], [25, 590], [26, 649], [27, 681], [28, 592], [29, 682], [30, 608]];
    var d2 = [[1, 0], [2, 7], [3, 8], [4, 9], [5, 33], [6, 35], [7, 27], [8, 80], [9, 67], [10, 120], [11, 150], [12, 140], [13, 140], [14, 160], [15, 143], [16, 130], [17, 157], [18, 458], [19, 359], [20, 408], [21, 454], [22, 313], [23, 335], [24, 468], [25, 270], [26, 644], [27, 568], [28, 562], [29, 582], [30, 508]];
   */
    var options = {
        xaxis: {
            mode: "time",
            timeformat:"2013/%m/%d",//"%Y/%m/%d",
            tickLength: 5
        },
        yaxis: {
            tickFormatter: function suffixFormatter(val, axis) {return val+"小时";}
        },
        grid: {
            hoverable: true,
            autoHighlight: false,
            margin:0,
            clickable:true
        },
        legend: {
            position: "nw"
        },
        selection: {
            mode: "x"
        }
    };
    
    var plot = $.plot("#effect-bar-chart", [
    {
        data:d0,
        label:"设备在线总时间= 0",
        bars: {
            show:true,
            barWidth: 21600000,
            //barWidth: 0.1,
            order: 1,
            lineWidth: 1,
            fill:0.6
        }
    },
    {
        data:d1,
        label:"设备运行总时间= 0",
        bars: {
            show:true,
            barWidth: 21600000,
            //barWidth: 0.1,
            order: 2,
            lineWidth: 1,
            fill:0.6
        }
    }
    ], options);

    var overview = $.plot("#overview-effect", [d0,d1], {
        series: {
            lines: {
                show: true,
                lineWidth: 1,
                fill:0.5
            },
        },
        grid:{
            margin:0
            //backgroundColor: { colors: ["#fff", "#999"] }
        },
        legend:{
            show:true
        },
        xaxis: {
            ticks: [],
            mode: "time",
            timeformat:"2013/%m/%d"//"%Y/%m/%d",
        },
        yaxis: {
            ticks: [],
            min: 0,
            autoscaleMargin: 0.1
        },
        selection: {
            mode: "x"
        }
    });

    $("#effect-bar-chart").bind("plotselected", function (event, ranges) {

        if (ranges.xaxis.from < d0[0][0] + 8 * 60 * 60 * 1000){
            ranges.xaxis.from = d0[0][0] - 8 * 60 * 60 * 1000;
        }
        if (ranges.xaxis.to < ranges.xaxis.from + 8 * 24 * 60 * 60 * 1000){
            ranges.xaxis.to = ranges.xaxis.from + 8 * 24 * 60 * 60 * 1000;
        }
        if (ranges.xaxis.to > d0[d0.length-1][0] + 24 * 60 * 60 * 1000){
            ranges.xaxis.to = d0[d0.length-1][0] + 24 * 60 * 60 * 1000;
            if(ranges.xaxis.to < ranges.xaxis.from + 8 * 24 * 60 * 60 * 1000){
                ranges.xaxis.from = ranges.xaxis.to - 8 * 24 * 60 * 60 * 1000;
            }
        }
        // do the zooming
        $.each(plot.getXAxes(), function(_, axis) {
            var opts = axis.options;
            opts.min = ranges.xaxis.from;
            opts.max = ranges.xaxis.to;
        });
        plot.setupGrid();
        plot.draw();
        plot.clearSelection();

        // don't fire event on the overview to prevent eternal loop

        $("#effect-fullrange").attr("disabled",false);
        overview.setSelection(ranges, true);
    });

    $("#overview-effect").bind("plotselected", function (event, ranges) {
        plot.setSelection(ranges);
    });
    
    $("#effect-fullrange").on("click",function(){
        $("#effect-fullrange").attr("disabled",true);
        $.each(plot.getXAxes(), function(_, axis) {
            var opts = axis.options;
            opts.min = d0[0][0] - 12 * 60 * 60 * 1000;
            opts.max = d0[d0.length-1][0] + 12 * 60 * 60 * 1000;
        });
        
        overview.setSelection(false,false);
        plot.setupGrid();
        plot.draw();
        plot.clearSelection();
    });
    
    
    
    
    
    //run error
    var e0 = [[1196463600000, 0], [1196550000000, 0], [1196636400000, 0], [1196722800000, 0], [1196809200000, 2], [1196895600000, 5], [1196982000000, 0], [1197068400000, 8], [1197154800000, 0], [1197241200000, 9], [1197327600000, 1], [1197414000000, 4]]; 
    var e1 = [[1196463600000, 0], [1196550000000, 0], [1196636400000, 1], [1196722800000, 0], [1196809200000, 0], [1196895600000, 1], [1196982000000, 3], [1197068400000, 2], [1197154800000, 5], [1197241200000, 12], [1197327600000, 13], [1197414000000, 1]];
    var e2 = [[1196463600000, 0], [1196550000000, 0], [1196636400000, 2], [1196722800000, 0], [1196809200000, 0], [1196895600000, 2], [1196982000000, 0], [1197068400000, 2], [1197154800000, 7], [1197241200000, 8], [1197327600000, 5], [1197414000000, 6]];
    var e3 = [[1196463600000, 0], [1196550000000, 0], [1196636400000, 0], [1196722800000, 1], [1196809200000, 1], [1196895600000, 0], [1196982000000, 0], [1197068400000, 1], [1197154800000, 1], [1197241200000, 1], [1197327600000, 8], [1197414000000, 9]];
    var e4 = [[1196463600000, 0], [1196550000000, 1], [1196636400000, 0], [1196722800000, 0], [1196809200000, 5], [1196895600000, 6], [1196982000000, 1], [1197068400000, 0], [1197154800000, 2], [1197241200000, 15], [1197327600000, 20], [1197414000000, 16]];
    var e5 = [[1196463600000, 0], [1196550000000, 0], [1196636400000, 0], [1196722800000, 0], [1196809200000, 0], [1196895600000, 9], [1196982000000, 6], [1197068400000, 2], [1197154800000, 1], [1197241200000, 0], [1197327600000, 2], [1197414000000, 3]];   

    $.plot("#error-pie-chart", [
    {label:"保养期已过",data:10},//,color:"#095791"},
    {label:"保养期剩余24小时以内",data:12},//,color:"#0B62A4"},
    {label:"保养期剩余7天以内",data:10},//,color:"#3980B5"},
    
    {label:"保养期剩余1个月以内",data:100},//,color:"#679DC6"},
    {label:"保养期剩余2个月以内",data:50},//,color:"#95BBD7"},
    {label:"保养期剩余2个月以上",data:50}//,color:"#B0CCE1"}
    ], 
    {
        series: {
            pie: { 
                show: true,
                //innerRadius: 0.3,
                radius:0.9,
                label: {
                    show: false
                }
            }
        },
        grid: {
            hoverable: true,
            clickable: true
        },
        legend: {
            show:false
        }
    });
    var options_error = {
        series: {
            bars: {
                show:true,
                barWidth: 10800000,
                //barWidth: 0.1,
                order: 2,
                lineWidth: 1,
                fill:0.6
            }
        },
        xaxis: {
            mode: "time",
            timeformat:"2013/%m/%d",//"%Y/%m/%d",
            tickLength: 5
        },
        yaxis: {
            tickFormatter: function suffixFormatter(val, axis) {return val+"次";}
        },
        grid: {
            hoverable: true,
            autoHighlight: false,
            margin:0,
            clickable:true
        },
        legend: {
            position: "nw"
        }/*,
        selection: {
            mode: "x"
        }*/
    };
    
    var plot_error = $.plot("#error-bar-chart", [
    {
        data:e0,
        label:"故障0次数",
    },
    {
        data:e1,
        label:"故障1次数",
    },
    {
        data:e2,
        label:"故障2次数",
    },
    {
        data:e3,
        label:"故障3次数",
    },
    {
        data:e4,
        label:"故障4次数",
    }
    ], options_error);
    
    
    
    
    
    
    
    
    
    //error rate
    var er0 = [[1196463600000, 0], [1196550000000, 0], [1196636400000, 0], [1196722800000, 0], [1196809200000, 2], [1196895600000, 5], [1196982000000, 0], [1197068400000, 8], [1197154800000, 0], [1197241200000, 9], [1197327600000, 1], [1197414000000, 4]]; 
    var er1 = [[1196463600000, 0], [1196550000000, 0], [1196636400000, 1], [1196722800000, 0], [1196809200000, 0], [1196895600000, 1], [1196982000000, 3], [1197068400000, 2], [1197154800000, 5], [1197241200000, 12], [1197327600000, 13], [1197414000000, 1]];
    var er2 = [[1196463600000, 0], [1196550000000, 0], [1196636400000, 2], [1196722800000, 0], [1196809200000, 0], [1196895600000, 2], [1196982000000, 0], [1197068400000, 2], [1197154800000, 7], [1197241200000, 8], [1197327600000, 5], [1197414000000, 6]];
    var er3 = [[1196463600000, 0], [1196550000000, 0], [1196636400000, 0], [1196722800000, 1], [1196809200000, 1], [1196895600000, 0], [1196982000000, 0], [1197068400000, 1], [1197154800000, 1], [1197241200000, 1], [1197327600000, 8], [1197414000000, 9]];
    var er4 = [[1196463600000, 0], [1196550000000, 1], [1196636400000, 0], [1196722800000, 0], [1196809200000, 5], [1196895600000, 6], [1196982000000, 1], [1197068400000, 0], [1197154800000, 2], [1197241200000, 8], [1197327600000, 10], [1197414000000, 13]];
    var er5 = [[1196463600000, 0], [1196550000000, 0], [1196636400000, 0], [1196722800000, 0], [1196809200000, 0], [1196895600000, 9], [1196982000000, 6], [1197068400000, 2], [1197154800000, 1], [1197241200000, 0], [1197327600000, 2], [1197414000000, 3]];   

    var er = [[10,4],[9,3],[6,2],[3,1],[1,0]];
    
    $.plot("#rate-pie-chart", [er], 
    {
        series: {
            bars: { 
                show: true,
                align:"left",
                barWidth:0.4,
                horizontal:true,
                width:1,
                label: {
                    show: false
                }
            }
        },
        grid: {
            show: true
        },
        xaxis: {
            tickFormatter: function suffixFormatter(val, axis) {return val+"%";},
            tickLength:2,
            position: "top"
        },
        yaxis: {
            show:true,
            tickLength:2,
            ticks:[[0,"故障4发生概率"],[1,"故障3发生概率"],[2,"故障2发生概率"],[3,"故障1发生概率"],[4,"故障0发生概率"]]
        },
        legend: {
            show:false,
            sorted:"ascending"
        }
    });
    var error_rate = $.plot("#rate-line-chart",[
    {
        data:er0,
        label:"故障0概率",
    },
    {
        data:er1,
        label:"故障1概率",
    },
    {
        data:er2,
        label:"故障2概率",
    },
    {
        data:er3,
        label:"故障3概率",
    },
    {
        data:er4,
        label:"故障4概率",
    }
    ],{
        series: {
            lines: {
                show: true,
                lineWidth: 1
            },
            points: {
                show: true
            }
        },
        xaxis: {
            mode: "time",
            timeformat:"2013/%m/%d",//"%Y/%m/%d",
            tickLength: 5
        },
        yaxis: {
            tickFormatter: function suffixFormatter(val, axis) {return val+"%";}
        },
        grid: {
            hoverable: true,
            autoHighlight: false,
            margin:0,
            clickable:true
        },
        legend: {
            position: "nw"
        }
    });
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    //set error
    var eqpr0 = [[1196463600000, 0], [1196550000000, 10], [1196636400000, 12], [1196722800000, 17], [1196809200000, 36], [1196895600000, 37], [1196982000000, 37], [1197068400000, 86], [1197154800000, 86], [1197241200000, 120], [1197327600000, 165], [1197414000000, 165], [1197500400000, 165], [1197586800000, 165], [1197673200000, 165], [1197759600000, 165], [1197846000000, 275], [1197932400000, 481], [1198018800000, 481], [1198105200000, 481], [1198191600000, 481], [1198278000000, 481], [1198364400000, 481], [1198450800000, 686], [1198537200000, 686], [1198623600000, 686], [1198710000000, 686], [1198796400000, 686], [1198882800000, 686], [1198969200000, 686]];
    var eqpr1 = [[1196463600000, 0], [1196550000000, 0], [1196636400000, 1], [1196722800000, 0], [1196809200000, 0], [1196895600000, 1], [1196982000000, 3], [1197068400000, 2], [1197154800000, 5], [1197241200000, 12], [1197327600000, 13], [1197414000000, 1], [1197500400000, 6], [1197586800000, 12], [1197673200000, 5], [1197759600000, 4], [1197846000000, 5], [1197932400000, 12], [1198018800000, 21], [1198105200000, 18], [1198191600000, 15], [1198278000000, 11], [1198364400000, 15], [1198450800000, 12], [1198537200000, 11], [1198623600000, 19], [1198710000000, 21], [1198796400000, 23], [1198882800000, 25], [1198969200000, 18]];
    var eqpr2 = [[1196463600000, 0], [1196550000000, 0], [1196636400000, 2], [1196722800000, 0], [1196809200000, 0], [1196895600000, 2], [1196982000000, 0], [1197068400000, 2], [1197154800000, 7], [1197241200000, 8], [1197327600000, 5], [1197414000000, 6], [1197500400000, 165], [1197586800000, 165], [1197673200000, 165], [1197759600000, 165], [1197846000000, 275], [1197932400000, 481], [1198018800000, 481], [1198105200000, 481], [1198191600000, 481], [1198278000000, 481], [1198364400000, 481], [1198450800000, 686], [1198537200000, 686], [1198623600000, 686], [1198710000000, 686], [1198796400000, 686], [1198882800000, 686], [1198969200000, 686]];

    for (i = 0; i < eqpr0.length; i++){
        eqpr2[i][0] = eqpr0[i][0];
        eqpr2[i][1] = eqpr1[i][1]/eqpr0[i][1];
        eqpr2[i][1] = eqpr2[i][1]*100;
        eqpr2[i][1] = eqpr2[i][1].toFixed(2);
    }
    
    var options_eqperror = {
        xaxis: {
            mode: "time",
            timeformat:"2013/%m/%d",//"%Y/%m/%d",
            tickLength: 5
        },
        yaxes: [ { 
                    min: 0 ,
                    tickFormatter: function suffixFormatter(val, axis) {return val+"台";}
                }, {
                    // align if we are to the right
                    position: "right",
                    tickFormatter: function suffixFormatter(val, axis) {return val+"%";}
				} ],
        grid: {
            hoverable: true,
            autoHighlight: false,
            margin:0,
            clickable:true
        },
        legend: {
            position: "nw"
        }
    };
    
    $.plot("#eqp-bar-chart", [
    {
        data:eqpr0,
        label:"设备总数",
        bars: {
            show:true,
            barWidth: 21600000,
            //barWidth: 0.1,
            order: 1,
            lineWidth: 1,
            fill:0.6
        }
    },
    {
        data:eqpr1,
        label:"发射故障设备数",
        bars: {
            show:true,
            barWidth: 21600000,
            //barWidth: 0.1,
            order: 2,
            lineWidth: 1,
            fill:0.6
        }
    },
    {
        data:eqpr2,
        label:"设备发生故障概率",
        lines: {
            show:true,
            order: 2,
            lineWidth: 1
        },
        points: {
            show: true
        },
        yaxis: 2
    }
    ], options_eqperror);
    

    
    
    
    
    
    
    
    
    //set error
    var m0 = [];//[0, 0], [1, 10], [2, 12], [3, 17], [4, 36], [5, 37], [6, 37], [7, 86], [8, 86], [9, 120], [10, 165], [11, 165], [12, 165], [13, 165], [14, 165], [15, 165], [16, 275], [17, 481], [18, 481], [19, 481], [20, 481], [21, 481], [22, 481], [23, 686], [24, 686], [25, 686], [26, 686], [27, 686], [28, 686], [29, 686]];
    var m1 = [];//[0, 0], [1, 10], [2, 12], [3, 17], [4, 36], [5, 37], [6, 37], [7, 86], [8, 86], [9, 120], [10, 165], [11, 165], [12, 165], [13, 165], [14, 165], [15, 165], [16, 275], [17, 481], [18, 481], [19, 481], [20, 481], [21, 481], [22, 481], [23, 686], [24, 686], [25, 686], [26, 686], [27, 686], [28, 686], [29, 686]];
    var m2 = [];//[0, 0], [1, 10], [2, 12], [3, 17], [4, 36], [5, 37], [6, 37], [7, 86], [8, 86], [9, 120], [10, 165], [11, 165], [12, 165], [13, 165], [14, 165], [15, 165], [16, 275], [17, 481], [18, 481], [19, 481], [20, 481], [21, 481], [22, 481], [23, 686], [24, 686], [25, 686], [26, 686], [27, 686], [28, 686], [29, 686]];
    var m3 = [];//[0, 0], [1, 10], [2, 12], [3, 17], [4, 36], [5, 37], [6, 37], [7, 86], [8, 86], [9, 120], [10, 165], [11, 165], [12, 165], [13, 165], [14, 165], [15, 165], [16, 275], [17, 481], [18, 481], [19, 481], [20, 481], [21, 481], [22, 481], [23, 686], [24, 686], [25, 686], [26, 686], [27, 686], [28, 686], [29, 686]];
    var m4 = [];//[0, 0], [1, 10], [2, 12], [3, 17], [4, 36], [5, 37], [6, 37], [7, 86], [8, 86], [9, 120], [10, 165], [11, 165], [12, 165], [13, 165], [14, 165], [15, 165], [16, 275], [17, 481], [18, 481], [19, 481], [20, 481], [21, 481], [22, 481], [23, 686], [24, 686], [25, 686], [26, 686], [27, 686], [28, 686], [29, 686]];

    for (var i = 0; i <= 2000; i += 1) {
        m0.push([i, parseInt(Math.random() * 30)]);
        m1.push([i, parseInt(Math.random() * 30)]);
        m2.push([i, parseInt(Math.random() * 30)]);
        m3.push([i, parseInt(Math.random() * 30)]);
        m4.push([i, parseInt(Math.random() * 30)]);
    }
        
    var maintain_plot = $.plot("#maintain-stack-chart", [ 
    {
        data:m0,
        label:"空滤器保养"
    },
    {
        data:m1,
        label:"油滤器保养"
    },
    {
        data:m2,
        label:"油分器保养"
    },
    {
        data:m3,
        label:"润滑油保养"
    },
    {
        data:m4,
        label:"润滑脂保养"
    }
    ], {
        series: {
            stack: true,
            bars: {
                show:true,
                barWidth: 0.3,
                lineWidth: 1,
                fill:0.6
            }
        },
        xaxis: {
            //mode: "time",
            //timeformat:"%Y/%m/%d",
            tickFormatter: function suffixFormatter(val, axis) {return val+"小时";},
            tickLength: 5
        },
        yaxis: {
            tickFormatter: function suffixFormatter(val, axis) {return val+"台";}
        },
        legend: {
            position: "nw"
        },
        selection: {
            mode: "x"
        }
    });
    
    var overview_maintain = $.plot("#overview-maintain", [m0,m1,m2,m3,m4], {
        series: {
            stack: true,
            bars: {
                show:true,
                barWidth: 0.3,
                lineWidth: 1,
                fill:0.6
            }
        },
        grid:{
            margin:0
            //backgroundColor: { colors: ["#fff", "#999"] }
        },
        legend:{
            show:true
        },
        xaxis: {
            ticks: [],
            mode: "time",
            timeformat:"2013/%m/%d"//"%Y/%m/%d",
        },
        yaxis: {
            ticks: [],
            min: 0,
            autoscaleMargin: 0.1
        },
        selection: {
            mode: "x"
        }
    });

    $("#maintain-stack-chart").bind("plotselected", function (event, ranges) {

        if (ranges.xaxis.to < ranges.xaxis.from + 10){
            ranges.xaxis.to = ranges.xaxis.from + 10;
        }
        if (ranges.xaxis.to > m0[m0.length-1][0]){
            ranges.xaxis.to = m0[m0.length-1][0] + 1;
            if (ranges.xaxis.to < ranges.xaxis.from + 10){
                ranges.xaxis.from = ranges.xaxis.to - 10;
            }
        }
        // do the zooming
        $.each(maintain_plot.getXAxes(), function(_, axis) {
            var opts = axis.options;
            opts.min = ranges.xaxis.from;
            opts.max = ranges.xaxis.to;
        });
        maintain_plot.setupGrid();
        maintain_plot.draw();
        maintain_plot.clearSelection();

        // don't fire event on the overview to prevent eternal loop

        $("#maintain-fullrange").attr("disabled",false);
        overview_maintain.setSelection(ranges, true);
    });

    $("#overview-maintain").bind("plotselected", function (event, ranges) {
        maintain_plot.setSelection(ranges);
    });
    
    $("#maintain-fullrange").on("click",function(){
        $("#maintain-fullrange").attr("disabled",true);
        $.each(maintain_plot.getXAxes(), function(_, axis) {
            var opts = axis.options;
            opts.min = m0[0][0];
            opts.max = m0[m0.length-1][0]+1;
        });
        
        overview_maintain.setSelection(false,false);
        maintain_plot.setupGrid();
        maintain_plot.draw();
        maintain_plot.clearSelection();
    });
   
    
    
    
    
    
    
    
    
    
    
    
    loadJScript();
    // Add the Flot version string to the footer

    $("#footer").prepend("Flot " + $.plot.version + " &ndash; ");
})


