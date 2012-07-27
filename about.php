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
	$main->main_title('Greenserving - About Us');

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

						<?php echo $main->main_navbar("about"); ?>
                    </div>
                </div>
            </div>
    </div>      <!--SPACER-->
	<div class="container_48" id="spacer">
    	<div class="grid_44 push_2 spacer"></div>
    </div>
<!--SPACER-->

    <div  class="container_48">
            <div  class="grid_48 push_2">
                <div id="banner" class="grid_44">
						<?php echo $main->main_slider_init();

							  //function main_slider_item($img_path,$img_title,$img_alt,$link_loc,$link_alt,$title_size,$title_1,$title_2,$title_3){
							  echo $main->main_slider_item('IMG/slider/main/1.jpg','','#','slider tree','h1','&nbsp;<b>About us</b>');
							  echo $main->main_slider_item('IMG/slider/main/2.jpg','','pledge.php','slider','h1','&nbsp;Sign our <b>pledge</b><br />  &nbsp;to show the world <br />&nbsp;you care.');
							  echo $main->main_slider_item('IMG/slider/main/3.jpg','','https://greenserve.wordpress.com/','Visit our blog','h2','&nbsp;visit our blog to learn<br/> &nbsp;about upcoming <br/><b>&nbsp;features</b> and contribute <br/>&nbsp;to our <b>community</b>');							  echo $main->main_slider_item('IMG/slider/main/4.jpg','','tips.php#submit','submit a tip','h1','&nbsp;Help us by <b>submiting</b><br />&nbsp;one of your own resource <br />&nbsp;saving tips.');

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
    </div>

<!--SPACER-->
	<div class="container_48" id="spacer">
    	<div class="grid_44 push_2 spacer"></div>
    </div>
<!--SPACER-->

    <div  class="container_48">
            <div  class="grid_48">
                <div id="content" class="grid_44 push_2"><!--actual content-->

                	<div id="main-left" class="grid_20 push_1 alpha"><!--Left main content -->
                        <h1>Who are we?</h1>
				<p>We are a team of students headed by <a href="http://alexismejias.com">Alexis Mejias</a> from Queens Collge, who has realized that for a variety of reasons, people are not concious of the enviroment and their impact on it. The team behind Greenserve has realized that in order to persuade people that there are benefits to going "green", we have crated Greenserve. T </p>

                    </div> <!--end left main content -->

                    <div id="main-right" class="grid_21 push_3 omega">
						<h1>Why?</h1>
				        <p>The main reason why we have spent so much time and effort into building this website is so people can visually see how some of the actions they can take can save them a lot of money. At Greenserve we realized that just by telling people to go "green" will not help or do anything. In order to motivate people to take more consious decisions we will try to show them that they can truly save money, and the more 'tips' you follow, the more money you will be able to see.</p>
                    </div>
                </div>
            </div>
    </div>

<!--SPACER-->
	<div class="container_48" id="spacer">
    	<div class="grid_44 push_2 spacer"></div>
    </div>
<!--SPACER-->

<?php echo $main->main_footer_WHOLE(); ?>
</body>
</html>
