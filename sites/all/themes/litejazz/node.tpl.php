<div  id="node-<?php print $node->nid; ?>"class="<?php print $classes; ?> node<?php if ($sticky) { print " sticky"; } ?><?php if (!$status) { print " node-unpublished"; } ?>"<?php print $attributes; ?>>
  <?php if ($picture) { print $user_picture; }?>
  <?php print render($title_prefix); ?>
  <?php if (!$page) { ?>
    <?php if ($title) { ?>
      <h2 class="title"><a href="<?php print $node_url?>"><?php print $title?></a></h2>
    <?php }; ?>
  <?php }; ?>
  <?php print render($title_suffix); ?>
  <?php if ($submitted) { ?>
    <span class="submitted"><?php print $submitted?></span> 
  <?php }; ?>
  <?php /*
  <?php if ($terms) { ?>
  <span class="taxonomy"><?php print $terms?></span>
  <?php }; ?>
  */ ?>
  <div class="content" id="<?php print $classes; ?>">
    <?php print $content_attributes?>
    <?php
    hide($content['comments']);
    hide($content['links']);
    print render($content);?>
  </div>
    <?php
      if ($teaser || !empty($content['comments']['comment_form'])) {
      unset($content['links']['comment']['#links']['comment-add']);
    }
    ?>
  <div class="clearfix clear"></div>
  <?php if ($content['links']): ?>
    <div class="links">&raquo; <?php print render($content['links']); ?></div>
  <?php endif; ?>
  <?php if ($content['comments'] && ($page)) { ?>
    <?php print render($content['comments']); ?>
  <?php }; ?>
</div>

