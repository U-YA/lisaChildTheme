<?php

add_action( 'after_setup_theme', 'remove_parent_wcconfig', 0 );

function remove_parent_wcconfig() {
remove_action( 'woss_after_main_content_preview_image', 'woss_woocommerce_preview_image', 5 );
}

