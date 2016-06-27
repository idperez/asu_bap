<br>
<?php foreach($members as $member):?>
<!--This is how you get each members info, just place the html accordingly-->
    <div><?php echo h($member['Member']['last_name']);?></div>
    <div><?php echo $this->Html->image($member['Photo']['url'], array(
        "alt" => "Profile image",
        'url' => array('controller' => 'Members', 'action' => 'view', $member['Member']['id'])
    ));?></div>
<td></td>
<?php endforeach; ?>
<?php unset($member); ?>