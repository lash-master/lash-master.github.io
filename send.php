<?


if (trim($_REQUEST["name"]) && trim($_REQUEST["tell"]) != '+  (   )    -  -' ) {
   // ��������� email ������
   $mailTo = 'anatoliy32zubarev@mail.ru';// �������� ����� ���������
   $subject = '�������� ������ � ����� vash-sayt.ru';
   $headers = "Content-Type: text/html; charset=utf-8\r\n";
   $headers .= "From: <��� ����>\r\n";;
   $headers .= "bcc: \r\n";;
   $message = "<html><head><meta http-equiv='Content-Type' content='text/html; charset='utf-8'></head>
   <body>
   <table>
      <tr><td>�������</td><td>".convert($_REQUEST["name"])."</td></tr>
      <tr><td>������� ����� ��� ������</td><td>".convert($_REQUEST["tell"])."</td></tr>
   </table>
   </body></html>";
   // ���������� email ������
   $esend = mail($mailTo, $subject, $message, $headers);
}

if ($esend) echo 'ok';
   else echo 'error';
?>