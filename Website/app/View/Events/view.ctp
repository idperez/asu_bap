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
                    Event Name
                    </span>
                </div>
                <br><br><br>
                <div class="col-lg-offset-1 col-sm-12 col-md-12 col-lg-12">
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
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-3 col-lg-3 animate-box">
                        <span ><a class="btn btn-primary" style="width: 150px;" onclick="window.location.href='<?php echo Router::url(array('controller'=>'Events', 'action'=>'edit'))?>'">Edit</a></span>
                        <br><br>
                        <span ><a class="btn btn-primary" style="width: 150px;" onclick="window.location.href='<?php echo Router::url(array('controller'=>'Events', 'action'=>'view'))?>'">Remove</a></span>
                        <br><br>
                        <span ><a class="btn btn-primary" style="width: 150px;" onclick="window.location.href='<?php echo Router::url(array('controller'=>'Events', 'action'=>'sign_in'))?>'">Start Login</a></span>
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
                                    <th>Hours</th>
                                    <th>View Profile</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Isidro</td>
                                    <td>Perez</td>
                                    <td>2</td>
                                    <th><span ><a class="btn btn-primary" onclick="window.location.href='<?php echo Router::url(array('controller'=>'Events', 'action'=>'view'))?>'">View</a></span></th>
                                </tr>
                                <tr>
                                    <td>Scott</td>
                                    <td>Karl</td>
                                    <td>2</td>
                                    <th><span ><a class="btn btn-primary" onclick="window.location.href='<?php echo Router::url(array('controller'=>'Events', 'action'=>'view'))?>'">View</a></span></th>
                                </tr>
                                <tr>
                                    <td>Dennis</td>
                                    <td>Richards</td>
                                    <td>4</td>
                                    <th><span ><a class="btn btn-primary" onclick="window.location.href='<?php echo Router::url(array('controller'=>'Events', 'action'=>'view'))?>'">View</a></span></th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <br>
                    <h2 class='text-center animate-box'>RSVPs</h2>
                    <div class="container animate-box">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Attended</th>
                                    <th>View Profile</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Isidro</td>
                                    <td>Perez</td>
                                    <td>Yes</td>
                                    <th><span ><a class="btn btn-primary" onclick="window.location.href='<?php echo Router::url(array('controller'=>'Events', 'action'=>'view'))?>'">View</a></span></th>
                                </tr>
                                <tr>
                                    <td>Scott</td>
                                    <td>Karl</td>
                                    <td style='color: red'>No</td>
                                    <th><span ><a class="btn btn-primary" onclick="window.location.href='<?php echo Router::url(array('controller'=>'Events', 'action'=>'view'))?>'">View</a></span></th>
                                </tr>
                                <tr>
                                    <td>Dennis</td>
                                    <td>Richards</td>
                                    <td>Event starts 5/2/2016</td>
                                    <th><span ><a class="btn btn-primary" onclick="window.location.href='<?php echo Router::url(array('controller'=>'Events', 'action'=>'view'))?>'">View</a></span></th>
                                </tr>
                            </tbody>
                        </table>
                    </div>   
                </div>
            </div>
        </div>
    </div>
</div>