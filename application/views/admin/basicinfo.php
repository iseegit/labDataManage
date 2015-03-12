<!--script type="text/javascript" src="http://api.map.baidu.com/api?v=1.5&ak=09a12fee552d5ad4aa2de5c0626c9c10"></script>
<script type="text/javascript" src="http://developer.baidu.com/map/jsdemo/demo/convertor.js"></script--> 
 <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation"  style="margin-bottom: 0;background: none repeat scroll 0% 0% #080808;">
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
                        <li class="active">
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> 单台设备信息<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#" class="active"> 单台设备概况</a>
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
				<h1 style="height:74px" class="page-header">单台设备概况<img style="float:right;height:74px" src="<?php $tmp=base_url(); echo $tmp.'img/logo.png'?>"></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
				<div class="col-lg-7">
					<div class="panel panel-primary">
						<div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3 text-center">
                                    <i class="fa fa-home fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div><span class="huge" id="SetId"><?php echo $cv_id?></span>号</div>
                                    <p>设备基本信息</p>
                                </div>	
                            </div>	
						</div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-xs-7">
                                    <div id="allEqp_map" style="width:100%;height:230px"></div>
                                </div>	
                                <div class="col-xs-5">
                                    <div><i class="fa fa-sort-amount-asc" style="padding:5px"></i>设备类型:<strong class="text-danger"><?php echo $cv_info['cv_function'] ?></strong></div>
                                    <div><i class="fa fa-tag" style="padding:5px"></i>型号:<strong class="text-danger"><?php echo $cv_info['cv_model'] ?></strong></div>
                                    <div><i class="fa fa-tachometer" style="padding:5px"></i>控制器型号:<strong class="text-danger"><?php echo $cv_info['cv_name'] ?></strong></div>
                                    <div><i class="fa fa-clock-o" style="padding:5px"></i>录入时间:<strong class="text-danger"><?php echo $cv_info['record_date'] ?></strong></div>
                                    <div><i class="fa fa-map-marker" style="padding:5px"></i>经度:<strong class="text-danger" id="gps_long"><?php echo $news_item['GPS_long'] ?></strong></div>
                                    <div><i class="fa fa-map-marker" style="padding:5px"></i>纬度:<strong class="text-danger" id="gps_lat"><?php echo $news_item['GPS_lat'] ?></strong></div>
									<br>
									<p>设备选择：</p>
									<select id="cv_id_select" style="width:200px;margin-top:5px">
										<option value="<?php echo $cv_id ?>"><?php echo $cv_id ?></option>
										<?php foreach($allEqp as $allEqp_item): ?>
											<?php if($allEqp_item['num'] != $cv_id): ?>
												<option value="<?php echo $allEqp_item['href']?>"><?php echo $allEqp_item['num']?></option>
											<?php endif?>
										<?php endforeach ?>
									</select>
									<button type="button" class="btn btn-primary" style="height:26px;margin-top:5px;padding:0 10px" id="select_new_eqp">确定</button>
                                </div>
                            </div>	
						</div>	
						<!--/div-->
					</div>
					<!-- /.panel -->
				</div>
			<!-- /.col-lg-7 -->
			<div class="col-lg-5">
				
				<div class="panel panel-primary">
					<div class="panel-heading">
						<i class="fa fa-gears fa-fw"></i>保养信息
					</div>
					<div class="panel-body">
						<div class="row">
                            <div class="col-lg-3">
								<div style="height:60px;width:100%;position: absolute;left:35px;top:20px;z-index:1;">
								<?php echo $maintain[0]['maintain_detail']/20?>%
								</div>
                                <div id="kl_maintain" style="width:100%;height:60px"></div>
                            </div>
                            <div class="col-lg-9">
                                空滤器保养周期剩余时间：<span id="kl_maintain_value" ><?php echo $maintain[0]['maintain_detail']?></span>
                                <div class="progress">
                                  <div class="progress-bar progress-bar-striped active"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $maintain[0]['maintain_detail']/20?>%">
                                    <span class="sr-only">45% Complete</span>
                                  </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
								<div style="height:60px;width:100%;position: absolute;left:35px;top:20px;z-index:1;">
								<?php echo $maintain[1]['maintain_detail']/20?>%
								</div>
                                <div id="yl_maintain" style="width:100%;height:60px"></div>
                            </div>
                            <div class="col-lg-9">
                                油滤器保养周期剩余时间：<span id="yl_maintain_value" ><?php echo $maintain[1]['maintain_detail']?></span>
                                <div class="progress">
                                  <div class="progress-bar progress-bar-striped active"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $maintain[1]['maintain_detail']/20?>%">
                                    <span class="sr-only">45% Complete</span>
                                  </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <div id="yf_maintain" style="width:100%;height:60px"></div>
								<div style="height:60px;width:100%;position: absolute;left:35px;top:20px;z-index:1;">
								<?php echo $maintain[2]['maintain_detail']/20?>%
								</div>
                            </div>
                            <div class="col-lg-9">
                                油分器保养周期剩余时间：<span id="yf_maintain_value" ><?php echo $maintain[2]['maintain_detail']?></span>
                                <div class="progress">
                                  <div class="progress-bar progress-bar-striped active"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $maintain[2]['maintain_detail']/20?>%">
                                    <span class="sr-only">45% Complete</span>
                                  </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <div id="ry_maintain" style="width:100%;height:60px"></div>
								<div style="height:60px;width:100%;position: absolute;left:35px;top:20px;z-index:1;">
								<?php echo $maintain[3]['maintain_detail']/20?>%
								</div>
                            </div>
                            <div class="col-lg-9">
                                润滑油保养周期剩余时间：<span id="ry_maintain_value" ><?php echo $maintain[3]['maintain_detail']?></span>
                                <div class="progress">
                                  <div class="progress-bar progress-bar-striped active"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $maintain[3]['maintain_detail']/20?>%">
                                    <span class="sr-only">45% Complete</span>
                                  </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <div id="rz_maintain" style="width:100%;height:60px"></div>
								<div style="height:60px;width:100%;position: absolute;left:35px;top:20px;z-index:1;">
								<?php echo $maintain[4]['maintain_detail']/20?>%
								</div>
                            </div>
                            <div class="col-lg-9">
                                润滑脂保养周期剩余时间：<span id="rz_maintain_value" ><?php echo $maintain[4]['maintain_detail']?></span>
                                <div class="progress">
                                  <div class="progress-bar progress-bar-striped active"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $maintain[4]['maintain_detail']/20?>%">
                                    <span class="sr-only">45% Complete</span>
                                  </div>
                                </div>
                            </div>
                        </div>
					</div>
					<!-- /.panel-body -->
				</div>
				<!-- /.panel -->
			</div>
			<!-- /.col-lg-5 -->
			</div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            工作状态统计
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <button type="button" class="btn btn-default" disabled="true" style="position: absolute;right:50px;top:50px;z-index:1;" id="effect-fullrange"><i class="fa fa-arrows-alt"></i></button>
                            <div id="effect-pie-chart" style="height:120px;width:120px;position: absolute;left:230px;top:40px;z-index:1;"></div>
                            <div id="effect-bar-chart" style="height:200px"></div>
                            <div id="overview-effect" style="height:60px"></div>
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
                            故障情况统计
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body"><div id="error-pie-chart" style="height:120px;width:120px;position: absolute;left:230px;top:40px;z-index:1;"></div>
                            <div id="error-bar-chart" style="height:200px"></div>
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
    
    <!-- jQuery Version 1.11.0 -->
    <script src="<?php $tmp=base_url(); echo $tmp.'bootstrap/js/jquery-1.11.0.js'?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php $tmp=base_url(); echo $tmp.'bootstrap/js/bootstrap.min.js'?>"></script>
    
	<!-- Metis Menu Plugin JavaScript -->
    <script src="<?php $tmp=base_url(); echo $tmp.'bootstrap/js/plugins/metisMenu/metisMenu.min.js'?>"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php $tmp=base_url(); echo $tmp.'bootstrap/js/sb-admin-2.js'?>"></script>
	
	<!-- select2 -->
	<script type="text/javascript" src='<?php $tmp=base_url(); echo $tmp.'bootstrap/select2-3.5.1/select2.js'?>'></script>
	
    <!-- Flot JavaScript -->
    <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="<?php $tmp=base_url(); echo $tmp.'bootstrap/javascript/flot/excanvas.min.js'?>"></script><![endif]-->
    <script language="javascript" type="text/javascript" src="<?php $tmp=base_url(); echo $tmp.'bootstrap/javascript/flot/jquery.flot.js'?>"></script>
    <script language="javascript" type="text/javascript" src="<?php $tmp=base_url(); echo $tmp.'bootstrap/javascript/flot/jquery.flot.time.js'?>"></script>
    <script language="javascript" type="text/javascript" src="<?php $tmp=base_url(); echo $tmp.'bootstrap/javascript/flot/jquery.flot.orderBars.js'?>"></script>
    <script language="javascript" type="text/javascript" src="<?php $tmp=base_url(); echo $tmp.'bootstrap/javascript/flot/jquery.flot.stack.min.js'?>"></script>
    <script language="javascript" type="text/javascript" src="<?php $tmp=base_url(); echo $tmp.'bootstrap/javascript/flot/jquery.flot.selection.js'?>"></script>
    <script language="javascript" type="text/javascript" src="<?php $tmp=base_url(); echo $tmp.'bootstrap/javascript/flot/jquery.flot.pie.js'?>"></script>

	<script src="<?php $tmp=base_url(); echo $tmp.'bootstrap/javascript/basicinfo.js'?>"></script>
    
<script type="text/javascript">

</script>  