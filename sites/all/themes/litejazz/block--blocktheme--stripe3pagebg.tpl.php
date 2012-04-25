<div class="<?php print $classes; ?> customframeblock stripebox stripe3-box-page-bg block block-<?php print $block->module; ?>" id="block-<?php print $block->module; ?>-<?php print $block->delta; ?>">
    <div class="boxborder">
    <div class="bi">
    <div class="bt"><div></div></div>
<div class="custom-inbox">
  <?php print render($title_prefix); ?>
  <h2 <?php print $title_attributes; ?>><?php print $block->subject; ?></h2>
  <?php print render($title_suffix); ?>
  <div class="content"<?php print $content_attributes; ?>><?php print $content; ?></div>
</div>
    <div class="bb"><div></div></div>
    </div>
  </div>
</div>




