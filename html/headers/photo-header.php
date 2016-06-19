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
        <link rel="stylesheet" href="/bap/css/main.css">
        <link rel="stylesheet" href="/bap/assets/css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="/bap/assets/css/style-responsive.css" rel="stylesheet">
	<link rel="stylesheet" href="/bap/assets/css/table-responsive.css" rel="stylesheet">
        
        <script src="/bap/js/modernizr-2.6.2.min.js"></script>
    </head>
    <body background="/bap/assets/images/flyover.jpg">
        <div id="fh5co-wrapper">
        <div id="fh5co-page">
        <div id="fh5co-header" style="position:relative; top:-40px; ">
            <header id="fh5co-header-section">
                <div class="container">
                    <div class="nav-header">
                        <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
                        <h1 id="fh5co-logo"><a href="/bap/html/index.php">Beta Alpha Psi</a></h1>
                        <nav id="fh5co-menu-wrap" role="navigation">
                            <ul class="sf-menu" id="fh5co-primary-menu">
                                
                                <?php if($_SESSION['page'] == 'index') { ?> 
                                <li class="active">
                                <?php } else { ?>
                                <li>
                                <?php } ?>
                                    <a href="/bap/html/index.php">Home</a>
                                </li>
                                
                                <?php if($_SESSION['page'] == 'members') { ?> 
                                <li class="active">
                                <?php } else { ?>
                                <li>
                                <?php } ?>
                                    <a href="/bap/php/members.php">Members</a>
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
                                <li><a href="contact.html">Contact</a></li>
                               
                                <?php if($_SESSION['page'] == 'login') { ?> 
                                <li class="active">
                                <?php } else { ?>
                                <li>
                                <?php } ?>
                                    <a href="/bap/php/login.php">Login</a>
                                </li>
                              
                            </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </header>
        </div>
        </div>
        
    </body>
</html>