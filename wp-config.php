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
define('DB_NAME', 'prime356_remoto');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'prime356_remoto');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'admin!@#');

/** nome do host do MySQL */
define('DB_HOST', 'primecelulares.com.br');

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
define('AUTH_KEY',         'JAx.n&,6`@@QhW:uM0jb`a<<H3p7VG|NYrWb-x9&g|C15aSV<o&Y=9]m*`+06d*j');
define('SECURE_AUTH_KEY',  'OK/NdGYsIn,?GDu8HJ0Oh%`~3>pIJZ9m/.H,Z~qfMU!txqp(sVA/~EP|kE4X!7>i');
define('LOGGED_IN_KEY',    'oO)`<*A%t2k&44[Z$Mm/N$_Xc|cWo0jpJ9er633vdFk1XyaqGLm1e<:txx=F_=Sj');
define('NONCE_KEY',        '`Nk+Oi4>|d(Y#kPuI>%t{zIE%H6*5+}4*gmdQ#(R:s+w>hCt-i5Rn@=A=t#1t9LM');
define('AUTH_SALT',        'Xx|GfP){0v*AN%#^-b7oPQ3<*v]j7J$A3lj~OX}!]1XxZ2M0g<C8yM%n]Bevie+t');
define('SECURE_AUTH_SALT', 'knZE+v@~Jbr#i2|k=4rr?-FbHLqow~;AH!SYk []?Nl`5k(t_%ZV$n:s}hwm0S3i');
define('LOGGED_IN_SALT',   'l!B5lsQs! -/^6LeftIH74xNSs Zy!ZD9nvF++aLioz`x|;B|HXH_`cep*(#XM,3');
define('NONCE_SALT',       'O)_INnPXMSHJ]n,=-|*+iJG*c=77>l&7S~y9.f2fdwDK:KqRwV[Q$6R}Ui(O4TLV');

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
