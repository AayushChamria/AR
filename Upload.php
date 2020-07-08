<?php
session_start();
?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta charset="utf-8" />
        <title>DOCUMENTS TO BE UPLOADED</title>
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
                <a href="index.php"><i class="fas fa-home"></i><span style="color:black;">Home</span></a>
                <a href="form.php"><i class='fas'>&#xf15c</i><span style="color:black;">Fill Form</span></a>
                <a href="Upload.php"><i class='fas'>&#xf093</i><span style="color:black;">Upload Documents</span></a>
                <a href="table.php"><i class='fas'>&#xf303</i><span style="color:black;">Enter Marks</span></a>
                <a href="view_form.php"><i class="fas fa-eye"></i><span style="color:black;">View Form</span></a>
                <a href="view_doc.php"><i class="fas fa-eye"></i><span style="color:black;">View Documents</span></a>
                <a href="view_mks.php"><i class="fas fa-eye"></i><span style="color:black;">View Marks</span></a>
                <a href="submit.php"><i class="fas fa-sign-out-alt"></i><span style="color:black;">Submit Application</span></a>
                <a href="logout.php"><i class="fas fa-sign-out-alt"></i><span style="color:black;">Logout</span></a>
            </div>
            <div class="content" style="height:100%; width:1000px;">
            <center>
          <h1>Upload Documents</h1>
         </center>
                <div class="main-content" >

                    <form action="upload11.php" method="POST" enctype="multipart/form-data">
                        <b>
                            <p align="left" id="rcorners4" style="height:1820px;">
                                <label ="File" id="myFile" >1.FORM:</label><br><br>
                                <input type="file" ><br><br><br>
                                <label ="File" id="myFile" >2.SELECTION REPORT:</label><br><br>
                                <input type="file" name="selection_rpt"><br><br><br>
                                <label ="File" id="myFile" >3.R.A.C REPORT:</label><br><br>
                                <input type="file" name="rac_rpt"><br><br><br>
                                <label ="File" id="myFile" >4.INTERVIEW REPORT:</label><br><br>
                                <input type="file" name="interview_rpt"><br><br><br>
                                <label ="File" id="myFile" >5.DELAY LETTER(if interview conducted before 6 months):</label><br><br>
                                <input type="file" name="delay_ltr"><br><br><br>
                                <label ="File" id="myFile" >6.ADMISSION LETTER:</label><br><br>
                                <input type="file" name="admsn_ltr"><br><br><br>
                                <label ="File" id="myFile" >7.COLLEGE RECOGNITION LETTER(issued by the University):</label><br><br>
                                <input type="file" name="univ_ltr"><br><br><br>
                                <label ="File" id="myFile" >8.GUIDE RECOGNITION LETTER:</label><br><br>
                                <input type="file" name="guide_ltr"><br><br><br>
                                <label ="File" id="myFile" >9.PET/NET/SET/GATE/M.PHILL/Teaching Experience:</label><br><br>
                                <input type="file" name="experience"><br><br><br>
                                <label ="File" id="myFile" >10.BACHELOR MARK SHEETS & CONVOCATION CERTIFICATE:</label><br><br>
                                <input type="file" name="btech_marks"><br><br><br>
                                <label ="File" id="myFile" >11.MASTER MARK SHEETS & CONVOCATION CERTIFICATE:</label><br><br>
                                <input type="file" name="mtech_marks"><br><br><br>
                                <label ="File" id="myFile" >12.STUDENTS OF RESERVE CATEGORY:</label><br><BR><br>
                                <label ="File" id="myFile" >            i)    CASTE CERTIFICATE </label>
                                <input type="file" name="caste_certi"><br><br><br>
                                <label ="File" id="myFile" name="filename">            ii)   CASTE VALIDITY CERTIFICATE:</label>
                                <input type="file" name="caste_validity"><br><br><br>
                                <label ="File" id="myFile" name="filename">            iii)  NON-CREAMY LAYER:</label>
                                <input type="file" name="non_creamy"><br><br><br>
                                <label ="File" id="myFile" name="filename">13.NAME IS CHANGED?MARIIAGE CERTIFICATE OR GAZETTE COPY</label><br><br>
                                <input type="file" name="marr_gazette"><br><br><br>
                                <label ="File" id="myFile" name="filename">14.TOPIC OF PROPOSAL:</label><br><br>
                                <input type="file" name="topic_prop"><br><br><br>
                                <label ="File" id="myFile" name="filename">15.FEES PAYMENT RECEIPT:</label><br><br>
                                <input type="file" name="fee_rcpt"><br><br><br>
                            <!--<p align="center">-->
                                <input type="submit" value="SUBMIT" class="submit_btn" style="background-color:#090d63;">
                           <!-- </p> -->
                            </p>
                    </form>
                </div>

            </div>
        </body>
</html>
