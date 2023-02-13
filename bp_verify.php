<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<LINK rel="address bar icon"  href="images/logo.ico" >
<meta http-equiv="Content-Language" content="fa">
<meta name="AUTHOR" content="Navid Kianooshmoghaddam">
<meta name="RATING" content="General">
<title>Mellat Bank Verify Response</title>
</head>
<body>
<?php
//Verify Response, so you can use it in your template.
if (isset ($_POST['ResCode']) && $_POST['ResCode']=="0"){
	$refid=$_POST['RefId'];
	$rescode=$_POST['ResCode'];
	$saleorderid=$_POST['SaleOrderId'];
	$salereferenceid=$_POST['SaleReferenceId'];
    $namespace='http://interfaces.core.sw.bps.com/';

    $orderId =$saleorderid;
    $verifySaleOrderId =$saleorderid;
    $verifySaleReferenceId =$salereferenceid;

    date_default_timezone_set('Asia/Tehran');
    require 'BPM_PGW.php';
    $p= new bpVerifyRequest();
    $p->terminalId=0;//long
    $p->userName='';//string
    $p->userPassword='';//string
    $p->orderId=$saleorderid;//long // Attention: Increase it per call
    $p->saleOrderId=$saleorderid;//long
    $p->saleReferenceId=$salereferenceid;//string

    $c =new BPM();
    $bpVerifyRequestResponse= $c->bpVerifyRequest($p);
    $resultStr  = $bpVerifyRequestResponse->return;
    if ($resultStr=="0" || $resultStr="43"){
        //Verify is OK and you must update your data by these information
        //$verifySaleReferenceId  includes Bank reference number after pay successes
        //Next You must send settle request to bank
        $s= new bpSettleRequest();
        $s->terminalId=0;//long
        $s->userName='';//string
        $s->userPassword='';//string
        $s->orderId=$saleorderid;//long // Attention: Increase it per call
        $s->saleOrderId=$saleorderid;//long
        $s->saleReferenceId=$salereferenceid;//string
        $bpSettleRequestResponse= $c->bpSettleRequest($s);
        $resultSettle  = $bpSettleRequestResponse->return;
    }
    else{
        echo('<br>فرآیند خرید شما ناقص می باشد');
        echo('<br>وجه کسر شده از شما به حسابتان عودت می گردد');
        echo('<br>خواهشمند است مجدد اقدام نمایید');
        echo('<br><br><br><a href="reserve_list.php">نوبت دهی اینترنتی</a>');
    }
}
else{
	switch($_POST['ResCode']){
		case "11":$txt="شماره کارت نامعتبر است";break;
		case "12":$txt="موجودی کافی نیست";break;
		case "13":$txt="رمز نادرست است";break;
		case "14":$txt="تعداد دفعات ورود رمز بیش از حد مجاز است";break;
		case "15":$txt="کارت نامعتبر است";break;
		case "16":$txt="دفعات برداشت وجه بیش از حد مجاز است";break;
		case "17":$txt="کاربر از انجام تراکنش منصرف شده است";break;
		case "18":$txt="تاریخ انقضای کارت گذشته است";break;
		case "41":$txt="شماره درخواست تکراری است";break;
	}
	echo("<br>عملیات با خطا مواجه شده است");
	echo('<br><br>'.$txt);
}
?>
</body>
</html> 