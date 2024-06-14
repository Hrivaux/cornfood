<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wp_cornfood' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         '4i)fIBXZIwpd{C/]]r?D3`VelPBBIW>:D.^D(B.r#Jb 7ty.&jyFc&<~FJY}z>K,' );
define( 'SECURE_AUTH_KEY',  'n7I=A{![G_j#4?s}yAr5X]d{39k8e-5+cb()tlBPcc!nb9fz;gyNEi67Y}%wa*gp' );
define( 'LOGGED_IN_KEY',    'n4xs7s~sjOMc4rM5lg$[-]Bd6Qq _AIsHPOJ]i8|8ISba>A|A:H:DyoVc5i9VPSA' );
define( 'NONCE_KEY',        'JUZ4p2l|@?VjT)V;TzY*?]?n&(W>~?dTj0k?J[bF8I]!OZHG%E3!W<dqUa=iYl}H' );
define( 'AUTH_SALT',        'z-{xp ~Iy*aRnBYqt&VHK.%^pQep&W9A}8UW4P+f;r~dZp|_MN(N3,%o^#!A4eW1' );
define( 'SECURE_AUTH_SALT', '`u#/=yV/aZR=*}eteEhGa`olrcO$1~A2$`r:6LvMlGW;<)bwZVQ<PQpL8(aEXneo' );
define( 'LOGGED_IN_SALT',   '@e)r/O2{vF`%54YhA1zC1EhV*mE3^,q _d~~tCDn/5Q30?;958UBe_YN2Kk+; bH' );
define( 'NONCE_SALT',       '-QXhl-3Q+)21pI%(A-}L,V&:,u!1U^@w2f8K,U!Zm &xTQrSv}Yp}U>1HYZb&Ap=' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'cf_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
