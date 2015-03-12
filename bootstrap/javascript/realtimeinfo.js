var select = new Array(2);
select['oilpress'] = 1;
select['gaspress'] = 1;
select['gastemp'] = 1;
select['oiltemp'] = 1;
select['watertemp'] = 1;
select['acur'] = 1;
select['bcur'] = 1;
select['ccur'] = 1;
select['speed'] = 1;
select['fuellevel'] = 1;
select['voltage'] = 1;
select['runpower'] = 1;
select['runrate'] = 1;

var metermax = new Array(2);
metermax['oilpress'] = 100;
metermax['gaspress'] = 100;
metermax['gastemp'] = 150;
metermax['oiltemp'] = 150;
metermax['watertemp'] = 150;
metermax['acur'] = 450;
metermax['bcur'] = 450;
metermax['ccur'] = 450;
metermax['speed'] = 2500;
metermax['fuellevel'] = 100;
metermax['voltage'] = 450;
metermax['runpower'] = 10000;
metermax['runrate'] = 10;
var RawData={
	oilpress:[],
	gaspress:[],
	gastemp:[],
	oiltemp:[],
	watertemp:[],
	acur:[],
	bcur:[],
	ccur:[],
	speed:[],
	fuellevel:[],
	voltage:[],
	runpower:[],
	runrate:[]
};
//var base_url="http://210.32.159.42/cim/";
var base_url="http://10.13.71.176/cim/";
var Tmp_data = [];
var line_plot = [];
var updateInterval = 1;
var data_ajax={
	oil_pressure:[],
	gas_pressure:[],
	gas_temp:[],
	oil_temp:[],
	water_temp:[],
	A_CUR:[],
	B_CUR:[],
	C_CUR:[],
	diesel_speed:[],
	fuel_level:[],
	voltage:[],
	run_power:[],
	run_rate:[],
	update_time:[]
};
var relation=new Array(2);
relation["oilpress"]="oil_pressure",
relation["gaspress"]="gas_pressure",
relation["gastemp"]="gas_temp",
relation["oiltemp"]="oil_temp",
relation["watertemp"]="water_temp",
relation["acur"]="A_CUR",
relation["bcur"]="B_CUR",
relation["ccur"]="C_CUR",
relation["speed"]="diesel_speed",
relation["fuellevel"]="fuel_level",
relation["voltage"]="voltage",
relation["runpower"]="run_power",
relation["runrate"]="run_rate";

//"发送机转速","燃油位置","电压","运行功率","运行速率","机油压力","排气压力","水温","液压油温","排气温度","A相电流","B相电流","C相电流"
var meterid=new Array(2);
meterid["发送机转速"]="speed_meter",
meterid["燃油位置"]="fuellevel_meter",
meterid["电压"]="voltage_meter",
meterid["运行功率"]="runpower_meter",
meterid["运行速率"]="runrate_meter",
meterid["机油压力"]="oilpress_meter",
meterid["排气压力"]="gaspress_meter",
meterid["水温"]="watertemp_meter",
meterid["液压油温"]="oiltemp_meter",
meterid["排气温度"]="gastemp_meter",
meterid["A相电流"]="acur_meter",
meterid["B相电流"]="bcur_meter",
meterid["C相电流"]="ccur_meter";

var meterlist = new Array(2);
meterlist['oilpress'] = "机油压力";
meterlist['gaspress'] = "排气压力";
meterlist['gastemp'] = "排气温度";
meterlist['oiltemp'] = "液压油温";
meterlist['watertemp'] = "水温";
meterlist['acur'] = "A相电流";
meterlist['bcur'] = "B相电流";
meterlist['ccur'] = "C相电流";
meterlist['speed'] = "发送机转速";
meterlist['fuellevel'] = "燃油位置";
meterlist['voltage'] = "电压";
meterlist['runpower'] = "运行功率";
meterlist['runrate'] = "运行速率";
var time_temp0=null,time_temp1=null;

