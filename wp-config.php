<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'wordpress' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'root' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'J~C{@?%)P6}jL1~0=!yP6j)+b,+C?Ouaa)[/Jp0dA.%k>q:`%LK1xQbSRA%irbSG' );
define( 'SECURE_AUTH_KEY',  'cXq}DPp@paNtkdRt)[(Lo0IvYhvTFb-bY4aT(ac@C)MvzVSj:Q,RHARXe[}8hc2I' );
define( 'LOGGED_IN_KEY',    ':(tLi@o;aS%s;IY[t9sD}?`bW52jk1wI^ih]#Lr364&!q[F2)dY9U$.)4/n8~XFo' );
define( 'NONCE_KEY',        'u@_#m4f!KmltdnV944f9*;Rm6.pY]*]%g7sKAv>z} o<J!$kGVmdGn>ub`,Kz:Br' );
define( 'AUTH_SALT',        'P^vJ>l;1?$s!{{fu^+^XW5)z-FR+YzV&4^@0+4=p{d&P#/@7^ RX+>3+(ju}}|?_' );
define( 'SECURE_AUTH_SALT', 'Dd4xVgPS>23:O{Z2Uq x5Qr?sni&:ff6bP6wGQJ0R~W#QmMo3-YWe_PA+_;L}#,+' );
define( 'LOGGED_IN_SALT',   'EYk76FRe<=g<ldNVr|~]xAw9T/{.:dfT(-Oa%6B< I),RwgB1V{&=bANh~asEDt_' );
define( 'NONCE_SALT',       'Cc_[|y:%DCfr-A=[r;i3WG^*!lbo2^,4TJGQBmZu(`{t`?z%=W,VeGSc=_=oxTWK' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
