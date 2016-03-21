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
define('DB_NAME', 'lojaceuc_sena');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'lojaceuc_sena');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'admin!@##@!');

/** nome do host do MySQL */
define('DB_HOST', 'lojaceu.com');

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
define('AUTH_KEY',         'BQ~HO)7,=X&-Z=;BasF-s)+5UAJ?>:G4NK1O_kc}br0rVM|%$1vrBd2YnU]tE/Mo');
define('SECURE_AUTH_KEY',  ',HO`!A@oX#!z56HR=!`x6>/FxVh?0|O9|EhXx>~yl@WUPWQ^x,HeejV]E;^&U.G.');
define('LOGGED_IN_KEY',    'GPom/O|Sr3tF)Ez|.Vn3KJ[bw+rFu+CD#z6ck)Sgkz*F!-)3}h_[X7]m/=.n]m2.');
define('NONCE_KEY',        '/gm2~Yzc1l;^W<$XA9lj[(|2(QeZ!_q<,8v}6Ht5+|t$ig~P*G0S1#Vxq)-mU$];');
define('AUTH_SALT',        '-7LU|=fP1?NDwx|dIwmjDVaH?zGsDXcDLLzmgQY:D$,obE.Y|4VlPWd3r(!%v`Wc');
define('SECURE_AUTH_SALT', 'b D+hQfn.t7+!$9:X}*?9(|d8J|f1x_W3q|!z?/kADCW <`2-,FDiB|+fvbjFsT#');
define('LOGGED_IN_SALT',   '?>u4[v[gy`,l$BV(f{[>NLfXw_AX-?~2Kb[Xoeuc`Yb.}_*Vq[Qne`IO`IyiA2d$');
define('NONCE_SALT',       'Pe7v-N/26p61|HWj8-Mon!kslUBM`*BNWJ6=ND1}Q>mgn|:nJcSIzsrb.+wnsdL7');

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
