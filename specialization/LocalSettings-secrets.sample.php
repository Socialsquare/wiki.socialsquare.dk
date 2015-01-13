<?php

# Protect against web entry
if ( !defined( 'MEDIAWIKI' ) ) {
	exit;
}

## Database settings
$wgDBtype = "mysql";
$wgDBserver = "localhost";
$wgDBname = "wiki_socialsquare_dk";
$wgDBuser = "wiki_ssq_dk";
$wgDBpassword = "___________________";

$wgSecretKey = "________________________________________________________________";

# Site upgrade key. Must be set to a string (default provided) to turn on the
# web installer while LocalSettings.php is in place
$wgUpgradeKey = "________________";

## The URL base path to the directory containing the wiki;
## defaults for all runtime URL paths are based off of this.
## For more information on customizing the URLs
## (like /w/index.php/Page_title to /wiki/Page_title) please see:
## https://www.mediawiki.org/wiki/Manual:Short_URL
$wgScriptPath = "";

## The protocol and server name to use in fully-qualified URLs
$wgServer = "http://wiki.socialsquare.dk";

## Credentials for the GoogleLogin extenstion.
$wgGLSecret = '________________________';
$wgGLAppId = '_____________________________________________.apps.googleusercontent.com';
