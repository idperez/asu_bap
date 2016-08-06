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
                <div class="panel panel-default">
                    <div class="panel-heading">Your Stats</div>
                    <div class="panel-body">
                        Hours: 32                        
                        <br>
                        Events Attended: 12
                        <br>
                        Events Missed: 1
                    </div>
                </div>
                <span ><a class="btn btn-primary" style="margin-bottom: 5px; width: 125px" onclick="window.location.href='<?php echo Router::url(array('controller'=>'Users', 'action'=>'fulledit/'.$user['User']['id']))?>'">Edit Info</a></span>
                <span ><a class="btn btn-primary" style="margin-bottom: 5px; width: 125px" onclick="window.location.href='<?php echo Router::url(array('controller'=>'Users', 'action'=>'logout'))?>'">Logout</a></span>             
            </div>
            <div class="col-sm-7 col-md-7 col-lg-7">
                <div class="panel-group animate-box">
                  <div class="panel panel-default" >
                    <h3 class="heading-section">Announcement Title (5/23/16) 05:00PM</h3>
                    <div style="position:relative; top:-20px;">
                        <div class="panel-body">Would you like to earn good money working for Apple this next year? Is a flexible part time schedule, something you are looking for? Do you want rewarding/meaningful work where you ARE the difference? How about a job that can grow into a career? Motivated Sun Devils can work for Apple from home. All majors with a 2.7+ GPA who will be enrolled at ASU through May 2017 are encouraged to apply
                            <br><br>
                            <b>Links:</b> LinkName1 LinkName2
                            <br>
                            <b>Files:</b> FileName1 FileName2
                        </div>   
                    </div>
                  </div>
                  <div class="panel panel-default" >
                    <h3 class="heading-section">Announcement Title (5/23/16) 05:00PM</h3>
                    <div style="position:relative; top:-20px;">
                        <div class="panel-body">Would you like to earn good money working for Apple this next year? Is a flexible part time schedule, something you are looking for? Do you want rewarding/meaningful work where you ARE the difference? How about a job that can grow into a career? Motivated Sun Devils can work for Apple from home. All majors with a 2.7+ GPA who will be enrolled at ASU through May 2017 are encouraged to apply
                            <br><br>
                            <b>Helpful Links:</b> LinkName1 LinkName2
                            <br>
                            <b>Additional Files:</b> FileName1 FileName2
                        </div>
                    </div>
                  </div>
                    <div class="panel panel-default" >
                    <h3 class="heading-section">Announcement Title (5/23/16) 05:00PM</h3>
                    <div style="position:relative; top:-20px;">
                        <div class="panel-body">Would you like to earn good money working for Apple this next year? Is a flexible part time schedule, something you are looking for? Do you want rewarding/meaningful work where you ARE the difference? How about a job that can grow into a career? Motivated Sun Devils can work for Apple from home. All majors with a 2.7+ GPA who will be enrolled at ASU through May 2017 are encouraged to apply
                            <br><br>
                            <b>Helpful Links:</b> LinkName1 LinkName2
                            <br>
                            <b>Additional Files:</b> FileName1 FileName2
                        </div>
                    </div>
                  </div>
                    <div class="panel panel-default" >
                    <h3 class="heading-section">Announcement Title (5/23/16) 05:00PM</h3>
                    <div style="position:relative; top:-20px;">
                        <div class="panel-body">Would you like to earn good money working for Apple this next year? Is a flexible part time schedule, something you are looking for? Do you want rewarding/meaningful work where you ARE the difference? How about a job that can grow into a career? Motivated Sun Devils can work for Apple from home. All majors with a 2.7+ GPA who will be enrolled at ASU through May 2017 are encouraged to apply
                            <br><br>
                            <b>Helpful Links:</b> LinkName1 LinkName2
                            <br>
                            <b>Additional Files:</b> FileName1 FileName2
                        </div>
                    </div>
                  </div>
                    <div class="panel panel-default" >
                    <h3 class="heading-section">Announcement Title (5/23/16) 05:00PM</h3>
                    <div style="position:relative; top:-20px;">
                        <div class="panel-body">Would you like to earn good money working for Apple this next year? Is a flexible part time schedule, something you are looking for? Do you want rewarding/meaningful work where you ARE the difference? How about a job that can grow into a career? Motivated Sun Devils can work for Apple from home. All majors with a 2.7+ GPA who will be enrolled at ASU through May 2017 are encouraged to apply
                            <br><br>
                            <b>Helpful Links:</b> LinkName1 LinkName2
                            <br>
                            <b>Additional Files:</b> FileName1 FileName2
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class='col-lg-2'>
                <div style="margin-bottom: 20px">
                    <h2>Your Events</h2>
                    <span ><a class="btn btn-primary" style="margin-bottom: 5px; width: 120px" onclick="window.location.href='<?php echo Router::url(array('controller'=>'Events', 'action'=>'my_events/'.$user['User']['id']))?>'">Events</a></span>
                </div>
                <div>
                    <h2>Officer Tools</h2>
                    <span ><a class="btn btn-primary" style="margin-bottom: 5px; width: 120px" onclick="window.location.href='<?php echo Router::url(array('controller'=>'Events', 'action'=>'manage_events'))?>'">Events</a></span>
                    <span ><a class="btn btn-primary" style="margin-bottom: 5px; width: 120px" onclick="window.location.href='<?php echo Router::url(array('controller'=>'Users', 'action'=>'manage_members'))?>'">Members</a></span>
                </div>
            </div>
        </div>
    </div>
</div>