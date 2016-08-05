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
                                <th>Edit</th>
                                <th>Profile</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $go = 96; ?>
                            <tr>
                                <td>Isidro</td>
                                <td>Perez</td>
                                <td>Officer</td>
                                <td>3</td>
                                <td>0</td>
                                <th><span ><a class="btn btn-primary" onclick="window.location.href='<?php echo Router::url(array('controller'=>'Info', 'action'=>'edit'))?>'">Edit</a></span></th>
                                <th><span ><a class="btn btn-primary" onclick="window.location.href='<?php echo Router::url(array('controller'=>'Users', 'action'=>'officer_view/'.$go))?>'">View</a></span></th>
                            </tr>
                            <tr>
                                <td>Drew</td>
                                <td>Monachy</td>
                                <td>Member</td>
                                <td>3</td>
                                <td>3</td>
                                <th><span ><a class="btn btn-primary" onclick="window.location.href='<?php echo Router::url(array('controller'=>'Info', 'action'=>'edit'))?>'">Edit</a></span></th>
                                <th><span ><a class="btn btn-primary" onclick="window.location.href='<?php echo Router::url(array('controller'=>'Users', 'action'=>'officer_view'))?>'">View</a></span></th>
                            </tr>
                            <tr>
                                <td>Lory</td>
                                <td>Slorun</td>
                                <td>Candidate</td>
                                <td>3</td>
                                <td>3</td>
                                <th><span ><a class="btn btn-primary" onclick="window.location.href='<?php echo Router::url(array('controller'=>'Info', 'action'=>'edit'))?>'">Edit</a></span></th>
                                <th><span ><a class="btn btn-primary" onclick="window.location.href='<?php echo Router::url(array('controller'=>'Users', 'action'=>'officer_view'))?>'">View</a></span></th>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <span class="animate-box" style="float: right;"><a class="btn btn-primary" onclick="window.location.href='<?php echo Router::url(array('controller'=>'Users', 'action'=>'add'))?>'">New Member</a></span>  
            </div>    
        </div>
    </div>
</div>