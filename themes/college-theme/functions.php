<?php

function college_filles(){
    wp_enqueue_style('college_main_styles',get_stylesheet_url());
}

add_action('wp_enqueue_scripts','college_files');