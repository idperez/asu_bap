<div class="fh5co-hero-ish">
    <div class="fh5co-overlay"></div>
    <div class="desc animate-box" style="position:relative; top:280px; "></div>
</div>
<div id="fh5co-work-section" >
    <div class="container">
        <div class="row" >
            <div class="col-md-12 col-sm-12" >
                <div class="animate-box text-center" style="position:relative;">  
                    <img src="/bap/Website/app/webroot/img/profile_logo.png"  alt="profile_logo" height="120" style="position:relative; top:-35px; ">
                </div>
                <div class="animate-box" style="width: 100%; height: 20px; border-bottom: 1px solid black; text-align: center">
                    <span style="font-size: 30px; background-color: #F3F5F6; padding: 0 10px;">
                   Past Events
                    </span>
                </div>
                <br><br>                
                <div class="container animate-box">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Event Name</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Hours</th>
                                <th>Attendance</th>
                                <th>RSVP</th>
                                <th>View</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($events as $event):?>
                        <?php if($event['Event']['type'] == 'Event' && $event['Event']['closed']){ ?>
                            <tr>
                                <td><?php echo $event['Event']['name']; ?></td>
                                <td><?php echo date('m/d/y', strtotime($event['Event']['time'])); ?></td>
                                <td><?php echo date('h:iA', strtotime($event['Event']['time'])); ?></td>
                                <td><?php echo $event['Event']['hours']; ?></td>
                                <?php 
                                $numOfPresentMembers = 0;
                                $numOfRsvps = 0;
                                foreach($rsvps as $rsvpdMember):
                                    if($event['Event']['id'] == $rsvpdMember['EventsUser']['event_id'])
                                    {
                                        $numOfRsvps++;
                                        if($rsvpdMember['EventsUser']['present'])
                                            $numOfPresentMembers++;
                                    }
                                endforeach;
                                ?>
                                <td><?php echo $numOfPresentMembers; ?></td>
                                <td><?php echo $numOfRsvps; ?></td>
                                <th>
                                <?php echo $this->Html->link('View', array(
                                    'controller' => 'Events', 'action' => 'view', $event['Event']['id']),
                                    array('class' => 'btn btn-primary')
                                );
                                ?>
                                </th>
                            </tr>
                        <?php } ?>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <span class="animate-box" style="float: right; margin-left: 5px;"><a class="btn btn-primary" onclick="window.location.href='<?php echo Router::url(array('controller'=>'Events', 'action'=>'manage_events'))?>'">Future Events</a></span>
                <span class="animate-box" style="float: right;"><a class="btn btn-primary" onclick="window.location.href='<?php echo Router::url(array('controller'=>'Events', 'action'=>'add'))?>'">New Annoucement</a></span>
            </div>    
        </div>
    </div>
</div>