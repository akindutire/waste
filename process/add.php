<?php
	
	namespace cliqsFrameWork\add;
	
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

	
		$ad=$_POST['addid'];
		if($ad==1){
			
			$building_type=(string)$_POST['bdt'];
			$location=(string)ucwords(trim($_POST['addr']));
			$charge=abs($_POST['charge']);
			$tel=(string)$_POST['tel'];
			//echo $location;
				$me->addbd($building_type,$location,$charge,$tel);
			
		}else if($ad==2){

			$month=trim($_POST['my']);
			$day=trim($_POST['day']);
			$cdr=trim($_SESSION['cdr']);
			
			$me->submitchg($day,$month,$cdr);
			
			
		}else{
			
			}
	


?>