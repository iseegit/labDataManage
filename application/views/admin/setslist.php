<!--script type="text/javascript" src="http://api.map.baidu.com/api?v=1.5&ak=09a12fee552d5ad4aa2de5c0626c9c10"></script>
<script type="text/javascript" src="http://developer.baidu.com/map/jsdemo/demo/changeMore.js"></script-->  
 <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0;background: none repeat scroll 0% 0% #080808;">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
			<a class="navbar-brand" href="<?php $tmp=base_url(); echo $tmp.'index.php/admin/index'?>">后台管理 v1.0</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
					<li><a href="<?php echo $tmp.'index.php/admin/'.$zhsz_encrypt?>"><i class="fa fa-gear fa-fw"></i> 帐户设置</a>
                        </li>
                        <li class="divider"></li>
					<li><a href="<?php $tmp=base_url(); echo $tmp.'index.php/index/logout'?>"><i class="fa fa-sign-out fa-fw"></i> 登出</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation" style="background: none repeat scroll 0% 0% #3A3A3A;">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="<?php $tmp=base_url(); echo $tmp.'index.php/admin'?>"><i class="fa fa-dashboard fa-fw"></i> 管理首页</a>
                        </li>
                        <li>
                            <a href="#"  class="active"><i class="fa fa-table fa-fw"></i> 所有设备信息</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> 单台设备信息<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
								<a href="<?php echo $tmp.'index.php/admin/'.$dtsb_encrypt?>"> 单台设备概况</a>
                                </li>
                                <li>
								<a href="<?php echo $tmp.'index.php/admin/'.$ssxx_encrypt?>"> 实时信息</a>
                                </li>
                                <li>
								<a href="<?php echo $tmp.'index.php/admin/'.$lsxx_encrypt?>"> 历史信息</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> 后台设置<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
								<a href="<?php $tmp=base_url(); echo $tmp.'index.php/admin/'.$cssz_encrypt?>"> 参数设置</a>
							</li>
							<li>
								<a href="<?php $tmp=base_url(); echo $tmp.'index.php/admin/'.$zhsz_encrypt?>"> 帐户设置</a>
							</li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
					</ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
				<h1 style="height:74px" class="page-header">所有设备信息<img style="float:right;height:74px" src="<?php $tmp=base_url(); echo $tmp.'img/logo.png'?>"></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            所有所有设备信息
							<button class="btn btn-default" style="float:right;margin-top:-5px;height:30px" data-toggle="modal" data-target="#addItem">添加设备</button>
									
							<div class="modal fade" id="addItem" tabindex="-1" role="dialog" 
													   aria-labelledby="myModalLabel" aria-hidden="true">
							   <div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" 
										   data-dismiss="modal" aria-hidden="true">
											  &times;
											</button>
											<h4 class="modal-title" id="myModalLabel">
												添加设备
											</h4>
										</div>
										<div class="modal-body">
											<div class="input-group" style="width:300px">
												<span class="input-group-addon">设备编号</span>
												<input type="text" class="form-control" id="add_id">
											</div>
											<br/>
											<div class="input-group" style="width:300px">
												<span class="input-group-addon">设备类型</span>
												<input type="text" class="form-control" id="add_type">
											</div>
											<br/>
											<div class="input-group" style="width:300px">
												<span class="input-group-addon">使用厂家</span>
												<input type="text" class="form-control" id="add_factory">
											</div>
											<ul class="list-inline" style="text-align:right;">
												<li><button type="button" class="btn btn-primary" onclick="addEqp()" id="modalAddYes">确定</button></li>
												<li><button type="button" class="btn btn-primary" onclick="$('#addItem').modal('hide');">取消</button></li>
											</ul>
										</div>
									</div><!-- /.modal-content -->
								</div><!-- /.modal -->
							</div><!-- /.modal -->
							<script>
								function addEqp(obj){
									
									$('#modalAddYes').attr("disabled");
									var cv_id = $("#add_id").val();
									var cv_function = $("#add_type").val();
									var cv_factory = $("#add_factory").val();
									
									$.ajax({
										type: "POST",
										url: "../../index.php/ajax_setslist/addEqp/",
										data: "cv_id="+cv_id+"&cv_function="+cv_function+"&cv_factory="+cv_factory,
										success:function(){
											var myDate = new Date();
											newtr=document.createElement("tr");
											newtd1=document.createElement("td");
											newtd1.innerHTML = "<a style=\"text-decoration:underline\" href=\"../../index.php/admin/realtimeinfo/"+ cv_id +"\">"+ cv_id +"</a>";
											newtr.appendChild(newtd1);
											
											newtd2=document.createElement("td");
											newtd2.innerHTML = cv_function;
											newtr.appendChild(newtd2);
											
											newtd3=document.createElement("td");
											newtd3.innerHTML = "离线";
											newtr.appendChild(newtd3);
											
											newtd4=document.createElement("td");
											newtd4.innerHTML = cv_factory;
											newtr.appendChild(newtd4);
											
											newtd5=document.createElement("td");
											newtd5.innerHTML = getNowFormatDate();
											newtr.appendChild(newtd5);
											
											newtd6=document.createElement("td");
											newtd6.innerHTML = "<a href=\"javascript:void(0)\"  onclick=\"modalShowDel(this);\">删除</a> | <a href=\"javascript:void(0)\"  onclick=\"modalShowEdit(this);\">编辑</a>";
											newtr.appendChild(newtd6);
											
											listTable = document.getElementById("listTable");
											listTable.appendChild(newtr);
											$('#addItem').modal('hide');
										}
									});
									
									
								}
								
								function getNowFormatDate() {
									var date = new Date();
									var seperator1 = "-";
									var seperator2 = ":";
									var month = date.getMonth() + 1;
									var strDate = date.getDate();
									if (month >= 1 && month <= 9) {
										month = "0" + month;
									}
									if (strDate >= 0 && strDate <= 9) {
										strDate = "0" + strDate;
									}
									var currentdate = date.getFullYear() + seperator1 + month + seperator1 + strDate
											+ " " + date.getHours() + seperator2 + date.getMinutes()
											+ seperator2 + date.getSeconds();
									return currentdate;
								}
								
								/*function delItem(cv_id){
									alert(cv_id);
								}*/
							</script>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>设备编号</th>
											<th>设备类型</th>
                                            <th>机型</th>
                                            <th>控制器型号</th>
											<th>当前状态</th>
											<th>使用厂家</th>
											<th>设备添加时间</th>
											<th>操作</th>
                                        </tr>
                                    </thead>
									<tbody id="listTable">
										
										<?php foreach ($allEqp as $allEqp_item):?>
										<tr>
                                            <td><a style="text-decoration:underline" href="<?php $tmp=base_url(); echo $tmp.'index.php/admin/'.$allEqp_item['href']?>"><?php echo $allEqp_item['cv_id']?></a></td>
											<td><?php echo $allEqp_item['cv_function']?></td>
                                            <td>LG-2312</td>
                                            <td>汇川</td>
											<td><?php if(1 == $allEqp_item['isOnLine']){echo "在线";}else{echo "离线";} ?></td>
											<td><?php echo $allEqp_item['cv_factory']?></td>
											<td><?php echo $allEqp_item['record_date']?></td>
											<td><a href="javascript:void(0)"  onclick="modalShowDel(this);">删除</a> | <a href="javascript:void(0)"  onclick="modalShowEdit(this);">编辑</a></td>
                                        </tr>
										<?php endforeach?>
									</tbody>
									
								</table>
								<div class="modal fade" id="delItem" tabindex="-1" role="dialog" 
														   aria-labelledby="myModalLabel" aria-hidden="true">
								   <div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" 
											   data-dismiss="modal" aria-hidden="true">
												  &times;
												</button>
												<h4 class="modal-title" id="myModalLabel">
													警告
												</h4>
											</div>
											<div class="modal-body">
												<p>你确定要删除编号为<span id="del_cv_id" style="font-weight:bold;color:red"></span>的设备吗?</p>
												<ul class="list-inline" style="text-align:right;">
													<li><button type="button" class="btn btn-primary" id="modalDelYes">确定</button></li>
													<li><button type="button" class="btn btn-primary" onclick="$('#delItem').modal('hide');">取消</button></li>
												</ul>
											</div>
										</div><!-- /.modal-content -->
									</div><!-- /.modal -->
								</div><!-- /.modal -->
								<script>
									function modalShowDel(obj){
										var tds=$(obj).parent().parent().find('td');
										var cv_id = tds.eq(0).text();
										$('#del_cv_id').text(tds.eq(0).text());
										$('#delItem').modal('show');
										$('#modalDelYes').unbind();
										$('#modalDelYes').mousedown(function(e){
											if(1 == e.which){
												$.ajax({
												   type: "POST",
												   url: "../../index.php/ajax_setslist/delEqp/",
												   data: "cv_id="+cv_id
												});
												tds.remove();
												$('#delItem').modal('hide');
											}
										});
										
									}
									
									/*function delItem(cv_id){
										alert(cv_id);
									}*/
								</script>
								<div class="modal fade" id="editItem" tabindex="-1" role="dialog" 
														   aria-labelledby="myModalLabel" aria-hidden="true">
								   <div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" 
											   data-dismiss="modal" aria-hidden="true">
												  &times;
												</button>
												<h4 class="modal-title" id="myModalLabel">
													编辑
												</h4>
											</div>
											<div class="modal-body">
												<p>设备编号：<span id="edit_cv_id" style="font-weight:bold;color:red"></span></p>
												<br/>
												<div class="input-group" style="width:300px">
													<span class="input-group-addon">设备类型</span>
													<input type="text" class="form-control" id="edit_type">
												</div>
												<br/>
												<div class="input-group" style="width:300px">
													<span class="input-group-addon">使用厂家</span>
													<input type="text" class="form-control" id="edit_factory">
												</div>
												<ul class="list-inline" style="text-align:right;">
													<li><button type="button" class="btn btn-primary" id="editmodalDelYes">确定</button></li>
													<li><button type="button" class="btn btn-primary" onclick="$('#editItem').modal('hide');">取消</button></li>
												</ul>
											</div>
										</div><!-- /.modal-content -->
									</div><!-- /.modal -->
								</div><!-- /.modal -->
								<script>
									function modalShowEdit(obj){
										var tds=$(obj).parent().parent().find('td');
										var cv_id = tds.eq(0).text();
										$('#edit_cv_id').text(tds.eq(0).text());
										$('#edit_type').val(tds.eq(1).text());
										$('#edit_factory').val(tds.eq(3).text());
										$('#editItem').modal('show');
										$('#editmodalDelYes').unbind();
										$('#editmodalDelYes').mousedown(function(e){
											if(1 == e.which){
												$.ajax({
												   type: "POST",
												   url: "../../index.php/ajax_setslist/editEqp/",
												   data: "cv_id="+cv_id+"&cv_function="+$('#edit_type').val()+"&cv_factory="+$('#edit_factory').val()
												});
												//tds.remove();
												tds.eq(1).text($('#edit_type').val());
												tds.eq(3).text($('#edit_factory').val());
												$('#editItem').modal('hide');
											}
										});
										
									}
								</script>
								
							</div>
                            <!-- /.table-responsive -->
							
							
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel chat-panel panel-primary">
                        <div class="panel-heading">
							<div class="row">
								<div class="col-xs-1">
									<i class="fa fa-warning fa-2x"></i>
								</div>
								<div class="col-xs-11 text-left">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapseWarning" style="color:#fff">
										报警信息（所有设备）
									</a>
								</div>
							</div>
                        </div>
                        <!-- /.panel-heading -->
						<div id="collapseWarning" class="panel-collapse collapse">
							<div class="panel-body">
								<div class="table-responsive">
									<table style="width:100%" class="table table-striped table-bordered table-hover">
										<thead>
											<tr>
												<th style="width:10%">设备编号</th>
                                                <th style="width:50%">报警原因</th>
												<th style="width:20%">报警开始时间</th>
												<th style="width:20%">报警结束时间</th>
											</tr>
										</thead>
										<tbody>
											<?php foreach ($allWarning as $allWarning_list):?>
												<tr>
													<td><?php echo $allWarning_list['cv_id']?></td>
                                                    <td><?php echo $allWarning_list['alarm_detail']?></td>
													<td><?php echo $allWarning_list['alarm_date']?></td>
                                                    <td><?php echo $allWarning_list['alarm_date']?></td>
												</tr>
											<?php endforeach?>
										</tbody>
									</table>
								</div>
								<!-- /.table-responsive -->
							</div>
							<!-- /.panel-body -->
						</div>
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
                <div class="col-lg-12">
                    <div class="panel chat-panel panel-primary">
                        <div class="panel-heading">
							<div class="row">
								<div class="col-xs-1">
									<i class="fa fa-ambulance fa-2x"></i>
								</div>
								<div class="col-xs-11 text-left">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapseError"  style="color:#fff">
										保养信息（所有设备）
									</a>
								</div>
							</div>
                        </div>
                        <!-- /.panel-heading -->
						<div id="collapseError" class="panel-collapse collapse">
							<div class="panel-body">
								<div class="table-responsive">
									<table class="table table-striped table-bordered table-hover">
										<thead>
											<tr>
												<th style="width:10%">设备编号</th>
												<th style="width:40%">具体部件</th>
												<th style="width:20%">保养到期时间</th>
												<th style="width:20%">保养完成时间</th>
												<th style="width:10%">保养人签名</th>
											</tr>
										</thead>
										<tbody>
											<?php foreach ($allMaintain as $allMaintain_list):?>
												<tr>
													<td><?php echo $allMaintain_list['cv_id']?></td>
													<td><?php echo $allMaintain_list['maintain_detail']?></td>
													<td><?php echo $allMaintain_list['maintain_date']?></td>
													<td><?php echo $allMaintain_list['maintain_date']?></td>
													<td>张三</td>
												</tr>
											<?php endforeach?>
										</tbody>
									</table>
								</div>
								<!-- /.table-responsive -->
							</div>
							<!-- /.panel-body -->
						</div>
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
            
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            运行效率统计
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <button type="button" class="btn btn-default" disabled="true" style="position: absolute;right:50px;top:50px;z-index:1;" id="effect-fullrange"><i class="fa fa-arrows-alt"></i></button>
                            <div id="effect-bar-chart" style="height:200px"></div>
                            <div id="overview-effect" style="height:60px"></div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
            </div>
            <!-- /.row -->
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            故障次数统计
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div id="error-pie-chart" style="height:120px;width:120px;position: absolute;left:230px;top:40px;z-index:1;"></div>
                            <div id="error-bar-chart" style="height:200px"></div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
            </div>
            <!-- /.row -->
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            故障率统计
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div id="rate-pie-chart" style="height:120px;width:260px;position: absolute;left:230px;top:40px;z-index:1;"></div>
                            <div id="rate-line-chart" style="height:200px"></div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            设备故障率统计
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div id="eqp-bar-chart" style="height:200px"></div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            保养信息统计
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <button type="button" class="btn btn-default" disabled="true" style="position: absolute;right:50px;top:50px;z-index:1;" id="maintain-fullrange"><i class="fa fa-arrows-alt"></i></button>
                            <div id="maintain-stack-chart" style="height:200px"></div>
                            <div id="overview-maintain" style="height:60px"></div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary" style="border:0">
                        <div class="panel-heading">
                            详细地图信息
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body" style="padding:0;">
                            <div id="allEqp_map" style="width:100%;height:560px"></div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

