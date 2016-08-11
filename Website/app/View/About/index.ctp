<div class="fh5co-hero">
    <div class="fh5co-overlay"></div>
    <div class="fh5co-cover text-center" style="background-image: url(./app/webroot/img/aboutus.jpg); ">
        <div class="desc animate-box" style="position:relative; top:300px; ">
             <h2>About Us</h2>
        </div>
    </div>
</div>
<div id="fh5co-content-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="fh5co-about-us animate-box">
                    <img style="height: 400px; width: 550px;"<?php echo $this->Html->image('about_middle.jpg', array('alt' => 'about')) ?>     
                    <p> The mission of Beta Alpha Psi, the premier international honor and service organization for financial and business information students and professionals, is to inspire and support excellence.
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="fh5co-about-us animate-box">
                    <img style="height: 400px; width: 550px;"<?php echo $this->Html->image('about_middle_2.jpg', array('alt' => 'about')) ?>            
                    <p>Beta Alpha Psi will shape the financial and business information professions by developing members into ethical, professional, and confident leaders.
                </div>
            </div>
        </div>
    </div>
</div>
<hr>
<div id="fh5co-content-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="fh5co-testimonial text-center animate-box">
                    <h2>Our Borders Extend Beyond Arizona</h2>
                    <figure>
                        <?php echo $this->Html->image('logo.png', array('alt' => 'mission')) ?>
                    </figure>
                    <blockquote>
                        <p>Founded in 1919, Beta Alpha Psi is an honor organization for financial information students and professionals. There are over 300 chapters on college and university campuses with over 300,000 members initiated since Beta Alpha Psi's formation. </p>           
                    </blockquote>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="fh5co-about-us animate-box">
                    <?php echo $this->Html->image('global_about.jpg', array('alt' => 'about')) ?>            
                    <p>Our alumni and current members have had significant impact in industry and academics. Visit our global site to explore more about the history and learn about the other chapters. <br><a onclick="window.location.href='https://www.bap.org/'" style="cursor: pointer;">Visit our global site.</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>
<div id="fh5co-services-section" class="border-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-3 animate-box">
                <h3 class="heading-section">What We Do</h3>
                <p>Get familiar with our family. Explore a little. </p>
            </div>
            <div class="col-md-9 col-sm-12">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="services animate-box">
                            <span><a class="hvr-wobble-vertical fa fa-paypal fa-4x" ria-hidden="true" style="color: #bfbfbf" onclick="window.location.href='<?php echo Router::url(array('controller'=>'Join', 'action'=>'index'))?>'"></a></span>
                            <h3>Join</h3>
                            <p>With one form  you will be on your way to making the best decision you will make in your college career.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="services animate-box">
                            <span><a class="hvr-wobble-vertical fa fa-briefcase fa-4x" aria-hidden="true" style="color: #bfbfbf;" onclick="window.location.href='<?php echo Router::url(array('controller'=>'Info', 'action'=>'advisory_board'))?>'"></a></span>
                            <h3>Advisory Board</h3>
                            <p>Meet these champions of industry who help our chapter stay competitive and on top.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="services animate-box">
                            <span><a class="hvr-wobble-vertical fa fa-users fa-4x" aria-hidden="true" style="color: #bfbfbf;" onclick="window.location.href='<?php echo Router::url(array('controller'=>'Info', 'action'=>'executive_board'))?>'"></a></span>
                            <h3>Executive Board</h3>
                            <p>Our 2016 executive board is announced. See who you need to be in contact with to advance.</p>
                        </div>
                    </div>	
                </div>
            </div>
            <div class="col-md-3 animate-box">
            </div>
            <div class="col-md-9 col-sm-12">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="services animate-box">                          
                            <span><a class="hvr-wobble-vertical fa fa-binoculars fa-4x" aria-hidden="true" style="color: #bfbfbf;" onclick="window.location.href='<?php echo Router::url(array('controller'=>'Events', 'action'=>'opportunities'))?>'"></a></span>
                            <h3>Opportunities</h3>
                            <p>Check out new opportunities in the valley. Put yourself on the map.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="services animate-box">
                            <span><a class="hvr-wobble-vertical fa fa-calendar fa-4x" aria-hidden="true" style="color: #bfbfbf;" onclick="window.location.href='<?php echo Router::url(array('controller'=>'Events', 'action'=>'events'))?>'"></a></span>
                            <h3>Events</h3>
                            <p>Keep updated with the latest events. Don't miss out!</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="services animate-box">
                            <span><a class="hvr-wobble-vertical fa fa-clipboard fa-4x" aria-hidden="true" style="color: #bfbfbf;" onclick="window.location.href='<?php echo Router::url(array('controller'=>'Info', 'action'=>'policies'))?>'"></a></span>
                            <h3>Policies</h3>
                            <p>See what it takes to be the best member you can be. A must read for anyone.</p>
                        </div>
                    </div>	
                </div>
            </div>
        </div>
    </div>
</div>