<!-- connect file -->
<?php
include('includes/connect.php');
include('functions/common_function.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce Website</title>
    <!-- Bootstrap Css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Css file  -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <!-- navbar -->
    <div class="container-fluid p-0">
        <!-- first child -->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
  <div class="container-fluid">
    <img src="./images/logo.png" alt="" class="logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="display_all.php">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contacts</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Total Price: 100/-</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>


<!-- Second child -->
<nav class="navbar navbar-expand navbar-dark bg-secondary">
<ul class="navbar-nav me-auto">
         <li class="nav-item">
          <a class="nav-link" href="#">Welcome Guest</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="#">Login</a>
        </li>
</ul>
</nav>
<!-- third Child -->
<div class="bg-light">
    <h3 class="text-center">Hidden Stroe</h3>
    <p class="text-center">Communication is at the heart of a ecommerce and community</p>
</div>



<!-- fourth Child -->
<div class="row px-3">
  <div class="col-md-10">
    <!-- products -->
    <div class="row">
      <!-- fetching products -->
      <?php 
      //calling function common.php file theke
      get_all_products();
       get_unique_categories();
       get_unique_brands()
      ?>
      
  <!-- Row end -->
  </div>
  <!-- column end -->
  </div>
  <div class="col-md-2 bg-secondary p-0">
    <!-- brand to be display -->
    <ul class="navbar-nav me-auto text-center">
      <li class="nav-item bg-info">
        <a href="#" class="nav-link text-light"><h4>Delivery Brands</h4> </a>
      </li>

      <?php 
      //calling function common.php file theke
    getbrands();
      ?>

    </ul>
    <!-- Catgories to display -->
    <ul class="navbar-nav me-auto text-center">
      <li class="nav-item bg-info">
        <a href="#" class="nav-link text-light"><h4>Categories</h4> </a>
      </li>
     
      <?php 
       //calling function common.php file theke
     getcategories();
     
      ?>
    </ul>
  </div>
</div>

<!-- last child -->
    <!-- include footer -->
  <?php include("./includes/footer.php") ?>
    </div>
    



<!-- bootstrap js link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>