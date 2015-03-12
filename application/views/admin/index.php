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
			<a class="navbar-brand" href="#">后台管理 v1.0</a>
		</div>
		<!-- /.navbar-header -->

		<ul class="nav navbar-top-links navbar-right">
			<!-- /.dropdown -->
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">
					<i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
				</a>
				<ul class="dropdown-menu dropdown-user">
					<li><a href="<?php $tmp=base_url(); echo $tmp.'index.php/admin/'.$zhsz_encrypt?>"><i class="fa fa-gear fa-fw"></i> 帐户设置</a>
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
						<a class="active" href="#"><i class="fa fa-dashboard fa-fw"></i> 管理首页</a>
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
				<h1 style="height:74px" class="page-header">管理首页<img style="float:right;height:74px" src="<?php $tmp=base_url(); echo $tmp.'img/logo.png'?>"></h1>
			</div>
			<!-- /.col-lg-12 -->
		</div>
		<!-- /.row -->
		<div class="row">
			<div class="col-lg-3 col-md-6">
				<div class="panel panel-green">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-3">
								<i class="fa fa-list-alt fa-5x"></i>
							</div>
							<div class="col-xs-9 text-right">
								<div class="huge"><?php echo $alleqpNum?>台</div>
								<div>所有设备概况</div>
							</div>
						</div>
					</div>
					<a>
						<div class="panel-footer" style="cursor:pointer" data-toggle="modal" data-target="#totalEqp">
							<span class="pull-left">查看详情</span>
							<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
							<div class="clearfix"></div>
						</div>
						<div class="modal fade" id="totalEqp" tabindex="-1" role="dialog" 
							   aria-labelledby="myModalLabel" aria-hidden="true">
						   <div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" 
									   data-dismiss="modal" aria-hidden="true">
										  &times;
										</button>
										<h4 class="modal-title" id="myModalLabel">
											所有设备概况
										</h4>
									</div>
									<div class="modal-body">
										<div class="panel chat-panel panel-default">
											<div class="panel-body" >
												<div class="table-responsive">
													<table class="table table-striped table-bordered table-hover">
														<thead>
															<tr>
																<th>设备编号</th>
																<th>设备类型</th>
                                                                <th>机型</th>
																<th>设备添加时间</th>
															</tr>
														</thead>
														<tbody>
															<?php foreach ($allEqp as $allEqp_item): ?>
															<tr>
																<td><?php echo $allEqp_item['cv_id'] ?></td>
																<td><?php echo $allEqp_item['cv_function'] ?></td>
                                                                <td><?php echo $allEqp_item['cv_function'] ?></td>
																<td><?php echo $allEqp_item['record_date'] ?></td>
															</tr>
															<?php endforeach ?>
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>
								</div><!-- /.modal-content -->
							</div><!-- /.modal -->
						</div>
					</a>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-3">
								<i class="fa fa-tasks fa-5x"></i>
							</div>
							<div class="col-xs-9 text-right">
								<div class="huge"><?php echo $onlineeqpNum?>台</div>
								<div>在线设备概况</div>
							</div>
						</div>
					</div>
					<a>
						<div class="panel-footer" style="cursor:pointer" data-toggle="modal" data-target="#onlineEqp">
							<span class="pull-left">查看详情</span>
							<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
							<div class="clearfix"></div>
						</div>
						<div class="modal fade" id="onlineEqp" tabindex="-1" role="dialog" 
							   aria-labelledby="myModalLabel" aria-hidden="true">
						   <div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" 
									   data-dismiss="modal" aria-hidden="true">
										  &times;
										</button>
										<h4 class="modal-title" id="myModalLabel">
											在线设备概况
										</h4>
									</div>
									<div class="modal-body">
										<div class="panel chat-panel panel-default">
											<div class="panel-body">
												<div class="table-responsive">
													<table class="table table-striped table-bordered table-hover">
														<thead>
															<tr>
																<th>设备编号</th>
																<th>设备类型</th>
																<th>机型</th>
															</tr>
														</thead>
														<tbody>
															<?php foreach ($onlineEqp as $onlineEqp_item): ?>
															<tr>
																<td><?php echo $onlineEqp_item['cv_id'] ?></td>
																<td><?php echo $allEqp_item['cv_function'] ?></td>
																<td><?php echo $allEqp_item['cv_function'] ?></td>
															</tr>
															<?php endforeach ?>
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>
								</div><!-- /.modal-content -->
							</div><!-- /.modal -->
						</div>
					</a>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="panel panel-yellow">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-3">
								<i class="fa fa-warning fa-5x"></i>
							</div>
							<div class="col-xs-9 text-right">
								<div class="huge"><?php echo $alarmNum?>条</div>
								<div>在线报警信息</div>
							</div>
						</div>
					</div>
					<a>
						<div class="panel-footer" style="cursor:pointer" data-toggle="modal" data-target="#warningEqp">
							<span class="pull-left">查看详情</span>
							<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
							<div class="clearfix"></div>
						</div>
						<div class="modal fade" id="warningEqp" tabindex="-1" role="dialog" 
							   aria-labelledby="myModalLabel" aria-hidden="true">
						   <div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" 
									   data-dismiss="modal" aria-hidden="true">
										  &times;
										</button>
										<h4 class="modal-title" id="myModalLabel">
											在线报警信息
										</h4>
									</div>
									<div class="modal-body">
										<div class="panel chat-panel panel-default">
											<div class="panel-body">
												<div class="table-responsive">
													<table class="table table-striped table-bordered table-hover">
														<thead>
															<tr>
																<th>设备编号</th>
                                                                <th>类型</th>
																<th>机型</th>
																<th>报警时间</th>
																<th>报警内容</th>
															</tr>
														</thead>
														
														<tbody>
															<?php foreach ($allAlarm as $allAlarm_item): ?>
															<tr>
																<td><?php echo $allAlarm_item['cv_id'] ?></td>
																<td><?php echo $allEqp_item['cv_function'] ?></td>
																<td><?php echo $allEqp_item['cv_function'] ?></td>
																<td><?php echo $allAlarm_item['alarm_date'] ?></td>
																<td><?php echo $allAlarm_item['alarm_detail'] ?></td>
															</tr>
															<?php endforeach ?>
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>
								</div><!-- /.modal-content -->
							</div><!-- /.modal -->
						</div>
					</a>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="panel panel-red">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-3">
								<i class="fa fa-comments fa-5x"></i>
							</div>
							<div class="col-xs-9 text-right">
								<div class="huge"><?php echo $maintainNum?>条</div>
								<div>今日备注信息</div>
							</div>
						</div>
					</div>
					<a>
						<div class="panel-footer" style="cursor:pointer" data-toggle="modal" data-target="#errorEqp">
							<span class="pull-left">查看详情</span>
							<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
							<div class="clearfix"></div>
						</div>
						<div class="modal fade" id="errorEqp" tabindex="-1" role="dialog" 
							   aria-labelledby="myModalLabel" aria-hidden="true">
						   <div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" 
									   data-dismiss="modal" aria-hidden="true">
										  &times;
										</button>
										<h4 class="modal-title" id="myModalLabel">
											今日备注信息
										</h4>
									</div>
									<div class="modal-body">
										<div class="panel chat-panel panel-default">
											<div class="panel-body">
												<div class="table-responsive">
													<table class="table table-striped table-bordered table-hover">
														<thead>
															<tr>
																<th>备注时间</th>
																<th>备注人</th>
																<th>备注内容</th>
															</tr>
														</thead>
														
														<tbody>
															<?php foreach ($allMaintain as $allMaintain_item): ?>
															<tr>
                                                                <td><?php echo $allMaintain_item['maintain_date'] ?></td>
																<td><?php echo $allMaintain_item['cv_id'] ?></td>
																<td>备注内容由备注人填写，内容长度限制在xx个字符。此处仅显示当天增加的备注。</td>
															</tr>
															<?php endforeach ?>
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>
								</div><!-- /.modal-content -->
							</div><!-- /.modal -->
						</div>
					</a>
				</div>
			</div>
		</div>
		<!-- /.row -->
		<div class="row">
			<div class="col-lg-7">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<i class="fa fa-bar-chart-o fa-fw"></i>设备状态信息
						<!--div class="pull-right">
							<div class="btn-group">
								<button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
									Actions
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu pull-right" role="menu">
									<li><a href="#">Action</a>
									</li>
									<li><a href="#">Another action</a>
									</li>
									<li><a href="#">Something else here</a>
									</li>
									<li class="divider"></li>
									<li><a href="#">Separated link</a>
									</li>
								</ul>
							</div>
						</div-->
					</div>
					<!-- /.panel-heading -->
					<div class="panel-body">
						<div id="set-status-chart" style="height:230px"></div>
					</div>
					<!-- /.panel-body -->
				</div>
			</div>
			<!-- /.col-lg-7 -->
			<div class="col-lg-5">
				
				<div class="panel panel-primary" style="border:0">
					<div class="panel-heading" style="border-top: 1px solid #428bca;border-left: 1px solid #428bca;border-right: 1px solid #428bca;">
						<i class="fa fa-globe fa-fw"></i>地图信息
					</div>
					<div class="panel-body" style="padding:0;">
						<div id="allEqp_map" style="width:100%;height:260px"></div>
					</div>
					<!-- /.panel-body -->
				</div>
				<!-- /.panel -->
			</div>
			<!-- /.col-lg-5 -->
		</div>
		<!-- /.row -->
		<!-- /.row -->
		<style type="text/css">
        .self-title-sjl{
            background: none repeat scroll 0% 0% rgba(255, 255, 255, 0.2);
            color: rgba(255, 255, 255, 0.9);
            width: 100%;
            height: 28px;
            padding: 5px 0px;
            position: absolute;
            top: 0px;
        }
		</style>
            <div class="row">
			<!--div class="col-lg-1"></div-->
			<div class="col-lg-4 maintain_info">
				<div class="panel panel-primary">
						<!--div class="self-title-sjl">空滤器保养情况</div-->
					<div class="panel-heading" >
                        <div class="row text-center">
                            <p>空滤器保养情况</p>
                        </div>
                        <div class="row dynamic">
                            <div class="col-lg-5">
                                <div class="row">
                                    <div class="dount-holder" id="maintain-donut1" style="height:100px"></div>
                                </div>
                            </div>
                            <div class="col-lg-7 text-center klq_maintain">
                                <br>
                                <div>鼠标移动至饼图区域</div>
								<div>可查看概况，</div>
								<div>或点击饼图区域</div>
								<div>以查看详情</div>
                            </div>
                        </div>
					</div>
					<div class="panel-footer">
						<span class="pull-left">查看详情</span>
						<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
						<div class="clearfix"></div>
					</div>
				</div>
            </div>
            <!-- /.col-lg-4 -->
            <div style="color:#fff;background-color:#333;height:300px;width:500px;display:none;position: absolute;z-index:1;filter:alpha(opacity=80); -moz-opacity:0.8; opacity:0.8;padding:10px;border-radius:6px;border:solid 1px #000;" id="detail">
                <p>详细保养信息</p>
            </div>
            <!-- /.col-lg-4 -->
            
			<div class="col-lg-2 maintain_info">
				<div class="panel panel-primary">
					<div class="panel-heading" >
                        <div class="row text-center">
                            <p>油滤器保养情况</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="dount-holder" id="maintain-donut2" style="height:100px"></div>
                                </div>
                            </div>
                        </div>
					</div>
					<div class="panel-footer">
						<span class="pull-left">查看详情</span>
						<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
						<div class="clearfix"></div>
					</div>
				</div>
                        </div>
                        <!-- /.col-lg-4 -->
			<div class="col-lg-2 maintain_info">
				<div class="panel panel-primary">
					<div class="panel-heading" >
                        <div class="row text-center">
                            <p>油分器保养情况</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="dount-holder" id="maintain-donut3" style="height:100px"></div>
                                </div>
                            </div>
                        </div>
					</div>
					<div class="panel-footer">
						<span class="pull-left">查看详情</span>
						<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
						<div class="clearfix"></div>
					</div>
				</div>
                        </div>
                        <!-- /.col-lg-4 -->
			<div class="col-lg-2 maintain_info">
				<div class="panel panel-primary">
					<div class="panel-heading" >
                        <div class="row text-center">
                            <p>润滑油保养情况</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="dount-holder" id="maintain-donut4" style="height:100px"></div>
                                </div>
                            </div>
                        </div>
					</div>
					<div class="panel-footer">
						<span class="pull-left">查看详情</span>
						<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
						<div class="clearfix"></div>
					</div>
				</div>
                        </div>
                        <!-- /.col-lg-4 -->
			<div class="col-lg-2 maintain_info">
				<div class="panel panel-primary">
					<div class="panel-heading" >
                        <div class="row text-center">
                            <p>润滑脂保养情况</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="dount-holder" id="maintain-donut5" style="height:100px"></div>
                                </div>
                            </div>
                        </div>
					</div>
					<div class="panel-footer">
						<span class="pull-left">查看详情</span>
						<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
						<div class="clearfix"></div>
					</div>
				</div>
                        </div>
                        <!-- /.col-lg-4 -->

		</div>
                <!-- /.row -->
	</div>
	<!-- /#page-wrapper -->

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

<!-- Flot JavaScript -->
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="<?php $tmp=base_url(); echo $tmp.'bootstrap/javascript/flot/excanvas.min.js'?>"></script><![endif]-->
<script language="javascript" type="text/javascript" src="<?php $tmp=base_url(); echo $tmp.'bootstrap/javascript/flot/jquery.flot.js'?>"></script>
<script language="javascript" type="text/javascript" src="<?php $tmp=base_url(); echo $tmp.'bootstrap/javascript/flot/jquery.flot.crosshair.js'?>"></script>
<script language="javascript" type="text/javascript" src="<?php $tmp=base_url(); echo $tmp.'bootstrap/javascript/flot/jquery.flot.pie.js'?>"></script>
<script language="javascript" type="text/javascript" src="<?php $tmp=base_url(); echo $tmp.'bootstrap/javascript/flot/jquery.flot.time.js'?>"></script>
<script language="javascript" type="text/javascript" src="<?php $tmp=base_url(); echo $tmp.'bootstrap/javascript/flot/jquery.flot.crosshair.js'?>"></script>

<!-- Chart JavaScript -->
<script src="<?php $tmp=base_url(); echo $tmp.'bootstrap/javascript/admin.js'?>" charset="utf-8"></script>