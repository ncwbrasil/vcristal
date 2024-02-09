<!--jQyery para Dialog sair ---------------------------------------------------------------------------------------------------------------- -->
	    
    	<script>
		

		function carregaID(id)
		{
				jQuery.post("visualizar_cadastro.php?login=<?php echo $login;?>&n=<?php echo $n;?>&pag=<?php echo $pag;?>&fil_usr_id_self=<?php echo $fil_usr_id_self;?>&fil_usr_nome=<?php echo $fil_usr_nome;?>&fil_usr_cpf=<?php echo $fil_usr_cpf;?>&fil_usr_ativo=<?php echo $fil_usr_ativo;?>",
				{
					id_post:id	
				},
				function(valor) // Carrega o resultado acima para o campo
				{
					
					jQuery('#cadastro_retornado').html(""+valor+"");
					// Add the mask to body
					jQuery('body').append('<div id="mask"></div>');
					jQuery('#mask').fadeIn(300);
					jQuery("#cadastro_retornado").fadeIn(300);
					jQuery('#cadastro_retornado').css({"display":""});
					jQuery('body').css({'overflow':'hidden'});
					
				});
               
		}
		
		function enviaEmail(id)
		{
				jQuery.post("enviar_email.php?login=<?php echo $login;?>&n=<?php echo $n;?>&pag=<?php echo $pag;?>&fil_usr_id_self=<?php echo $fil_usr_id_self;?>&fil_usr_nome=<?php echo $fil_usr_nome;?>&fil_usr_cpf=<?php echo $fil_usr_cpf;?>&fil_usr_ativo=<?php echo $fil_usr_ativo;?>",
				{
					id_post:id	
				},
				function(valor) // Carrega o resultado acima para o campo
				{
					
					jQuery('#envia_email').html(""+valor+"");
					// Add the mask to body
					jQuery('body').append('<div id="mask"></div>');
					jQuery('#mask').fadeIn(300);
					jQuery("#envia_email").fadeIn(300);
					jQuery('#envia_email').css({"display":""});
					jQuery('#cadastro_retornado').css({"display":"none"});
					jQuery('body').css({'overflow':'hidden'});
					
				});
				
               
		}
    	jQuery(document).ready(function() {
		
				//Set the center alignment padding + border see css style
				var popMargTopCadastro = (jQuery("#cadastro_retornado").height() + 24) / 2; 
				var popMargLeftCadastro = (jQuery("#cadastro_retornado").width() + 24) / 2; 
				
				var popMargTopEmail = (jQuery("#envia_email").height() + 24) / 2; 
				var popMargLeftEmail = (jQuery("#envia_email").width() + 24) / 2; 
		
				jQuery("#cadastro_retornado").css({ 
					'margin-top' : -popMargTopCadastro,
					'margin-left' : -popMargLeftCadastro
				});
				
				jQuery("#envia_email").css({ 
					'margin-top' : -popMargTopEmail,
					'margin-left' : -popMargLeftEmail
				});
			// When clicking on the button close or the mask layer the popup closed
			jQuery('input.close_cadastro, #mask').live('click', function() { 
	  			jQuery('#mask , .cadastro').fadeOut(100 , function() {
					jQuery('#mask').remove();  
					jQuery('body').css({'overflow':'visible'});
				}); 
				return false;
			});
			jQuery('input.close_email, #mask').live('click', function() { 
	  			jQuery('#mask , .email').fadeOut(100 , function() {
					jQuery('#mask').remove();  
					jQuery('body').css({'overflow':'visible'});
				}); 
				return false;
			});
		});

		</script>	
        
<!-- final jQyery para Dialog sair -------------------------------------------------------------------------------------------------------- -->