$(document).ready(function(){

	$("#select_new_eqp").click(function(){
		var num=document.getElementById('cv_id_select').value;
		if(num == document.getElementById('SetId').innerHTML){
			return;
		}
		if(num!=''){
			window.location.href=base_url+"index.php/admin/"+num;
			/*$.ajax({
				type: "POST",
				url: base_url+"index.php/ajax_realtimeinfo/isonline/",
				data: "cv_id="+num,
				success:function(msg){
					if(1 == msg){
						window.location.href=num;
					}else{
						$("#eqpStatus").modal("show");
					}
				}
			});*/
		}
	})
	
	for (var item in RawData){
		for (var i=0;i<30;i++){
			RawData[item][i] = 0;
		}
	}
	
	function getRealtimeData(type,realtime) {
		
		var data0,data1,key,value,new_info = true;
		
		if(realtime){
		
			$.ajax({
				type: "POST",
				url: base_url+"index.php/ajax_realtimeinfo/readinfo/",
				data: "sid="+Math.random()+"&cv_id="+document.getElementById('SetId').innerHTML,
				success: function(msg){
					//var y;
					data0 = msg.split(';');
					for(var i=0;i<data0.length;i++){
						data1 = data0[i].split('=');
						key = data1[0];
						value = data1[1];
						//if(key == item){
							data_ajax[key] = value;
						//}
					}
					//y = data_ajax[item];
				}
			});
			
			time_temp0 = data_ajax['update_time'];
			
			if (null == time_temp1){
				time_temp1 = data_ajax['update_time'];
			}else{
				if(time_temp1 == time_temp0){
					new_info = false;
				}else{
					new_info = true;
				}
				time_temp1 = time_temp0;
			}
			
			//new_info = true;//demo
			if(true == new_info){
				for(var item in type){
					if (RawData[item].length > 0)
						RawData[item].shift();
						
						RawData[item].push(data_ajax[relation[item]]);//
						//RawData[item].push(300+100*Math.random());
				}
			}
		}

		var res={
			oilpress:[],
			gaspress:[],
			gastemp:[],
			oiltemp:[],
			watertemp:[],
			acur:[],
			bcur:[],
			ccur:[],
			speed:[],
			fuellevel:[],
			voltage:[],
			runpower:[],
			runrate:[]
		}
		
		for(var item in type){
		
			type[item].data = [];
			
			for (var i = 0; i < RawData[item].length; ++i) {
				type[item].data.push([i,RawData[item][i]]);
			}
			
			if(select[item] != 0){
				res[item].push(type[item].data)
			}
		}

		return res;
	}
	Tmp_data = getRealtimeData(RawData,true);

	var options_meter = {
		series: {
			pie: { 
				show: true,
				//innerRadius: 0.8,
				radius:0.9,
				label: {
					show: false
				},
				stroke: { 
					width: 1,
					color: "#F0b01F"
				}
			}
		},
		legend: {
			show:false
		},
		grid: {
			show: false
		}
	};
	var options_chart = {
		series: {
			shadowSize: 0,	// Drawing is faster without shadows
			lines: {
				fill: 0.3
			},
			color: "#FFF"
		},
		yaxis: {
			min: 0,
			max: 1000,
			show:false
		},
		xaxis: {
			show: false
		},
		grid: {               
			backgroundColor: "#666",
			//tickColor: "#e4f4f4"             
			show:false
		},
		legend: {
			show:false
		}
	}

	//speed
	line_plot['speed'] = $.plot("#placeholder_speed", Tmp_data["speed"], options_chart);

	//fuellevel
	line_plot['fuellevel'] = $.plot("#placeholder_fuellevel", Tmp_data["fuellevel"], options_chart);

	//voltage
	line_plot['voltage'] = $.plot("#placeholder_voltage", Tmp_data["voltage"], options_chart);

	//runpower
	line_plot['runpower'] = $.plot("#placeholder_runpower", Tmp_data["runpower"], options_chart);

	//runrate
	line_plot['runrate'] = $.plot("#placeholder_runrate", Tmp_data["runrate"], options_chart);

	//oilpress
	line_plot['oilpress'] = $.plot("#placeholder_oilpress", Tmp_data["oilpress"], options_chart);

	//gaspress
	line_plot['gaspress'] = $.plot("#placeholder_gaspress", Tmp_data["gaspress"], options_chart);

	//watertemp
	line_plot['watertemp'] = $.plot("#placeholder_watertemp", Tmp_data["watertemp"], options_chart);

	//oiltemp
	line_plot['oiltemp'] = $.plot("#placeholder_oiltemp", Tmp_data["oiltemp"], options_chart);

	//gastemp
	options_chart['yaxis']['max'] = 150;
	line_plot['gastemp'] = $.plot("#placeholder_gastemp", Tmp_data["gastemp"], options_chart);

	//acur
	options_chart['yaxis']['max'] = 450;
	line_plot['acur'] = $.plot("#placeholder_acur", Tmp_data["acur"], options_chart);

	//bcur
	line_plot['bcur'] = $.plot("#placeholder_bcur", Tmp_data["bcur"], options_chart);

	//ccur
	line_plot['ccur'] = $.plot("#placeholder_ccur", Tmp_data["ccur"], options_chart);
	
	var initflag = 0;
	function update() {	
		Tmp_data = getRealtimeData(RawData,true);
		var meters="";
		for (var item in line_plot){
			if(initflag == 0){
				if("" == (Tmp_data[item][0][29][1])){
					$("#"+item+"_meter").fadeOut(1000);
				}else{
					$("#"+item+"_meter").fadeIn(1000);
					if(meters != ""){
						meters += ",";
					}
					meters += meterlist[item];
				}
			}
			var pie_data=[];
			pie_data[1] = 100 * (Tmp_data[item][0][29][1]/metermax[item]);
			pie_data[1] = pie_data[1].toFixed(1);
			pie_data[0] = 100 - pie_data[1];
			
			line_plot[item].setData(Tmp_data[item]);
			line_plot[item].draw();
			document.getElementById(item).innerHTML = Tmp_data[item][0][29][1];
			document.getElementById(item+"_img").style.width=pie_data[1]+"%";
			$("div.update_time").each(function(){
				this.innerHTML = time_temp0;
			})
		}
		if(initflag == 0 && meters!=""){
			$("#meter_select")[0].value=meters;
			$("#meter_select").select2({tags:["发送机转速","燃油位置","电压","运行功率","运行速率","机油压力","排气压力","水温","液压油温","排气温度","A相电流","B相电流","C相电流"],placeholder: "请点击此处选择仪表",});
			initflag = 1;
		}
		setTimeout(update, updateInterval*1000);
	}
	
	$("#meter_select").on("select2-selecting", function(e) {
		//$($("#"+meterid[e.val]+" div.col-lg-6")[1]).show();//animate({width: 'toggle', opacity: 'toggle'},1);
		//$($("#"+meterid[e.val]+" div.col-lg-6")[0]).show();//animate({width: 'toggle', opacity: 'toggle'},1);
		$("#"+meterid[e.val]).fadeIn(2000);//animate({width: 'toggle', opacity: 'toggle'},5000);
	})
	$("#meter_select").on("select2-removing", function(e) {
		//$($("#"+meterid[e.val]+" div.col-lg-6")[1]).fadeOut();//animate({width: 'toggle', opacity: 'toggle'},10000);
		//$($("#"+meterid[e.val]+" div.col-lg-6")[0]).fadeOut();//animate({width: 'toggle', opacity: 'toggle'},10000);
		$("#"+meterid[e.val]).fadeOut(2000);//animate({width: 'toggle', opacity: 'toggle'},20000);
	})
	
	

	update();
	$("#cv_id_select").select2();
	$("#cv_id_select").select2_set_alertstr("设备不存在或当前不在线！");
	$("#meter_select").select2({tags:["发送机转速","燃油位置","电压","运行功率","运行速率","机油压力","排气压力","水温","液压油温","排气温度","A相电流","B相电流","C相电流"],placeholder: "请点击此处选择仪表",});
	
	
})