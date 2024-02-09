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
<script type="text/javascript" src="../mod_includes/js/tiny_mce/plugins/tinybrowser/tb_tinymce.js.php"></script>
<script type="text/javascript" src="../mod_includes/js/tiny_mce/tiny.js"></script>
<script type="text/javascript" src="../mod_includes/js/jquery-1.3.1.js"></script>
<script type="text/javascript" src="../mod_includes/js/alert/jquery.alerts.js"></script>
<script type="text/javascript">
var observe;
if (window.attachEvent) {
    observe = function (element, event, handler) {
        element.attachEvent('on'+event, handler);
    };
}
else {
    observe = function (element, event, handler) {
        element.addEventListener(event, handler, false);
    };
}
</script>

<body >
<?php	
include('../mod_includes/php/verificalogin.php');
include('../mod_topo_admin/topo.php');
$pagina = $_GET['pagina'];
$page = "<a href='fotos.php?pagina=fotos&login=$login&n=$n'>Fotos</a>";
$sql = "SELECT * FROM album ORDER BY alb_data DESC
		";
$query = mysql_query($sql,$conexao);
$rows = mysql_num_rows($query);
if($pagina == "fotos")
{
	echo "
	<table align='center' border='0' width='950' cellspacing='0' cellpadding='0'>
		<tr>
			<td align='left'>
				<div class='titulo_adm'> $page  </div>
				<div id='icone'>
				<a href='fotos.php?pagina=adicionar_album&login=$login&n=$n'><input name='add-adm' value='Novo Album' type='button' /></a>
				</div>";
				if ($rows > 0)
				{
				echo "
				<table align='center' width='100%' border='0' cellspacing='0' cellpadding='10' class='bordatabela'>
					<tr>
						<td class='titulo_tabela'>Título do Album</td>
						<td class='titulo_tabela'>Descrição</td>
						<td class='titulo_tabela'>Data</td>
						<td class='titulo_tabela' align='center'>Adicionar Fotos</td>
						<td class='titulo_tabela' align='center'>Editar</td>
						<td class='titulo_tabela' align='center'>Excluir</td>
					</tr>";
						$c=0;
						for($x = 0; $x < $rows ; $x++)
						{
							$alb_id = mysql_result($query, $x, 'alb_id');
							$alb_titulo = mysql_result($query, $x, 'alb_titulo');
							$alb_descricao = mysql_result($query, $x, 'alb_descricao');
							$alb_data = implode('/',array_reverse(explode('-',mysql_result($query, $x, 'alb_data'))));
							if ($c == 0)
							{
							 $c1 = "";
							 $c=1;
							}
							else
							{
							$c1 = "linhapar";
							 $c=0;
							} 
							echo "<tr class='$c1' onmouseover=\"this.className='over';\" onmouseout=\"this.className='$c1';\">
									  <td onclick=\"document.location.href='fotos.php?pagina=adicionar_fotos&alb_id=$alb_id&login=$login&n=$n';\">$alb_titulo</td>
									  <td onclick=\"document.location.href='fotos.php?pagina=adicionar_fotos&alb_id=$alb_id&login=$login&n=$n';\">$alb_descricao</td>
									  <td onclick=\"document.location.href='fotos.php?pagina=adicionar_fotos&alb_id=$alb_id&login=$login&n=$n';\">$alb_data</td>
									  <td align=center><a href='fotos.php?pagina=adicionar_fotos&alb_id=$alb_id&login=$login&n=$n'><img border='0' src='../imagens/img_icon.png' height='25'></a></td>
									  <td align=center><a href='fotos.php?pagina=editar_album&alb_id=$alb_id&alb_titulo=$alb_titulo&login=$login&n=$n'><img border='0' src='../imagens/edit_icon.png' width='20' height='20'></a></td>
									  <td align=center><a href='fotos.php?pagina=excluir_album&alb_id=$alb_id&alb_titulo=$alb_titulo&fot_login=$fot_login&login=$login&n=$n'><img border='0' src='../imagens/delete_icon.png' width='20' height='20'></a></td>
								  </tr>";
						}
					}
					else
					{
					echo "Não há nenhum album cadastrado.";
					}
						echo "
				</table>
			</td>
		</tr>
	</table>";
}
//FIM PRINCIPAL	

