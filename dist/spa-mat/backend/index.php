<?php


header("Access-Control-Allow-Origin: *");
include(__DIR__.'vendor/rmccue/requests/library/Requests.php');
echo 1;
die;
Requests::register_autoloader();

$headers = [
    'Connection' => 'keep-alive',
    'Pragma' => 'no-cache',
    'Cache-Control' => 'no-cache',
    'Origin' => 'https://www.vfsrussiavisaservices.com',
    'Upgrade-Insecure-Requests' => '1',
    'Content-Type' => 'application/x-www-form-urlencoded',
    'User-Agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.108 Safari/537.36',
    'Accept' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3',
    'Referer' => 'https://www.vfsrussiavisaservices.com/finland-russia-tracking/Russian/trackingparam.aspx',
    'Accept-Encoding' => 'gzip, deflate, br',
    'Accept-Language' => 'en-US,en;q=0.9,ru;q=0.8'
];

$data = [
    '__LASTFOCUS' => '',
    '__EVENTTARGET' => '',
    '__EVENTARGUMENT' => '',
    '__VIEWSTATE' => '/wEPDwUKMTY0NjkzNDM3OQ9kFgJmD2QWAgIDD2QWAgIBD2QWDAIFDw8WAh4UVmFsaWRhdGlvbkV4cHJlc3Npb24FDl5cdysoWy9dXHcrKSokZGQCCw8PFgIfAAUUXihbYS16XXxbQS1aXXxbIF0pKiRkZAINDw9kFgIeB29uY2xpY2sFH0hpZGVFcnJvcignY3RsMDBfQ1BIX2RpdkVycm9yJylkAhMPDxYCHwAFDl5cdysoWy9dXHcrKSokZGQCFQ9kFgJmDw9kFggfAQU1ZXZlbnQuY2FuY2VsQnViYmxlPXRydWU7IHRoaXMuc2VsZWN0KCk7IGNhbF9sY3ModGhpcykeCm9ua2V5cHJlc3MFF3JldHVybiBjYWxfQ2hlY2soZXZlbnQpHgZvbmJsdXIFE2NhbF9WYWxpZGF0ZSh0aGlzKTseCW9ua2V5ZG93bgUqaWYoZXZlbnQua2V5Q29kZT09OSljYWxfY2hlY2tDbGljayhldmVudCk7ZAIXDw9kFgIfAQUfSGlkZUVycm9yKCdjdGwwMF9DUEhfZGl2RXJyb3InKWRkPaRkSx91DMMkCKir6FKtJiOekAk=',
    '__VIEWSTATEGENERATOR' => '3076BCAC',
    '__EVENTVALIDATION' => '/wEWBwLlrvrGBQKxutWeBQL3x9r6DgKS3ezXCAKnld7qBwL3m8e3AwKLz8+YBrrjknQyu3/9D4UWrQ0wO49fE1Tn',
    'ctl00$CPH$txtRef' => '',
    'ctl00$CPH$txtLname' => '',
    'ctl00$CPH$txtRef2' => 'FNRU/160419/0181/01',
    'ctl00$CPH$txtDOB$txtDate' => '26/12/1992',
    'ctl00$CPH$btnDOB' => 'Submit'
];

$response = Requests::post('https://www.vfsrussiavisaservices.com/finland-russia-tracking/Russian/trackingparam.aspx', $headers, $data);
print_r($response->body);
die;
