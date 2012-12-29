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
define('DB_NAME', 'wordpress');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'wordpress');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'tqbfjotld');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '2KqFsLF!|o--+2SI^ej&ossh_Rs%D|Amf6l![|K5x$FJXhb+C2#<s_>bc%vH8oIW');
define('SECURE_AUTH_KEY',  '68im@~~__z0>}Qw1Fgh5Nc<H*2@-QL^NT1!7/HQ+Iep1t>mpQ{%;9#96NMKm)_Ba');
define('LOGGED_IN_KEY',    'WSNu2YaZPQy+>rWV!yR>h++ovD;J:MVrf}[|B+}~P8d`D{f#8>olP)sPlG%$h<K.');
define('NONCE_KEY',        'SdN:y]Qh;I=,vvWcOn*C3J8,C9c!4 zIPbogT %z-$^hl+gO)3vJ~Nh&9*Fjc<vr');
define('AUTH_SALT',        '-kVeJWO}o+#IdX|+)+=i9|b0>/-+!1f0JXd89&;h<)adt:22FjfR7if|/zrbQQ0Y');
define('SECURE_AUTH_SALT', '`Ei x+_b4bJ*:/#!HPoln=ZAZmn,v|l!Mdw6fnv6([vA0M8rR_If-|u-duR47v-2');
define('LOGGED_IN_SALT',   '%}R4(qw>@)}`,;$L-*|0iU?qQ(M&Up7EuzVrQ(/%oaD)v63^ReY.;$po&&d,_}-O');
define('NONCE_SALT',       '5)m&#`>vU S*OVrO3K6#%v];?$y3&%N=7yL&d#5Ir+;cgfbn*RYh(-)<tH7@A*UA');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * O idioma localizado do WordPress é o inglês por padrão.
 *
 * Altere esta definição para localizar o WordPress. Um arquivo MO correspondente ao
 * idioma escolhido deve ser instalado em wp-content/languages. Por exemplo, instale
 * pt_BR.mo em wp-content/languages e altere WPLANG para 'pt_BR' para habilitar o suporte
 * ao português do Brasil.
 */
define('WPLANG', 'pt_BR');

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
