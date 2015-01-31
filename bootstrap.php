<?php
// bootstrap.php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "vendor/autoload.php";

$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src"), $isDevMode);

$conn = array(
    ‘dbname’ => 'dtest',
    ‘user’ => ‘silex’,
    ‘password’ => ‘password’,
    ‘host’ => ‘localhost’,
    ‘driver’ => ‘pro_mysql’,
);

$entityManager = EntityManager::create($conn, $config);

