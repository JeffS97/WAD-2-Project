<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!--Cambria-->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <!--Raleway font stylesheet-->
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">

    <style>
       .logo{
          font-family: 'Open Sans', sans-serif;
          font-weight: bolder;
        } 
        .nav{
            position: fixed; /* Stay in place */
            z-index: 1; /* Stay on top */
            top: 0; /* Stay at the top */
          
        }
        body{
            font-family:'Montserrat', sans-serif;
            font-size: 23px;
        }
        .btn-info {
          font-size: 20px;
          color: white;
          letter-spacing: 1px;
          line-height: 15px;
          border: 2px solid ;
          border-radius: 30px;
          padding: 15px;
        }
        .nav-item{
            padding-left: 20px;
            padding-right: 20px;
        }
        @media screen and (max-width: 575px) {
            .carousel{
                width: 100%;
                display: block;
                margin-bottom: 20px;
            }
        }
        @import url("https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap");

        .card {
  margin-bottom: 1rem;
}

.list-view .row > [class*='col-'] {
  max-width: 90%;
  -webkit-box-flex: 0;
          flex: 0 0 800%;
  
}
.list-view .card {
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
          flex-direction: row;
}
.list-view .card:hover{
width: 100%;
}
@media (max-width: 575.98px) {
  .list-view .card {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
            flex-direction: column;
  }
}
.list-view .card > .card-img-top {
  width:200px;
}
.list-view .card  .button{
 width: 20%
}
.list-view .card .card-body {
  display: inline-block;
}
.card-text{
  font-family: "Open Sans", sans-serif;
      font-size: 16px;
}
/*button




*/
.button {
  width: 80%;
  height: 40px;
  font-size: 1rem;
  margin: 20px;
  color: black;
  border: none;
  box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.5);
  border-radius: 5px;
  background: linear-gradient(45deg, #ff6b6c, #ffc145, #ffc145, #ff6b6c);
  background-size: 300% 300%;
  outline: none;
  transition: all 200ms ease-in-out;
}
 .button:hover {
  box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.5);
  transform: translateY(2px);
  -webkit-animation: gradientBG 1.5s ease-in-out forwards;
  animation: gradientBG 1.5s ease-in-out forwards;
  cursor: pointer;
}
 
@media (max-width: 768px) {
    .carousel-inner .carousel-item > div {
        display: none;
    }
    .carousel-inner .carousel-item > div:first-child {
        display: block;
    }
}

.carousel-inner .carousel-item.active,
.carousel-inner .carousel-item-next,
.carousel-inner .carousel-item-prev {
    display: flex;
}

/* display 3 */
@media (min-width: 768px) {
    
    .carousel-inner .carousel-item-right.active,
    .carousel-inner .carousel-item-next {
      transform: translateX(33.333%);
    }
    
    .carousel-inner .carousel-item-left.active, 
    .carousel-inner .carousel-item-prev {
      transform: translateX(-33.333%);
    }
}

.carousel-inner .carousel-item-right,
.carousel-inner .carousel-item-left{ 
  transform: translateX(0);
}



.shopping-cart-items{
 
  padding-top: 20px;
}
.clearfix {
  list-style-type: none;

        margin-bottom: 18px;
        margin-right: 20px;
      }
      .bookimg {
      float: left;
      margin-right: 12px;
      height: 80px;
      margin-top:15px;
      width: 80px;
    
    }
    
    .item-name {
      display: block;
      padding-top: 10px;
      font-family: "Open Sans", sans-serif;
      font-size: 16px;
    }
    
    .item-price {
      color: black;
      margin-right: 8px;
      font-family: "Open Sans", sans-serif;
      color: aqua;
    }
    
    .item-quantity {
      color: black;
      font-family: "Open Sans", sans-serif;
      font-size: 16px;
     margin-left: 90px;
    }
    #moving{
      width: 100%;
    }
