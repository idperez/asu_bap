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
                    <th>Event Time</th>
                    <th>Hours</th>
                    <th>Attended</th>
                    <th>Revoke RSVP</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Event Title</td>
                    <td>5/23/16</td>
                    <td>08:00PM</td>
                    <td>2</td>
                    <td>Future Event</td>
                    <td><a class="btn btn-primary"  onclick="window.location.href='<?php echo Router::url(array('controller'=>'Users', 'action'=>'cancel_rsvp'))?>'">Cancel</a></td>
                </tr>
                <tr>
                    <td>Event Title</td>
                    <td>5/23/16</td>
                    <td>08:00PM</td>
                    <td>2</td>
                    <td>Yes</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Event Title</td>
                    <td>5/23/16</td>
                    <td>08:00PM</td>
                    <td>4</td>
                    <td>Yes</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Event Title</td>
                    <td>5/23/16</td>
                    <td>08:00PM</td>
                    <td>1</td>
                    <td>No</td>
                    <td></td>
                </tr>              
            </tbody>
        </table>
    </div>
</div>