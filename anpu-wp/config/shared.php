<?php

/*----------------------------------------------------*/
// WordPress database
/*----------------------------------------------------*/
define('DB_CHARSET', 'utf8mb4');
define('DB_COLLATE', 'utf8mb4_unicode_ci');
$table_prefix = getenv('DB_PREFIX') ? getenv('DB_PREFIX') : 'wp_';

/*----------------------------------------------------*/
// Illuminate database
/*----------------------------------------------------*/
$capsule = new Illuminate\Database\Capsule\Manager();
$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => DB_HOST,
    'database'  => DB_NAME,
    'username'  => DB_USER,
    'password'  => DB_PASSWORD,
    'charset'   => DB_CHARSET,
    'collation' => DB_COLLATE,
    'prefix'    => $table_prefix
]);
$capsule->setAsGlobal();
$capsule->bootEloquent();
$GLOBALS['themosis.capsule'] = $capsule;

/*----------------------------------------------------*/
// Authentication unique keys and salts
/*----------------------------------------------------*/
/*
 * @link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service 
 */
define('AUTH_KEY',         'q-e& X*Pj-<*+(8;@e i$a*k.jge2%z+v2/He(.(zosRt~WCKQU~K-~-}L-;c+V<');
define('SECURE_AUTH_KEY',  '9NpI^N-:8&_h&/b>Mq4?6*</a@tPm9s|0|>pqk:iqI6| ;j!|G:K&F`*0L#I84UR');
define('LOGGED_IN_KEY',    '5F)q t52A+#k~M<.4uPiC,VZzXATY]P,GItl$MjL~s5b8a|{d2p*X35lv Zg)2nx');
define('NONCE_KEY',        '|/G-SWiE4MqQ*Pp2-)Z_1&|O@~i>f(p; z#{nIXoi?NH~oph=lP]YFN6fKE6uq2x');
define('AUTH_SALT',        '[ijhW*F- 6?d`9-9q?uQzAhlK3 ?[[/a9Ry4:@*8)-Pk 4QkJayu^Rr+Z[4R@EV`');
define('SECURE_AUTH_SALT', '&;U|b.v?~,T/^i`jc:!THzPW9s:(TJ#-WP|_]4]uxi)}#QiE4(AT=&Q^l;b@.Lw-');
define('LOGGED_IN_SALT',   'EqYH+>X O{C9}D]yR78IZOkqq=XkSA}J#7Q+hO~w[`4*zd>,ns7 644 wMC/N9|8');
define('NONCE_SALT',       ' 0A%m3dD*D%&=N,A!H8I8bN~m+Pp,* OxU13v401S:;,(Ux n{*>4sd>nxpem:fV');
/*----------------------------------------------------*/
// Custom settings
/*----------------------------------------------------*/
define('WP_AUTO_UPDATE_CORE', false);
define('DISALLOW_FILE_EDIT', true);
define('WP_DEFAULT_THEME', 'anubis');

/* That's all, stop editing! Happy blogging. */
