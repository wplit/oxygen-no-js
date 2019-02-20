<?php
/*
Plugin Name:	Oxygen No-JS
Plugin URI:		https://wplit.com/
Description:	Add support to Oxygen for non-JS users.
Version:		1.0.0
Author:			David Browne
Author URI:		https://wplit.com/
License:		GPL-2.0+
License URI:	http://www.gnu.org/licenses/gpl-2.0.txt

This plugin is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

This plugin is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with This plugin. If not, see {URI to Plugin License}.
*/

if ( ! defined( 'WPINC' ) ) {
	die;
}

add_filter( 'body_class', 'lit_oxy_no_js_body_class' );
/**
 * Add 'no-js' class to the body class.
 *
 * @since 1.0.0
 *
 * @param array $classes Existing classes.
 * @return array
 */
function lit_oxy_no_js_body_class($classes) {
    
    $classes[] = 'no-js';
    
    return $classes;
}

//* Hook on front end only, nothing changes in builder
add_action( 'oxygen_enqueue_frontend_scripts', 'lit_oxy_load_front_end', 1 );
function lit_oxy_load_front_end() {
    
    wp_enqueue_style( 'oxygen-non-js', plugin_dir_url( __FILE__ ) . 'css/style.css' );
    
    add_action( 'ct_before_builder', 'lit_oxy_js_script' );
    
}
   
/**
 * Change no-js to js if JS is enabled in browser.
 */
function lit_oxy_js_script() {   ?>
    <script>
        (function(){
            document.body.classList.remove('no-js');
            document.body.classList.add('js');
        })();
    </script>
    
<?php }