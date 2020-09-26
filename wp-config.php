<?php
/**
 * WordPress için taban ayar dosyası.
 *
 * Bu dosya şu ayarları içerir: MySQL ayarları, tablo öneki,
 * gizli anahtaralr ve ABSPATH. Daha fazla bilgi için
 * {@link https://codex.wordpress.org/Editing_wp-config.php wp-config.php düzenleme}
 * yardım sayfasına göz atabilirsiniz. MySQL ayarlarınızı servis sağlayıcınızdan edinebilirsiniz.
 *
 * Bu dosya kurulum sırasında wp-config.php dosyasının oluşturulabilmesi için
 * kullanılır. İsterseniz bu dosyayı kopyalayıp, ismini "wp-config.php" olarak değiştirip,
 * değerleri girerek de kullanabilirsiniz.
 *
 * @package WordPress
 */

// ** MySQL ayarları - Bu bilgileri sunucunuzdan alabilirsiniz ** //
/** WordPress için kullanılacak veritabanının adı */
define( 'DB_NAME', 'zahit5834.github.io_db' );

/** MySQL veritabanı kullanıcısı */
define( 'DB_USER', 'root' );

/** MySQL veritabanı parolası */
define( 'DB_PASSWORD', '' );

/** MySQL sunucusu */
define( 'DB_HOST', 'localhost' );

/** Yaratılacak tablolar için veritabanı karakter seti. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Veritabanı karşılaştırma tipi. Herhangi bir şüpheniz varsa bu değeri değiştirmeyin. */
define('DB_COLLATE', '');

/**#@+
 * Eşsiz doğrulama anahtarları.
 *
 * Her anahtar farklı bir karakter kümesi olmalı!
 * {@link http://api.wordpress.org/secret-key/1.1/salt WordPress.org secret-key service} servisini kullanarak yaratabilirsiniz.
 * Çerezleri geçersiz kılmak için istediğiniz zaman bu değerleri değiştirebilirsiniz. Bu tüm kullanıcıların tekrar giriş yapmasını gerektirecektir.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'h<U3}`|*#N(u>-*YY1KbW[D^H% GA^b(D7:SGdF`PV^9]t++*h]H!wq?+oO;pmw,' );
define( 'SECURE_AUTH_KEY',  'tqgR^Q?]6m;T4GS5<3Y[{tt9bX@ILMT@%L4Zf1vzWO7{/YshW+zDnQOWDZ4a4kWU' );
define( 'LOGGED_IN_KEY',    '[/yvq@}K7ty(:^<OU,M+Ph_cHt+R8mi-IL0::aqKgtOG%1d~7e.rhw-S9T#IpJ0L' );
define( 'NONCE_KEY',        'z,aW(hp`@:i~Pzosk@;uQl^gv&+%ek^3dk?43T$Qpm.,@H:kkj[6^}q0Qn WHg`w' );
define( 'AUTH_SALT',        '#`%9+8=kNIMwbx9T- %{8gt&=2,/^mr5B/`S2/brhw$al-7c wz,.d2.DTBMzsQ6' );
define( 'SECURE_AUTH_SALT', 'dnkX=/8P5T#0KEp#4_(3%>#AmYB$M(`^>E1C?&SBQt+<|JsSF<&J6$;P-6m#oH .' );
define( 'LOGGED_IN_SALT',   '-CT$V@L`cuin^`=S&-;0FT44k=FOGtg-x?_712_t|Hm9e_::>tY0j7ji57g.Ig|4' );
define( 'NONCE_SALT',       'M{(}MAUvvAs:[M6Nl+cG(Kx rYGu8^G%ke<CIQL/T%[X7(48QNkG*uj$dB~@sXvA' );
/**#@-*/

/**
 * WordPress veritabanı tablo ön eki.
 *
 * Tüm kurulumlara ayrı bir önek vererek bir veritabanına birden fazla kurulum yapabilirsiniz.
 * Sadece rakamlar, harfler ve alt çizgi lütfen.
 */
$table_prefix = 'wp_';

/**
 * Geliştiriciler için: WordPress hata ayıklama modu.
 *
 * Bu değeri "true" yaparak geliştirme sırasında hataların ekrana basılmasını sağlayabilirsiniz.
 * Tema ve eklenti geliştiricilerinin geliştirme aşamasında WP_DEBUG
 * kullanmalarını önemle tavsiye ederiz.
 */
define('WP_DEBUG', false);

/* Hepsi bu kadar. Mutlu bloglamalar! */

/** WordPress dizini için mutlak yol. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** WordPress değişkenlerini ve yollarını kurar. */
require_once(ABSPATH . 'wp-settings.php');
