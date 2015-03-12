﻿var map;

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
	map.addControl(new BMap.NavigationControl({anchor: BMAP_ANCHOR_TOP_RIGHT, type: BMAP_NAVIGATION_CONTROL_SMALL})); 
	map.centerAndZoom(new BMap.Point(116.404, 39.915), 5);
	
	var gpsPoint = [new BMap.Point(116.9187,28.9423),
					new BMap.Point(117.9187,29.9423),
					new BMap.Point(116.9187,27.9423),
					new BMap.Point(115.9187,30.9423),
					new BMap.Point(114.9187,26.9423),
					new BMap.Point(113.9187,31.9423)
					];
	
	setTimeout(function(){
		BMap.Convertor.transMore(gpsPoint,0,callback);     //真实经纬度转成百度坐标
	},1000);
}

$(function() {

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
	
    $("div.maintain_info").mouseenter(function(e){
        $($("div.klq_maintain")[0]).remove();
        $("div.maintain_info")[0].className="col-lg-2 maintain_info";
        $("div.maintain_info").each(function(){
            this.className="col-lg-2 maintain_info";
        })
        
        this.className="col-lg-4 maintain_info";
        if(0 != $(this).find("div.col-lg-12").length){
            $(this).find("div.col-lg-12")[0].className="col-lg-5";
        }
        $div=$("<div class=\"col-lg-7 text-center klq_maintain\"><br><div>鼠标移动至饼图区域<div></div>可查看概况，</div><div>或点击饼图区域</div><div>以查看详情</div></div>");
        
        $($(this).find("div.klq_maintain")[0]).show();
        $($(this).find("div.row")[1]).append($div);
        
    });
    $("div.maintain_info").mouseleave(function(e){
        //$(this).find("div.col-lg-5")[0].className="col-lg-12";
        //$($("div.klq_maintain")[0]).remove();
        //this.className="col-lg-2 maintain_info";
    });
    
    //chart
    var d0 = [[1196463600000, 0], [1196550000000, 10], [1196636400000, 12], [1196722800000, 17], [1196809200000, 36], [1196895600000, 37], [1196982000000, 37], [1197068400000, 86], [1197154800000, 86], [1197241200000, 120], [1197327600000, 165], [1197414000000, 165], [1197500400000, 165], [1197586800000, 165], [1197673200000, 165], [1197759600000, 165], [1197846000000, 275], [1197932400000, 481], [1198018800000, 481], [1198105200000, 481], [1198191600000, 481], [1198278000000, 481], [1198364400000, 481], [1198450800000, 686], [1198537200000, 686], [1198623600000, 686], [1198710000000, 686], [1198796400000, 686], [1198882800000, 686], [1198969200000, 686]];
    var d1 = [[1196463600000, 0], [1196550000000, 7], [1196636400000, 10], [1196722800000, 17], [1196809200000, 36], [1196895600000, 35], [1196982000000, 27], [1197068400000, 85], [1197154800000, 86], [1197241200000, 120], [1197327600000, 159], [1197414000000, 147], [1197500400000, 147], [1197586800000, 165], [1197673200000, 164], [1197759600000, 153], [1197846000000, 275], [1197932400000, 480], [1198018800000, 410], [1198105200000, 466], [1198191600000, 465], [1198278000000, 334], [1198364400000, 352], [1198450800000, 520], [1198537200000, 590], [1198623600000, 649], [1198710000000, 681], [1198796400000, 592], [1198882800000, 682], [1198969200000, 608]];
    var d2 = [[1196463600000, 0], [1196550000000, 7], [1196636400000, 8], [1196722800000, 9], [1196809200000, 33], [1196895600000, 35], [1196982000000, 27], [1197068400000, 80], [1197154800000, 67], [1197241200000, 120], [1197327600000, 150], [1197414000000, 140], [1197500400000, 140], [1197586800000, 160], [1197673200000, 143], [1197759600000, 130], [1197846000000, 157], [1197932400000, 458], [1198018800000, 359], [1198105200000, 408], [1198191600000, 454], [1198278000000, 313], [1198364400000, 335], [1198450800000, 468], [1198537200000, 270], [1198623600000, 644], [1198710000000, 568], [1198796400000, 562], [1198882800000, 582], [1198969200000, 508]];
    /*
    var d0 = [[1196463600000, 0], [1196550000000, 10], [1196636400000, 1], [1196722800000, 77], [1196809200000, 3636], [1196895600000, 3575], [1196982000000, 2736], [1197068400000, 1086], [1197154800000, 676], [1197241200000, 1205], [1197327600000, 906], [1197414000000, 710], [1197500400000, 639], [1197586800000, 540], [1197673200000, 435], [1197759600000, 301], [1197846000000, 575], [1197932400000, 481], [1198018800000, 591], [1198105200000, 608], [1198191600000, 459], [1198278000000, 234], [1198364400000, 1352], [1198450800000, 686], [1198537200000, 279], [1198623600000, 449], [1198710000000, 468], [1198796400000, 392], [1198882800000, 282], [1198969200000, 208], [1199055600000, 229], [1199142000000, 177], [1199228400000, 374], [1199314800000, 436], [1199401200000, 404], [1199487600000, 253], [1199574000000, 218], [1199660400000, 476], [1199746800000, 462], [1199833200000, 448], [1199919600000, 442], [1200006000000, 403], [1200092400000, 204], [1200178800000, 194], [1200265200000, 327], [1200351600000, 374], [1200438000000, 507], [1200524400000, 546], [1200610800000, 482], [1200697200000, 283], [1200783600000, 221], [1200870000000, 483], [1200956400000, 523], [1201042800000, 528], [1201129200000, 483], [1201215600000, 452], [1201302000000, 270], [1201388400000, 222], [1201474800000, 439], [1201561200000, 559], [1201647600000, 521], [1201734000000, 477], [1201820400000, 442], [1201906800000, 252], [1201993200000, 236], [1202079600000, 525], [1202166000000, 477], [1202252400000, 386], [1202338800000, 409], [1202425200000, 408], [1202511600000, 237], [1202598000000, 193], [1202684400000, 357], [1202770800000, 414], [1202857200000, 393], [1202943600000, 353], [1203030000000, 364], [1203116400000, 215], [1203202800000, 214], [1203289200000, 356], [1203375600000, 399], [1203462000000, 334], [1203548400000, 348], [1203634800000, 243], [1203721200000, 126], [1203807600000, 157], [1203894000000, 288]];
    var d1 = [[1196463600000, 20], [1196550000000, 4], [1196636400000, 0], [1196722800000, 7], [1196809200000, 36], [1196895600000, 35], [1196982000000, 27], [1197068400000, 10], [1197154800000, 6], [1197241200000, 12], [1197327600000, 9], [1197414000000, 7], [1197500400000, 6], [1197586800000, 5], [1197673200000, 4], [1197759600000, 3], [1197846000000, 575], [1197932400000, 481], [1198018800000, 910], [1198105200000, 1608], [1198191600000, 845], [1198278000000, 1234], [1198364400000, 1352], [1198450800000, 2860], [1198537200000, 2790], [1198623600000, 149], [1198710000000, 168], [1198796400000, 192], [1198882800000, 182], [1198969200000, 108], [1199055600000, 129], [1199142000000, 277], [1199228400000, 174], [1199314800000, 136], [1199401200000, 104], [1199487600000, 153], [1199574000000, 118], [1199660400000, 176], [1199746800000, 162], [1199833200000, 248], [1199919600000, 242], [1200006000000, 203], [1200092400000, 104], [1200178800000, 294], [1200265200000, 227], [1200351600000, 274], [1200438000000, 207], [1200524400000, 246], [1200610800000, 182], [1200697200000, 183], [1200783600000, 121], [1200870000000, 183], [1200956400000, 123], [1201042800000, 52], [1201129200000, 48], [1201215600000, 45], [1201302000000, 27], [1201388400000, 22], [1201474800000, 1439], [1201561200000, 2559], [1201647600000, 1521], [1201734000000, 1477], [1201820400000, 1442], [1201906800000, 25], [1201993200000, 23], [1202079600000, 52], [1202166000000, 47], [1202252400000, 38], [1202338800000, 40], [1202425200000, 40], [1202511600000, 23], [1202598000000, 19], [1202684400000, 35], [1202770800000, 41], [1202857200000, 39], [1202943600000, 35], [1203030000000, 36], [1203116400000, 21], [1203202800000, 21], [1203289200000, 35], [1203375600000, 699], [1203462000000, 3340], [1203548400000, 3480], [1203634800000, 2430], [1203721200000, 1260], [1203807600000, 1570], [1203894000000, 2880]];
    var d2 = [[1196463600000, 10], [1196550000000, 7], [1196636400000, 8], [1196722800000, 97], [1196809200000, 363], [1196895600000, 357], [1196982000000, 273], [1197068400000, 108], [1197154800000, 67], [1197241200000, 120], [1197327600000, 90], [1197414000000, 71], [1197500400000, 63], [1197586800000, 54], [1197673200000, 43], [1197759600000, 30], [1197846000000, 57], [1197932400000, 48], [1198018800000, 59], [1198105200000, 608], [1198191600000, 4], [1198278000000, 23], [1198364400000, 135], [1198450800000, 68], [1198537200000, 27], [1198623600000, 44], [1198710000000, 568], [1198796400000, 592], [1198882800000, 582], [1198969200000, 508], [1199055600000, 529], [1199142000000, 577], [1199228400000, 574], [1199314800000, 536], [1199401200000, 504], [1199487600000, 553], [1199574000000, 518], [1199660400000, 676], [1199746800000, 662], [1199833200000, 648], [1199919600000, 642], [1200006000000, 603], [1200092400000, 604], [1200178800000, 694], [1200265200000, 627], [1200351600000, 874], [1200438000000, 807], [1200524400000, 846], [1200610800000, 882], [1200697200000, 883], [1200783600000, 821], [1200870000000, 883], [1200956400000, 823], [1201042800000, 1528], [1201129200000, 1483], [1201215600000, 1452], [1201302000000, 1270], [1201388400000, 220], [1201474800000, 439], [1201561200000, 1559], [1201647600000, 2521], [1201734000000, 2477], [1201820400000, 2442], [1201906800000, 1252], [1201993200000, 1236], [1202079600000, 1525], [1202166000000, 1477], [1202252400000, 1386], [1202338800000, 1409], [1202425200000, 1408], [1202511600000, 1237], [1202598000000, 1930], [1202684400000, 3570], [1202770800000, 4140], [1202857200000, 3930], [1202943600000, 3530], [1203030000000, 3640], [1203116400000, 2150], [1203202800000, 2140], [1203289200000, 356], [1203375600000, 399], [1203462000000, 33], [1203548400000, 34], [1203634800000, 24], [1203721200000, 12], [1203807600000, 15], [1203894000000, 28]];
    */
    
    var options = {
        xaxis: {
            mode: "time",
            timeformat:"%m/%d",//"%Y/%m/%d",
            tickLength: 5
        },
        yaxis: {
            tickFormatter: function suffixFormatter(val, axis) {return val+"台";}
        },
        grid: {
            hoverable: true,
            autoHighlight: false
        },
        crosshair: {
            mode: "x"
        },
        legend: {
            position: "nw"
        }
    };

    var updateLegendTimeout = null;
    var latestPosition = null;

    function updateLegend() {

        updateLegendTimeout = null;

        var pos = latestPosition;

        var axes = plot.getAxes();
        if (pos.x < axes.xaxis.min || pos.x > axes.xaxis.max ||
            pos.y < axes.yaxis.min || pos.y > axes.yaxis.max) {
            return;
        }

        var i, j, dataset = plot.getData();
        for (i = 0; i < dataset.length; ++i) {

            var series = dataset[i];

            // Find the nearest points, x-wise

            /*var tempv;
            if (pos.x + 0.5 >= parseInt(pos.x+1)){
                tempv = parseInt(pos.x) + 1;
            }else{
                tempv = parseInt(pos.x);
            }*/
            for (j = 0; j < series.data.length; ++j) {
                if (series.data[j][0] > pos.x) {
                    break;
                }
            }

            // Now Interpolate

            var y,
                p1 = series.data[j - 1],
                p2 = null;//series.data[j];

            if (p1 == null) {
                y = p2[1];
            } else if (p2 == null) {
                y = p1[1];
            } else {
                y = p1[1] + (p2[1] - p1[1]) * (pos.x - p1[0]) / (p2[0] - p1[0]);
            }

            legends.eq(i).text(series.label.replace(/=.*/, "= " + parseInt(y)));
        }
    }

    var plot = $.plot("#set-status-chart", [
    {data:d0,label:"设备总数= 0",bars:{show:true,lineWidth:1,barWidth:43200000,fill:0.6}},
    {data:d1,label:"在线设备总数= 0",lines:{show:true}},
    {data:d2,label:"开机设备总数= 0",lines:{show:true}}
    ], options);

    var legends = $("#set-status-chart .legendLabel");

    legends.each(function () {
        // fix the widths so they don't jump around
        $(this).css('width', $(this).width()+10);
    });
    
    $("#set-status-chart").bind("plothover",  function (event, pos, item) {
        latestPosition = pos;
        if (!updateLegendTimeout) {
            updateLegendTimeout = setTimeout(updateLegend, 50);
        }
    });
    
    //donut
    /*var data1 = [
    {label:"保养期已过",data:10,color:"#F00000"},
    {label:"保养期剩余24小时以内",data:12,color:"#F06000"},
    {label:"保养期剩余7天以内",data:10,color:"#F0F000"},
    
    {label:"保养期剩余1个月以内",data:100,color:"#60A000"},
    {label:"保养期剩余2个月以内",data:50,color:"#30B000"},
    {label:"保养期剩余2个月以上",data:50,color:"#00C0c0"}];*/

    var data1 = [
    {label:"保养期已过",data:10,color:"#095791"},
    {label:"保养期剩余24小时以内",data:12,color:"#0B62A4"},
    {label:"保养期剩余7天以内",data:10,color:"#3980B5"},
    
    {label:"保养期剩余1个月以内",data:100,color:"#679DC6"},
    {label:"保养期剩余2个月以内",data:50,color:"#95BBD7"},
    {label:"保养期剩余2个月以上",data:50,color:"#B0CCE1"}];
    
    $.plot("#maintain-donut1", data1, {
    
        series: {
            pie: { 
                show: true,
                innerRadius: 0.3,
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

    $("div.dount-holder").bind("plothover", function(event, pos, obj) {

        if (!obj) {
            return;
        }
        
        $("div.klq_maintain").html("<div class=\"huge\">"+obj.series.data[0][1]+"台</div><div>"+obj.series.label+"</div><div>占比："+obj.series.percent.toFixed(1)+"%</div>");

    });

    var flag2show=-1;
    $("div.dount-holder").bind("plotclick", function(event, pos, obj) {

        if (!obj) {
            return;
        }
        //alert(obj.seriesIndex)
        if (-1 == flag2show){
            flag2show = obj.seriesIndex;
        }else if(flag2show == obj.seriesIndex && !$("#detail").is(":hidden")){
            flag2show = -1;
            $("#detail").css({ "top": t, "left": l ,"backgroundcolor":"rgb(100,0,0)"}).hide();
            return;
        }
        
        flag2show = obj.seriesIndex;
        var t = pos.pageY-320; 
        var l = pos.pageX+20; 
        if (l > $(window).width()-520){
            l -= 520;
        }
        
        $("#detail").html("<div><h4>保养信息："+obj.series.label+
        "<button aria-hidden=\"true\" style=\"float:right;border:0;background:0\" type=\"button\" onclick=\"close();$('#detail').hide()\">x"+
        "</button></h4></div>"+
        "<div style=\"height:240px;overflow:auto\">"+
        "<table class=\"table table-bordered\">"+
            "<thead>"+
                "<tr>"+
                    "<th>设备编号</th>"+
                    "<th>类型</th>"+
                    "<th>机型</th>"+
                    "<th>保养期剩余时间</th>"+
                "</tr>"+
            "</thead>"+
            "<tbody>"+
                "<tr>"+
                    "<td>5001</td>"+
                    "<td>空压机</td>"+
                    "<td>LG-2312</td>"+
                    "<td>10小时</td>"+
                "</tr>"+
                "<tr>"+
                    "<td>5002</td>"+
                    "<td>空压机</td>"+
                    "<td>LG-2312</td>"+
                    "<td>20小时</td>"+
                "</tr>"+
                "<tr>"+
                    "<td>5003</td>"+
                    "<td>空压机</td>"+
                    "<td>LG-2312</td>"+
                    "<td>30小时</td>"+
                "</tr>"+
                "<tr>"+
                    "<td>5004</td>"+
                    "<td>空压机</td>"+
                    "<td>LG-2312</td>"+
                    "<td>40小时</td>"+
                "</tr>"+
                "<tr>"+
                    "<td>5005</td>"+
                    "<td>空压机</td>"+
                    "<td>LG-2312</td>"+
                    "<td>50小时</td>"+
                "</tr>"+
                "<tr>"+
                    "<td>5001</td>"+
                    "<td>空压机</td>"+
                    "<td>LG-2312</td>"+
                    "<td>60小时</td>"+
                "</tr>"+
                "<tr>"+
                    "<td>5006</td>"+
                    "<td>空压机</td>"+
                    "<td>LG-2312</td>"+
                    "<td>70小时</td>"+
                "</tr>"+
                "<tr>"+
                    "<td>5007</td>"+
                    "<td>空压机</td>"+
                    "<td>LG-2312</td>"+
                    "<td>80小时</td>"+
                "</tr>"+
                "<tr>"+
                    "<td>5008</td>"+
                    "<td>空压机</td>"+
                    "<td>LG-2312</td>"+
                    "<td>90小时</td>"+
                "</tr>"+
                "<tr>"+
                    "<td>5009</td>"+
                    "<td>空压机</td>"+
                    "<td>LG-2312</td>"+
                    "<td>100小时</td>"+
                "</tr>"+
            "</tbody>"+
        "</table></div>");
        $("#detail").css({ "top": t, "left": l ,"backgroundcolor":"rgb(100,0,0)"}).show();
        
        //var percent = parseFloat(obj.series.percent).toFixed(2);
        //$("#hover").html("<span style='font-weight:bold; color:" + obj.series.color + "'>" + obj.series.label + " (" + percent + "%)</span>");
 
    });

    $.plot("#maintain-donut2", data1, {
    
        series: {
            pie: { 
                show: true,
                innerRadius: 0.3,
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

    $.plot("#maintain-donut3", data1, {
    
        series: {
            pie: { 
                show: true,
                innerRadius: 0.3,
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

    $.plot("#maintain-donut4", data1, {
    
        series: {
            pie: { 
                show: true,
                innerRadius: 0.3,
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

    $.plot("#maintain-donut5", data1, {
    
        series: {
            pie: { 
                show: true,
                innerRadius: 0.3,
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

    // Add the Flot version string to the footer

	loadJScript();
	
    $("#footer").prepend("Flot " + $.plot.version + " &ndash; ");
});