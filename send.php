<?


if (trim($_REQUEST["name"]) && trim($_REQUEST["tell"]) != '+  (   )    -  -' ) {
   // формируем email письмо
   $mailTo = 'anatoliy32zubarev@mail.ru';// вставить адрес заказчика
   $subject = 'Обратный звонок с сайта vash-sayt.ru';
   $headers = "Content-Type: text/html; charset=utf-8\r\n";
   $headers .= "From: <Ваш сайт>\r\n";;
   $headers .= "bcc: \r\n";;
   $message = "<html><head><meta http-equiv='Content-Type' content='text/html; charset='utf-8'></head>
   <body>
   <table>
      <tr><td>Телефон</td><td>".convert($_REQUEST["name"])."</td></tr>
      <tr><td>Удобное время для звонка</td><td>".convert($_REQUEST["tell"])."</td></tr>
   </table>
   </body></html>";
   // отправляем email письмо
   $esend = mail($mailTo, $subject, $message, $headers);
}

if ($esend) echo 'ok';
   else echo 'error';
?>