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
<link rel="shortcut icon" href="../images/ico.png">

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
		@import "../css/table.css";
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
            <li><a href="../u0" class="current">Home</a></li>
            <li></li>
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
               
                
                <div id="form_cont">
                
          <div id="feedback" style="background:transparent; color:black; font-size:18px; padding:1px; margin:1% 32% 2px 32%; height:auto; width:350px; text-align:center; border-radius:3px;"></div>

                
                		<form action="../process/ulogin.php" method="post">
                        	
                            <div class="all"><label>Username</label><input type="text" name="usr" id="usr"></div>
                            <div class="all"><label>Password</label><input type="password" name="pwd" id="pwd"></div>
                            <div class="all"><label></label><button type="submit" id="sblogin">Login</button></div>
                        </form>
                    
                
                </div>
                
                
                
                
               
          </div> <!-- end of column w610 -->
            
            <div id="column_w290">
            
            	<div class="header_02">Contact</div>
                
                	<div class="news_section">
                	  <div class="news_content">
                   	    <div class="header_05"><a href="#"></a></div>
                            <p style="font-size:15px; padding:3px; font-family:amble; color:navy;">cliqsapp@gmail.com</p>
                            <p style="font-size:15px; padding:3px; font-family:amble; color:navy;">+234 8107926083</p>
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