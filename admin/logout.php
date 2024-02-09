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
<link href="../css/styleadm.css" rel="stylesheet" type="text/css" />
<link href="../mod_includes/js/alert/jquery.alerts.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../mod_includes/js/funcoes.js"></script>
<script type="text/javascript" src="../mod_includes/js/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript"  src="../mod_includes/js/tiny_mce/plugins/tinybrowser/tb_tinymce.js.php"></script>
<script type="text/javascript" src="../mod_includes/js/tiny_mce/tiny.js"></script>
<script type="text/javascript" src="../mod_includes/js/jquery-1.3.1.js"></script>
<script type="text/javascript" src="../mod_includes/js/alert/jquery.alerts.js"></script>

<?php
include('../mod_includes/php/verificalogin.php');
include('../mod_topo_admin/topo.php');
$pagina = $_GET['pagina'];
	if($pagina == 'logout')
	{
		echo "<SCRIPT LANGUAGE='JavaScript'>
			  jConfirm('Deseja mesmo sair do sistema?','Confirma?',function(r)
			  { 
			  	if(r==true)
				{
					window.location.href ='../admin/logout.php?pagina=out&login=$login&n=$n';
				}
				else
				{
					window.history.back();
				}
			   
			  });
			  

			  </SCRIPT>";
	}
	if($pagina == 'out')
	{
		unset($_SESSION['obommarinheiro']);
		session_write_close();
		echo "<SCRIPT LANGUAGE='JavaScript'>
			    window.location.href = 'index.php';
			  </SCRIPT>";

	}

include('../mod_rodape/footer.php'); 
include('../mod_includes/php/funcoes-jquery.php');
?>