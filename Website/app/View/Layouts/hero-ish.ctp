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
        <?php $this->Html->meta('icon', $this->Html->image('logo.png')); ?>
       
        <?php echo $this->Html->script('modernizr-2.6.2.min.js');?>
        <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
        <script>tinymce.init({
            selector: 'textarea',
            plugins: [
                'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table contextmenu paste code'
            ],
            toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
            content_css: [
                '//fast.fonts.net/cssapi/e6dc9b99-64fe-4292-ad98-6974f93cd2a2.css',
                '//www.tinymce.com/css/codepen.min.css'
            ]
        });</script>
    </head>
    <body>
    <div id="fh5co-wrapper">
        <div id="fh5co-page">
        <div id="fh5co-header">
        <!-- end:top -->
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
                    <!-- START #fh5co-menu-wrap -->
                    <nav id="fh5co-menu-wrap" role="navigation">
                        <ul class="sf-menu" id="fh5co-primary-menu">
                            
                            <li>
                                <?php echo $this->Html->link(
                                            'Members',
                                            array('controller' => 'Users', 'action' => 'index')
                                );?>
                                <ul class="fh5co-sub-menu">
                                             <li><?php echo $this->Html->link(
                                                            'Join',
                                                            array('controller' => 'Join', 'action' => 'index')
                                                        );?>
                                            </li>
                                            <li><?php echo $this->Html->link(
                                                    'Policies',
                                                    array('controller' => 'Info', 'action' => 'policies')
                                                );?>
                                            </li>   
                                </ul>
                            </li>
                            <li>
                                <a href="services.html" class="fh5co-sub-ddown">Services</a>
                                <ul class="fh5co-sub-menu">
                                    <li><a href="left-sidebar.html">Web Development</a></li>
                                    <li><a href="right-sidebar.html">Branding &amp; Identity</a></li>
                                    <li>
                                        <a href="#" class="fh5co-sub-ddown">Free HTML5</a>
                                        <ul class="fh5co-sub-menu">
                                            <li><a href="http://freehtml5.co/preview/?item=build-free-html5-bootstrap-template" target="_blank">Build</a></li>
                                            <li><a href="http://freehtml5.co/preview/?item=work-free-html5-template-bootstrap" target="_blank">Work</a></li>
                                            <li><a href="http://freehtml5.co/preview/?item=light-free-html5-template-bootstrap" target="_blank">Light</a></li>
                                            <li><a href="http://freehtml5.co/preview/?item=relic-free-html5-template-using-bootstrap" target="_blank">Relic</a></li>
                                            <li><a href="http://freehtml5.co/preview/?item=display-free-html5-template-using-bootstrap" target="_blank">Display</a></li>
                                            <li><a href="http://freehtml5.co/preview/?item=sprint-free-html5-template-bootstrap" target="_blank">Sprint</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">UI Animation</a></li>
                                    <li><a href="#">Copywriting</a></li>
                                    <li><a href="#">Photography</a></li> 
                                </ul>
                            </li>
                            <li class="active"><a href="about.html">About</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
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
                                'Users',
                                array('controller' => 'Users', 'action' => 'index')
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
    <?php echo $this->Html->script('image_preview.js');?> 
    <?php echo $this->Html->script('superfish.js');?>  

