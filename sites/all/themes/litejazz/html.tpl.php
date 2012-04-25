<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN" "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" version="XHTML+RDFa 1.0" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>>
<head profile="<?php print $grddl_profile; ?>">
  
  <?php print $head; ?>
  
  <title>
    <?php print $head_title; ?>
  </title>
  
  <?php print $styles; ?>
  <!-- LiteJazz theme styles -->
<?php if (theme_get_setting('litejazz_width')) { ?>
<style type="text/css">
    #page {
      width : <?php print theme_get_setting('litejazz_fixedwidth') ?>px;
    }
      </style>
<?php } else { ?>
<style type="text/css">
    #page {
      width: 95%;
    }
      </style>
<?php }  ?>
 
<?php if ($left_sidebar_width = theme_get_setting('litejazz_leftsidebarwidth')) { ?>
    <style type="text/css">
      body.sidebar-first #main 
      {
        margin-left: -<?php print $left_sidebar_width ?>px;
      }
      body.two-sidebars #main 
      {
        margin-left: -<?php print $left_sidebar_width ?>px;
      }
      body.sidebar-first #squeeze 
      {
        margin-left: <?php print $left_sidebar_width ?>px;
      }
      body.two-sidebars #squeeze 
      {
        margin-left: <?php print $left_sidebar_width ?>px;
      }
      #sidebar-left 
      {
        width: <?php print $left_sidebar_width ?>px;
      }
    </style>
<?php }  ?>
<?php if ($right_sidebar_width = theme_get_setting('litejazz_rightsidebarwidth')) { ?>
    <style type="text/css">
      body.sidebar-second #main 
      {
        margin-right: -<?php print $right_sidebar_width ?>px;
      }
      body.two-sidebars #main 
      {
        margin-right: -<?php print $right_sidebar_width ?>px;
      }
      body.sidebar-second #squeeze 
      {
        margin-right: <?php print $right_sidebar_width ?>px;
      }
      body.two-sidebars #squeeze 
      {
        margin-right: <?php print $right_sidebar_width ?>px;
      }
      #sidebar-right 
      {
        width: <?php print $right_sidebar_width ?>px;
      }
    </style>
<?php }  ?>

   <?php if (theme_get_setting('litejazz_fontfamily')) { ?>
     <style type="text/css">
         body {
           font-family : <?php print theme_get_setting('litejazz_fontfamily') ?>;
         }
       </style>
     <?php }  ?>

     <?php if (theme_get_setting('litejazz_fontfamily') == 'Custom') { ?>

       <?php if (theme_get_setting('litejazz_customfont')) { ?>
         <style type="text/css">
            body {
              font-family : <?php print theme_get_setting('litejazz_customfont') ?>;
            }
         </style>
       <?php }  ?>
   <?php }  ?>

<?php if (theme_get_setting('litejazz_iepngfix')) { ?>
<!--[if lte IE 6]>
<script type="text/javascript"> 
    $(document).ready(function(){ 
        $(document).pngFix(); 
    }); 
</script> 
<![endif]-->
<?php } ?>

   <?php if (theme_get_setting('litejazz_usecustomlogosize')) { ?>
  <style type="text/css">
        img#logo {
          width : <?php print theme_get_setting('litejazz_logowidth') ?>px;
          height: <?php print theme_get_setting('litejazz_logoheight') ?>px;
        }
      </style>
<?php }  ?>


<!--[if IE]>
<style type="text/css" media="all">@import "<?php print base_path() . path_to_theme() ?>/css/ie.css";</style>
<![endif]-->

<?php if ($page['suckerfish']) { ?>
  <?php if (theme_get_setting('litejazz_suckerfish')) { ?>
  <style type="text/css">
      #suckerfishmenu div .contextual-links-wrapper {
         display:none;
      }
  </style>
  <!--[if lte IE 6]>
    <script type="text/javascript" src="<?php print $GLOBALS['base_url']."/"; print $directory; ?>/js/suckerfish.js"></script>
  <![endif]-->
  <?php }  ?>
<?php } ?>

<script type="text/javascript" src="<?php print $GLOBALS['base_url']."/"; print $directory; ?>/js/pickstyle.js"></script>

<!-- /theme styles -->
  <?php print $scripts; ?>
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>">
<div id="skip-link">
  <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
</div>
<?php print $page_top; ?>
<?php print $page; ?>
<?php print $page_bottom; ?>
</body>
</html>
