<?php

if (!defined('ABSPATH')) {
    exit;
}

require_once plugin_dir_path(__FILE__) . 'Notification.php';

add_action('plugins_loaded', function () {
    new MyPlugin_Notification();
});
