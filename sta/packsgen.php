<?php
$removedFailed = isset($argv[1]) ? intval($argv[1]) : 0;

require_once dirname(__FILE__).'/../api/listid.php';
require_once dirname(__FILE__).'/main.php';
require_once dirname(__FILE__).'/genpack.php';

consoleLogger(brand('listid'));
$ids = uupListIds();
if(isset($ids['error'])) {
    throwError($ids['error']);
}

foreach($ids['builds'] as $val) {
    if(uupApiPacksExist($val['uuid'])) continue;

    generatePack($val['uuid'], $removedFailed);
}
