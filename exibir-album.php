<?php
require_once("mod_includes/php/ctracker.php");
include('mod_includes/php/connect.php');
error_reporting(0);

$alb_id = anti_injection($_GET['alb_id']);
$sqlalbum = "SELECT * FROM album WHERE alb_id = $alb_id";
$queryalbum = mysql_query($sqlalbum,$conexao);
$rowsalbum = mysql_num_rows($queryalbum);

if($rowsalbum > 0)
{
	$alb_titulo = mysql_result($queryalbum, 0, 'alb_titulo');
	$alb_descricao = mysql_result($queryalbum, 0, 'alb_descricao');
	$alb_data = implode('/',array_reverse(explode('-',mysql_result($queryalbum, 0, 'alb_data'))));
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Vidraçaria Cristal - Projetos - <?php echo "$alb_titulo"; ?></title>
<link href="css/estilo.css" rel="stylesheet" type="text/css" />
<link href="mod_includes/js/alert/jquery.alerts.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="mod_includes/js/funcoes.js"></script>
<script type="text/javascript" src="mod_includes/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="mod_includes/js/jquery-1.3.2.js"></script>

<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
<link rel="stylesheet" type="text/css" href="js/shadowbox/shadowbox.css">
<script type="text/javascript" src="js/shadowbox/shadowbox.js"></script>
<script type="text/javascript">
	Shadowbox.init();
</script>

</head>

<body>
<?php include("mod_topo/topo.php") ?>

<!--INICIO DO CONTEUDO-->
<?php include("banner.php") ?>

<div class="wrapper">
    <div id="exibefotos">
			<?php
				echo "	<div id='titulo'><a onclick='voltar();'>Projetos &raquo</a> ".$alb_titulo."</div>
						<div id='data'>".$alb_data."</div>
						<div id='descricao'>".$alb_descricao."</div>
						<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center'><tr>";
					
					if($rowsalbum == 0)
					{ echo " <center>Em breve nosso projetos.</center> ";}
				
				
        			$sql = "SELECT * FROM fotos WHERE fot_album = $alb_id";
					$query = mysql_query($sql,$conexao);
					$rows = mysql_num_rows($query);
					
					for($x = 0; $x < $rows ; $x++)
					{
						$fot_foto = mysql_result($query, $x, 'fot_foto');	
						$fot_legenda = mysql_result($query, $x, 'fot_legenda');	
						
						$i++;
						if($i % 4 == 0 ? $coluna="</td></tr><tr>" : $coluna="</td>")
						echo "<td valign='top' align='center'>
						
						<div id='galeria'>							
							<a href='$fot_foto' rel='shadowbox[roadtrip]' title='$fot_legenda'><img src='imagem.php?arquivo=$fot_foto&largura=200&altura=160' alt='$fot_legenda' title='$fot_legenda'>
						</div>";
						echo $coluna; 
					}
				echo "</table></div>";
				?>
    </div>
</div>

<!--FIM DO CONTEUDO-->
<?php include("mod_rodape/rodape.php") ;
include('mod_includes/php/funcoes-jquery.php');
?>

</body>
</html>