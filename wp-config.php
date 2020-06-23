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
define( 'AUTH_KEY',         '~*C mGlmgd<#$e-=,iUu(r k~Pno{D.0>^lKCfD;%Yge3NINxOm| D}`kzzYb_[:' );
define( 'SECURE_AUTH_KEY',  '2KoDPiO--;oZ`~~[3OE{W`~> ^fvUT7Ed%uqaigR0*wcP 0cIipp:$xbnM}sm6q4' );
define( 'LOGGED_IN_KEY',    'Y/HA$+T}}9d][@3/brNmmPC|`Dk)JVIsj>B&sd]Nx<TVwIKF9?_t+}vc9{^T*Eii' );
define( 'NONCE_KEY',        'vzJ>Rk#c$|GK<S=[lF%IlUYNwiM$k!*w !O@Q+fxvv)v^u0py164Odbm En?18M9' );
define( 'AUTH_SALT',        ')o.]rYSGg8~p>LA/@D+`_l/*wv%NNr(#?3H;8HXt=oZY/c |_^C^~%p2M9 Eed(o' );
define( 'SECURE_AUTH_SALT', 'a0<u83^J|mi~DxCVP)il2V9[4rWwG>NNu)Bc/n|#@U[%[!!)mQUyY:N`&3NA> g|' );
define( 'LOGGED_IN_SALT',   'W+^ci/.cIc&2I@i m)Ql6TG)XyJ/E3IOu5&g@(hjV~Yek*m:#tM_ DW5S9Ot2]Q[' );
define( 'NONCE_SALT',       'dnY7TP:iCxp>==U-GA8cboDg6Ty8Pq}Yty6tE%(x-[$2[UMl926w_@Cldz&Wcve_' );

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
