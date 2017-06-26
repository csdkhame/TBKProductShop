<?
$webroot=$_SERVER['DOCUMENT_ROOT'];
 
//define("ip_sv_cn","http://www.t-bookingcn.com/"); 

//Version ///// golden phuket

define("_SCRIPT","t-booking.com v. 2"); 



//Web Config

define("WEB_TITLE"," "._SCRIPT.""); 

define("WEB_URL","http://localhost/web") ; 

define("WEB_EMAIL","dee-day@hotmail.com") ; 

define("TIMESTAMP",time()) ;





define("USE_CAPCHA", true); // true or false

define("CAPCHA_TYPE","2"); //TYPE 1 or 2

define("CAPCHA_NUM","4"); //NUM

define("CAPCHA_WIDTH","80"); //WIDTH

define("CAPCHA_HEIGHT","20"); //HEIGHT



	//MySQL Connect mainweb

define("DB_HOST","localhost");

define("DB_NAME","admin_dddtrip");

define("DB_USERNAME","admin_dddtrip");

define("DB_PASSWORD","252631@dotdotdottrip");

define("Country","ap_country"); 

define("Order","ap_order"); 
define("User","ap_users"); 
?>