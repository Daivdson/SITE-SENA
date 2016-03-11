<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'site_sena_militar');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '`SSo*MRiVG|n>[s|rlw~+9u j+pvY6%|*X6IzczSRg}XG#/[6QGb3SF<HP&+uw[]');
define('SECURE_AUTH_KEY',  'AaTTbqcS]o`*@/Y^[6d4c4+P4JkquZ%~k n3(] Ai@1h)H>Ja,fm%=nw/(P3JRaF');
define('LOGGED_IN_KEY',    'qhr+acCvKAC?h!.*3-1e,fm(1F{px|+gYVY~.A;?Y9DT.g]-gi`N|w*-X|5|VH;c');
define('NONCE_KEY',        'jwq~*KvrFWWz+j-!SgJ&)M<L;:bjEgw(k-A70k)I-v6l+k969MC?#8CL@XE?.B+M');
define('AUTH_SALT',        '_-$pFHRBXp2G`(wvd:>>zHu:4=^bjcL]blwc.k1J!=~_v(pApRCKK1J|pD-0,-tI');
define('SECURE_AUTH_SALT', 'YZ]|4|nqxhE-e1QJKjbM6y8$Ie7-ud2-Z~=!03P)7UNlELippc2Nk]0I leO|n3$');
define('LOGGED_IN_SALT',   '>kK_k.!GPI@o?c:uU|whTt)uvLiJV#v,Fa#(=d`%,jm|@`_{=j8OyWe=?|(&|=63');
define('NONCE_SALT',       '+>Q80Tf1P9~g7CG|<;1P ]TSNH7Q/z|b1<SW<U3vOrAS510+be$vQf=kGbqIk.Z)');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
