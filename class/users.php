<?php
namespace cliqsFrameWork\users;


/*	
	Encryption Type: AES
	Database Salt: cliqsdiamond
	App Provider: Cliqs Team
	User Website: realcliqs.com
	Author: Akindutire Ayomide Samuel
	Email: cliqsapp@gmail.com or akindutire33@gmail.com
	GPL Free Licience
	Contact: 08107926083
	Database Encrypted, System Trial Flag Available, And Personalized Script
	
*/


define('EXKIT','../images/exp.bmp');
define('UPKIT','../conn/update.txt');
define('SIKIT','../include/silent.bmp');
define('RELOCATEKITDIRECTORY','../images/silent.bmp');
define('X',101);

$link=mysqli_connect('localhost','root','','waste');


class connect{
	
	public function iconnect(){
		
			global $link;
			
			if($link){
				echo "";
			}else{
				die("System Currently Not Available, Try Again Later");
				}
		}
	
}

/*This Class Checks The System Integrity*/


class performance{
	
	
	public function checkSys(){
		
		global $link;
		
		$sql=mysqli_query($link,"SELECT * FROM performancetab WHERE st='1'") or die('101xFc: Unknown Reference');
		list($id,$start,$exp,$istatus,$lastmin)=mysqli_fetch_row($sql);
	
		if(mysqli_num_rows($sql)==0 && file_exists(EXKIT)==false){ 
			
			$trial=3;
			
			$this->createTrial($trial);
		

		}else if(file_exists(EXKIT)==false){
		
		
			$this->repairTrial($exp,$lastmin);
		
		}else if($exp=='LP'){
		
			echo '';
		
		}else{
		
			$this->updateTrial($exp,$lastmin);
		
			}
	}
	
	//Inter Fc
	
	private function createTrial($trial){
		global $link;
		
		//@Db Salt;
		$salt='cliqsdiamond';
		
		
		$start=date(time());
		$exp=date(strtotime("+ $trial year"));
		
		$fd=fopen(EXKIT,'w+');
		fwrite($fd,$exp);
		
		mysqli_query($link,"INSERT INTO performancetab(id,ifr,tg,st,lm) VALUES('NULL','$start','$exp',1,'$start')");

	}
	
	private function repairTrial($exp,$lastmin){
		
		global $link;
		
		$fd=fopen(EXKIT,'w+');
		fwrite($fd,$exp);
		mysqli_query($link,"UPDATE performancetab SET lm='$lastmin' WHERE id=1 and st=1");

		
		}
	
	private function updateTrial($exp,$lastmin){
		
		global $link;
		
		$inow=date('d M Y, H:i a',time());
		
		$now=date(time());
		
			if($lastmin>$now){
				die('System/PC Time Inaccurate, Please Adjust Your Date,$inow');
			
			}else if($now>=$lastmin){
				
				file_exists(SIKIT)?'':die('Application Error: Some Modules Unable To Load');
				
				if($now>$exp){
							
					@rename(SIKIT,RELOCATEKITDIRECTORY);
					die('Unexpected Reference 101xF, Strongly Recommend Contacting App Provider.');
						
				}else{
					$new_min=date(time());
					mysqli_query($link,"UPDATE performancetab SET lm='$new_min' WHERE id=1 and st=1");
				}	
			}
		}
	
	
	public function AppWriter($data){
		
		$time=date('d M Y, H:i a',time());
		$data="[$time]->$data\n
		----------------------------------------------------------------------------------
		\n";
		
		file_exists(UPKIT)?'':die('Application Error: Some Modules Unable To Load');
		
		$fd=fopen(UPKIT,'a+');
		fwrite($fd,$data);
		fclose($fd);
		}
	//End Inter Fc
		
}//End Class SysPerformance



class user{
	
	public function login($usr,$pwd){
		global $link;
		
		$sql=mysqli_query($link,"SELECT * FROM users WHERE mat='".mysqli_real_escape_string($link,$usr)."' AND password='".mysqli_real_escape_string($link,$pwd)."' AND bk='0'");
		
		if(mysqli_num_rows($sql)==1){
			$data="$usr LOGGED IN Through ".$_SERVER['HTTP_USER_AGENT'].' On A '.$_SERVER['HTTP_CONNECTION'].' Connection';
			
			$_SESSION['iusr']=$usr;
			$_SESSION['ipwd']=$pwd;
			
			performance::AppWriter($data);
			echo X;
		}else{
			echo "<img src='../images/cancel.png' width='auto' height='14px'>&nbsp;Invalid Combination";
			}
		
		}
		
