<?php
// Function to get the image URL in the assets directory
function get_theme_image_url($image_name) {
    return get_template_directory_uri() . '/assets/images/' . $image_name;
}