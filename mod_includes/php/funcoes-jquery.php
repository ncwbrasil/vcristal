<script language="javascript">
function PrintDiv(div)
{
	$('#'+div).show().printElement();
}
function submitenter(myfield,e)
{
var keycode;
if (window.event) keycode = window.event.keyCode;
else if (e) keycode = e.which;
else return true;

if (keycode == 13)
{
if(jQuery("#adm_login").val() == "" || jQuery("#adm_login").val() == "Login" || jQuery("#adm_senha").val() == "" || jQuery("#adm_senha").val() == "Senha")
	{	
	}
	else
	{
		jQuery("#form_login").submit();
	}
return false;
}
else
return true;
}

//--------------------------------------VERIFICAÇÃO FORMULÁRIO---------------------------------------------//

/* LOGIN */
jQuery("#adm_login").click(function(){if(jQuery("#adm_login").val() == "Login"){jQuery("#adm_login").val("");}
	jQuery("#adm_login").blur( function (){if(jQuery("#adm_login").val() == ""){jQuery("#adm_login").val("Login");}});});
	
jQuery("#adm_senha").click(function(){if(jQuery("#adm_senha").val() == "Senha"){jQuery("#adm_senha").val("");}
	jQuery("#adm_senha").blur( function (){if(jQuery("#adm_senha").val() == ""){jQuery("#adm_senha").val("Senha");}});});

/* ADMINISTRADORES */
jQuery("#adm_nome").click(function(){if(jQuery("#adm_nome").val() == "Nome"){jQuery("#adm_nome").val("");}
	jQuery("#adm_nome").blur( function (){if(jQuery("#adm_nome").val() == ""){jQuery("#adm_nome").val("Nome");}});});
	
/* DISCIPLINAS */
jQuery("#dis_nome").click(function(){if(jQuery("#dis_nome").val() == "Nome da Disciplina"){jQuery("#dis_nome").val("");}
	jQuery("#dis_nome").blur( function (){if(jQuery("#dis_nome").val() == ""){jQuery("#dis_nome").val("Nome da Disciplina");}});});

jQuery("#dis_data").click(function(){if(jQuery("#dis_data").val() == "Data"){jQuery("#dis_data").val("");}
	jQuery("#dis_data").blur( function (){if(jQuery("#dis_data").val() == ""){jQuery("#dis_data").val("Data");}});});

jQuery("#dis_local").click(function(){if(jQuery("#dis_local").val() == "Local"){jQuery("#dis_local").val("");}
	jQuery("#dis_local").blur( function (){if(jQuery("#dis_local").val() == ""){jQuery("#dis_local").val("Local");}});});

jQuery("#dis_objetivo").click(function(){if(jQuery("#dis_objetivo").html() == "Objetivos"){jQuery("#dis_objetivo").this.select();}
	jQuery("#dis_objetivo").blur( function (){if(jQuery("#dis_objetivo").val() == ""){jQuery("#dis_objetivo").val("Objetivos");}});});

jQuery("#dis_local").click(function(){if(jQuery("#dis_local").val() == "Local"){jQuery("#dis_local").val("");}
	jQuery("#dis_local").blur( function (){if(jQuery("#dis_local").val() == ""){jQuery("#dis_local").val("Local");}});});

jQuery("#dis_local").click(function(){if(jQuery("#dis_local").val() == "Local"){jQuery("#dis_local").val("");}
	jQuery("#dis_local").blur( function (){if(jQuery("#dis_local").val() == ""){jQuery("#dis_local").val("Local");}});});
	
/* NOTICIAS */
jQuery("#nt_legenda").click(function(){if(jQuery("#nt_legenda").val() == "Legenda da Imagem"){jQuery("#nt_legenda").val("");}
	jQuery("#nt_legenda").blur( function (){if(jQuery("#nt_legenda").val() == ""){jQuery("#nt_legenda").val("Legenda da Imagem");}});});

jQuery("#nt_titulo").click(function(){if(jQuery("#nt_titulo").val() == "Título"){jQuery("#nt_titulo").val("");}
	jQuery("#nt_titulo").blur( function (){if(jQuery("#nt_titulo").val() == ""){jQuery("#nt_titulo").val("Título");}});});
	
