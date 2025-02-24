<?php

use PhpCsFixer\Finder;
use PhpCsFixer\Config;

$finder = Finder::create()
    ->in(__DIR__)
    ->exclude('vendor');

$config = new Config();
$config->setRules([
    'braces' => [
        'position_after_functions_and_oop_constructs' => 'same',
        'position_after_control_structures' => 'same',
    ],
])
->setFinder($finder);

return $config;