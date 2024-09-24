<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>

 <!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Passion Beaats-Connects with music</title>
  <link rel="icon" href="logo223.jpeg" type="image/gif" sizes="16x16">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/4a3b1f73a2.js"></script>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="logo223.jpeg" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#"><h4>Home</h4></a>

          </li>

          <li class="nav-item">
            <a class="nav-link" href="about.html"><h4>About Us</h4></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="courses.html"><h4>Courses</h4></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="repair.html"><h4>Repair</h4></a>
          </li>
        
          <li class="nav-item">
            <a class="nav-link" href="contact.html"><h4>Contact us</h4></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="checkout.html"><h4>CheckOut</h4></a>
          </li>
        </ul>
        <!-- <div id="user" style="margin-right: 10px;">
          <a href="cart.html"> <i class="fas fa-2x fa-shopping-cart addedToCart"><div id="badge"> 0 </div></i></a>
          <a href="#"> <i class="fas fa-2x fa-user-circle userIcon"></i> </a>
      </div> -->
      
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search for instrument and courses" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        
      </div>
      <div class="mx-2">
        
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#loginModal"><?php echo $_SESSION['name']; ?></button>
  
        <a href="logout.php">
            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
          data-bs-target="#modalRegisterForm">Logout</button>
        </a>
      </div>
  
    </div>
    <!-- <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
        </form> -->
   
  </nav>



  <!-- Login Modal -->
  <!-- Button trigger modal -->
  <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
  </button> -->

  <!-- Modal -->


  <div class="modal fade" role="dialog" id="loginModal" tabindex="-1" aria-labelledby="loginModal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Modal Login Form</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;</button>
        </div>
        <div class="modal-body">
          <div class="md-form mb-4">
            <i class="fas fa-user prefix grey-text"></i>
            <input type="text" id="orangeForm-pass" class="form-control validate">
            <label data-error="wrong" data-success="right" for="orangeForm-pass">Username</label>
          </div>
          <div class="md-form mb-4">
            <i class="fas fa-lock prefix grey-text"></i>
            <input type="password" id="orangeForm-pass" class="form-control validate">
            <label data-error="wrong" data-success="right" for="orangeForm-pass"> Password</label>
          </div>
        </div>
        <div class="modal-footer">

          <button type="button" class="btn btn-primary">Save changes</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>




  <!-- Modal -->
  <!-- <div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">signupModalLabel</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
         
        </div> -->







  <div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header text-center">
          <h4 class="modal-title w-100 font-weight-bold">Sign up</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body mx-3">
          <div class="md-form mb-5">
            <i class="fas fa-user prefix grey-text"></i>
            <input type="text" id="orangeForm-name" class="form-control validate">
            <label data-error="wrong" data-success="right" for="orangeForm-name">Your name</label>
          </div>
          <div class="md-form mb-5">
            <i class="fas fa-user prefix grey-text"></i>
            <input type="text" id="orangeForm-name" class="form-control validate">
            <label data-error="wrong" data-success="right" for="orangeForm-name">Username</label>
          </div>
          <div class="md-form mb-5">
            <i class="fas fa-envelope prefix grey-text"></i>
            <input type="email" id="orangeForm-email" class="form-control validate">
            <label data-error="wrong" data-success="right" for="orangeForm-email">Your email</label>
          </div>
          <div class="md-form mb-5">
            <i class="fas fa-user prefix grey-text"></i>
            <input type="number" id="orangeForm-name" class="form-control validate">
            <label data-error="wrong" data-success="right" for="orangeForm-name">Phone No.</label>
          </div>
          <div class="md-form mb-4">
            <i class="fas fa-lock prefix grey-text"></i>
            <input type="password" id="orangeForm-pass" class="form-control validate">
            <label data-error="wrong" data-success="right" for="orangeForm-pass">Your password</label>
          </div>
          <div class="md-form mb-5">
            <i class="fas fa-lock prefix grey-text"></i>
            <input type="password" id="orangeForm-name" class="form-control validate">
            <label data-error="wrong" data-success="right" for="orangeForm-name">Confirm Password</label>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>



   
    <!-- <div class="container">
      <button type="button" class="btn btn-info btn-round" data-toggle="modal" data-target="#loginModal">
        Login
      </button>
    </div>
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header border-bottom-0">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="form-title text-center">
              <h4>Login</h4>
            </div>
            <div class="d-flex flex-column text-center">
              <form>
                <div class="form-group">
                  <input type="email" class="form-control" id="email1" placeholder="Your email address...">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" id="password1" placeholder="Your password...">
                </div>
                <button type="button" class="btn btn-info btn-block btn-round">Login</button>
              </form>

              <div class="text-center text-muted delimiter">or use a social network</div>
              <div class="d-flex justify-content-center social-buttons">
                <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top"
                  title="Twitter">
                  <i class="fab fa-twitter"></i>
                </button>
                <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top"
                  title="Facebook">
                  <i class="fab fa-facebook"></i>
                </button>
                <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top"
                  title="Linkedin">
                  <i class="fab fa-linkedin"></i>
                </button>
              </div>
            </div>
          </div>
          <div class="modal-footer d-flex justify-content-center">
            <div class="signup-section">Not a member yet? <a href="#a" class="text-info"> Sign Up</a>.</div>
          </div>
        </div>
      </div> -->

  </div>






  <div class="container-fluid">
    <div id="carouselExampleIndicators" class="carousel slide " data-bs-ride="true">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
      </div>
      <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="car1.jpg" class="d-block w-100" alt="2nd" height="900" width="300">>
          </div>
          <div class="carousel-item">
            <img src="car2.jpg" class="d-block w-100" alt="2nd" height="900" width="300">>
          </div>
          <div class="carousel-item">
            <img src="car3.jpg" class="d-block w-100" alt="2nd" height="900" width="300">>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <div class="container my-4">
      <div class="row mb-2">
        <div class="col-md-6">
          <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
              <!-- <strong class="d-inline-block mb-2 text-primary">World</strong> -->
              <h3 class="mb-0">Accordion</h3>
              <h4 class="text-success" id="header_1"></h4>
              <!-- <h4 class="text-success" id="header_2"></h>
              <h4 class="text-success" id="header_3"></h> -->
              <!-- <h4 class="text-success" > Price: ₹1999 </h4> -->
              <h4 class="text-success"> Price: ₹1900 </h4>
              <h5 class="mb-1 ">2 Year warranty </h5>
              <h4 class="text-primary"> Rent: ₹399 </h>
              <h4 class="text-primary" id="header_2">   </h>
                  <h5 class="mb-1 ">For 1 Week </h5> 
                  <h5 class="mb-1 ">Delivery Charges included </h5> 
                <p class="card-text mb-auto">Accordions (from 19th-century German Akkordeon, from Akkord —"musical
                  chord, concord of sounds") [1] are a family of box-shaped musical instruments of the bellows -driven
                  free-reed aerophone type ( producing sound as air flows past a reed in a frame), colloquially
                  referred to as a squeezebox. </p>

                  <a href="checkout.html" onclick="Accordion()" ><h5 class="mb-1 ">Buy Now</h5></a>
                  <a href="checkout.html" onclick="RentAccordion()"><h5 class="mb-1 ">Rent Now</h5></a>
            </div>
            <div class="col-auto d-none d-lg-block">
              <img src="2nd.jpeg" alt="2nd" height="300" width="300">
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
              <strong class="d-inline-block mb-2 text-success"></strong>
              <h3 class="mb-0">Tripura</h3>
              <h4 class="text-success"> Price: ₹9999 </h4>
                 <h5 class="mb-1 ">2 Year warranty </h5>
                <h4 class="text-primary"> Rent: ₹999 </h>
                  <h5 class="mb-1 ">For 1 Week </h5> 
                  <h5 class="mb-1 ">Delivery Charges included </h5> 
                <p class="card-text mb-auto">Tripuris use musical instruments like the kham made of wood and animal
                  skin, the Sumui (flute) made of bamboo, Sarinda, Chongpreng, Dangdu and cymbals are very famous and
                  popular among indigenous Tripuri people. </p>
                  <a href="checkout.html" onclick="Tripura()" ><h5 class="mb-1 ">Buy Now</h5></a>
                  <a href="checkout.html" onclick="RentTripura()"><h5 class="mb-1 ">Rent Now</h5></a>

            </div>
            <div class="col-auto d-none d-lg-block">
              <img src="3rd.jpeg" alt="3rd" height="300" width="300">
            </div>
          </div>
        </div>
      </div>
      <div class="row mb-2">
        <div class="col-md-6">
          <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
              <h3 class="mb-0">Shehnai</h3>
              <h4 class="text-success"> Price: ₹1999 </h>
                <h5 class="mb-1 ">2 Year warranty </h5>
                <h4 class="text-primary"> Rent: ₹300 </h>
                  <h5 class="mb-1 ">For 1 Week </h5> 
                  <h5 class="mb-1 ">Delivery Charges included </h5> 
               
                <p class="card-text mb-auto">The shehnai is a musical instrument, originating from the Indian
                  subcontinent. It is made of wood, with a double reed at one end and a metal or wooden flared bell at
                  the other end </p>
                  <a href="checkout.html" onclick="Shehnai()" ><h5 class="mb-1 ">Buy Now</h5></a>
                  <a href="checkout.html" onclick="RentShehnai()"><h5 class="mb-1 ">Rent Now</h5></a>
            </div>
            <div class="col-auto d-none d-lg-block">
              <img src="4nd.jpeg" alt="4nd" height="300" width="300">
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
              <h3 class="mb-0">Sitar</h3>
              <h4 class="text-success"> Price: ₹1499 </h>
                <h5 class="mb-1 ">2 Year warranty </h5>
                <h4 class="text-primary"> Rent: ₹400 </h>
                  <h5 class="mb-1 ">For 1 Week </h5> 
                  <h5 class="mb-1 ">Delivery Charges included </h5> 
                <p class="card-text mb-auto">The sitar is a plucked stringed instrument, originating from the Indian
                  subcontinent, used in Hindustani classical music. The instrument was invented in medieval India,
                  flourished in the 18th century, and arrived at its present form in 19th-century India. </p>
                  <a href="checkout.html"onclick="Sitar()" ><h5 class="mb-1 ">Buy Now</h5></a>
                  <a href="checkout.html"onclick="RentSitar()" ><h5 class="mb-1 ">Rent Now</h5></a>
            </div>
            <div class="col-auto d-none d-lg-block">
              <img src="5th.jpeg" alt="5th" height="300" width="300">
            </div>
          </div>
        </div>
      </div>
      <div class="row mb-2">
        <div class="col-md-6">
          <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
              <h3 class="mb-0">Santoor</h3>
              <h4 class="text-success"> Price: ₹2199 </h>
                <h5 class="mb-1 ">2 Year warranty </h5>
                <h4 class="text-primary"> Rent: ₹500 </h>
                  <h5 class="mb-1 ">For 1 Week </h5> 
                  <h5 class="mb-1 ">Delivery Charges included </h5> 
                <p class="card-text mb-auto">The Indian santoor instrument is a trapezoid-shaped hammered dulcimer,
                  and a variation of the Iranian Santur. The instrument is generally made of walnut and has 25
                  bridges. Each bridge has 4 strings, making for a total of 100 strings. </p>
                  <a href="checkout.html"onclick="Santoor()" ><h5 class="mb-1 ">Buy Now</h5></a>
                  <a href="checkout.html" onclick="RentSantoor()"><h5 class="mb-1 ">Rent Now</h5></a>
            </div>
            <div class="col-auto d-none d-lg-block">
              <img src="1st .jpeg" alt="1st" height="300" width="300">
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
              <h3 class="mb-0">Drumset</h3>
              <h4 class="text-success"> Price: ₹24999 </h>
                <h5 class="mb-1 ">2 Year warranty </h5>
                <h4 class="text-primary"> Rent: ₹1500 </h>
                  <h5 class="mb-1 ">For 1 Week </h5> 
                  <h5 class="mb-1 ">Delivery Charges included </h5> 
                <p class="card-text mb-auto">Any percussion instrument can be included, even tambourines and
                  electronic drums. The drum kit, also called "the drums," is a group of percussion instruments
                  arranged so that they can be played by one person. </p>
                  <a href="checkout.html" onclick="Drumset()" ><h5 class="mb-1 ">Buy Now</h5></a>
                  <a href="checkout.html"onclick="RentDrumset()" ><h5 class="mb-1 ">Rent Now</h5></a>
            </div>
            <div class="col-auto d-none d-lg-block">
              <img src="6th.jpeg" alt="6th" height="300" width="300">
            </div>
          </div>
        </div>
      </div>

      <div class="container my-4">
        <div class="row mb-2">
          <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
              <div class="col p-4 d-flex flex-column position-static">
                <!-- <strong class="d-inline-block mb-2 text-primary">World</strong> -->
                <h3 class="mb-0">Trumpet</h3>
                <h4 class="text-success"> Price: ₹4999 </h>
                  <h5 class="mb-1 ">2 Year warranty </h5>
                  <h4 class="text-primary"> Rent: ₹999 </h>
                    <h5 class="mb-1 ">For 1 Week </h5> 
                    <h5 class="mb-1 ">Delivery Charges included </h5> 
                  <p class="card-text mb-auto">The trumpet is a brass instrument commonly used in classical and jazz
                    ensembles.
                  </p>
                  <a href="checkout.html" onclick="Trumpet()" ><h5 class="mb-1 ">Buy Now</h5></a>
                  <a href="checkout.html"onclick="RentTrumpet()" ><h5 class="mb-1 ">Rent Now</h5></a>
              </div>
              <div class="col-auto d-none d-lg-block">
                <img src="7th.jpeg" alt="7th" height="300" width="300">
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
              <div class="col p-4 d-flex flex-column position-static">
                <h3 class="mb-0">Flute</h3>
                <h4 class="text-success"> Price: ₹3999 </h>
                  <h5 class="mb-1 ">2 Year warranty </h5>
                  <h4 class="text-primary"> Rent: ₹999 </h>
                    <h5 class="mb-1 ">For 1 Week </h5> 
                    <h5 class="mb-1 ">Delivery Charges included </h5> 
                  <p class="card-text mb-auto"> The flute is a family of musical instruments in the woodwind group.
                    Unlike woodwind instruments with reeds, a flute is an aerophone or reedless wind instrument that
                    produces its sound from the flow of air across an opening. </p>
                    <a href="checkout.html" onclick="Flute()"><h5 class="mb-1 ">Buy Now</h5></a>
                    <a href="checkout.html"onclick="RentFlute()" ><h5 class="mb-1 ">Rent Now</h5></a>
              </div>
              <div class="col-auto d-none d-lg-block">
                <img src="8th.jpeg" alt="8th" height="300" width="300">
              </div>
            </div>
          </div>
        </div>

        <div class="container my-4">
          <div class="row mb-2">
            <div class="col-md-6">
              <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                  <!-- <strong class="d-inline-block mb-2 text-primary">World</strong> -->
                  <h3 class="mb-0">Guitar</h3>
                  <h4 class="text-success"> Price: ₹4999 </h>
                    <h5 class="mb-1 ">2 Year warranty </h5>
                    <h4 class="text-primary"> Rent: ₹999 </h>
                      <h5 class="mb-1 ">For 1 Week </h5> 
                      <h5 class="mb-1 ">Delivery Charges included </h5> 
                    <p class="card-text mb-auto"> The guitar is a fretted musical instrument that typically has six
                      strings. It is usually held flat against the player's body and played by strumming or plucking
                      the strings with the dominant hand, while simultaneously pressing selected strings against frets
                      with the fingers of the opposite hand </p>
                      <div class="container-fluid">
                        <a href="checkout.html" onclick="Guitar()" ><h5 class="mb-1 ">Buy Now</h5></a>
                        <a href="checkout.html"onclick="RentGuitar()" ><h5 class="mb-1 ">Rent Now</h5></a>
                      
                      </div>
                     
                </div>
                <div class="col-auto d-none d-lg-block">
                  <img src="11th.jpeg" alt="9th" height="300" width="300">
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                  <strong class="d-inline-block mb-2 text-success"></strong>
                  <h3 class="mb-0">Tabla</h3>
                  <h4 class="text-success"> Price: ₹4999 </h>
                    <h5 class="mb-1 ">2 Year warranty </h5>
                    <h4 class="text-primary"> Rent: ₹999 </h>
                      <h5 class="mb-1 ">For 1 Week </h5> 
                      <h5 class="mb-1 ">Delivery Charges included </h5> 
                    <p class="card-text mb-auto">A tabla is a pair of twin hand drums from the Indian subcontinent.
                      Since the 18th century, tabla has been the principal percussion instrument in Hindustani
                      classical music, where it may be played solo, as accompaniment with other instruments and
                      vocals, and as a part of larger ensembles </p>
                    <a href="checkout.html" onclick="Tabla()"><h5 class="mb-1 ">Buy Now</h5></a>
                    <a href="checkout.html" onclick="RentTabla()"><h5 class="mb-1 ">Rent Now</h5></a>
                </div>
                <div class="col-auto d-none d-lg-block">
                  <img src="12th.jpeg" alt="10" height="300" width="300">
                </div>
              </div>
            </div>
          </div>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
            crossorigin="anonymous"></script>
            <script>
              // var price="1900";
              // document.getElementById("header_1").innerHTML = price;
              // export price ;
              function Accordion() {
                var name = "Accordion";
                // var rent="999"
                var price="₹1900"
                // document.getElementById("header_1").innerHTML = price;
                // document.getElementById("header_3").innerHTML = total;
                localStorage.setItem("fn",name);
                localStorage.setItem("fn1",price);
                // localStorage.setItem("fn1",rent);

              }
              function RentAccordion() {
                var name = "Accordion";
                var price="₹399"
                // document.getElementById("header_2").innerHTML = price;
                localStorage.setItem("fn1",price);
                localStorage.setItem("fn",name);

              }
              function Tripura() {
                var name = "Tripura";
                var price="₹9999"
                // document.getElementById("header_2").innerHTML = price;
                localStorage.setItem("fn1",price);
                localStorage.setItem("fn",name);

              }
              function RentTripura() {
                var name = "Tripura";
                var price="₹999"
                // document.getElementById("header_2").innerHTML = price;
                localStorage.setItem("fn1",price);
                localStorage.setItem("fn",name);

              }
              function Shehnai() {
                var name = "Shehnai";
                var price="₹1999"
                // document.getElementById("header_2").innerHTML = price;
                localStorage.setItem("fn1",price);
                localStorage.setItem("fn",name);


              }
              function RentShehnai() {
                var name = "Shehnai";
                var price="₹300"
                // document.getElementById("header_2").innerHTML = price;
                localStorage.setItem("fn1",price);
                localStorage.setItem("fn",name);

              }
              function Sitar() {
                var name = "Sitar";
                var price="₹1499"
                // document.getElementById("header_2").innerHTML = price;
                localStorage.setItem("fn1",price);
                localStorage.setItem("fn",name);

              }
              function RentSitar() {
                var name = "Sitar";
                var price="₹400"
                // document.getElementById("header_2").innerHTML = price;
                localStorage.setItem("fn1",price);
                localStorage.setItem("fn",name);

              }
              function Santoor() {
                var name = "Santoor";
                var price="₹2199"
                // document.getElementById("header_2").innerHTML = price;
                localStorage.setItem("fn1",price);
                localStorage.setItem("fn",name);

              }
              function RentSantoor() {
                var name = "Santoor";
                var price="₹500"
                // document.getElementById("header_2").innerHTML = price;
                localStorage.setItem("fn1",price);
                localStorage.setItem("fn",name);

              }
              function Drumset() {
                var name = "Drumset";
                var price="₹24999"
                // document.getElementById("header_2").innerHTML = price;
                localStorage.setItem("fn1",price);
                localStorage.setItem("fn",name);

              }
              function RentDrumset() {
                var name = "Drumset";
                var price="₹1500"
                // document.getElementById("header_2").innerHTML = price;
                localStorage.setItem("fn1",price);
                localStorage.setItem("fn",name);

              }
              function Trumpet() {
                var name = "Trumpet";
                var price="₹4999"
                // document.getElementById("header_2").innerHTML = price;
                localStorage.setItem("fn1",price);
                localStorage.setItem("fn",name);

              }
              function RentTrumpet() {
                var name = "Trumpet";
                var price="₹999"
                // document.getElementById("header_2").innerHTML = price;
                localStorage.setItem("fn1",price);
                localStorage.setItem("fn",name);

              }
              function Flute() {
                var name = "Flute";
                var price="₹3999"
                // document.getElementById("header_2").innerHTML = price;
                localStorage.setItem("fn1",price);
                localStorage.setItem("fn",name);

              }
              function RentFlute() {
                var name = "Flute";
                var price="₹999"
                // document.getElementById("header_2").innerHTML = price;
                localStorage.setItem("fn1",price);
                localStorage.setItem("fn",name);

              }
              function Guitar() {
                var name = "Guitar";
                var price="₹4999"
                // document.getElementById("header_2").innerHTML = price;
                localStorage.setItem("fn1",price);
                localStorage.setItem("fn",name);

              }
              function RentGuitar() {
                var name = "Guitar";
                var price="₹999"
                // document.getElementById("header_2").innerHTML = price;
                localStorage.setItem("fn1",price);
                localStorage.setItem("fn",name);

              }
              function Tabla() {
                var name = "Tabla";
                var price="₹4999"
                // document.getElementById("header_2").innerHTML = price;
                localStorage.setItem("fn1",price);
                localStorage.setItem("fn",name);

              }
              function RentTabla() {
                var name = "Tabla";
                var price="₹999"
                // document.getElementById("header_2").innerHTML = price;
                localStorage.setItem("fn1",price);
                localStorage.setItem("fn",name);

              }
            </script>
</body>


</html>
<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>