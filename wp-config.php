<?php
# Database Configuration
define('DB_NAME','wp_miraculous');
define('DB_USER','miraculous');
define('DB_PASSWORD','JHtpFd2Yv86qzLZK');
define('DB_HOST','127.0.0.1');
define('DB_HOST_SLAVE','localhost');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wp_';
define('MASTER_DOMAIN_PREFIX','wp_'); 


/*Set Cookie Parmeter*/

/* define('MASTER_DOMAIN', 'miraculous.me' ); // Change this to the domain name of your master site
define('CAP_PREFIX', 'wp_'); // Change this prefix of your master site
define('CUSTOM_USER_TABLE', CAP_PREFIX.'users');
define('CUSTOM_USER_META_TABLE', CAP_PREFIX.'usermeta'); */
 


# Security Salts, Keys, Etc
define('AUTH_KEY',         '2hNTSCGGB+Jwk8V&3OY/?2+I>`A!zUvHe(X*Fdo/y85,#Jxp]dyd_o?bJ:-8~d[2');
define('SECURE_AUTH_KEY',  ';^W-W}h00&c^s#(B(;>J?E`-I4+!Y j9fA*nHQNa<fX%YV>qLXB8_ X~OI>MKL1&');
define('LOGGED_IN_KEY',    'C=Bw3-^`8-*w7{RE|a4+0t]--P7Sn/H$p% FsEBi>427]ShmIre~^Fab>`oO!lc_');
define('NONCE_KEY',        '-t,,vOt%hx3eS>sRtsvqXP-e;.%c?Yd-=X)uyQ_AscN8=Cokb> zGz,T:~&cN%^N');
define('AUTH_SALT',        'Zg<9z6!mCwt2/|pG`Ef]@^#z s*l$W-bHhU)w{9bGI1fW}|#c77TO=t{0G<!r#]x');
define('SECURE_AUTH_SALT', '!}W+^@)B2-?G_Ccm}:X^/>~eRA-,TvPce.8[]c{5e;CBfi}&FuLa6+QfK~_S-P3@');
define('LOGGED_IN_SALT',   'nS]c{G]sQpIHWM`|Nb;jj8eUO+]4_V*B+`E4dj+dJOHE2N=Mi[yE4,ar)d`bY4y|');
define('NONCE_SALT',       '>=?h7C7p&t^Tgkpg93f7tD:U0q?*J+oZXxGY)_A}VW%~fE`|&373.JeWa3z++`aX');


# Localized Language Stuff

define('WP_CACHE',TRUE);

define('PWP_NAME','miraculous');

define('FS_METHOD','direct');

define('FS_CHMOD_DIR',0775);

define('FS_CHMOD_FILE',0664);

define('PWP_ROOT_DIR','/nas/wp');

define('WPE_APIKEY','645a59750647676dcc8c3d65e2a301416e1a8e4c');

define('WPE_FOOTER_HTML',"");

define('WPE_CLUSTER_ID','1028');

define('WPE_CLUSTER_TYPE','pod');

define('WPE_ISP',true);

define('WPE_BPOD',false);

define('WPE_RO_FILESYSTEM',false);

define('WPE_LARGEFS_BUCKET','largefs.wpengine');

define('WPE_CDN_DISABLE_ALLOWED',false);

define('DISALLOW_FILE_EDIT',FALSE);

define('DISALLOW_FILE_MODS',FALSE);

define('DISABLE_WP_CRON',false);

define('WPE_FORCE_SSL_LOGIN',false);

define('FORCE_SSL_LOGIN',false);
//define('FORCE_SSL_ADMIN', false);

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define('WPE_EXTERNAL_URL',false);

define('WP_POST_REVISIONS',FALSE);

define('WPE_WHITELABEL','wpengine');

define('WP_TURN_OFF_ADMIN_BAR',true);

define('WPE_BETA_TESTER',false);

define('WP_DEBUG',false);

umask(0002);

$wpe_cdn_uris=array ();

$wpe_no_cdn_uris=array ();

$wpe_content_regexs=array ();

