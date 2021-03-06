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
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wpbanco' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         '`Ka%Gx72;2`WuMwWDft}h,y-4WvEl8{:hvej6:uO8O_(^pzuu0(1!lguB !Z_h<J' );
define( 'SECURE_AUTH_KEY',  'q17!{I2/!|Phm4c#-#UGBr!*hF#!J.[Y#}M;_g+fz~t5$[lvPIM@m-kL;?9STv|r' );
define( 'LOGGED_IN_KEY',    'fb>2#*yecokylI4$=/lhxM:Yp%7o2hkq.wN041PYf+$j1^O_CpNo?mC_&D`lh+#y' );
define( 'NONCE_KEY',        'qoCti:2ko9-rdpK,@p()/sm~[^0jA9_DK;wvs&C(-o{zl6EV+H)yB.-f)/KRdV40' );
define( 'AUTH_SALT',        'SOK%Gzm/:^+fK :]V-MevrGTNa?5r5~%H*MN?5Vm2:;2?$2_RQWpz3Yy8bY^KMn?' );
define( 'SECURE_AUTH_SALT', '~ff:YjVy$XB<tPro8kIyiumjcNo{:cNL.M8gsfgG&RQ6h~z?u_pt0Eg,=vMgpJUF' );
define( 'LOGGED_IN_SALT',   'K)CTORA;L6`Dly/$mVWx1HW?$#4A(Y@GX-Z-d~Gz1@2R+S[9rT6Asf)Kp>8rcd*+' );
define( 'NONCE_SALT',       '|m(O5`X{]fC*} V[68i2EByOc^*q:Q?%f|)NaMx2!Z:v( {YdlXFJ)uHReSyiFX{' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wpcrs_';

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
