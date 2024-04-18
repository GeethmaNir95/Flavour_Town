<?php 
session_start();
require_once'connection.php';

 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
    href="https://fonts.googleapis.com/css2?family=Asar&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
    rel="stylesheet">  
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
   
    margin-top:50px;


  }
#btn{
    background-color:black;
    color:white;
}

#btn2{
    background-color:black;
    color:white;
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
                  <a class="nav-link active" aria-current="page" href="index.php" style="color:white;"><b>Home</b></a>
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
                
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle"  style=color:white; id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><b>My Recipes</b></a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="
                <?php   if(isset($_SESSION['chef_id'])){

                   $addRecipe = "addRecipe.php";
                   echo $addRecipe;
                        }else{

                   $addRecipe = "login.php";
                   echo $addRecipe;

                       } ?>">Add Recipes</a>
              <a class="dropdown-item" href="
                <?php   if(isset($_SESSION['chef_id'])){

                   $editRecipe = "editRecipe.php";
                   echo $editRecipe;
                        }else{

                   $editRecipe = "login.php";
                   echo $editRecipe;

                       } ?>">Edit Recipes</a>
                 
    
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
        <div class ="container">
            <h3>Manage all your Recipes</h3>
            </div>
           
    
    <div class ="container">
    <form method="post" action="editRecipe.php">
        <label>Select the recipe to edit/delete</label>
        <input type="text" name="RecipeName" />
        <br><br>
        <input id ="btn2" type="submit" name="submit" value="Search to edit" />
        &nbsp;&nbsp;&nbsp;&nbsp;
     </div>
        
    </form>

        
        <?php
         if(isset($_POST["submit"])){

            include('connection.php');
          
             $RecipeName=$_POST['RecipeName'];
             $sql = "SELECT * FROM recipemethod WHERE RecipeName='$RecipeName'";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) 
                    {
                        $row = $result->fetch_assoc();
                        
                        
                        $chef_id=$row["chef_id"];
                        $category=$row["Category"];
                        $cuisine=$row["Cusine"];
                        $RecipeName=$row["RecipeName"];
                        $Ingredients=$row["Ingredients"];
                        $Directions=$row["Directions"];

                        

                         ?>
                        
                    <div class="container">
                        <form method='post' action='updateRecipe.php'>
                            
                            
                            <label><b>Recipe Name:</b>&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type='text' name='RecipeName' value='<?php echo $RecipeName; ?>'/> <br><br>
                            <label><b>Category:</b>&nbsp;&nbsp;</label>
                            <input type='text' name='category' value='<?php echo $category ;?>'/> <br><br>
                            <label><b>Cuisine:</b>&nbsp;&nbsp;&nbsp;</label>
                            <input type='text' name='Cusine' value='<?php echo $cuisine ;?>'/> <br><br>
                            <label><b>Ingredients:</b>&nbsp;&nbsp;&nbsp;</label>
                            <textarea name='Ingredients' id='Ingredients' value=''  rows='5' cols='100'><?php echo $Ingredients;?>
                           </textarea><br><br>
                            <label><b>Directions:</b>&nbsp;&nbsp;&nbsp;</label>
                            <textarea name='Directions' id='Directions' value='' rows='10' cols='100'><?php echo $Directions;?>
                            </textarea><br><br>
                            &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                            <input id= "btn" type='submit' name='submit' value='Submit' />
                            &nbsp;&nbsp;&nbsp;&nbsp;
                        
                        </form>
                    </div>
                        <?php
                    }
                    else 
                    {
                        echo " Not Found";
                    }
                    
             

            $conn->close();

                }
            ?>
            
      
      </main>
    
</body>
</html>
