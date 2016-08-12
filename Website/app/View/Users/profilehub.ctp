<div class="fh5co-hero-ish">
    <div class="fh5co-overlay"></div>
    <div class="desc animate-box" style="position:relative; top:280px; "></div>
</div>
<div id="fh5co-work-section" >
    <div class="container" style="position:relative; top:-40">
        <div class="row" >
            <div class="col-md-12 col-sm-12" >
                <div class="animate-box text-center">  
                    <img src="./../../app/webroot/img/profile_logo.png"  alt="profile_logo" height="120">
                </div>
            </div>    
       </div>
    </div>
    <div class="container">    
        <div class="row animate-box">
            <div class="col-lg-12 col-md-12 col-sm-12 " style="margin-bottom: 20px">
                <h1 style="display:inline; font-size: 30px; color: black;"><?php echo $user['User']['first_name'] . " " . $user['User']['last_name']; ?>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3" >
                <?php $photo = $user['Photo']['url']; ?>
                <div class="fh5co-blog" style="background-image: url(./../../app/webroot/img/profile_pics/Perez,Isidro.jpg); height: 280px; width: 260px;"></div>
                <span ><a class="btn btn-primary" style="margin-bottom: 5px; width: 260px" onclick="window.location.href='<?php echo Router::url(array('controller'=>'Users', 'action'=>'profile_pic/'.$user['User']['id']))?>'">Change Profile Picture</a></span>
                <br>
                <div class="panel panel-default">
                    <div class="panel-heading">Your Stats</div>
                    <div class="panel-body">
                        Hours: <?php echo $numOfHours; ?>                       
                        <br>
                        Events Attended: <?php echo $numOfEvents; ?>
                        <br>
                        Events Missed: <?php echo $numOfMisses; ?>
                    </div>
                </div>
                <span ><a class="btn btn-primary" style="margin-bottom: 5px; width: 125px" onclick="window.location.href='<?php echo Router::url(array('controller'=>'Users', 'action'=>'fulledit/'.$user['User']['id']))?>'">Edit Info</a></span>
                <span ><a class="btn btn-primary" style="margin-bottom: 5px; width: 125px" onclick="window.location.href='<?php echo Router::url(array('controller'=>'Users', 'action'=>'logout'))?>'">Logout</a></span>             
            </div>
            <div class="col-sm-7 col-md-7 col-lg-7">
                <div class="panel-group animate-box">
                  <?php $count = 0; ?>
                  <?php foreach($events as $event): ?>
                  <?php  $count++; ?>
                  <div class="panel panel-default" >
                    <h3 class="heading-section"><?php echo $event['Event']['name'] . ' ' . date('m/d/y H:i', strtotime($event['Event']['time'])); ?></h3>
                    <div style="position:relative; top:-20px;">
                        <div class="panel-body">
                            <?php echo $event['Event']['description']; ?>
                        </div>
                        <?php
                            if($event['Event']['type'] == 'Event') { 
                            //Check for RSVPd events     
                            $hasNotRsvped = FALSE;
                            foreach($user['Event'] as $checkRsvp):
                                if($checkRsvp['id'] == $event['Event']['id'])
                                    $hasNotRsvped = TRUE;
                            endforeach;
                            if(!$hasNotRsvped)
                                echo $this->Html->link('RSVP', array(
                                    'controller' => 'Events', 'action' => 'rsvpTo', AuthComponent::user('id'), $event['Event']['id']),
                                    array('class' => 'btn btn-primary')
                                );
                            else 
                                echo '<span>You have already registered for this event. </span>';
                            }
                        ?>
                        <?php
                        if(AuthComponent::user('level') == 'Officer')
                        {
                            echo $this->Html->link('Edit', array(
                                'controller' => 'Events', 'action' => 'edit', $event['Event']['id'])
                            );
                         echo ' ';
                         echo $this->Html->link('Delete', array(
                            'controller' => 'Events', 'action' => 'delete', $event['Event']['id'])
                         );
                        }?>                            
                    </div>
                  </div>
                  <?php endforeach; ?>
                  <?php unset($event); ?>
                  <?php if($count == 0) { ?> 
                    <h1>No Events At This Time. Check Back Soon!</h1>
                  <?php } ?>
                </div>
            </div>
            <div class='col-lg-2'>
                <div style="margin-bottom: 20px">
                    <h2>Your Events</h2>
                    <span ><a class="btn btn-primary" style="margin-bottom: 5px; width: 120px" onclick="window.location.href='<?php echo Router::url(array('controller'=>'Events', 'action'=>'my_events/'.$user['User']['id']))?>'">Events</a></span>
                </div>
                <div>
                    <?php if(AuthComponent::user('level') == 'Officer'){ ?>
                        <h2>Officer Tools</h2>
                        <span ><a class="btn btn-primary" style="margin-bottom: 5px; width: 120px" onclick="window.location.href='<?php echo Router::url(array('controller'=>'Events', 'action'=>'manage_events'))?>'">Events</a></span>
                        <span ><a class="btn btn-primary" style="margin-bottom: 5px; width: 120px" onclick="window.location.href='<?php echo Router::url(array('controller'=>'Users', 'action'=>'manage_members'))?>'">Members</a></span>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>