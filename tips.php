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
	$main->main_title('Greenserving - Tips');
	$main->main_includes_add_js('JS/tips.js');
	$main->main_includes_add_js('JS/jquery.gchart.js');
	$main->main_includes_add_css('CSS/tips.css');

?>

</head>

<body>
<!--SPACER-->
	<div class="container_48" id="spacer1">
    	<div class="grid_44 push_2 spacer1"></div>
    </div>
<!--SPACER-->    <div  class="container_48">        
            <div id="header" class="grid_48">
                <div  class="grid_44 push_2">                                
                    <div id="logo" class="grid_16 alpha">
                       	<a href="index.php"><img src="IMG/logo8.png" alt="greenserve logo" /></a>
					</div>
                    <div id="nav" class="grid_26 push_2 omega">
                    
						<?php echo $main->main_navbar('tips'); ?>
                    </div>                    
                </div>                                      
            </div>        
    </div>      <!--SPACER-->    
	<div class="container_48" id="spacer2">
    	<div class="grid_44 push_2 spacer2"></div>
    </div>  
<!--SPACER-->

    <div  class="container_48">        
            <div  class="grid_48 push_2">        	                
                <div id="banner" class="grid_44">
                		<?php echo $main->main_slider_init();
							  
							  //function main_slider_item($img_path,$img_title,$img_alt,$link_loc,$link_alt,$title_size,$title_1,$title_2,$title_3){	
							  echo $main->main_slider_item('IMG/slider/main/1.jpg','','#','slider tree','h1','&nbsp;<b>Tips</b>');
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
    </div>
       
<!--SPACER-->    
	<div class="container_48" id="spacer3">
    	<div class="grid_44 push_2 spacer3"></div>
    </div>
<!--SPACER-->    
                       
    <div  class="container_48">        
            <div  class="grid_48">        
                <div id="content" class="grid_44 push_2"><!--actual content-->
                
                	<div id="main-left" class="grid_44 alpha"><!--Left main content -->
                        <ul id="subnav">
                        	<li id="all"><a href="#">View All</a></li>
                            <li id="easy"><a href="#">No-Cost Tips</a></li>
                            <li id="medium"><a href="#">Low-Cost Tips</a></li>
                            <li id="hard"><a href="#">Investments</a></li>                      
                            <li id="water"><a href="#">Water Tips</a></li>
                            <li id="power"><a href="#">Electricity Tips</a></li>
                            <li id="paper"><a href="#">Paper Tips</a></li>
                        </ul>
                        <div class="tip_container"></div>
                        
                        <div class="tip_whole dark">
                        	<div class="tip_header">
   	                          	<a name="submit"></a><h3 class="tip_title">Send us a tip</h3>
                            </div>
                            <div class="tip_body">
                            	<p>Did we miss something? Send us your energy saving tips</p>
                                <form action="php/submit_tip.php" method="post" id="submit_tip_form">
									<fieldset>
										<label for="name">Email: </label><br /><input type="text" id="submit_email" name="submit_email" value="Your email"/>
                                        <br />
                                        <textarea rows="4" cols="50" id="submit_tip" name="submit_tip">Enter your tip here.</textarea>
                                        <br />
                                        <input type="submit" value="Send us your tip" name="submit" id="submit"/>
                                        
									</fieldset>
                                </form>
                            </div>
                        </div>
                        <script type="text/javascript">
                        $('#submit_tip').click(function(){
							$(this).html('')
							});
                        $('#submit_email').click(function(){
							$(this).html('')
							});							
						</script>


                    </div> <!--end left main content -->              
                    
                    
                </div>                
            </div>        
    </div>
        
<!--SPACER-->
	<div class="container_48" id="spacer4">
    	<div class="grid_44 push_2 spacer4"></div>
    </div>
<!--SPACER-->    
    
<?php echo $main->main_footer_WHOLE(); ?>
</body>
</html>
