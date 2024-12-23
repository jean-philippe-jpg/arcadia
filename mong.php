<?php

//require 'vendor/autoload.php';

use MongoDB\Client;

$client = new Client("mongodb://localhost:27017");

$db = $client->arcadia;

$collection = $db->services;

$cursor = $collection->find();

foreach ($cursor as $document) {
    var_dump($document);
}
