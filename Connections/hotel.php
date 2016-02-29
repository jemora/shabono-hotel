<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_hotel = "localhost";
$database_hotel = "hotel";
$username_hotel = "hotel";
$password_hotel = "hotel123";
$hotel = mysql_pconnect($hostname_hotel, $username_hotel, $password_hotel) or trigger_error(mysql_error(),E_USER_ERROR); 
?>
