<?php

require_once'connection.php';
$category = "Category = 'Breakfast'";
$sql1 ="SELECT * FROM  recipemethod where $category";
$all_recipes = $conn->query($sql1);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>     
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Breakfast Recipes</title>
    <style>

body {

margin: 0;

}



.navbar {

padding-top: 20px;
padding-left: 15px;
font-size: 120%;
background-color:#ffdb58;
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
#banner{

   background-image:url(https://images.pexels.com/photos/376464/pexels-photo-376464.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1);
   height:350px;
   margin-top:100px;
  }

  .container{

    padding;10px;
    margin-top:50px;
    margin-bottom:100px;
    max-width:350px;
    margin-left:500px;

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
              <a class="nav-link" href="#" style="color:white;"><b>Cooking Guide</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" style="color:white;"><b>About</b></a>
            </li>
            <?php 

            if(isset($_SESSION['chef_id'])){
               
              $addRecipe = "addRecipe.php";

            }else{

              $addRecipe = "#";
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

    <!--header image-->
       <div class = "container-fluid" id ="banner">
         <h6>l</h6>
      </div>

      <div class = "container" >
         <h1>Breakfast Recipes</h1>
      </div>
    
    

    

  
    </header>
    <main>
   <!-- <div class="container">-->
      <!-- Example row of columns -->
    
         <div class="row">
         <?php 

         while($row =mysqli_fetch_assoc($all_recipes )){
        
        ?>
         <div class="col-sm">
           <h4><?php  echo $row['RecipeName']; ?></h4>
          <img src="./assets/CSS/images/Roast-Lamb.jpg" alt="roast lamb pic" width="350px" height="250px">
         </div>
         
      <?php
      }
      ?>
    
    </main>
    
</body>

</html>