//INICIO ADICIONAR USUÁRIO
if($pagina == 'adicionar_album')
{
	echo "	
	<form name='form' id='form' enctype='multipart/form-data' method='post' action='fotos.php?pagina=adicionar_album-envia&alb_id=$alb_id&login=$login&n=$n'>
	<table align='center' border='0' width='900' cellspacing='0' cellpadding='0'>
		<tr>
			<td align='center'>
				<div class='titulo_adm'> $page &raquo; Adicionar  </div>
				<table align='center' cellspacing='8'>
					<tr>
						<td align='left'><input type='text' name='alb_titulo' id='alb_titulo' value='Título do Album'></td>
					</tr>
					<tr>
						<td align='left'><input type='text' name='alb_data' id='alb_data' value='Data' onkeypress='return mascaraData(this,event);' maxlength='10'> (dd/mm/aaaa)</td>
					</tr>
					<tr>
						<td align='left'>
							<textarea  name='alb_descricao' id='alb_descricao' rows='5' cols='50'>Descrição</textarea>
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td class='bordaleftright fundoBranco' height='40' colspan='4' align='center'>
				<input type='submit' id='botao' value='Adicionar' />&nbsp;&nbsp;&nbsp;&nbsp; <input type='button' id='botao_cancelar' onclick='voltar();' value='Cancelar'/>
			</td>
		</tr>
	</table>
	</form>
	";
}
//FIM ADICIONAR USUÁRIO

//INICIO EDITAR USUÁRIO
if($pagina == 'editar_album')
{
	$alb_id = $_GET['alb_id'];
	$sqledit = "SELECT * FROM album WHERE alb_id = '$alb_id'";
	$queryedit = mysql_query($sqledit,$conexao);
	$rowsedit = mysql_num_rows($queryedit);

	if($rowsedit > 0)
	{
		$alb_id = mysql_result($queryedit, 0, 'alb_id');
		$alb_titulo = mysql_result($queryedit, 0, 'alb_titulo');
		$alb_data = implode('/',array_reverse(explode('-',mysql_result($queryedit, 0, 'alb_data'))));
		$alb_descricao = mysql_result($queryedit, 0, 'alb_descricao');
		echo "
			<form name='form' id='form' enctype='multipart/form-data' method='post' action='fotos.php?pagina=editar_album-envia&alb_id=$alb_id&login=$login&n=$n'>
			<table align='center' border='0' width='900' cellspacing='0' cellpadding='0'>
				<tr>
					<td class='bordaleftright margemtab fundoBranco' align='center'>
						<div class='titulo_adm'> $page &raquo; Editar: $alb_titulo </div>
						<table align='center' cellspacing='8'>
							<tr>
								<td align='left'><input type='text' name='alb_titulo' id='alb_titulo' value='$alb_titulo' ></td>
							</tr>
							<tr>
								<td align='left'><input type='text' name='alb_data' id='alb_data' value='$alb_data' onkeypress='return mascaraData(this,event);' maxlength='10'> (dd/mm/aaaa)</td>
							</tr>
							<tr>
								<td align='left'>
									<textarea name='alb_descricao' id='alb_descricao' rows='5' cols='50'>$alb_descricao</textarea>
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td class='bordaleftright fundoBranco' height='40' colspan='4' align='center'>
						<input type='submit' id='botao' value='Salvar' />&nbsp;&nbsp;&nbsp;&nbsp; 
						<input type='button' id='botao_cancelar' onclick='javascript:document.location.href=\"fotos.php?pagina=fotos&login=$login&n=$n\";' value='Cancelar'/>
					</td>
				</tr>
			</table>
			</form>
			";
	}
}	
// FIM EDITAR USUÁRIO

