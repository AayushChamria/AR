<?php
session_start();
?>

<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "research";

$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);



$Email_ID =   $_SESSION['email'];

$btech_univ = $_SESSION['btech_univ'] = $_POST['btech_univ'];
$btech_year = $_SESSION['btech_year'] = $_POST['btech_year'];
$btech_subj = $_SESSION['btech_subj'] = $_POST['btech_subj'];
$btech_grade = $_SESSION['btech_grade'] = $_POST['btech_grade'];
$btech_cgp = $_SESSION['btech_cgp'] = $_POST['btech_cgp'];

$mtech_univ = $_SESSION['mtech_univ'] = $_POST['mtech_univ'];
$mtech_year = $_SESSION['mtech_year'] = $_POST['mtech_year'];
$mtech_subj = $_SESSION['mtech_subj'] = $_POST['mtech_subj'];
$mtech_grade = $_SESSION['mtech_grade'] = $_POST['mtech_grade'];
$mtech_cgp = $_SESSION['mtech_cgp'] = $_POST['mtech_cgp'];

$mphil_univ = $_SESSION['mphil_univ'] = $_POST['mphil_univ'];
$mphil_year = $_SESSION['mphil_year'] = $_POST['mphil_year'];
$mphil_subj = $_SESSION['mphil_subj'] = $_POST['mphil_subj'];
$mphil_grade = $_SESSION['mphil_grade'] = $_POST['mphil_grade'];
$mphil_cgp = $_SESSION['mphil_cgp'] = $_POST['mphil_cgp'];

$dip_univ = $_SESSION['dip_univ'] = $_POST['dip_univ'];
$dip_year = $_SESSION['dip_year'] = $_POST['dip_year'];
$dip_subj = $_SESSION['dip_subj'] = $_POST['dip_subj'];
$dip_grade = $_SESSION['dip_grade'] = $_POST['dip_grade'];
$dip_cgp = $_SESSION['dip_cgp'] = $_POST['dip_cgp'];


$sql = "UPDATE student_marks SET ";

$array1 =  array("btech_univ='$btech_univ'", "btech_year='$btech_year'", "btech_subj='$btech_subj'", "btech_grade='$btech_grade'", "btech_cgp='$btech_cgp'", "mtech_univ='$mtech_univ'", "mtech_year='$mtech_year'", "mtech_subj='$mtech_subj'", "mtech_grade='$mtech_grade'", "mtech_cgp='$mtech_cgp'", "mphil_univ='$mphil_univ'", "mphil_year='$mphil_year'", "mphil_subj='$mphil_subj'", "mphil_grade='$mphil_grade'", "mphil_cgp='$mphil_cgp'", "dip_univ='$dip_univ'", "dip_year='$dip_year'", "dip_subj='$dip_subj'", "dip_grade='$dip_grade'", "dip_cgp='$dip_cgp'");

$array2 = array(($btech_univ), ($btech_year), ($btech_subj), ($btech_grade), ($btech_cgp), ($mtech_univ), ($mtech_year), ($mtech_subj), ($mtech_grade), ($mtech_cgp), ($mphil_univ), ($mphil_year), ($mphil_subj), ($mphil_grade), ($mphil_cgp), ($dip_univ), ($dip_year), ($dip_subj), ($dip_grade), ($dip_cgp));
$cond = "WHERE Email_ID='$Email_ID'";

$addque = '';
for ( $i=0 ; $i<20 ; $i++ ) {
    if( $array2[$i] != '') {
        if($addque == NULL) {
        $addque ="$array1[$i]";
        }
        else {
        $addque = $addque.",".$array1[$i];
        }
    }
}
$sql = $sql.$addque."  ".$cond;

 $x = mysqli_query($conn,$sql);
  if ($x) 
  {
    echo "Success";
    header("Location: home.php");  
  }
  else
  {
      echo"Unsucess". "<br>".mysqli_error($conn);
  }
  mysqli_close($conn);
?>


