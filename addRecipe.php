<?php
session_start();


?>
<html>
<head>
       <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.o">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>     
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>Add Recipe</title>
    <style>
   body {

     margin: auto;

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



.container{
  max-width:600px;
  margin-top:50px;
  border-style: solid;
  border-width:1px;

  

}


label{

  padding-bottom:10px;
}



.field{

  max-width:500px;
}

h3{
  float:left;
  padding-top:20px;
  margin-right:50px;
}

#submit-btn{
  background-color:black;
}
    </style>

</head>
<body>
    <header>
        
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <!-- Container wrapper -->
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
            <a class="nav-link dropdown-toggle" style="color:white;" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><b>All Recipes</b></a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="lunchRecipes.php"style=color:white;>Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
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

    

  
    </header>
    <main>
    <h1></h1>
    <br>
    
  
    <?php 
     
     if(isset($_POST["submit"])){

      
      
      $file_name = $_FILES['recipeimage']['name'];
      $tempname =$_FILES['recipeimage']['tmp_name'];
      $folder ='./assets/CSS/images'.$file_name;

      $chef_id =$_SESSION['chef_id'];
      $recipeName = $_POST["RecipeName"];
      $category = $_POST["category"];
      $cusine = $_POST["cusine"];
      $ingredients = $_POST["Ingredients"];
      $directions = $_POST["Directions"];

     
          
  
 
  
 

     require_once('connection.php');
     $sql = "INSERT INTO recipemethod(RecipeName,chef_id,Category,Cusine,Ingredients,Directions,file) VALUES (?,?,?,?,?,?,?)";
     $stmt = mysqli_stmt_init($conn);
     $prepareStmt = mysqli_stmt_prepare($stmt,$sql);

     if($prepareStmt){

         mysqli_stmt_bind_param($stmt,"sssssss",$recipeName,$chef_id,$category,$cusine, $ingredients, $directions,$file_name );
         mysqli_stmt_execute($stmt);

         if(move_uploaded_file($tempname,$folder)){
          

         
            echo "Recipe uploaded successfully";
         
           }
         }

          else{
 
             die("Something went wrong.");
          }
 
     
     }
  
    
      

     ?>
    <!--Add Recipe Form-->

        <div class="container">  

        <form method="post" action="addRecipe.php" enctype="multipart/form-data">
        <h3>Add a New Recipe Here</h3> 
        <img src= "./assets/CSS/images/sandwich-311262_1280.webp" alt="sandwich image" width=100px>
        <br><br>
        

            <label for="RecipeName"><b>Name of the Recipe</b></label><br>
            <input type="text" id = "RecipeName" class="field-initial" name="RecipeName" placeholder ="Give your recipe a name"required /> <br><br>
   
           <!--image upload form-->
            

            <div class="form-group">
              <label for ="recipeimage"><b>Select an Image File for the Recipe</b></label>
               <input  id="recipeimage" type="file" name="recipeimage">
             </div>
            
            

            <label for="category"><b>Select a Category</b></label><br>
            <select name="category" id="category">
               <option value=" ">No selection </option>
               <option value="Breakfast">Breakfast Recipe</option>
               <option value="Lunch">Lunch Recipe</option>
               <option value="Dinner">Dinner Recipe</option>
               <option value="Dessert">Dessert Recipe</option>
            </select>
            <br><br>
            <label for="category"><b>Select a Cuisine</b></label><br>
            <select name="cusine" id="cusine">
               <option value=" ">No selection </option>
               <option value="Sri Lankan">Sri Lankan</option>
               <option value="Indian">Indian</option>
               <option value="Italian">Italian</option>
               <option value="Chinese">Chinese</option>
               <option value="Chinese">English</option>
            </select>
            <br>
            
            <br>
            <label><b>Ingredients</b>&nbsp;&nbsp;&nbsp;</label>
            <textarea name="Ingredients"  class="field"id="Ingredients" rows="5" cols="100" required> </textarea><br><br>
            <label><b>Directions</b>&nbsp;&nbsp;&nbsp;</label>
            <textarea name="Directions" class="field" id="Directions" rows="10" cols="100" required> </textarea><br><br>
            &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;

            
            <input type="submit" class ="btn btn-primary" id ="submit-btn"name="submit" value="submit" />
            &nbsp;&nbsp;&nbsp;&nbsp;
            <input type="button"class ="btn btn-primary" id="reset-btn" value="Reset" />
        </form>
      </div>
          </main>
</body>
</html> 