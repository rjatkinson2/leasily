<div class="row card">
    <div class="large-12" style="padding-top:25px">
        <?php echo drupal_render_children($form)?>
        
            <?php if($sidebar): ?>
              <?php print render($sidebar); ?>
            <?php endif; ?>
            <?php if($form): ?>
              <?php print drupal_render_children($form); ?>
            <?php endif; ?>
            <?php if($buttons): ?>
            <?php print render($buttons); ?>
            <?php endif; ?>
          <div class="clear"></div>
    </div>
</div>
