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
			<a href="#" class="username"><i class="fas fa-dot-circle" ></i><span style="color:black;"><?php echo $_SESSION['email'];?></span></a>
            <a href="home.php"><i class="fas fa-home" ></i><span style="color:black;">Home</span></a>
            <a href="form.php"><i class='fas'>&#xf15c</i><span style="color:black;">Fill Form</span></a>
            <a href="Upload.php"><i class='fas'>&#xf093</i><span style="color:black;">Uplaod Documents</span></a>
            <a href="table.php"><i class='fas'>&#xf303</i><span style="color:black;">Enter Marks</span></a>
            <a href="view_form.php"><i class="fas fa-eye"></i><span style="color:black;">View Form</span></a>
            <a href="view_doc.php"><i class="fas fa-eye"></i><span style="color:black;">View Documents</span></a>
            <a href="view_mks.php"><i class="fas fa-eye"></i><span style="color:black;">View Marks</span></a>
            <a href="submit.php"><i class="fas fa-sign-out-alt"></i><span style="color:black;">Submit Application</span></a>
            <a href="logout.php"><i class="fas fa-sign-out-alt"></i><span style="color:black;">Logout</span></a>
        </div>
        <div class="content" style="height:2670px;">
            <div class="main-content">
			<center>
          <h1>Fill Form</h1>
         </center>
                    <div class="start">
                        <form action="f.php" method="POST" enctype="multipart/form-data"><b>
                        <p align="left"id="rcorners4">
                        	<label for="File">FACULTY:<br><br></label>
        					<input type="text" placeholder="Field...."  name="Faculty"><br><br>
        					
        					<label for="File">SUBJECT:<br></br></label>
        					<input type="text" placeholder="Your Prefered subject...." name="Subject"><br><br>
        					
        					<label for="File">TOPIC OF THESIS:</br> <br></label>
        					<input type="text" placeholder="Ph.D Topic...." name="Topic_thesis"><br><br>
        					
        					1. Full Name in Capital:<br><br><input type="text" placeholder="Your Full Name..." name="Name"><br><br>
                            2. Date Of Birth:<br><br><input type="date" name="dob"><br><br>
                            3.<br>
                            a.Gender :
                 				<input type="radio" name="gender" value="Male">
                 				<label for="male">Male</label>
                 				
                 				<input type="radio" name="gender" value="Female">
                 				<label for="female">Female</label>

                 				<input type="radio" name="gender" value="Other">
                 				<label for="other">Other</label><br><br><br>
                 			
                 			b.Nationality:
                 				<input type="radio" name="Nationality" value="Indian">
                 				<label for="indian">Indian</label>

                			 	<input type="radio" name="Nationality" value="NRI">
                 				<label for="nri">NRI</label><br><br><br>
                 				
                 			c.Status:
                 				<input type="radio" name="status" value="Married">
                 				<label for="married">Married</label>

                 				<input type="radio" name="status" value="Unmarried">
                 				<label for="unmarried">Unamarried</label><br><br><br>
                 			
                 		    4.<label name="Address"> LOCAL ADDRESS:<br><br></label>
                 			  <textarea name="loc_address" rows="1" cols="20" style="box-shadow:1px 1px 1px 1px #888888;"></textarea><br>
                                                             
                 			  <label for="number">  Tel.No(if any)::</label>
                 			  <input type="Tel" name="loc_number" min="1" max="10" placeholder="123456789"><br><br><br>
                 			
                 			 5.<label for="Address"> PERMANENT ADDRESS:<br><br></label>
                 			   <textarea name="per_address" rows="1" cols="20" style="box-shadow:1px 1px 1px 1px #888888;"></textarea><br>
                                                             
                 			   <label for="number">  Tel.No(if any)::</label>
                 			   <input type="Tel" name="per_number" min="1" max="10"  placeholder="123456789" ><br><br><br>
                 			   
                 			 6.<label for="Category"> Whether belong to reserve category,if so,give details:<br><br></label>
                 			   <textarea name="category" rows="1" cols="20" style="box-shadow:1px 1px 1px 1px #888888;"></textarea><br><br>
                 			   
                 			 7.<label for="occupation">
                     		   Present Occupation/Employment:
                              (Give the name ,address and Telephone No.of the Employer)<br><br><br>
                              </label>
                              <textarea name="occupation" rows="1" cols="20" style="box-shadow:1px 1px 1px 1px #888888;"></textarea><br>
                                                             
                              <label for="number">  Tel.No(if any)::</label>
                              <input type="Tel" name="occ_number" min="1" max="10"  placeholder="123456789"><br><br><br>
                              
                            8.Have you gained any Proffessional experience in the subject after obtaining master's degree<br><br><br>
             

             				(i)Name of the institution where Professional experience was gained:<br><br><input type="text" name="exp_ins"><br><br>
             				(ii)Period of Professional experience:<br><br><input type="text" name="exp_per"><br><br>
             				(iii)Nature of Professional experience:<br><br><input type="text" name="exp_nat"><br><br>
             				
             			    
             			    9.<label for="Thesis"> Topic for the thesis for Ph.D.:<br><br></label>
             				  <textarea name="thesis" rows="1" cols="20" style="box-shadow:1px 1px 1px 1px #888888;"></textarea><br><br>
               
             				10.Name of the post-gradutae recognized
             				   teacher under whom you propose to work for your Ph.D courses:<br><input type="text" name="phd_teacher"><br><br>


                            11.<label for="Thesis">
                 			       Name and aaddress of the department/college/institution where desire to register for the course.:<br><br>
             				   </label>
             				   <textarea name="na_univ" rows="1" cols="20" style="box-shadow:1px 1px 1px 1px #888888;"></textarea><br><br>
               
                            12.<label for="Thesis"> 
                               		Whether the topic of the courses is submitted earlier, if so, given the details.:<br><br>
                               </label>
             				   <textarea name="submit_topic" rows="1" cols="20" style="box-shadow:1px 1px 1px 1px #888888;"></textarea><br><br><br>
             				   
             				Place :<br><input type="text" name="place"><br><br>
            				Date:<br><input type="date" name="date"><br><br><br>
            				
            				<input type="file" name="sign" ><br><br>
                			<label for="Upload">(APPLICANTS SIGNATURE)</label><br><br><br>
                     
                            <input type="submit" value="SUBMIT" class="submit_btn" style="background-color:#090d63;" >
                            
                            </form>
         				</div>    
        			</div>
    			</body>
    		
</html>
                                                

        	
        
        
        
        
        
        
        
        
