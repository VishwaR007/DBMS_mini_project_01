<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="4)mainPageStyle.css" class="rel">

</head>

<body>

    <nav>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">

                <a class="navbar-brand" href="#">College DBMS</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Courses
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">PUC</a></li>
                                <li><a class="dropdown-item" href="#">BE</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">M.Tech</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Notes</a>
                        </li>
                    </ul>
                    <!-- <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                        Button
                    </button> -->
                    <!-- The complete code is in the div offCanvas_full_code -->


                    <div class="nameBox">
                        <form action="4)mainPagePHP.php" method="post">
                            <!-- <label for="nameid" class="form-label">VR</label>
                            <input type="submit" id="nameid" name="Name" value="Name Name" class="btn btn-primary"> -->

                            
                            <div class="input-group">
                                <div class="input-group-text nameBox2">
                                    <?php session_start(); 

                                        echo ucfirst(substr($_SESSION['FirstName'], 0, 1));
                                        echo ucfirst(substr($_SESSION['LastName'], 0, 1));
                                    ?>
                                    <!-- Here comes the first letter of firstName and lastName  -->
                                </div>
                                <input type="submit" id="nameid" name="Name" value="<?php echo ucfirst($_SESSION['FirstName']) ?>" class="btn btn-primary">
                                <!-- in this input value should be the firstname and lastname  -->
                            </div>
                        </form>


                        <!-- <button class="btn btn-primary">
                            <h5 class="nameBox2">VR</h5>
                            <h5>Vishwanath R</h5>
                        </button> -->
                    </div>


                </div>
            </div>
        </nav>
    </nav>

    <!-- <div class="offCanvas_full_code">
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
              <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <div>
                Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.
              </div>
              <div class="dropdown mt-3">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown">
                  Dropdown button
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </div>
            </div>
          </div>
    </div> -->

    <main>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="imgs1/pexels-pixabay-301926.jpg" class="d-block w-100" alt="..." height="550px">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="imgs1/pexels-tima-miroshnichenko-5427862.jpg" class="d-block w-100" alt="..."
                        height="550px">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="imgs1/pexels-kampus-production-5940721.jpg" class="d-block w-100" alt="..."
                        height="550px">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>



        <!-- <div class="container mb-1" style="display: flex; flex-wrap: wrap;">
            <div class="card mx-auto">
                <div class="card-header">
                    <h3>Card Heading</h3>
                </div>
                <img src="/imgs/pexels-pixabay-301926.jpg" alt="" class="img-fluid">
                <div class="car-body">
                    <h5 class="card-title">Card Title</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus cum
                        exercitationem libero?</p>
                    <p class="text-muted">seen 5 min ago</p>
                </div>
                <div class="card-footer">
                    Lorem, ipsum dolor.
                </div>
            </div>
            <div class="card mx-auto">
                <div class="card-header">
                    <h3>Card Heading</h3>
                </div>
                <img src="/imgs/pexels-pixabay-301926.jpg" alt="" class="img-fluid">
                <div class="car-body">
                    <h5 class="card-title">Card Title</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus cum
                        exercitationem libero?</p>
                    <p class="text-muted">seen 5 min ago</p>
                </div>
                <div class="card-footer">
                    <p>Lorem ipsum dous!</p>
                </div>
            </div>
            <div class="card mx-auto">
                <div class="card-header">
                    <h3>Card Heading</h3>
                </div>
                <img src="/imgs/pexels-pixabay-301926.jpg" alt="" class="img-fluid">
                <div class="car-body">
                    <h5 class="card-title">Card Title</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus cum
                        exercitationem libero?</p>
                    <p class="text-muted">seen 5 min ago</p>
                </div>
                <div class="card-footer">
                    <p>Lorem ipsum dolus!</p>
                </div>
            </div>
            <div class="card mx-auto">
                <div class="card-header">
                    <h3>Card Heading</h3>
                </div>
                <img src="/imgs/pexels-pixabay-301926.jpg" alt="" class="img-fluid">
                <div class="car-body">
                    <h5 class="card-title">Card Title</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus cum
                        exercitationem libero?</p>
                    <p class="text-muted">seen 5 min ago</p>
                </div>
                <div class="card-footer">
                    <p>Lorem ipsum tus!</p>
                </div>
            </div>
        </div> -->


        <!-- <div class="containerCard container">
            <div class="cardBoxes">
                <div class="cardBoxMain1">
                    <div class="card1">
                        <h5>Vision</h5>
                        
                    </div>
                    <div class="card1" style="background-color: red;">
                        <h5>Mission</h5>
    
                    </div>
                </div>
                <div class="cardBoxMain1">
                    <div class="card1" style="background-color: purple;">
                        <h5>Placement</h5>
    
                    </div>
                    <div class="card1" style="background-color: green;">
                        <h5>R & D</h5>
    
                    </div>
                </div>
            </div>
        </div> -->

        <div class="container">
            <div class="row ">
                <div class="col-sm-6 col-lg-6 col-xl-3 card11">
                    <h5>Vision :</h5>
                </div>
                <div class="col-sm-6 col-lg-6 col-xl-3 card11">
                    <h5>Mission :</h5>
                </div>
                <div class="col-sm-6 col-lg-6 col-xl-3 card11">
                    <h5>Placement :</h5>
                </div>
                <div class="col-sm-6 col-lg-6 col-xl-3 card11">
                    <h5>R & D :</h5>
                </div>
            </div>
        </div>




        <hr>

        <div class="container mt-5">
            <h1>Facilities : </h1>
            <div class="row d-flex justify-content-center align-items-center my-5">
                <div class="col-sm-7">
                    <h2>Library : </h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, excepturi ducimus. Impedit,
                        maiores! Libero nesciunt error corporis odio blanditiis odit quaerat commodi accusamus saepe
                        totam consectetur ex alias similique, facere quo fuga nam deserunt voluptatem.</p>
                </div>
                <div class="col-sm-4">
                    <img src="imgs1/pexels-pixabay-301926.jpg" alt="" class="img-fluid" style="min-width: 400px;">
                </div>
            </div>
            <div class="row d-flex justify-content-center align-items-center my-5">
                <div class="col-sm-4">
                    <img src="imgs1/pexels-pixabay-301926.jpg" alt="" class="img-fluid" style="min-width: 400px;">
                </div>
                <div class="col-sm-7">
                    <h2>Labs : </h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, excepturi ducimus. Impedit,
                        maiores! Libero nesciunt error corporis odio blanditiis odit quaerat commodi accusamus saepe
                        totam consectetur ex alias similique, facere quo fuga nam deserunt voluptatem.</p>
                </div>
            </div>
            <div class="row d-flex justify-content-center align-items-center my-5">
                <div class="col-sm-7">
                    <h2>Cafeteriya : </h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, excepturi ducimus. Impedit,
                        maiores! Libero nesciunt error corporis odio blanditiis odit quaerat commodi accusamus saepe
                        totam consectetur ex alias similique, facere quo fuga nam deserunt voluptatem.</p>
                </div>
                <div class="col-sm-4">
                    <img src="imgs1/pexels-pixabay-301926.jpg" alt="" class="img-fluid" style="min-width: 400px;">
                </div>
            </div>
            <div class="row d-flex justify-content-center align-items-center my-5">
                <div class="col-sm-4">
                    <img src="imgs1/pexels-pixabay-301926.jpg" alt="" class="img-fluid" style="min-width: 400px;">
                </div>
                <div class="col-sm-7">
                    <h2>Hostel : </h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, excepturi ducimus. Impedit,
                        maiores! Libero nesciunt error corporis odio blanditiis odit quaerat commodi accusamus saepe
                        totam consectetur ex alias similique, facere quo fuga nam deserunt voluptatem.</p>
                </div>
            </div>
            <div class="row d-flex justify-content-center align-items-center my-5">
                <div class="col-sm-7">
                    <h2>Sports & Staf : </h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, excepturi ducimus. Impedit,
                        maiores! Libero nesciunt error corporis odio blanditiis odit quaerat commodi accusamus saepe
                        totam consectetur ex alias similique, facere quo fuga nam deserunt voluptatem.</p>
                </div>
                <div class="col-sm-4">
                    <img src="imgs1/pexels-pixabay-301926.jpg" alt="" class="img-fluid" style="min-width: 400px;">
                </div>
            </div>
        </div>

    </main>






    <footer>

        <div class="footerConntainer">
            <div class="heading">
                <p>People visited also see here :</p>
            </div>
            <div class="bigBox">
                <div class="box1">
                    <p>Socila Media</p>
                    <ul>
                        <li>Insta</li>
                        <li>FaceBook</li>
                        <li>Twitter</li>
                        <li>Git Hub</li>
                        <li>Telegram</li>
                    </ul>
                </div>
                <div class="box1">
                    <p>Gallery</p>
                    <ul>
                        <li>Campus</li>
                        <li>Cafeteriya</li>
                        <li>Library</li>
                        <li>Hostel</li>
                        <li>PArking area</li>
                    </ul>
                </div>
            </div>
        </div>

    </footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>



</body>

</html>