<?php
session_start (); 
date_default_timezone_set('America/Sao_Paulo');
error_reporting(0);
require_once("../mod_includes/php/ctracker.php");
include('../mod_includes/php/connect.php');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Vidraçaria Cristal - Painel Administrativo</title>
<link href="../mod_includes/js/alert/jquery.alerts.css" rel="stylesheet" type="text/css" />
<link href="../css/styleadm.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../mod_includes/js/funcoes.js"></script>
<script type="text/javascript" src="../mod_includes/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="../mod_includes/js/alert/jquery.alerts.js"></script>
</head>
<body>
<?php	
include('../mod_includes/php/verificalogin.php');
include('../mod_topo_admin/topo.php');
$pagina = $_GET['pagina'];
if($pagina == "admin")
{
	echo "
	<table class='admin' align='center' border='0' width='950' cellspacing='0' cellpadding='0'>
		<tr>
			<td align='justify'>
				<br>
				<div class='titulo_adm'> Bem vindo ao painel administrativo </div>
				
					<table align='center' width='95%'><tr><td>
					Esse painel possui as seguintes funcionalidades:<p>
					<ul>
					<li><b>Gerenciador de Admins</b></li>
						Possibilita gerenciar os administradores que terão acesso a este painel, ou seja, os responsáveis por gerenciar todo o conteúdo do site. <br><br>
					
					
					<li><b>Gerenciador de Albuns & Fotos</b></li>
						Neste módulo é possível criar albuns (título, data e descrição) de fotos com as respectivas legendas.<br><br>
					
					</ul>
					</td></tr></table>
			</td>
		</tr>
	</table>";
}
//FIM PRINCIPAL	

?>
<?php
include('../mod_rodape/footer.php'); 
include('../mod_includes/php/funcoes-jquery.php');
?>
