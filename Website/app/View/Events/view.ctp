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
                    <?php echo $event['Event']['name']; ?>
                    </span>
                </div>
                <br><br><br>
                <div class=" col-sm-12 col-md-12 col-lg-12">
                    <div class="col-sm-7 col-md-7 col-lg-7">
                        <div class="panel-group animate-box">
                            <div class="panel panel-default" >
                                <h3 class="heading-section"><?php echo $event['Event']['name'] . ' ' . date('m/d/y h:iA', strtotime($event['Event']['time'])); ?></h3>
                                <div style="position:relative; top:-20px;">
                                    <div class="panel-body">
                                        <?php echo $event['Event']['description']; ?>
                                    </div>   
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-3 col-lg-3 animate-box">
                    <div class="panel panel-default">
                    <div class="panel-heading">Event Stats</div>
                    <div class="panel-body">
                        <?php 
                        $present = 0;
                        foreach($rsvps as $rsvp):
                            if($rsvp['EventsUser']['present'] == TRUE)
                                $present++;
                        endforeach;
                        ?>
                        Hours: <?php echo $event['Event']['hours']; ?>                        
                        <br>
                        Total Attendance: <?php echo $present; ?>
                        <br>
                        Total RSVPs: <?php echo count($rsvps); ?>
                        <br>
                        Total Misses: 
                        <?php 
                        if(!($event['Event']['closed']))
                            echo '0';
                        else
                            echo count($rsvps) - $present; 
                        ?>
                    </div>
                    </div>
                </div>
                    <div class="col-sm-2 col-md-2 col-lg-2 animate-box">
                        <span ><a class="btn btn-primary" style="width: 150px;" onclick="window.location.href='<?php echo Router::url(array('controller'=>'Events', 'action'=>'edit', $event['Event']['id']))?>'">Edit</a></span>
                        <br><br>
                        <span ><a class="btn btn-primary" style="width: 150px;" onclick="window.location.href='<?php echo Router::url(array('controller'=>'Events', 'action'=>'check_in', $event['Event']['id']))?>'">Check In</a></span>
                        <br><br>
                        <?php if(!($event['Event']['closed'])) {?>
                        <span><a class="btn btn-primary" style="width: 150px;" onclick="window.location.href='<?php echo Router::url(array('controller'=>'Events', 'action'=>'close_event', $event['Event']['id']))?>'">Close</a></span>
                        <?php }else{ ?>
                        <span><a class="btn btn-primary" style="width: 150px;" onclick="window.location.href='<?php echo Router::url(array('controller'=>'Events', 'action'=>'open_event', $event['Event']['id']))?>'">Open</a></span>                        
                        <?php } ?>
                    </div>
                </div>
                <br>
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <h2 class='text-center animate-box'>Attendance</h2>
                    <div class="container animate-box">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Attended</th>
                                    <th>View Profile</th>
                                    <td>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                foreach($rsvps as $rsvp): ?>
                                    <tr>
                                        <?php foreach($users as $user)
                                            if($user['User']['id'] == $rsvp['EventsUser']['user_id']){ ?>
                                                <td><?php echo $user['User']['first_name']; ?></td>
                                                <td><?php echo $user['User']['last_name']; ?></td>
                                                <td><?php if($rsvp['EventsUser']['present'] == TRUE) echo 'Yes'; else echo 'No'; ?></td>
                                                <th><span><a class="btn btn-primary" onclick="window.location.href='<?php echo Router::url(array('controller'=>'Events', 'action'=>'officer_view', $user['User']['id']))?>'">View</a></span></th>
                                                <!--if user is checked in and event is not closed-->
                                                <?php if($rsvp['EventsUser']['present'] == 0 && (!($event['Event']['closed']))) {?>
                                                <th><span><a class="btn btn-primary" onclick="window.location.href='<?php echo Router::url(array('controller'=>'Events', 'action'=>'sign_in', $event['Event']['id'], $user['User']['username']))?>'">Check in</a></span></th>
                                                <?php } else if($rsvp['EventsUser']['present']){ ?>
                                                <th><span>Checked in</span></th>
                                                <?php } else { ?>
                                                <th><span><a class="btn btn-primary" disabled="true">Check in</a></span></th>
                                                <?php } ?>
                                        <?php } ?>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>   
                </div>
            </div>
        </div>
    </div>
</div>