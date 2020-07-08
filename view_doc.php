<?php
session_start();
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
        <div class="content" style="height:1730px;">
        
            
          <center>
          <h1>View Documents</h1>
         </center>
         <div style="padding-left:50px;">
        <!-- <center> -->
          <?php
                      
                       //session_start();
                       include "signupdb.php"; 
                       
                       $col_name  =    array("selection_rpt","rac_rpt","interview_rpt","delay_ltr","admsn_ltr","univ_ltr","guide_ltr","experience","btech_marks","mtech_marks","caste_certi","caste_validity","non_creamy","marr_gazette","topic_prop","fee_rcpt");                       

                       $ary = array("SELECTION REPORT","R.A.C REPORT","INTERVIEW REPORT","DELAY LETTER(if interview conducted before 6 months)","ADMISSION LETTER","COLLEGE RECOGNITION LETTER(issued by the University)",
"GUIDE RECOGNITION LETTER","PET/NET/SET/GATE/M.PHILL/Teaching Experience","BACHELOR MARK SHEETS & CONVOCATION CERTIFICATE","MASTER MARK SHEETS & CONVOCATION CERTIFICATE",
"STUDENTS OF RESERVE CATEGORY","CASTE CERTIFICATE","CASTE VALIDITY CERTIFICATE", "NON-CREAMY LAYER","NAME IS CHANGED?MARIIAGE CERTIFICATE OR GAZETTE COPY","TOPIC OF PROPOSAL","FEES PAYMENT RECEIPT");

                       $e=$_SESSION['email'];
                       
                       $sql="SELECT * FROM student_document WHERE email='$e'";
                       $result = mysqli_query($conn,$sql);
                       $rows=mysqli_fetch_assoc($result);
                       for($i=0;$i<16;$i++)
                       {
                       ?><div style="margin-bottom:20px;"><h3 style="display:inline-block;margin-right:10px;margin-top:10px;"><?php echo $ary[$i]; ?> : </h3><br><?php
                          if ($rows[$col_name[$i]]!='')
                          { ?><a href="<?php echo $rows[$col_name[$i]]; ?>" style="display:inline-block;position:absolute;" target="_blank">View Document</a><br><p>----------------------------------</p><?php
                          		//echo "Uploaded"."<br>";
                          		
                          }
                          else
                          {
                          		?><p style="display:inline-block;position:absolute;">Not Uploaded</p><br><p>----------------------------------</p></div><?php
                          		//echo "Not Uploaded"."<br>";
                          }
                       }
					   mysqli_close($conn);   

          ?> 
       <!--   </center>  -->
          </div>
        
        </div>
        
    </body>

</html>
