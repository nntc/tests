<?php



$URL='http://1c.nntc.nnov.ru/cp/odata/standard.odata/';
$DOC='Document_АнкетаАбитуриента';
$FORMAT='$format';
$FILTER='$filter';
$FILTER_PARAM1=urlencode('СерияДокументаУдостоверяющегоЛичность');// eq \'2211\' and 
$FILTER_PARAM1=urlencode('НомерДокументаУдостоверяющегоЛичность');// eq \'776075\'';

$GET_QUERY="$URL$DOC?$FORMAT=json&$FILTER=$FILTER_PARAM1 eq '2211' and $FILTER_PARAM1 eq '776075'";

echo $GET_QUERY;

echo "/usr/bin/curl -u web:webwebweb --request GET"

//$response=system("/usr/bin/curl -u web:webwebweb --request GET $GET_QUERY");
//echo $response;
?>
