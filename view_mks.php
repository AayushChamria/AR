<?php
session_start();
?>

<?php


$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "research";

$Email_ID =   $_SESSION['email'];

$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
$query = "SELECT * FROM student_marks WHERE Email_ID = '$Email_ID';";
$result = mysqli_query($conn,$query);
$count = mysqli_num_rows($result);
$row = mysqli_fetch_assoc($result);



?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Sidebar Dashboard Template</title>
    <link rel="stylesheet" href="Upload.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <style>
		#rcorners4{
			border-style: solid;
			border-color: #090d63;
		}
		.submit_btn{
			border-radius: 8px;
			width: 10%;
			height: auto;
			padding-top: 8px;
			padding-bottom: 8px;
 			/* padding: 10px 20px; */
			background-color: #090d63;
			font-weight: 800;
			color:white;			
		}
        .btn{
        	border-radius: 8px;
			width: 10%;
			height: auto;
			padding-top: 8px;
			padding-bottom: 8px;
 			/* padding: 10px 20px; */
			background-color: #090d63;
			font-weight: 800;
			color: #090d63;			
		    
        }
		i{
			color:#090d63;
		}
		header{
			background-color:#090d63;
		}
		
		
	</style>
</head>

<body>
    <input type="checkbox" id="check">
    <div>
        <header>
            <label for="check">
                <i class="fas fa-bars" id="sidebar_btn"></i>
            </label>
            <div class="left_area">
                <h3>Student</h3>
            </div>
        </header>
    </div>

    <body>
        <div class="sidebar">
            <a href="#"><i class="fas fa-dot-circle"></i><span style="color:black;"><?php echo $_SESSION['email'];?></span></a>
            <a href="home.php"><i class="fas fa-home"></i><span style="color:black;">Home</span></a>
            <a href="form.php"><i class='fas'>&#xf15c</i><span style="color:black;">Fill Form</span></a>
            <a href="Upload_html.php"><i class='fas'>&#xf093</i><span style="color:black;">Uplaod Documents</span></a>
            <a href="table.php"><i class='fas'>&#xf303</i><span style="color:black;">Enter Marks</span></a>
            <a href="view_form.php"><i class="fas fa-eye"></i><span style="color:black;">View Form</span></a>
            <a href="view_doc.php"><i class="fas fa-eye"></i><span style="color:black;">View Documents</span></a>
            <a href="view_mks.php"><i class="fas fa-eye"></i><span style="color:black;">View Marks</span></a>
            <a href="submit.php"><i class="fas fa-sign-out-alt"></i><span style="color:black;">Submit Application</span></a>
            <a href="logout.php"><i class="fas fa-sign-out-alt"></i><span style="color:black;">Logout</span></a>
        </div>
        <div class="content" style="height:2670px;">
         
          <center>
          <h1>View Marks</h1>
         </center>
         <table id="rcorners40" style="margin-left:50px;">
    
            <tr class="headers">
                <th>Degree</th>
                <th>University</th>
                <th>Year of passing</th>
                <th>Subject(s) Offered</th>
                <th>Class Grade</th>
                <th>Percentage Grade Points</th>
            </tr>
            <tr class="BD">
                <th>Bachelor's Degree</th>
                <td><input type="text" class="uni-name" name="btech_univ" disabled value="<?php echo $row['btech_univ'];?>"></td>
                <td><input type="numbers" class="Year-passing" name="btech_year" disabled value="<?php echo $row['btech_year'];?>"></td>
                <td><input type="text" class="subjects" name="btech_subj" disabled value="<?php echo $row['btech_subj'];?>"></td>
                <td><input type="text" class="grades" name="btech_grade" disabled value="<?php echo $row['btech_grade'];?>"></td>
                <td><input type="text" class="Grade-point" name="btech_cgp" disabled value="<?php echo $row['btech_cgp'];?>"></td>
            </tr>
            <tr class="MD">
                <th>Master's Degree</th>
                <td><input type="text" class="uni-name" name="mtech_univ" disabled value="<?php echo $row['mtech_univ'];?>"></td>
                <td><input type="numbers" class="Year-passing" name="mtech_year" disabled value="<?php echo $row['mtech_year'];?>"></td>
                <td><input type="text" class="subjects" name="mtech_subj" disabled value="<?php echo $row['mtech_subj'];?>"></td>
                <td><input type="text" class="grades" name="mtech_grade" disabled value="<?php echo $row['mtech_grade'];?>"></td>
                <td><input type="text" class="Grade-point" name="mtech_cgp" disabled value="<?php echo $row['mtech_cgp'];?>"></td>
            </tr>
            <tr class="phd">
                <th>M.Phill. Degree</th>
                <td><input type="text" class="uni-name" name="mphil_univ" disabled value="<?php echo $row['mphil_univ'];?>"></td>
                <td><input type="numbers" class="Year-passing" name="mphil_year" disabled value="<?php echo $row['mphil_year'];?>"></td>
                <td><input type="t ext" class="subjects" name="mphil_subj" disabled value="<?php echo $row['mphil_subj'];?>"></td>
                <td><input type="text" class="grades" name="mphil_grade" disabled value="<?php echo $row['mphil_grade'];?>"></td>
                <td><input type="text" class="Grade-point" name="mphil_cgp" disabled value="<?php echo $row['mphil_cgp'];?>"></td>
            </tr>
            <tr class="others">
                <th class="others">Any other degree/Diploma</th>
                <td><input type="text" class="uni-name" name="dip_univ" disabled value="<?php echo $row['dip_univ'];?>"></td>
                <td><input type="numbers" class="Year-passing" name="dip_year" disabled value="<?php echo $row['dip_year'];?>"></td>
                <td><input type="text" class="subjects" name="dip_subj" disabled value="<?php echo $row['dip_subj'];?>"></td>
                <td><input type="text" class="grades" name="dip_grade" disabled value="<?php echo $row['dip_grade'];?>"></td>
                <td><input type="text" class="Grade-point" name="dip_cgp" disabled value="<?php echo $row['dip_cgp'];?>"></td>
            </tr>
        </table><br><br>
        <div>
        <center>
        <input type="submit" value="SAVE" style="align=center;" class="submit_btn">
        <input type="button" value="EDIT" style="align=center;" class="btn" onClick="location.href='table.php'">
        </center>
        
        
        
        </div>
        
            <br>
        
            <br>    
        </div>
    </body>

</html>
