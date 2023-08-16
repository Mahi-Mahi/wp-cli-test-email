<?php

namespace WP_CLI\SendTestEmail;

use WP_CLI;
use WP_CLI_Command;

class SendTestEmailCommand extends WP_CLI_Command
{

	/**
	 * Send a test email
	 *
	 * ## EXAMPLES
	 *
	 *     # Send a test email.
	 *     $ wp send-test-email
	 *     Success: Hello World!
	 *
	 * @when before_wp_load
	 *
	 * @param array $args       Indexed array of positional arguments.
	 * @param array $assoc_args Associative array of associative arguments.
	 */
	public function __invoke($args, $assoc_args)
	{

		require_once(ABSPATH . '/wp-load.php');

		wp_mail(get_bloginfo('admin_email'), 'This is a test email !', 'Sent from ' . get_bloginfo('site_url'), ['Content-Type: text/html; charset=UTF-8']);
		WP_CLI::success('Hello World!');
	}
}