jQuery("#nt_subtitulo").click(function(){if(jQuery("#nt_subtitulo").val() == "Subtítulo"){jQuery("#nt_subtitulo").val("");}
	jQuery("#nt_subtitulo").blur( function (){if(jQuery("#nt_subtitulo").val() == ""){jQuery("#nt_subtitulo").val("Subtítulo");}});});

jQuery("#nt_descricao").click(function(){if(jQuery("#nt_descricao").val() == "Descrição"){jQuery("#nt_descricao").val("");}
	jQuery("#nt_descricao").blur( function (){if(jQuery("#nt_descricao").val() == ""){jQuery("#nt_descricao").val("Descrição");}});});

jQuery("#nt_data").click(function(){if(jQuery("#nt_data").val() == "Data"){jQuery("#nt_data").val("");}
	jQuery("#nt_data").blur( function (){if(jQuery("#nt_data").val() == ""){jQuery("#nt_data").val("Data");}});});

jQuery("#nt_tags").click(function(){if(jQuery("#nt_tags").val() == "Tags"){jQuery("#nt_tags").val("");}
	jQuery("#nt_tags").blur( function (){if(jQuery("#nt_tags").val() == ""){jQuery("#nt_tags").val("Tags");}});});

jQuery("#nt_ativo").click(function(){if(jQuery("#nt_ativo").val() == "Status"){jQuery("#nt_ativo").val("");}
	jQuery("#nt_ativo").blur( function (){if(jQuery("#nt_ativo").val() == ""){jQuery("#nt_ativo").val("Status");}});});

/* RANKING */
jQuery("#rnk_nome").click(function(){if(jQuery("#rnk_nome").val() == "Nome"){jQuery("#rnk_nome").val("");}
	jQuery("#rnk_nome").blur( function (){if(jQuery("#rnk_nome").val() == ""){jQuery("#rnk_nome").val("Nome");}});});

jQuery("#rnk_idade").click(function(){if(jQuery("#rnk_idade").val() == "Idade"){jQuery("#rnk_idade").val("");}
	jQuery("#rnk_idade").blur( function (){if(jQuery("#rnk_idade").val() == ""){jQuery("#rnk_idade").val("Idade");}});});

jQuery("#rnk_hab_nautica").click(function(){if(jQuery("#rnk_hab_nautica").val() == "Habilitação Náutica"){jQuery("#rnk_hab_nautica").val("");}
	jQuery("#rnk_hab_nautica").blur( function (){if(jQuery("#rnk_hab_nautica").val() == ""){jQuery("#rnk_hab_nautica").val("Habilitação Náutica");}});});

jQuery("#rnk_anos_exp").click(function(){if(jQuery("#rnk_anos_exp").val() == "Anos de Experiência"){jQuery("#rnk_anos_exp").val("");}
	jQuery("#rnk_anos_exp").blur( function (){if(jQuery("#rnk_anos_exp").val() == ""){jQuery("#rnk_anos_exp").val("Anos de Experiência");}});});

jQuery("#rnk_cursos_extras").click(function(){if(jQuery("#rnk_cursos_extras").val() == "Cursos extras curriculares"){jQuery("#rnk_cursos_extras").val("");}
	jQuery("#rnk_cursos_extras").blur( function (){if(jQuery("#rnk_cursos_extras").val() == ""){jQuery("#rnk_cursos_extras").val("Cursos extras curriculares");}});});

/* FOTOS */
jQuery("#alb_titulo").click(function(){if(jQuery("#alb_titulo").val() == "Título do Album"){jQuery("#alb_titulo").val("");}
	jQuery("#alb_titulo").blur( function (){if(jQuery("#alb_titulo").val() == ""){jQuery("#alb_titulo").val("Título do Album");}});});

jQuery("#alb_data").click(function(){if(jQuery("#alb_data").val() == "Data"){jQuery("#alb_data").val("");}
	jQuery("#alb_data").blur( function (){if(jQuery("#alb_data").val() == ""){jQuery("#alb_data").val("Data");}});});

