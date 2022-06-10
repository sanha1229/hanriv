<!-- Copyright (c) 2020-2022 sanha1229, all rights reserved. -->

<?php
function getHanTemp() {
    $html = file_get_contents('http://openapi.seoul.go.kr:8088/'.getenv('API_KEY').'/xml/WPOSInformationTime/1/5/');
    $result = array();
    $result['temp'] = explode('</W_TEMP>', explode('<W_TEMP>', $html)[1])[0];

    $date = explode('</MSR_DATE>', explode('<MSR_DATE>', $html)[1])[0];
    $result['date'] = substr($date, 0, 4) . '년 ' . intval(substr($date, 4, 2)) . '월 ' . intval(substr($date, 6, 2)) . '일';

    $time = explode('</MSR_TIME>', explode('<MSR_TIME>', $html)[1])[0];
    $result['time'] = $time;

    return $result; 
}
?>
