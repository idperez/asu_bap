<?php $root = realpath($_SERVER["DOCUMENT_ROOT"]); ?>
<?php require_once($root."/bap/includes/connection.php"); ?>
<?php require_once($root."/bap/includes/functions/sessions.php"); ?>
<?php require_once($root."/bap/includes/functions/functions.php"); ?>
<?php require_once($root."/bap/includes/functions/validations.php"); ?>
<?php //require_once($root."/bap/php/databaseservice.php"); ?>

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
                                <li class="active">
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
                                <li><a href="#">Blog</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="/bap/php/login.php">Login</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </header>
        </div>     
            <div class="fh5co-hero-ish">
            <div class="fh5co-overlay"></div>
            <div class="fh5co-cover text-center" style="background-image: url(/bap/assets/images/members.jpg); ">
            <div class="desc animate-box" style="position:relative; top:280px; ">          
            </div>
            </div>
        </div>
        </div>
        </div>
        <br>
        <body onLoad="document.forms.search.part.focus()">  
    <section id="container" >       
        <section id="main-content" style="margin: 25px;">
            <section class="wrapper">
                <div class="row">
                    <div class="col-lg-12">  
                        <h1>Search Users</h1>
                        <form class="form-inline" name="search" role="form" method="POST" onkeypress="return event.keyCode != 13;">                          
                            <div class="form-group">                       
                                <fieldset class="form-group">
                                    <label>Serach By</label>
                                    <select class="form-control" name="searchBy" id="searchBy">
                                      <option value="firstname">First Name</option>
                                      <option value="lastname">Last Name</option>
                                      <option value="email">Email</option>                                 
                                      <option value="major1">Major</option>
                                      <option value="level">Level</option>
                                      <option value="title">Title</option>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="form-group" >
                                <label class="sr-only" for="searchbox">Search</label>
                                <input id="name" name="name" type="text" class="form-control" placeholder="Search..." autocomplete="off"/>              
                            </div>
                            <div class="form-group">                    
                                <button type="button" class="btn btn-default btnSearch">
                                    <span class="glyphicon glyphicon-search"> </span>
                                </button>                             
                            </div>
                        </form>
                    </div>  
                </div>              
                <div class="row mt">
                    <div class="col-lg-12">
                        <div class="content-panel tablesearch">
                            <section id="unseen">
                                <table id="resultTable" class="table table-bordered table-hover table-condensed">
                                    <thead>
                                        <tr>
                                            <th class="small">First Name</th>
                                            <th class="small">Last Name</th>
                                            <th class="small">Email</th>
                                            <th class="small">Major</th>
                                            <th class="small">Level</th>
                                            <th class="small">Linkedin</th>
                                            <th class="small">Profile</th>
                                            <th class="small">Edit</th>                             
                                        </tr>
                                    </thead>									
                                        <tbody></tbody>
                                    </table>                                                           
                            </section>
                        </div>
                    </div>
                </div>				
            </section>
        </section>
    </section>
        
        </body>
      


<?php require_once($root."/bap/html/footer.php"); ?>
<script  src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="/bap/assets/js/bootstrap.min.js"></script>
<script  src="/bap/assets/js/jquery.dcjqaccordion.2.7.js"></script>
<script  src="/bap/scripts/triggers.js"></script>