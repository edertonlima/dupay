<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'edertton_dupay' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'UhT(<LaBgc&o&*#5sVDg=`]nwlmAvu-,4C:g~C{;WTA )+|?{d!%3_)I}zhi:AG,' );
define( 'SECURE_AUTH_KEY',  'Ba4PT;}Yl=wjglE=ax[x+#f4;%R6dAS)bR;.53! i?1IJ+,8:BZ+;k:GTwgX.9W5' );
define( 'LOGGED_IN_KEY',    'R+1aP$dXvS$^ +>cYBcoHzrd5[K#e{pdwi7O`?Vc%j:&?{R!I`W8ts$:8[C:0Bkh' );
define( 'NONCE_KEY',        '<2/oD^thD| @`Jt1+RD+`F*:{,8t0Pn++MF,rVk^[6pn9AwzVoSb 9!5k/758tP=' );
define( 'AUTH_SALT',        '3Ld+-F0BTdhoyR=}-[3_9AB>r#8+/pSc!Rwy*=k*O!ACSG#IQ?;qEtA:QH)l y!{' );
define( 'SECURE_AUTH_SALT', 'WoyjW*N8N]xanE7dhImJDgw^9;EumKfLVF`MqPzHf{g`<eZ/@*&1M/OC+-il $Gd' );
define( 'LOGGED_IN_SALT',   'HbL$toVJK@^xs(x(BwfH|W^WwZ{OL]S,wvjUi%J5E>fjYv%|K~Oq58%tW3|bzbA8' );
define( 'NONCE_SALT',       ':v-vr*3OX5l)IdrXPio]UL4#zcf |7RHMVzB9Zd+j3tm=k_(Agn>t]`q(KrLUSC4' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
