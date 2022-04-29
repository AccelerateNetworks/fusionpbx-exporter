<?php
	//application details
		$apps[$x]['name'] = "Prometheus Exporter";
		$apps[$x]['uuid'] = "02daaf42-d1b8-483a-83bd-1d29e5172e50";
		$apps[$x]['category'] = "App";
		$apps[$x]['subcategory'] = "";
		$apps[$x]['version'] = "0.1";
		$apps[$x]['license'] = "GNU General Public License v3";
		$apps[$x]['url'] = "https://github.com/acceleratenetworks/fusionpbx-exporter";
		$apps[$x]['description']['en-us'] = "FusionPBX Prometheus Exporter";
		$apps[$x]['description']['es-cl'] = "";
		$apps[$x]['description']['de-de'] = "";
		$apps[$x]['description']['de-ch'] = "";
		$apps[$x]['description']['de-at'] = "";
		$apps[$x]['description']['fr-fr'] = "";
		$apps[$x]['description']['fr-ca'] = "";
		$apps[$x]['description']['fr-ch'] = "";
		$apps[$x]['description']['pt-pt'] = "";
		$apps[$x]['description']['pt-br'] = "";

	//permission details
		$apps[$x]['permissions'][$y]['name'] = 'fusionpbx_exporter_view';
		$apps[$x]['permissions'][$y]['groups'][] = 'superadmin';
		$apps[$x]['permissions'][$y]['groups'][] = 'monitoring';