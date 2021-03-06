<?php
/* Sanitization Functions Common to Multiple Settings go Here, Specific Sanitization Functions are defined along with add_setting() */
function pandrah_sanitize_checkbox( $input ) {
    if ( $input == 1 ) {
        return 1;
    } else {
        return '';
    }
}

function pandrah_sanitize_category( $input ) {
    if ( term_exists(get_cat_name( $input ), 'category') )
        return $input;
    else
        return '';
}