//INICIO DISCIPLINA COORDENADOR
if($pagina == 'adicionar_fotos')
{
	$alb_id = $_GET['alb_id'];
	$sql = "SELECT * FROM fotos
			LEFT JOIN album ON album.alb_id = fotos.fot_album
			WHERE alb_id = '$alb_id'";
	$query = mysql_query($sql,$conexao);
	$rows = mysql_num_rows($query);
	$sql_album = "SELECT * FROM album
			WHERE alb_id = '$alb_id'";
	$query_album = mysql_query($sql_album,$conexao);
	$rows_album = mysql_num_rows($query_album);
	$alb_titulo = mysql_result($query_album,0,'alb_titulo');
	echo "
			<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js'></script>
			<script type='text/javascript' src='http://www.javascriptkit.com/script/script2/jscale/jquery.jScale.js'></script>
			<table align='center' border='0' width='900' cellspacing='0' cellpadding='0'>
				<tr>
					<td align='left'>
						<div class='titulo_adm'> $page &raquo; Album: $alb_titulo </div>
						<form name='form' id='form' enctype='multipart/form-data' method='post' action='fotos.php?pagina=adicionar_fotos-envia&alb_id=$alb_id&login=$login&n=$n'>
						<input name='add-adm' value='Adicionar Fotos' type='submit' />
						<input type='file' name='fot_foto[]' id='fot_foto' multiple /> (Selecione no máximo 20 fotos)
						</form>
						<form name='form' id='form' enctype='multipart/form-data' method='post' action='fotos.php?pagina=salvar_legendas-envia&alb_id=$alb_id&login=$login&n=$n'>
						<p>
						";
						if ($rows > 0)
						{
						echo "							
						<table align='center' width='100%' border='0' cellspacing='0' cellpadding='10' class='bordatabela'>
						<tr>
							<td class='titulo_tabela'>Fotos</td>
						</tr>
						<tr>
							<td>
								<table cellspacing='0' cellpadding='5'>
								<tr>";
						$c=0;
						for($x = 0; $x < $rows ; $x++)
						{
							$fot_id = mysql_result($query, $x, 'fot_id');
							$fot_foto = mysql_result($query, $x, 'fot_foto');
							$fot_legenda = mysql_result($query, $x, 'fot_legenda');
							
							if ($c == 0)
							{
							 $c1 = " ";
							 $c=1;
							}
							else
							{
							$c1 = "linhapar";
							 $c=0;
							} 
							$i++;
							if($i % 4 == 0 ? $coluna="</td></tr><tr><td class='bordabottom' colspan='4'></td></tr><tr>" : $coluna="</td>")
							echo "<td valign='top' align='center'>";
							if($fot_foto == '')
							{ }
							else
							{
							echo "<div id='foto'>
									<img src='imagem.php?arquivo=../$fot_foto&largura=200&altura=160'>
									<div class='excluir'><a href='fotos.php?pagina=excluir_fotos&alb_id=$alb_id&fot_id=$fot_id&login=$login&n=$n'><img  class='x' border='0' src='../imagens/delete_icon.png'></a></div>
									<div class='legenda'><textarea id='legenda' name='fot_legenda[]' >$fot_legenda</textarea></div>
									<input type='hidden' name='fot_id[]' value='$fot_id'>
								</div>
								";
							}
							echo $coluna;  
							
						}
						echo "</table>";
						}
						else
						{
							echo "Não há fotos adicionadas para este album.<br><br>";
						}
						echo "
					</td>
				</tr>
				<tr>
					<td class='bordaleftright fundoBranco' height='40' colspan='4' align='center'>
						<input type='submit' id='botao' value='Salvar' />&nbsp;&nbsp;&nbsp;&nbsp;
						<input type='button' id='botao_cancelar' onclick='javascript:document.location.href=\"fotos.php?pagina=fotos&login=$login&n=$n\";' value='Cancelar'/>
					</td>
				</tr>
			</table>
			</form>
			";
}	
// FIM DISCIPLINA COORDENADOR

