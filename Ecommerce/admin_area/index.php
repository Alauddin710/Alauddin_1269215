<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Bootstrap Css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- css file -->
    <link rel="stylesheet" href="../style.css">
    <!-- internal css -->
    <style>

    .admin_image{
    width: 100px;
    object-fit: contain;
    }
    .footer{
        position:absolute;
        bottom: 0;
    }

    </style>
</head>
<body>
    <!-- navbar -->
   <div class="container-fluid p-0">
    <!-- first child -->
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
    <div class="container-fluid">
        <img src="../images/logo.png" alt="" class="logo">
        <nav class="navbar navbar-expand-lg">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="" class="nav-link">Welcome Guest</a>
                </li>
            </ul>
        </nav>
    </div>
    </nav>
    <!-- Second Child -->
    <div class="bg-light">
        <h3 class="text-center p-2">Manage Details</h3>
    </div>
    <!-- Third Child -->
    <div class="row">
        <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
            <div class="p-3">
                <a href="#"><img src="../images/pineapplejuice.jpg" alt="" class="admin_image"></a>
                <p class="text-light text-center">Admin Name</p>
            </div>
            <div class="button text-center">
                <!-- button*10>a.nav-link.text.light.bg-info.my-1 -->
                <button class="my-3"><a href="insert_product.php" class="nav-link text-light bg-info my-1">Insert Products</a></button>
                <button><a href="" class="nav-link text-light bg-info my-1">View Products</a></button>
                <button><a href="index.php?insert_category" class="nav-link text-light bg-info my-1">Insert Categories</a></button>
                <button><a href="" class="nav-link text-light bg-info my-1">View Categories</a></button>
                <button><a href="index.php?insert_brand" class="nav-link text-light bg-info my-1">Insert Brands</a></button>
                <button><a href="" class="nav-link text-light bg-info my-1">View Brands</a></button>
                <button><a href="" class="nav-link text-light bg-info my-1">All orders</a></button>
                <button><a href="" class="nav-link text-light bg-info my-1">All payment</a></button>
                <button><a href="" class="nav-link text-light bg-info my-1">list users</a></button>
                <button><a href="" class="nav-link text-light bg-info my-1">Logout</a></button>
            </div>
        </div>
    </div>
    <!-- fourth Child -->
    <div class="container my-3">
        <?php 
        if(isset($_GET['insert_category'])){
            include('insert_categories.php');
        }
        if(isset($_GET['insert_brand'])){
            include('insert_brands.php');
        }
        ?>
    </div>
    <!-- last child -->
   <div class="bg-info p-3 text-center">
        <p>All right reserve 0- desing by alo 2022</p>
    </div>
   </div>

<!-- bootstrap js link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>