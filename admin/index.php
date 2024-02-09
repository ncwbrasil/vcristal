<?php
date_default_timezone_set('America/Sao_Paulo');
error_reporting(1);
include("../mod_includes/php/ctracker.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Vidraçaria Cristal - Painel Administrativo</title>
<link href="../mod_includes/js/alert/jquery.alerts.css" rel="stylesheet" type="text/css" />
<link href="../css/styleadm.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../mod_includes/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="../mod_includes/js/alert/jquery.alerts.js"></script>
<script>

</script></head>

<body>

<?php include("../mod_topo_admin/topo_admin.php") ?>

<div id="content" align="center"><p>&nbsp;</p>
    <div class="formlogin">
    	<div class="titulo_adm">Área Restrita - Painel Administrativo</div>

    	<form onKeyPress="return submitenter(this,event)" name='form_login' id='form_login' method="POST" action="envialogin.php">
    	<input name="adm_login" id="adm_login" type="text" value="Login" /><br /><br />
        <input name="adm_senha" id="adm_senha" type="password" value="Senha" /><br /><br />
      	<input name="entrar" type="button" id="entrar" value="Entrar" />
        </form>
    </div>
</div>

<?php include("../mod_rodape/footer.php") ?>
<?php include("../mod_includes/php/funcoes-jquery.php") ?>

</body>
</html>