	public function getdata(){
		global $link;
		
			$usr=$_SESSION['iusr'];
			$pwd=$_SESSION['ipwd'];
		
		
			$sql=mysqli_query($link,"SELECT id,role FROM users WHERE mat='".mysqli_real_escape_string($link,$usr)."' AND password='".mysqli_real_escape_string($link,$pwd)."'");
		
			list($id,$role)=mysqli_fetch_row($sql);
			$_SESSION['role']=$role;
			
			return $id;
		}
		
		
	public function logout($admin){
		global $link;
		
			
			$_SESSION[]=array();
			session_unset();
			
			$usr=$_SESSION['iusr'];
			
			$data="$usr LOGOUT Through ".$_SERVER['HTTP_USER_AGENT'].' On A '.$_SERVER['HTTP_CONNECTION'].' Connection';
			
			
			performance::AppWriter($data);

		if($admin!=1){
			header('location:../');
		}else{
			header('location:../admin');
			}

		}	
		
	
	public function verifylogin($role){
		global $link;
		$usr_id=$this->getdata();
		$role=ucfirst($role);
		if($_SESSION['role']==$role){
			
			echo '';
			
		}else{
			header('location:lgt.php');
			}		
		}
		
	public function haveexternalrights(){
		global $link;
		
		$usr_id=$this->getdata();
		$sql=mysqli_query($link,"SELECT extrights FROM users WHERE id='$usr_id'");
		list($ex)=mysqli_fetch_row($sql);
			
			return $ex;
		}
		
	public function addbd($building_type,$location,$charge,$tel){
		global $link;

		/* ******** Checking item Max Count *********************** */

			$hj=mysqli_query($link,"SELECT MAX(id) FROM bd");
			list($lid)=mysqli_fetch_row($hj);
			$lid++;
			
			$hji=mysqli_query($link,"SELECT location FROM bd WHERE location='$location'");
				
			
		/* ********  item Registration *********************** */
		
		if(mysqli_num_rows($hji)>0){
		
			die("A building Already using this address, <b>$location</b>");
		
		}else{
		
		$sql=mysqli_prepare($link,"INSERT INTO bd(id,bd_type,location,tel,charge,cardno) VALUES(?,?,?,?,?,?)");
		
		/* ************************Parameters***************************** */
		
		$e='';
		$bk=0;
		$cardno='WMS'.(rand(100,999)-rand(12,99))."$lid";
		
		
		/***************Binding Parameters****/
		mysqli_stmt_bind_param($sql,'isssss',$e,$building_type,$location,$tel,$charge,$cardno);
		
		if(mysqli_stmt_execute($sql)){
		
		$usr=$_SESSION['iusr'];	
		$data="$usr REGISTERED A MEMBER Through ".$_SERVER['HTTP_USER_AGENT'].' On A'.$_SERVER['HTTP_CONNECTION'].' Connection';
			
			/**********Logging user Event********************/
			
			performance::AppWriter($data);
			
			echo "<img src='../images/accept.png' height='14px' width='auto'>&nbsp;Successfully Added A Building, <b>Card No: $cardno</b>";
			}else{
				echo "<img src='../images/cancel.png' width='auto' height='14px'>&nbsp;Registration FAILED ,Please Retry";
				}
			}
		}
	
	//Add to Library
	public function additem(){
		global $link;
		
		/**************Checking Book Existence*********/
		
		$isbnsql=mysqli_query($link,"SELECT * FROM table WHERE xxxxx='$xxxx'");
		if(mysqli_num_rows($isbnsql)>0 && !empty($isbn)){
			die('This book has been registered, try another isbn');
			}
		
		/**************Validations**********************/


		
		
		/*----------------------*********Registering Book by Preparing A Query*************************-----------*/
		
		$sql=mysqli_prepare($link,"INSERT INTO library(id,) VALUES()");
		
		
		$e='';
		$date=date('D, M Y: H:i:s a',time());
		$id=$this->getdata();
		
		
		//mysqli_stmt_bind_param($sql,'',);
		if(mysqli_stmt_execute($sql)){
		
		$usr=$_SESSION['iusr'];
		$data="$usr REGISTERED A BOOK Through ".$_SERVER['HTTP_USER_AGENT'].' On A '.$_SERVER['HTTP_CONNECTION'].' Connection';
			
		/*****************Log User Event*************/	
			
			performance::AppWriter($data);
			
			}else{
				echo "<img src='../images/cancel.png' width='auto' height='14px'>&nbsp;Registration FAILED ,Please Retry";
				}

		}