<script type="text/javascript">
	/*var map = new BMap.Map("allEqp_map");          // 创建地图实例  
	map.centerAndZoom(new BMap.Point(116.404, 39.915), 15);
	var i;
	var markers = [];
	//注意：百度和谷歌的经纬度坐标顺序是相反的。
	var points = [new BMap.Point(116.3786889372559,39.90762965106183),
				  new BMap.Point(116.38632786853032,39.90795884517671),
				  new BMap.Point(116.39534009082035,39.907432133833574),
				  new BMap.Point(116.40624058825688,39.90789300648029),
				  new BMap.Point(116.41413701159672,39.90795884517671)
				 ];
	function callback(xyResults){
		var xyResult = null;
		for(var index in xyResults){
			xyResult = xyResults[index];
			if(xyResult.error != 0){continue;}//出错就直接返回;
			var point = new BMap.Point(xyResult.x, xyResult.y);
			var marker = new BMap.Marker(point);
			map.addOverlay(marker);
			map.setCenter(point);// 由于写了这句，每一个被设置的点都是中心点的过程
		}
	}
	setTimeout(function(){
		BMap.Convertor.transMore(points,2,callback);        //一秒之后开始进行坐标转换。参数2，表示是从GCJ-02坐标到百度坐标。参数0，表示是从GPS到百度坐标
	}, 1000);*//*
		var map = new BMap.Map("allEqp_map");          // 创建地图实例  
	map.centerAndZoom(new BMap.Point(116.404, 39.915), 5);
	
	var gpsPoint = [new BMap.Point(118.9187,28.9423),
					new BMap.Point(117.9187,29.9423),
					new BMap.Point(116.9187,27.9423),
					new BMap.Point(115.9187,30.9423),
					new BMap.Point(114.9187,26.9423),
					new BMap.Point(113.9187,21.9423)
					];
					
			
	var markers=[];
	//var marker = new BMap.Marker(gpsPoint[0]);
	//map.addOverlay(marker);
	
	//坐标转换完之后的回调函数
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
	
	setTimeout(function(){
		BMap.Convertor.transMore(gpsPoint,0,callback);},1000     //真实经纬度转成百度坐标
	)*/