//INICIO ENVIA DADOS ADICIONAR
if($pagina == "adicionar_album-envia")
{
	$alb_titulo = $_POST['alb_titulo'];
	$alb_data = implode('-',array_reverse(explode('/',$_POST['alb_data'])));
	$alb_descricao = $_POST['alb_descricao']; if($alb_descricao == 'Descrição'){$alb_descricao='';}
	
	
	$sql = "INSERT INTO album (
		alb_titulo,
		alb_descricao,
		alb_data
		) 
		VALUES 
		(
		'$alb_titulo',
		'$alb_descricao',
		'$alb_data'
		)";
	
		if(mysql_query($sql,$conexao))
		{
			echo "
			<SCRIPT linguage='JavaScript'>
				jAlert('<img src=../imagens/ok.gif> Cadastrado efetuado com sucesso.', 'Concluído', function () { window.location.href = 'fotos.php?pagina=fotos&n=$n&login=$login'; });
			</SCRIPT>
				";
		}
		else
		{
			echo "
			<SCRIPT linguage='JavaScript'>
				jAlert('<img src=../imagens/x.gif> O cadastro não foi realizado devido a um erro desconhecido. Tente novamente', 'Erro', function () { window.history.back(); });
			</SCRIPT>
				"; 
		}	
}
//FIM ENVIA DADOS ADICIONAR


//INICIO ENVIA DADOS EDITAR	
if($pagina == 'editar_album-envia')
{
	$alb_id = $_GET['alb_id'];
	$alb_titulo = $_POST['alb_titulo'];
	$alb_data = implode('-',array_reverse(explode('/',$_POST['alb_data'])));
	$alb_descricao = $_POST['alb_descricao']; if($alb_descricao == 'Descrição'){$alb_descricao='';}
	$sqlEnviaEdit = "UPDATE album SET 
					 alb_titulo = '$alb_titulo', 
					 alb_descricao = '$alb_descricao',
					 alb_data = '$alb_data'
					 WHERE alb_id = $alb_id ";
			
	if(mysql_query ($sqlEnviaEdit,$conexao))
	{
		echo "
		<SCRIPT linguage='JavaScript'>
			jAlert('<img src=../imagens/ok.gif> Dados alterados com sucesso.', 'Concluído', function () { window.location.href = 'fotos.php?pagina=fotos&login=$login&n=$n'; });
		</SCRIPT>
			";
	}
	else
	{
		echo "
		<SCRIPT linguage='JavaScript'>
			jAlert('$erro', 'Erro', function () { window.history.back(); });
		</SCRIPT>";
	}
	
}
//FIM ENVIA DADOS EDITAR


