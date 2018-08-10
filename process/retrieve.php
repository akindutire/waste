<?php
	
	namespace cliqsFrameWork\retrieve;
	
	//@param-class || subclass
	
	include_once('../include/settings.php');
	include_once('../class/users.php');
	
	use cliqsFrameWork\users\user as me;
	use cliqsFrameWork\users\connect as connectme;
	use cliqsFrameWork\users\performance as ivalid;
	use cliqsFrameWork\users\records as records;
	
	$me=new me();
	$connectme=new connectme();
	$checkme=new ivalid();
	$record=new records();


			$connectme->iconnect();
			$checkme->checkSys();

	
		$rv=$_POST['retrieveid'];
		if($rv==1){
			//Load Buildings

			$record->bds();
			
		}else if($rv==2){
			
			$cdr=(string)trim($_POST['cdr']);
			$record->cdetails($cdr);

		}	
		
		
	
	exit();
?>