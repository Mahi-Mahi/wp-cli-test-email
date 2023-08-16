<?php

namespace WP_CLI\SendTestEmail;

use WP_CLI;

if (!class_exists('\WP_CLI')) {
	return;
}

$wpcli_send_test_email_autoloader = __DIR__ . '/vendor/autoload.php';

if (file_exists($wpcli_send_test_email_autoloader)) {
	require_once $wpcli_send_test_email_autoloader;
}

WP_CLI::add_command('send-email', SendTestEmailCommand::class);
