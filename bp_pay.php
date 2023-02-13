<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="AUTHOR" content="Navid Kianooshmoghaddam">
<title>Mellat Bank Pay Request</title>
    <script language="javascript" type="text/javascript">
        function postRefId (refIdValue) {
            var form = document.createElement("form");
            form.setAttribute("method", "POST");
            //form.setAttribute("action", "https://pgw.bpm.bankmellat.ir/pgwchannel/startpay.mellat");
            form.setAttribute("action", "https://bpm.shaparak.ir/pgwchannel/startpay.mellat");
            form.setAttribute("target", "_self");
            var hiddenField = document.createElement("input");
            hiddenField.setAttribute("name", "RefId");
            hiddenField.setAttribute("value", refIdValue);
            form.appendChild(hiddenField);

            document.body.appendChild(form);
            form.submit();
            document.body.removeChild(form);
        }
    </script>
</head>

<body>
<?php
    date_default_timezone_set('Asia/Tehran');
    require 'BPM_PGW.php';
    $p= new bpPayRequest();
    $p->terminalId=0;//long
    $p->userName='';//string
    $p->userPassword='';//string
    $p->orderId=0;//long // Attention: Increase it per call
    $p->amount=0;//long
    $p->localDate='';//string
    $p->localTime='';//string
    $p->additionalData="";//string
    $p->callBackUrl="http://".$_SERVER['SERVER_NAME']."/bp_verify.php";//string // Attention:Replace it with your URL
    $p->payerId=0;//long
    $c =new BPM();
    $bpPayRequestResponse= $c->bpPayRequest($p);
    $resultStr  = $bpPayRequestResponse->return;
    $res = explode (',',$resultStr);
    $ResCode = $res[0];
    if ($ResCode == "0") {
        // Update table, Save RefId
        echo "<script language='javascript' type='text/javascript'>postRefId('" . $res[1] . "');</script>";
    }
    else {
        // log error in app
        // Update table, log the error
        // Show proper message to user
        switch($ResCode){
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
        echo($ResCode."<br>عملیات با خطا مواجه شده است");
        echo('<br><br>'.$txt);
    }
?>
</body>
</html>