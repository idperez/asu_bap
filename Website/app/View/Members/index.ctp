<?php foreach($members as $member):?>
<div><?php echo h($member['Member']['last_name']);?></div>
<td></td>
<?php endforeach; ?>
<?php unset($member); ?>