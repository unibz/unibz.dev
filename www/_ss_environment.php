<?php
/* What kind of environment is this: development, test, or live (ie, production)? */
define('SS_ENVIRONMENT_TYPE', 'dev');

/* Database connection */
define('SS_DATABASE_SERVER', 'localhost');
define('SS_DATABASE_USERNAME', 'silverstripe');
define('SS_DATABASE_PASSWORD', 'unibzPassword');

/* Configure a default username and password to access the CMS on all sites in this environment. */
define('SS_DEFAULT_ADMIN_USERNAME', 'admin');
define('SS_DEFAULT_ADMIN_PASSWORD', 'unibzPassword');

define('SS_ERROR_LOG', 'silverstripe.log');

// This is used by sake to know which directory points to which URL
global $_FILE_TO_URL_MAPPING;
$_FILE_TO_URL_MAPPING['/var/www/www.unibz.it'] = 'http://unibz.test/';

// These two are base URLs for api calls
define('UNIBZ_APIURL_ENTRIES', 'https://webservices.scientificnet.org/rest-stage/entries/api/v1');
define('UNIBZ_APIURL_UISDATA', 'https://webservices.scientificnet.org/rest-stage/uisdata/api/v1');
