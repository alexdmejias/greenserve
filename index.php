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
	$main->main_includes_add_js('http://www.google.com/jsapi');
    $main->main_includes_add_js('JS/charts.js');
	//$main->main_includes_add_js('responsive/gridpak.js');
	
	$main->main_title('Greenserve - Home - Energy saving tips');
	
	include_once('php/analytics.php'); 
?>


</head>

<body>

    <div class="container_48">        
            <div id="header" class="grid_48">
                <div class="grid_44 push_2">                                
                    <div id="logo" class="grid_16 alpha">
                    	<a href="index.php"><img src="IMG/logo8.png" alt="greenserve logo" /></a>
                    </div>
                    <div id="nav" class="grid_26 push_2 omega">
                    
						<?php echo $main->main_navbar(''); ?>
                    </div>                    
                </div>                                      
            </div>        
    </div>       
    
<!--SPACER-->    
	<div class="container_48" id="spacer">
    	<div class="grid_44 push_2 spacer"></div>
    </div>  
<!--SPACER-->

    <div class="container_48">        
            <div class="grid_48 push_2">        	                
                <div id="banner" class="grid_44">
						<?php echo $main->main_slider_init();
							  
							//echo $main->main_slider_item('$img_path,$img_title,$link_loc,$link_alt,$title_size,$title_1');	
							  echo $main->main_slider_item('IMG/slider/main/1.jpg','','#','slider tree','h1','&nbsp;Here to teach you<br/>  &nbsp;how to save <b>money</b><br/> &nbsp;and the <b>planet.</b>');
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
                       
    <div class="container_48">        
            <div class="grid_48">        
                <div id="content" class="grid_44 push_2"><!--actual content-->
                
                	<div id="main-left" class="grid_20 push_1 alpha"><!--Left main content -->
                    	<h1>Our Mission</h1>
                        <p class="mission">Our mission is to provide people with simple way to save money around the house, the office, or any other enviroment they interact with. To read more about who we are visit our <b><a href="about.php">'About us'</a></b> page.
                        <h1 class="quick-tips">Quick Tips</h1>
                        <ul id="preview-list">
                            <li><p  class="">When doing laundry, dry loads consecutively, while the temperature inside of it is still high.</p> </li>
                            <li><p class="">Turn off the water while you brush your teeth. There is never a good reason for waste.</p></li>
                            <li><p class="">When purchasing appliances, consider buying "energystar" certified appliances to radically reduce the amount of electricity used by older appliances.</p></li>
                            <li><p class="">When purchasing appliances or faucets, look for "watersense" certification, it is the equivalent of "energystar" for water usage.</p></li>
                            <li><p class="">Consider replacing reading materials to electronic formats. Ereaders are perfect for paperbacks, documents, and many articles. Their weight and size often times make them extremely more portable than their paper counter-parts.</p></li>
                            <li><p class="">Instead of taking a bath, try taking a shower instead. A short shower can drastically reduce the amount of water used, it also reduces the amount of energy requiered to heat all the water used.</p></li>
                        </ul><p><b><a href="tips.php">View more tips</a></b></p>
                    </div> <!--end left main content -->              
                    
                    <div id="main-right" class="grid_21 push_3 omega">
                    <!--draw graphs from 'charts.js'-->
						<h1>CFL Lightbulb Savings</h1>
                        <div id="graph_cfl"></div>

                        <h1>Water Usage per Minute</h1>
                        <div id="graph_gpm"></div>

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
