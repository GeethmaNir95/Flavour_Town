<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.o">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>     
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        
        <title>Login Page</title>
        <style>
        body {
                font-family: Arial, Helvetica;
                text-align:center;
                
                
                
                
            }
            h1{

            padding: 20px;
            color:white;
            margin-left:370px;
        }
        
            
        .form-group{
            max-width: 400px;
            margin-bottom: 10px;
            margin:auto;
            color: darkblue;
            
            
        }
        
        .form-control{

        border-color: grey;
       }
       label{
        text-align:left;
        color:black;
       }
       
       .container{
       max-width:960px;
       height:450px;
       margin: auto;
       margin-top:100px;
       text-align:left;
       background-image:url(https://images.pexels.com/photos/616401/pexels-photo-616401.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1)
       

       }
       .alert{
       max-width: 275px;
       

       }
       #submit-btn{
         
        margin-left:420px;
        background-color:black;

       }
       
   </style>
    </head>
    <body>
    <header>

    </header>
        
        
        <div class = "container">
        <h1>Login</h1><br>

        <?php
     if(isset($_POST["submit"])){

     if(empty($_POST["email"]) || empty($_POST["password"]))
    {
        echo "<div class = 'alert alert-danger'>Both fields are required.</div>";
    }
    else
    {   
        include("connection.php"); //Establishing connection with our database
        $email=$_POST['email'];
        $login_password=$_POST['password'];
        $sql="SELECT chef_id FROM chef WHERE email='$email' and password='$login_password'";
        $result=mysqli_query($conn,$sql);

        if(mysqli_num_rows($result) == 1)
        {   
            
            while($row = $result->fetch_array()){

                $_SESSION['chef_id']=$row['chef_id'];
            
            }
            
            header("location: index.php"); // Redirecting To another Page
        }
        else
        {
            echo "<div class = 'alert alert-danger'> Incorrect email or password </div>";
        }
    }
}
?>
   
      <form  action="login.php" method="post">
        <div class ="form-group">
        <label for="email"><b>Email</b></label>
        <input type="text" class="form-control" id="email" name="email" ><br>
        </div>  
         <div class="form-group">
        <label for="password" ><b>Password</b></label>
        <input type="password" class="form-control" id="password" name="password" ><br>
        </div>
       <input type="submit" class="btn btn-primary" id="submit-btn" name="submit" value="Login"> 
        <br><br>
       
        
      </form> 
</div>
    

    </body>
</html>
