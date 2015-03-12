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
						<a href="<?php echo $tmp.'index.php/admin/'.$sysb_encrypt?>"><i class="fa fa-table fa-fw"></i> 所有设备信息</a>
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
					<li class="active">
						<a href="#"><i class="fa fa-wrench fa-fw"></i> 后台设置<span class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
							<li>
								<a class="active" href="#"> 参数设置</a>
							</li>
							<li>
								<a href="<?php echo $tmp.'index.php/admin/'.$zhsz_encrypt?>"> 帐户设置</a>
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
				<h1 style="height:74px" class="page-header">参数设置<img style="float:right;height:74px" src="<?php $tmp=base_url(); echo $tmp.'img/logo.png'?>"></h1>
			</div>
			<!-- /.col-lg-12 -->
		</div>
		<!-- /.row -->
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						参数设置
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form role="form">
									<div class="table-responsive">
										<table class="table table-striped table-bordered table-hover">
											<thead>
												<tr>
													<th style="width:25%">参数名称</th>
													<th style="width:25%">报警值</th>
													<th style="width:25%">故障值</th>
													<th style="width:25%">是否在面板上显示</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>转速</td>
													<td>
														<div class="input-group">
															<input type="text" class="form-control" id="Speed_alarm">
															<span class="input-group-addon">rpm</span>
														</div>
													</td>
													<td>
														<div class="input-group">
															<input type="text" class="form-control" id="Speed_stop">
															<span class="input-group-addon">rpm</span>
														</div>
													</td>
													<td>
														<button style="margin:5px;" type="button" id="Speed_display" class="btn-switch btn btn-success active" data-toggle="button">是</button>
													</td>
												</tr>
												<!--tr>
													<td>燃油位</td>
													<td>
														<div class="input-group">
															<input type="text" class="form-control">
															<span class="input-group-addon">%</span>
														</div>
													</td>
													<td>
														<div class="input-group">
															<input type="text" class="form-control">
															<span class="input-group-addon">%</span>
														</div>
													</td>
													<td>
														<button style="margin:5px;" type="button" class="btn-switch btn btn-success active" data-toggle="button">是</button>
													</td>
												</tr-->
												<tr>
													<td>电压</td>
													<td>
														<div class="input-group">
															<input type="text" class="form-control" id="Voltage_alarm">
															<span class="input-group-addon">V</span>
														</div>
													</td>
													<td>
														<div class="input-group">
															<input type="text" class="form-control" id="Voltage_stop">
															<span class="input-group-addon">V</span>
														</div>
													</td>
													<td>
														<button style="margin:5px;" type="button" id="Voltage_display" class="btn-switch btn btn-success active" data-toggle="button">是</button>
													</td>
												</tr>
												<!--tr>
													<td>运行功率</td>
													<td>
														<div class="input-group">
															<input type="text" class="form-control">
															<span class="input-group-addon"></span>
														</div>
													</td>
													<td>
														<div class="input-group">
															<input type="text" class="form-control">
															<span class="input-group-addon"></span>
														</div>
													</td>
													<td>
														<button style="margin:5px;" type="button" class="btn-switch btn btn-success active" data-toggle="button">是</button>
													</td>
												</tr>
												<tr>
													<td>运行速率</td>
													<td>
														<div class="input-group">
															<input type="text" class="form-control">
															<span class="input-group-addon"></span>
														</div>
													</td>
													<td>
														<div class="input-group">
															<input type="text" class="form-control">
															<span class="input-group-addon"></span>
														</div>
													</td>
													<td>
														<button style="margin:5px;" type="button" class="btn-switch btn btn-success active" data-toggle="button">是</button>
													</td>
												</tr-->
												<tr>
													<td>机油压力</td>
													<td>
														<div class="input-group">
															<input type="text" class="form-control" id="Oilpress_alarm">
															<span class="input-group-addon">bar</span>
														</div>
													</td>
													<td>
														<div class="input-group">
															<input type="text" class="form-control" id="Oilpress_stop">
															<span class="input-group-addon">bar</span>
														</div>
													</td>
													<td>
														<button style="margin:5px;" type="button" id="Oilpress_display" class="btn-switch btn btn-success active" data-toggle="button">是</button>
													</td>
												</tr>
												<tr>
													<td>排气压力</td>
													<td>
														<div class="input-group">
															<input type="text" class="form-control" id="Gaspress_alarm">
															<span class="input-group-addon">bar</span>
														</div>
													</td>
													<td>
														<div class="input-group">
															<input type="text" class="form-control" id="Gaspress_stop">
															<span class="input-group-addon">bar</span>
														</div>
													</td>
													<td>
														<button style="margin:5px;" type="button" id="Gaspress_display" class="btn-switch btn btn-success active" data-toggle="button">是</button>
													</td>
												</tr>
												<tr>
													<td>水温度</td>
													<td>
														<div class="input-group">
															<input type="text" class="form-control" id="Watertemp_alarm">
															<span class="input-group-addon">℃</span>
														</div>
													</td>
													<td>
														<div class="input-group">
															<input type="text" class="form-control" id="Watertemp_stop">
															<span class="input-group-addon">℃</span>
														</div>
													</td>
													<td>
														<button style="margin:5px;" type="button" id="Watertemp_display" class="btn-switch btn btn-success active" data-toggle="button">是</button>
													</td>
												</tr>
												<tr>
													<td>机油温度</td>
													<td>
														<div class="input-group">
															<input type="text" class="form-control" id="Oiltemp_alarm">
															<span class="input-group-addon">℃</span>
														</div>
													</td>
													<td>
														<div class="input-group">
															<input type="text" class="form-control" id="Oiltemp_stop">
															<span class="input-group-addon">℃</span>
														</div>
													</td>
													<td>
														<button style="margin:5px;" type="button" id="Oiltemp_display" class="btn-switch btn btn-success active" data-toggle="button">是</button>
													</td>
												</tr>
												<tr>
													<td>排气温度</td>
													<td>
														<div class="input-group">
															<input type="text" class="form-control" id="Gastemp_alarm">
															<span class="input-group-addon">℃</span>
														</div>
													</td>
													<td>
														<div class="input-group">
															<input type="text" class="form-control" id="Gastemp_stop">
															<span class="input-group-addon">℃</span>
														</div>
													</td>
													<td>
														<button style="margin:5px;" type="button" id="Gastemp_display" class="btn-switch btn btn-success active" data-toggle="button">是</button>
													</td>
												</tr>
												<tr>
													<td>A相电流</td>
													<td>
														<div class="input-group">
															<input type="text" class="form-control" id="Acur_alarm">
															<span class="input-group-addon">A</span>
														</div>
													</td>
													<td>
														<div class="input-group">
															<input type="text" class="form-control" id="Acur_stop">
															<span class="input-group-addon">A</span>
														</div>
													</td>
													<td>
														<button style="margin:5px;" type="button" id="Acur_display" class="btn-switch btn btn-success active" data-toggle="button">是</button>
													</td>
												</tr>
												<tr>
													<td>B相电流</td>
													<td>
														<div class="input-group">
															<input type="text" class="form-control" id="Bcur_alarm">
															<span class="input-group-addon">A</span>
														</div>
													</td>
													<td>
														<div class="input-group">
															<input type="text" class="form-control" id="Bcur_stop">
															<span class="input-group-addon">A</span>
														</div>
													</td>
													<td>
														<button style="margin:5px;" type="button" id="Bcur_display" class="btn-switch btn btn-success active" data-toggle="button">是</button>
													</td>
												</tr>
												<tr>
													<td>C相电流</td>
													<td>
														<div class="input-group">
															<input type="text" class="form-control" id="Ccur_alarm">
															<span class="input-group-addon">A</span>
														</div>
													</td>
													<td>
														<div class="input-group">
															<input type="text" class="form-control" id="Ccur_stop">
															<span class="input-group-addon">A</span>
														</div>
													</td>
													<td>
														<button style="margin:5px;" type="button" id="Ccur_display" class="btn-switch btn btn-success active" data-toggle="button">是</button>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="col-lg-4">
										<!-- /.table-responsive -->
										<button type="button" class="btn btn-primary" onclick="infoset_submit()">提交</button>
										<button type="cancel" class="btn btn-primary">取消</button>
										<button type="reset" class="btn btn-primary">恢复默认值</button>
									</div>
									<div class="col-lg-8">
										<div class="panel panel-yellow">
											<div class="panel-heading">
												注意
											</div>
											<div class="panel-body" style="text-align:center">
												<p>若某项参数无需设置报警值或故障值，请在相关输入框中留空白！</p>
											</div>
										</div>
									</div>
								</form>
							</div>
							<!-- /.col-lg-6 (nested) -->
						</div>
						<!-- /.row (nested) -->
					</div>
					<!-- /.panel-body -->
				</div>
				<!-- /.panel -->
			</div>
			<!-- /.col-lg-12 -->
		</div>
		<!-- /.row -->
	</div>
	<!-- /#page-wrapper -->

