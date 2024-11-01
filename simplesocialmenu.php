<?php

/*

Plugin Name:  Simple Social Menu

Plugin URI: https://surecode.me

Description: Social menu plugin for your WordPress site.

Version: 1.0.0

Author: Kirill Shur(SureCode Marketing)

License: GPLv2

*/


add_shortcode('ssm','simple_social_menu');

function simple_social_menu($atts){

  $default_links =  [
  'twitter' => null,
  'facebook' => null,
  'instagram' => null,
  'linkedin' => null,
  'youtube' => null
  ];
    $attrset = shortcode_atts($default_links,$atts);
    ob_start();
  ?>
  <style type="text/css" rel="stylesheet">
    .social_menu{
       display: flex;
       list-style:none;
       justify-content: center;
    }
    ul.social_menu li {
     margin: 0 5px;
    }

  </style>

  <ul class="social_menu">
    <?php
      if(isset($attrset['twitter'])){
     ?>
    <li class="social_menu_item">
      <a target="_blank" href="<?php echo esc_html($attrset['twitter']);?>"><img src="<?php echo esc_html(plugins_url('/images/twitter.png',__FILE__));?>" alt="menu-icon"></a>
    </li>
    <?php
     }
     ?>
     <?php
       if(isset($attrset['facebook'])){
      ?>
    <li class="social_menu_item">
      <a target="_blank" href="<?php echo esc_html($attrset['facebook']);?>"><img src="<?php echo esc_html(plugins_url('/images/facebook.png',__FILE__));?>" alt="menu-icon"></a>
    </li>
    <?php
     }
     ?>
     <?php
       if(isset($attrset['instagram'])){
      ?>
    <li class="social_menu_item">
     <a target="_blank" href="<?php echo esc_html($attrset['instagram']);?>"><img src="<?php echo esc_html(plugins_url('/images/instagram.png',__FILE__));?>" alt="menu-icon"></a>
    </li>
    <?php
     }
     ?>
     <?php
       if(isset($attrset['linkedin'])){
      ?>
    <li class="social_menu_item">
     <a target="_blank" href="<?php echo esc_html($attrset['linkedin']);?>"><img src="<?php echo esc_html(plugins_url('/images/linkedin.png',__FILE__));?>" alt="menu-icon"></a>
    </li>
    <?php
     }
     ?>
     <?php
       if(isset($attrset['youtube'])){
      ?>
    <li class="social_menu_item">
     <a target="_blank" href="<?php echo esc_html($attrset['youtube']);?>"><img src="<?php echo esc_html(plugins_url('/images/youtube.png',__FILE__));?>" alt="menu-icon"></a>
    </li>
    <?php
     }
     ?>
  </ul>

 <?php
  return ob_get_clean();
}
