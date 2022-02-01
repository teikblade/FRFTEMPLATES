<?php

if(isset($_SERVER['SERVER_NAME'])) 
{
 $srvNam 	 = $_SERVER['SERVER_NAME'];
 $srvNam         = trim($srvNam);
 $srvNam         = filter_var($srvNam, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH | FILTER_FLAG_STRIP_BACKTICK);
 } else { 
 $srvNam = 'NA'; 
}

if(isset($_SERVER['REQUEST_METHOD'])) 
{
 $reqMet	= $_SERVER['REQUEST_METHOD'];
 $reqMet        = trim($reqMet);
 $reqMet        = filter_var($reqMet, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH | FILTER_FLAG_STRIP_BACKTICK);
 } else { 
 $reqMet 	= 'NA'; 
}

if(isset($_SERVER['REQUEST_URI'])) 
{
 $reqUri   	 = $_SERVER['REQUEST_URI'];
 $reqUri         = trim($reqUri);
 $reqUri         = filter_var($reqUri, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH | FILTER_FLAG_STRIP_BACKTICK);
 } else { 
 $reqUri = 'NA'; 
}

if(isset($_SERVER['REQUEST_TIME'])) 
{
 $reqTime	 = $_SERVER['REQUEST_TIME'];
 $reqTime  	 = trim($reqTime);
 $reqTime        = filter_var($reqTime, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH | FILTER_FLAG_STRIP_BACKTICK);
 } else { 
 $reqTime = 'NA'; 
}

if(isset($_SERVER['REMOTE_ADDR'])) 
{
$remAddr 	= $_SERVER['REMOTE_ADDR'];
$remAddr        = trim($remAddr);
$remAddr        = filter_var($remAddr, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH | FILTER_FLAG_STRIP_BACKTICK);
} else { $remAddr = 'NA'; }

if(isset($_SERVER['QUERY_STRING'])) 
{
 $qryString 	= $_SERVER['QUERY_STRING'];
 $qryString         = trim($qryString);
 $qryString         = filter_var($qryString, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH | FILTER_FLAG_STRIP_BACKTICK);
 } else { 
 $qryString = 'NA'; 
}

if(isset($_SERVER['HTTP_REFERER'])) 
{
 $reffer	= $_SERVER['HTTP_REFERER'];
 $reffer         = trim($reffer);
 $reffer         = filter_var($reffer, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH | FILTER_FLAG_STRIP_BACKTICK);
 } else { 
 $reffer = 'NA'; 
}

if(isset($_SERVER['HTTP_HOST'])) 
{
 $hdrHost	= $_SERVER['HTTP_HOST'];
 $hdrHost 	= trim($hdrHost);
 $hdrHost 	= filter_var($hdrHost, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH | FILTER_FLAG_STRIP_BACKTICK);
 } else { 
 $hdrHost = 'NA'; 
}

if(isset($_SERVER['HTTP_USER_AGENT'])) 
{
 $hdrAgnt	= $_SERVER['HTTP_USER_AGENT'];
 $hdrAgnt        = trim($hdrAgnt);
 $hdrAgnt        = filter_var($hdrAgnt, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH | FILTER_FLAG_STRIP_BACKTICK);
 } else { $hdrAgnt = 'NA'; 
}

if(isset($_SERVER['PATH_INFO'])) 
{
 $pathNfo	= $_SERVER['PATH_INFO'];
 $pathNfo        = trim($pathNfo);
 $pathNfo        = filter_var($pathNfo, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH | FILTER_FLAG_STRIP_BACKTICK); 
 } else { 
 $pathNfo = 'NA'; 
}

if(isset($_SERVER['ORIG_PATH_INFO'])) 
{
 $opathNfo     	 = $_SERVER['ORIG_PATH_INFO'];
 $opathNfo       = trim($opathNfo);
 $opathNfo       = filter_var($opathNfo, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH | FILTER_FLAG_STRIP_BACKTICK);
 } else { 
 $opathNfo = 'NA'; 
}


if (!isset($_SERVER['HTTPS']) or $_SERVER['HTTPS'] == 'off' ) 
{ 
 $proto 	= "http://";	
 } else { 
 $proto		= "https://";
}

?>
