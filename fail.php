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
	$main->main_title('Greenserving');
?>

</head>

<body>
<!--SPACER-->
	<div class="container_48" id="spacer">
    	<div class="grid_44 push_2 spacer"></div>
    </div>
<!--SPACER-->    <div  class="container_48">        
            <div id="header" class="grid_48">
                <div  class="grid_44 push_2">                                
                    <div id="logo" class="grid_16 alpha">
                       	<a href="index.php"><img src="IMG/logo8.png" alt="greenserve logo" /></a>
                    </div>
                    <div id="nav" class="grid_26 push_2 omega">
                    
						<?php echo $main->main_navbar(''); ?>
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
                <div id="banner" class="grid_44">						<?php echo $main->main_slider_init();
							  
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
                    <h1>Your form failed, please go back and try again. Thank you.</h1>
                    <h1>&nbsp;</h1>
                    <h1>&nbsp;</h1>
                    <h1>&nbsp;</h1>
                    <h1>&nbsp;</h1>
                        
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
