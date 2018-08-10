<?php
	include_once('../class/users.php');
	include_once('../include/settings.php');

	use cliqsFrameWork\users\user as me;
	use cliqsFrameWork\users\connect as connectme;
	use cliqsFrameWork\users\performance as ivalid;
	use cliqsFrameWork\users\records as records;
	
	$me=new me();
	$connectme=new connectme();
	$checkme=new ivalid();
	$record=new records();
		
	

header('Content-Type:text/html; charset=utf-8');
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Waste Management|Home</title>
<meta name="keywords" content="free templates, Business Website, Free CSS Template, CSS, HTML" />
<meta name="description" content="Business Template is a free css template provided by templatemo.com" />

<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>
<script type="text/javascript" src="../js/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="../js/check.js"></script>
<style>
		
		@import "../css/forms.css";
		@import "../css/interim.css";
		@import "../css/templatemo_style.css";
		@import "../css/jquery.ennui.contentslider.css";
		

</style>
</head>
<body>
<div id="templatemo_header_wrapper">

	<div id="templatemo_header">
    
    	<div id="site_logo"></div>
    
    </div> <!-- end of header -->

</div> <!-- end of header wrapper -->

<div id="templatemo_menu_wrapper">   
    
    <div id="templatemo_menu">
        <ul>
            <li><a href="../u0/" class="current">Home</a></li>
            <li><a href="#">Web Design</a></li>
        </ul>    	
    </div> <!-- end of menu -->
</div> <!-- end of menu wrapper -->

<div id="tempatemo_content_wrapper">

    <div id="templatemo_content">
    
    	<div class="recent_projects">
        
        	<div class="project_slideshow">
            

            <div id="one" class="contentslider">
                <div class="cs_wrapper">
                    <div class="cs_slider">
                    
  
                        <div class="cs_article">
   
                           <a href="#">
                            <img src="../images/templatemo_image_01.jpg" alt="Screenshot 1" />
                            </a>
                        </div><!-- End cs_article -->
                        
                        
   
                    </div><!-- End cs_slider -->
                </div><!-- End cs_wrapper -->
            </div><!-- End contentslider -->
             <!-- Site JavaScript -->
        
          </div>
            
            <div class="project_content">
            
            	<div class="header_03">Welcome Guest</div>
                
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ac dui non tellus auctor convallis. Cras facilisis venenatis fermentum.</p>
                
            
            </div>
            
        </div>
        
        <div id="content_panel">
        	
            <div id="column_w610">
            
            	<div class="header_01">Control Waste Charges	-Login</div>
               
                
                
                
                
                
                
               
          </div> <!-- end of column w610 -->
            
            <div id="column_w290">
            
            	<div class="header_02">FAQ's</div>
                
                	<div class="news_section">
                    	<div class="news_date">
                        	29 <span> OCT</span>
                        </div>
                        <div class="news_content">
                        	<div class="header_05"><a href="#">Lorem ipsum dolor sit</a></div>
                            <p>Lorem ipsum dolor sit amet, cons ect etur adipiscing elit. Vestibu lum ac dui non tellus auctor.</p>
                        </div>
                        
                        <div class="cleaner"></div>
                    </div>
                    
                    <div class="news_section">
                    	<div class="news_date">
                        	28 <span> OCT</span>
                        </div>
                        <div class="news_content">
                        	<div class="header_05"><a href="#">Nam dictum pellentesque</a></div>
                            <p>Nam ultricies cursus enim, non aliquet orci lacinia ac. Etiam lobortis adipiscing convallis. </p>
                        </div>
                        
                        <div class="cleaner"></div>
                    </div>
                    
                    <div class="news_section">
                    	<div class="news_date">
                        	27 <span> OCT</span>
                        </div>
                        <div class="news_content">
                        	<div class="header_05"><a href="#">Donec faucibus tortor</a></div>
                          <p>Aliquam porttitor nibh in erat porttitor in accumsan dui pulvinar. Vivamus a sapien arcu.</p>
                        </div>
                        
                        <div class="cleaner"></div>
                    </div>
                            </div> <!-- end of column 290 -->
            
            <div class="cleaner"></div>
            
        </div> <!-- end of content panel -->
        
        <div class="cleaner"></div>
    </div> <!-- end of content -->
    
</div> <!-- end of content wrapper -->

<div id="templatemo_footer_wrapper">

	<div id="templatemo_footer">
	  <div class="section_w920">
        2015 Waste Management System, realcliqs.com
        </div>
        <div class="cleaner"></div>
    </div> <!-- end of footer -->
</div> <!-- end of footer -->
</html>