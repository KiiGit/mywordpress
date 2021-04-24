<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'mywordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '1yT{UVw)r/A}fzmMwI$o tln]ovyM`4=W|dz-1HdJ~zGBrP;zX>Bq-t$<`n%$}Ep' );
define( 'SECURE_AUTH_KEY',  '>b)<0%HQRxU8:+M0Rw&wUjO!&?CXm`X;a*)}r|=OhjzB+&*HS~MF%#T;nw|-Z+XL' );
define( 'LOGGED_IN_KEY',    'BVu;yX&t<k[Qj7993;F#Jv;JVGL/JynR &-p$sMo]7=MT2}U074oXP5399TK*%V.' );
define( 'NONCE_KEY',        'HuRrUp=)DORgXJZkZ&ny.1!%C_K1T}`,;kx 0pMwGY0*%z)$,?A5H.rf(Y</d$wg' );
define( 'AUTH_SALT',        '<9A#|UMR~qsU1^!$v4lhJloA8HSi6H5n]*uv;TQ.R@BLv s1q/<F[CQJ<^s^[/;j' );
define( 'SECURE_AUTH_SALT', '7zg8:FfPlvp{] MI2uUTN-QJHME&):I01$^EahJHWu8Az?#`(xg_w^[0pP9<rprz' );
define( 'LOGGED_IN_SALT',   '.|_sNklFm1Zq^:+_K`PovZ,t+Ug3Eg&{<heW%GcmN-R{>_*^^%uQcww#nivP1]H~' );
define( 'NONCE_SALT',       'x?Ou>pG}L9U.YlwpWy0YO,-3 Xwx1G4,`aJrUp-6{!tnJ(k$8CP/PyYQSk+v)O@$' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
