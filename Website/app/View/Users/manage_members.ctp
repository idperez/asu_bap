<div class="fh5co-hero-ish">
    <div class="fh5co-overlay"></div>
    <div class="desc animate-box" style="position:relative; top:280px; "></div>
</div>
<div id="fh5co-work-section" >
    <div class="container" style="position:relative;">
        <div class="row" >
            <div class="col-md-12 col-sm-12" >
                <div class="animate-box text-center" style="position:relative;">  
                    <img src="/bap/Website/app/webroot/img/profile_logo.png"  alt="profile_logo" height="120" style="position:relative; top:-35px; ">
                </div>
                <div class="animate-box" style="width: 100%; height: 20px; border-bottom: 1px solid black; text-align: center">
                    <span style="font-size: 30px; background-color: #F3F5F6; padding: 0 10px;">
                    Manage Members
                    </span>
                </div>
                <br><br>                
                <div class="container animate-box">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                <th>Level</th>
                                <th>Hours</th>
                                <th>Missed Events</th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($users as $user): ?>
                            <?php 
                            $numOfHours = 0;
                            $numOfMisses = 0;
                            foreach($allRsvps as $rsvpd): 
                                if($rsvpd['EventsUser']['user_id'] == $user['User']['id'])
                                {
                                    foreach($events as $event): 
                                        if($rsvpd['EventsUser']['event_id'] == $event['Event']['id'])
                                            if($event['Event']['closed'])
                                                if($rsvpd['EventsUser']['present'] == 0)
                                                    $numOfMisses++;
                                                else
                                                    $numOfHours += $event['Event']['hours'];
                                    endforeach;           
                                }
                            endforeach;        
                            ?>
                            <tr>            
                                <td><?php echo $user['User']['first_name']; ?></td>
                                <td><?php echo $user['User']['last_name']; ?></td>
                                <td><?php echo $user['User']['level']; ?></td>
                                <td><?php echo $numOfHours; ?></td>
                                <td><?php echo $numOfMisses; ?></td>
                                <th><span><a class="btn btn-primary" onclick="window.location.href='<?php echo Router::url(array('controller'=>'Users', 'action'=>'edit', $user['User']['id']))?>'">Edit</a></span></th>
                                <th><span><a class="btn btn-primary" onclick="window.location.href='<?php echo Router::url(array('controller'=>'Events', 'action'=>'officer_view', $user['User']['id']))?>'">View</a></span></th>
                                <th><span><a class="btn btn-primary" onclick="window.location.href='<?php echo Router::url(array('controller'=>'Users', 'action'=>'delete', $user['User']['id']))?>'">Delete</a></span></th>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <span class="animate-box" style="float: right; margin-left: 5px"><a class="btn btn-primary" onclick="window.location.href='<?php echo Router::url(array('controller'=>'Users', 'action'=>'add'))?>'">New Member</a></span> 
                <span class="animate-box" style="float: right;"><a class="btn btn-primary" onclick="window.location.href='<?php echo Router::url(array('controller'=>'Users', 'action'=>'manage_prospective_members'))?>'">Prospective Members</a></span> 
            </div>    
        </div>
    </div>
</div>
