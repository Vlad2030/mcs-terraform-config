<?php

if ( !defined( 'MEDIAWIKI' ) ) {
	exit;
}

$wgSitename      = "My Wiki";
$wgMetaNamespace = "My_Wiki";
$wgScriptPath       = "";
$wgScriptExtension  = ".php";
$wgServer           = "http://" . $_SERVER["SERVER_NAME"];
$wgStylePath        = "$wgScriptPath/skins";
$wgLogo             = "$wgStylePath/common/images/wiki.png";
$wgEnableEmail      = true;
$wgEnableUserEmail  = true;

$wgEmergencyContact = "apache@127.0.0.1";
$wgPasswordSender   = "apache@127.0.0.1";

$wgEnotifUserTalk      = false;
$wgEnotifWatchlist     = false;
$wgEmailAuthentication = true;

$wgDBtype           = "mysql";
$wgDBserver         = "localhost";
$wgDBname           = "mediawiki";
$wgDBuser           = "wiki";
$wgDBpassword       = "@tomski!!s";

$wgDBprefix         = "";

$wgDBTableOptions   = "ENGINE=InnoDB, DEFAULT CHARSET=binary";

$wgDBmysql5 = false;

$wgMemCachedPersistent = false;
$wgUseMemCached = true;
$wgMainCacheType = CACHE_MEMCACHED;
$wgParserCacheType = CACHE_MEMCACHED;
$wgMemCachedTimeout = 5000000;
$wgMemCachedInstanceSize = 2000;
$wgMemCachedServers = array('127.0.0.1:11211');
$wgResourceLoaderMaxage['unversioned'] = 1;

$wgEnableUploads  = true;
$wgUseImageMagick = true;
$wgImageMagickConvertCommand = "/usr/bin/convert";
$wgUseInstantCommons  = true;

$wgShellLocale = "en_US.utf8";

$wgCacheDirectory = "$IP/cache";

$wgLanguageCode = "en";
$wgVariantArticlePath = '/index.php/$2/$1';
$wgArticlePath = '/index.php/wiki/$1';

$wgSecretKey = "1c20153c220941132df0c8a0e07e43e87982e5f854e98d5700282567c55cd0c6";

$wgUpgradeKey = "7d8da3d4bb95e3c2";

$wgDefaultSkin = "vector";

$wgRightsPage = ""; 
$wgRightsUrl = "//creativecommons.org/licenses/by-sa/3.0/";
$wgRightsText = "Creative Commons Attribution";
$wgRightsIcon = "{$wgStylePath}/common/images/cc-by.png";


$wgDiff3 = "/usr/bin/diff3";

$wgResourceLoaderMaxQueryLength = -1;

$wgEnableJavaScriptTest = true;
$wgShowExceptionDetails = true;
$wgDebugDumpSql = true;
$wgDebugLogFile = "/tmp/sql.txt";

$wgJobRunRate = 0;

$wgAllowUserJs = true;
$wgAllowUserCss = true;

class MyLocalSettings {
	public static $centralAuthOtherSite = '55qr.localtunnel.com';
}



require_once "$IP/extensions/ParserFunctions/ParserFunctions.php";
require_once "$IP/extensions/Cite/Cite.php";
require_once "$IP/extensions/PageImages/PageImages.php";
require_once "$IP/extensions/GeoData/GeoData.php";

require_once( "$IP/extensions/BetaFeatures/BetaFeatures.php" );


$wgMinifierHosts = array( 'localhost:8888' );


require_once("$IP/extensions/Parsoid/Parsoid.php");


require_once("$IP/extensions/VisualEditor/VisualEditor.php");

$wgVisualEditorParsoidURL = 'http://localhost:8000';
$wgDefaultUserOptions['visualeditor-enable'] = 1;


require_once "$IP/extensions/MobileFrontend/MobileFrontend.php";
$wgMFForceSecureLogin = false;
$wgMFAutodetectMobileView = true;
$wgMFNearby = true;
$wgMFNearbyEndpoint = 'http://en.m.wikipedia.org/w/api.php';
$wgMFAjaxUploadProgressSupport = true;
$wgMFKeepGoing = true;

$wgMobileFrontendLogo = '//upload.wikimedia.org/wikipedia/commons/thumb/1/10/Wikipedia-W-bold-in-square.svg/72px-Wikipedia-W-bold-in-square.svg.png';

$wgValidSkinNames['minerva'] = "Minerva";


require_once "$IP/extensions/EventLogging/EventLogging.php";
$wgEventLoggingBaseUri = 'http://localhost:8080/event.gif';
$wgEventLoggingSchemaApiUri = 'http://meta.wikimedia.org/w/api.php';
$wgEventLoggingFile = '/var/log/mediawiki/events.log';

require_once "$IP/extensions/Echo/Echo.php";
require_once "$IP/extensions/Thanks/Thanks.php";

$wgCaptchaClass = 'FancyCaptcha';
$wgCaptchaDirectory = "$IP/cache/captcha";
$wgCaptchaDirectoryLevels = 0;
$wgCaptchaSecret = "FOO";

$wgGroupPermissions['sysop']['abusefilter-modify'] = true;
$wgGroupPermissions['*']['abusefilter-log-detail'] = true;
$wgGroupPermissions['*']['abusefilter-view'] = true;
$wgGroupPermissions['*']['abusefilter-log'] = true;
$wgGroupPermissions['sysop']['abusefilter-private'] = true;
$wgGroupPermissions['sysop']['abusefilter-modify-restricted'] = true;
$wgGroupPermissions['sysop']['abusefilter-revert'] = true;


require_once "$IP/extensions/UniversalLanguageSelector/UniversalLanguageSelector.php";


require_once "$IP/extensions/VectorBeta/VectorBeta.php";
$wgVectorBetaPersonalBar = true;
$wgVectorBetaWinter = true;

require_once __DIR__ . "/extensions/Flow/Flow.php";
$wgFlowOccupyNamespaces = array( NS_USER_TALK );

require_once __DIR__ . "/extensions/TextExtracts/TextExtracts.php";

require_once __DIR__ . "/extensions/Popups/Popups.php";
