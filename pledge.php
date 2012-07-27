<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php
	require("php/main_class.php");
	$main= new Main();
?>
<?php
	$main->main_includes();
	$main->main_title('Greenserving - Home');
?>
</head>
<body>
  <div  class="container_48">
		<div id="header" class="grid_48">
			<div  class="grid_44 push_2">
				<div id="logo" class="grid_16 alpha">
					<a href="index.php"><img src="IMG/logo8.png" alt="greenserve logo" /></a>
				</div>
				<div id="nav" class="grid_26 push_2 omega">
					<?php echo $main->main_navbar('pledge'); ?>
				</div>
			</div>
		</div>
	</div>
<!--SPACER-->
	<div class="container_48" id="spacer">
			<div class="grid_44 push_2 spacer"></div>
	</div>
<!--SPACER-->
	<div  class="container_48">
		<div  class="grid_48 push_2">
			<div id="banner" class="grid_44">
				<?php echo $main->main_slider_init();
					//function main_slider_item($img_path,$img_title,$img_alt,$link_loc,$link_alt,$title_size,$title_1,$title_2,$title_3){
					echo $main->main_slider_item('IMG/slider/main/1.jpg','','#','slider tree','h1','&nbsp;<b>Sign Our Pledge</b>');
					echo $main->main_slider_item('IMG/slider/main/2.jpg','','pledge.php','slider','h1','&nbsp;Sign our <b>pledge</b><br />  &nbsp;to show the world <br />&nbsp;you care.');
					echo $main->main_slider_item('IMG/slider/main/3.jpg','','https://greenserve.wordpress.com/','Visit our blog','h2','&nbsp;visit our blog to learn<br/> &nbsp;about upcoming <br/><b>&nbsp;features</b> and contribute <br/>&nbsp;to our <b>community</b>');
					echo $main->main_slider_item('IMG/slider/main/4.jpg','','tips.php#submit','submit a tip','h1','&nbsp;Help us by <b>submiting</b><br />&nbsp;one of your own resource <br />&nbsp;saving tips.');

					echo $main->main_slider_close();
				 //Thumbnails
					echo $main->main_slider_nav_init();
					echo'<li></li>';
					echo'<li></li>';
					echo'<li></li>';
					echo'<li></li>';
					echo $main->main_slider_nav_close();
				?>
			</div>
		</div>
	</div>
<!-- </div> -->

<!--SPACER-->
	<div class="container_48" id="spacer">
		<div class="grid_44 push_2 spacer"></div>
	</div>
<!--SPACER-->
	<div class="container_48">
		<div  class="grid_48">
			<div id="content" class="grid_44 push_2"><!--actual content-->
				<div id="content-top">
					<div id="main-left" class="grid_20 push_1 alpha"><!--Left main content -->
						<blockquote>"From now on, I pledge to conserve paper,water, and electricity in order save both money and the planet."</blockquote>
					</div><!--end left main content -->
					<div id="main-right" class="grid_20 push_3 omega">
						<h2 id="main_sign">Your email adress</h2>
						<form method="post" action="php/pledge_process.php">
								<input type="text" id="main_sign_email_field" name="main_sign_email_field"/>
								<input type="submit" value="Sign the pledge!" name="submit" id="main_sign_button"/>
						</form>
					</div>
				</div><!--  END content-top -->
				<div id="content-bottom">
					<div class="grid_22 prefix_1 alpha hide">
						<script src="http://widgets.twimg.com/j/2/widget.js"></script>
						<script>
							new TWTR.Widget({
								version: 2,
								type: 'search',
								search: '#grnsrve',
								interval: 6000,
								title: '',
								subject: 'save green by saving green',
								width: 400,
								height: 215,
								theme: {
									shell: {
										background: '#8ec1da',
										color: '#ffffff'
									},
									tweets: {
										background: '#ffffff',
										color: '#444444',
										links: '#1985b5'
									}
								},
								features: {
									scrollbar: false,
									loop: true,
									live: true,
									hashtags: true,
									timestamp: true,
									avatars: true,
									toptweets: true,
									behavior: 'default'
								}
							}).render().start();
						</script>
					</div>
					<div id="fb" class="grid_20 omega hide ">
						<div id="fb-root">
						</div>
						<script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script>
						<fb:like-box href="http://www.facebook.com/pages/Greenserve/158651644197000" width="400" show_faces="true" stream="false" header="true">
						</fb:like-box>
					</div><!-- end #fb -->
				</div><!-- END #content-bottom -->
			</div><!-- END #content -->
		</div><!-- End grid_48 -->
	</div><!-- end container 48  -->
	</div><!-- end container 48  -->
<!--SPACER-->
	<div class="container_48" id="spacer">
			<div class="grid_44 push_2 spacer"></div>
	</div>
<!--SPACER-->

	<?php echo $main->main_footer_WHOLE(); ?>
</body>
</html>
