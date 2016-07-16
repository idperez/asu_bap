<div class="fh5co-hero-ish">
    <div class="fh5co-overlay"></div>
       
    <div class="desc animate-box" style="position:relative; top:280px; "></div>
</div>
<div id="fh5co-work-section" >
    <div class="container" style="position:relative; top:-20">
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
            <div class="col-md-12 col-sm-12 col-lg-12" >
                <div class="animate-box text-center">  
                    <div class="grid"> 
                        <?php for($i = 0; $i < 6; $i++) { ?>
                            <figure class="effect-zoe">  
                                <img class="img-responsive" src="/bap/Website/app/webroot/img/profile_pics/Perez,Isidro.jpg" style="height: 190px; width: 165px;">
                                <figcaption>
                                    <p>Sofware Enigineer</p>
                                    <h6 class="icon-links">
                                        <span><a class="hvr-wobble-vertical fa fa-linkedin-square fa-2x" aria-hidden="true"  style="color: #bfbfbf;"  onclick="window.location.href='<?php echo Router::url(array('controller'=>'Info', 'action'=>'advisory_board'))?>'"></a></span>
                                        <span><a class="hvr-wobble-vertical fa fa-envelope-square fa-2x" aria-hidden="true"  style="color: #bfbfbf;"  onclick="window.location.href='<?php echo Router::url(array('controller'=>'Info', 'action'=>'advisory_board'))?>'"></a></span>
                                    </h6>     
                                </figcaption>
                                <h4>Isidro Perez</h4>
                            </figure>
                        <?php } ?>      
                    </div>
                </div>
            </div>
        </div>
    </div>
                   
                    
                      
                        </div>
                    </div>
                    </div>
                    <td></td>
                <div class="row">
                        <div class="col-md-12 col-lg-12">     
                    <br><br>
                    <div style="width: 100%; height: 20px; border-bottom: 1px solid black; text-align: center">
                        <span style="font-size: 30px; background-color: #F3F5F6; padding: 0 10px;">
                        Members
                        </span>
                    </div>
                    <!--Grabbing all members (non-officers)-->
                    <br><br>
                    <?php foreach($members as $member):?>
                    <!--todo - formatting adjustments -->
                        <?php if($member['Member']['level'] != 'Officer'){ ?>
                                <div><?php echo $this->Html->image($member['Photo']['url'], array(
                                    "alt" => "Profile image",
                                    'url' => array('controller' => 'Members', 'action' => 'view', $member['Member']['id'])
                                ));?>
                                </div>
                                <div><?php echo h($member['Member']['first_name']) . " " . h($member['Member']['last_name']);?></div>
                            <td></td>
                        <?php } ?>
                    <?php endforeach; ?>
                    <?php unset($member); ?>
                    </div>
                </div>
    </div>
</div>

              
 


<!--<div><?php echo h($member['Member']['first_name']) . " " . h($member['Member']['last_name']);?></div>
                                <div><?php echo $this->Html->link('Delete', array(
                                    'controller' => 'Members', 'action' => 'delete', $member['Member']['id'])
                           );?> 
<?php echo $this->Html->image($member['Photo']['url'], array(
                                                    "alt" => "Profile image",
                                                    'url' => array('controller' => 'Members', 'action' => 'view', $member['Member']['id'])
           
    ));?>

 <?php foreach($members as $member):?>
                    <!--todo - formatting adjustments -->
                        <?php if($member['Member']['level'] == 'Officer') { ?>  
                    
                             <?php } ?>
                    <?php endforeach; ?>
                    <?php unset($member); ?>
--!>