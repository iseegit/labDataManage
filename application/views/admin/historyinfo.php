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
								<a href="<?php echo $tmp.'index.php/admin/'.$dtsb_encrypt?>"> 单台设备概况</a>
                                </li>
                                <li>
								<a href="<?php echo $tmp.'index.php/admin/'.$ssxx_encrypt?>"> 实时信息</a>
                                </li>
                                <li>
								<a class="active" href="#"> 历史信息</a>
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
				<h1 style="height:74px" class="page-header">历史信息<img style="float:right;height:74px" src="<?php $tmp=base_url(); echo $tmp.'img/logo.png'?>"></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
				<div class="col-lg-12">
					<div class="panel panel-primary">
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
			</div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            转速：历史工作信息
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <button type="button" class="btn btn-default" disabled="true" style="position: absolute;right:50px;top:50px;z-index:1;" id="speed-fullrange"><i class="fa fa-arrows-alt"></i></button>
                            <div id="speed-line-chart" style="height:200px"></div>
                            <div id="overview-speed" style="height:60px"></div>
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
                            电压：历史工作信息
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <button type="button" class="btn btn-default" disabled="true" style="position: absolute;right:50px;top:50px;z-index:1;" id="voltage-fullrange"><i class="fa fa-arrows-alt"></i></button>
                            <div id="voltage-line-chart" style="height:200px"></div>
                            <div id="overview-voltage" style="height:60px"></div>
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
                            排气压力：历史工作信息
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <button type="button" class="btn btn-default" disabled="true" style="position: absolute;right:50px;top:50px;z-index:1;" id="gaspress-fullrange"><i class="fa fa-arrows-alt"></i></button>
                            <div id="gaspress-line-chart" style="height:200px"></div>
                            <div id="overview-gaspress" style="height:60px"></div>
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
                            机油压力：历史工作信息
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <button type="button" class="btn btn-default" disabled="true" style="position: absolute;right:50px;top:50px;z-index:1;" id="oilpress-fullrange"><i class="fa fa-arrows-alt"></i></button>
                            <div id="oilpress-line-chart" style="height:200px"></div>
                            <div id="overview-oilpress" style="height:60px"></div>
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
	<script type="text/javascript" src='<?php $tmp=base_url(); echo $tmp.'bootstrap/js/modernizr.js'?>'></script>
    <!-- jQuery Version 1.11.0 -->
    <script src="<?php $tmp=base_url(); echo $tmp.'bootstrap/js/jquery-1.11.0.js'?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php $tmp=base_url(); echo $tmp.'bootstrap/js/bootstrap.min.js'?>"></script>
	    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php $tmp=base_url(); echo $tmp.'bootstrap/js/plugins/metisMenu/metisMenu.min.js'?>"></script>

	<!-- select2 -->
	<script type="text/javascript" src='<?php $tmp=base_url(); echo $tmp.'bootstrap/select2-3.5.1/select2.js'?>'></script>	

    <!-- Custom Theme JavaScript -->
    <script src="<?php $tmp=base_url(); echo $tmp.'bootstrap/js/sb-admin-2.js'?>"></script>
	
	<!-- slider -->
	<script type="text/javascript" src='<?php $tmp=base_url(); echo $tmp.'bootstrap/js/bootstrap-slider.js'?>'></script>
	
    <!-- Flot JavaScript -->
    <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="<?php $tmp=base_url(); echo $tmp.'bootstrap/javascript/flot/excanvas.min.js'?>"></script><![endif]-->
    <script language="javascript" type="text/javascript" src="<?php $tmp=base_url(); echo $tmp.'bootstrap/javascript/flot/jquery.flot.js'?>"></script>
    <script language="javascript" type="text/javascript" src="<?php $tmp=base_url(); echo $tmp.'bootstrap/javascript/flot/jquery.flot.time.js'?>"></script>

	<script src="<?php $tmp=base_url(); echo $tmp.'bootstrap/javascript/history.js'?>"></script>
