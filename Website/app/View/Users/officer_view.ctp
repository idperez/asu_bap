<div class="fh5co-hero-ish">
    <div class="fh5co-overlay"></div>
    <div class="desc animate-box" style="position:relative; top:280px; "></div>
</div>
<div id="fh5co-work-section" >
    <div class="container" style="position:relative; top:-40">
        <div class="row" >
            <div class="col-md-12 col-sm-12" >
                <div class="animate-box text-center">  
                    <img src="/bap/Website/app/webroot/img/profile_logo.png"  alt="profile_logo" height="120">
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
                <div class="fh5co-blog" style="background-image: url(/bap/Website/app/webroot/img/profile_pics/Perez,Isidro.jpg); height: 280px; width: 260px;"></div>
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
                <span ><a class="btn btn-primary" style="margin-bottom: 5px; width: 125px" onclick="window.location.href='<?php echo Router::url(array('controller'=>'Users', 'action'=>'edit/'.$user['User']['id']))?>'">Edit Info</a></span>
                <span ><a class="btn btn-primary" style="margin-bottom: 5px; width: 125px" onclick="window.location.href='<?php echo Router::url(array('controller'=>'Users', 'action'=>'logout'))?>'">Delete</a></span>             
            </div>
            <div class="col-sm-9 col-md-9 col-lg-9">
                <div class="container animate-box">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="col-lg-1">Event Name</th>
                                <th class="col-lg-1">Date</th>
                                <th class="col-lg-1">Hours</th>
                                <th class="col-lg-1">Attended</th>
                                <th class="col-lg-2">See Results</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Meet The Firms</td>
                                <td>5/23/16</td>
                                <td>2</td>
                                <td>Yes</td>
                                <td><span ><a class="btn btn-primary" onclick="window.location.href='<?php echo Router::url(array('controller'=>'Users', 'action'=>'logout'))?>'">View</a></span></td>
                            </tr>
                            <tr>
                                <td>Event Title</td>
                                <td>5/23/16</td>
                                <td>2</td>
                                <td>Yes</td>
                                <td><span ><a class="btn btn-primary" onclick="window.location.href='<?php echo Router::url(array('controller'=>'Users', 'action'=>'logout'))?>'">View</a></span></td>

                            </tr>
                            <tr>
                                <td>Event Title</td>
                                <td>5/23/16</td>
                                <td>4</td>
                                <td>Yes</td>
                                <td><span ><a class="btn btn-primary" onclick="window.location.href='<?php echo Router::url(array('controller'=>'Users', 'action'=>'logout'))?>'">View</a></span></td>

                            </tr>
                            <tr>
                                <td>Event Title</td>
                                <td>5/23/16</td>
                                <td>1</td>
                                <td style="color: red;">No</td>
                                <td><span ><a class="btn btn-primary" onclick="window.location.href='<?php echo Router::url(array('controller'=>'Users', 'action'=>'logout'))?>'">View</a></span></td>

                            </tr>              
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
