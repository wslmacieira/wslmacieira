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
define( 'DB_NAME', 'wslmacieira' );

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
define( 'AUTH_KEY',         '[hp:+O)Q8L8>hev>hYHtqgHe.sm*}Chx|n=h)rNiVz:0q38pn4>~=.{zW,HR*ast' );
define( 'SECURE_AUTH_KEY',  '3*V,x2`,2!&X{>^<{:#{Q_lnBFKxmtPY0=LAkak&,R_p9]X]EU9=aYv6LtOoAJ3l' );
define( 'LOGGED_IN_KEY',    'v$nA:>RN/T![#xmw>2Z ge^j`JCW2Uw<OXPl9H5ze&O@b}]x0=-0bM kxjqm%G=m' );
define( 'NONCE_KEY',        'vP:dZAjnUat7>O,=o{II8A}N5v8qkv98ZO42cAWOW4k;{Hp9;<z WP$)ej#GmIGy' );
define( 'AUTH_SALT',        '71%-x@ Jv[dbuX :*=1*`;k7&().}u(DGd/1T<$`=~:(#l NfG)pRu*+B=7c]$3G' );
define( 'SECURE_AUTH_SALT', 'qK2/;mAL;;_~E1^*C,Dx:MC^WHh@!dGvK#_0*zzb<58<~wT9BHpv,Lc!=u@X_){(' );
define( 'LOGGED_IN_SALT',   'XfLX+H/#LVU-ON/hQmX~qDr|4 lVx%]=ylxJ{9.;rDu.`9l?n/O5u%IukqcC7WH?' );
define( 'NONCE_SALT',       'v+fB8Pv&IR(8/6_1M^dm3BTo&;}m?Hp9m~zstu5za2q;+?=D:[Cq1Q^NdaRU+9 R' );

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
