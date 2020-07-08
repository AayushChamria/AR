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
$query = "SELECT * FROM form WHERE EMAIL_ID = '$Email_ID';";
$result = mysqli_query($conn,$query);
$count = mysqli_num_rows($result);
$row = mysqli_fetch_assoc($result);



?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Sidebar Dashboard Template</title>
    <link rel="stylesheet" href="form_css.css">
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
            border-color: #090d63;
			width: 10%;
			height: auto;
			padding-top: 8px;
			padding-bottom: 8px;
 			/* padding: 10px 20px; */
			background-color: white;
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
            <a href="#"><i class="fas fa-dot-circle"></i><span style="color:black;" class="username"><?php echo $_SESSION['email'];?></span></a>
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
          <h1>View Form</h1>
         </center>
         <div class="main-content">
                    <div class="start">
                        <form action="form_back.php" method="POST" enctype="multipart/form-data">
                            <b>
    <p align="left"id="rcorners4">
        
        <label for="File" id="File">FACULTY:<br><br></label>
        <input type="text" placeholder="Field...."  name="Faculty" disabled value="<?php echo $row['FACULTY'];?>"><br><br>

        <label for="File" id="File">SUBJECT:<br></br></label>
        <input type="text" placeholder="Your Prefered subject...." name="Subject" disabled value="<?php echo $row['SUBJECT'];?>"><br><br>

        <label for="File" name="File" id="File">TOPIC OF THESIS:</br> <br></label>
        <input type="text" placeholder="Ph.D Topic...." name="Topic_thesis" disabled value="<?php echo $row['TOT'];?>"><br><br>
                   
                 1. Full Name in Capital:<br><br> <input type="text" placeholder="Your Full Name..." name="Name" disabled value="<?php echo $row['FULL_NAME'];?>"><br><br>
                 2. Date Of Birth:<br><br><input type="date" name="dob" disabled value="<?php echo $row['DOB'];?>"><br><br>
                 3.<br>
                 a.Gender :
                 <input type="text"  name="Gender" disabled value="<?php echo $row['GENDER'];?>"><br><br>
                
               b.Nationality:
                 <input type="text" id="Indian" name="Nationality"  disabled value="<?php echo $row['NATIONALITY'];?>">
                    <br><br>
                c.Status:
                 <input type="text" id="married" name="status"  disabled value="<?php echo $row['STATUS'];?>">
                    <br><br>
                 4.<label for="Address" id="address"> LOCAL ADDRESS:<br><br></label>
                 <input type="text" id="address" name="loc_address" rows="1" cols="20"  disabled value="<?php echo $row['LOCAL_ADDR'];?>">
                                                            <br>

                 <label for="number">  Tel.No(if any)::</label>
                 <input type="Tel" id="number" name="loc_number" min="1" max="10" placeholder="123456789" disabled value="<?php echo $row['LOCAL_TEL'];?>"><br><br><br>

                 5.<label ="Address" id="address"> PERMANENT ADDRESS:<br><br></label>
                 <input type="text" id="address" name="per_address" rows="1" cols="20" disabled value="<?php echo $row['PERMT_ADDR'];?>">
                                                            <br>

                 <label for="number">  Tel.No(if any)::</label>
                 <input type="Tel" id="per_number" name="per_number" min="1" max="10"  placeholder="123456789" disabled value="<?php echo $row['PERMT_TEL'];?>"><br><br><br>

                
                 6.<label ="Category" id="category"> Whether belong to reserve category,if so,give details:<br><br></label>
                 <input type="text" id="category" name="category" rows="1" cols="20" disabled value="<?php echo $row['RES_CATEGORY'];?>">
                                                            <br><br>
                 7.<label ="occupation" id="occupation">
                     Present Occupation/Employment:
                     (Give the name ,address and Telephone No.of the Employer)<br><br><br>
                 </label>
                 <input type="text" id="occupation" name="occupation" rows="1" cols="20" disabled value="<?php echo $row['OCCUPATION'];?>">
                                                             <br>

                 <label for="number">  Tel.No(if any)::</label>
                 <input type="Tel" id="number" name="occ_number" min="1" max="10"  placeholder="123456789"disabled value="<?php echo $row['OCCU_TEL'];?>"><br><br><br>
                 
         
            8.Have you gained any Proffessional experience in the subject after obtaining master's degree<br>
             <br><br>

             (i)Name of the institution where Professional experience was gained:<br><br> <input type="text" name="exp_ins" disabled value="<?php echo $row['NAME_OF_INSTITUTION'];?>"><br><br>
             (ii)Period of Professional experience:<br><br> <input type="text" name="exp_per" disabled value="<?php echo $row['PERIOD_PROFESSION'];?>"><br><br>
             (iii)Nature of Professional experience:<br><br> <input type="text" name="exp_nat" disabled value="<?php echo $row['NATURE_PROFESSION'];?>"><br><br>

             9.<label ="Thesis" id="Thesis"> Topic for the thesis for Ph.D.:<br><br></label>
             <input type="text" id="Thesis" name="thesis" rows="1" cols="20" disabled value="<?php echo $row['TOPIC_PHD'];?>">
               <br><br>
             10.Name of the post-gradutae recognized
             teacher under whom you propose to work for your Ph.D courses:<br><input type="text" name="phd_teacher" disabled value="<?php echo $row['PHD_TEACHER'];?>"><br><br>

             11.<label ="Thesis" id="Thesis">
                 Name and aaddress of the department/
                 college/institution where desire to register for the course.:<br><br>
             </label>
             <input type="text" id="Thesis" name="na_univ" rows="1" cols="20" disabled value="<?php echo $row['N_A_DEPARTMENT'];?>">
               <br><br>
             12.<label ="Thesis" id="Thesis"> Whether the topic of the courses is submitted earlier, if so, given the details.:<br><br></label>
             <input type="text" id="Thesis" name="submit_topic" rows="1" cols="20" disabled value="<?php echo $row['SUBMITTED_TOPIC'];?>">
               <br><br>
              <br>
                                                                                                         

            Place :<br> <input type="text" name="place" disabled value="<?php echo $row['PLACE'];?>"><br><br>
            Date:<br> <input type="date" name="date" disabled value="<?php echo $row['DATE'];?>"><br><br><br>

                <a href="<?php echo $row['BROWSE'];?>">View Signature</a>
                <br><br>
                <!-- <input type="file" id="myFile" name="sign" disabled value="<?php echo $row['BROWSE'];?>"><br><br> -->
                <label="Upload" id="upload">(APPLICANTS SIGNATURE)</label><br><br><br>
                
           </form>
         </div>    
         <center>
        <input type="submit" value="SAVE" style="background-color:#090d63;" class="submit_btn">
        <input type="button" value="EDIT" style="align=center;" class="btn" onClick="location.href='form.php'">
        </center>
        </div>
    </body>

</html>
