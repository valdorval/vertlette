<?php

/**
 * Template Name: Boutique corporative
 *
 */
get_header();


$user = wp_get_current_user();
if (in_array('administrator', (array) $user->roles)) {
    //The user has the "author" role
    echo 'show page';
} else {
    echo 'you dont have access';
}
?>


<?php
get_footer();
