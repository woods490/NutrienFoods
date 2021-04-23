<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nutrient Foods</title>
</head>

<body class="dekstop">
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid ">
            <a class="navbar-brand fw-bolder" href="#" style="color: #14416b;">NutrienFoods</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarNavDropdown">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item hvr-underline-from-center">
                        <a class="nav-link active fw-bold" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item hvr-underline-from-center">
                        <a class="nav-link fw-bold" href="./menu.php">Menu</a>
                    </li>
                    <li class="nav-item hvr-underline-from-center">
                        <a class="nav-link fw-bold" href="#">Contact</a>
                    </li>
                    <li class="nav-item hvr-underline-from-center">
                        <a class="nav-link fw-bold" href="./about.php">About Us</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <a class="btn btn-info me-2 signUp" href="./register.php">Sign Up</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container my-5">
        <div class="row">
            <div class="col-xl-4 col-sm-12 imgOne animate__animated animate__slideInLeft">
                <img src="./img/—Pngtree—healthy food_3776802.png" alt="">
            </div>
            <div class="col-xl-8 col-sm-12 animate__animated animate__slideInRight">
                <span class="title">A Tasty and Healthy Food</span>
                <p class="captionKu">We are here to provide a healthy and tasty food for you,
                    so you can eat well without worrying the calories and your weight.
                    The food here is being formulated by certified nutrionist
                    and having a laboratory test.</p>
                <a class="explore btn" href='./menu.php'>Explore Now</a>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row">
            <div class="col-sm-7 animate__animated animate__slideInLeft">
                <span class="title">Who Are We?</span>
                <p class="captionKu">NutrienFoods is a company who wants
                    to provide a healthy meal for our customer.
                    we realize that every customers has their own body goals and
                    needs. So, we decided to make a 3 types of food depends on
                    user’s body mass index </p>
            </div>
            <div class="col-sm-5 imgChef mx-auto animate__animated animate__slideInRight">
                <img class="mx-auto d-block" src="./img/happyChef.png" alt="" style="width: 100%;">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-sm-12 card offset-xl-1 my-5">
                <img class="mx-auto d-block" src="./img/—Pngtree—healthy food_3776802.png" alt="" style="width: 70%">
                <div class="card-title text-center fw-bold">Loss Weight</div>
                <p class="card-text text-center"> This food is made for the one who wants to loss some weight. </p>
            </div>
            <div class="col-xl-3 col-sm-12 card offset-xl-1 my-5">
                <img class="mx-auto d-block" src="./img/hotpot.png" alt="" style="width: 70%">
                <div class="card-title text-center fw-bold">Stable Weight</div>
                <p class="card-text text-center">This food is made for the one
                    who wants to stabilize their weight </p>
            </div>
            <div class="col-xl-3 col-sm-12 card offset-xl-1 my-5">
                <img class="mx-auto d-block" src="./img/chickenRice.png" alt="" style="width: 70%">
                <div class="card-title text-center fw-bold">Gain Weight</div>
                <p class="card-text text-center">This food is made for the one who
                    wants to gain some weight.</p>
            </div>
        </div>
    </div>
    <footer class=" text-center text-lg-start" style="background-color: rgba(20, 65, 107, 0.8);">
        <!-- Grid container -->
        <div class="container p-4">
            <!--Grid row-->
            <div class="row">
                <!--Grid column-->
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <h5 class="text-uppercase text-light">Nutrien Foods</h5>
                    <p class="text-light">
                        Nutrienfoods provide a healthy and delicious food for you.
                        No need to worry about calories and fat. Because, all of the food we sell
                        is observed by nutrionists
                    </p>
                </div>
                <!--Grid column-->
                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase text-light"> Quick Links</h5>
                    <ul class="list-unstyled mb-0">
                        <li>
                            <a href="./index.php" class="text-light">Home</a>
                        </li>
                        <li>
                            <a href="./menu.php" class="text-light">Menu</a>
                        </li>
                        <li>
                            <a href="#!" class="text-light">Contact</a>
                        </li>
                        <li>
                            <a href="./about.php" class="text-light">About Us</a>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->
                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-0 text-light">Others</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#!" class="text-light">Account</a>
                        </li>
                        <li>
                            <a href="#!" class="text-light">Help</a>
                        </li>
                        <li>
                            <a href="#!" class="text-light">Privacy&Policy</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="text-center p-3 text-light fw-bold" style="background-color:  #14416b;">
            © 2021 Copyright:
            <a class="text-light fw-bold" href="">NutrienFoods</a>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>

</html>