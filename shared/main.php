<?php
// Website information
$websiteVersion = '1.7.0-r5';
$requiredApi = '1.40.2';

require_once dirname(__FILE__).'/../api/shared/main.php';
require_once dirname(__FILE__).'/utils.php';
require_once dirname(__FILE__).'/lang.php';

// Do check of API
checkApi();

$s['uupdump'] = 'UUP dump app';
$s['uupdumpSub'] = '%s - UUP dump app';
