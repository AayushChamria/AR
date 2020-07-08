<?php
session_start();

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "research";

$Email_ID =   $_SESSION['email'];
$form_status = $_SESSION['c1'] = $_POST['c1'];
$doc_status = $_SESSION['c2'] = $_POST['c2'];
$marks_status = $_SESSION['c3'] = $_POST['c3'];

if (isset($_POST['s'])) 
{
        if(!isset($_POST['c1']) || !isset($_POST['c2']) || !isset($_POST['c3']))
    {
        echo "<script>
            alert('Check me');
        </script>";
        //header ("Location: submit.php");
    }
    else
    {
        echo "<script>
            alert('Submitted Successfully!');
        </script>";
        // header ("Location: home.php");
    }
}


$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);

$query = "UPDATE `student_submit_status` SET `FORM_STATUS`='$form_status',`DOC_STATUS`='$doc_status',`MARKS_STATUS`='$marks_status' WHERE `EMAIL_ID`='$Email_ID';";
$result = mysqli_query($conn,$query);
if($result)
{
    echo"ss";
    header("Location: home.php");
}
else{
    echo"aa";
}



?>
