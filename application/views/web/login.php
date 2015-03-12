<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="zh-CN"> <!--<![endif]-->
<head>
<?php echo validation_errors(); ?>  
<meta charset="utf-8" />
<title>Login</title>
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link href="<?php $tmp=base_url(); echo $tmp.'web/less/animate.less-master/animate.css'?>" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="<?php $tmp=base_url(); echo $tmp.'web/js/woothemes-FlexSlider-06b12f8/flexslider.css'?>" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php $tmp=base_url(); echo $tmp.'web/js/prettyPhoto_3.1.5/prettyPhoto.css'?>" type="text/css" media="screen" />
<link href="<?php $tmp=base_url(); echo $tmp.'web/style.css'?>" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="<?php $tmp=base_url(); echo $tmp.'web/fonts/font-awesome/css/font-awesome.min.css'?>" media="screen" />
<!--[if IE 7]>
    <link rel="stylesheet" href="<?php $tmp=base_url(); echo $tmp.'web/fonts/font-awsome/css/font-awesome-ie7.min.css'?>">
    <![endif]-->
<script type="text/javascript" src="<?php $tmp=base_url(); echo $tmp.'web/js/modernizr.custom.48287.js'?>"></script>
<!-- Fav and touch icons -->
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="apple-touch-icon-114x114-precomposed.png" />
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="apple-touch-icon-72x72-precomposed.png" />
<link rel="apple-touch-icon-precomposed" href="apple-touch-icon-57x57-precomposed.png" />
<link rel="shortcut icon" href="favicon.png" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
<body>
<header>
     <div class="container">
          <div class="navbar">
               <div class="navbar-inner"> <a class="brand" href="<?php $tmp=base_url(); echo $tmp.'index.php/index/index'?>"> <img src="<?php $tmp=base_url(); echo $tmp.'web/images/restart_logo.png'?>" width="90" height="90" alt="optional logo" /> <span class="logo_title">{re}<strong>start</strong></span> <span class="logo_subtitle">我们专注于物联网，追求卓越</span> </a> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span class="nb_left pull-left"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></span> <span class="nb_right pull-right">menu</span> </a>
                    <div class="nav-collapse collapse">
                         <ul class="nav pull-right">
                              <li class="active"><a href="<?php $tmp=base_url(); echo $tmp.'index.php/index/index'?>">首页</a></li>
                              <li><a href="<?php $tmp=base_url(); echo $tmp.'index.php/index/aboutus'?>">关于我们</a></li>
                              <li><a href="<?php $tmp=base_url(); echo $tmp.'index.php/index/services'?>">服务</a></li>
                              <li><a href="<?php $tmp=base_url(); echo $tmp.'index.php/index/portfolio'?>">案例展示</a></li>
                              <!--li><a href="blog.html">博客</a></li-->
                              <li><a href="<?php $tmp=base_url(); echo $tmp.'index.php/index/contact'?>">联系我们</a></li>
                         </ul>
                    </div>
               </div>
          </div>
          <div id="sign"><a href="<?php $tmp=base_url(); echo $tmp.'index.php/index/login'?>"><i class="icon icon-user"></i>用户登陆</a></div>
     </div>
</header>
<div id="main">
     <div class="container">
          <section id="register">
               <div class="hgroup">
                    <h1>请注册/登陆</h1>
                    <ul class="breadcrumb pull-right">
                         <li><a href="index.html">Home</a> <span class="divider">/</span></li>
                         <li class="active">Register of Sign in</li>
                    </ul>
               </div>
               <div class="row">
                    <div class="signin span6 col-md-offset-3">

                            <!--div class="social_sign">
                            <h3>Sign in with your social account</h3>
                                 <a class="fb" href="#facebook"><i class="icon icon-facebook"></i></a> <a class="tw" href="#twitter"><i class="icon icon-twitter"></i></a> <a class="gp" href="#googleplus"><i class="icon icon-google-plus"></i></a>
                            </div>

                            <div class="or">
                                <div class="or_l"></div>
                                <span>or</span>
                                <div class="or_r"></div>
                            </div-->
                            
                            <p class="sign_title">请输入用户名密码</p>

                            <div class="form">
                                <?php echo form_open('/index/formsubmit'); ?>
                                    <!--input type="text" placeholder="Email" class="input-xlarge" />
                                    <input type="text" placeholder="Password" class="input-xlarge" />
                                    <div class="forgot">
                                         <label class="checkbox">
