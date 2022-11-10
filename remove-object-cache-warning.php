<?php
/**
 * Plugin Name:     Remove Object Cache Warning
 * Plugin URI:      https://github.com/Lightweb-Media/exremove-object-cache-warning
 * Description:     Remove Object Cache Warning  
 * Author:          Sebastian Weiss
 * Author URI:      https://lightweb-media.de
 * Text Domain:     remove-object-cache-warning
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Remove_Object_Cache_Warning
 */

// Your code starts here.


add_filter('site_status_should_suggest_persistent_object_cache', '__return_false');