$wpe_all_domains=array (  0 => 'miraculous.wpengine.com',  1 => 'sdfssdfsdfsdf.miraculous.me',  2 => 'what.motivates.me',  3 => 'what.thrills.me',  4 => 'unites.us',  5 => 'heals.us',  6 => 'awakens.us',  7 => 'sub.enlightened.me',  8 => 'newsite.miraculous.me',  9 => 'www.miraculous.me',  10 => 'enlightened.me',  11 => 'test1.motivates.me',  12 => 'thriller.me',  13 => 'laurie.motivates.me',  14 => 'testesite.miraculous.me',  15 => 'tesite5.miraculous.me',  16 => 'testsite6.miraculous.me',  17 => 'intention.me',  18 => 'testsite52.miraculous.me',  19 => 'testsite523.miraculous.me',  20 => 'testsite52236.miraculous.me',  21 => 'testsite567.miraculous.me',  22 => 'spirits.me',  23 => 'testsite5.miraculous.me',  24 => 'testsite258.miraculous.me',  25 => 'testtheme.miraculous.me',  26 => 'site32.miraculous.me',  27 => 'myteststie.miraculous.me',  28 => 'mytestsite2.miraculous.me',  29 => 'lightworkers.me',  30 => 'testsite234.miraculous.me',  31 => 'blogosphere.me',  32 => 'humanitarian.me',  33 => 'angry.me',  34 => 'inspiring.me',  35 => 'testsite3456.miraculous.me',  36 => 'sunday.motivates.me',  37 => 'suneve.miraculous.me',  38 => 'suneve2.miraculous.me',  39 => 'testsite123456.miraculous.me',  40 => 'sdfsdfs.miraculous.me',  41 => 'journeys.me',  42 => 'sphere.me',  43 => 'serene.me',  44 => 'fulfillment.me',  45 => 'veterenarians.me',  46 => 'veterinarians.me',  47 => 'abilities.me',  48 => 'uandi.sphere.me',  49 => 'sdfsdfsdfsdfsd.sphere.me',  50 => 'goals.me',  51 => 'problems.me',  52 => 'solutions.me',  53 => 'celebration.me',  54 => 'risks.me',  55 => 'heroes.me',  56 => 'supporters.me',  57 => 'motivation.me',  58 => 'encouraging.me',  59 => 'fearless.me',  60 => 'patience.me',  61 => 'healing.me',  62 => 'gratitude.me',  63 => 'liberation.me',  64 => 'inspiration.me',  65 => 'awakening.me',  66 => 'enlightenment.me',  67 => 'dialogue.me',  68 => 'forgiveness.xxx',  69 => 'compassion.me',  70 => 'faith.me',  71 => 'romances.me',  72 => 'taboo.me',  73 => 'demons.me',  74 => 'temptation.me',  75 => 'addiction.me',  76 => 'confession.me',  77 => 'violence.no',  78 => 'explorations.me',  79 => 'amusements.me',  80 => 'serenity.me',  81 => 'god.my',  82 => 'peacemaker.me',  83 => 'creating.me',  84 => 'rewards.me',  85 => 'thankful.me',  86 => 'joyful.me',  87 => 'confident.me',  88 => 'transformation.me',  89 => 'meditating.me',  90 => 'majority.me',  91 => 'terrorism.me',  92 => 'success.is',  93 => 'trusting.be',  94 => 'odyssey.me',  95 => 'homeimprovementofwestchester.com',  96 => 'eternal.me',  97 => 'unique.me',  98 => 'embracing.me',  99 => 'magnificent.me',  100 => 'empowered.me',  101 => 'transformed.me',  102 => 'welcoming.me',  103 => 'conscious.me',  104 => 'beloved.me',  105 => 'unlocking.me',  106 => 'imagining.me',  107 => 'leading.me',  108 => 'supportive.me',  109 => 'relaxing.me',  110 => 'laughing.me',  111 => 'smiling.me',  112 => 'bonding.me',  113 => 'forgiveness.me',  114 => 'frustrated.me',  115 => 'isolated.me',  116 => 'overwhelmed.me',  117 => 'ashamed.me',  118 => 'distracted.me',  119 => 'haunted.me',  120 => 'paralyzed.me',  121 => 'brainwashed.me',  122 => 'attached.me',  123 => 'whole.me',  124 => 'sacred.me',  125 => 'original.me',  126 => 'cheerful.me',  127 => 'optimistic.me',  128 => 'unstoppable.me',  129 => 'powerful.me',  130 => 'motivating.me',  131 => 'liberating.me',  132 => 'miraculous.me',  133 => 'quiet.me',  134 => 'silent.me',  135 => 'mysterious.me',  136 => 'pleased.me',  137 => 'energized.me',  138 => 'healed.me',  139 => 'relieved.me',  140 => 'cleansed.me',  141 => 'purified.me',  142 => 'rejuvenated.me',  143 => 'liberated.me',  144 => 'disciplined.me',  145 => 'focused.me',  146 => 'unconscious.me',  147 => 'treasured.me',  148 => 'appreciated.me',  149 => 'touched.me',  150 => 'compassionate.me',  151 => 'empathetic.me',  152 => 'caring.me',  153 => 'refreshing.me',  154 => 'hilarious.me',  155 => 'apocalypse.me',  156 => 'interfaith.me',  157 => 'fascinated.me',  158 => 'baffled.me',  159 => 'humbled.me',  160 => 'annoyed.me',  161 => 'ignored.me',  162 => 'rejected.me',  163 => 'endangered.me',  164 => 'controlled.me',  165 => 'manipulated.me',  166 => 'detached.me',  167 => 'lovable.me',  168 => 'masterpiece.me',  169 => 'resurrection.me',  170 => 'motivators.me',  171 => 'mentors.me',  172 => 'passionate.me',  173 => 'affectionate.me',  174 => 'vulnerable.me',  175 => 'divinity.me',  176 => 'holiness.me',  177 => 'reconciliation.me',  178 => 'obstacles.me',  179 => 'milestones.me',  180 => 'achievements.me',  181 => 'farts.me',  182 => 'pranks.me',  183 => 'spanks.me',  184 => 'courageous.me',  185 => 'recharged.me',  186 => 'certain.me',  187 => 'uncertain.me',  188 => 'ready.me',  189 => 'moods.me',  190 => 'thoughts.me',  191 => 'desires.me',  192 => 'judgments.me',  193 => 'comparisons.me',  194 => 'expectations.me',  195 => 'sorry.me',  196 => 'death.me',  197 => 'troubles.me',  198 => 'stresses.me',  199 => 'healers.me',  200 => 'intentions.me',  201 => 'spheres.me',  202 => 'faqs.me',  203 => 'appreciation.me',  204 => 'reverence.me',  205 => 'strategies.me',  206 => 'transcending.me',  207 => 'succeeding.me',  208 => 'reprogramming.me',  209 => 'rejoicing.me',  210 => 'receptive.me',  211 => 'behaviors.me',  212 => 'emerging.me',  213 => 'attention.me',  214 => 'treasuring.me',  215 => 'forgiven.be',  216 => 'forgiving.be',  217 => 'prayers.me',  218 => 'blessings.me',  219 => 'reborn.me',  220 => 'friendly.me',  221 => 'bipartisan.me',  222 => 'transparent.me',  223 => 'samaritan.me',  224 => 'identity.me',  225 => 'soul.me',  226 => 'movement.me',  227 => 'paradigms.me',  228 => 'shifts.me',  229 => 'metaphors.me',  230 => 'symbols.me',  231 => 'controlling.me',  232 => 'emotions.me',  233 => 'words.me',  234 => 'igniting.me',  235 => 'ghosts.me',  236 => 'vampires.me',  237 => 'skeletons.me',  238 => 'paranoia.me',  239 => 'paranormal.me',  240 => 'whitehouse.me',  241 => 'pentagon.me',  242 => 'police.me',  243 => 'hugs.me',  244 => 'metamorphosis.me',  245 => 'reinventing.me',  246 => 'willing.me',  247 => 'monsters.me',  248 => 'acceptance.me',  249 => 'surrender.me',  250 => 'judgments.sphere.me',  251 => 'requests.me',  252 => 'rebounding.me',  253 => 'worries.me',  254 => 'podcasts.me',  255 => 'fulfilling.me',  256 => 'points.me',  257 => 'victory.me',  258 => 'peaceful.me',);

$wpe_varnish_servers=array (  0 => 'pod-1028',);

$wpe_ec_servers=array ();

$wpe_largefs=array ();

$wpe_netdna_domains=array ();

$wpe_netdna_push_domains=array ();

$wpe_domain_mappings=array ();

$memcached_servers=array ();

define('WP_AUTO_UPDATE_CORE',false);

$wpe_special_ips=array ();

$wpe_netdna_domains_secure=array ();
define('WPLANG','');

# WP Engine ID


define('PWP_DOMAIN_CONFIG', 'sphere.me' );

# WP Engine Settings



define( 'SUNRISE', 'on' );
define( 'WP_ALLOW_MULTISITE', true );
define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', true );
$base = '/';
define( 'DOMAIN_CURRENT_SITE', 'sphere.me' );
define( 'PATH_CURRENT_SITE','/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );

define('WP_DEFAULT_THEME', 'alphal');

//lincolns experement for global signon



# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . 'wp-settings.php');

$_wpe_preamble_path = null; if(false){}
