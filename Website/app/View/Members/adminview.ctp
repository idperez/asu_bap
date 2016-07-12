<div class="fh5co-hero-ish">
    <div class="fh5co-overlay"></div>
       
    <div class="desc animate-box" style="position:relative; top:280px; "></div>
</div>
<div id="fh5co-work-section" >
    <div class="container" style="position:relative; top:-20">
        <div class="row" >
            <div class="col-md-12 col-sm-12" >
                <div class="animate-box text-center" style="position:relative;">  
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
                                <div class="card col-md-2 col-sm-4 col-xs-4">
                                    <?php echo $this->Html->image($member['Photo']['url'], array(
                                        "alt" => "Profile image",
                                        'url' => array('controller' => 'Members', 'action' => 'view', $member['Member']['id']),
                                        'class' => 'card-img-top',
                                        'width' => '100%',
                                        'height' => '30%'
                                    ));?>
                                    <div class="card-block">
                                        <p class="card-text">
                                            <?php echo h($member['Member']['first_name']) . " " . h($member['Member']['last_name']) . "<br>";?>
                                            <?php echo $this->Html->link('Delete', array(
                                                'controller' => 'Members', 'action' => 'delete', $member['Member']['id'])
                                            ). "<br>";?>
                                            <?php echo $this->Html->link('Edit', array(
                                                'controller' => 'Members', 'action' => 'edit', $member['Member']['id'])
                                            );?>
                                        <p>
                                    </div>
                                </div>
                            <td></td>
                        <?php } ?>
                    <?php endforeach; ?>
                    <?php unset($member); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="container" style="position:relative; top:-20">
        <div class="row" >
            <div class="col-md-12 col-sm-12" >
                <br><br>
                <div style="width: 100%; height: 20px; border-bottom: 1px solid black; text-align: center">
                    <span style="font-size: 30px; background-color: #F3F5F6; padding: 0 10px;">
                        Members
                    </span>
                </div>
                <br><br>
                <!--Grabbing all members (non-officers)-->
                <?php foreach($members as $member):?>
                <!--todo - formatting adjustments -->
                    <?php if($member['Member']['level'] != 'Officer'){ ?>
                        <div class="card col-md-2 col-sm-4 col-xs-4">
                            <?php echo $this->Html->image($member['Photo']['url'], array(
                                "alt" => "Profile image",
                                'url' => array('controller' => 'Members', 'action' => 'view', $member['Member']['id']),
                                'class' => 'card-img-top',
                                'width' => '100%',
                                'height' => '30%'
                            ));?>
                            <div class="card-block">
                                <p class="card-text">
                                    <?php echo h($member['Member']['first_name']) . " " . h($member['Member']['last_name']) . "<br>";?>
                                    <?php echo $this->Html->link('Delete', array(
                                        'controller' => 'Members', 'action' => 'delete', $member['Member']['id'])
                                    ) . "<br>";?>
                                    <?php echo $this->Html->link('Edit', array(
                                        'controller' => 'Members', 'action' => 'edit', $member['Member']['id'])
                                    );?>
                                <p>
                            </div>
                        </div>
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
