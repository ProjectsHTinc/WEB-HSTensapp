<?php

//$con = @mysql_connect("localhost","root","");
$con = @mysql_connect("localhost","root","");
if ($con) {
		mysql_select_db('ens_app');
    } else {
		die("Connection failed");
}
?>