</script>  
<!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <!-- jQuery Version 1.11.0 -->
<script src="<?php $tmp=base_url(); echo $tmp.'bootstrap/js/jquery-1.11.0.js'?>"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php $tmp=base_url(); echo $tmp.'bootstrap/js/bootstrap.min.js'?>"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="<?php $tmp=base_url(); echo $tmp.'bootstrap/js/plugins/metisMenu/metisMenu.min.js'?>"></script>

<!-- DataTables JavaScript -->
<script src="<?php $tmp=base_url(); echo $tmp.'bootstrap/js/plugins/dataTables/jquery.dataTables.js'?>"></script>
<script src="<?php $tmp=base_url(); echo $tmp.'bootstrap/js/plugins/dataTables/dataTables.bootstrap.js'?>"></script>

<!-- Custom Theme JavaScript -->
<script src="<?php $tmp=base_url(); echo $tmp.'bootstrap/js/sb-admin-2.js'?>"></script>

<!-- Flot JavaScript -->
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="<?php $tmp=base_url(); echo $tmp.'bootstrap/javascript/flot/excanvas.min.js'?>"></script><![endif]-->
<script language="javascript" type="text/javascript" src="<?php $tmp=base_url(); echo $tmp.'bootstrap/javascript/flot/jquery.flot.js'?>"></script>
<script language="javascript" type="text/javascript" src="<?php $tmp=base_url(); echo $tmp.'bootstrap/javascript/flot/jquery.flot.pie.js'?>"></script>
<script language="javascript" type="text/javascript" src="<?php $tmp=base_url(); echo $tmp.'bootstrap/javascript/flot/jquery.flot.time.js'?>"></script>
<script language="javascript" type="text/javascript" src="<?php $tmp=base_url(); echo $tmp.'bootstrap/javascript/flot/jquery.flot.orderBars.js'?>"></script>
<script language="javascript" type="text/javascript" src="<?php $tmp=base_url(); echo $tmp.'bootstrap/javascript/flot/jquery.flot.stack.min.js'?>"></script>
<script language="javascript" type="text/javascript" src="<?php $tmp=base_url(); echo $tmp.'bootstrap/javascript/flot/jquery.flot.selection.js'?>"></script>

<script type="text/javascript" src='<?php $tmp=base_url(); echo $tmp.'bootstrap/javascript/setslist.js'?>'></script>
	
	
	
    <!--script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
    </script-->
