<?php session_start();?>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <?php echo $this->Html->css('animate');?>
       <?php echo $this->Html->css('icomoon');?>
       <?php echo $this->Html->css('bootstrap');?>
       <?php echo $this->Html->css('superfish');?>
       <?php echo $this->Html->css('style');?>
       <?php echo $this->Html->css('main');?>
       <?php echo $this->Html->css('fonts');?>
        <title>Beta Alpha Psi</title>
               <link rel="icon" href="/bap/assets/images/logo.png"/>
        
        <script src="/bap/js/modernizr-2.6.2.min.js"></script>
    </head>
    
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
                           
                                <li class="active">
                                <li>
                                    <?php echo $this->Html->link(
                                        'Home',
                                        array('manager' => true, 'controller' => 'Pages', 'action' => 'display')
                                    );?>
                                </li>
                                
                                <li class="active">
                                <li>
                                    <?php echo $this->Html->link(
                                        'Members',
                                        array('controller' => 'Members', 'action' => 'index')
                                    );?>
                                </li>
                                
                                <li class="active">
                                <li>
                                    <?php echo $this->Html->link(
                                        'Info',
                                        array('controller' => 'Pages', 'action' => 'info')
                                    );?>
                                </li>
                                
                                <li class="active">
                                <li>
                                    <?php echo $this->Html->link(
                                        'About',
                                        array('controller' => 'Pages', 'action' => 'about')
                                    );?>
                                </li>

                                <li class="active">
                                <li>
                                    <?php echo $this->Html->link(
                                        'Contact',
                                        array('controller' => 'Pages', 'action' => 'contact')
                                    );?>
                                </li>
                                                             
                                <li class="active">
                                <li>
                                    <?php echo $this->Html->link(
                                        'Login',
                                        array('controller' => 'Pages', 'action' => 'login')
                                    );?>
                                </li> 
                            </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </header>
        </div>
    </div>
    <?php echo $this->fetch('content');?>
            <footer> 
<div id="footer" >
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            C© 2016 Beta Alpha Psi, Beta Tau Chapter - Isidro Perez, Drew Demechko                     
                        </div>
                        <div class="col-md-6">
                            <ul class="footer-menu">
                                <li><a href="/bap/html/index.php">Home</a></li>
                                <li><a href="/bap/php/members.php">Members</a></li>
                                <li><a href="/bap/html/info.php">Info</a></li>
                                <li><a href="/bap/html/about.php">About</a></li>
                                <li><a href="/bap/html/contact.php">Contact</a></li>
                                <li><a href="/bap/php/login.php">Log In</a></li
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
      

        <script src="/bap/js/jquery.min.js"></script>
	<script src="/bap/js/jquery.easing.1.3.js"></script>
	<script src="/bap/js/bootstrap.min.js"></script>
	<script src="/bap/js/jquery.waypoints.min.js"></script>
	<script src="/bap/js/hoverIntent.js"></script>
	<script src="/bap/js/superfish.js"></script>
	<script src="/bap/js/main.js"></script>
</html>