jQuery("#alb_descricao").click(function(){if(jQuery("#alb_descricao").val() == "Descrição"){jQuery("#alb_descricao").val("");}
	jQuery("#alb_descricao").blur( function (){if(jQuery("#alb_descricao").val() == ""){jQuery("#alb_descricao").val("Descrição");}});});

jQuery("#fot_legenda").click(function(){if(jQuery("#fot_legenda").val() == "Legenda"){jQuery("#fot_legenda").val("");}
	jQuery("#fot_legenda").blur( function (){if(jQuery("#fot_legenda").val() == ""){jQuery("#fot_legenda").val("Legenda");}});});

/* ENVIA EMAIL AMIGO */

jQuery("#eam_nome").click(function(){if(jQuery("#eam_nome").val() == "Seu Nome"){jQuery("#eam_nome").val("");}
	jQuery("#eam_nome").blur( function (){if(jQuery("#eam_nome").val() == ""){jQuery("#eam_nome").val("Seu Nome");}});});

jQuery("#eam_email").click(function(){if(jQuery("#eam_email").val() == "Seu Email"){jQuery("#eam_email").val("");}
	jQuery("#eam_email").blur( function (){if(jQuery("#eam_email").val() == ""){jQuery("#eam_email").val("Seu Email");}});});

jQuery("#eam_email_amigo").click(function(){if(jQuery("#eam_email_amigo").val() == "Emails dos amigos (separados por ponto e vírgula \" ; \" )"){jQuery("#eam_email_amigo").val("");}
	jQuery("#eam_email_amigo").blur( function (){if(jQuery("#eam_email_amigo").val() == ""){jQuery("#eam_email_amigo").val("Emails dos amigos (separados por ponto e vírgula \" ; \" )");}});});

jQuery("#eam_mensagem").click(function(){if(jQuery("#eam_mensagem").val() == "Mensagem"){jQuery("#eam_mensagem").val("");}
	jQuery("#eam_mensagem").blur( function (){if(jQuery("#eam_mensagem").val() == ""){jQuery("#eam_mensagem").val("Mensagem");}});});


function enviaEmail(id)
{
	jQuery.post("noticias-email-amigo.php",
	{
		nt_id:id	
	},
	function(valor) // Carrega o resultado acima para o campo
	{
		
		jQuery('#envia_email').html(""+valor+"");
		// Add the mask to body
		jQuery('body').append('<div id="mask"></div>');
		jQuery('#mask').fadeIn(300);
		jQuery("#envia_email").fadeIn(300);
		jQuery('#envia_email').css({"display":""});
		jQuery('body').css({'overflow':'hidden'});
		
	});
}
function enviaEmailAlbum(id)
{
	jQuery.post("fotos-email-amigo.php",
	{
		alb_id:id	
	},
	function(valor) // Carrega o resultado acima para o campo
	{
		
		jQuery('#envia_email_album').html(""+valor+"");
		// Add the mask to body
		jQuery('body').append('<div id="mask_album"></div>');
		jQuery('#mask_album').fadeIn(300);
		jQuery("#envia_email_album").fadeIn(300);
		jQuery('#envia_email_album').css({"display":""});
		jQuery('body').css({'overflow':'hidden'});
		
	});
}
function disciplina(id)
{
	jQuery.post("disciplina.php",
	{
		dis_id:id	
	},
	function(valor) // Carrega o resultado acima para o campo
	{
		jQuery('#disciplina').html(""+valor+"");
		// Add the mask to body
		jQuery('body').append('<div id="mask_disciplina"></div>');
		jQuery('#mask_disciplina').fadeIn(300);
		jQuery("#disciplina").fadeIn(300);
		jQuery('#disciplina').css({"display":""});
		jQuery('body').css({'overflow':'hidden'});
	});
}

