<?php


if(isset($_POST['name'])){
    
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);

    if(!$con)
    {
        die("connection to this database failed due to" . mysqli_connect_error());
    
    }

    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];


    $sql =" INSERT INTO `trip`.`trip` ( `Name`, `Age`, `Gender`, `Email`, `Phone`, `DT`, `Other`) VALUES ( '$name', '$age', '$gender', '$email', '$phone', current_timestamp(), '$desc');";
    //echo $sql;

    if($con->query($sql) == true){
      // Echo" Succeessfully inserted";
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    $con->close();
}
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to travel form</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Peddana&family=Roboto&display=swap" rel="stylesheet">
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Go Tours</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/fontawesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
</head>
<body>

    
   
    <nav class="navbar navbar-expand-lg navbar-light text-capitalize">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="imgs/logo.png" alt="#" /></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#show-menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="show-menu">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">about</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#service">Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#agency">travel agency</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">contact us</a>
                    </li>
                    <li class="nav-item .search-container">
                        <a class="nav-link search" href="#"><i class="fas fa-search"></i></a>
                        <form>
                            <input type="search">
                        </form>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="far fa-user"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="far fa-heart"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <header id="home">
        <div class="overlay">
            <div class="container">
                <div>
                    <h1><span>Amazing</span><br>Santorini 10 Days Tour</h1>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as</p>
                    <button><a href="#" class="text-uppercase">book now</a></button>
                </div>
            </div>
        </div>
    </header>
    
    <div class="about-us" id="about">
        <div class="small-container">
            <h2 class="text-center">Winter <span>Holiday</span></h2>
            <p class="text-center">as opposed to using 'Content here, content here', making it look lik</p>
            <div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-12 text-center">
                            <div class="item">
                                <img src="imgs/img2.jpg">
                                <h5 class="text-uppercase">Restaurants</h5>
                            </div>
                            <div class="item">
                                <img src="imgs/img1.jpg">
                                <h5 class="text-uppercase">where to stay</h5>
                            </div>
                            <div class="item">
                                <img src="imgs/img4.jpg">
                                <div>
                                    <h5 class="text-uppercase">Sightseeing</h5>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page</p>
                                </div>
                            </div>
                            <div class="item">
                                <img src="imgs/img3.jpg">
                                <h5 class="text-uppercase">shops and boutiques</h5>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12 text-right">
                            <h4 class="text-uppercase">Engoy <span>holiday</span></h4>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like</p>
                            <button class="text-center"><a href="#" class="text-capitalize">book now</a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="first"></div>
            <div class="second"></div>
        </div>
    </div>
    
    <div class="services" id="service">
        <div class="container">
            <h2 class="text-capitalize">Enjoy <span>Resort</span></h2>
            <p>It is a long established fact that a reader will be distracted by the readable content of a o</p>
        </div>
        <div class="small-container">
            <div id="slideToNext" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="imgs/pic4.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="imgs/pic3.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="imgs/pic2.jpg" class="d-block w-100" alt="...">
                </div>
              </div>
              <a class="carousel-control-prev" href="#slideToNext" role="button" data-slide="prev">
                <i class="fas fa-chevron-left fa-2x"></i>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#slideToNext" role="button" data-slide="next">
                <i class="fas fa-chevron-right fa-2x"></i>
                <span class="sr-only">Next</span>
              </a>
            </div>
        </div>
    </div>
    
    <div class="agency" id="agency">
        <div class="white-overlay">
            <div class="container">
                <div>
                    <img src="imgs/airplane.png">
                    <div>
                        <img src="imgs/pic1.png">
                        <h2 class="text-center text-uppercase">Enjoy <br> All <br> World</h2>
                    </div>
                    <img src="imgs/airplane.png">
                </div>
                <p class="text-center">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look likeIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as o</p>
            </div>
        </div>
    </div>
    
    <div class="statistics text-capitalize text-center font-weight-bold">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <i class="fas fa-umbrella-beach fa-3x"></i>
                    <h3>425</h3>
                    <p>Tourists</p>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <i class="fas fa-birthday-cake fa-3x"></i>
                    <h3>125</h3>
                    <p>years</p>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <i class="fa fa-home fa-3x"></i>
                    <h3>325</h3>
                    <p>cottages</p>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <i class="fas fa-glass-cheers fa-3x"></i>
                    <h3>120</h3>
                    <p>restaurants</p>
                </div>
            </div>
        </div>
    </div>
    

   
    <img class = "bg" src="bg.jpg" alt="Ait" srcset="">
    <div class="container">
        <h3>Welcome to AIT for Trip to United State</h3>
        <p> Enter your details to register yourself for the trip</p>
        <p class= "submitMsg">Thanks for submitting form</p>
        <form action="index.php" method="post">
            <label for="name">Name of the candidate:</label>
            <input type="text" name ="name",id="name" placeholder="Enter your name ">
            <label for="age">Age </label>
            <input type="text" name ="age" id ="age" placeholder ="Enter your age">

            <label for="gender">Gender</label>
            <input type="text" name ="gender" id ="gender" placeholder="Enter your gender">
            <label for="email">Email:</label>
            <input type ="email" name ="email" id = "email" placeholder="Email ">
            
            <label for="phone">Phone no:</label><br>
            <input type ="phone" name = "phone" id = "phone" placeholder="Enter mobile">
        
            <label for="desc">Medical Condition (if any)</label>
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Descrition"></textarea>
            <button class="btn">Submit</button>
            <button class="btn">Reset</button>

        </form>
    </div>
       
    <footer>
        <div class="container">
            <ul>
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
            </ul>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="item">
                        <h4 class="text-uppercase">Contact us</h4>
                        <p class="address">
                            123 Second Street Fifth 
                           Kota,Rajasthank<br>
                            +919521647593
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="item">
                        <h4 class="text-uppercase">additional links</h4>
                        <ul>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Terms and conditions</a></li>
                            <li><a href="#">Privacy policy</a></li>
                            <li><a href="#">News</a></li>
                            <li><a href="#">Contact us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="item date">
                        <h4 class="text-uppercase">resent posts</h4>
                        <p><a href="#">01/03/2021</a></p>
                        <p><a href="#">08/05/2021</a></p>
                        <p><a href="#">01/03/2021</a></p>
                        <p><a href="#">08/05/2021</a></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="item">
                        <h4 class="text-uppercase">newsletter</h4>
                        <form>
                            <input type="text" placeholder="Name">
                            <input type="email" placeholder="Email">
                            <input type="submit" value="Submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright text-center">
            <p> Designed by KARAN,PAYAL, R SANKALP SHUKLA <a href="https://html.design"></a></p>
        </div>
    </footer>
    
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        $(function () {
            
            'use strict';
            
            var winH = $(window).height();
            
            $('header').height(winH);  
            
            $('header .container > div').css('top', (winH / 2) - ( $('header .container > div').height() / 2));
            
            $('.navbar ul li a.search').on('click', function (e) {
                e.preventDefault();
            });
            $('.navbar a.search').on('click', function () {
                $('.navbar form').fadeToggle();
            });
            
            $('.navbar ul.navbar-nav li a').on('click', function (e) {
                
                var getAttr = $(this).attr('href');
                
                e.preventDefault();
                $('html').animate({scrollTop: $(getAttr).offset().top}, 1000);
            });
        })
    <script src="index.js"></script>
    

  
</body>
</html>

  
</body>
</html>