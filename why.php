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
	$main->main_title('Greenserving - Why do it?');
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
					
						<?php echo $main->main_navbar('why'); ?>
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
							//echo $main->main_slider_item('$img_path,$img_title,$link_loc,$link_alt,$title_size,$title_1');	
							  echo $main->main_slider_item('IMG/slider/main/1.jpg','','#','slider tree','h1','&nbsp;<b>Why do it</b>');
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
	   
<!--SPACER-->    
	<div class="container_48" id="spacer">
		<div class="grid_44 push_2 spacer"></div>
	</div>
<!--SPACER-->    
					   
	<div class="container_48">        
			<div class="grid_48">        
				<div id="content" class="grid_44 push_2"><!--actual content-->
				
					<div id="main-left" class="grid_20 push_1 alpha"><!--Left main content -->
					<h1>Why save?</h1>
						<p class="white">Energy saving is very important to all of us for many different reasons. The aim of "greenserving" is to provide no-cost, low-cost and sometimes even projects to help you save water, electricity, or paper, whether youare mainly doing it for the money or the enviroment. </p>						<br /><br />
						<p class="white">When it comes to conserving resources, the tips in this website are divided into three categories of cost and effort.</p>
						<ul class="info_list">
							<li><p class="white"><b>No-Cost</b> tips involve slight behavioral changes from the user, tips like these involve turning off lights, and closing doors.</p></li>
							<li><p class="white"><b>Low-cost</b> tips involve buying products that conserve and have a relatevely low price range. </p></li>
							<li><p class="white"><b>Investments</b> are the most expensive tips on the site, but they are the biggest conservers on resources in the long run.</p></li>
							</ul>
					 </div>
					 <div id="main-right" class="grid_21 push_3 omega">
					 <h1>&nbsp;</h1>
						<p class="white">These are some of the reasons why you might want to think about conserving:</p>
						<ul class="info_list">
							<li><p class="white">Depending on your actions, you can save a lot of money each year.</p></li>
							<li><p class="white">It makes for a more appealing home to sell if you ever try to sell it.</p></li>
							<li><p class="white">The price of utilities will keeping increasing as time pases by.</p></li>
							<li><p class="white">You will feel a lot better once you know you are saving money and the right thing.</p></li>
							
						</ul>
					</div> <!--end left main content -->                		
		 </div>
				<div id="main-lower-left" class="grid_14 push_2 alpha">
					<h2></h2>

				
				</div>
				
				<div id="main-lower-middle" class="grid_14  push_3 ">
					<h2></h2>

				</div> 
				
				<div id="main-lower-right" class="grid_14  push_4 omega">
					<h2></h2>
				</div>        
			</div>        
	</div>

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
