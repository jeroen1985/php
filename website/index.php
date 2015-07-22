<?php
require_once('general.php');
$general = new general;
$general->parsePath();
$path_info = $general->getParsePath();
?>
<html>
<head>
<?
switch($path_info['call_parts'][0]) {
  case 'portfolio': 
?>
<title>Stevens Technologies - Portfolio</title>
<?  
  break;
  case 'services': 
?>
<title>Stevens Technologies - Services</title>
<?  
  break;
  case 'blog': 
?>
<title>Stevens Technologies - Blog</title>
<?  
  break;
  case 'about': 
?>
<title>Stevens Technologies - About</title>
<?  
  break;
  case 'contact': 
?>
<title>Stevens Technologies - Contact</title>
<?  
  break;
  default:
?>
<title>Stevens Technologies</title>
<?
}
?>
<meta name="viewport" content="width=device-width">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?
switch($path_info['call_parts'][0]) {
  case 'portfolio': 
?>
<meta name="description" content="Stevens Technology - Portfolio: Take a look at our portfolio!" />
<meta name="keywords" content="Stevens Technology, de vegende hollander, good medicine gemstones, srvu, mijnereader, the cartridge company, stevens styling" /><?
  break;
  case 'services': 
?>
<meta name="description" content="Stevens Technology - Services: Web development and consultancy!" />
<meta name="keywords" content="Stevens Technology, frontend, development, backend, web, webdevelopment, consultancy" /><?
  break;
  case 'blog': 
?>
<meta name="description" content="Stevens Technology - Blog: Technology blog!" />
<meta name="keywords" content="Stevens Technology, web, webapp, django, review, app, python, opensuse" /><?
  break;
  case 'about': 
?>
<meta name="description" content="Stevens Technology - About: About our company!" />
<meta name="keywords" content="Stevens Technology, web development, amsterdam, netherlands, vancouver, canada" /><?
  break;
  case 'contact': 
?>
<meta name="description" content="Stevens Technology - Contact: Do you have any questions?" />
<meta name="keywords" content="Stevens Technology, contact, us, form, questions" /><?
  break;
  default:
?><meta name="description" content="Stevens Technology: The right place for all your e-commerce projects!" />
<meta name="keywords" content="Stevens Technology, web development, web consulting, websites, webshops, webstores" /><?    
} 
?> 
<meta name="language" content="en" />
<meta name="robots" content="index,follow" />

<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
<!--[if IE]>
    <link rel="stylesheet" type="text/css" href="css/ie_fixes.css">
<![endif]-->
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans">
<link rel="icon" type="image/ico" href="/images/stevens-icon.ico">

<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.11.1/jquery-ui.js"></script>
<script type="text/javascript" src="js/jssor.core.js"></script>
<script type="text/javascript" src="js/jssor.utils.js"></script>
<script type="text/javascript" src="js/jssor.slider.js"></script>
<script type="text/javascript" src="js/default.js"></script>

