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
define( 'DB_NAME', 'ExpBod' );

/** Tu nombre de usuario de MySQL */
define( 'DB_USER', 'root' );

/** Tu contraseña de MySQL */
define( 'DB_PASSWORD', 'Loyalfeel.2020' );

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
define( 'AUTH_KEY', 'Pp,?-%i]/zJmt9<hI.1W;nj<RR3NC|3rx(nbe,MqDt*#LRH&64For9n$,[kFRD$e' );
define( 'SECURE_AUTH_KEY', 'h9zI*|GTcruP4})0MgJj2kMChRKJd%q>y=v0,:8cbEME-JyKL[-CVR1*Osv.U=56' );
define( 'LOGGED_IN_KEY', '?dIZnx|MEf<lX1=-~&]b8 sN~HWGb~cOyj+R7*m~.2=Jb-%$Z2=uAAC=B^z(quYw' );
define( 'NONCE_KEY', '`/w;28e{y6v.W$e5gWOQA5J=q^0s=3c:=0{q+De7_f:|G|{YT{IouOKH;]aL~&7Q' );
define( 'AUTH_SALT', 'T:E5Dw-_(@8xTDfd>H22]DdE67Egj/{HNfk#(3RdF._zvoNt^GuF[9PCUpQH/2-_' );
define( 'SECURE_AUTH_SALT', 'We-$r>u8P-|Yx|H^=F;>/sd1vn}U>?.o=#%_MPjcn3T$}q5$8*V3?l0w}mn}UzP0' );
define( 'LOGGED_IN_SALT', 'Dn,F0d>=WLvmtr~M//J9M%^<TPdN hUAApY,;w;U:Nn-DZ`@s%R)3Zyf/QMNTj^7' );
define( 'NONCE_SALT', 'KL#G>%!(BH9z3ESywoI*U|+Um^b:iA!RfoE1:|=(t06creHD2kKwqUE11)4<uuyr' );

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

