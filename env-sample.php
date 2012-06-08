<?php
/**
 * INSTRUCTIONS:
 *
 * Copy me to env.php
 * Then modify your wp-config.php file so that the following constants aren't defined, and add
 *   require( dirname(__FILE__) . '/env.php' );
 */

/**
 * WordPress DB constants
 */
define( 'DB_NAME', 'name' );
define( 'DB_USER', 'user' );
define( 'DB_PASSWORD', 'pw' );
define( 'DB_HOST', 'localhost' );

/**
 * Other environment specific constants
 */
define( 'ENV_TYPE', 'local' );

define( 'SCRIPT_DEBUG', true );
define( 'SAVEQUERIES', false );

define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', false );


?>