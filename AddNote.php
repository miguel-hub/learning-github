<?php
error_reporting(E_ALL);

$AccessKey = "6BA43FE0-5C32-4591-8609-8E618B15708A";
$AccountNo = $_POST["AccountNo"];
$Note = $_POST["Note"];

/* New instance of soapClient */

ini_set("soap.wsdl_cache_enabled", "1"); // Set to zero to avoid caching WSDL
$soapClient = new SoapClient("https://ncs.digiweb.ie/NCSServicePortal/NCSWCFWebService.asmx?wsdl");     
$result = $soapClient->AddNote(array(
'AccessKey' => $AccessKey,
'AccountNo' => $AccountNo,
'Note' => $Note
 ));    
 
header('Content-type: application/json'); 
$jsonresp = json_encode($result);
echo substr($jsonresp, 17, -1);

?>