</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" 
   aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
		<div class="panel panel-danger" id="myModal_type" style="width:280px;margin:0 auto;">
		   <div class="panel-heading">
			  <button type="button" class="close" 
			   data-dismiss="modal" aria-hidden="true">
				  &times;
				</button>
				<h4 class="modal-title" id="myModal_Label">
					提示
				</h4>
		   </div>
		   <div class="panel-body" id="myModal_content" style="text-align:center">
		   </div>
		</div>
	</div><!-- /.modal -->
</div>
<!-- /#wrapper -->

<!-- jQuery Version 1.11.0 -->
<script src="<?php $tmp=base_url(); echo $tmp.'bootstrap/js/jquery-1.11.0.js'?>"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php $tmp=base_url(); echo $tmp.'bootstrap/js/bootstrap.min.js'?>"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="<?php $tmp=base_url(); echo $tmp.'bootstrap/js/plugins/metisMenu/metisMenu.min.js'?>"></script>

<!-- Custom Theme JavaScript -->
<script src="<?php $tmp=base_url(); echo $tmp.'bootstrap/js/sb-admin-2.js'?>"></script>

<!-- Custom Theme JavaScript -->
<script src="<?php $tmp=base_url(); echo $tmp.'bootstrap/javascript/infoset.js'?>"></script>

<script type="text/javascript">
function addEventSimple(obj,evt,fn){
	var eventHandler = fn;
    if(obj)
    {
        eventHander = function(e)
        {
            fn.call(obj, e);
        }
    }
	if(obj.addEventListener){
		obj.addEventListener(evt,fn);
	}else if(obj.attachEvent){
		obj.attachEvent('on'+evt,fn);
	}
}
var content = document.getElementsByClassName("btn-switch ");

function LinkClick(e)
{
	var a = this.className;
	if (a =="btn-switch btn btn-success active"){
		this.className = "btn-switch btn btn-default active";
		this.innerHTML = "否";
	}else{
		this.className = "btn-switch btn btn-success";
		this.innerHTML = "是";
	}
}

for(var i=0; i<content.length;i++){
	addEventSimple(content[i],'click',LinkClick);
}
</script>
