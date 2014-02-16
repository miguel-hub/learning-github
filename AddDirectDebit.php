<?php
error_reporting(E_ALL);

$AccessKey = "6BA43FE0-5C32-4591-8609-8E618B15708A";


$AccountNo = $_POST["AccountNo"];
$BankAccountName = $_POST["BankAccountName"];
$BankAccountNo = $_POST["BankAccountNo"];
$BankName = $_POST["BankName"];
$BankSortCode = $_POST["BankSortCode"];
$Validate = "0";



/* New instance of soapClient */

ini_set("soap.wsdl_cache_enabled", "1"); // Set to zero to avoid caching WSDL
$soapClient = new SoapClient("https://ncs.digiweb.ie/NCSServicePortal/NCSWCFWebService.asmx?wsdl");     
$result = $soapClient->AddDirectDebit(array(
'AccessKey' => $AccessKey,
'AccountNo' => $AccountNo,
'BankAccountName' => $BankAccountName,
'BankAccountNo' => $BankAccountNo,
'BankName' => $BankName,
'BankSortCode' => $BankSortCode,
'Validate' => $Validate
 ));    
 
header('Content-type: application/json'); 
$jsonresp = json_encode($result);
echo substr($jsonresp, 24, -1);

?>


