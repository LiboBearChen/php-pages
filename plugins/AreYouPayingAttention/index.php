<?php
/*
    Plugin Name: Are You Paying Attention Quiz
*/

if (!defined('ABSPATH')) exit;

class AreYouPayingAttention
{
    function __construct()
    {
        add_action('enqueue_block_editor_assets', array($this, 'adminAssets'));
    }

    function adminAssets()
    {
        wp_enqueue_script('ournewBlocktype', plugin_dir_url(__FILE__) . 'test.js', array('wp-blocks','wp-element'));
    }
}

$areYouPayingAttention = new AreYouPayingAttention();
