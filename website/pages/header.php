<?
$menu = $path_info['call_parts'][0];
?>
<div id="header">
	<div class="wrapper">
		<div id="mobile-menu">
		<img src="/images/mobile_button.png">
		</div>
		<div id="logo">
			<a href="/">***************</a>
			<p>Technology is our passion</p>
		</div>
		<div class="nav">
			<ul class="nobullets">
				<li><a class="menu <? if($menu=='portfolio') echo "active"?>" href="portfolio">Portfolio</a></li>
				<li><a class="menu <? if($menu=='services') echo "active"?>" href="services">Services</a></li>
				<li><a class="menu <? if($menu=='blog') echo "active"?>" href="blog">Blog</a></li>
				<li><a class="menu <? if($menu=='about') echo "active"?>" href="about">About</a></li>
				<li><a class="menu <? if($menu=='contact') echo "active"?>" href="contact">Contact</a></li>
			</ul>
		</div>
		<div id="mobile-list" class="hidden">
		<ul id="mobile-ul" class="mobile-ul nobullets hidden">
		<li><a class="menu2 <? if($menu=='portfolio') echo "active"?>" href="portfolio">Portfolio</a></li>
		<li><a class="menu2 <? if($menu=='services') echo "active"?>" href="services">Services</a></li>
		<li><a class="menu2 <? if($menu=='blog') echo "active"?>" href="blog">Blog</a></li>
		<li><a class="menu2 <? if($menu=='about') echo "active"?>" href="about">About</a></li>
		<li><a class="menu2 <? if($menu=='contact') echo "active"?>" href="contact">Contact</a></li>
		<ul>
		</div>
	</div>
</div>
