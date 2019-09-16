<?php //if (!defined('BASEPATH')) exit('No direct script access allowed');

/*DEFINE SPECIFIC SETTING*/
// define('SITENAME','');
define('COMPANY','FTI Unmer Malang');
define('APPSNAME','Sistem Informasi Wisuda');
define('APPSVERSION','Beta v0.1');
define('DOMAIN','wisuda.test');
define('TELPON','08123395543');
define('EMAIL','fti@unmer.ac.id');
define('ALAMAT','Jl. Terusan Dieng<br>
Malang');
define('COMPANY_LONG',''); //longitude
define('COMPANY_LAT',''); //latitude
define('GA','');
// define('THEMES','metronic'); //metronic | steller | default (BS4) | material (BS4)

// define('BASEURI',(isset($_SERVER['HTTPS']) ? "https://" : "http://").$_SERVER['HTTP_HOST']);

define('BASEURI',(isset($_SERVER['HTTPS']) ? "https://" : "http://") 
	. $_SERVER['SERVER_NAME'] 
	. str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']));



/*BNI CLIENT ID*/

/*GOOGLE DEV*/


/*SECURITY IS MATTER*/
define('SALT', '!!@B15m1ll4H_@rrahM4n_Arr4H1m!*#');
define('CSRF', TRUE);
define('XSS', TRUE);
define('SESSID','wisuda');

/*Database configuration for default db connection*/
define('DBHOST','localhost');
define('DBUSER','root');
define('DBPASS','latansa876');
define('DBNAME','wisuda2019');
define('DBDRIVER','mysqli'); //mysqli,sqlsrv


define('FB_LINK','#');
define('TW_LINK','#');


?>