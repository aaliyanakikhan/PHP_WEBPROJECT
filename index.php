<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce website using php and mysql.</title>

    <!--boortstrap css link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
     crossorigin="anonymous">

  
       

         <!-- css file link-->
            <link rel="stylesheet"  href="./style.css">
   
   
   
         <!--front awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
     crossorigin="anonymous" 
     referrerpolicy="no-referrer" />
    
      
    
</head>
<body>
    <!--<h1>Neo perfumes</h1>-->
    <!--navbar-->

    <div class="container-fluid p-0">
        <!--first child   -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light"><!--info for blue color panel-->
  <div class="container-fluid">
    <img src="./images/neopurple2.jpg" alt=""  class="logo"> 
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Products</a>
        </li>
        <!--the commented code is for more enhance ment  currently skipping because to make simple 
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li> -->

        <li class="nav-item">
          <a class="nav-link" href="#">Register</a>
        </li>
      
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="#">Cart  <i class="fa fa-shopping-cart" aria-hidden="true"></i><sup>1</sup></a>
        </li>

        
        <li class="nav-item">
          <a class="nav-link" href="#">Total Price</a>
        </li>
  


    


      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Explore" aria-label="Explore">
        <button class="btn btn-outline-info" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<!-- second child -->
 <nav class= "navabar navbar-expand-lg navabar-dark bg-light ">
<u1 class="navbar-nav me-auto">

<li class="nav-item">
          <a class="nav-link" href="#">Welcome Guest</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="#">Log-in</a>
        </li>

        </u1>
 </new>

<!-- third child -->

<div class="bg-light">
  <h3 class="text-center">Neo Perfumes</h3>
  <p class="text-center">Enhancing the Experiance

  </p>

</div>

<!-- forth child-->
 <div class="row">
<div class="col-md-10">
  <P1>    EXPLORE THE LUXURY of FEMINE</P1>


  <!-- product-->
   <div class="row">
    <div class="col-md-4 mb-2">
    <div class="card">
  <img src="./images/Elysianserrenade.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-INFO">Add To Card</a>
    <a href="#" class="btn btn-secondary">View More </a>
  </div>
</div>
    </div>
<div class="col-md-4 mb-2"> 
      <div class="card" ><!-- style="width: 18rem;"-->
  <img src="./images/midnightenchantment.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-INFO">Add To Card</a>
    <a href="#" class="btn btn-secondary">View More </a> 
  </div>
</div>
</div>
    <div class="col-md-4 mb-2 ">
    <div class="card" > <!--style="width: 18rem;"-->
  <img src="./images/CELESTIALWHISPER.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-INFO">Add To Card</a>
    <a href="#" class="btn btn-secondary">View More </a>
  </div>
</div>
    </div>
    <P2>     EXPLORE THE LUXURY of MASCULINE</P2>

   <div class="col-md-4">
    <div class="card">
  <img src="./images/imperialechelon.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-INFO">Add To Card</a>
    <a href="#" class="btn btn-secondary">View More </a>
  </div>
    
    </div>
   </div> 
   <div class="col-md-4">
    <div class="card" > <!--style="width: 18rem;"-->
  <img src="./images/noirvanguard.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-INFO">Add To Card</a>
    <a href="#" class="btn btn-secondary">View More </a>
  </div>
</div>
    </div>
    
    <div class="col-md-4">
    <div class="card" > <!--style="width: 18rem;"-->
  <img src="./images/mystichorizon.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-INFO">Add To Card</a>
    <a href="#" class="btn btn-secondary">View More </a>
  </div>
</div>
</div>
</div>
</div>



<!-- sidenav-->


<!--<div class="col-md-2 bg-light-lavender p-0">  code for light purple -->     
<div class="col-md-2 bg-dark-royal-purple p-0">                   
  <ul class="navbar-nav me-auto text-center">
    <li class="nav-item bg-INFO">
      <a href="#" class="nav-link text-light">
        <h4>Our Products</h4>
      </a>
      <ul>
        <li class="nav-item bg-INFO">
          <a href="#" class="nav-link text-light">Body Mist</a>
        </li>
        <li class="nav-item bg-INFO">
          <a href="#" class="nav-link text-light">Eau De Toilette</a>
        </li>
        <li class="nav-item bg-INFO">
          <a href="#" class="nav-link text-light">Eau De Parfum</a>
        </li>
        <li class="nav-item bg-INFO">
          <a href="#" class="nav-link text-light">Cologne</a>
        </li>
        <li class="nav-item bg-INFO">
          <a href="#" class="nav-link text-light">Body Lotion</a>
        </li>
        <li class="nav-item bg-INFO">
          <a href="#" class="nav-link text-light">Essential Oils</a>
        </li>
        <li class="nav-item bg-INFO">
          <a href="#" class="nav-link text-light">Hair Mist</a>
        </li>
        <li class="nav-item bg-INFO">
          <a href="#" class="nav-link text-light">Diffusers</a>
        </li>
        <li class="nav-item bg-INFO">
          <a href="#" class="nav-link text-light">Perfume Oil</a>
        </li>
      </ul>
<!--categary to be displayed -->
     <ul class="navabar-nav me-auto text-center">
      <li class= "nav-item bg-INFO">
        <a href= "#" class="nav-link text-light">Female</a>
     </li> 
     <li class= "nav-item bg-INFO">
        <a href= "#" class="nav-link text-light">male</a>
     </li> 
     <!--
     <li class= "nav-item bg-INFO">
        <a href= "#" class="nav-link text-light">categori3</a>
     </li> 
     <li class= "nav-item bg-INFO">
        <a href= "#" class="nav-link text-light">categori4</a>
     </li> 
-->
  </ul>
</div>
</div>







<!-- last child -->
<div class="bg-light p-3 text-center">
 <p>All Right Are Reserved Design by  Aaliya-Designer Orange pie 2024</p>

</div>
</div>





<!--boortstrap js link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
 crossorigin="anonymous"></script>

</body>
</html>