<?php 



include "../root.php";
require_once "resources/require.php";
require_once "resources/check_auth.php";

if (!permission_exists('fusionpbx_exporter_view')) {
	http_response_code(500);
	echo("access denied");
	exit();
}


$fp = event_socket_create($_SESSION['event_socket_ip_address'], $_SESSION['event_socket_port'], $_SESSION['event_socket_password']);
if (!$fp) {die("Failed to connect");}

header("content-type: text/plain; version=0.0.4");

require "registrations.php";
