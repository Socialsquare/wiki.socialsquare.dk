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

