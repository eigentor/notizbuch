<?php

function litejazz_form_system_theme_settings_alter(&$form, $form_state){

 $form['litejazz_style'] = array(
    '#type' => 'select',
    '#title' => t('Style'),
    '#default_value' => theme_get_setting('litejazz_style'),
    '#options' => array(
    'red' => t('Red'),
    'green' => t('Green'),
      'blue' => t('Blue'),
    ),
  );

  $form['litejazz_themelogo'] = array(
    '#type' => 'checkbox',
    '#title' => t('Use Themed Logo'),
    '#default_value' => theme_get_setting('litejazz_themelogo'),
  );

  $form['litejazz_width'] = array(
    '#type' => 'checkbox',
    '#title' => t('Use Fixed Width'),
    '#default_value' => theme_get_setting('litejazz_width'),
  );

  $form['litejazz_fixedwidth'] = array(
    '#type' => 'textfield',
    '#title' => t('Fixed Width Size'),
    '#default_value' => theme_get_setting('litejazz_fixedwidth'),
    '#size' => 5,
    '#maxlength' => 5,
  );

  $form['litejazz_breadcrumb'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show Breadcrumbs'),
    '#default_value' => theme_get_setting('litejazz_breadcrumb'),
  );

  $form['litejazz_iepngfix'] = array(
    '#type' => 'checkbox',
    '#title' => t('Use IE PNG Fix'),
    '#default_value' => theme_get_setting('litejazz_iepngfix'),
  );
  
  $form['litejazz_fontfamily'] = array(
    '#type' => 'select',
    '#title' => t('Font Family'),
    '#default_value' => theme_get_setting('litejazz_fontfamily'),
    '#options' => array(
     'Arial, Verdana, sans-serif' => t('Arial, Verdana, sans-serif'),
     '"Arial Narrow", Arial, Helvetica, sans-serif' => t('"Arial Narrow", Arial, Helvetica, sans-serif'),
     '"Times New Roman", Times, serif' => t('"Times New Roman", Times, serif'),
     '"Lucida Sans", Verdana, Arial, sans-serif' => t('"Lucida Sans", Verdana, Arial, sans-serif'),
     '"Lucida Grande", Verdana, sans-serif' => t('"Lucida Grande", Verdana, sans-serif'),
     'Tahoma, Verdana, Arial, Helvetica, sans-serif' => t('Tahoma, Verdana, Arial, Helvetica, sans-serif'),
     'Georgia, "Times New Roman", Times, serif' => t('Georgia, "Times New Roman", Times, serif'),
     'Custom' => t('Custom (specify below)'),
    ),
  );

  $form['litejazz_customfont'] = array(
    '#type' => 'textfield',
    '#title' => t('Custom Font-Family Setting'),
    '#default_value' => theme_get_setting('litejazz_customfont'),
    '#size' => 40,
    '#maxlength' => 75,
  );

  $form['litejazz_uselocalcontent'] = array(
    '#type' => 'checkbox',
    '#title' => t('Include Local Content File'),
    '#default_value' => theme_get_setting('litejazz_uselocalcontent'),
  );

  $form['litejazz_localcontentfile'] = array(
    '#type' => 'textfield',
    '#title' => t('Local Content File Name'),
    '#default_value' => theme_get_setting('litejazz_localcontentfile'),
    '#size' => 40,
    '#maxlength' => 75,
  );

  $form['litejazz_leftsidebarwidth'] = array(
    '#type' => 'textfield',
    '#title' => t('Left Sidebar Width'),
    '#default_value' => theme_get_setting('litejazz_leftsidebarwidth'),
    '#size' => 5,
    '#maxlength' => 5,
  );

  $form['litejazz_rightsidebarwidth'] = array(
    '#type' => 'textfield',
    '#title' => t('Right Sidebar Width'),
    '#default_value' => theme_get_setting('litejazz_rightsidebarwidth'),
    '#size' => 5,
    '#maxlength' => 5,
  );

  $form['litejazz_suckerfish'] = array(
    '#type' => 'checkbox',
    '#title' => t('Use Suckerfish Menus'),
    '#default_value' => theme_get_setting('litejazz_suckerfish'),
  );

  $form['litejazz_usecustomlogosize'] = array(
    '#type' => 'checkbox',
    '#title' => t('Specify Custom Logo Size'),
    '#default_value' => theme_get_setting('litejazz_usecustomlogosize'),
  );

  $form['litejazz_logowidth'] = array(
    '#type' => 'textfield',
    '#title' => t('Logo Width'),
    '#default_value' => theme_get_setting('litejazz_logowidth'),
    '#size' => 5,
    '#maxlength' => 5,
  );

  $form['litejazz_logoheight'] = array(
    '#type' => 'textfield',
    '#title' => t('Logo Height'),
    '#default_value' => theme_get_setting('litejazz_logoheight'),
    '#size' => 5,
    '#maxlength' => 5,
  );

  $form['litejazz_banner'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show RoopleTheme footer Logo'),
    '#description' => t('if unchecked then roople logo in the footer will disapear<br>so you don\'t need touch the code'),
    '#default_value' => theme_get_setting('litejazz_banner'),
  );
  return $form;
}
