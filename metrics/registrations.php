<?php


$response = json_decode(event_socket_request($fp, "api show registrations as json"), true);
$current_registrations = array();
foreach($response["rows"] as $row) {
	if (!array_key_exists($row["realm"], $current_registrations)) {
		$current_registrations[$row["realm"]] = array();
	} 
	if (!array_key_exists($row["network_ip"], $current_registrations[$row["realm"]])) {
		$current_registrations[$row["realm"]][$row["network_ip"]] = 0;
	}
	$current_registrations[$row["realm"]][$row["network_ip"]]++;
}
echo "# HELP freeswitch_registations number of current registored devices\n";
echo "# TYPE freeswitch_registations counter\n";
if (sizeof($current_registrations) == 0) {
    echo "fusionpbx_registrations{} 0";
}
foreach($current_registrations as $realm => $registration) {
	 foreach($registration as $network_ip => $total) {
		 echo "fusionpbx_registrations{realm=\"$realm\", ip=\"$network_ip\"} $total\n";
	 }
}