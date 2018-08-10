<?php
namespace cliqsFrameWork\logoutadmin;

	include_once('../class/users.php');
	include_once('../include/settings.php');

	use cliqsFrameWork\users\user as me;
	use cliqsFrameWork\users\connect as connectme;
	use cliqsFrameWork\users\performance as ivalid;
	
	$me=new me();
	$connectme=new connectme();
	$checkme=new ivalid();
	
	
	$me->logout(0);

?>