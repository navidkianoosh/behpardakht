<?php

class bpVerifyRequest{
var $terminalId;//long
var $userName;//string
var $userPassword;//string
var $orderId;//long
var $saleOrderId;//long
var $saleReferenceId;//long
}
class bpVerifyRequestResponse{
var $return;//string
}
class bpRefundInquiryRequest{
var $terminalId;//long
var $userName;//string
var $userPassword;//string
var $orderId;//long
var $refundOrderId;//long
var $refundReferenceId;//long
}
class bpRefundInquiryRequestResponse{
var $return;//string
}
class bpRefundVerifyRequest{
var $terminalId;//long
var $userName;//string
var $userPassword;//string
var $orderId;//long
var $refundOrderId;//long
var $refundReferenceId;//long
}
class bpRefundVerifyRequestResponse{
var $return;//string
}
class bpSettleRequest{
var $terminalId;//long
var $userName;//string
var $userPassword;//string
var $orderId;//long
var $saleOrderId;//long
var $saleReferenceId;//long
}
class bpSettleRequestResponse{
var $return;//string
}
class bpDynamicPayRequest{
var $terminalId;//long
var $userName;//string
var $userPassword;//string
var $orderId;//long
var $amount;//long
var $localDate;//string
var $localTime;//string
var $additionalData;//string
var $callBackUrl;//string
var $payerId;//long
var $subServiceId;//long
}
class bpDynamicPayRequestResponse{
var $return;//string
}
class bpVirtualPayRequest{
var $terminalId;//long
var $userName;//string
var $userPassword;//string
var $orderId;//long
var $amount;//long
var $localDate;//string
var $localTime;//string
var $additionalData;//string
var $callBackUrl;//string
var $payerId;//long
}
class bpVirtualPayRequestResponse{
var $return;//string
}
class bpReversalRequest{
var $terminalId;//long
var $userName;//string
var $userPassword;//string
var $orderId;//long
var $saleOrderId;//long
var $saleReferenceId;//long
}

class bpReversalRequestResponse{
var $return;//string
}

class bpCumulativeDynamicPayRequest{
var $terminalId;//long
var $userName;//string
var $userPassword;//string
var $orderId;//long
var $amount;//long
var $localDate;//string
var $localTime;//string
var $additionalData;//string
var $callBackUrl;//string
}

class bpCumulativeDynamicPayRequestResponse{
var $return;//string
}

class bpPayRequest{
var $terminalId;//long
var $userName;//string
var $userPassword;//string
var $orderId;//long
var $amount;//long
var $localDate;//string
var $localTime;//string
var $additionalData;//string
var $callBackUrl;//string
var $payerId;//long
}
class bpPayRequestResponse{
var $return;//string
}

class bpSaleReferenceIdRequest{
var $terminalId;//long
var $userName;//string
var $userPassword;//string
var $orderId;//long
var $saleOrderId;//long
}

class bpSaleReferenceIdRequestResponse{
var $return;//string
}

class bpChargePayRequest{
var $terminalId;//long
var $userName;//string
var $userPassword;//string
var $orderId;//long
var $amount;//long
var $localDate;//string
var $localTime;//string
var $additionalData;//string
var $callBackUrl;//string
var $payerId;//long
}

class bpChargePayRequestResponse{
var $return;//string
}

class bpInquiryRequest{
var $terminalId;//long
var $userName;//string
var $userPassword;//string
var $orderId;//long
var $saleOrderId;//long
var $saleReferenceId;//long
}
class bpInquiryRequestResponse{
var $return;//string
}

class bpRefundRequest{
var $terminalId;//long
var $userName;//string
var $userPassword;//string
var $orderId;//long
var $saleOrderId;//long
var $saleReferenceId;//long
var $refundAmount;//long
}

class bpRefundRequestResponse{
var $return;//string
}

