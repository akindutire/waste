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
<title>Waste Management|Card No.</title>
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
            <li><a onclick="window.close()">Close</a></li>
        </ul>    	
    </div> <!-- end of menu -->
</div> <!-- end of menu wrapper -->

<div id="tempatemo_content_wrapper">

    <div id="templatemo_content">
      <div id="content_panel">
        	
          <div id="column_w610">
            
            	<div class="header_01">Open Via Card No. </div>
               
                
                <div id="form_cont">
                
          <div id="feedback" style="background:transparent; color:black; font-size:14px; padding:1px; margin:1% 32% 2px 32%; height:auto; width:350px; text-align:center; border-radius:3px; font-family:amble;"></div>

                
                		<form action="../process/retrieve.php" method="post">
                        	
                            <div class="all"><label>Card No.</label><input type="text" name="cdr" id="cdr"></div>
                            
                            <div class="all"><label></label><button type="submit" id="sbverify">Enter</button></div>
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