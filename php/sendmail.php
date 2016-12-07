<?php
     sendMail('1', 'do@na.com', '1', 'doauy@naver.com', '1', '1', '1');

     function sendMail($fromName, $fromEmail, $toName, $toEmail, $subject, $contents, $isDebug=0){
     //Configuration
     $smtp_host = "localhost";
     //$smtp_host = "smtp.mail.yahoo.co.kr";
     $port = 80;
     $type = "text/html";
     $charSet = "UTF-8";

     //Open Socket
     $fp = @fsockopen($smtp_host, $port, $errno, $errstr, 1);
     if($fp){
          //Connection and Greetting
          $returnMessage = fgets($fp, 128);
          if($isDebug)
               print "CONNECTING MSG:".$returnMessage."\n";
          fputs($fp, "HELO YA\r\n");
          $returnMessage = fgets($fp, 128);
          if($isDebug)
               print "GREETING MSG:".$returnMessage."\n";

          // 이부분에 다음과 같이 로긴과정만 들어가면됩니다.
          /*
          fputs($fp, "auth login\r\n");
          fgets($fp,128);
          fputs($fp, base64_encode("아이디")."\r\n");
          fgets($fp,128);
          fputs($fp, base64_encode("비밀번호")."\r\n");
          fgets($fp,128);
          */

          fputs($fp, "MAIL FROM: <".$fromEmail.">\r\n");
          $returnvalue[0] = fgets($fp, 128);
          fputs($fp, "rcpt to: <".$toEmail.">\r\n");
          $returnvalue[1] = fgets($fp, 128);

          if($isDebug){
               print "returnvalue:";
               print_r($returnvalue);
          }

          //Data
          fputs($fp, "data\r\n");
          $returnMessage = fgets($fp, 128);
          if($isDebug)
               print "data:".$returnMessage;
          fputs($fp, "Return-Path: ".$fromEmail."\r\n");
          $fromName = "=?UTF-8?B?".base64_encode($fromName)."?=";
          $toName = "=?UTF-8?B?".base64_encode($toName)."?=";
          fputs($fp, "From: ".$fromName." <".$fromEmail.">\r\n");
          fputs($fp, "To: ".$toName." <".$toEmail.">\r\n");
          $subject = "=?".$charSet."?B?".base64_encode($subject)."?=";

          fputs($fp, "Subject: ".$subject."\r\n");
          fputs($fp, "Content-Type: ".$type."; charset=\"".$charSet."\"\r\n");
          fputs($fp, "Content-Transfer-Encoding: base64\r\n");
          fputs($fp, "\r\n");
          $contents= chunk_split(base64_encode($contents));

          fputs($fp, $contents);
          fputs($fp, "\r\n");
          fputs($fp, "\r\n.\r\n");
          $returnvalue[2] = fgets($fp, 128);

          //Close Connection
          fputs($fp, "quit\r\n");
          fclose($fp);

          //Message
          if (ereg("^250", $returnvalue[0])&&ereg("^250", $returnvalue[1])&&ereg("^250", $returnvalue[2])){
               $sendmail_flag = true;
          }else {
               $sendmail_flag = false;
               print "NO :".$errno.", STR : ".$errstr;
          }
       }

     if (! $sendmail_flag){
          echo "메일 보내기 실패";
     }
     return $sendmail_flag;
}
?>