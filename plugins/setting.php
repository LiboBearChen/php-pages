<?php
/*
  Plugin Name: Our Test Plugin
 */

 class WordCountAndTimePlugin{
   function __construct(){
    add_action('admin_menu',array($this,'adminPage'));
   }

   function adminPage() {
    add_options-page('Word Count Settings','Word Count','manage_options','word-count-settings-page','ourSettingsPageHTML');
}

function ourSettingsPageHTML(){?>
wdwqadwqdwqdwqadwq
<?php }
 }

 $wordCountAndTimePlugin=new WordCountAndTimePlugin();

 
 
  