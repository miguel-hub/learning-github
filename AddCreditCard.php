<?php
error_reporting(E_ALL);
$AccessKey = "6BA43FE0-5C32-4591-8609-8E618B15708A";
$AccountNo = $_POST["AccountNo"]; 
$CardType = $_POST["CardType"];
$CreditCardNo = $_POST["CreditCardNo"];
$ExpiryMonth = $_POST["ExpiryMonth"];
$ExpiryYear = $_POST["ExpiryYear"];
$FirstName = $_POST["FirstName"];
$LastName = $_POST["LastName"];
$CardCode = $_POST["CardCode"];
$Address1 = $_POST["Address1"];
$Address2 = $_POST["Address2"];
$City = $_POST["City"];
$County = $_POST["County"];
$Country = $_POST["Country"];
$Telephone = $_POST["Telephone"];
$Email = $_POST["Email"];
$Comments = $_POST["Comments"];



/* New instance of soapClient */

ini_set("soap.wsdl_cache_enabled", "1"); // Set to zero to avoid caching WSDL
$soapClient = new SoapClient("https://ncs.digiweb.ie/NCSServicePortal/NCSWCFWebService.asmx?wsdl");     
$result = $soapClient->AddCreditCard(array(
'AccessKey' => $AccessKey,
'AccountNo' => $AccountNo,
'CardType' => $CardType,
'CreditCardNo' => $CreditCardNo,
'ExpiryMonth' => $ExpiryMonth,
'ExpiryYear' => $ExpiryYear,
'CardCode' => $CardCode,
'FirstName' => $FirstName,
'LastName' => $LastName,
'Address1' => $Address1,
'Address2' => $Address2,
'City' => $City,
'County' => $County,
'Country' => $Country,
'Telephone' => $Telephone,
'Email' => $Email,
'Comments' => $Comments
));    

header('Content-type: application/json'); 
$jsonresp = json_encode($result);
echo substr($jsonresp, 23, -1);




?>


