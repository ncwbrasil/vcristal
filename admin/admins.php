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
<script type="text/javascript" src="../mod_includes/js/alert/jquery.alerts.js"></script></head>
<body>
<?php	
include('../mod_includes/php/verificalogin.php');
include('../mod_topo_admin/topo.php');
$pagina = $_GET['pagina'];
$page = "<a href='admins.php?pagina=admins&login=$login&n=$n'>Admins</a>";
$sql = "SELECT * FROM admins";
$query = mysql_query($sql,$conexao);
$rows = mysql_num_rows($query);
if($pagina == "admins")
{
	echo "
	<table align='center' border='0' width='940' cellspacing='0' cellpadding='0'>
		<tr>
			<td align='left'>
				<div class='titulo_adm'> $page  </div>
				<div id='icone'>
				<a href='admins.php?pagina=adicionar_admins&login=$login&n=$n'><input name='add-adm' value='Novo' type='button' /></a>
				</div>";
				if ($rows > 0)
				{
				echo "
				<table align='center' width='98%' border='0' cellspacing='0' cellpadding='10' class='bordatabela'>
					<tr>
						<td class='titulo_tabela'>ID</td>
						<td class='titulo_tabela'>Nome</td>
						<td class='titulo_tabela'>Login</td>
						<td class='titulo_tabela' align='center'>Ativo</td>
						<td class='titulo_tabela' align='center'>Editar</td>
						<td class='titulo_tabela' align='center'>Excluir</td>
					</tr>";
						$c=0;
						for($x = 0; $x < $rows ; $x++)
						{
							$adm_id = mysql_result($query, $x, 'adm_id');
							$adm_nome = mysql_result($query, $x, 'adm_nome');
							$adm_login = mysql_result($query, $x, 'adm_login');
							$adm_senha = mysql_result($query, $x, 'adm_senha');
							$adm_ativo = mysql_result($query, $x, 'adm_ativo');
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
							echo "<tr class='$c1'>
									  <td>";print str_pad($adm_id,2,"0",STR_PAD_LEFT);echo "</td>
									  <td>$adm_nome</td>
									  <td>$adm_login</td>
									  <td align=center>";
									  if($adm_ativo == 1)
									  {
										echo "<a href='admins.php?pagina=desativar_user&adm_id=$adm_id&adm_login=$adm_login&login=$login&n=$n'><img border='0' src='../imagens/ative-icon.png' width='15' height='15'></a>";
									  }
									  else
									  {
										echo "<a href='admins.php?pagina=ativar_user&adm_id=$adm_id&adm_login=$adm_login&login=$login&n=$n'><img border='0' src='../imagens/inative-icon.png' width='15' height='15'></a>";
									  }
									  echo "
									  </td>
									  <td align=center><a href='admins.php?pagina=editar_admins&adm_id=$adm_id&adm_login=$adm_login&login=$login&n=$n'><img border='0' src='../imagens/edit_icon.png' width='20' height='20'></a></td>
									  <td align=center><a href='admins.php?pagina=excluir_admins&adm_id=$adm_id&adm_nome=$adm_nome&adm_login=$adm_login&login=$login&n=$n'><img border='0' src='../imagens/delete_icon.png' width='20' height='20'></a></td>
								  </tr>";
						}
					}
					else
					{
					echo "Não há nenhum administrador cadastrado.";
					}
						echo "
				</table>
			</td>
		</tr>
	</table>";
}
//FIM PRINCIPAL	

//INICIO ADICIONAR USUÁRIO
if($pagina == 'adicionar_admins')
{
	echo "	
	<form name='form' id='form' enctype='multipart/form-data' method='post' action='admins.php?pagina=adicionar_admins-envia&id=$id&login=$login&n=$n'>
	<table align='center' border='0' width='900' cellspacing='0' cellpadding='0'>
		<tr>
			<td align='center'>
				<div class='titulo_adm'> $page &raquo; Adicionar  </div>
				<table align='center' cellspacing='8'>
					<tr>
						<td align='center'><input type='text' name='adm_nome'  id='adm_nome' value='Nome'></td>
					</tr>
					<tr>
						<td align='center'><input type='text' name='adm_login' id='adm_login' value='Login'></td>
					</tr>
					<tr>
						<td align='center'><input type='password' name='adm_senha' id='adm_senha' value='Senha'></td>
					</tr>
					<tr>
						<td align='center' valign='middle'><input type='radio' name='adm_ativo' value='1'> Ativo &nbsp;&nbsp;&nbsp;
												  <input type='radio' name='adm_ativo' value='0'> Inativo<br>
						</td>	
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td class='bordaleftright fundoBranco' height='40' colspan='4' align='center'>
				<input type='submit' id='botao' value='Adicionar' /> <input type='button' id='botao_cancelar' onclick='voltar();' value='Cancelar'/>
			</td>
		</tr>
	</table>
	</form>
	";
}
//FIM ADICIONAR USUÁRIO

