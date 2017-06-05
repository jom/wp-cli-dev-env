<?php

if (!defined('WPCLI_DEVHELPERS_BASEPATH')) {
    define('WPCLI_DEVHELPERS_BASEPATH', getcwd());
}

if (defined('WP_CLI') && class_exists('WP_CLI', false)) {
    WP_CLI::add_command('dev create', Jom\WPDEV\Create::class);
}
