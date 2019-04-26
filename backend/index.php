<?php
header("Access-Control-Allow-Origin: *");
$url = 'https://www.vfsrussiavisaservices.com/finland-russia-tracking/Russian/trackingparam.aspx';
$headers = [
    'Connection' => 'keep-alive',
    'Pragma' => 'no-cache',
    'Content-Length: 11110',
    'Cache-Control' => 'no-cache',
    'Origin' => 'https://www.vfsrussiavisaservices.com',
    'Upgrade-Insecure-Requests' => '1',
    'Content-Type' => 'application/x-www-form-urlencoded',
    'User-Agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.108 Safari/537.36',
    'Accept' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3',
    'Referer' => $url,
    'Accept-Encoding' => 'gzip, deflate, br',
    'Accept-Language' => 'en-US,en;q=0.9,ru;q=0.8'
];

$data = [
    '__LASTFOCUS' => '',
    '__EVENTTARGET' => '',
    '__EVENTARGUMENT' => '',
    '__VIEWSTATE' => '/wEPDwUKMTY0NjkzNDM3OQ9kFgJmD2QWAgIDD2QWAgIBD2QWDgIFDw8WBB4EVGV4dAUBKh4UVmFsaWRhdGlvbkV4cHJlc3Npb24FDl5cdysoWy9dXHcrKSokZGQCCw8PFgQfAAUBKh8BBRReKFthLXpdfFtBLVpdfFsgXSkqJGRkAg0PD2QWAh4Hb25jbGljawUfSGlkZUVycm9yKCdjdGwwMF9DUEhfZGl2RXJyb3InKWQCEw8PFgQfAAUBKh8BBQ5eXHcrKFsvXVx3KykqJGRkAhUPZBYCZg8PZBYIHwIFNWV2ZW50LmNhbmNlbEJ1YmJsZT10cnVlOyB0aGlzLnNlbGVjdCgpOyBjYWxfbGNzKHRoaXMpHgpvbmtleXByZXNzBRdyZXR1cm4gY2FsX0NoZWNrKGV2ZW50KR4Gb25ibHVyBRNjYWxfVmFsaWRhdGUodGhpcyk7HglvbmtleWRvd24FKmlmKGV2ZW50LmtleUNvZGU9PTkpY2FsX2NoZWNrQ2xpY2soZXZlbnQpO2QCFw8PZBYCHwIFH0hpZGVFcnJvcignY3RsMDBfQ1BIX2RpdkVycm9yJylkAh0PFgIeCWlubmVyaHRtbAVCTm8gZGV0YWlscyBmb3VuZCBtYXRjaGluZyB3aXRoIHRoZSByZWZlcmVuY2Ugbm8gYW5kIGRhdGUgb2YgYmlydGguZGSOT/3QpD5J5g8xfRazVJQ04l1kww==',
    '__VIEWSTATEGENERATOR' => '3076BCAC',
    '__EVENTVALIDATION' => '/wEWBwLD4rezDQKxutWeBQL3x9r6DgKS3ezXCAKnld7qBwL3m8e3AwKLz8+YBjestt1Nvsywcp7eEVNpIWTq35UB',
    'ctl00$CPH$txtRef' => '',
    'ctl00$CPH$txtLname' => '',
    'ctl00$CPH$txtRef2' => ('FNRU/160419/0181/01'),
    'ctl00$CPH$txtDOB$txtDate' => ('26/12/1992'),
    'ctl00$CPH$btnDOB' => ('Submit')
];
$strData = '__LASTFOCUS=&__EVENTTARGET=&__EVENTARGUMENT&__VIEWSTATE=/wEPDwUKMTY0NjkzNDM3OQ9kFgJmD2QWAgIDD2QWAgIBD2QWDAIFDw8WAh4UVmFsaWRhdGlvbkV4cHJlc3Npb24FDl5cdysoWy9dXHcrKSokZGQCCw8PFgIfAAUUXihbYS16XXxbQS1aXXxbIF0pKiRkZAINDw9kFgIeB29uY2xpY2sFH0hpZGVFcnJvcignY3RsMDBfQ1BIX2RpdkVycm9yJylkAhMPDxYCHwAFDl5cdysoWy9dXHcrKSokZGQCFQ9kFgJmDw9kFggfAQU1ZXZlbnQuY2FuY2VsQnViYmxlPXRydWU7IHRoaXMuc2VsZWN0KCk7IGNhbF9sY3ModGhpcykeCm9ua2V5cHJlc3MFF3JldHVybiBjYWxfQ2hlY2soZXZlbnQpHgZvbmJsdXIFE2NhbF9WYWxpZGF0ZSh0aGlzKTseCW9ua2V5ZG93bgUqaWYoZXZlbnQua2V5Q29kZT09OSljYWxfY2hlY2tDbGljayhldmVudCk7ZAIXDw9kFgIfAQUfSGlkZUVycm9yKCdjdGwwMF9DUEhfZGl2RXJyb3InKWRkPaRkSx91DMMkCKir6FKtJiOekAk='
      .'&__VIEWSTATEGENERATOR=3076BCAC'
      .'&ctl00$CPH$txtRef='
      .'&ctl00$CPH$txtLname='
      .'&ctl00$CPH$txtRef2=FNRU/160419/0181/01'
      .'ctl00$CPH$txtDOB$txtDate=26/12/1992'
      .'ctl00$CPH$btnDOB=Submit';
/*
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_POST, 1);
      //curl_setopt($handle, CURLOPT_FOLLOWLOCATION, true);
      curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
      curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 9999);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);// Receive server response ...

      $server_output = curl_exec($ch);
      var_dump($server_output);
      curl_close ($ch);
      die;*/


include(__DIR__.'./Requests/library/Requests.php');
Requests::register_autoloader();

$response = Requests::post($url, $headers, $data);
print_r($response->body);
die;
