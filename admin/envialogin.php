<?php
date_default_timezone_set('America/Sao_Paulo');
error_reporting(0);
require_once("../mod_includes/php/ctracker.php");
include('../mod_includes/php/connect.php');
session_start ();
?>
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<head>
<meta name="author" content="Gustavo Costa">
<meta http-equiv="Content-Language" content="pt-br">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Vidraçaria Cristal - Painel Administrativo</title>
<link href="../mod_includes/js/alert/jquery.alerts.css" rel="stylesheet" type="text/css" />
<link href="../css/styleadm.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../mod_includes/js/funcoes.js"></script>
<script type="text/javascript" src="../mod_includes/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="../mod_includes/js/alert/jquery.alerts.js"></script>

</head>
<?php
session_register('obommarinheiro');
$login = $_POST['adm_login'];
$senha = $_POST['adm_senha'];

$sql = "SELECT * FROM admins 
		WHERE adm_login = '$login' AND adm_senha = md5('$senha')";
$query = mysql_query($sql,$conexao);
$rows = mysql_num_rows($query);
if ($rows > 0)
{
	$status = mysql_result($query, 0, adm_ativo);
	$n = mysql_result($query, 0, adm_nome);

	if ($status == 0)
	{
		echo "&nbsp;
			  <SCRIPT linguage='JavaScript'>
				jAlert('<img src=../imagens/x.gif> Seu usuário está desativado, por favor contate o administrador do sistema.', 'Atenção', function () { window.history.back(); });
			  </SCRIPT>";
	}
	else
	{
	   	$_SESSION['obommarinheiro'] = $login;
	   	echo "<script>self.location = 'admin.php?pagina=admin&login=$login&n=$n'</script>";
	}

}
else
{
   $_SESSION['obommarinheiro'] = 'N';
   echo "&nbsp;
   		 <SCRIPT linguage='JavaScript'>
			jAlert('<img src=../imagens/x.gif> Login ou Senha incorreta, por favor tente novamente.', 'Atenção', function () { window.history.back(); });
		 </SCRIPT>";
}
?>