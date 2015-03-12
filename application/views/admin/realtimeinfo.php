	<style type="text/css">
	.headimg{
		color:#fff;font-weight:bold;text-align:center;line-height:40px;float:left;background-color:rgb(85,193,231);width:40px;height:40px;border-radius:20px
	}
	</style>
	
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
                            <a href="<?php $tmp=base_url(); echo $tmp.'index.php/admin/'.$sysb_encrypt?>"><i class="fa fa-table fa-fw"></i> 所有设备信息</a>
                        </li>
                        <li class="active">
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> 单台设备信息<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
								<a href="<?php echo $tmp.'index.php/admin/'.$dtsb_encrypt?>"> 单台设备概况</a>
                                </li>
                                <li>
                                    <a class="active" href="#"> 实时信息</a>
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
								<a href="<?php echo $tmp.'index.php/admin/'.$cssz_encrypt?>"> 参数设置</a>
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
				<h1 style="height:74px" class="page-header">实时信息<img style="float:right;height:74px" src="<?php $tmp=base_url(); echo $tmp.'img/logo.png'?>"></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-yellow">
						<div class="panel-heading">
							<div class="row">
								<div class="col-lg-4">
									 <h4><i class="fa fa-line-chart"></i>&nbsp;&nbsp;&nbsp;当前设备编号：<span id="SetId"  class="text-danger"><?php echo $cv_id?></span></h4>
								</div>
								<div class="col-lg-4 text-right">
									<h4>设备选择：</h4>
								</div>
								<div class="col-lg-4">
									<select id="cv_id_select" style="width:200px;margin-top:5px">
										<option value="<?php echo $cv_id ?>"><?php echo $cv_id ?></option>
										
										<?php foreach($onlineEqp as $online_item): ?>
											<?php if($online_item['num'] != $cv_id): ?>
												<option value="<?php echo $online_item['href']?>"><?php echo $online_item['num']?></option>
											<?php endif?>
										<?php endforeach ?>
									</select>
									<button type="button" class="btn btn-primary" style="height:26px;margin-top:5px;padding:0 10px" id="select_new_eqp">确定</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							仪表选择
							<input  id="meter_select" style="width:100%;height:90px;overflow:auto" value="发送机转速,燃油位置,电压,运行功率,运行速率,机油压力,排气压力,水温,液压油温,排气温度,A相电流,B相电流,C相电流"/>
						
						</div>
					</div>
				</div>
				<div class="col-lg-4" id="speed_meter">
					<div class="panel panel-yellow">
						<div class="panel-heading">
							<div class="row">
								<div class="col-lg-6 text-right" style="height:80px;">
									<div>当前转速：</div>
									<div><span class="huge" id="speed">00000</span>rpm</div>
									<div>采集时间：</div>
									<div class="update_time">0000-00-00 00:00:00</div>
								</div>
								<div class="col-lg-6">
									<div id="placeholder_speed" style="height:80px;margin-bottom:10px" ></div>
									<div class="progress progress-striped active" style="margin-bottom:0">
									   <div id="speed_img" class="progress-bar " role="progressbar" 
										  aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
									   </div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4" id="fuellevel_meter">
					<div class="panel panel-yellow">
						<div class="panel-heading">
							<div class="row">
								<div class="col-lg-6 text-right">
									<div>当前燃油位置：</div>
									<div><span class="huge" id="fuellevel">00.0</span>%</div>
									<div>采集时间：</div>
									<div class="update_time">0000-00-00 00:00:00</div>
								</div>
								<div class="col-lg-6">
									<div id="placeholder_fuellevel" style="height:80px;margin-bottom:10px" ></div>
									<div class="progress progress-striped active" style="margin-bottom:0">
									   <div id="fuellevel_img" class="progress-bar " role="progressbar" 
										  aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
									   </div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4" id="voltage_meter">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<div class="row">
								<div class="col-lg-6 text-right">
									<div>当前电压值：</div>
									<div><span class="huge" id="voltage">00.0</span>V</div>
									<div>采集时间：</div>
									<div class="update_time">0000-00-00 00:00:00</div>
								</div>
								<div class="col-lg-6">
									<div id="placeholder_voltage" style="height:80px;margin-bottom:10px" ></div>
									<div class="progress progress-striped active" style="margin-bottom:0">
									   <div id="voltage_img" class="progress-bar " role="progressbar" 
										  aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
									   </div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4" id="runpower_meter">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<div class="row">
								<div class="col-lg-6 text-right">
									<div>当前运行功率：</div>
									<div><span class="huge" id="runpower">00.0</span>W</div>
									<div>采集时间：</div>
									<div class="update_time">0000-00-00 00:00:00</div>
								</div>
								<div class="col-lg-6">
									<div id="placeholder_runpower" style="height:80px;margin-bottom:10px" ></div>
									<div class="progress progress-striped active" style="margin-bottom:0">
									   <div id="runpower_img" class="progress-bar " role="progressbar" 
										  aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
									   </div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4" id="runrate_meter">
					<div class="panel panel-green">
						<div class="panel-heading">
							<div class="row">
								<div class="col-lg-6 text-right">
									<div>当前运行速率：</div>
									<div><span class="huge" id="runrate">00.0</span></div>
									<div>采集时间：</div>
									<div class="update_time">0000-00-00 00:00:00</div>
								</div>
								<div class="col-lg-6">
									<div id="placeholder_runrate" style="height:80px;margin-bottom:10px" ></div>
									<div class="progress progress-striped active" style="margin-bottom:0">
									   <div id="runrate_img" class="progress-bar " role="progressbar" 
										  aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
									   </div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4" id="oilpress_meter">
					<div class="panel panel-green">
						<div class="panel-heading">
							<div class="row">
								<div class="col-lg-6 text-right">
									<div>当前机油压力：</div>
									<div><span class="huge" id="oilpress">00.0</span>Bar</div>
									<div>采集时间：</div>
									<div class="update_time">0000-00-00 00:00:00</div>
								</div>
								<div class="col-lg-6">
									<div id="placeholder_oilpress" style="height:80px;margin-bottom:10px" ></div>
									<div class="progress progress-striped active" style="margin-bottom:0">
									   <div id="oilpress_img" class="progress-bar " role="progressbar" 
										  aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
									   </div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4" id="gaspress_meter">
					<div class="panel panel-yellow">
						<div class="panel-heading">
							<div class="row">
								<div class="col-lg-6 text-right">
									<div>当前排气压力：</div>
									<div><span class="huge" id="gaspress">00000</span>Bar</div>
									<div>采集时间：</div>
									<div class="update_time">0000-00-00 00:00:00</div>
								</div>
								<div class="col-lg-6">
									<div id="placeholder_gaspress" style="height:80px;margin-bottom:10px" ></div>
									<div class="progress progress-striped active" style="margin-bottom:0">
									   <div id="gaspress_img" class="progress-bar " role="progressbar" 
										  aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
									   </div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4" id="watertemp_meter">
					<div class="panel panel-yellow">
						<div class="panel-heading">
							<div class="row">
								<div class="col-lg-6 text-right">
									<div>当前水温度：</div>
									<div><span class="huge" id="watertemp">00.0</span>℃</div>
									<div>采集时间：</div>
									<div class="update_time">0000-00-00 00:00:00</div>
								</div>
								<div class="col-lg-6">
									<div id="placeholder_watertemp" style="height:80px;margin-bottom:10px" ></div>
									<div class="progress progress-striped active" style="margin-bottom:0">
									   <div id="watertemp_img" class="progress-bar " role="progressbar" 
										  aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
									   </div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4" id="oiltemp_meter">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<div class="row">
								<div class="col-lg-6 text-right">
									<div>当前液压油温度：</div>
									<div><span class="huge" id="oiltemp">00.0</span>℃</div>
									<div>采集时间：</div>
									<div class="update_time">0000-00-00 00:00:00</div>
								</div>
								<div class="col-lg-6">
									<div id="placeholder_oiltemp" style="height:80px;margin-bottom:10px" ></div>
									<div class="progress progress-striped active" style="margin-bottom:0">
									   <div id="oiltemp_img" class="progress-bar " role="progressbar" 
										  aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
									   </div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4" id="gastemp_meter">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<div class="row">
								<div class="col-lg-6 text-right">
									<div>当前排气温度：</div>
									<div><span class="huge" id="gastemp">00.0</span>℃</div>
									<div>采集时间：</div>
									<div class="update_time">0000-00-00 00:00:00</div>
								</div>
								<div class="col-lg-6">
									<div id="placeholder_gastemp" style="height:80px;margin-bottom:10px" ></div>
									<div class="progress progress-striped active" style="margin-bottom:0">
									   <div id="gastemp_img" class="progress-bar " role="progressbar" 
										  aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
									   </div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4" id="acur_meter">
					<div class="panel panel-green">
						<div class="panel-heading">
							<div class="row">
								<div class="col-lg-6 text-right">
									<div>当前A相电流：</div>
									<div><span class="huge" id="acur">00.0</span>A</div>
									<div>采集时间：</div>
									<div class="update_time">0000-00-00 00:00:00</div>
								</div>
								<div class="col-lg-6">
									<div id="placeholder_acur" style="height:80px;margin-bottom:10px" ></div>
									<div class="progress progress-striped active" style="margin-bottom:0">
									   <div id="acur_img" class="progress-bar " role="progressbar" 
										  aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
									   </div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4" id="bcur_meter">
					<div class="panel panel-green">
						<div class="panel-heading">
							<div class="row">
								<div class="col-lg-6 text-right">
									<div>当前B相电流：</div>
									<div><span class="huge" id="bcur">00.0</span>A</div>
									<div>采集时间：</div>
									<div class="update_time">0000-00-00 00:00:00</div>
								</div>
								<div class="col-lg-6">
									<div id="placeholder_bcur" style="height:80px;margin-bottom:10px" ></div>
									<div class="progress progress-striped active" style="margin-bottom:0">
									   <div id="bcur_img" class="progress-bar " role="progressbar" 
										  aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
									   </div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4" id="ccur_meter">
					<div class="panel panel-green">
						<div class="panel-heading">
							<div class="row">
								<div class="col-lg-6 text-right">
									<div>当前C相电流：</div>
									<div><span class="huge" id="ccur">00.0</span>A</div>
									<div>采集时间：</div>
									<div class="update_time">0000-00-00 00:00:00</div>
								</div>
								<div class="col-lg-6">
									<div id="placeholder_ccur" style="height:80px;margin-bottom:10px" ></div>
									<div class="progress progress-striped active" style="margin-bottom:0">
									   <div id="ccur_img" class="progress-bar " role="progressbar" 
										  aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
									   </div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
	
	<div class="modal fade" id="eqpStatus" tabindex="-1" role="dialog" 
	   aria-labelledby="myModalLabel" aria-hidden="true">
	   <div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" 
				   data-dismiss="modal" aria-hidden="true">
					  &times;
					</button>
					<h4 class="modal-title" id="myModalLabel">
						提示
					</h4>
				</div>
				<div class="modal-body">
					<p>该设备当前不在线！</p>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal -->
	</div>
	<script type="text/javascript" src='<?php $tmp=base_url(); echo $tmp.'bootstrap/js/modernizr.js'?>'></script>
	
    <!-- jQuery Version 1.11.0 -->
    <script src="<?php $tmp=base_url(); echo $tmp.'bootstrap/js/jquery-1.11.0.js'?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php $tmp=base_url(); echo $tmp.'bootstrap/js/bootstrap.min.js'?>"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php $tmp=base_url(); echo $tmp.'bootstrap/js/plugins/metisMenu/metisMenu.min.js'?>"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php $tmp=base_url(); echo $tmp.'bootstrap/js/sb-admin-2.js'?>"></script>
	
	<!-- slider -->
	<script type="text/javascript" src='<?php $tmp=base_url(); echo $tmp.'bootstrap/js/bootstrap-slider.js'?>'></script>

	<!-- select2 -->
	<script type="text/javascript" src='<?php $tmp=base_url(); echo $tmp.'bootstrap/select2-3.5.1/select2.js'?>'></script>	
	
    <!-- Flot JavaScript -->
    <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="<?php $tmp=base_url(); echo $tmp.'bootstrap/javascript/flot/excanvas.min.js'?>"></script><![endif]-->
    <script language="javascript" type="text/javascript" src="<?php $tmp=base_url(); echo $tmp.'bootstrap/javascript/flot/jquery.flot.js'?>"></script>
    <script language="javascript" type="text/javascript" src="<?php $tmp=base_url(); echo $tmp.'bootstrap/javascript/flot/jquery.flot.pie.js'?>"></script>

    <script language="javascript" type="text/javascript" src="<?php $tmp=base_url(); echo $tmp.'bootstrap/javascript/realtimeinfo.js'?>"></script>
	
 <script>
	function setTab(name,cursel,n){
	for(i=1;i<=n;i++){
	var menu=document.getElementById(name+i);
	var con=document.getElementById("con_"+name+"_"+i);
	menu.className=i==cursel?"active":"";
	con.style.display=i==cursel?"block":"none";
	}
	}
 </script>

<!--script type="text/javascript">
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
var content = document.getElementsByClassName("btn-round");

function LinkClick(e)
{
	var a = this.children[0].className;
	if (a =="glyphicon glyphicon-chevron-up"){
		this.children[0].className = "glyphicon glyphicon-chevron-down";
	}else{
		this.children[0].className = "glyphicon glyphicon-chevron-up";
	}
}

for(var i=0; i<content.length;i++){
	addEventSimple(content[i],'click',LinkClick);
}
</script-->
<script type="text/javascript">
$(document).ready(function() {
$('#updateInterval').slider({
				tooltip: 'always'
	        });
});
</script>
<script type="text/javascript">
function setPromot(){
	//alert(11);
}
</script>
