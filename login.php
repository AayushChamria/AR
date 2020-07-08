<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Login</title>

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

      <p class="login-box-message">Log In</p>

      <form action="login.php" method="post">
      <fieldset>

      <div class="form-group">

          <label for="email"> E-mail</label>
          <input size="50" type="email" class="form-control" name="email" id="email" placeholder="E-mail" required>

        </div>

        <div class="form-group">

          <label for="password"> Password</label>
          <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>

        </div>
      
        <input type="submit" class="submit-button" value="Login">
      </fieldset>
        </form>

        <p class="login"><a href="SignUp.php">Not Yet Registered? Register</a></p>

    



  <?php


if($_SERVER['REQUEST_METHOD']==='POST')
{

$email=$_POST['email'];
$password=$_POST['password'];

  $connect=mysqli_connect("localhost","root","","research") or die("Unable to connect to database");

$query="SELECT * FROM `users` WHERE `E-mail`='$email' AND `Password`='$password'";

$res_user=mysqli_query($connect,$query);

if(mysqli_num_rows($res_user)>0)
{
  $user=mysqli_fetch_array($res_user);
  session_start();
  $_SESSION['email']=$user['E-mail'];
  header('Location: home.php');
  //   echo '<div class="alert alert-success" style="text-align:center;">Login Successfull</div>';
}

else{
  
  echo '<div class="alert alert-danger" style="text-align:center;">Invalid Credentials</div>';

}

}

  ?>


  </div>
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
