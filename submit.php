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
        <div class="content" style="height:670px;">
             
          
          <center>
          <h1>Submit Application</h1>
         </center>
         <br><br>
         <form action="submit_back.php" method="POST">
         <div class="mycontent" style="margin-left:25px;">
            <input type="checkbox" name="c1" value="1">
            <label for="c1">I hereby agree that I have reviewed my form and I submit it.</label>
            <br><br>
            <input type="checkbox" name="c2" value="1">
            <label for="c1">I hereby agree that I have reviewed my document and I submit it.</label>
            <br><br>
            <input type="checkbox" name="c3" value="1">
            <label for="c1">I hereby agree that I have reviewed the marks and I submit it.</label>
            <br><br>
            <input type="submit" name="s" value="Confirm" class="submit_btn" style="background-color:#090d63;">
            
            <?php
                if (isset($_POST['s'])) 
                {
                        if(!isset($_POST['c1']) || !isset($_POST['c2']) || !isset($_POST['c3']))
                    {
                        echo "<script>
                            alert('Check me');
                        </script>";
                    }
                    else
                    {
                        echo "<script>
                            alert('Submitted Successfully!');
                        </script>";
                        // header ("Location: home.php");
                    }
                }
            ?>
         </div>
         </form>
        </div>
    </body>

</html>
