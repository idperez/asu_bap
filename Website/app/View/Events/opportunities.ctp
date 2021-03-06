<div class="fh5co-hero-ish">
    <div class="fh5co-overlay"></div>
       
    <div class="desc animate-box" style="position:relative; top:280px; "></div>
</div>
<div id="fh5co-work-section" >
    <div class="container">
        <div class="row" >
            <div class="col-md-12 col-sm-12" >
                <div class="animate-box text-center">                 
                    <img src="/bap/Website/app/webroot/img/profile_logo.png"  alt="profile_logo" height="120" style="position:relative; top:-35px; ">
                </div>
                <div class="animate-box" style="width: 100%; height: 20px; border-bottom: 1px solid black; text-align: center">
                    <span style="font-size: 30px; background-color: #F3F5F6; padding: 0 10px;">
                        Opportunities
                    </span>
                </div>
            </div>    
        </div>
    </div>
    <br><br><br>
    <div class="container">
    <div class="row" >
        <div class="col-sm-7 col-md-7 col-lg-7">
            <div class="panel-group animate-box">
              <?php foreach($events as $event):?>
              <?php if($event['Event']['type'] == 'Opportunity'){ ?>
                <div class="panel panel-default" >
                    <h3 class="heading-section"><?php echo $event['Event']['name'] . ' ' . date('m/d/y h:iA', strtotime($event['Event']['time'])); ?></h3>
                    <div style="position:relative; top:-20px;">
                        <div class="panel-body">
                            <?php echo $event['Event']['description']; ?>                            
                            <?php                         
                                if(AuthComponent::user('level') == 'Officer')  
                                    echo $this->Html->link('Edit', array(
                                    'controller' => 'Events', 'action' => 'edit', $event['Event']['id'])
                                );
                                echo ' ';
                                if(AuthComponent::user('level') == 'Officer') ?>
                                <?php
                                     echo $this->Html->link('Delete', 
                                        array('controller' => 'Events', 'action' => 'delete', $event['Event']['id']),
                                        array('confirm' => 'Are you sure you wish to delete this Opportuinity?')
                                );
                            ?>
                        </div> 
                    </div>
                </div>  
              <?php } ?>
              <?php endforeach; ?>    
              <?php if(!(count($events))) { ?>
                <h2>Nothing Posted At This Time. Check Back Soon!</h2>
             <?php } ?>
            </div>
        </div>
        <div class="animate-box">
            <div class="col-md-5 col-sm-5">
                <div class="fh5co-about-us">
                    <?php echo $this->Html->image('opportunities.jpg', array('alt' => 'about')) ?>            
                    <p>Questions about any career opportunities, feel free to message one of our executives.<br><a onclick="window.location.href='<?php echo Router::url(array('controller'=>'Contact', 'action'=>'index'))?>'" style="cursor: pointer;"?>Contact Us</a></p>
                </div>
                <div class="col-md-12 col-sm-12">
                    <div class="col-md-7 col-sm-7">
                        <h3 class="heading-section">Filter</h3>
                        <p>What are you looking for?</p>
                        <div style="position:relative; top:-20px;">
                            <a onclick="window.location.href='<?php echo Router::url(array('controller'=>'Events', 'action'=>'announcements'))?>'" style="cursor: pointer;">Announcements</a>
                            &nbsp;
                            <a onclick="window.location.href='<?php echo Router::url(array('controller'=>'Events', 'action'=>'events'))?>'" style="cursor: pointer;">Events</a>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-5">
                        <h3 class="heading-section">Don't Miss Out</h3>
                        <a target="_blank" title="find us on Facebook" href="http://www.facebook.com/bapasu">
                            <img alt="follow us on facebook" src="//login.create.net/images/icons/user/facebook_30x30.png" border=0>
                        </a>
                        <a target="_blank" title="follow me on twitter" href="http://www.twitter.com/asu_bap">
                            <img alt="follow me on twitter" src="//login.create.net/images/icons/user/twitter-b_30x30.png" border=0>
                        </a>
                        <a target="_blank" title="follow me on instagram" href="http://www.instagram.com/asu_bap">
                            <img alt="follow me on instagram" src="https://c866088.ssl.cf3.rackcdn.com/assets/instagram30x30.png" border=0>
                        </a>
                    </div>
                    <br>
                    <iframe width="450" height="255" src="https://www.youtube.com/embed/s2TKXYWNfMk" frameborder="0" allowfullscreen></iframe>
                </div>     
            </div>
        </div>
    </div>
</div> 
</div>