</head>
<body>
<?
require_once('pages/header.php');
switch($path_info['call_parts'][0]) {
  case 'portfolio': 
  	?>
  	<a name="devegendehollander"></a>
	<div id="portfolio">
	<div class="wrapper2">
	<?
  	include('pages/portfolio.php');
    break;
  case 'services': 
  	 ?>
  	<a name="frontend"></a>
	<div id="services">
	<div class="wrapper2">
	<?
  	include('pages/services.php');
    break;
  case 'blog': 
  	?>
  	<div id="blog">
	<div class="wrapper2">
  	<?
  	include('pages/blog.php');
    break;
  case 'about': 
  	?>
  	<div id="about">
	<div class="wrapper2">
  	<?
  	include('pages/about.php');
    break;
  case 'contact': 
  	?>
  	<div id="contact">
	<div class="wrapper2">
  	<?
  	include('pages/contact.php');
    break;	
  default:
?>
<div id="main">
	<div class="wrapper2">
		<div class="col-a special">
			<div class="col-a-work">
				<div id="slider1_container">
					<div u="loading" style="position: absolute; top: 0px; left: 0px;">
						<div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
							background-color: #000000; top: 0px; left: 0px;width: 100%;height:100%;">
						</div>
						<div style="position: absolute; display: block; top: 0px; left: 0px;width: 100%;height:100%;">
						</div>
					</div>
					<div id="slider2_container" u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 680; height: 268; overflow: hidden;">
						<div>
							<img u="image" src="images/work_dv.png"/>
						</div>
						<div>
							<img u="image" src="images/work_gmg.png" />
						</div>
						<div>
							<img u="image" src="images/work_srvu.png" />
						</div>
						<div>
							<img u="image" src="images/work_e.png" />
						</div>
						<div>
							<img u="image" src="images/work_tcc.png" />
						</div>
						<div>
							<img u="image" src="images/work_s.png" />
						</div>
					</div>
					<style>

						.jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
							background: url(images/b05.png) no-repeat;
							overflow: hidden;
							cursor: pointer;
						}

						.jssorb05 div {
							background-position: -7px -7px;
						}

							.jssorb05 div:hover, .jssorb05 .av:hover {
								background-position: -37px -7px;
							}

						.jssorb05 .av {
							background-position: -67px -7px;
						}

						.jssorb05 .dn, .jssorb05 .dn:hover {
							background-position: -97px -7px;
						}
					</style>
					<div u="navigator" class="jssorb05" style="position: absolute; bottom: 16px; right: 6px;">
						<div u="prototype" style="POSITION: absolute; WIDTH: 16px; HEIGHT: 16px;"></div>
					</div>
					<style>
						.jssora12l, .jssora12r, .jssora12ldn, .jssora12rdn {
							position: absolute;
							cursor: pointer;
							display: block;
							background: url(images/a12.png) no-repeat;
							overflow: hidden;
						}

						.jssora12l {
							background-position: -16px -37px;
						}

						.jssora12r {
							background-position: -75px -37px;
						}

						.jssora12l:hover {
							background-position: -136px -37px;
						}

						.jssora12r:hover {
							background-position: -195px -37px;
						}

						.jssora12ldn {
							background-position: -256px -37px;
						}

						.jssora12rdn {
							background-position: -315px -37px;
						}
					</style>
					<span u="arrowleft" class="jssora12l" style="width: 30px; height: 46px; top: 123px; left: 0px;">
					</span>
					<span u="arrowright" class="jssora12r" style="width: 30px; height: 46px; top: 123px; right: 0px">
					</span>
				</div>
			</div>
		</div>
		<div class="col-b">
			<p class="recommendation">" Jeroen Stevens is a very reliable and efficiently working expert who built my website. He speaks human languages next to robotic. He translates and explains the digital possibilities in clean apprehensible Dutch. To me, the uninitiated, it felt very safe to leave my complete on-line company to him. A very trustworthy young man with <br/> a heart in the right place... "</p>
			<p class="subtext">- Hergen van der Starre</p>
			<p class="subtext2">CEO, de vegende hollander</p>
		</div>
		<div class="services">
			<a href="services#frontend">
				<div class="col-services">
				<p class="icon"><img src="images/front_end_development.png" /></p>
				<p class="heading"><b>front-end development</b></p>
				<p class="text">The front-end of a website makes or breaks your brand! Transforming designs in front-end code using the latest technologies.</p>
				</div>
			</a>
			<a href="services#backend">
				<div class="col-services">
				<p class="icon"><img src="images/back_end_development.png" /></p>
				<p class="heading"><b>back-end development</b></p>
				<p class="text">Custom web applications build from scratch, incorporating a variety of frameworks or making use of standard web applications.</p>
				</div>
				</a>
			<a href="services#consulting">
				<div class="col-services last">
				<p class="icon"><img src="images/web_consulting.png" /></p>
				<p class="heading"><b>web consulting</b></p>
				<p class="text">Technological and functional web knowledge. Advisory examples: new website/app rollout, e-commerce platform implementation.</p>
				</div>
			</a>
		</div>
		<div class="col-a mobile-blog">
			<p class="header-left"><b>blog summary</b></p>
			<p class="blog-text">After finishing the multiple Python/Django tutorials it was time to create a simple application. The Django framework is truly great for rapid development. The form tweet application holds a customer service form that captures a short question and some additional variables... <a href="/blog?id=1" id="testblog"><b>more >></b></a></p>
			<p class="blog-text">The book describes the Django Framework in the perspective of web application development. The theory is explained while creating a social bookmarking tool. There are some small mistakes in the book that I will highlight below (these mistakes are mainly caused by a... <a href="/blog?id=2"><b>more >></b></a></p>
			<p class="blog-text">As I am getting more familiar with Python I would like to use this language to create custom web applications. The Django Framework has been suggested to me by a large number of people. The website of this framework (https://www.djangoproject.com/) displays a quick overview... <a href="blog?id=3"><b>more >></b></a></p>
			<p class="blog-text">About a month ago I started working through a python course called “learn python the hard way”, URL: http://learnpythonthehardway.org. I recommend this online book to everyone who wants to learn python or just get an idea of what programming is about. The perspect... <a href="blog?id=4"><b>more >></b></a></p>
		</div>
		<div class="col-b lastcolumn">
			<p class="header-right"><b>about</b></p>
			<p class="about-text">Stevens Technologies has been founded in the Netherlands to provide web development services to small and medium sized companies. The main focus are companies and organisation that make this world just a little bit better, e.g. free range initiatives, green initiatives, organic & handmade products. Please see the portfolio sections for our latest work. As of 2014 these services are also available in Vancouver, Canada. <a href="about"><br><b>more >></b></a></p>
		</div>
<?
}
?>
	</div>
</div>
<?
require_once('pages/footer.php');
?>

</body>
</html>
