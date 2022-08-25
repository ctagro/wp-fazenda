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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wp-fazenda' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'root' );

/** Nome do host do MySQL */
define( 'DB_HOST', '127.0.0.1:8889' );

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
define( 'AUTH_KEY',         '(r6fG3hrrSw7(0d$O^4N[}ea|`Sc^r8%kPT$e%(%y4^y:tAV7f?HmaeP9lBxPwm)' );
define( 'SECURE_AUTH_KEY',  '~sy7*:CTdfULy*26?M3Yo`uc/SH/$}[@3m5%Eafn.5hMwsa*qk4J/EPkw7iSzJk:' );
define( 'LOGGED_IN_KEY',    'X2ulH#70(p=jJPOP=M<:Jzq1N^4GXW>%z-I{z&/!=GTbrlLihV~E0(2|av7l{Qg(' );
define( 'NONCE_KEY',        'YL:[p8hQfXobp%{k*Y,n@gEBQ)3m?G?,k_Qz9@s]D>Tky<W`Ytf4]loyI%uH{R$Y' );
define( 'AUTH_SALT',        'BjO0@02AH,.f?jW4y~hE[<fc^qjm[xp,+5xg?n!<R0jLwnMW(]yrYgF=5$*GPf[f' );
define( 'SECURE_AUTH_SALT', ',$j5D^E?O=] ?AI(GdHJAD$#{W/Yf}$-;[ib?Mb`?FN rYMv.fyr/{eOSdC`R*}W' );
define( 'LOGGED_IN_SALT',   'OtK:#pNk=i#N6Q .r.B=<ptLCo=nuB@ZVwjUiqyUjw:LAr:%UB<uLaQix57X3(V_' );
define( 'NONCE_SALT',       ' s|:;e`iu[02vU$Ad|f)mAT4rBH^0mkUS)`Iin_naGw1JzJ&HNj?b<J@c0i2.E3=' );

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

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
