<?php

declare(strict_types=1);

if (defined('LYNX_SOLUTIONS_PHPCS_AUTOLOAD') === false) {
    if (is_file(__DIR__ . '/vendor/autoload.php')) {
        require_once __DIR__ . '/vendor/autoload.php';
    }

    define('LYNX_SOLUTIONS_PHPCS_AUTOLOAD', true);
}