/*

card design
*/
.services{
 
  
  border-radius: 5px;
  background: #fffffb;
  
  box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.5);


}
.expand:hover{
 width:280px;
 z-index: 1;
}
    .results{color: #7a7d85;
    font-size: 14px;
    line-height: 22px;
    font-weight: 600;
    padding: 0 10px;
    }
    </style>

    <title>test</title>
  </head>
  <body>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

     
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <nav class="navbar navbar-expand-lg navbar-light" style="background-color:white; padding: 12px;">
        <div class = 'container' style="padding: 0;">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <span class = 'logo' style="padding: 10px; font-size: 25px; padding-bottom: 5px;" ><img src = "https://www.flaticon.com/svg/static/icons/svg/1624/1624453.svg" height = 40px width = 40px> PROJECT HERO</span>
              <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav" style="margin: auto;">
                  <li class="nav-item active">
                    <a class="nav-link" href="../../Homepage.php">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact Us</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Task
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="../../views/book2.php">Browse</a>
                      <a class="dropdown-item" href="../../views/Booktask.php">Post</a>
                    </div>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Listings
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="userRequest.php">My Requests</a>
                      <a class="dropdown-item" href="userTasks.php">My Tasks</a>
                    </div>
                  </li>
                  <li class="nav-item dropdown collapse">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Profile
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="../../views/History.php">History</a>
                      <a class="dropdown-item" href="../../views/Profile v2.php">Settings</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="logout.php" hidden>Log Out</a>
                    </div>
                  </li> 
                </ul>
                <!-- <form class="form-inline my-2 my-lg-0">
                  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" style="background-color: transparent;">
                  <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
                </form> -->
                <?php
            
              
              if(isset($_SESSION["email"])){
             ?>
           <button type='button'  class='btn btn-primary' style='margin:10px;'><a href='../../Main/process_logout.php' style='color: white;text-decoration: none;'>Log Out</a></button>
              <?php }else{?>

                <button type="button"  class="btn btn-info" style="margin: 10px;"><a href="../../views/Signup.php" style="color: white;text-decoration: none;">Join Us</a></button>
              <?php }?>
                <!-- <button type="button" class="btn btn-primary" style="margin: 10px;">Sign Up</button> -->
                <span class = 'noti' style="padding: 10px; font-size: 25px; padding-bottom: 15px;" hidden><img src = "https://www.flaticon.com/svg/static/icons/svg/523/523152.svg" height = 35px width = 35px> </span>
              </div>
          </nav>
        </div>
      
    
<hr>
<div class="container-fluid" id="moving" >
  <div class="container text-center mb-5 ">
    <h2 class="font-weight-light">Services</h2>
    <div class="row mx-auto " >
        <div id="recipeCarousel"  class="carousel slide mx-auto" data-ride="carousel">
            <div class="carousel-inner w-100" role="listbox" >
                <div class="carousel-item active">
                    <div class="col-md-4">
                        <div class="card card-body bg-light">
                            <img class="img-fluid" style="height: 200px;" src="../resources/images/plumber.jpg">
                          Home Services
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-4">
                        <div class="card card-body bg-light">
                        <a href="#">    <img class="img-fluid" style="height: 200px;" src="../resources/images/delivery.jpg"></a>
                        Delivery
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-4">
                        <div class="card card-body bg-light">
                        <a href="#">    <img class="img-fluid" style="height: 200px;" src="../resources/images/food.jpg"></a>
                        Delivery
                        </div>
                    </div>
                </div>
                <div class="carousel-item ">
                    <div class="col-md-4 " >
                        <div class="card card-body bg-light ">
                            <img class="img-fluid " style="height: 200px;" src="../resources/images/clean.jpg">
                            Home Services
                        </div>
                    </div>
                </div>
             
            </div>
            <a class="carousel-control-prev " href="#recipeCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next " href="#recipeCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
 
</div>
</div>
   <div class="container">
    <div class="row">
        <div class="col-md-3 mt-5" style="border-right:1px solid gray;">
          <h3>YOUR LIST</h3>
    <div id="cart">
    	<span class="empty">Current Bookings</span>       
    </div>
    <div class="bookings">
      <ul class="shopping-cart-items" id="current">
       
       
      </ul>
    </div>
        </div>
        <div class="col-md-9">
       
          <button class="btn btn-primary btn-grid float-right ml-2"><i class="fa fa-th-large"></i></button>
          
          <button class="btn btn-danger btn-list float-right ">   <i class="fa fa-bars "></i> </button>
          
      <h1 class="mt-3">Browse Opportunities</h1>
      <div class="results" id="number"></div>
        <div class=" grid-container mt-5 ">
          <div class="row " id="bookings">
            
            
           
             
           
          
              </div>
            </div>
          </div>
          
        </div>
   </div>
  </div>
</div>
<script>
 

function showList(e) {
  var $gridCont = $('.grid-container');
  e.preventDefault();
  $gridCont.hasClass('list-view') ? $gridCont.removeClass('list-view') : $gridCont.addClass('list-view');
}
function gridList(e) {
  var $gridCont = $('.grid-container')
  e.preventDefault();
  $gridCont.removeClass('list-view');
}

$(document).on('click', '.btn-grid', gridList);
$(document).on('click', '.btn-list', showList);
$('#recipeCarousel').carousel({
  interval: 3000
})

$('.carousel .carousel-item').each(function(){
    var minPerSlide = 1;
    var next = $(this).next();
    if (!next.length) {
    next = $(this).siblings(':first');
    }
    next.children(':first-child').clone().appendTo($(this));
    
    for (var i=0;i<minPerSlide;i++) {
        next=next.next();
        if (!next.length) {
        	next = $(this).siblings(':first');
      	}
        
        next.children(':first-child').clone().appendTo($(this));
      }
});

</script>
<script src="./book2.js"></script>
  </body>
  
</html>
