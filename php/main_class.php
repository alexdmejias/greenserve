<?php
class main{
	function main_includes(){
		echo '
			<!-- ALL STYLE SHEETS COMBINED -->
			<link rel="stylesheet" type="text/css" href="CSS/main.css"></link>

			<meta name="viewport" content="initial-scale=1.0,width=device-width"/>

			';
	}

	function main_includes_add_css($src){
		echo '
			  <link rel="stylesheet" type="text/css" href="'.$src.'"></link>
		';
	}

		function main_includes_add_js($src){
		echo '
			<script src="'.$src.'" type="text/javascript" language="javascript"></script>

		';
	}


	function main_title($title){
		echo "<title>".$title."</title>";
	}

	function main_navbar($active){

		if ($active=="why"){
			echo '
				<ul id="navlist">
					<li class="active"><a href="why.php">why save</a></li>
					<li><a href="pledge.php">pledge</a></li>
					<li><a href="tips.php">tips</a></li>
					<li><a href="about.php">about us</a></li>
					<li><a href="https://greenserve.wordpress.com/">blog</a></li>
				</ul>';
		}else if ($active=="pledge"){
			echo '
				<ul id="navlist">
					<li><a href="why.php">why save</a></li>
					<li class="active"><a href="pledge.php">pledge</a></li>
					<li><a href="tips.php">tips</a></li>
					<li><a href="about.php">about us</a></li>
					<li><a href="https://greenserve.wordpress.com/">blog</a></li>
				</ul>';
		}else if ($active=="tips"){
			echo '
				<ul id="navlist">
					<li><a href="why.php">why save</a></li>
					<li><a href="pledge.php">pledge</a></li>
					<li class="active"><a href="tips.php">tips</a></li>
					<li><a href="about.php">about us</a></li>
					<li><a href="https://greenserve.wordpress.com/">blog</a></li>
				</ul>';
		}else if ($active=="about"){
			echo '
				<ul id="navlist">
					<li><a href="why.php">why save</a></li>
					<li><a href="pledge.php">pledge</a></li>
					<li><a href="tips.php">tips</a></li>
					<li ><a class="active" href="about.php">about us</a></li>
					<li><a href="https://greenserve.wordpress.com/">blog</a></li>
				</ul>';
		} else if ($active==""){
			echo '
				<ul id="navlist">
					<li><a href="why.php">why save</a></li>
					<li><a href="pledge.php">pledge</a></li>
					<li><a href="tips.php">tips</a></li>
					<li><a href="about.php">about us</a></li>
					<li><a href="https://greenserve.wordpress.com/">blog</a></li>
				</ul>';
		};
	}



	function main_slider_init(){
		echo '
		<div id="lofslidecontent45" class="lof-slidecontent" style="width:880px; height:280px;">
		<div class="preload"><div></div></div>
		<div class="lof-main-outer" style="width:880px; height:280px;">
				<ul class="lof-main-wapper">';
	}

	function main_slider_item($img_path,$img_title,$link_loc,$link_alt,$title_size,$title_1){
		echo '
		<li>
			<img src="'.$img_path.'" title="'.$img_title.'" />
				<div class="lof-main-item-desc">
					<'.$title_size.'><a href="'.$link_loc.'">'.$title_1.'</a></'.$title_size.'>
				</div>
		</li>
		';
	}

	function main_slider_close(){
		echo '</ul></div>';
	}

	function main_slider_nav_init(){
		echo '
			<div class="lof-navigator-wapper">
					<div class="lof-navigator-outer">
						<ul class="lof-navigator">
		';
	}

	function main_slider_nav_item($thumb_src,$thumb_alt){
		echo'<li><img src="'.$thumb_src.'" alt="'.$thumb_alt.'" /></li>';
	}

	function main_slider_nav_close(){
		echo'
		</ul></div>
		</div>';
	}



	function main_footer_nav(){
		echo '
			<ul id="footer_nav">
				<li><a href="tips.php">Tips</a></li>
				<li><a href="about.php">About Us</a></li>
				<li><a href="why.php">Why Do it</a></li>
				<li><a href="pledge.php">Pledge</a></li>
				<li><a href="https://greenserve.wordpress.com/">Blog</a></li>
			</ul>';
	}

	function main_footer_social(){
		echo '
			   <a href="http://twitter.com/#!/Grnsrve"> <img src="IMG/media/twitter_32.png" width="32" height="32" alt="twitter icon" /></a>
				<a href="http://www.facebook.com/pages/Greenserve/158651644197000"><img src="IMG/media/facebook_32.png" width="32" height="32" alt="facebook icon" /></a>
				<a href="mailto:alme1304@gmail.com?subject=Greenserve"><img src="IMG/media/email_32.png" width="32" height="32" alt="contact us icon" /></a>
				<a href="https://greenserve.wordpress.com/feed/"><img src="IMG/media/rss_32.png" width="32" height="32" alt="rss feed icon" /></a>
	';
	}


	function main_footer_includes(){
		echo '
			<!--FOR JQUERY-->
			<script src="JS/jquery-1.6.1.min.js" type="text/javascript"></script>

			<!-- FOR FEEDS-->
			<script type="text/javascript" src="https://www.google.com/jsapi?key=ABQIAAAAlIXLxNtLLFXqlhpXfskvTRT2yXp_ZAY8_ufC3CFXhHIE1NvwkxRMkZ06WubfTwbVs4KUsml2odgQfQ"></script>
			<script src="JS/feed.js" type="text/javascript"></script>

			<!-- FOR SLIDER-->
			<script language="javascript" type="text/javascript" src="JS/jquery.easing.js"></script>
			<script language="javascript" type="text/javascript" src="JS/script.js"></script>
			<script src="JS/slider.js" type="text/javascript"></script>
		';

	}
	function main_footer_WHOLE(){
		echo'
		<div id="footer">
			<div class="container_48">
				<div id="footer_left" class="grid_14 push_2 alpha">
					<h2>Site Map</h2>

					';
		echo $this->main_footer_nav();

		echo'</div>
				<div id="footer_middle" class="grid_14  push_1 ">
					<h2>Recent News</h2>
					<ul id="footer_news">
					<!--populated dynamically by JS/feed.js-->
					</ul>
				</div>

				<div id="footer_right" class="grid_14  push_4 omega">
					<h2>Social Media</h2>
					<div id="footer_social">
						<div>';
		 echo $this->main_footer_social();
		 echo'
						</div>
					 </div>
				</div>
			</div>
			</div>
		';
		echo $this->main_footer_includes();
	}




}//end main class

?>
