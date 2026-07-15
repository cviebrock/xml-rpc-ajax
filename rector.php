<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;

return RectorConfig::configure()
    // Set the correct paths to all the PHP files in your project
    ->withPaths([
        __DIR__ . '/tests',
        __DIR__ . '/XML',
    ])
    // Choose the correct PHP version for your project
    ->withPhpSets(php82: true);
