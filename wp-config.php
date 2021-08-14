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
define( 'DB_USER', 'wordpress' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'wordpress-pass' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'wordpress-db.cvcqoydnmof3.ap-northeast-1.rds.amazonaws.com' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '>Vg}|::F}$>?hh/rS]8%odcm]JoYi}[,myjqw|0qhGI&)s=</F~||/Y.6MZ83{`[');
define('SECURE_AUTH_KEY',  'kH@1G)Opw!n5bbv>LJU3H|/Dq&cT2be@pjOjGu,1X_|Q`Q#@ge>dv`|W6qyvT(*3');
define('LOGGED_IN_KEY',    'X38s:@2g ;vjK#&u(2ogD{WWPw$j&7m.,it I79W-ztL<}O.P&1<u6$?F4#k<a6q');
define('NONCE_KEY',        'NL,NbLSH!*M,;V6]c|PJ&^<iij$BCQ+vUQ#3[}gd|Xh>(JSXf)|c<H:kAq:r0/_6');
define('AUTH_SALT',        'hK(v@Qh+RR4T`sp!q]G0[u:QYv:hl|FoPQkpp>5<!-.1+M|HZ}xFZ~)C@juyA5jj');
define('SECURE_AUTH_SALT', 'uFJ@QntZSD+>oMq+}^{MVW|Y*|JTS:Gogrd3zsi4ObW%-q7Cp?N+sX@~RfMKRgt[');
define('LOGGED_IN_SALT',   'oapz/g-O-/cZl`ux%Js4Qe][ [,>u]2Q|Gy7<khQ)G{3u;0g|O`KA}j145 ]d$?3');
define('NONCE_SALT',       '~&p4z)v-w5}+Rg1r(/w,_;/>(=TUL4{!}c0Hv5<=-zcM=<e;>Yyxgw_ht?CzF_4i');

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

/* カスタム値は、この行と「編集が必要なのはここまでです」の行の間に追加してください。 */



/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
