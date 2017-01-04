<?php

use Ripcord\Ripcord;

require(__DIR__ . '/../vendor/autoload.php');
include(__DIR__ . '/settings.php');

$models = ripcord::client($settings['endpoint_object']);
$result = $models->execute_kw($settings['db'], $settings['uid'], $settings['password'],
  'member.organization', 'search_read',
  array(),
  array('fields' => array('display_name'), 'limit' => 5)
);

print_r($result);
