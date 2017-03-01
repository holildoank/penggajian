<?php
error_reporting(0);
mysql_connect("localhost","root","");
mysql_select_db("db_penggajian");

//fungsi format rupiah 
function format_rupiah($rp) {
	$hasil = "Rp." . number_format($rp, 0, "", ".") . ",00";
	return $hasil;
}
?>
