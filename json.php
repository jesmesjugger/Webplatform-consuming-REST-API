<?php

$url = 'http://15.188.147.46/api/request?username=%22tsmith%22%20&%20pass=%221234%22%20&%20payload=%22claim%22';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_HTTPGET, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response_json = curl_exec($ch);
curl_close($ch);
$response=json_decode($response_json, true);
$info_array =$response['RequestData']; 
foreach ($info_array as $key => $value) {
    echo "<tr  class='odd gradeX'>";        
    echo "<th>".$value["id"] ."</th>";
    echo "<th>". $value["transaction_type_description"] ."</th>";
    echo "<th>". $value["requester_id_number"] . "</th>";
    echo "<th>". $value["requester_customer_name"] . "</th>";
    echo "<th>". $value["created_at"] ."</th>";
	echo "</tr>";							
    //echo $value["id"] . "  " . $value["transaction_type_description"] .  "  " . $value["requester_id_number"] . " " . $value["requester_customer_name"] .  "  " . $value["created_at"] . "<br>";
  }

?>