<input type="checkbox" /> Remember me
</label><a href="#">Forgot password?</a>
                                    </div>
                                   
                                    <button type="submit" class="btn btn-primary btn-large">Sign in</button-->
									<div class="form-group">
										<input class="form-control" placeholder="User Name" name="username" type="text" value="<?php echo set_value('username'); ?>" autofocus>
									</div>
									<div class="form-group">
										<input class="form-control" placeholder="Password" name="password" type="password" value="<?php echo set_value('password'); ?>">
									</div>
									<div class="forgot">
                                         <label class="checkbox">
<input type="checkbox" /> 记住我
</label><a href="#">忘记密码?</a>
                                    </div>
									<!-- Change this to a button or input when using this as a form -->
									<input type="submit" name="submit" value="登陆"  class="btn btn-lg btn-success btn-large">
                                </form>
                            </div>

                        </div>
               </div>
          </section>
     </div>
     <footer>
          <section id="footer_teasers_wrapper">
               <div class="container">
                    <div class="row">
                         <div class="span4 footer_teaser">
                              <h3>关于我们</h3>
                              <p>我们专注于物联网领域，我们致力于帮助企业进入物联网的时代。在物联网的平台上，让您的企业插上腾飞的翅膀，获取更大的发展！</p>
                              <p><i class="icon-map-marker"></i> 浙江省杭州市西湖区</p>
                              <p><i class="icon-phone"></i> (+0571) 0265-9987</p>
                              <p><i class="icon-print"></i> (+0571) 9854-7855</p>
                              <p><i class="icon-envelope"></i> hello@zju.com</p>
                         </div>
                         <div class="span4 footer_teaser">
                              <h3>最新新闻</h3>
                              <ul class="media-list">
                                   <li class="media"> <a href="#" class="media-photo" style="background-image:url(<?php $tmp=base_url(); echo $tmp.'web/images/portfolio/t5.jpg'?>)"></a> <a href="#" class="media-date">19<span>FEB</span></a>
                                        <h5 class="media-heading"><a href="#">我们专注于物联网，追求卓越.</a></h5>
                                        <p>我们专注于物联网，追求卓越...</p>
                                   </li>
                                   <li class="media"> <a href="#" class="media-photo" style="background-image:url(<?php $tmp=base_url(); echo $tmp.'web/images/portfolio/t4.jpg'?>)"></a> <a href="#" class="media-date">18<span>FEB</span></a>
                                        <h5 class="media-heading"><a href="#">我们专注于物联网，追求卓越.</a></h5>
                                        <p>我们专注于物联网，追求卓越...</p>
                                   </li>
                              </ul>
                         </div>
                         <div class="span4 footer_teaser" id="latest-flickr-images">
                              <h3>反馈</h3>
                              <p>如有问题请联系我们 &copy; by <a href="#" target="_blank">2014</a>.</p>
                              <ul>
                              </ul>
                         </div>
                    </div>
               </div>
          </section>
          <section id="copyright">
               <div class="container">
                    <div class="row">
                         <div class="span6">版权所有 &copy; 2014.<a target="_blank" href=""></a></div>
                    </div>
               </div>
          </section>
     </footer>
</div>
<script type="text/javascript" src="<?php $tmp=base_url(); echo $tmp.'web/js/jquery-latest.min.js'?>"></script>
<script>window.jQuery || document.write('<script src="<?php $tmp=base_url(); echo $tmp.'web/js/jquery-1.9.0.min.js'?>"><\/script>')</script>
<script src="<?php $tmp=base_url(); echo $tmp.'web/twitter-bootstrap/js/bootstrap.min.js'?>" type="text/javascript"></script>
<script type="text/javascript" src="<?php $tmp=base_url(); echo $tmp.'web/js/modernizr.custom.48287.js'?>"></script>
<script src="<?php $tmp=base_url(); echo $tmp.'web/js/woothemes-FlexSlider-06b12f8/jquery.flexslider-min.js'?>"></script>
<script src="<?php $tmp=base_url(); echo $tmp.'web/js/prettyPhoto_3.1.5/jquery.prettyPhoto.js'?>" type="text/javascript" charset="utf-8"></script>
<script src="<?php $tmp=base_url(); echo $tmp.'web/js/isotope/jquery.isotope.min.js'?>" type="text/javascript"></script>
<script type="text/javascript" src="<?php $tmp=base_url(); echo $tmp.'web/js/jquery.ui.totop.js'?>"></script>
<script type="text/javascript" src="<?php $tmp=base_url(); echo $tmp.'web/js/easing.js'?>"></script>
<script type="text/javascript" src="<?php $tmp=base_url(); echo $tmp.'web/js/restart_theme.js'?>"></script>

</body>
</html>