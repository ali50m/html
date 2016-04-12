<!DOCTYPE html>
<html>
<head>
	<title>青创定制-温州青创文化策划有限公司</title>
	<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
	<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
	<!-- add the favicon -->
	<!-- <link rel="icon" type="image/x-icon" href="favicon.ico"> -->
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<!-- Custom Theme files -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Eco Farm Responsive web, wzqc, 温州青创， 青创文化， 青创农业定制" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- //Custom Theme files -->
	<!-- js -->
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/modernizr.custom.js"></script>
	<!-- //js -->	
	<!-- start-smoth-scrolling-->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>	
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script>
	<!--//end-smoth-scrolling-->
	<!--animate-->
	<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
	<script src="js/wow.min.js"></script>
	<script>
		new WOW().init();
	</script>
	<!--//end-animate-->
	<!-- load font -->
	<script type="text/javascript" src="http://api.youziku.com/webfont/FastJS/yzk_7971BBB0A76D3B2E"></script>
	<!-- end load font -->
</head>
<body>
	<!--banner-->
	<div class="banner">		
		<!--header-->
		<div class="banner-text">
			<div class="logo">	
				<a href="index.html"><img src="images/logo.png" alt=""/></a>
			</div> 
			<div class="top-nav">	
				<ul class="nav1 cl-effect-1">
					<!-- <li><a href="index.html">主页</a></li> -->
					<li><a href="#about" class="scroll">关于我们</a></li>
					<li><a href="#services" class="scroll">相关服务</a></li>
					<li><a href="#products" class="scroll">所有产品</a></li>
					<li><a href="#team" class="scroll">青创团队</a></li>
					<li><a href="#contact" class="scroll">联系我们</a></li>
				</ul>
			</div>
		</div>
		<!-- banner Slider starts Here -->
		<script src="js/responsiveslides.min.js"></script>
		<script>
			// You can also use "$(window).load(function() {"
			$(function () {
				// Slideshow 3
				$("#slider3").responsiveSlides({
					auto: true,
					pager:false,
					nav:true,
					speed: 500,
					namespace: "callbacks",
					before: function () {
						$('.events').append("<li>before event fired.</li>");
					},
					after: function () {
						$('.events').append("<li>after event fired.</li>");
					}
				});	
			});
		</script>
		<!--//End-slider-script -->
		<div  id="top" class="callbacks_container">
			<ul class="rslides" id="slider3">
				<li>					
					<div class="banner2">						
					</div>
				</li>
				<li>					
					<div class="banner1">						
					</div>
				</li>								
			</ul>
		</div>
	</div>
	<!--//banner-->
	<!--about-->
	<div class="about" id="about">
		<div class="container">
			<div class="title">
				<h3>关于我们</h3>
				<div class="myfont fontenlarge">
					<p>2014年11月于杭州仓前梦想小镇，青创原始团队因共同的梦想汇聚一堂、众筹智慧。</p>
					<p>2015年5月温州青创文化策划有限公司成立于中国梦的浪潮中，大众创新、万众创业的激昂时代里。</p>
					<p>青创目标是打造文化创意O2O平台，以创建线上与线下经济圈互动的循环经济模式为主轴，以互联网+文化产业、旅游产业、现代农业为平台主要经营方向。  </p>
				</div>
				
			</div>
			<div class="about-grids">				
				<div class="col-md-6 about-info  wow fadeInLeft animated" data-wow-delay="0.5s" style="visibility: visible; -webkit-animation-delay: 0.5s;">
					<h4>青创定制，为家人食品健康定制 </h4>
					<p class="myfont">为了使本地百姓能够吃上健康放心的食品，温州青创在先进技术投入上，不惜血本花巨资收购了国外最先进的生物技术专利，并合作引进台湾最先进的农业技术，使公司走在了国内行业的前沿，有力地提升了服务本地高端农业的水平。</p>
					<ul class="myfont">
						<li><a href="#">产地直发</a></li>
						<li><a href="#">天然无公害</a></li>
						<li><a href="#">手工精选</a></li>
						<li><a href="#">贴心售后</a></li>
					</ul>
				</div>
				<div class="col-md-6 about-info  wow fadeInRight animated" data-wow-delay="0.5s" style="visibility: visible; -webkit-animation-delay: 0.5s;">
					<img src="images/img1.jpg" alt=""/>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--//about-->
	<div class="copyrights">Collect from <a href="http://www.cssmoban.com/" >企业网站模板</a></div>
	<!--services-->
	<div class="services" id="services">
		<div class="container">			
			<div class="title">
				<h3>相关服务</h3>
				<p class="myfont fontenlarge">我们提供了从下订单到农间育苗耕种，作物生长期间的视频监控，最后送到您指定收货处的一系列服务。 </p>
			</div>
			<div class="service-grids">
				<div class="col-md-4 srvc-grids-info wow bounceIn animated" data-wow-delay=".5s" style="visibility: visible; -webkit-animation-delay: .5s;">
					<div class="srvc-img">
						<img src="images/icon2.png" alt=""/>
					</div>
					<h5>线上下单</h5>
					<p class="myfont">你可以通过公众号下单，来电预约或者网站留言等方式跟我们取得联系，确认您的定制需求和配送信息。 </p>
				</div>
				<div class="col-md-4 srvc-grids-info wow bounceIn animated" data-wow-delay=".5s" style="visibility: visible; -webkit-animation-delay: .5s;">
					<div class="srvc-img">
						<img src="images/icon3.png" alt=""/>
					</div>
					<h5>古法耕种</h5>
					<p class="myfont">采用中国传统的农耕方式，结合台湾最新的农业科技。保证不施化肥，不使用除草杀虫剂和生长激素。</p>
				</div>
				<div class="col-md-4 srvc-grids-info wow bounceIn animated" data-wow-delay=".5s" style="visibility: visible; -webkit-animation-delay: .5s;">
					<div class="srvc-img">
						<img src="images/icon4.png" alt=""/>
					</div>
					<h5>自然生长</h5>
					<p class="myfont">农场气候平均年日照为1473.1小时，平局气温18.3℃，无霜327天。属于亚热带湿润气候，四季分明热量丰富。您的定制作物在此健康成长。 </p>
				</div>
				<div class="col-md-4 srvc-grids-info wow bounceIn animated" data-wow-delay=".5s" style="visibility: visible; -webkit-animation-delay: .5s;">
					<div class="srvc-img">
						<img src="images/icon5.png" alt=""/>
					</div>
					<h5>在线监控</h5>
					<p class="myfont">我们为定制了农产品的用户提供全天候的视频监控服务。您可以足不出户，利用电脑、平板或者手机随时随地观看植物的生长情况，更添一份安心。 
					</p>
				</div>
				<div class="col-md-4 srvc-grids-info wow bounceIn animated" data-wow-delay=".5s" style="visibility: visible; -webkit-animation-delay: .5s;">
					<div class="srvc-img">
						<img src="images/icon6.png" alt=""/>
					</div>
					<h5>物流配送</h5>
					<p class="myfont">
						农产品在成熟收获后，我们将会采用专业的物流快递配送到您的收货地址。让您在第一时间享受丰收的喜悦。
					</p>
				</div>
				<div class="col-md-4 srvc-grids-info wow bounceIn animated" data-wow-delay=".5s" style="visibility: visible; -webkit-animation-delay: .5s;">
					<div class="srvc-img">
						<img src="images/icon7.png" alt=""/>
					</div>
					<h5>环保健康</h5>
					<p class="myfont">
						我们一切努力的目标，就是为了让农业更环保，让人类更健康。
					</p>
				</div>
				<div class="clearfix"> </div>				
			</div>
		</div>
	</div>
	<!--//services-->
	<div class="slid">
		<div class="container">
			<div class="wow fadeInRight animated" data-wow-delay=".5s" style="visibility: visible; -webkit-animation-delay: .5s;">
				<h3>除了天然我们再无添加...</h3>
			</div>
		</div>
	</div>	
	<!--products-->
	<div class="features" id="products">
		<div class="container">			
			<div class="title">
				<h3>所有产品</h3>
				<p class="myfont fontenlarge">农场地处于平阳县闹村乡，占地面积150余亩，总投资金额2300多万元，产品涵盖有机蔬菜、水果、水产、谷物、禽蛋肉、茶叶和中草药等五大类180余种。农场不仅发展有机种植，并开始朝着生态旅游等多经济形态迈进。农场土壤环境已经达到国家II级标准，并有部分农产品定点对港输送。</p>
				<p class="myfont fontenlarge">目前，农场已经获得由温州青创领投、平阳县农业发展基金跟投的数千万融资，该笔资金将主要用于扩大经营、建造生态大棚、加强技术标准与开发等。</p>
			</div>
			<div class="features-info">
				<div class="col-md-4 features-grids wow bounceIn animated" data-wow-delay=".5s" style="visibility: visible; -webkit-animation-delay: .5s;">
					<figure class="effect-bubba">
						<img src="images/img2.jpg" alt=""/>
						<figcaption>
							<h4>果蔬定制</h4>
							<p>纯天然绿色无污染古法耕种</p>	
						</figcaption>			
					</figure>		
				</div>
				<div class="col-md-4 features-grids wow bounceIn animated" data-wow-delay=".5s" style="visibility: visible; -webkit-animation-delay: .5s;">
					<figure class="effect-bubba">
						<img src="images/img7.jpg" alt=""/>
						<figcaption>
							<h4>果蔬定制</h4>
							<p>纯天然绿色无污染古法耕种</p>
						</figcaption>		
					</figure>		
				</div>
				<div class="col-md-4 features-grids wow bounceIn animated" data-wow-delay=".5s" style="visibility: visible; -webkit-animation-delay: .5s;">
					<figure class="effect-bubba">
						<img src="images/img4.jpg" alt=""/>
						<figcaption>
							<h4>果蔬定制</h4>
							<p>纯天然绿色无污染古法耕种</p>
						</figcaption>			
					</figure>		
				</div>
				<div class="col-md-4 features-grids wow bounceIn animated" data-wow-delay=".5s" style="visibility: visible; -webkit-animation-delay: .5s;">
					<figure class="effect-bubba">
						<img src="images/img5.jpg" alt=""/>
						<figcaption>
							<h4>果蔬定制</h4>
							<p>纯天然绿色无污染古法耕种</p>	
						</figcaption>			
					</figure>		
				</div>
				<div class="col-md-4 features-grids wow bounceIn animated" data-wow-delay=".5s" style="visibility: visible; -webkit-animation-delay: .5s;">
					<figure class="effect-bubba">
						<img src="images/img6.jpg" alt=""/>
						<figcaption>
							<h4>果蔬定制</h4>
							<p>纯天然绿色无污染古法耕种</p>
						</figcaption>			
					</figure>		
				</div>
				<div class="col-md-4 features-grids wow bounceIn animated" data-wow-delay=".5s" style="visibility: visible; -webkit-animation-delay: .5s;">
					<figure class="effect-bubba">
						<img src="images/img3.jpg" alt=""/>
						<figcaption>
							<h4>果蔬定制</h4>
							<p>纯天然绿色无污染古法耕种</p>
						</figcaption>		
					</figure>		
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--//products-->
	<!--team-->
	<div class="team" id="team">
		<div class="container">
			<div class="title">
				<h3>青创团队</h3>
				<p class="myfont fontenlarge">我们汇聚了一批来自平阳本地的精英人才为您倾力打造青创定制！ </p>
			</div>
			<!-- flex-slider -->
			<div class="work-bottom">
				<div class="nbs-flexisel-container"><div class="nbs-flexisel-inner"><ul id="flexiselDemo1" class="nbs-flexisel-ul" style="left: -285px; display: block;">
					<li class="nbs-flexisel-item" style="width: 285px;">
						<div class="team-left">
							<img src="images/img15.jpg" alt="">
							<div class="team-bottom">
								<h4>ROAN XIE</h4>
								<p>CEO</p>
							</div>
						</div>
					</li>
					<li class="nbs-flexisel-item" style="width: 285px;">
						<div class="team-left">
							<img src="images/img9.jpg" alt="">
							<div class="team-bottom">
								<h4>MIKE LIU</h4>
								<p>CO-FOUNDER</p>
							</div>
						</div>
					</li>		
					<li class="nbs-flexisel-item" style="width: 285px;">
						<div class="team-left">
							<img src="images/img10.jpg" alt="">
							<div class="team-bottom">
								<h4>ALAN NI</h4>
								<p>CO-FOUNDER</p>
							</div>
						</div>
					</li>
					<li class="nbs-flexisel-item" style="width: 285px;">
						<div class="team-left">
							<img src="images/img12.jpg" alt="">
							<div class="team-bottom">
								<h4>LILY CAI</h4>
								<p>CVP</p>
							</div>
						</div>
					</li>
					<li class="nbs-flexisel-item" style="width: 285px;">
						<div class="team-left">
							<img src="images/img11.jpg" alt="">
							<div class="team-bottom">
								<h4>WILL LIU</h4>
								<p>CTO</p>
							</div>
						</div>
					</li>		
					<li class="nbs-flexisel-item" style="width: 285px;">
						<div class="team-left">
							<img src="images/img8.jpg" alt="">
							<div class="team-bottom">
								<h4>SHERY ZHANG</h4>
								<p>CFO</p>
							</div>
						</div>
					</li>
					<li class="nbs-flexisel-item" style="width: 285px;">
						<div class="team-left">
							<img src="images/img14.jpg" alt="">
							<div class="team-bottom">
								<h4>LUCY BAI</h4>
								<p>HR MANAGER</p>
							</div>
						</div>
					</li>
					<li class="nbs-flexisel-item" style="width: 285px;">
						<div class="team-left">
							<img src="images/img13.jpg" alt="">
							<div class="team-bottom">
								<h4>MARK WU</h4>
								<p>PRODUCT MANAGER</p>
							</div>
						</div>
					</li>
				</ul>
				<div class="nbs-flexisel-nav-left" style="top: 138px;"></div><div class="nbs-flexisel-nav-right" style="top: 138px;"></div></div></div>
				<script type="text/javascript">
					$(window).load(function() {
						$("#flexiselDemo1").flexisel({
							visibleItems: 4,
							animationSpeed: 1000,
							autoPlay: true,
							autoPlaySpeed: 3000,    		
							pauseOnHover: true,
							enableResponsiveBreakpoints: true,
							responsiveBreakpoints: { 
								portrait: { 
									changePoint:480,
									visibleItems: 2
								}, 
								landscape: { 
									changePoint:640,
									visibleItems: 3
								},
								tablet: { 
									changePoint:768,
									visibleItems: 3
								}
							}
						});

					});
				</script>
				<script type="text/javascript" src="js/jquery.flexisel.js"></script>				
				<!-- //flex-slider -->	
			</div>
		</div>
	</div>	
	<!--//team-->
	<!--contact-->
	<div class="contact" id="contact">
		<div class="container">
			<div class="title">
				<h3>联系我们</h3>
			</div>
			<div class="contact-grids">
				<div class="col-md-4 address wow fadeInLeft animated" data-wow-delay="0.5s" style="visibility: visible; -webkit-animation-delay: 0.5s;">
					<h4>联系信息</h4>
					<div class="myfont">
						<p class="cnt-p">温州青创文化策划有限公司</p>
						<p>浙江省温州市平阳县鳌江镇厚垟村</p>
						<p>厚垟南路46号</p>
						<p>联系手机 : 1362 650 0960</p>
						<!-- <p>FAX : +1 800 889 4444</p> -->
						<p>电子邮箱 : <a href="mailto:wzqc888@qq.com">wzqc888@qq.com</a></p>
					</div>					
				</div>
				<div class="col-md-8 contact-form wow fadeInRight animated" data-wow-delay="0.5s" style="visibility: visible; -webkit-animation-delay: 0.5s;">
					<h4>留言表</h4>
					<form>
						<div class="col-md-6 contact-form-info">
							<input type="text" value="您的姓名" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Name';}" required="">
							<input type="email" value="电子邮箱" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Email';}" required="">
							<input type="text" value="电话号码" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Telephone';}" required="">
						</div>
						<div class="col-md-6 contact-form-info">
							<textarea type="text" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Message...';}" required="">请输入您的留言...</textarea>							
						</div>
						<div class="clearfix"> </div>
						<input type="submit" value="提交">
					</form>
				</div>
				<div class="clearfix"> </div>	
			</div>
		</div>
