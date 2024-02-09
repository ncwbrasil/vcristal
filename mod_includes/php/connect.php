<?php
require_once("ctracker.php");
error_reporting(0);

$ip = "localhost";
$user = "vcristal_mc"; 
$senha = "infomogi123";
$db = "vcristal_site";


$conexao =  mysql_connect("$ip","$user","$senha");
if($conexao)
{       
	if( !  mysql_select_db("$db",$conexao)  )
	{       
		die( mysql_error($conexao)); 
	
    }
}
else
{
		die('Não foi possível conectar ao banco de dados.');     
}


$login = $_GET['login'];
$n = $_GET['n'];
$pag = $_GET['pag'];
$parametros = "&fil_usr_id_self=".$fil_usr_id_self."&fil_usr_nome=".$fil_usr_nome."&fil_usr_cpf=".$fil_usr_cpf."&fil_usr_ativo=".$fil_usr_ativo."&login=".$login."&n=".$n."&";

mysql_query("SET NAMES 'utf8'");

mysql_query('SET character_set_connection=utf8');

mysql_query('SET character_set_client=utf8');

mysql_query('SET character_set_results=utf8');
?>