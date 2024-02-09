<head>
<meta http-equiv="Content-Language" content="pt-br">
</head>

<style type="text/css">
<!--
.style1 {
	font-family: Arial;
	font-size: 12px;
	color: #666666;
}
.style2 {
	color: #CC0000;
	font-weight: bold;
}
-->
</style>
<script language="JavaScript">
<!--
function FP_preloadImgs() {//v1.0
 var d=document,a=arguments; if(!d.FP_imgs) d.FP_imgs=new Array();
 for(var i=0; i<a.length; i++) { d.FP_imgs[i]=new Image; d.FP_imgs[i].src=a[i]; }
}

function FP_swapImg() {//v1.0
 var doc=document,args=arguments,elm,n; doc.$imgSwaps=new Array(); for(n=2; n<args.length;
 n+=2) { elm=FP_getObjectByID(args[n]); if(elm) { doc.$imgSwaps[doc.$imgSwaps.length]=elm;
 elm.$src=elm.src; elm.src=args[n+1]; } }
}

function FP_getObjectByID(id,o) {//v1.0
 var c,el,els,f,m,n; if(!o)o=document; if(o.getElementById) el=o.getElementById(id);
 else if(o.layers) c=o.layers; else if(o.all) el=o.all[id]; if(el) return el;
 if(o.id==id || o.name==id) return o; if(o.childNodes) c=o.childNodes; if(c)
 for(n=0; n<c.length; n++) { el=FP_getObjectByID(id,c[n]); if(el) return el; }
 f=o.forms; if(f) for(n=0; n<f.length; n++) { els=f[n].elements;
 for(m=0; m<els.length; m++){ el=FP_getObjectByID(id,els[n]); if(el) return el; } }
 return null;
}
// -->
</script>
<?php
$con_assunto = utf8_decode($_POST['con_assunto']);
$con_tipo = utf8_decode($_POST['con_tipo']);
$con_nome = utf8_decode($_POST['con_nome']);
$con_email = utf8_decode($_POST['con_email']);
$con_sexo = utf8_decode($_POST['con_sexo']);
$con_cidade = utf8_decode($_POST['con_cidade']);
$con_uf = utf8_decode($_POST['con_uf']);
$con_tel = utf8_decode($_POST['con_tel']);
$con_cel = utf8_decode($_POST['con_cel']);
$con_msg = utf8_decode($_POST['con_msg']);

//VERIFICAÇÃO DOS CAMPOS
if ($con_assunto == "" || $con_tipo == "" || $con_nome == "" || $con_email == "" || $con_sexo == "" || $con_cidade == "" || $con_uf == "" || $con_tel == "" || $con_cel == "" || $con_msg == "") {

   echo("<SCRIPT LANGUAGE='JavaScript'>

   alert('Favor preencha todos campos.')

   javascrip:history.back();

   </SCRIPT>"); 

  }
else {
// CONFERIR DATA

$agora = time();
$data = getdate($agora);
$dia_semana = $data[wday];
$dia_mes = $data[mday];
$mes = $data[mon];
$ano = $data[year];
switch ($dia_semana) {
        case 0:
                $dia_semana = "Domingo";
        break;
        case 1:
                $dia_semana = "Segunda-feira";
        break;
        case 2:
                $dia_semana = "Terça-feira";
        break;
        case 3:
                $dia_semana = "Quarta-feira";
        break;
        case 4:
                $dia_semana = "Quinta-feira";
        break;
        case 5:
                $dia_semana = "Sexta-feira";
        break;
        case 6:
                $dia_semana = "Sábado";
        break;
}
switch ($mes) {
        case 1:
                $mes = "Janeiro";
        break;
        case 2:
                $mes = "Fevereiro";
        break;
        case 3:
                $mes = "Março";
        break;
        case 4:
                $mes = "Abril";
        break;
        case 5:
                $mes = "Maio";
        break;
        case 6:
                $mes = "Junho";
        break;
        case 7:
                $mes = "Julho";
        break;
        case 8:
                $mes = "Agosto";
        break;
        case 9:
                $mes = "Setembro";
        break;
        case 10:
                $mes = "Outubro";
        break;
        case 11:
                $mes = "Novembro";
        break;
        case 12:
                $mes = "Dezembro";
        break;
}
$datap = $dia_semana.', '.$dia_mes.' de '.$mes.' de '.$ano;
$mensagem = "<b>Data de Preenchimento:</b> \t$datap<br /><br />";
$mensagem .= "<style>
.style1 {
	font-family: Arial;
	font-size: 12px;
	color: #666666;
	text-align:left;
}
.style2 {
	color: #CC0000;
	font-weight: bold;
}
.nomargin{
	margin: 0px 0px 0px 0px;
	padding: 0px 0px 0px 0px;
</style>

	<table class='nomargin' width=100% cellpadding=3 cellspacing=0 border=0 align='left'>
		<tr>
			<td align='right' width='200'>
				Tipo:
			</td>
			<td class='style1' style='text-align:left;'>
				\t$con_tipo
			</td>
		</tr>
		<tr>
			<td align='right'>
				\t Nome Completo:
			</td>
			<td class='style1'>
				$con_nome
			</td>
		</tr>
		<tr>
			<td align='right'>
				E-mail:
			</td>
			<td class='style1'>
				\t$con_email
			</td>
		</tr>
		<tr>
			<td align='right'>
				Sexo:
			</td>
			<td class='style1'>
				\t$con_sexo
			</td>
		</tr>
		<tr>
			<td align='right'>
				Cidade/UF:
			</td>
			<td class='style1'>
				\t$con_cidade / \t$con_uf
			</td>
		</tr>
		<tr>
			<td align='right'>
				Telefone:
			</td>
			<td class='style1'>
				\t$con_tel
			</td>
		</tr>
		<tr>
			<td align='right'>
				Celular:
			</td>
			<td class='style1'>
				\t$con_cel
			</td>
		</tr>
		<tr>
			<td align='right'>
				Mensagem:
			</td>
			<td class='style1'>
				\t$con_msg
			</td>
		</tr>
	</table>
	<br />";

//$mensagem = "$msg";
$remetente = "$con_email";
//$destinatario = "vidros.cristal@yahoo.com.br";
$destinatario = "vendas@vidracariacristalmogi.com";
$assunto = "Site - $con_assunto";
$headers = "From: ".$remetente."\nContent-type: text/html";

if(!mail($destinatario,$assunto,$mensagem,$headers)){

echo("<SCRIPT LANGUAGE='JavaScript'>
alert('Favor digitar um e-mail válido.')
javascrip:history.back();

</SCRIPT>");

//header('Location: erro.php');

} else {
echo("<div align='center'>
            <br />
            <img src='imagens/aniCarregando.gif' width='50' height='43' /><br />
            <br />
            
			<span class='style1'>Por favor, aguarde!!!<br />
            Estamos <span class='style2'> ENVIANDO SUA MENSAGEM </span>..... </span> <span class='style1'>
			
			<META HTTP-EQUIV='REFRESH' CONTENT=\"3; URL='contato_obrigado.php\"> 
			
			</span></div>");}

}
?>