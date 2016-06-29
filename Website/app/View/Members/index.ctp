<div class="fh5co-hero-ish">
    <div class="fh5co-overlay"></div>
        <div class="fh5co-cover " style="background-image: url(/bap/assets/images/about-image.jpg); ">
            <div class="desc animate-box" style="position:relative; top:280px; ">          
            </div>
        </div>
    </div>
</div>
<div id="fh5co-work-section" >
    <div class="container" style="position:relative; top:-20">
        <div class="row" >
            <div class="col-md-12 col-sm-12" >
                <div class="animate-box text-center" style="position:relative; top:-22">  
                    <img src="/bap/assets/images/profile_logo.png"  alt="profile_logo" height="120" style="position:relative; top:-35px; ">
                </div>
            </div>    
        </div>
        <div class="row" >
            <div class="col-md-12 col-sm-12" >
                <div class="animate-box text-center" style="position:relative; top:-22">  
                    <div style="width: 100%; height: 20px; border-bottom: 1px solid black; text-align: center">
                        <span style="font-size: 30px; background-color: #F3F5F6; padding: 0 10px;">
                        Officers
                        </span>
                    </div>
                    <!--Grabbing all officers-->
                    <br><br>
                    <?php foreach($members as $member):?>
                    <!--todo - formatting adjustments -->
                        <?php if($member['Member']['level'] == 'Officer'){ ?>
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
    </div>
</div>