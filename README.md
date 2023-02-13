# behpardakht
Mellat Bank payment gateway - درگاه پرداخت بانک ملت
نحوه اتصال وب سایت به درگاه پرداخت بانک ملت (به پرداخت):
1. پس از ثبت نام و انجام مراحل درخواست درگاه پرداخت اینترنتی در سایت به پرداخت ، اطلاعات زیر برای شما ایمیل می شود
https://my.behpardakht.com/

terminalId, userName, userPassword

2.جهت ارسال کاربر به درگاه پرداخت از اسکریپت bp_pay.php استفاده نمایید

بر اساس اطلاعات درگاه خودتان، اسکریپت را به روز رسانی نمایید

orderId شماره سفارش شما که باید در هر بار ارسال منحصربفرد باشد
amount مبلغ پرداختی
localDate تاریخ
localTime ساعت

3.پس از انجام عملیات پرداخت کاربر به اسکریپت bp_verify.php در وب سایت شما هدایت خواهد شد
بر اساس اطلاعات درگاه خودتان، اسکریپت را به روز رسانی نمایید

ResCode=0
یعنی پرداخت با موفقیت انجام شده است

SaleOrderId شماره سفارش شما می باشد

SaleReferenceId شماره پیگیری بانک می باشد

باید توابع bpVerifyRequest و bpSettleRequest را فراخوانی کنید

****

How to use Mellat Bank payment gateway in a web site:
1. First, you must get account informations from https://my.behpardakht.com/ (such as terminalId, userName, userPassword)
2. You must update bp_pay.php by your account and web site informations.
you must set your order number in orderId and your price in amount and your date and time in localDate and localTime.

3. After payment process, user navigate to your site in bp_verify.php, so you must update it with your informations.

if ResCode=0 then 
  
  Payment is OK
  
  SaleOrderId varaiable is your order number and SaleReferenceId is Bank reference number. you must call bpVerifyRequest and bpSettleRequest functions.
  
  


#SOAP   #PHP