//INICIO ENVIA DADOS ADICIONAR COORDENADOR
if($pagina == "adicionar_fotos-envia")
{
	$alb_id = $_GET['alb_id'];
	require_once '../mod_includes/php/lib/WideImage.php';
	$sqledit = "SELECT * FROM album WHERE alb_id = '$alb_id'";
	$queryedit = mysql_query($sqledit,$conexao);
	$rowsedit = mysql_num_rows($queryedit);

	if($rowsedit > 0)
	{
		$alb_titulo = mysql_result($queryedit, 0, 'alb_titulo');
	}
	echo " 
	<form name='form' id='form' enctype='multipart/form-data' method='post' action='fotos.php?pagina=fotos-envia&alb_id=$alb_id&login=$login&n=$n'>
			<table align='center' border='0' width='900' cellspacing='0' cellpadding='0'>
				<tr>
					<td align='left'>
						<div class='titulo_adm'> $page &raquo; Album: $alb_titulo </div>
							<table cellspacing='0' cellpadding='7'>
								<tr>
	";
	$caminho = "../admin/fotos/$alb_id/";
	$tamanhoMaximo = 1024000/3;
	foreach($_FILES['fot_foto']['tmp_name'] as $key => $tmp_name )
	{
		$nomeArquivo = $_FILES["fot_foto"]["name"][$key];
		$tamanhoArquivo = $_FILES["fot_foto"]["size"][$key];
		$nomeTemporario = $_FILES["fot_foto"]["tmp_name"][$key];
		
		if(!empty($nomeArquivo))
		{
			if(!file_exists($caminho))
			{
				mkdir($caminho, 0755); 
			}
			$extensao = pathinfo($nomeArquivo, PATHINFO_EXTENSION);
			$arquivo = $caminho;
			$arquivo .= md5(mt_rand(1,10000).$nomeArquivo).'.'.$extensao;
		}
		
		if(!empty($nomeArquivo))
		{
			move_uploaded_file($nomeTemporario, ($arquivo));
			$msgOK = "<img src=../img/ok.gif> O arquivo <b>".$nomeArquivo."</b> foi enviado com sucesso. <br />";
			if($tamanhoArquivo > $tamanhoMaximo)
				{
					$imnfo = getimagesize($arquivo);
					$img_w = $imnfo[0];	  // largura
					$img_h = $imnfo[1];	  // altura
					if($img_w > 1024 || $img_h > 1024)
					{
						$image = WideImage::load($arquivo);
						$image = $image->resize(1024, 1024);
						$image->saveToFile($arquivo);
					}
					
				}
		}
		
		$i++;
		if($i % 5 == 0 ? $coluna="</td></tr><tr>" : $coluna="</td>")
		echo "<td class='bordabottom' valign='bottom' align='center'>";
		if($arquivo == '')
		{ }
		else
		{
		echo "  <img src='imagem.php?arquivo=$arquivo&largura=176&altura=120' border='0'><br><br>
				<input name='fot_legenda[]' id='fot_legenda' onblur=\"if (this.value == '') this.value='Legenda';\" onfocus=\"if (this.value == 'Legenda') this.value='';\" value='Legenda'>
				<input name='fot_foto[]' id='fot_foto' value='$arquivo' type='hidden'>";
		}
		echo $coluna;  
		
		
	}
		echo "</table>
		</td>
		</tr>
		<tr>
			<td class='bordaleftright fundoBranco' height='40' colspan='4' align='center'>
				<input type='submit' id='botao' value='Salvar' />&nbsp;&nbsp;&nbsp;&nbsp; <input type='button' id='botao_cancelar' onclick='voltar();' value='Cancelar'/>
			</td>
		</tr>
		</table>
		</form>
		";


}
//FIM ENVIA DADOS ADICIONAR COORDENADOR
	
// SALVA FOTOS
if($pagina == 'fotos-envia')
{
	$alb_id = $_GET['alb_id'];
	$inserido=0;
	$erro=0;
	foreach(array_combine(str_replace('../','',$_POST['fot_foto']), $_POST['fot_legenda']) as $foto => $legenda)
	{
		if($legenda == 'Legenda'){$legenda = '';}
		$sql = "INSERT INTO fotos (
		fot_album,
		fot_foto,
		fot_legenda
		) 
		VALUES 
		(
		'$alb_id',
		'$foto',
		'$legenda'
		)";
		if(mysql_query($sql,$conexao))
		{
			$inserido++;					
		}
		else
		{
			$erro++;
		}
	}
	if(!$erro)
	{
		echo "
		<SCRIPT linguage='JavaScript'>
			jAlert('<img src=../imagens/ok.gif> $inserido foto(s) inserida(s) com sucesso.', 'Concluído', function () { window.location.href = 'fotos.php?pagina=adicionar_fotos&alb_id=$alb_id&login=$login&n=$n'; });
		</SCRIPT>
			";
	}
	else
	{
		if(!$inserido){$inserido = '0';}
		echo "
		<SCRIPT linguage='JavaScript'>
			jAlert('<img src=../imagens/ok.gif> $inserido foto(s) inserida(s) com sucesso.<br><img src=../imagens/x.gif> $erro foto(s) não inserida(s).', 'Concluído', function () { window.location.href = 'fotos.php?pagina=adicionar_fotos&alb_id=$alb_id&login=$login&n=$n'; });
		</SCRIPT>
			";
	}
	
}
// FIM SALVA FOTOS

