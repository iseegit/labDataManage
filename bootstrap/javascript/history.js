//var base_url="http://210.32.159.42/cim/";
var base_url="http://10.13.71.176/cim/";
$(document).ready(function(){
    
	$("#cv_id_select").select2();
	$("#cv_id_select").select2_set_alertstr("设备不存在！");
	
	var overview = [];
	var plot_lines = [];
	
	var d0 = [[1196463600000, 10], [1196550000000, 10], [1196636400000, 12], [1196722800000, 17], [1196809200000, 16], [1196895600000, 17], [1196982000000, 17], [1197068400000, 16], [1197154800000, 16], [1197241200000, 12], [1197327600000, 15], [1197414000000, 16], [1197500400000, 15], [1197586800000, 15], [1197673200000, 16], [1197759600000, 15], [1197846000000, 15], [1197932400000, 18], [1198018800000, 11], [1198105200000, 11], [1198191600000, 16], [1198278000000, 18], [1198364400000, 18], [1198450800000, 18], [1198537200000, 16], [1198623600000, 18], [1198710000000, 18], [1198796400000, 18], [1198882800000, 18], [1198969200000, 18]];
    var d1 = [[1196463600000, 5], [1196550000000, 7], [1196636400000, 10], [1196722800000, 17], [1196809200000, 16], [1196895600000, 15], [1196982000000, 17], [1197068400000, 15], [1197154800000, 16], [1197241200000, 10], [1197327600000, 15], [1197414000000, 14], [1197500400000, 14], [1197586800000, 15], [1197673200000, 16], [1197759600000, 13], [1197846000000, 15], [1197932400000, 18], [1198018800000, 11], [1198105200000, 6], [1198191600000, 15], [1198278000000, 13], [1198364400000, 15], [1198450800000, 10], [1198537200000, 10], [1198623600000, 16], [1198710000000, 18], [1198796400000, 9], [1198882800000, 12], [1198969200000, 10]];
    var d2 = [[1196463600000, 0], [1196550000000, 7], [1196636400000, 8], [1196722800000, 9], [1196809200000, 33], [1196895600000, 35], [1196982000000, 27], [1197068400000, 80], [1197154800000, 7], [1197241200000, 10], [1197327600000, 15], [1197414000000, 14], [1197500400000, 14], [1197586800000, 10], [1197673200000, 13], [1197759600000, 10], [1197846000000, 15], [1197932400000, 48], [1198018800000, 35], [1198105200000, 40], [1198191600000, 44], [1198278000000, 33], [1198364400000, 35], [1198450800000, 46], [1198537200000, 20], [1198623600000, 64], [1198710000000, 56], [1198796400000, 56], [1198882800000, 58], [1198969200000, 50]];
 
	for (var i=0;i<d0.length;i++){
		d0[i][1]=1200+500*Math.random();
	}
    var options = {
		series: {
			lines: {
				show: true
			}
		},
        xaxis: {
            mode: "time",
            timeformat:"2013/%m/%d",//"%Y/%m/%d",
            tickLength: 5
        },
        yaxis: {
            tickFormatter: function suffixFormatter(val, axis) {return val+"rpm";}
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
	
	//speed
	options['grid']['show'] = false;
	options['series']['lines']['fill'] = 0.6;
    overview['speed'] = $.plot("#overview-speed", [d0], {
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
	options['grid']['show'] = true;
	options['series']['lines']['fill'] = null;
    plot_lines['speed'] = $.plot("#speed-line-chart", [d0], options);
	
	for (var i=0;i<d0.length;i++){
		d0[i][1]=200+100*Math.random();
	}
	//voltage
	options['grid']['show'] = false;
	options['series']['lines']['fill'] = 0.6;
	options['yaxis']['tickFormatter'] = function suffixFormatter(val, axis) {return val+"V";};
    overview['voltage'] = $.plot("#overview-voltage", [d1], {
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
	
	
	options['grid']['show'] = true;
	options['series']['lines']['fill'] = null;
    plot_lines['voltage'] = $.plot("#voltage-line-chart", [d0], options);
	
	
	for (var i=0;i<d0.length;i++){
		d0[i][1]=40+10*Math.random();
	}
	//gaspress
	options['grid']['show'] = false;
	options['series']['lines']['fill'] = 0.6;
	options['yaxis']['tickFormatter'] = function suffixFormatter(val, axis) {return val+"Bar";};
    overview['gaspress'] = $.plot("#overview-gaspress", [d1], {
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
	
	options['grid']['show'] = true;
	options['series']['lines']['fill'] = null;
    plot_lines['gaspress'] = $.plot("#gaspress-line-chart", [d0], options);
	
	
	
	
	
	
	
	
	
		
	for (var i=0;i<d0.length;i++){
		d0[i][1]=50+10*Math.random();
	}
	//oilpress
	options['grid']['show'] = false;
	options['series']['lines']['fill'] = 0.6;
	options['yaxis']['tickFormatter'] = function suffixFormatter(val, axis) {return val+"Bar";};
    overview['oilpress'] = $.plot("#overview-oilpress", [d1], {
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
	
	options['grid']['show'] = true;
	options['series']['lines']['fill'] = null;
    plot_lines['oilpress'] = $.plot("#oilpress-line-chart", [d0], options);

})