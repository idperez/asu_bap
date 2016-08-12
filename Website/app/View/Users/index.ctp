<div class="fh5co-hero-ish">
    <div class="fh5co-overlay"></div>
       
    <div class="desc animate-box" style="position:relative; top:280px; "></div>
</div>
<div id="fh5co-work-section" >
    <div class="container" style="position:relative;">
        <div class="row" >
            <div class="col-md-12 col-sm-12" >
                <div class="animate-box text-center" style="position:relative; top: -35px;">  
                    <?php echo $this->Html->image('profile_logo.png', array('alt' => 'mission', 'height' => '120')) ?>
                </div>
                <div class="animate-box" style="width: 100%; height: 20px; border-bottom: 1px solid black; text-align: center">
                    <span style="font-size: 30px; background-color: #F3F5F6; padding: 0 10px;">
                        Officers
                    </span>
                </div>
            </div>    
        </div>
    </div> 
    <br>
    <div class="container">
        <div class="row" >
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="animate-box text-center">  
                    <div class="grid">
                        <br>
                        <?php foreach($users as $user):?> 
                            <?php if($user['User']['level'] == 'Officer'){ ?>
                                <figure class="effect-zoe">  
                                    <!--Get user profile image-->
                                    <?php 
                                    $dir = $_SERVER['DOCUMENT_ROOT'].'/bap/Website/app/webroot/img/profile_pics/';
                                    $profileImage = "0.png";
                           
                                    if(file_exists($dir.$user['User']['id'].'.png')) {
                                        $profileImage = $user['User']['id'].'.png';   
                                    }
                                    $profileImagePath = '/bap/Website/app/webroot/img/profile_pics/'.$profileImage;
                                    ?>
                                    <a onclick="window.location.href='<?php echo Router::url(array('controller'=>'Users', 'action'=>'view', $user['User']['id']))?>'">
                                        <img src="<?php echo $profileImagePath; ?>" alt="Profile image" class="img-responsive" style="height: 190px; width: 165px;" width="100%" height="30%">
                                    </a>
                                    <figcaption>
                                        <p><?php 
                                        if($user['User']['major'] != "" && $user['User']['major'] != null) // members has major(s)
                                        {
                                            $topMajor = explode(",", $user['User']['major']);
                                            echo $topMajor[0]; //list first major
                                        }
                                        else 
                                        {
                                            echo '<br>';
                                        }?>
                                        </p>
                                        <h6 class="icon-links">
                                            <?php
                                                if(AuthComponent::user('level') == 'Officer')
                                                    echo $this->Html->link('Edit', array(
                                                        'controller' => 'Users', 'action' => 'edit', $user['User']['id'])
                                            );?>
                                            <?php if(!(empty($user['User']['linkedin']))){ ?>
                                            <span><a class="hvr-wobble-vertical fa fa-linkedin-square fa-2x" aria-hidden="true"  style="color: #bfbfbf;" target="_blank"  href='<?php echo $user['User']['linkedin'];?>'></a></span>
                                            <?php } ?>
                                            <span><a class="hvr-wobble-vertical fa fa-envelope-square fa-2x" aria-hidden="true" style="color: #bfbfbf;" href='mailto:<?php echo $user['User']['username'];?>'></a></span>
                                            <?php
                                                if(AuthComponent::user('level') == 'Officer') 
                                                    echo $this->Html->link('Delete', array(
                                                        'controller' => 'Users', 'action' => 'delete', $user['User']['id'])
                                            );?>
                                        </h6>     
                                    </figcaption>
                                    <h4><?php echo h($user['User']['first_name']) . " " . h($user['User']['last_name']);?></h4>
                                </figure>
                            <?php } ?>
                        <?php endforeach; ?>
                        <?php unset($user); ?>   
                    </div>
                </div>
            </div>
        </div>
    </div>      
    <br>
    <div class="container" style="position:relative;">
        <div class="row" >
            <div class="col-md-12 col-sm-12" >
                <div class="animate-box" style="width: 100%; height: 20px; border-bottom: 1px solid black; text-align: center">
                    <span style="font-size: 30px; background-color: #F3F5F6; padding: 0 10px;">
                        Members
                    </span>
                </div>
            </div>    
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row" >
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="animate-box text-center">  
                    <div class="grid">
                        <?php $count = 0; ?>
                        <?php foreach($users as $user):?> 
                            <?php if($user['User']['level'] == 'Member'){ ?>
                                <figure class="effect-zoe">  
                                    <!--Get user profile image-->
                                    <?php 
                                    $count++;
                                    $dir = '/bap/Webiste/app/webroot/img/profile_pics/';
                                    $profileImage = "0.png";
                                    if(file_exists($dir.$user['User']['id'].'.png')) 
                                        $profileImage = $user['User']['id'].'.png'; 
                                    $profileImagePath = '/bap/Website/app/webroot/img/profile_pics/'.$profileImage;
                                    ?>
                                    <a onclick="window.location.href='<?php echo Router::url(array('controller'=>'Users', 'action'=>'view', $user['User']['id']))?>'">
                                        <img src="<?php echo $profileImagePath; ?>" alt="Profile image" class="img-responsive" style="height: 190px; width: 165px;" width="100%" height="30%">
                                    </a>
                                    <figcaption>
                                        <p><?php 
                                        if($user['User']['major'] != "" && $user['User']['major'] != null) // members has major(s)
                                        {
                                            $topMajor = explode(",", $user['User']['major']);
                                            echo $topMajor[0]; //list first major
                                        }
                                        else 
                                        {
                                            echo '<br>';
                                        }?>
                                        </p>
                                        <h6 class="icon-links">
                                            <?php 
                                                if(AuthComponent::user('level') == 'Officer')
                                                    echo $this->Html->link('Edit', array(
                                                        'controller' => 'Users', 'action' => 'edit', $user['User']['id'])
                                            );?>
                                            <?php if(!(empty($user['User']['linkedin']))){ ?>
                                            <span><a class="hvr-wobble-vertical fa fa-linkedin-square fa-2x" aria-hidden="true"  style="color: #bfbfbf;"  target="_blank"  href='<?php echo $user['User']['linkedin'];?>'></a></span>
                                            <?php } ?>
                                            <span><a class="hvr-wobble-vertical fa fa-envelope-square fa-2x" aria-hidden="true"  style="color: #bfbfbf;"  href='mailto:<?php echo $user['User']['username'];?>'></a></span>
                                            <?php
                                                if(AuthComponent::user('level') == 'Officer') 
                                                    echo $this->Html->link('Delete', array(
                                                        'controller' => 'Users', 'action' => 'delete', $user['User']['id'])
                                            );?>
                                        </h6>     
                                    </figcaption>
                                    <h4><?php echo h($user['User']['first_name']) . " " . h($user['User']['last_name']);?></h4>
                                </figure>
                            <?php } ?>
                        <?php endforeach; ?>
                        <?php unset($user); ?>
                        <?php if($count == 0) {
                            echo '<br><br>';
                            echo '<h2>Our Members Will Be Announced Soon. Stay Tuned!</h2>';
                        } ?>  
                    </div>
                </div>
            </div>
        </div>
    </div>                      
</div>