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
define( 'DB_NAME', 'itinenco_blogpaula' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'itinenco_paula' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '!#paula!#10' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'premium1.hospedameusite.com.br' );

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
define( 'AUTH_KEY',         'D)xAzj%X,!^>vE/s8Rg!)7,woJPO=6v3JkW[$[g`O/7?vWFoMRTGd?ExvE%v%G/G' );
define( 'SECURE_AUTH_KEY',  '&&2`/MThb>mFmyy>P24}1~i1.rG#ZbNjq@clS2LLBxZqu->4]<yjyqe:&JE=om2i' );
define( 'LOGGED_IN_KEY',    'le9rPl^{o4AxPPQ%,qw}&^8WL6e^%U%)J439Z&s^>| je0KY0{JK`}Mm8b_*Is+7' );
define( 'NONCE_KEY',        'UrL<#JQYJM_si|n)<`6zGR?4K(_qFAn6r)!o|7du=n4CA,{($dCwL^Iwzk8?*OV^' );
define( 'AUTH_SALT',        'JajVES*TtpqV$YI(oqdVo]A)pd]I{Ar>Uq@@)PII;^rUbg9yCqqH^>h(<EG4Pq9N' );
define( 'SECURE_AUTH_SALT', '+}=A1f8<4AyQvGcy1$<wuRM.fLAsfLJl[jB7BYbMubpU?(t%+(&~fp-PoQT 4N~P' );
define( 'LOGGED_IN_SALT',   'eGc&7iLo*.8C[1FFa,KFX?G=+ Dh{bT4x~pD57jq6>(y:8_9-s:]xq$cq,`>:zL9' );
define( 'NONCE_SALT',       '|!t-Kgq6[H1[I`Ct9=Sj6 D)j/$)lx%lTQA@yM0.mH|bmsHn{SfPzvXe#D2FD!vy' );

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
