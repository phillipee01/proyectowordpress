<?php
/**
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define( 'DB_NAME', 'pruebawordpress' );

/** Tu nombre de usuario de MySQL */
define( 'DB_USER', 'root' );

/** Tu contraseña de MySQL */
define( 'DB_PASSWORD', '1015442969phi' );

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define( 'DB_HOST', 'localhost' );

/** Codificación de caracteres para la base de datos. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY', '5MBno;.6qi*dmXJ2pmq6:_,wao|6GZJbd)p~Qhfr=lkbf25@)Ks!Ee)`KcJ2eTl8' );
define( 'SECURE_AUTH_KEY', '~;Td5VOP+T6a6rJ2QaqXHk[dFd>4wIpJ-up]6bA81MBkx#]L;^F@cM!)}wqc{I0+' );
define( 'LOGGED_IN_KEY', 'B#_Y3&{?Dk6EU4]eN8hmcH2ki^W!4hM#x^xZ0DN3*E0.~]c.BITFT)]UI(=<3u+!' );
define( 'NONCE_KEY', 'jj3(gP^~wZo4dcx,U[Q1DJ)f5l&xkZfNR3mV=joG;Y?fOBZ`*,N$IsH 0aU@o#j^' );
define( 'AUTH_SALT', 'heaZatfMEu9DIZW 4I-JHXPSv2GKb8Z)/Ep3LquU<ho*-w6m* djt([&+#GjcF}~' );
define( 'SECURE_AUTH_SALT', 'QZLxs}uoaY|*[N|}Zv$#bd4dQ0@&fE:sHRO]2gHAN80kzp|vm+/Y#}C@ApmO|%31' );
define( 'LOGGED_IN_SALT', '.)rYRWZpEhJL.07J>/Lf@c`3x,sZzjzhu3a=r%tz(_)F>J6*WP]sJ[$h_-hrJ=pI' );
define( 'NONCE_SALT', 'La=TnkDS*(ZV~h:}Ud7D<IX4+&}5Ha;fN%LhXS#B|s*;!!;zm*tf{=zvu{=oC`wV' );

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');


