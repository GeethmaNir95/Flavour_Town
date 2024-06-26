<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<style>
body {

    margin: 0;
 
 }
 
 
 
 .navbar {
 
 padding-top: 20px;
 padding-left: 15px;
 font-size: 120%;
 background-color:orange;
 color:white;
 
 
 }
 
 .navbar:hover {
 
 text-decoration: underline;
 text-decoration-color: white;
 text-decoration-style: solid;
 
 }
 
 
 
 .btn {
 
 margin-right: 10px;
 background-color: white;
 color: black;
 border-color: white;
 
 
 }
 
 .btn:hover {
 
 background-color: orange;
 }
 
 
   .col-sm{
    margin-left:50px;
    margin-right:0px;
    margin-top:10px;
    
    
 
   }
   h4{
 
     padding-top:20px ;
     padding-bottom:20px ;
 
   }
 
 
   #recipe_main_image{
 
     
     margin-top:20px;
     margin-bottom:100px;
     max-width:350px;
     margin-left:100px;
     display: flex;
   }
 
   .container{
 
 
 
   }
 #recipe_main_image{
 float: left;
 
 }
 
   #des1{
    
    
     max-width: 700px;
     margin-top:25px;
     margin-right: 50px;
     height:250px;
   }
 
   #des2{
     
     max-width: 700px;
     margin-top:25px;
     margin-right: 50px;
     height:300px;
 }
 </style>

 </head>
<body>
    <header>
     <!-- Navbar -->
     <nav class="navbar navbar-expand-lg navbar-light">
          
        <div class="container-fluid">
             
  
          <!-- Collapsible wrapper -->
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left links -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#" style="color:white;"><b>Featured</b></a>
              </li>
  
            
                <!-- Dropdown menu -->
                <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle"  style=color:white; id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><b>All Recipes</b></a>
              <div class="dropdown-menu" aria-labelledby="dropdown01">
                <a class="dropdown-item" href="Breakfast-Recipes.php">Breakfast Recipes</a>
                <a class="dropdown-item" href="lunch-Recipes.php">Lunch Recipes</a>
                <a class="dropdown-item" href="Dinner-Recipes.php">Dinner Recipes</a>
                <a class="dropdown-item" href="dessert-Recipes.php">Dessert Recipes</a>
              </div>
            </li>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="cookingGuide.php" style="color:white;"><b>Cooking Guide</b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php" style="color:white;"><b>About</b></a>
              </li>
              <?php 
  
              if(isset($_SESSION['chef_id'])){
                 
                $addRecipe = "addRecipe.php";
  
              }else{
  
                $addRecipe = "login.php";
              }
              ?>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo $addRecipe; ?>" style="color:white;"><b>My Recipes</b></a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"
                  >Disabled</a
                >
              </li>-->
  
            </ul>
            <!-- Left links -->
          </div>
          <!-- Collapsible wrapper -->
        </div>
        <!-- Container wrapper -->
        <a class="btn btn-primary" href="login.php" role="button"><b>Login</b></a>
        <a class="btn btn-primary" href="register.php" role="button"><b>Register</b></a>
      </nav>
      <!-- Navbar -->
  
        </header>
    <main>
    
    #2E8B57
     

    </main>

    
</body>
</html>



