<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_conexao = "localhost";
$database_conexao = "sistema_rodeo";
$username_conexao = "rs_admin";
$password_conexao = "9e893d2e";
$conexao = mysql_pconnect($hostname_conexao, $username_conexao, $password_conexao) or trigger_error(mysql_error(),E_USER_ERROR); 
?>