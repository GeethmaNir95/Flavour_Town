<?php

session_start();


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Food Blog</title>
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

      margin: 0%;

    }

    header {


      background-image: url(https://images.pexels.com/photos/7195271/pexels-photo-7195271.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1);
      height: 600px;
    }

    .navbar {

      padding-top: 20px;
      padding-left: 10px;
      font-size: 120%;

    }

    .navbar:hover {

      text-decoration: underline;
      text-decoration-color: white;
      text-decoration-style: solid;

    }

    #heading {

      max-width: 600px;
      margin-top: 200px;
    }

    .container h1 {

      color: white;
      font-size: 500%;
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

    .col-md-4 {}

    #subheading-1 {


      max-width: 350px;
      padding: 10px;
      margin-top: 60px;
      margin-bottom: 100px;

    }

    h4 {

      font-family: "Asar", serif;
      text-align: center;
      margin-top: 100px;
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
              <a class="nav-link active" aria-current="page" href="#" style=color:white;><b>Featured</b></a>
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
              <a class="nav-link" href="#" style=color:white;><b>Cooking Guide</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" style=color:white;><b>About</b></a>
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
 

    <div class="container" id="heading">
      <h1>Flavour Town</h1>
    </div>
    

  </header>

  <main>
    <div class="container" id="subheading-1">
      <h2> - Featured Recipes -</h2>
    </div>
    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h4>Lamb Gravy</h4>
          <img src="./assets/CSS/images/Roast-Lamb.jpg" alt="roast lamb pic" width="350px" height="250px">
        </div>
        <div class="col-md-4">
          <h4>Sausage & Rice Skillet</h4>
          <img src="./assets/CSS/images/sausage rice.jpg " alt="sausage rice pic" width="350px" height="250px">
        </div>
        <div class="col-md-4">
          <h4>Leftover Pork Chop Quesadilla </h4>
          <img src="./assets/CSS/images/Pork_Chop.jpg" alt="Pork chop pic" width="350px" height="250px">
         </div>
         <br><br><br>
          <div class="container">
            <!-- Example row of columns -->
            <div class="row">
              <div class="col-md-4">
                <h4>Chewy Chocolate Brownie</h4>
                <img src="./assets/CSS/images/chewy-chocolate-brownies-recipe-380x564.jpg" alt="roast lamb pic" width="350px" height="250px">
              </div>
              <div class="col-md-4">
                <h4>Lemon & Ginger Mocktail</h4>
                <img src="./assets/CSS/images/lemon-ginger-drink-1-380x564.jpg" alt="sausage rice pic" width="350px" height="250px">
              </div>
              <div class="col-md-4">
                <h4>Cranberry Nut Bread </h4>
                <img src="./assets/CSS/images/Cranberry-nut-bread-recipe-380x564.webp." alt="Pork chop pic" width="350px" height="250px">
  </main>
  <footer>


  </footer>



</body>

</html>