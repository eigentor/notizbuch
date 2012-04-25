<div class="<?php print $classes; ?> customframeblock rollover-block rollover2-block block block-<?php print $block->module; ?>" id="block-<?php print $block->module; ?>-<?php print $block->delta; ?>">
    <div class="boxborder">
    <div class="bi">
    <div class="bt"><div></div></div>
  <?php print render($title_prefix); ?>
  <h2 <?php print $title_attributes; ?>><?php print $block->subject; ?></h2>
  <?php print render($title_suffix); ?>
<div class="content"<?php print $content_attributes; ?>><?php print $content; ?></div>
    <div class="bb"><div></div></div>
    </div>
  </div>
</div>




