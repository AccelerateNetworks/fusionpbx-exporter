<?php 



require_once "../root.php";
require_once "resources/require.php";

$fp = event_socket_create($_SESSION['event_socket_ip_address'], $_SESSION['event_socket_port'], $_SESSION['event_socket_password']);
if (!$fp) {die("Failed to connect");}

header("content-type: text/plain; version=0.0.4");

require "registrations.php";
