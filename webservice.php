<?php
/* Teste: curl -i -H "Accept: application/json" -H "Content-Type: application/json" -X POST -d '{"start":1498266776433,"end":1498267142486,"name":"Experimento01","video":{"title":"","url":"http:\/\/192.168.0.2\/live1\/live1.m3u8","duration":0},"device":{"device":"surnia_uds","model":"MotoE2(4G-LTE)","fingerprint":"motorola\/surnia_retbr_ds\/surnia_uds:6.0\/MPI24.65-39-4\/3:user\/release-keys","id":"MPI24.65-39-4","product":"surnia_retbr_ds","serial":"0011564278","display":"MPI24.65-39-4","imei":"fce890c468509fb4","screenDevice":{"width":540,"height":888,"densityDpi":240}},"logs":{"interruption":[{"timeStamp":1498266776534,"start":1498266776534,"end":1498266776539},{"timeStamp":1498266776681,"start":1498266776681,"end":1498266776768}],"chunk":[{"timeStamp":1498266776566,"atRequest":1498265728183,"atResponse":1498266776535,"atEndDownload":1498266776566,"representationId":"0","chunkSize":97572,"bitrate":87000,"duration":4066,"bandwidthMeter":3147483.870967742},{"timeStamp":1498266776575,"atRequest":1498266776566,"atResponse":1498266776567,"atEndDownload":1498266776575,"representationId":"0","chunkSize":93624,"bitrate":87000,"duration":3934,"bandwidthMeter":11703000},{"timeStamp":1498266776681,"atRequest":1498266776575,"atResponse":1498266776577,"atEndDownload":1498266776681,"representationId":"0","chunkSize":105468,"bitrate":87000,"duration":4200,"bandwidthMeter":1014115.3846153846},{"timeStamp":1498266776708,"atRequest":1498266776681,"atResponse":1498266776696,"atEndDownload":1498266776708,"representationId":"0","chunkSize":82344,"bitrate":87000,"duration":3866,"bandwidthMeter":6862000},{"timeStamp":1498267118037,"atRequest":1498267117982,"atResponse":1498267117984,"atEndDownload":1498267118037,"representationId":"6","chunkSize":183676,"bitrate":1500000,"duration":1520,"bandwidthMeter":3465584.9056603773}],"levelBuffer":[{"timeStamp":1498266777434,"level":23365,"percentageBuffer":6},{"timeStamp":1498266778436,"level":30317,"percentageBuffer":8},{"timeStamp":1498266779437,"level":29309,"percentageBuffer":8},{"timeStamp":1498266780439,"level":28307,"percentageBuffer":8},{"timeStamp":1498266781442,"level":27303,"percentageBuffer":8},{"timeStamp":1498266782443,"level":26308,"percentageBuffer":8},{"timeStamp":1498266783446,"level":25301,"percentageBuffer":8},{"timeStamp":1498266784448,"level":24304,"percentageBuffer":8},{"timeStamp":1498266785450,"level":23303,"percentageBuffer":8},{"timeStamp":1498266786452,"level":22297,"percentageBuffer":8},{"timeStamp":1498266787455,"level":21292,"percentageBuffer":8},{"timeStamp":1498266788458,"level":20294,"percentageBuffer":8},{"timeStamp":1498266789461,"level":19291,"percentageBuffer":8},{"timeStamp":1498266790463,"level":18287,"percentageBuffer":8},{"timeStamp":1498266791465,"level":17289,"percentageBuffer":8},{"timeStamp":1498266792467,"level":16287,"percentageBuffer":8},{"timeStamp":1498266793470,"level":15283,"percentageBuffer":8},{"timeStamp":1498266794472,"level":27274,"percentageBuffer":12},{"timeStamp":1498266795475,"level":29352,"percentageBuffer":13},{"timeStamp":1498266796477,"level":28349,"percentageBuffer":13},{"timeStamp":1498266797479,"level":27352,"percentageBuffer":13},{"timeStamp":1498266798482,"level":26345,"percentageBuffer":13},{"timeStamp":1498266799485,"level":25347,"percentageBuffer":13},{"timeStamp":1498266800488,"level":24341,"percentageBuffer":13},{"timeStamp":1498266801489,"level":23340,"percentageBuffer":13},{"timeStamp":1498266802491,"level":22336,"percentageBuffer":13},{"timeStamp":1498266803494,"level":21336,"percentageBuffer":13},{"timeStamp":1498266804496,"level":20333,"percentageBuffer":13},{"timeStamp":1498266805499,"level":19335,"percentageBuffer":13},{"timeStamp":1498266806502,"level":18324,"percentageBuffer":13},{"timeStamp":1498266807503,"level":17329,"percentageBuffer":13},{"timeStamp":1498266808506,"level":16328,"percentageBuffer":13},{"timeStamp":1498266809507,"level":15321,"percentageBuffer":13},{"timeStamp":1498266810508,"level":30324,"percentageBuffer":17},{"timeStamp":1498266811510,"level":29324,"percentageBuffer":17},{"timeStamp":1498267140320,"level":2161,"percentageBuffer":100},{"timeStamp":1498267141323,"level":1161,"percentageBuffer":100},{"timeStamp":1498267142326,"level":151,"percentageBuffer":100}]}}' http://192.168.0.3/coletor/webservice.php
*/
header('Content-Type: application/json; charset=utf-8');
header("access-control-allow-origin: *");

switch($_SERVER['REQUEST_METHOD']){
	case 'POST':
		
		$obj_php = json_decode(file_get_contents('php://input'));				
		$obj_json = file_get_contents('php://input');		
		

		// Cria o arquivo *.json
		$fp = fopen("Logs/".$obj_php->name."-".$obj_php->start.".json", "a");
 
		// Escreve o conteúdo JSON no arquivo
		fwrite($fp, $obj_json);
 
		fclose($fp);
	
	break;
	case 'GET':
		
	break;
}
?>
