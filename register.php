<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>User Registration</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>     
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
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
       height:500px;
       margin: auto;
       margin-top:80px;
       text-align:left;
       background-image:url(https://images.pexels.com/photos/616401/pexels-photo-616401.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1)
       

       }
       .alert{
       max-width: 275px;
       

       }
       #submit-btn{
         
        margin-left:160px;
        background-color:black;

       }
       
        </style>       
    
</head>

<body>

<header>
           
 </header>
<main>
   
    

    <div class="container">
    <h1>SignUp</h1>
    <?php

    if(isset($_POST["submit"])){
     $firstname = $_POST["firstname"];
     $lastname = $_POST["lastname"];
     $email = $_POST["email"];
     $login_password = $_POST["password"];
     $repeat_password = $_POST["repeat_password"];

     
 

 


 if( empty($firstname) || empty($lastname) || empty($email) || empty($login_password)){

    echo "<div class = 'alert alert-danger'>All fields are required.</div>";
}
else if( $login_password != $repeat_password){
 
    echo "<div class = 'alert alert-danger'>Both passwords should match.</div>";

}
else{

    require_once('connection.php');
    $sql = "INSERT INTO chef(firstname,lastname,email,password) VALUES (?,?,?,?)";
    $stmt = mysqli_stmt_init($conn);
    $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
    if($prepareStmt){
        mysqli_stmt_bind_param($stmt,"ssss",$firstname,$lastname,$email,$login_password);
        mysqli_stmt_execute($stmt);
        $_SESSION['username'] = $firstname;
    
        header("Location: login.php" );
        

    }
    else{

        die("Something went wrong.");
    }

    
    }
} 

?>



        <form action="register.php" method="post">
            <div class="form-group">
                <label for="firstname"><b>Firstname</b></label>
                <input type="text" class="form-control" id="firstname" name="firstname" >
            </div>
            <div class="form-group">
                <label for="lastname"><b>Lastname</b></label>
                <input type="text" class="form-control" id="lastname" name="lastname" >
            </div>
            <div class="form-group">
                <label for="email"><b>Email</b></label>
                <input type="text" class="form-control" id="email"  name="email">
            </div>
            <div class="form-group">
                <label for="password"><b>Password</b></label>
                <input type="password" class="form-control" name="password" id="password">
            </div>
            <div class="form-group">
                <label for="repeat_password"><b>Confirm Password</b></label>
                <input type="password" class="form-control" id="repeat_password" name="repeat_password">
            </div><br>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" id="submit-btn" name="submit" value="submit">
            </div>
        </form>

    </div>
</main>

</body>

</html>

