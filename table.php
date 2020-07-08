<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
        <link rel="stylesheet" href="Upload.css">
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
		i{
			color:#090d63;
		}
		header{
			background-color:#090d63;
		}
        
		
	</style>
    </head>
    <body style="height:100%;">
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


        <div class="sidebar">
            <a href="#"><i class="fas fa-dot-circle"></i><span style="color:black;"><?php echo $_SESSION['email'];?></span></a>
            <a href="home.php"><i class="fas fa-home"></i><span style="color:black;">Home</span></a>
            <a href="form.php"><i class='fas'>&#xf15c</i><span style="color:black;">Fill Form</span></a>
            <a href="Upload.php"><i class='fas'>&#xf093</i><span style="color:black;">Uplaod Documents</span></a>
            <a href="table.php"><i class='fas'>&#xf303</i><span style="color:black;">Enter Marks</span></a>
            <a href="view_form.php"><i class="fas fa-eye"></i><span style="color:black;">View Form</span></a>
            <a href="view_doc.php"><i class="fas fa-eye"></i><span style="color:black;">View Documents</span></a>
            <a href="view_mks.php"><i class="fas fa-eye"></i><span style="color:black;">View Marks</span></a>
            <a href="submit.php"><i class="fas fa-sign-out-alt"></i><span style="color:black;">Submit Application</span></a>
            <a href="logout.php"><i class="fas fa-sign-out-alt"></i><span style="color:black;">Logout</span></a>
        </div>
        <div class="content">
        <center>
          <h1>Enter Marks</h1>
         </center>
            <div class="main-content">
                    <div class="start">
                        <form method="POST" action="table_back.php">
        <table id="rcorners40">
    
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
                <td><input type="text" class="uni-name" name="btech_univ"></td>
                <td><input type="numbers" class="Year-passing" name="btech_year"></td>
                <td><input type="text" class="subjects" name="btech_subj"></td>
                <td><input type="text" class="grades" name="btech_grade"></td>
                <td><input type="text" class="Grade-point" name="btech_cgp"></td>
            </tr>
            <tr class="MD">
                <th>Master's Degree</th>
                <td><input type="text" class="uni-name" name="mtech_univ"></td>
                <td><input type="numbers" class="Year-passing" name="mtech_year"></td>
                <td><input type="text" class="subjects" name="mtech_subj"></td>
                <td><input type="text" class="grades" name="mtech_grade"></td>
                <td><input type="text" class="Grade-point" name="mtech_cgp"></td>
            </tr>
            <tr class="phd">
                <th>M.Phill. Degree</th>
                <td><input type="text" class="uni-name" name="mphil_univ"></td>
                <td><input type="numbers" class="Year-passing" name="mphil_year"></td>
                <td><input type="t ext" class="subjects" name="mphil_subj"></td>
                <td><input type="text" class="grades" name="mphil_grade"></td>
                <td><input type="text" class="Grade-point" name="mphil_cgp"></td>
            </tr>
            <tr class="others">
                <th class="others">Any other degree/Diploma</th>
                <td><input type="text" class="uni-name" name="dip_univ"></td>
                <td><input type="numbers" class="Year-passing" name="dip_year"></td>
                <td><input type="text" class="subjects" name="dip_subj"></td>
                <td><input type="text" class="grades" name="dip_grade"></td>
                <td><input type="text" class="Grade-point" name="dip_cgp"></td>
            </tr>
        </table><br><br>
         
                    <input type="submit" value="UPLOAD" class="submit_btn" style="background-color:#090d63;">
                         <br>
                                                                                                     
                     </form>
        
         </div>    
        </div>

    </body>
</html>
