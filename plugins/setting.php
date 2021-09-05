<?php
/*
  Plugin Name: Our Test Plugin
 */

 add_action('admin_menu','ourPluginSettingsLink');
 
  function ourPluginSettingsLink(  ) {
      add_options-page('Word Count Settings','Word Count','manage_options','word-count-settings-page','ourSettingsPageHTML');
}

function ourSettingsPageHTML(){?>
wdwqadwqdwqdwqadwq
<?php}