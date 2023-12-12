<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>MGM-National service Scheme</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="style.css" rel="stylesheet">
  <style>
    html {
       scroll-behavior: smooth;
       overflow-x: hidden;
      }
     @media (max-width:786px) {
            .hidden-mobile{
                display:none;
            }
        }

  </style>
</head>
<body>
  <!--header starts-->
  <div class="container-fluid" style="padding: 0px 0px;">
  <div class="row headerrow">
      
        <div class="col-md-2 left-logo hidden-sm hidden-xs">
          <center>    
          <img style=" width: 135px;"  src="assets/img/NSSLOGO.png" >       
          </center>
        </div>
        <div class="col-md-8 hidden-sm hidden-xs">
          <center>
            
            <span class="headertitle" style="margin-top:30px;">MGM University</span>
            <span class="subtitle">Aurangabad</span>
                
        </center></div>
        

        <div class="col-md-2" style="padding: 5px 5px;">
          <div class="hidden-sm hidden-xs hidden-mobile">
          <img style="float: right; width: 220px;" src="assets/img/jneclogo.png" alt=""> 
              </div>

      </div>
                

  <!-- ======= Header ======= -->


  <header id="header" class="top d-flex align-items-center">
    <div class="container d-flex align-items-center ">




      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt=""></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul style="float: right ;">
          <li><a class="nav-link scrollto" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="About.php">About</a></li>
          <li><a class="nav-link scrollto" href="registration.php">Registration</a></li>
          <li><a class="nav-link scrollto" href="Activities.php">Activities/Camps</a></li>
          <li><a class="nav-link scrollto" href="contact.php">Contact</a></li>
   
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->
  <style type="text/css">
    .cardstyle {
      padding: 100px 130px;
      margin: auto;
      border-radius: 30px;
      margin-bottom: 50px;
      margin-right: 25px;
      margin-left: 25px;
      color: brown;

    }
    input:hover {
      text-decoration: underline;
    }
  </style>
  <div class="card bg-light cardstyle">
    <h1 class="text-center" style="color: black;">Register</h1>
    <br>
    <br>
    <form class="row mb-6" action="register_a.php" method="post">
      <div class="col-md-4">
        <label for="inputFirstname4" class="form-label">First Name</label>
        <input type="text" class="form-control" id="inputFirstname4" name="firstname">
      </div>
      <div class="col-md-4">
        <label for="inputmiddlename4" class="form-label">Middle Name</label>
        <input type="text" class="form-control" id="inputmiddlename4" name="middlename">
      </div>
      <div class="col-md-4">
        <label for="Lastname" class="form-label">Last Name</label>
        <input type="text" class="form-control" id="LastName" name="lastname">
        <br>
      </div>
      <div class="col-md-4">
        <label for="Email" class="form-label">Email</label>
        <input type="text" class="form-control" id="Email" name="email">
      </div>
      <div class="col-md-4">
        <label for="dateofbirth" class="form-label">Date of birth</label>
        <input type="date" class="form-control" id="dateofbirth" name="dateofbirth">
      </div>
      <div class="col-md-4">
        <label for="birthplace" class="form-label">Birth Place</label>
        <input type="text" name="place" class="form-control" id="birthplace">
        <br>
      </div>
        <div class="col-md-4">
          <label for="inputState" class="form-label">Genders</label>
          <select id="inputState" class="form-select" name="gender">
            <option selected>Choose...</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
          </select>
        </div>
      <div class="col-md-4">
        <label for="inputmother" class="form-label">Mother Name</label>
        <input type="text" class="form-control" id="inputMother" name="mothername">
      </div>
      <div class="col-md-4">
        <label class="form-label" for="casteinput">Caste</label>
        <input type="text" name="caste" id="casteinput" class="form-control">
      </div>
      <div class="col-md-4">
        <label for="pincodeinput" class="form-label">Pincode</label>
        <input type="text" name="pincode" id="pincodeinput" class="form-control">
      </div>
      <div class="col-md-4">
        <label for="heightinput" class="form-label">Height in cm</label>
        <input type="text" name="height" id="heightinput" class="form-control">
      </div>
      <div class="col-md-4">
        <label for="weightinput" class="form-label">Weight in kg</label>
        <input type="text" name="weight" id="weightinput" class="form-control">
        <br>
      </div>
      <div class="col-md-4">
        <div class="form-check">
          <label for="input" class="col-form-label">Participated In:</label>
          <div class="row1">
            <div class="col">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Sports" name="participated[]" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                Sports
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="MCC/NCC" name="participated[]" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                MCC/NCC
                </label>
              </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="Scout/Guide" name="participated[]" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                  Scout/Guide
                  </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Trekking" name="participated[]" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                    Trekking
                    </label>
                  </div>
                  <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="Hiking"  name="participated[]" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault"> Hiking</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="RSP" name="participated[]" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                    RSP</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Civil Defence"  name="participated[]" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                    Civil Defence</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="First Aid"name="participated[]" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                    First Aid
                    </label>
                  </div>
                </div>
              <br>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="mb-3 row">
            <label for="blood" class="col-form-label">Blood Group</label>
            <div class="col-sm-5">
              <select name="bloodgroup" class="form-select" aria-label="Default select example">
                <option selected>Selected</option>
                <option value="A">A</option>
                <option value="AB">AB</option>
                <option value="O">O</option>
                <option value="B+">B+</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B-">B-</option>
                <option value="O-">O-</option>
                <option value="AB-">AB-</option>      
              </select>
            </div>
          </div>
          <div class="mb-3 row">
                    <label for="input" class="col-form-label">Whether belongs to minority?:</label>
                    <div class="col-sm-5">
                        <select class="form-select" aria-label="Default select example" name="minority">
                            <option selected>select Choice</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                </div>
        </div>

        <div class="col-md-4">
          <div class="mb-3 row">
            <label for="input" class="col-form-label">Spectacles:</label>
            <div class="col-sm-5">
                <select class="form-select" aria-label="Default select example" name="spectacles">
                  <option selected>select Choice</option>
                  <option value="Fullframe">Fullframe</option>
                  <option value="semi-rimless">semi-rimless</option>
                  <option value="rimless">rimless</option>
                </select>
              </div>
            </div>
            <div class="mb-3 row">
                    <label for="input" class="col-form-label">Is Vaccinated(Covid-19)?</label>
                    <div class="col-sm-5">
                        <select class="form-select" aria-label="Default select example" name="vaccinated">
                            <option selected>select Choice</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                </div>
          </div>
          <div class="col-md-4">
            <div class="mb-3 row">
              <label for="inputWeight" class="col-form-label">Aadhar Card No:</label>
              <div class="col-sm-10">
                <input type="name" class="form-control" id="inputname" name="aadharcardno">
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="mb-3 row">
              <label for="inputWeight" class="col-form-label">Election Card no:</label>
              <div class="col-sm-10">
                <input type="name" class="form-control" id="inputname" name="electioncardno">
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="mb-3 row">
              <label for="inputWeight" class="col-form-label">Languages Known:</label>
              <div class="col-sm-10">
                <input type="name" class="form-control" id="inputname" name="languages">
              </div>
            </div>
          </div>
          <div class="col-md-10">
            <label for="input" class="col-form-label">Participated Activity:</label>
            <div class="row1">
              <div class="col">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="pre SRD" name="Activity[]" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                  pre SRD</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="pre NRD"  name="Activity[]"  id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                  pre NRD</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="SRD"  name="Activity[]" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                  SRD</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="NRD"  name="Activity[]" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">NRD
                  </label>
                </div>
              </div>
              <div class="col">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="Adventure Camp"  name="Activity[]" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                  Adventure Camp</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="Mega Camp"  name="Activity[]"  id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">Mega Camp</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="Youth Festival"  name="Activity[]"  id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                  Youth Festival</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="Utkarsha"  name="Activity[]"  id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                  Utkarsha</label>
                </div>
              </div>
            </div>
          </div>
          <!--new row started-->
          <div class="col-md-10">
          <div class="mb-3">
                    <label for="input" class="col-form-label"> Skills Known:</label>
                    <div class="row1">
                        <div class="col">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Driving" name="skills[]" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Driving
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Swimming" name="skills[]" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Swimming
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Cooking" name="skills[]" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Cooking
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Photography" name="skills[]" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Photography
                                </label>
                            </div>

                        </div>
                        <div class="col">

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Report Writing" name="skills[]" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Report Writing
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="firefighting" name="skills[]" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    firefighting
                                </label>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                        <button type="submit" class="btn btn-light" style="justify-content: center;" name="submit"> Submit </button>
                        <style type="text/css">
                          .btn {
                            align-content: center;
                            justify-content: center;
                            color: black;
                            margin-top: 30px;
                            width: 50%;
                            height: 50%;
                            background-color: white;
                          }
                          .btn:hover {
                            background-color: brown;
                          }
                          @media only screen and (min-width:321px) and (max-width:480px) {
                            .btn {
                              font-size:0.875em;
                              display:block;
                              left:-60px;
                              margin-top:35px;
                              width:100%;
                            }
                          }
                        </style>
      </form>
    </div>
    <footer id="footer">

<div class="footer-top">
    <div class="container">
        <div class="row">

            <div class="col-lg-3 col-md-4 footer-contact">
                <h3>MGM University<span></span></h3>

            </div>
            <div class="col-lg-3 col-md-6 footer-links">
                <h4>Useful Links</h4>
                <ul>
                    <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="About.php">About</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="registration.php">Registration</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="Activities.php">Activities</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="/contact.php">Contact</a></li>
                </ul>
            </div>


            <div class="col-lg-3 col-md-6 footer-links">
                <img style=" width: 140px;" src="assets/img/nsspng.png" alt="">
            </div>


            <div class="col-lg-3 col-md-6 footer-newsletter">
                <img style=" width: 200px;" src="assets/img/jneclogopng.png" alt="">
            </div>

        </div>
    </div>
</div>

</footer><!-- End Footer -->
  </footer><!-- End Footer -->

  </body>
</html>