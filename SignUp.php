<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Registration</title>

    <style type="text/css">
      
      body{
        font-family: 'Source Sans Pro','Helvetica Neue',Helvetica,Arial,sans-serif;
      }
      body{
        background:rgb(210,214,222);
      }

      .register-box-body
      {
        display: block;
        background-color: white;
        padding:20px;
        margin-bottom: 40px;
        box-sizing: border-box;
      }

      h1{
        text-align: center;
        padding:15px;
      }

      .login-box-message{
        text-align: center;
        font-weight: bold;
      }

      .submit-button
      {
        width: 100%;
        background-color: rgb(0,31,63);
        color: white;
        margin: 10px,0,10px,0;
        border: 0px;
        padding: 5px;
      }

      .form-group{
        padding: 0.7px;
      }

      .login{
        text-align: center;
      }

      p.login{
        margin-top: 1rem;
      }

      div.container{
        display: flex;
        justify-content: center;

      }
      a:hover{
        text-decoration: none;
      }

      div.container{
        margin-top: 50px;
      }

    </style>

  </head>
  <body>

    <div class="container">
    <div class="register-box-body">

      <p class="login-box-message">Register</p>

      <form action="SignUp.php" method="post">
      <fieldset>

      <div class="form-group">

          <label for="email"> E-mail</label>
          <input size="50" type="email" class="form-control" name="email" id="email" placeholder="E-mail" required>

        </div>

        <div class="form-group">

          <label for="password"> Password</label>
          <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>

        </div>

       <div class="form-group">

          <label for="confirm_password"> Confirm Password</label>
          <input type="password" class="form-control" name="re_password" placeholder="Confirm Password" id="confirm_password" required>

        </div>
      
        <input type="submit" class="submit-button" value="Register">
      </fieldset>
        </form>

        <p class="login"><a href="login.php">Already Registered? Log in</a></p>

    



  <?php


if($_SERVER['REQUEST_METHOD']==='POST')
{

$email=$_POST['email'];
$password=$_POST['password'];

  $connect=mysqli_connect("localhost","root","","research") or die("Unable to connect to database");

$query="SELECT * FROM `users` WHERE `E-mail`='$email' ";

$res_user=mysqli_query($connect,$query);

if(mysqli_num_rows($res_user)>0)
{
  echo '<div class="alert alert-danger" style="text-align:center;">E-mail ID already exists</div>';
}

else{
$query1[0]="INSERT INTO research.users(`E-mail`,`Password`)VALUES('$email','$password')";
$query1[1]="INSERT INTO research.form(`EMAIL_ID`)VALUES('$email')";
$query1[2]="INSERT INTO research.student_document(`email`)VALUES('$email')";
$query1[3]="INSERT INTO research.student_marks(`Email_ID`)VALUES('$email')";
$query1[4]="INSERT INTO research.student_submit_status(`EMAIL_ID`)VALUES('$email')";

for($i=0;$i<5;$i++)
{

    $parse_query=mysqli_query($connect,$query1[$i]);
}
header("Location: login.php");
}

}

  ?>


  </div>
  </div>


    <script type="text/javascript">
    
    var password=document.getElementById("password"),
    confirm_password=document.getElementById("confirm_password");

    function validatePassword(){
    if(password.value!=confirm_password.value){
      confirm_password.setCustomValidity("Passwords don't match");
    }

    else{
      confirm_password.setCustomValidity('');
    }
    }

    password.onchange=validatePassword;
    confirm_password.onkeyup=validatePassword;
  </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
