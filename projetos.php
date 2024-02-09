<?php
require_once("mod_includes/php/ctracker.php");
include('mod_includes/php/connect.php');
error_reporting(0);
function truncate( $string, $length, $truncateAfter = TRUE, $truncateString = '...' ) {
    if( strlen( $string ) <= $length ) {
        return $string;
    }
    $position = ( $truncateAfter == TRUE ? strrpos( substr( $string, 0, $length ), ' ' ) :
                                            strpos( substr( $string, $length ), ' ' ) + $length );
    return substr( $string, 0, $position ) . $truncateString;
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Vidraçaria Cristal - Projetos</title>
<link href="css/estilo.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php include("mod_topo/topo.php") ?>

<!--INICIO DO CONTEUDO-->
<?php include("banner.php") ?>

<div class="wrapper" id="fotos">
	<?php
		echo "<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center'><tr>";
		$sql = "SELECT * FROM album ORDER BY alb_data DESC";
		$query = mysql_query($sql,$conexao);
		$rows = mysql_num_rows($query);
		if($rows == 0) { echo " <center>Em breve nossos projetos.</center> ";}
		else
		{	
			for($x = 0; $x < $rows ; $x++)
			{
				$alb_id = mysql_result($query, $x, 'alb_id');
				$alb_titulo = mysql_result($query, $x, 'alb_titulo');
				$alb_data = implode('/',array_reverse(explode('-',mysql_result($query, $x, 'alb_data'))));
				$alb_descricao = truncate(nl2br(mysql_result($query, $x, 'alb_descricao')), 50);
				
				$i++;
				if($i % 4 == 0 ? $coluna="</td></tr><tr>" : $coluna="</td>")
				echo "<td valign='top' align='center'>
						<div class='album'>";
							$sql_foto = "SELECT * FROM fotos WHERE fot_album = $alb_id LIMIT 1";
							$query_foto = mysql_query($sql_foto,$conexao);
							$rows_foto = mysql_num_rows($query_foto);
							
							for($y = 0; $y < $rows_foto ; $y++)
							{
								$fot_foto = mysql_result($query_foto, 0, 'fot_foto');
								echo " 
								<a href='exibir-album.php?alb_id=$alb_id' target='_parent'><img src='imagem.php?arquivo=$fot_foto&largura=200&altura=160'></a><br><br>";
							}
							
							echo "
							$alb_data
							<br><span class='tituloalbum'><a href='exibir-album.php?alb_id=$alb_id' target='_parent'>$alb_titulo</a></span><br><br>
							$alb_descricao
						</div>";
				echo $coluna;  
			}
		}
	echo "</table></div>";
	?>
</div>

<!--FIM DO CONTEUDO-->
<?php include("mod_rodape/rodape.php") ?>
</body>
</html>