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
                    My RSVP's
                    </span>
                </div>
            </div>    
        </div>
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
                    <th>Attended</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($user['Event'] as $event): ?>
                <tr>
                    <td><?php echo $event['name']; ?></td>
                    <td><?php echo date('m/d/y', strtotime($event['time'])); ?></td>
                    <td><?php echo date('h:m', strtotime($event['time'])); ?></td>
                    <td><?php echo $event['hours']; ?></td>
                    <td>Future Event</td> <!--todo - Not implemented yet.-->
                </tr>
                <?php endforeach; ?>              
            </tbody>
        </table>
    </div>
</div>