//INICIO EDITAR USUÁRIO
if($pagina == 'editar_admins')
{
	$adm_id = $_GET['adm_id'];
	$sqledit = "SELECT * FROM admins WHERE adm_id = '$adm_id'";
	$queryedit = mysql_query($sqledit,$conexao);
	$rowsedit = mysql_num_rows($queryedit);

	if($rowsedit > 0)
	{
		$adm_id = str_pad(mysql_result($queryedit, 0, 'adm_id'),3,"0",STR_PAD_LEFT);
		$adm_nome = mysql_result($queryedit, 0, 'adm_nome');
		$adm_login = mysql_result($queryedit, 0, 'adm_login');
		$adm_senha = mysql_result($queryedit, 0, 'adm_senha');
		$adm_ativo = mysql_result($queryedit, 0, 'adm_ativo');
		if($adm_login == "administrador")
		{		
			echo "
			<SCRIPT linguage='JavaScript'>
				jAlert('<img src=../imagens/x.gif> O administrador <font color=#0066CC>$adm_nome</font> não pode ser alterado.', 'Erro', function () { window.history.back (); });
			</SCRIPT>
		";
		}
		else
		{	
			echo "
			<form name='form' id='form' enctype='multipart/form-data' method='post' action='admins.php?pagina=editar_admins-envia&adm_id=$adm_id&login=$login&n=$n'>
			<table align='center' border='0' width='900' cellspacing='0' cellpadding='0'>
				<tr>
					<td class='bordaleftright margemtab fundoBranco' align='center'>
						<div class='titulo_adm'> $page &raquo; Editar: $adm_nome   </div>
						<table align='center' cellspacing='8'>
							<tr>
								<td align='center'><input type='text' name='adm_nome' id='adm_nome' value='$adm_nome' ></td>
							</tr>
							<tr>
								<td align='center'><input type='text' name='adm_login' id='adm_login' value='$adm_login' ></td>
							</tr>
							<tr>
								<td align='center'><input type='password' name='adm_senha' id='adm_senha' value='$adm_senha'></td>
							</tr>
							<tr>
								<td align='center'>";
								if($adm_ativo == 1)
								{
									echo "<input type='radio' name='adm_ativo' value='1' checked> Ativo &nbsp;&nbsp;&nbsp;
										  <input type='radio' name='adm_ativo' value='0'> Inativo
										 ";
								}
								else
								{
									echo "<input type='radio' name='adm_ativo' value='1'> Ativo &nbsp;&nbsp;&nbsp;
										  <input type='radio' name='adm_ativo' value='0' checked> Inativo
										 ";
								}
								echo "
								</td>	
							</tr>
						</table>
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
	}
}	
// FIM EDITAR USUÁRIO

//INICIO ENVIA DADOS ADICIONAR
if($pagina == "adicionar_admins-envia")
{
	$adm_nome = $_POST['adm_nome'];
	$adm_login = $_POST['adm_login'];
	$adm_senha = md5($_POST['adm_senha']);
	$adm_ativo = $_POST['adm_ativo'];
	$sql = "SELECT * FROM admins WHERE ADM_LOGIN = '$adm_login'";
	$query = mysql_query($sql,$conexao);
	$rows = mysql_num_rows($query);
	if ($rows > 0)
	{
		echo "
		<SCRIPT linguage='JavaScript'>
			jAlert('<img src=../imagens/x.gif> O administrador <font color=#0066CC>$adm_login</font> já existe. Por favor escolha outro login.', 'Erro', function () { window.location.href = 'admins.php?pagina=adicionar_admins&login=$login&n=$n'; });
		</SCRIPT>
			 ";
	}
	else
	{
		$sql = "INSERT INTO admins (
		adm_nome,
		adm_login,
		adm_senha,
		adm_ativo
		) 
		VALUES 
		(
		'$adm_nome',
		'$adm_login',
		'$adm_senha',
		'$adm_ativo'
		)";
	
		if(mysql_query($sql,$conexao))
		{
			echo "
			<SCRIPT linguage='JavaScript'>
				jAlert('<img src=../imagens/ok.gif> Cadastrado efetuado com sucesso.', 'Concluído', function () { window.location.href = 'admins.php?pagina=admins&n=$n&login=$login'; });
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
}
//FIM ENVIA DADOS ADICIONAR

//INICIO ENVIA DADOS EDITAR	
if($pagina == 'editar_admins-envia')
{
	$adm_id = $_GET['adm_id'];
	$adm_nome = $_POST['adm_nome'];
	$adm_login = $_POST['adm_login'];
	$adm_senha = $_POST['adm_senha'];
	$adm_ativo = $_POST['adm_ativo'];
	$sqledit = "SELECT * FROM admins WHERE ADM_ID = '$adm_id'";
	$queryedit = mysql_query($sqledit,$conexao);
	$rowsedit = mysql_num_rows($queryedit);

	if($rowsedit > 0)
	{
		$logincompara = mysql_result($queryedit, 0, 'adm_login');
		$senhacompara = mysql_result($queryedit, 0, 'adm_senha');
		
	}
	if($adm_senha == $senhacompara && $adm_login == $logincompara)
	{
		$sqlEnviaEdit = "UPDATE admins SET ADM_NOME = '$adm_nome', ADM_ATIVO = '$adm_ativo' WHERE ADM_ID = $adm_id ";
	}
	elseif($adm_senha != $senhacompara && $adm_login != $logincompara)
	{
		$sqllogin = "SELECT * FROM admins WHERE ADM_LOGIN = '$adm_login'";
		$querylogin = mysql_query($sqllogin,$conexao);
		$rowslogin = mysql_num_rows($querylogin);
		if ($rowslogin > 0)
		{
			$erro = "<img src=../imagens/x.gif> O Administrador <font color=#0066CC>".$adm_login."</font> já existe. Por favor escolha outro login.";
		}
		else
		{
			$sqlEnviaEdit = "UPDATE admins SET ADM_NOME = '$adm_nome', ADM_LOGIN = '$adm_login', ADM_SENHA = md5('$adm_senha'), ADM_ATIVO = '$adm_ativo' WHERE ADM_ID = $adm_id ";
		}
	}
	elseif($adm_senha == $senhacompara && $adm_login != $logincompara)
	{
		$sqllogin = "SELECT * FROM admins WHERE ADM_LOGIN = '$adm_login'";
		$querylogin = mysql_query($sqllogin,$conexao);
		$rowslogin = mysql_num_rows($querylogin);
		if ($rowslogin > 0)
		{
			$erro = "<img src=../imagens/x.gif> O Administrador <font color=#0066CC>".$adm_login."</font> já existe. Por favor escolha outro login.";
		}
		else
		{
			$sqlEnviaEdit = "UPDATE admins SET ADM_NOME = '$adm_nome', ADM_LOGIN = '$adm_login', ADM_ATIVO = '$adm_ativo' WHERE ADM_ID = $adm_id ";
		}
	}
	elseif($adm_senha != $senhacompara && $adm_login == $logincompara)
	{ 
		$sqlEnviaEdit = "UPDATE admins SET ADM_NOME = '$adm_nome', ADM_SENHA = md5('$adm_senha'), ADM_ATIVO = '$adm_ativo' WHERE ADM_ID = $adm_id ";
	}

	if(mysql_query ($sqlEnviaEdit,$conexao))
	{
		echo "
		<SCRIPT linguage='JavaScript'>
			jAlert('<img src=../imagens/ok.gif> Dados alterados com sucesso.', 'Concluído', function () { window.location.href = 'admins.php?pagina=admins&login=$login&n=$n'; });
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

if($pagina == 'excluir_admins')
{
	$adm_id = $_GET['adm_id'];
	$adm_login = $_GET['adm_login'];
	$adm_nome = $_GET['adm_nome'];
	$excluir_admins = $_GET['excluir_admins'];
	if($adm_login == 'administrador')
	{
		echo "
				<SCRIPT linguage='JavaScript'>
					jAlert('<img src=../imagens/x.gif> O administrador <font color=#0066CC>".$adm_nome."</font> não pode ser excluído.', 'Erro', function () { window.history.back (); });
				</SCRIPT>
			";
	}
	elseif(empty($excluir_admins))
	{
		echo "<script linguage='JavaScript'>
			  jConfirm('Deseja realmente excluir o administrador <font color=#0066CC>$adm_nome</font>?', 'Confirma?', function (pergunta)
			  		 {
				  		if (pergunta)
						{
							window.location.href = 'admins.php?pagina=excluir_admins&adm_id=$adm_id&excluir_admins=sim&login=$login&n=$n';
						}
						else
					  	{
				  			window.location.href = 'admins.php?pagina=admins&login=$login&n=$n';
			  		  	}
					 });
			  </script>";
	}
	if($excluir_admins == 'sim')
	{
		$sql = "DELETE FROM admins WHERE ADM_ID = '$adm_id'";
				
			if(mysql_query($sql,$conexao))
			{
			echo "
			<SCRIPT linguage='JavaScript'>
				jAlert('<img src=../imagens/ok.gif> Exclusão realizada com sucesso.', 'Concluído', function () { window.location.href = 'admins.php?pagina=admins&login=$login&n=$n'; });
			</SCRIPT>
				";
			}
			else
			{
				echo "
				<SCRIPT linguage='JavaScript'>
					jAlert('<img src=../imagens/x.gif> A exclusão não foi realizada devido a um erro desconhecido.', 'Erro', function () { window.history.back (); });
				</SCRIPT>
			";
			}
				  
	}
}
if($pagina == 'ativar_user')
{
	$adm_id = $_GET['adm_id'];
	$adm_login = $_GET['adm_login'];

	$sql = "SELECT * FROM admins WHERE ADM_ID = '$adm_id'";
	$query = mysql_query($sql,$conexao);
	$adm_login = mysql_result($query, 0, 'adm_login');
	$adm_nome = mysql_result($query, 0, 'adm_nome');
	if($adm_login == "administrador" )
	{
		echo "
		<SCRIPT linguage='JavaScript'>
			jAlert('<img src=../imagens/x.gif> O administrador <font color=#0066CC>$adm_nome</font> não pode ser alterado.', 'Erro', function () { window.history.back (); });
		</SCRIPT>
			";
	}
	else
	{
		$sql = "UPDATE admins SET ADM_ATIVO = 1 WHERE ADM_ID = '$adm_id' ";
		mysql_query($sql,$conexao);
		echo "
		<script linguage='JavaScript'>
			window.location.href = 'admins.php?pagina=admins&login=$login&n=$n';
		</script>
			 ";
	}

}
if($pagina == 'desativar_user')
{
	$adm_id = $_GET['adm_id'];
	$adm_login = $_GET['adm_login'];

	$sql = "SELECT * FROM admins WHERE ADM_ID = '$adm_id'";
	$query = mysql_query($sql,$conexao);
	$adm_login = mysql_result($query, 0, 'adm_login');
	$adm_nome = mysql_result($query, 0, 'adm_nome');
	if($adm_login == "administrador")
	{
		echo "
		<SCRIPT linguage='JavaScript'>
			jAlert('<img src=../imagens/x.gif> O administrador <font color=#0066CC>$adm_nome</font> não pode ser alterado.', 'Erro', function () { window.history.back (); });
		</SCRIPT>";
	}
	else
	{
		$sql = "UPDATE admins SET ADM_ATIVO = 0 WHERE ADM_ID = '$adm_id' ";
		mysql_query($sql,$conexao);
		echo "
		<script linguage='JavaScript'>
			window.location.href = 'admins.php?pagina=admins&login=$login&n=$n';
		</script>
			 ";
	}

}

?>
<?php
include('../mod_rodape/footer.php'); 
include('../mod_includes/php/funcoes-jquery.php');
?>
