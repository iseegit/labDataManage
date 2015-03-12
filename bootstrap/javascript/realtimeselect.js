//var base_url="http://210.32.159.42/cim/";
var base_url="http://10.13.71.176/cim/";
$(document).ready(function(){
	$("#cv_id_select").select2();
	$("#cv_id_select").select2_set_alertstr("设备不存在或当前不在线！");
	
	$("#select_new_eqp").click(function(){
		var num=document.getElementById('cv_id_select').value;
		if(num == document.getElementById('SetId').innerHTML){
			return;
		}
		if(num!=''){
			window.location.href=base_url+"index.php/admin/"+num;
		}
	})
})