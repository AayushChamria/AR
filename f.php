<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "research";

$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
session_start();

$faculty = $_POST['Faculty'] ;

$subject = $_POST['Subject'] ;

$topic_thesis  = $_POST['Topic_thesis'] ;

$name  = $_POST['Name'] ;

$dob = $_POST['dob'] ;
 
$gender = $_POST['gender'] ;
 

$nationality = $_POST['Nationality'] ;
 
$status = $_POST['status']  ;
 
$loc_address = $_POST['loc_address'] ;
 
$loc_number = $_POST['loc_number'] ;
 
$per_address = $_POST['per_address'] ;
 
$per_number = $_POST['per_number'] ;
 
$category = $_POST['category'] ;
 
$occupation = $_POST['occupation'] ;

$occ_number = $_POST['occ_number'];
 
$exp_ins = $_POST['exp_ins'];

$exp_per = $_POST['exp_per'] ;
 
$exp_nat = $_POST['exp_nat'];
 
$thesis = $_POST['thesis'];
 
$phd_teacher = $_POST['phd_teacher'];
 
$na_univ  = $_POST['na_univ'];

$submit_topic = $_POST['submit_topic'];

$place = $_POST['place'];
 
$date = $_POST['date'] ;

$sql = "UPDATE form SET ";
$email=$_SESSION['email'];
$cond = "WHERE EMAIL_ID='$email'";
$q='';
//$email=$_SESSION['email'];


$ary= array("FACULTY='$faculty'","SUBJECT='$subject'","TOT='$topic_thesis'","FULL_NAME='$name'","DOB='$dob'","GENDER='$gender'","NATIONALITY='$nationality'","STATUS='$status'","LOCAL_ADDR='$loc_address'","LOCAL_TEL='$loc_number'","PERMT_ADDR='$per_address'","PERMT_TEL='$per_number'","RES_CATEGORY='$category'","OCCUPATION='$occupation'", "OCCU_TEL='$occ_number'","NAME_OF_INSTITUTION='$exp_ins'","PERIOD_PROFESSION='$exp_per'","NATURE_PROFESSION='$exp_nat'","TOPIC_PHD='$thesis'","PHD_TEACHER='$phd_teacher'","N_A_DEPARTMENT='$na_univ'","SUBMITTED_TOPIC='$submit_topic'","PLACE='$place'","DATE='$date'");

$ary1= array($faculty,$subject,$topic_thesis,$name,$dob,$gender,$nationality,$status,$loc_address,$loc_number,$per_address,$per_number,$category,$occupation,$occ_number,$exp_ins,$exp_per,$exp_nat,$thesis,$phd_teacher,$na_univ,$submit_topic,$place,$date);

$fileName = $_FILES['sign']['name'];
$fileSize = $_FILES['sign']['size'];
$fileTmpname = $_FILES['sign']['tmp_name'];
$part = explode('.',$fileName);
$extension = array('jpg', 'jpeg', 'pdf', 'png', 'html');
$actalExtsn = strtolower(end($part));

if (in_array($actalExtsn,$extension)) {
   
        $fileDestination = 'File/'.$fileName;
        move_uploaded_file($fileTmpname,$fileDestination);
}

else {
    //echo "Invalid Extension!";
}

for($i=0;$i<sizeof($ary);$i++)
{ 
	if($ary1[$i]!='')
	{  
		if($q=='')
		{
			$q=$ary[$i];
		}
		else
		{
			$q=$q.",".$ary[$i];
		}
	}	
}
if($fileName != '')
{
 $q=$q.","."BROWSE='$fileDestination'";
}
$sql=$sql.$q."  ".$cond;
echo $sql."<br>";
$result=mysqli_query($conn,$sql);
if ($result){
	echo"Success";
	header("Location: home.php");
}
else{echo mysqli_error($conn);}

?>










