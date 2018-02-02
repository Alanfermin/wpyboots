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
define('DB_NAME', 'wordpress');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY', 'YLTNaW_@`iB!|=+8PX:2n>,%ln^Ghu~MfG92g241=_H_R*D2,OGz}*[NI@zCT*(u');
define('SECURE_AUTH_KEY', 'cl_eTu]0Qxh:vn1$3n*1%Sv;DC8C3$|Hvi@>q,p H5|q&y(I04:+|!QdXK{)!Nso');
define('LOGGED_IN_KEY', '*5m8`L/)J%sHoX>-3A(^J{N*g<l:vK_(ylAb*c{Ij6wS;X,5id9;Gpf00ximY9hC');
define('NONCE_KEY', '8;AzR]8fg0%VmgJ)i;L5o8+)5eitmot(=(=4vit/6.A~w/q}BdquW5w-tP[:?<$O');
define('AUTH_SALT', 'Sh:U0Z!_p;_p;:?,q=$LJp2G/&hW%3{DY3{&TG5Cf;JLTqg)&jb9y-SBUnl?vDX(');
define('SECURE_AUTH_SALT', '}mD[L;+wC*A<*Opf]*Ls[sMG@1wI?5)EtHuMRDykch8ckdvHG{x?7wlYHZ*vw,B^');
define('LOGGED_IN_SALT', 'd*@2aAe62Q$dNL;E[fTpS seEx>MBe!iCIJqQz$jK/PPq-W{bnIbg|5fS2yG[jqP');
define('NONCE_SALT', 'j7m6X8_f9AppGg@6c@{  pv7<L<1^>Em9g@i6?OM$%f2vM/[vHeMq)`#8VYU~FG:');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', true);
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', false );

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

