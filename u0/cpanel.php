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
		
	$r='Staff';
	$me->verifylogin($r);

header('Content-Type:text/html; charset=utf-8');
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Waste Management|mpanel</title>
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
            <li><a href="cpanel.php" class="current">Home</a></li>
            <li><a href="addhouse.php">Add Building</a></li>
            <li><a href="bds.php">Building</a></li>
            <li><a href="diary.php">Mark Visitation</a></li>
            <li><a href="lgt.php">Logout</a></li>
        </ul>    	
    </div> <!-- end of menu -->
</div> <!-- end of menu wrapper -->

<div id="tempatemo_content_wrapper">

    <div id="templatemo_content">
      <div id="content_panel">
        	
          <div id="column_w610">
            
            	<div class="header_01">Control Waste Charges	-Control Panel</div>
               
                
                <div id="form_cont">
                
          <div id="feedback" style="background:transparent; color:black; font-size:18px; padding:1px; margin:1% 32% 2px 32%; height:auto; width:350px; text-align:center; border-radius:3px;"></div>





    <center>
        <div style="display: flex;  justify-content: center;">

    		<div style="width: 500px;">

                <div style="padding: 4px; width: 20%; display: inline-block; position: relative;"><a href="addhouse.php" title="Add new Building"><img src="../images/ico.png" height="70px" width="auto"></a><br><i>Add new Building</i></div>
            
                <div style="padding: 4px; width: 20%; display: inline-block; position: relative;"><a href="bds.php" title="Buildings"><img src="../images/listing8.png" height="70px" width="auto"></a><br><i>Open Building</i></div>
            
                <div style="padding: 4px; width: 20%; display: inline-block; position: relative;"><a href="diary.php" title="Mark Visitation"><img src="../images/allocated.png" height="70px" width="auto"></a><br><i>Mark Visitation</i></div>
            
            </div>
        </div>    
    
    </center>





                
                    
                
                </div>
                
                
                
                
               
        </div> <!-- end of column w610 -->
            
            <div id="column_w290">
            
            	
                
        </div> <!-- end of column 290 -->
            
            <div class="cleaner"></div>
            
      </div> <!-- end of content panel -->
        
        <div class="cleaner"></div>
  </div> <!-- end of content -->
    
</div> <!-- end of content wrapper -->

<div id="templatemo_footer_wrapper">

	<div id="templatemo_footer">
	  <div class="section_w920">
        2015 Waste Management System
        </div>
        <div class="cleaner"></div>
    </div> <!-- end of footer -->
</div> <!-- end of footer -->
</html>