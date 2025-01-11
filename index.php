<?php 
//phpinfo();
require_once __DIR__ . '/vendor/autoload.php';
define('_ROOTPATH_',__DIR__);
define('_ROOTPATHADMIN_',__DIR__);

spl_autoload_register();

use App\Controller\Controller;
use MongoDB\Client;
use MongoDB\Driver\ServerApi;

//$api = new Client();
//$api = new ServerApi(ServerApi::V1);
$pages = new Controller();
$pages->route();









      