class BPM 
 {
 var $soapClient;

private static $classmap = array('bpVerifyRequest'=>'bpVerifyRequest'
,'bpVerifyRequestResponse'=>'bpVerifyRequestResponse'
,'bpRefundInquiryRequest'=>'bpRefundInquiryRequest'
,'bpRefundInquiryRequestResponse'=>'bpRefundInquiryRequestResponse'
,'bpRefundVerifyRequest'=>'bpRefundVerifyRequest'
,'bpRefundVerifyRequestResponse'=>'bpRefundVerifyRequestResponse'
,'bpSettleRequest'=>'bpSettleRequest'
,'bpSettleRequestResponse'=>'bpSettleRequestResponse'
,'bpDynamicPayRequest'=>'bpDynamicPayRequest'
,'bpDynamicPayRequestResponse'=>'bpDynamicPayRequestResponse'
,'bpVirtualPayRequest'=>'bpVirtualPayRequest'
,'bpVirtualPayRequestResponse'=>'bpVirtualPayRequestResponse'
,'bpReversalRequest'=>'bpReversalRequest'
,'bpReversalRequestResponse'=>'bpReversalRequestResponse'
,'bpCumulativeDynamicPayRequest'=>'bpCumulativeDynamicPayRequest'
,'bpCumulativeDynamicPayRequestResponse'=>'bpCumulativeDynamicPayRequestResponse'
,'bpPayRequest'=>'bpPayRequest'
,'bpPayRequestResponse'=>'bpPayRequestResponse'
,'bpSaleReferenceIdRequest'=>'bpSaleReferenceIdRequest'
,'bpSaleReferenceIdRequestResponse'=>'bpSaleReferenceIdRequestResponse'
,'bpChargePayRequest'=>'bpChargePayRequest'
,'bpChargePayRequestResponse'=>'bpChargePayRequestResponse'
,'bpInquiryRequest'=>'bpInquiryRequest'
,'bpInquiryRequestResponse'=>'bpInquiryRequestResponse'
,'bpRefundRequest'=>'bpRefundRequest'
,'bpRefundRequestResponse'=>'bpRefundRequestResponse'
);

 function __construct($url='https://bpm.shaparak.ir/pgwchannel/services/pgw?wsdl')
 //function __construct($url='https://pgwstest.bpm.bankmellat.ir/pgwchannel/services/pgw?wsdl')
 {
  $this->soapClient = new SoapClient($url,array("classmap"=>self::$classmap,"trace" => true,"exceptions" => true));
 }
 
function bpVerifyRequest(bpVerifyRequest $bpVerifyRequest)
{

$bpVerifyRequestResponse = $this->soapClient->bpVerifyRequest($bpVerifyRequest);
return $bpVerifyRequestResponse;

}
function bpRefundInquiryRequest(bpRefundInquiryRequest $bpRefundInquiryRequest)
{

$bpRefundInquiryRequestResponse = $this->soapClient->bpRefundInquiryRequest($bpRefundInquiryRequest);
return $bpRefundInquiryRequestResponse;

}
function bpRefundVerifyRequest(bpRefundVerifyRequest $bpRefundVerifyRequest)
{

$bpRefundVerifyRequestResponse = $this->soapClient->bpRefundVerifyRequest($bpRefundVerifyRequest);
return $bpRefundVerifyRequestResponse;

}
function bpSettleRequest(bpSettleRequest $bpSettleRequest)
{

$bpSettleRequestResponse = $this->soapClient->bpSettleRequest($bpSettleRequest);
return $bpSettleRequestResponse;
}

function bpDynamicPayRequest(bpDynamicPayRequest $bpDynamicPayRequest)
{

$bpDynamicPayRequestResponse = $this->soapClient->bpDynamicPayRequest($bpDynamicPayRequest);
return $bpDynamicPayRequestResponse;
}

function bpVirtualPayRequest(bpVirtualPayRequest $bpVirtualPayRequest)
{

$bpVirtualPayRequestResponse = $this->soapClient->bpVirtualPayRequest($bpVirtualPayRequest);
return $bpVirtualPayRequestResponse;
}

function bpCumulativeDynamicPayRequest(bpCumulativeDynamicPayRequest $bpCumulativeDynamicPayRequest)
{

$bpCumulativeDynamicPayRequestResponse = $this->soapClient->bpCumulativeDynamicPayRequest($bpCumulativeDynamicPayRequest);
return $bpCumulativeDynamicPayRequestResponse;
}

function bpReversalRequest(bpReversalRequest $bpReversalRequest)
{

$bpReversalRequestResponse = $this->soapClient->bpReversalRequest($bpReversalRequest);
return $bpReversalRequestResponse;

}
function bpPayRequest(bpPayRequest $bpPayRequest)
{

$bpPayRequestResponse = $this->soapClient->bpPayRequest($bpPayRequest);
return $bpPayRequestResponse;

}
function bpSaleReferenceIdRequest(bpSaleReferenceIdRequest $bpSaleReferenceIdRequest)
{

$bpSaleReferenceIdRequestResponse = $this->soapClient->bpSaleReferenceIdRequest($bpSaleReferenceIdRequest);
return $bpSaleReferenceIdRequestResponse;

}
function bpChargePayRequest(bpChargePayRequest $bpChargePayRequest)
{

$bpChargePayRequestResponse = $this->soapClient->bpChargePayRequest($bpChargePayRequest);
return $bpChargePayRequestResponse;

}
function bpInquiryRequest(bpInquiryRequest $bpInquiryRequest)
{

$bpInquiryRequestResponse = $this->soapClient->bpInquiryRequest($bpInquiryRequest);
return $bpInquiryRequestResponse;

}
function bpRefundRequest(bpRefundRequest $bpRefundRequest)
{

$bpRefundRequestResponse = $this->soapClient->bpRefundRequest($bpRefundRequest);
return $bpRefundRequestResponse;
}}

?>