// SALVA LEGENDAS
if($pagina == 'salvar_legendas-envia')
{
	$alb_id = $_GET['alb_id'];
	$alterado=0;
	$erro=0;
	foreach(array_combine($_POST['fot_id'], $_POST['fot_legenda']) as $id => $legenda)
	{
		$sql = "UPDATE fotos SET 
		fot_legenda = '$legenda'
		WHERE fot_id = $id ";
		if(mysql_query($sql,$conexao))
		{
			$alterado++;					
		}
		else
		{
			$erro++;
		}
	}
	if(!$erro)
	{
		echo "
		<SCRIPT linguage='JavaScript'>
			jAlert('<img src=../imagens/ok.gif> Foto(s) alterada(s) com sucesso.', 'Concluído', function () { window.location.href = 'fotos.php?pagina=adicionar_fotos&alb_id=$alb_id&login=$login&n=$n'; });
		</SCRIPT>
			";
	}
	else
	{
		echo "
		<SCRIPT linguage='JavaScript'>
			jAlert('<img src=../imagens/ok.gif> Erro ao alterar a(s) foto(s).', 'Concluído', function () { window.location.href = 'fotos.php?pagina=adicionar_fotos&alb_id=$alb_id&login=$login&n=$n'; });
		</SCRIPT>
			";
	}
}
// FIM SALVA LEGENDAS


if($pagina == 'excluir_album')
{
	$alb_id = $_GET['alb_id'];
	$alb_titulo = $_GET['alb_titulo'];
	$excluir_album = $_GET['excluir_album'];
	if(empty($excluir_album))
	{
		echo "<script linguage='JavaScript'>
			  jConfirm('Deseja realmente excluir o album <font color=#0066CC>$alb_titulo</font>?', 'Confirma?', function (pergunta)
			  		 {
				  		if (pergunta)
						{
							window.location.href = 'fotos.php?pagina=excluir_album&alb_id=$alb_id&excluir_album=sim&login=$login&n=$n';
						}
						else
					  	{
				  			window.location.href = 'fotos.php?pagina=fotos&login=$login&n=$n';
			  		  	}
					 });
			  </script>";
	}
	if($excluir_album == 'sim')
	{
		$sql = "DELETE FROM album WHERE alb_id = '$alb_id'";
				
			if(mysql_query($sql,$conexao))
			{
			echo "
			<SCRIPT linguage='JavaScript'>
				jAlert('<img src=../imagens/ok.gif> Exclusão realizada com sucesso.', 'Concluído', function () { window.location.href = 'fotos.php?pagina=fotos&login=$login&n=$n'; });
			</SCRIPT>
				";
			}
			else
			{
				echo "
				<SCRIPT linguage='JavaScript'>
					jAlert('<img src=../imagens/x.gif> Não é possível excluir essa disciplina pois já está vinculado a um marinheiro.', 'Erro', function () { window.history.back (); });
				</SCRIPT>
			";
			}
				  
	}
}
if($pagina == 'excluir_fotos')
{
	$fot_id = $_GET['fot_id'];
	$alb_id = $_GET['alb_id'];
	$sql_foto = "SELECT * FROM fotos WHERE fot_id = $fot_id";
	$query_foto = mysql_query($sql_foto,$conexao);
	$rows_foto = mysql_num_rows($query_foto);
	if($rows_foto > 0)
	{
		$fot_foto = mysql_result($query_foto,0,'fot_foto');
	}
	unlink($fot_foto);
	$sql = "DELETE FROM fotos WHERE fot_id = '$fot_id'";
				
	if(mysql_query($sql,$conexao))
	{
	echo "
	<SCRIPT linguage='JavaScript'>
		jAlert('<img src=../imagens/ok.gif> Exclusão realizada com sucesso.', 'Concluído', function () { window.location.href = 'fotos.php?pagina=adicionar_fotos&alb_id=$alb_id&login=$login&n=$n'; });
	</SCRIPT>
		";
	}
	else
	{
		echo "
		<SCRIPT linguage='JavaScript'>
			jAlert('<img src=../imagens/x.gif> Erro ao realizar a exclusão.', 'Erro', function () { window.history.back (); });
		</SCRIPT>
	";
	}
				  
}

?>
<?php
include('../mod_rodape/footer.php'); 
include('../mod_includes/php/funcoes-jquery.php');
?>