jQuery(document).ready(function(){
	
			
	/* DIV ENVIAR PARA AMIGO */
	var popMargTopDisciplina = (jQuery("#disciplina").height() + 24) / 2; 
	var popMargLeftDisciplina = (jQuery("#disciplina").width() + 24) / 2; 
	
	var popMargTopEmail = (jQuery("#envia_email").height() + 24) / 2; 
	var popMargLeftEmail = (jQuery("#envia_email").width() + 24) / 2; 

	var popMargTopEmailAlbum = (jQuery("#envia_email_album").height() + 24) / 2; 
	var popMargLeftEmailAlbum = (jQuery("#envia_email_album").width() + 24) / 2; 

	
	jQuery("#envia_email").css({ 
		'margin-top' : -popMargTopEmail,
		'margin-left' : -popMargLeftEmail
	});
	
	jQuery("#envia_email_album").css({ 
		'margin-top' : -popMargTopEmailAlbum,
		'margin-left' : -popMargLeftEmailAlbum
	});
	
	jQuery("#disciplina").css({ 
		'margin-top' : -popMargTopDisciplina,
		'margin-left' : -popMargLeftDisciplina
	});
	
	
	// When clicking on the button close or the mask layer the popup closed

	jQuery('input.close_email, #mask').live('click', function() { 
		jQuery('#mask , .email').fadeOut(100 , function() {
			jQuery('#mask').remove();  
			jQuery('body').css({'overflow':'visible'});
		}); 
		return false;
	});
	
	jQuery('input.close_email_album, #mask_album').live('click', function() { 
		jQuery('#mask_album , .email_album').fadeOut(100 , function() {
			jQuery('#mask_album').remove();  
			jQuery('body').css({'overflow':'visible'});
		}); 
		return false;
	});
	
	jQuery('a.close, #mask_disciplina').live('click', function() { 
		jQuery('#mask_disciplina , .disciplina').fadeOut(100 , function() {
			jQuery('#mask_disciplina').remove();  
			jQuery('body').css({'overflow':'visible'});
		}); 
		return false;
	});
	/* FIM DIV ENVIAR PARA AMIGO */
	

	/* RESIZE DA LEGENDA DA FOTO - TEXTAREA */

	var n = jQuery("#foto textarea").size();
	for(x=0;x<n;x++)
	{
    var text = document.getElementsByTagName("textarea")[x];
    function resize () {
        text.style.height = 'auto';
        text.style.height = text.scrollHeight-20+'px';
    }
    /* 0-timeout to get the already changed text */
    function delayedResize () {
        window.setTimeout(resize, 0);
    }
    observe(text, 'change',  resize);
    observe(text, 'cut',     delayedResize);
    observe(text, 'paste',   delayedResize);
    observe(text, 'drop',    delayedResize);
    observe(text, 'keydown', delayedResize);

    text.focus();
    text.select();
    resize();
	}
/* FIM DO RESIZE */	 	
		
	function sleep(milliseconds) {
		setTimeout(function(){
		var start = new Date().getTime();
		while ((new Date().getTime() - start) < milliseconds){
		// Do nothing
		}
		},0);
		}
	function blink(selector) {
		jQuery(selector).fadeOut('slow', function() {
			jQuery(this).fadeIn('slow', function() {
				blink(this);
			});
		});
	}
	blink('.piscar');
	
	function validaCPF(cpf)
	{
		cpf = cpf.replace(".", "");
		cpf = cpf.replace(".", "");
		cpf = cpf.replace("-", "");
	
		  var numeros, digitos, soma, i, resultado, digitos_iguais;
		  digitos_iguais = 1;
		  if (cpf.length < 11)
				return false;
		  for (i = 0; i < cpf.length - 1; i++)
				if (cpf.charAt(i) != cpf.charAt(i + 1))
					  {
					  digitos_iguais = 0;
					  break;
					  }
		  if (!digitos_iguais)
				{
				numeros = cpf.substring(0,9);
				digitos = cpf.substring(9);
				soma = 0;
				for (i = 10; i > 1; i--)
					  soma += numeros.charAt(10 - i) * i;
				resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
				if (resultado != digitos.charAt(0))
					   return false;
				numeros = cpf.substring(0,10);
				soma = 0;
				for (i = 11; i > 1; i--)
					  soma += numeros.charAt(11 - i) * i;
				resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
				if (resultado != digitos.charAt(1))
					  return false;
				return true;
				}
		  else
				return false;
		
	}
	
	function validaCNPJ(cnpj)
	{
		//cpf = cpf.replace(".", "");
		//cpf = cpf.replace(".", "");
		//cpf = cpf.replace("-", "");
	
		 cnpj = cnpj.replace(/[^\d]+/g,'');
	 
		if(cnpj == '') return false;
		 
		if (cnpj.length != 14)
			return false;
	 
		// Elimina CNPJs invalidos conhecidos
		if (cnpj == "00000000000000" || 
			cnpj == "11111111111111" || 
			cnpj == "22222222222222" || 
			cnpj == "33333333333333" || 
			cnpj == "44444444444444" || 
			cnpj == "55555555555555" || 
			cnpj == "66666666666666" || 
			cnpj == "77777777777777" || 
			cnpj == "88888888888888" || 
			cnpj == "99999999999999")
			return false;
			 
		// Valida DVs
		tamanho = cnpj.length - 2
		numeros = cnpj.substring(0,tamanho);
		digitos = cnpj.substring(tamanho);
		soma = 0;
		pos = tamanho - 7;
		for (i = tamanho; i >= 1; i--) {
		  soma += numeros.charAt(tamanho - i) * pos--;
		  if (pos < 2)
				pos = 9;
		}
		resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
		if (resultado != digitos.charAt(0))
			return false;
			 
		tamanho = tamanho + 1;
		numeros = cnpj.substring(0,tamanho);
		soma = 0;
		pos = tamanho - 7;
		for (i = tamanho; i >= 1; i--) {
		  soma += numeros.charAt(tamanho - i) * pos--;
		  if (pos < 2)
				pos = 9;
		}
		resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
		if (resultado != digitos.charAt(1))
			  return false;
			   
		return true;
		
	}
	
	function validaRG(numero){
		
		numero = numero.replace(".", "");
		numero = numero.replace(".", "");
		numero = numero.replace("-", "");
	 	
	 /*
	 ##  Igor Carvalho de Escobar
	 ##    www.webtutoriais.com
	 ##   Java Script Developer
	 */
	 var numero = numero.split("");
	 tamanho = numero.length;
	 vetor = new Array(tamanho);
	 
	if(tamanho>=1)
	{
	 vetor[0] = parseInt(numero[0]) * 2; 
	}
	if(tamanho>=2){
	 vetor[1] = parseInt(numero[1]) * 3; 
	}
	if(tamanho>=3){
	 vetor[2] = parseInt(numero[2]) * 4; 
	}
	if(tamanho>=4){
	 vetor[3] = parseInt(numero[3]) * 5; 
	}
	if(tamanho>=5){
	 vetor[4] = parseInt(numero[4]) * 6; 
	}
	if(tamanho>=6){
	 vetor[5] = parseInt(numero[5]) * 7; 
	}
	if(tamanho>=7){
	 vetor[6] = parseInt(numero[6]) * 8; 
	}
	if(tamanho>=8){
	 vetor[7] = parseInt(numero[7]) * 9; 
	}
	if(tamanho>=9){
		if(numero[8] == 'x')
		{
			vetor[8] = 10*100;
		}
		else
		{
	 		vetor[8] = parseInt(numero[8]) * 100;
		}
	}
	 
	 total = 0;
	 
	if(tamanho>=1){
	 total += vetor[0];
	}
	if(tamanho>=2){
	 total += vetor[1]; 
	}
	if(tamanho>=3){
	 total += vetor[2]; 
	}
	if(tamanho>=4){
	 total += vetor[3]; 
	}
	if(tamanho>=5){
	 total += vetor[4]; 
	}
	if(tamanho>=6){
	 total += vetor[5]; 
	}
	if(tamanho>=7){
	 total += vetor[6];
	}
	if(tamanho>=8){
	 total += vetor[7]; 
	}
	if(tamanho>=9){
	 total += vetor[8]; 
	}
	 
	 alert(total);
	 resto = total % 11;
	if(resto!=0){
	return false;
	}
	else{
	return true;
	}
	}

	
	
	jQuery("#entrar").click(function()
	{
		if(jQuery("#adm_login").val() == "" || jQuery("#adm_login").val() == "Login" || jQuery("#adm_senha").val() == "" || jQuery("#adm_senha").val() == "Senha")
		{	
		}
		else
		{
			jQuery("#form_login").submit();
		}
		
	});
	
});
//------------------------------------ FIM VERIFICAÇÃO FORMULÁRIO ------------------------------------------//
</script>