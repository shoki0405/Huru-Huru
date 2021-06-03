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
define( 'DB_NAME', 'huruhuru_dev' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '$Bl?|vFhXXXv^Sx=h]_J#Qwb3)=wjJsgd57C+x5odlNu{TyZ[K##,b `ssaQ.eA(' );
define( 'SECURE_AUTH_KEY',  'Op|Sah,k6.R!;}05RMgo}pQW*,]ceR2NU|gIi|p~.ARK>RME3oYt ?Jv}c7Tqnt-' );
define( 'LOGGED_IN_KEY',    'l= &^V{9c{loNA7:v!K[ Et5TjiT5=Bn:|^6;RV2{<Km0}nUETxxilt]RBsf,L %' );
define( 'NONCE_KEY',        'EGN0nR#bW8;wn+0;ZPlv16SBGs|QfIx-byknGP`s)uaifVqP@YW8u_HEi63o_I]U' );
define( 'AUTH_SALT',        'B?#(c_kd2S^6H.-h3;8`q1h}Yx!NRpGJ)j;.WznPB)s+D.cJrJh9;~4:7|dN]aD/' );
define( 'SECURE_AUTH_SALT', 'aqRy{G~ium:]GL^v8<lD6lV 1H7R$yr<L<<r4}H3?.8u&?b42A8^)v7z]8]bO$wQ' );
define( 'LOGGED_IN_SALT',   'p7rZwX)W{%(~A[E9,(G0vg1.hp<ZdhOW,u_ok2`TP_S4!$uT~?CqQ}dic~/Pji:)' );
define( 'NONCE_SALT',       'Pp#/Z+97>>3V3Hz)+  :79P=.Ve1 :J:?YZSZ*crY<Q}JVF.OhAtWvMA-yvxi;:R' );

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
