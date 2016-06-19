<?php $root = realpath($_SERVER["DOCUMENT_ROOT"]); ?>
<?php require_once($root."/bap/includes/connection.php"); ?>
<?php require_once($root."/bap/includes/functions/sessions.php"); ?>
<?php require_once($root."/bap/includes/functions/functions.php"); ?>
<?php require_once($root."/bap/includes/functions/validations.php"); ?>
<?php require_once($root."/bap/php/databaseservice.php"); ?>
<?php require_once($root."/bap/php/member/MemberList.php"); ?>

<?php
$DatabaseService = new DatabaseService;

$warning = false;

if(isset($_POST['submit'])) {
    // validations
  $required_fields = array("email", "password");
  validate_presences($required_fields);
  
  
  if (empty($errors)) {
    // Attempt Login

    $email = $_POST["email"];
    $password = $_POST["password"];
    
    $found_member = attempt_login($email, $password);
    
    if ($found_member) {
      // Success
      // Mark user as logged in and give the session all of their information
      $_SESSION["id"] = $found_member["id"];
      $_SESSION["email"] = $found_member["username"];
      $_SESSION["firstname"] = $found_member["firstname"];
      $_SESSION["lastname"] = $found_member["lastname"];
      $_SESSION["email"] = $found_member["email"];
    
      redirect_to("member/home.php");
    } else {
      // Failure
      $warning = true;
    }    
  }

}

?>
<?php //include($root."/bap/html/headers/photo-header.php"); ?>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
       
        <title>Beta Alpha Psi</title>

        <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,300' rel='stylesheet' type='text/css'>
        
        <link rel="stylesheet" href="/bap/css/animate.css">
        <link rel="stylesheet" href="/bap/css/icomoon.css">
        <link rel="stylesheet" href="/bap/css/bootstrap.css">
        <link rel="stylesheet" href="/bap/css/superfish.css">
        <link rel="stylesheet" href="/bap/css/style.css">
        
        <script src="/bap/js/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <div id="fh5co-wrapper">
        <div id="fh5co-page">
        <div id="fh5co-header">
            <header id="fh5co-header-section">
                <div class="container">
                    <div class="nav-header">
                        <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
                        <h1 id="fh5co-logo"><a href="/bap/html/index.html">Beta Alpha Psi</a></h1>
                        <nav id="fh5co-menu-wrap" role="navigation">
                            <ul class="sf-menu" id="fh5co-primary-menu">
                                <li>
                                    <a href="/bap/html/index.html">Home</a>
                            </li>
                                <li>
                                    <a href="portfolio.html">Portfolio</a>
                                </li>
                                <li>
                                    <a href="services.html" class="fh5co-sub-ddown">Services</a>
                                     <ul class="fh5co-sub-menu">
                                        <li><a href="left-sidebar.html">Web Development</a></li>
                                        <li><a href="right-sidebar.html">Branding &amp; Identity</a></li>                                    
                                        <li><a href="#">UI Animation</a></li>
                                        <li><a href="#">Copywriting</a></li>
                                        <li><a href="#">Photography</a></li> 
                                    </ul>
                                </li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="contact.html">Contact</a></li>
                               
                                <li class="active">
                                    <a href="/bap/php/login.php">Login</a>
                                </li>
                            </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </header>
        </div>

        
   <div class="fh5co-hero">
        <div class="fh5co-overlay"></div>
        <div class="fh5co-cover text-center" style="background-image: url(/bap/assets/images/wp-carey-building.jpg); ">
        <div class="desc animate-box" style="position:relative; top:280px; ">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-4">
                        <form role="form" action="" method="post" enctype="multipart/form-data" style=" margin: 0 auto; width:80%">
                            <div class="form-group col-md-6 ">
                                <label>Email:</label>
                                    <input type="email" class="form-control" maxlength="24" placeholder="email" id="firstname" name="email">
                                    <br>
                                <label>Password:</label>
                                    <input type="password" class="form-control" maxlength="24" placeholder="password" name="password">
                                    <br>
                                <button type="submit" class="btn btn-danger" name="submit">Log In</button> 
                            </div>                     
                        </form>         
                    </div>
                </div>                      
            </div>
        </div>
        </div>
        </div>
</body>
<footer>
<?php require_once($root."/bap/html/footer.php"); ?>