	//Add to Catalog
	public function gettoday($i){
		global $link;
			$zdate=date('F Y',time());
			echo "
			<tr>
				<th>$zdate</th>
				<th>Tick Charge</th>
			
			</tr>";
			
			$sql=mysqli_query($link,"SELECT * FROM daylist WHERE cardno='$i' and my='$zdate'");
			
			while(list($e,$bid,$idate,$my,$cardno)=mysqli_fetch_row($sql)){
				
				echo "<tr><td>$idate</td><td><img src='../images/accept.png' height='14px' width='auto'></td></tr>";
				
			}
			
			$no_days=mysqli_num_rows($sql);
			
			$isql=mysqli_query($link,"SELECT charge FROM bd WHERE cardno='$i'");
			list($percharge)=mysqli_fetch_row($isql);
			
			$cur_chg=$percharge*$no_days;
			
			$cdate=date('t',time());
			$date=date('l F Y',time());
				
			$esql=mysqli_query($link,"SELECT date FROM daylist WHERE date='$date' AND cardno='$i'");
			if(mysqli_num_rows($esql)==0){
				
					echo "<tr><td>Today</td><td><input type='checkbox' value='$date' name='day' id='day'></td>
						
				</tr>
				<tr><td></td><td><button type='submit' id='sbsave'>Save</button></td></tr>

				";
			}else{
				echo "";
				}
				echo "<tr><td>Total Charge ($zdate :$no_days of $cdate)</td><td>N$cur_chg</td></tr>
				
				";
				
				echo "<input type='hidden' name='my' value='$zdate'>";

				;
			
		}
		
		
	public function getsum($i){
		global $link;
			$zdate=date('F Y',time());
			$cdate=date('t',time());
			
			$b_details=mysqli_query($link,"SELECT * FROM bd WHERE cardno='$i'");
			list($bdid,$bdtype,$location,$telephone,$chargeperday)=mysqli_fetch_row($b_details);

			echo "
			<div align='center' style='font-size:15px; color:black; font-family:amble; margin-top:4px; margin-bottom:2px;'>

				<p><span>Building-	</span>$bdtype</p>
				<hr>
				<p><span>Address-	</span>$location</p>
				<hr>
				<p><span>Contact-	</span>$telephone</p>
				<hr>
				<b>N$chargeperday Per Day</b>
				<hr>
				
			</div>


			";
			$sql=mysqli_query($link,"SELECT DISTINCT(my) FROM daylist WHERE cardno='$i'");
			
			
			$eisql=mysqli_query($link,"SELECT charge FROM bd WHERE cardno='$i'");
			list($percharge)=mysqli_fetch_row($eisql);
			
			
			while(list($zdate)=mysqli_fetch_row($sql)){
				
				
				
				echo "
					<tr>
						<th>$zdate</th>
						<th>Tick Charge</th>
			
			</tr>";
			
				$isql=mysqli_query($link,"SELECT * FROM daylist WHERE my='$zdate' AND cardno='$i'");
				$no_days=mysqli_num_rows($isql);
				$cur_chg=$percharge*$no_days;
				
				while(list($e,$bid,$idate,$my,$cardno)=mysqli_fetch_row($isql)){
					
					echo "<tr><td>$idate</td><td><img src='../images/accept.png' height='14px' width='auto'></td></tr>";
					
					}
				echo "<tr><td>Total Charge ($zdate :$no_days Appearance)</td><td>N$cur_chg</td></tr>";
				
				
			}
			
		}	
		
		
	public function submitchg($date,$month,$cdr){
		global $link;
			
			$uif=mysqli_query($link,"SELECT id FROM bd WHERE cardno='$cdr'");
			list($bid)=mysqli_fetch_row($uif);
			
			$sql=mysqli_query($link,"INSERT INTO daylist(id,bid,date,my,cardno) VALUES('NULL','$bid','$date','$month','$cdr')");
			if($sql){
				header('location:../u0/diary1.php');
			}else{
				echo "Fail: Sysstem Error";
				}
				
		}

	public function deleteabook($bk){
		global $link;
	
		}
	
	
	public function borrow($bid){
		global $link;
		
	
		}
		
	public function acceptrequest($i){
		global $link;
	
		}

	public function declinerequest($i){
		global $link;
	
		}
	
	public function returntolib($i){
		global $link;
		
		
		
		}

}//End Class User


class records{
	
	
	public function bds(){
		global $link;
		
		$usr_id=user::getdata();
		$sql=mysqli_query($link,"SELECT * FROM bd");
		
		
		
		echo "	<tr>
            	<th>Card no.</th>
			  	<th>Type</th>
                <th>Address</th>
                <th>Contact</th>
				<th>Charge Per Day</th>
			 </tr>";
			
		
			
			
		while(list($e,$building_type,$location,$tel,$charge,$cardno)=mysqli_fetch_row($sql)){
		
			
		    
			 
			 
        echo "  <tr>
              	<td><b>$cardno</b></td>
                <td>$building_type</td>
                <td>$location</td>
				<td>$tel</td>
                <td>N$charge</td>
				</tr>";

			
			
			}
	}
	public function cdetails($cdr){
		global $link;
		$sql=mysqli_query($link,"SELECT * FROM bd WHERE cardno='$cdr'");
		if(mysqli_num_rows($sql)==1){
			
			$_SESSION['cdr']=$cdr;
			echo X;
			
		}else{
			
			echo "Card no Incorrect, Suggest you re-enter no. again";
			}
		
		}
	
}//End Of Records




?>