<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cooking Guide</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>
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
margin-top:80px;
margin-bottom:50px;
margin-right:100px;
height:375px;
max-width:650px;

}
.guideImage{

float: left;
margin-left:100px;


}
#skillsheading{
  margin-top:20px;
  margin-bottom:30px;
  background-color:#20b2aa;
  max-width:550px;
  padding:5px;
  color:white;
}



    
  </style>

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
                  <a class="nav-link active" aria-current="page" href="index.php" style=color:white;><b>Home</b></a>
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
                  <a class="nav-link" href="CookingGuide.php" style=color:white;><b>Cooking Guide</b></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.php" style=color:white;><b>About</b></a>
                </li>
                <?php 
    
                if(isset($_SESSION['chef_id'])){
                   
                  $addRecipe = "addRecipe.php";
    
                }else{
    
                  $addRecipe = "#";
                }
                ?>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo $addRecipe; ?>" style=color:white;><b>My Recipes</b></a>
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
        <div class="container-fluid" id ="skillsheading">
        <h3>5 Essential Skills Every Cook Should Know</h3>        
      </div>
      <div  class ="guideImage" >
        <h3>1. How to chop an onion</h3>
          <img src ="./assets/CSS/images/chop-onion.jpg" height = 300px; width =400px;>
              </div>
      <div class ="container">
          <p>The cornerstone of so many dishes, learning to chop an onion efficiently can speed up dinner preparations no end. Take a few moments out and learn how to slice like a pro with our how to chop an onion video below. We've also been discussing ways to keep the tears at bay; apparently, sucking on a teaspoon while chopping will keep your eyes dry.</p>

      </div>
     

      <div  class ="guideImage" >
      <h3>2. How to master basic knife skills</h3>
          <img src =" " height = 300px; width =400px;>
      </div>
      <div class ="container">
          <p>Mastering knife skills involves developing the precision, speed, and safety required to efficiently and effectively cut, chop, slice, and dice ingredients in the kitchen. It encompasses techniques such as proper grip, hand positioning, and knife motion to achieve uniformity in cuts and minimize waste. Through practice and understanding of different knife types and their uses, one can enhance their culinary abilities, elevate presentation, and improve cooking efficiency.</p>

      </div>
      

      <div  class ="guideImage" >
      <h3>3. How to Boil an Egg</h3>
          <img src ="./assets/CSS/images/Egg.webp" height = 300px; width =400px;>
      </div>
      <div class ="container">
          <p>The cornerstone of so many dishes, learning to chop an onion efficiently can speed up dinner preparations no end. Take a few moments out and learn how to slice like a pro with our how to chop an onion video below. We've also been discussing ways to keep the tears at bay; apparently, sucking on a teaspoon while chopping will keep your eyes dry.</p>

      </div>

      
      <div  class ="guideImage" >
      <h3>4.How to poach an egg</h3>
          <img src ="./assets/CSS/images/poach-egg.webp" height = 300px; width =400px;>
      </div>
      <div class ="container">
          <p>The cornerstone of so many dishes, learning to chop an onion efficiently can speed up dinner preparations no end. Take a few moments out and learn how to slice like a pro with our how to chop an onion video below. We've also been discussing ways to keep the tears at bay; apparently, sucking on a teaspoon while chopping will keep your eyes dry.</p>

      </div>

      
      <div  class ="guideImage" >
      <h3>5.How to melt chocolate</h3>
          <img src ="./assets/CSS/images/chocolate.webp" height = 300px; width =350px;>
      </div>
      <div class ="container">
          <p>The cornerstone of so many dishes, learning to chop an onion efficiently can speed up dinner preparations no end. Take a few moments out and learn how to slice like a pro with our how to chop an onion video below. We've also been discussing ways to keep the tears at bay; apparently, sucking on a teaspoon while chopping will keep your eyes dry.</p>

      </div>
      </main>
    
    
</body>
</html>