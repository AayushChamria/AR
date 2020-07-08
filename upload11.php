<?php
            session_start();
include "signupdb.php";    
	$selection_rpt = $_FILES['selection_rpt'];
	$rac_rpt = $_FILES['rac_rpt'];
	$interview_rpt = $_FILES['interview_rpt'];
	$delay_ltr = $_FILES['delay_ltr'];
	$admsn_ltr = $_FILES['admsn_ltr'];
	$univ_ltr = $_FILES['univ_ltr'];
	$guide_ltr = $_FILES['guide_ltr'];
	$experience = $_FILES['experience'];
	$btech_marks = $_FILES['btech_marks'];
	$mtech_marks = $_FILES['mtech_marks'];
	$caste_certi = $_FILES['caste_certi'];
	$caste_validity = $_FILES['caste_validity'];
	$non_creamy = $_FILES['non_creamy'];
	$marr_gazette = $_FILES['marr_gazette'];
	$topic_prop = $_FILES['topic_prop'];
	$fee_rcpt = $_FILES['fee_rcpt'];
        
    $valid_extension = array("pdf","png","jpeg","html");
    $extension = explode(".",$selection_rpt["name"]);
	$checking='';
    $col_name  =    array("selection_rpt","rac_rpt","interview_rpt","delay_ltr","admsn_ltr","univ_ltr","guide_ltr","experience","btech_marks","mtech_marks","caste_certi","caste_validity","non_creamy","marr_gazette","topic_prop","fee_rcpt");                       

    $check  =    array(($selection_rpt),($rac_rpt),($interview_rpt),($delay_ltr),($admsn_ltr),($univ_ltr),($guide_ltr),($experience),($btech_marks),($mtech_marks),($caste_certi),($caste_validity),($non_creamy),($marr_gazette),($topic_prop),($fee_rcpt));                       

	$temp_name  =    array(($selection_rpt["tmp_name"]),($rac_rpt["tmp_name"]),($interview_rpt["tmp_name"]),($delay_ltr["tmp_name"]),($admsn_ltr["tmp_name"]),($univ_ltr["tmp_name"]),($guide_ltr["tmp_name"]),($experience["tmp_name"]),($btech_marks["tmp_name"]),($mtech_marks["tmp_name"]),($caste_certi["tmp_name"]),($caste_validity["tmp_name"]),($non_creamy["tmp_name"]),($marr_gazette["tmp_name"]),($topic_prop["tmp_name"]),($fee_rcpt["tmp_name"]));

	$value  =    array(($selection_rpt["name"]),($rac_rpt["name"]),($interview_rpt["name"]),($delay_ltr["name"]),($admsn_ltr["name"]),($univ_ltr["name"]),($guide_ltr["name"]),($experience["name"]),($btech_marks["name"]),($mtech_marks["name"]),($caste_certi["name"]),($caste_validity["name"]),($non_creamy["name"]),($marr_gazette["name"]),($topic_prop["name"]),($fee_rcpt["name"]));                       
 
 
   $value1 = '';
   $q1='';
    for($i=0;$i<sizeof($check);$i++)
    {
    	if($check[$i]["name"]!='')
    	{ 
    		$concatenate="docs/";
    		$concatenate=$concatenate.$value[$i];
    		move_uploaded_file($temp_name[$i],$concatenate);
    		

            if ($q1 == NULL)
    	    {
    	    	$q1="$col_name[$i]='$concatenate'";
    	    }
    	    else
    	    { 
    		$q1=$q1.","."$col_name[$i]='$concatenate'";
            }

    	}
    }
    $e=$_SESSION["email"];
    $sql = "UPDATE student_document SET ".$q1." WHERE email="."'$e'";
    
    $result = mysqli_query($conn,$sql);
    if ($result)
	        echo "sucess";
	    else
	    	echo (mysqli_error($conn)); 
	    	
    mysqli_close($conn);
	header("Location: home.php")
?>
	
                                                       
           
             
            
