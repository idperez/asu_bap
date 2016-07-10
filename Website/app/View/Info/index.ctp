<div class="fh5co-hero">
    <div class="fh5co-overlay"></div>
        <div class="fh5co-cover text-center" style="background-image: url(/bap/Website/app/webroot/img/brothers.jpg); ">
            <div class="desc animate-box" style="position:relative; top:280px; ">
                <h2>Get Informed</h2>

                <h3 style="font-style: italic; color: white;">“By failing to prepare, you are preparing to fail.”</h3>

                <h4 style="color: white; position: relative; top: -15px;">- Benjamin Franklin.</h4>	
              
            </div>
        </div>
    </div>
    <div id="fh5co-services-section" class="border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-3 animate-box">
                    <h3 class="heading-section">What We Do</h3>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and </p>
                </div>
                <div class="col-md-9 col-sm-12">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="services animate-box">
                                <span><a class="hvr-wobble-vertical fa fa-newspaper-o fa-4x" ria-hidden="true" style="color: #bfbfbf" onclick="window.location.href='<?php echo Router::url(array('controller'=>'Info', 'action'=>'announcements'))?>'"></a></span>
                                <h3>Announcements</h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="services animate-box">
                                <span><a class="hvr-wobble-vertical fa fa-briefcase fa-4x" aria-hidden="true" style="color: #bfbfbf;" onclick="window.location.href='<?php echo Router::url(array('controller'=>'Info', 'action'=>'advisory_board'))?>'"></a></span>
                                <h3>Advisory Board</h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="services animate-box">
                                <span><a class="hvr-wobble-vertical fa fa-users fa-4x" aria-hidden="true" style="color: #bfbfbf;" onclick="window.location.href='<?php echo Router::url(array('controller'=>'Info', 'action'=>'executive_board'))?>'"></a></span>
                                <h3>Executive Board</h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
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
                                <span><a class="hvr-wobble-vertical fa fa-paypal fa-4x" aria-hidden="true" style="color: #bfbfbf;" onclick="window.location.href='<?php echo Router::url(array('controller'=>'Info', 'action'=>'sponsor'))?>'"></a></span>
                                <h3>Sponsor</h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="services animate-box">
                                <span><a class="hvr-wobble-vertical fa fa-calendar fa-4x" aria-hidden="true" style="color: #bfbfbf;" onclick="window.location.href='<?php echo Router::url(array('controller'=>'Info', 'action'=>'events'))?>'"></a></span>
                                <h3>Events</h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="services animate-box">
                                <span><a class="hvr-wobble-vertical fa fa-clipboard fa-4x" aria-hidden="true" style="color: #bfbfbf;" onclick="window.location.href='<?php echo Router::url(array('controller'=>'Info', 'action'=>'policies'))?>'"></a></span>
                                <h3>Policies</h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            </div>
                        </div>	
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div id="main-section">
        <div id="fh5co-work">
            <div class="work-wrap">
                <div class="container">
                    <div class="fh5co-project-inner row">
                        <div class="fh5co-imgs col-md-8 animate-box">
                            <div class="img-holder-2 animate-box">
                                <?php echo $this->Html->image('about-image.jpg', array('height'=>'445', 'width'=>'640')) ?>         
                            </div>
                            <div class="img-holder-1 animate-box">
                                <?php echo $this->Html->image('ladies.jpg', array('height'=>'450', 'width'=>'650')) ?>                        
                            </div>
                        </div>
                        <div class="fh5co-text col-md-4 animate-box">
                            <h3>Want To Become A Member?</h3>
                            <h2>Join the club that will elevate you.</h2>
                            <p>See when to apply.</p>
                            <p><button class="btn-danger" onclick="window.location.href='<?php echo Router::url(array('controller'=>'Pages', 'action'=>'join'))?>'">Join</button></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>



