<?php
/**
 *  Field formatter for the field_achievements field collection.
 */
?>
<dl>
  <?php foreach($rows as $row): ?>
  	<h1>Testing!!!</h1>
    <dt><?php print $row['field_card_header']; ?></dt>
    <dd><?php print $row['field_card_story']; ?></dd>
    <dd><?php print $row['field_card_image']; ?></dd>
  <?php endforeach; ?>
</dl>