
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Jae's Earth Travel Stroy PART 2</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Plugin CSS -->
  <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="css/freelancer.min.css" rel="stylesheet">

  <!--My CSS-->
  <link href="css/style.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Moon's Page</a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-0 mx-lg-1">
            <div class = dropdown>
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#head">Course Works</a>
              <div class="dropdown-content">
                  <a href="http://fromthemoon.000webhostapp.com/csis2440/music-database/">Assembling Arrays</a>
                  <a href="http://fromthemoon.000webhostapp.com/csis2440/validation/">Data Validation</a> 
                  <a href="http://fromthemoon.000webhostapp.com/csis2440/insecure/">Insecure</a>
                  <a href="http://fromthemoon.000webhostapp.com/csis2440/less-insecure/">Not as Insecure</a>
                  <a href="http://fromthemoon.000webhostapp.com/csis2440/web-poll/">Web Poll</a>
                  <a href="http://fromthemoon.000webhostapp.com/csis2440/palindrome-2/">Palindrome</a>
                  <a href="http://fromthemoon.000webhostapp.com/">CSIS 1430</a>
              </div>
            
          </div>
          </li>

        <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#bio">Bio</a>
          </li>

          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">Course Review</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Register</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="masthead bg-primary text-white text-center" id="head">
    <div class="container-1">
      <div class="instruction">
        <p>
          W : UP |
          A : LEFT |
          S : DOWN |
          D : RIGHT |
        </p>

      </div>

      <div class ="hide" id="gameOver">
        <p>
          GAME OVER!
        </p>
      </div>

        <div class="canvas">
            <canvas id="canvas" width="608" height="608"></canvas>
        </div>
        <script src="js/canvas.js"></script>
        <div class="hide" id="replay">
          <button type="button" class="resetBt">
            <a href="index.php">Replay!</a>
          </button>
        </div>

    </div>
  </header>


  <!-- About Section -->

  <section class="bg-primary text-white mb-0" id="bio">
    <div class="container">
      <h2 class="text-center text-uppercase text-white">Who is Jae?</h2>
      <hr class="star-light mb-5">
      <div class="row">
        <div class="col-lg-4 ml-auto">
          <p class="lead">Jae who traveled from the Moon.<br>
          He loves watching movies, drinking Coffee, eating, sleeping and programming!
          </p>
        </div>
        <div class="col-lg-4 mr-auto">
          <p class="lead">
            What's new? <br>
            He met someone who loves him and is trying settle on Earth with her.<br>
            She is his best sparing partner.
           </p>
        </div>
      </div>
     
    </div>
  </section>

  <section class="bg-primary text-white mb-0" id="about">
    <div class="container">
      <h2 class="text-center text-uppercase text-white">Course Review</h2>
      <hr class="star-light mb-5">
      <div class="row">
        <div class="col-lg-4 ml-auto">
          <p class="lead">For a long time, web pages are very important to people. 
            They can access and exchange their information regardless 
            of what kinds of Operating System they have all they need is only an 
            internet connection. </p>
        </div>
        <div class="col-lg-4 mr-auto">
          <p class="lead">Through this class, I learned php language and how it can use in various ways
             such as secure a web page, manage database, and effective coding with lots of built-in 
             functions. I think it was helpful and useful class for my career. 
            It was a wise choice that I take this class </p>
        </div>
      </div>
     
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact">
    <div class="container">
      <h2 class="text-center text-uppercase text-secondary mb-0">Register</h2>
      <hr class="star-dark mb-5">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
          <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
          <form method="POST" name="register" action="guestBook.php">
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Name</label>
                <input class="form-control" name="guestName" id="name" type="text" placeholder="Name" required="required" data-validation-required-message="Please enter your name.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Email Address</label>
                <input class="form-control" name="address" id="email" type="email" placeholder="Email Address" required="required" data-validation-required-message="Please enter your email address.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <br>
            <div id="success"></div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-xl">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>


  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

  <!-- Contact Form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/freelancer.min.js"></script>

</body>

</html>
