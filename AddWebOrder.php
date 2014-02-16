<?php
error_reporting(E_ALL);
$AccessKey = "6BA43FE0-5C32-4591-8609-8E618B15708A";
$OwnerID = 1;
$Title = $_POST["Title"];
$FirstName = $_POST["FirstName"];
$LastName = $_POST["LastName"];
$CompanyName = "";
$Address1 = $_POST["Address1"];
$Address2 = $_POST["Address2"];
$Address3 = $_POST["Address3"];
$Town = $_POST["Town"];
$County = $_POST["County"];
$Country = "Ireland";
$PhoneNo = $_POST["PhoneNo"];
$FaxNo = "";
$MobileNo = $_POST["MobileNo"];
$Email = $_POST["Email"];
$Web = "";
$CustomerNotes = "";
$Package1Id = $_POST["Package1Id"];
$Package1Name = $_POST["Package1Name"];
$Package1Amount = $_POST["Package1Amount"];
$Package2Id = 0;
$Package2Name = "";
$Package2Amount = 0;
$Package3Id = 0;
$Package3Name = "";
$Package3Amount = 0;
$UAN = $_POST["UAN"];
$PromotionCode = $_POST["PromotionCode"];
$CustType = "R";
/* New instance of soapClient */

ini_set("soap.wsdl_cache_enabled", "1"); // Set to zero to avoid caching WSDL
$soapClient2 = new SoapClient("https://ncs.digiweb.ie/NCSServicePortal/NCSWCFWebService.asmx?wsdl");     
$result = $soapClient2->AddWebOrder(array(
'AccessKey' => $AccessKey,
'OwnerID' => $OwnerID,
'CustType' => $CustType,
'Title' => $Title,
'FirstName' => $FirstName,
'LastName' => $LastName,
'CompanyName' => $CompanyName,
'Address1' => $Address1,
'Address2' => $Address2,
'Address3' => $Address3,
'Town' => $Town,
'County' => $County,
'Country' => $Country,
'PhoneNo' => $PhoneNo,
'FaxNo' => $FaxNo,
'MobileNo' => $MobileNo,
'Email' => $Email,
'Web' => $Web,
'CustomerNotes' => $CustomerNotes,
'Package1Id' => $Package1Id,
'Package1Name' => $Package1Name,
'Package1Amount' => $Package1Amount,
'Package2Id' => $Package2Id,
'Package2Name' => $Package2Name,
'Package2Amount' => $Package2Amount,
'Package3Id' => $Package3Id,
'Package3Name' => $Package3Name,
'Package3Amount' => $Package3Amount,
'UAN' => $UAN,
'PromotionCode' => $PromotionCode
 ));    
 
header('Content-type: application/json'); 
$jsonresp = json_encode($result);
echo substr($jsonresp, 21, -1);

?>