<!-- 		<div class="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d158858.182370726!2d-0.10159865000000001!3d51.52864165!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+UK!5e0!3m2!1sen!2sin!4v1433744055746"></iframe>
		</div> -->
		<div class="map">
			<iframe src="http://apis.map.qq.com/tools/poimarker?type=0&marker=coord:27.625178,120.572666;title:温州青创文化策划有限公司;addr:平阳县鳌江镇厚垟南路46号&key=MBZBZ-FOOHR-TOSWU-WKEXM-2HI35-BDFUT&referer=wzqc"></iframe>
		</div>
	</div>
	<!--//contact-->
	<!--footer-->
	<div class="footer">
		<div class="container">			
			<p class="wow bounceIn animated" data-wow-delay=".5s" style="visibility: visible; -webkit-animation-delay: .5s;">Copyright &copy; 2015-2016. All rights reserved by 温州青创文化策划有限公司。 <a href="http://wzqc.github.io/" title="青创定制" target="_blank">青创定制</a></p>
			<div class="clearfix"> </div>
		</div>	
	</div>
	<!--//footer-->
	<!--smooth-scrolling-of-move-up-->
	<script type="text/javascript">
		$(document).ready(function() {
				/*
				var defaults = {
					containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
				};
				*/
				
				$().UItoTop({ easingType: 'easeOutQuart' });
				
			});
		</script>
		<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
		<!--//smooth-scrolling-of-move-up-->
	<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="js/bootstrap.js"> </script>
	<script type="text/javascript"> 
		$youziku.load(".myfont", "a034239951df4c3caa2b3f2b19531ec6", "YouYuan"); 
		$youziku.draw(); 
	</script>
</body>
</html>