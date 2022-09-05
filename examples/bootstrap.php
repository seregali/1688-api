<?php

use Symfony\Component\Dotenv\Dotenv;
use \Laonet1688Api\ApiClient;

include_once __DIR__ . '/../vendor/autoload.php';

$dotenv = new Dotenv();
$dotenv->load(__DIR__ . '/.env.dist', __DIR__ . '/.env');

$apiKey = $_ENV['LAONET_API_KEY'];

$apiClient = new ApiClient($apiKey); 