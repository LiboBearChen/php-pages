<?php
/*
  Plugin Name: Our Test Plugin
 */

 add_filter('the-content','addToEndOfPost');
 
  function addToEndOfPost( $content ) {
      if(is_single()&&is_main_query()){
        return $content.'<p>efwefewfew</p>';
      }
    return $content;
}