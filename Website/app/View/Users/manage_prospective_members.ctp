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
                    Prospective Members
                    </span>
                </div>
                <br><br>                
                <div class="container animate-box">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                <th>Email</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($prospective_members as $prospective_member):?>
                                <td><?php echo $prospective_member['Prospective']['first_name']; ?></td>
                                <td><?php echo $prospective_member['Prospective']['last_name']; ?></td>
                                <td><?php echo $prospective_member['Prospective']['email']; ?></td>
                                <td><?php echo date('m/d', strtotime($prospective_member['Prospective']['time'])); ?></td>
                            <?php endforeach; ?> 
                            <?php unset($prospective_member); ?>   
                        </tbody>
                    </table>
                </div>
                <span class="animate-box" style="float: right; margin-left: 5px"><a class="btn btn-primary" onclick="window.location.href='<?php echo Router::url(array('controller'=>'Users', 'action'=>'add'))?>'">New Member</a></span> 
                <span class="animate-box" style="float: right; margin-left: 5px"><a class="btn btn-primary" onclick="window.location.href='<?php echo Router::url(array('controller'=>'Users', 'action'=>'add'))?>'">Export</a></span> 
            </div>    
        </div>
    </div>
</div>

