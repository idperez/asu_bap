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
        
<!--        <link rel="icon" href="/bap/assets/images/logo.png"/>
        
        <script src="/bap/js/modernizr-2.6.2.min.js"></script>-->
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
                                    <a href="/bap/html/index.php">Home</a>
                                </li>

                                <li class="active">
                                <li>
                                    <a href="/bap/php/members.php">Members</a>
                                </li>
                                
                                <li class="active">
                                <li>
                                    <a href="/bap/html/info.php">Info</a>
                                </li>
                                
                                <li class="active">
                                <li>
                                    <a href="/bap/html/about.php">About</a>
                                </li>

                                <li class="active">
                                <li>
                                    <a href="/bap/html/contact.php">Contact</a>
                                </li>
                                                             
                                <li class="active">
                                <li>
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
    <?php echo $this->fetch('content');?>
</html>