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
        <?php echo $this->Html->css('hover-min');?>
        <?php echo $this->Html->css('tile');?>
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,800,300' rel='stylesheet' type='text/css'> 
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" media="all">
        <title>Beta Alpha Psi</title>
        <link rel="icon" href="/bap/Website/app/webroot/img/logo.png"/>
        <?php echo $this->Html->script('modernizr-2.6.2.min.js');?>
    </head>
    <div id="fh5co-wrapper">       
        <div id="fh5co-page">
            <div id="fh5co-header" style="position:relative; top:-40px; ">
                <header id="fh5co-header-section">
                    <div class="container">
                        <div class="nav-header">
                            <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
                            <h1 id="fh5co-logo">
                                <?php echo $this->Html->link(
                                    'Beta Alpha Psi',
                                    array('manager' => true, 'controller' => 'Pages', 'action' => 'display')
                                );?>
                            </h1>
                            <nav id="fh5co-menu-wrap" role="navigation">
                                <ul class="sf-menu" id="fh5co-primary-menu">
                                    <li>
                                        <?php echo $this->Html->link(
                                            'Home',
                                            array('manager' => true, 'controller' => 'Pages', 'action' => 'display')
                                        );?>
                                    </li>
                                    <li>
                                        <?php echo $this->Html->link(
                                            'Members',
                                            array('controller' => 'Members', 'action' => 'index')
                                        );?>
                                    </li>
                                    <li>
                                        <?php echo $this->Html->link(
                                            'Info',
                                            array('controller' => 'Info', 'action' => 'index')
                                        );?>
                                        <ul class="fh5co-sub-menu">
                                            <li><?php echo $this->Html->link(
                                                    'Sponsor',
                                                    array('controller' => 'Info', 'action' => 'sponsor')
                                                );?>
                                            </li>
                                            <li>
                                                <a class="fh5co-sub-ddown" onclick="window.location.href='<?php echo Router::url(array('controller'=>'Info', 'action'=>'announcements'))?>'" style="cursor: pointer;">Announcements</a>
                                                <ul class="fh5co-sub-menu">
                                                    <li><?php echo $this->Html->link(
                                                            'Events',
                                                            array('controller' => 'Info', 'action' => 'events')
                                                        );?>
                                                    </li>
                                                    <li><?php echo $this->Html->link(
                                                            'Opportunities',
                                                            array('controller' => 'Info', 'action' => 'opportunities')
                                                        );?>
                                                    </li>
                                                    <li><?php echo $this->Html->link(
                                                            'Join',
                                                            array('controller' => 'Join', 'action' => 'index')
                                                        );?>
                                                    </li>
                                                </ul>
                                            </li> 
                                            <li>
                                                <a class="fh5co-sub-ddown">Board</a>
                                                <ul class="fh5co-sub-menu">
                                                    <li><?php echo $this->Html->link(
                                                            'Advisory',
                                                            array('controller' => 'Info', 'action' => 'advisory_board')
                                                        );?>
                                                    </li>
                                                    <li><?php echo $this->Html->link(
                                                            'Executive',
                                                            array('controller' => 'Info', 'action' => 'executive_board')
                                                        );?>
                                                    </li>
                                                </ul>
                                            </li>     
                                            <li><?php echo $this->Html->link(
                                                    'Policies',
                                                    array('controller' => 'Info', 'action' => 'policies')
                                                );?>
                                            </li>            
                                        </ul>
                                    </li>              
                                    <li>
                                        <?php echo $this->Html->link(
                                            'About',
                                            array('controller' => 'About', 'action' => 'index')
                                        );?>
                                    </li>
                                    <li>
                                        <?php echo $this->Html->link(
                                            'Contact',
                                            array('controller' => 'Contact', 'action' => 'index')
                                        );?>
                                    </li>
                                    <li>
                                        <?php echo $this->Html->link(
                                            'Login',
                                            array('controller' => 'Login', 'action' => 'index')
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
                            <li><?php echo $this->Html->link(
                                'Home',
                                array('manager' => true, 'controller' => 'Pages', 'action' => 'display')
                            );?>
                            </li>
                            <li> <?php echo $this->Html->link(
                                'Members',
                                array('controller' => 'Members', 'action' => 'index')
                            );?>
                            </li>
                            <li>
                            <?php echo $this->Html->link(
                                'Info',
                                array('controller' => 'Info', 'action' => 'index')
                            );?>
                            </li>
                            <li>
                            <?php echo $this->Html->link(
                                'About',
                                array('controller' => 'About', 'action' => 'index')
                            );?>
                            </li>
                            <li>
                            <?php echo $this->Html->link(
                                'Contact',
                                array('controller' => 'Contact', 'action' => 'index')
                            );?>
                            </li>
                            <li>
                            <?php echo $this->Html->link(
                                'Login',
                                array('controller' => 'Login', 'action' => 'index')
                            );?>
                            </li> 
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>  
    <?php echo $this->Html->script('jquery.min.js');?>
    <?php echo $this->Html->script('jquery.easing.1.3.min.js');?>
    <?php echo $this->Html->script('hoverIntent.js');?>    
    <?php echo $this->Html->script('jquery.waypoints.min.js');?> 
    <?php echo $this->Html->script('magnific-popup-options.min.js');?> 
    <?php echo $this->Html->script('main.js');?>    
    <?php echo $this->Html->script('respond.min.js');?>
    <?php echo $this->Html->script('superfish.js');?>     
</html>