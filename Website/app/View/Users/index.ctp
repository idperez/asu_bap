<div class="fh5co-hero-ish">
    <div class="fh5co-overlay"></div>
       
    <div class="desc animate-box" style="position:relative; top:280px; "></div>
</div>
<div id="fh5co-work-section" >
    <div class="container" style="position:relative;">
        <div class="row" >
            <div class="col-md-12 col-sm-12" >
                <div class="animate-box text-center" style="position:relative;">  
                    <img src="/bap/assets/images/profile_logo.png"  alt="profile_logo" height="120" style="position:relative; top:-35px; ">
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
                        <?php foreach($users as $user):?> 
                            <?php if($user['User']['level'] == 'Officer'){ ?>
                                <figure class="effect-zoe">  
                                    <?php echo $this->Html->image($user['Photo']['url'], array(
                                        "alt" => "Profile image",
                                        'url' => array('controller' => 'Users', 'action' => 'view', $user['User']['id']),
                                        'class' => 'img-responsive',
                                        'style' => 'height: 190px; width: 165px;',
                                        'width' => '100%',
                                        'height' => '30%'
                                    ));?>
                                    <figcaption>
                                        <p><?php 
                                        $majorCount = count($user['Major']);
                                        if($majorCount > 0) // members have majors
                                        {
                                            echo $user['Major'][0]['name'];
                                        }  
                                        else 
                                        { // members have no majors
                                            echo 'Undecided';
                                        }?>
                                        </p>
                                        <h6 class="icon-links">
                                            <?php
                                                if(AuthComponent::user('level') == 'Officer')
                                                    echo $this->Html->link('Edit', array(
                                                        'controller' => 'Users', 'action' => 'edit', $user['User']['id'])
                                            );?>
                                            <?php if(!(empty($user['User']['linkedin']))){ ?>
                                            <span><a class="hvr-wobble-vertical fa fa-linkedin-square fa-2x" aria-hidden="true"  style="color: #bfbfbf;" target="_blank"  href="<?php $user['User']['linkedin'];?>"></a></span>
                                            <?php } ?>
                                            <span><a class="hvr-wobble-vertical fa fa-envelope-square fa-2x" aria-hidden="true" href='mailto:<?php echo $user['User']['username'];?>'></a></span>
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
                        <?php foreach($users as $user):?> 
                            <?php if($user['User']['level'] == 'Member'){ ?>
                                <figure class="effect-zoe">  
                                    <?php echo $this->Html->image($user['Photo']['url'], array(
                                        "alt" => "Profile image",
                                        'url' => array('controller' => 'Users', 'action' => 'view', $user['User']['id']),
                                        'class' => 'img-responsive',
                                        'style' => 'height: 190px; width: 165px;',
                                        'width' => '100%',
                                        'height' => '30%'
                                    ));?>
                                    <figcaption>
                                        <p><?php 
                                        $majorCount = count($user['Major']);
                                        if($majorCount > 0) // members have majors
                                        {
                                            echo $user['Major'][0]['name'];
                                        }  
                                        else 
                                        { // members have no majors
                                            echo 'Undecided';
                                        }?>
                                        </p>
                                        <h6 class="icon-links">
                                            <?php 
                                                if(AuthComponent::user('level') == 'Officer')
                                                    echo $this->Html->link('Edit', array(
                                                        'controller' => 'Users', 'action' => 'edit', $user['User']['id'])
                                            );?>
                                            <?php if(!(empty($user['User']['linkedin']))){ ?>
                                            <span><a class="hvr-wobble-vertical fa fa-linkedin-square fa-2x" aria-hidden="true"  style="color: #bfbfbf;"  target="_blank"  href='//<?php echo $user['User']['linkedin'];?>'></a></span>
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
                    </div>
                </div>
            </div>
        </div>
    </div>                      
</div>