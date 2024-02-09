<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Vidraçaria Cristal - Contato</title>
<link href="css/estilo.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php include("mod_topo/topo.php") ?>

<!--INICIO DO CONTEUDO-->
<?php include("banner.php") ?>

<div class="wrapper">
	<table width="100%" border="0" cellspacing="0" cellpadding="0" class="body">
      <tr>
        <td width="100%">
        	<p class="titulo">Contato</p>
                <p>Entre em contato conosco através do formulário abaixo. Em breve responderemos à sua mensagem.
                
                  <form method="POST" action="envia.php">
                      <table align="center" border="0" cellspacing="5" cellpadding="0" class="contato">
                        <tr>
                            <td width="200" align="right">
                                Assunto da Mensagem:
                            </td>
                            <td align="left">
                                <select type="text" name="con_assunto">
                                    <option value=''>Selecione</option>
                                    <option value='Orçamento'>Orçamento</option>
                                    <option value='Informação'>Informação</option>
                                    <option value='Reclamação'>Reclamação</option>
                                    <option value='Vendas'>Vendas</option>
                                    <option value='Trabalhe Conosco'>Trabalhe Conosco</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td align="right">
                                Tipo:
                            </td>
                            <td align="left">
                               <input type='radio' name='con_tipo' value='Pessoa Física' /> Pessoa Física &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                               <input type='radio' name='con_tipo' value='Pessoa Jurídica' /> Pessoa Jurídica
                            </td>
                        </tr>
                        <tr>
                            <td align="right">
                                Nome completo:
                            </td>
                            <td align="left">
                                <input type="text" name="con_nome" class="form">
                            </td>
                        </tr>
                        <tr>
                             <td align="right">
                                E-mail:
                             </td>
                             <td align="left">
                                <input type="text" name="con_email" class="form">
                             </td>
                        </tr>
                        <tr>
                            <td align="right">
                                Sexo:
                            </td>
                            <td align="left">
                               <input type='radio' name='con_sexo' value='Masculino' /> Masculino &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                               <input type='radio' name='con_sexo' value='Feminino' /> Feminino
                            </td>
                        </tr>
                        <tr>
                             <td align="right">
                                Cidade:
                             </td>
                             <td align="left">
                                <input type="text" name="con_cidade" class="form_cidade">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                UF: <select name='con_uf'>
                                  <option value=''>Selecione</option>
                                  <option value='AC'>AC</option>
                                  <option value='AL'>AL</option>
                                  <option value='AM'>AM</option>
                                  <option value='AP'>AP</option>
                                  <option value='BA'>BA</option>
                                  <option value='CE'>CE</option>
                                  <option value='DF'>DF</option>
                                  <option value='ES'>ES</option>
                                  <option value='GO'>GO</option>
                                  <option value='MA'>MA</option>
                                  <option value='MG'>MG</option>
                                  <option value='MT'>MT</option>
                                  <option value='MS'>MS</option>
                                  <option value='PA'>PA</option>
                                  <option value='PB'>PB</option>
                                  <option value='PE'>PE</option>
                                  <option value='PI'>PI</option>
                                  <option value='PR'>PR</option>
                                  <option value='RJ'>RJ</option>
                                  <option value='RN'>RN</option>
                                  <option value='RO'>RO</option>
                                  <option value='RR'>RR</option>
                                  <option value='RS'>RS</option>
                                  <option value='SC'>SC</option>
                                  <option value='SE'>SE</option>
                                  <option value='SP'>SP</option>
                                  <option value='TO'>TO</option>
                                </select>
                             </td>
                        </tr>
                        <tr>
                            <td align="right">
                                Telefone c/ DDD:
                            </td>
                            <td align="left">
                                <input type="text" name="con_tel" class="form" onkeypress='mascaraTEL(this);' maxlength="14">
                            </td>
                        </tr>
                        <tr>
                            <td align="right">
                                Celular c/ DDD:
                            </td>
                            <td align="left">
                                <input type="text" name="con_cel" class="form" onkeypress='mascaraTEL(this);'  maxlength="14">
                            </td>
                        </tr>
                        <tr>
                            <td align="right">
                                Mensagem:
                            </td>
                            <td align="left">
                                <textarea rows="5" name="con_msg" cols="41" class="form"></textarea>
                            </td>
                        </tr>
                   </table>
    
                      <p align="center">
                        <input name="B1" type="submit" value="ENVIAR" class="but_form">				  
                      </p>
                    </form>
                  <!--Fim Formulario-->
        </td>
      </tr>
    </table>
</div>

<!--FIM DO CONTEUDO-->
<?php include("mod_rodape/rodape.php") ?>
</body>
</html>