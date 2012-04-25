<?php

function get_litejazz_style() {
  $style = theme_get_setting('litejazz_style');
  if (!$style) {
    $style = 'blue';
  }
  
  if (isset($_COOKIE["litejazzstyle"])) {
    $style = $_COOKIE["litejazzstyle"];
  }
  return $style;
}

$style = get_litejazz_style();
drupal_add_css(path_to_theme() . '/style.css'); //is not settet in info file because it's loades to late
drupal_add_css(drupal_get_path('theme', 'litejazz') . '/css/' . $style . '.css');

if (theme_get_setting('litejazz_iepngfix')) {
   drupal_add_js(drupal_get_path('theme', 'litejazz') . '/js/jquery.pngFix.js');
}

if (theme_get_setting('litejazz_suckerfish')) {
   drupal_add_css(drupal_get_path('theme', 'litejazz') . '/css/suckerfish_'  . $style . '.css');
}

if (theme_get_setting('litejazz_uselocalcontent'))
{
//   $local_content = drupal_get_path('theme', 'litejazz') . '/' . theme_get_setting('litejazz_localcontentfile');
   $local_content =  theme_get_setting('litejazz_localcontentfile');
   if (file_exists($local_content)) {
      drupal_add_css($local_content);
   }
}

function litejazz_preprocess_block(&$variables) {
  // In the header region visually hide block titles.
  if (theme_get_setting('litejazz_suckerfish') && ($variables['block']->region == 'suckerfish')) {
    $variables['title_attributes_array']['class'][] = 'element-invisible';
  }
  if ($variables['block']->region == 'header') {
    $variables['title_attributes_array']['class'][] = 'element-invisible';
  }
  $variables['title_attributes_array']['class'][] = 'title';
}
