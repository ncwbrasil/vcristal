//function CarregarCombo(){
jQuery(document).ready(function()
{
	//SELECT DO FILTRO IES
	jQuery("select[name=ies]").change(function()
	{
		//var ies = document.getElementById('ies').value;
		//jQuery('#catadm').load('procura.php?ies='+ies);
		jQuery("select[name=catadm]").html('<option value="0">Carregando...</option>');
		jQuery("select[name=orgacad]").html('<option value="0">Carregando...</option>');
		jQuery("select[name=uf]").html('<option value="0">Carregando...</option>');
		jQuery("select[name=municipio]").html('<option value="0">Carregando...</option>');
		jQuery("select[name=areageral]").html('<option value="0">Carregando...</option>');
		jQuery("select[name=modensino]").html('<option value="0">Carregando...</option>');
		jQuery("select[name=grauacad]").html('<option value="0">Carregando...</option>');
		jQuery("select[name=nivelacad]").html('<option value="0">Carregando...</option>');
		jQuery.post("procura_ies.php?ano=2010&catadm=on",
						{
							ies:jQuery(this).val()
						},
						function(valor) // Carrega o resultado acima para o campo catadm
						{
							jQuery("select[name=catadm]").html(valor);
						}
					)
		jQuery.post("procura_ies.php?ano=2010&orgacad=on",
						{
							ies:jQuery(this).val()
						},
						function(valor) // Carrega o resultado acima para o campo catadm
						{
							jQuery("select[name=orgacad]").html(valor);
						}
					)
		jQuery.post("procura_ies.php?ano=2010&uf=on",
						{
							ies:jQuery(this).val()
						},
						function(valor) // Carrega o resultado acima para o campo catadm
						{
							jQuery("select[name=uf]").html(valor);
						}
					)
		jQuery.post("procura_ies.php?ano=2010&municipio=on",
						{
							ies:jQuery(this).val()
						},
						function(valor) // Carrega o resultado acima para o campo catadm
						{
							jQuery("select[name=municipio]").html(valor);
						}
					)
		jQuery.post("procura_ies.php?ano=2010&areageral=on",
						{
							ies:jQuery(this).val()
						},
						function(valor) // Carrega o resultado acima para o campo catadm
						{
							jQuery("select[name=areageral]").html(valor);
						}
					)
		jQuery.post("procura_ies.php?ano=2010&modensino=on",
						{
							ies:jQuery(this).val()
						},
						function(valor) // Carrega o resultado acima para o campo catadm
						{
							jQuery("select[name=modensino]").html(valor);
						}
					)
		jQuery.post("procura_ies.php?ano=2010&grauacad=on",
						{
							ies:jQuery(this).val()
						},
						function(valor) // Carrega o resultado acima para o campo catadm
						{
							jQuery("select[name=grauacad]").html(valor);
						}
					)
		jQuery.post("procura_ies.php?ano=2010&nivelacad=on",
						{
							ies:jQuery(this).val()
						},
						function(valor) // Carrega o resultado acima para o campo catadm
						{
							jQuery("select[name=nivelacad]").html(valor);
						}
					)
	})
	
	//SELECT DO FILTRO CATEGORIA ADMINISTRATIVA
	jQuery("select[name=catadm]").change(function()
	{
		jQuery("select[name=orgacad]").html('<option value="0">Carregando...</option>');
		jQuery("select[name=uf]").html('<option value="0">Carregando...</option>');
		jQuery("select[name=municipio]").html('<option value="0">Carregando...</option>');
		jQuery("select[name=areageral]").html('<option value="0">Carregando...</option>');
		jQuery("select[name=modensino]").html('<option value="0">Carregando...</option>');
		jQuery("select[name=grauacad]").html('<option value="0">Carregando...</option>');
		jQuery("select[name=nivelacad]").html('<option value="0">Carregando...</option>');
		jQuery.post("procura_catadm.php?ano=2010&orgacad=on",
						{
							catadm:jQuery(this).val()
						},
						function(valor) // Carrega o resultado acima para o campo catadm
						{
							jQuery("select[name=orgacad]").html(valor);
						}
					)
		jQuery.post("procura_catadm.php?ano=2010&uf=on",
						{
							catadm:jQuery(this).val()
						},
						function(valor) // Carrega o resultado acima para o campo catadm
						{
							jQuery("select[name=uf]").html(valor);
						}
					)
		jQuery.post("procura_catadm.php?ano=2010&municipio=on",
						{
							catadm:jQuery(this).val()
						},
						function(valor) // Carrega o resultado acima para o campo catadm
						{
							jQuery("select[name=municipio]").html(valor);
						}
					)
		jQuery.post("procura_catadm.php?ano=2010&areageral=on",
						{
							catadm:jQuery(this).val()
						},
						function(valor) // Carrega o resultado acima para o campo catadm
						{
							jQuery("select[name=areageral]").html(valor);
						}
					)
		jQuery.post("procura_catadm.php?ano=2010&modensino=on",
						{
							catadm:jQuery(this).val()
						},
						function(valor) // Carrega o resultado acima para o campo catadm
						{
							jQuery("select[name=modensino]").html(valor);
						}
					)
		jQuery.post("procura_catadm.php?ano=2010&grauacad=on",
						{
							catadm:jQuery(this).val()
						},
						function(valor) // Carrega o resultado acima para o campo catadm
						{
							jQuery("select[name=grauacad]").html(valor);
						}
					)
		jQuery.post("procura_catadm.php?ano=2010&nivelacad=on",
						{
							catadm:jQuery(this).val()
						},
						function(valor) // Carrega o resultado acima para o campo catadm
						{
							jQuery("select[name=nivelacad]").html(valor);
						}
					)
					
		
	})
	//SELECT DO FILTRO ORGANIZACAO ACADÊMICA
	jQuery("select[name=orgacad]").change(function()
	{
		jQuery("select[name=uf]").html('<option value="0">Carregando...</option>');
		jQuery("select[name=municipio]").html('<option value="0">Carregando...</option>');
		jQuery("select[name=areageral]").html('<option value="0">Carregando...</option>');
		jQuery("select[name=modensino]").html('<option value="0">Carregando...</option>');
		jQuery("select[name=grauacad]").html('<option value="0">Carregando...</option>');
		jQuery("select[name=nivelacad]").html('<option value="0">Carregando...</option>');
		jQuery.post("procura_orgacad.php?ano=2010&uf=on",
						{
							orgacad:jQuery(this).val(),
							catadm:jQuery('#catadm').val()
						},
						function(valor) // Carrega o resultado acima para o campo catadm
						{
							jQuery("select[name=uf]").html(valor);
						}
					)
		jQuery.post("procura_orgacad.php?ano=2010&municipio=on",
						{
							orgacad:jQuery(this).val(),
							catadm:jQuery('#catadm').val()
						},
						function(valor) // Carrega o resultado acima para o campo catadm
						{
							jQuery("select[name=municipio]").html(valor);
						}
					)
		jQuery.post("procura_orgacad.php?ano=2010&areageral=on",
						{
							orgacad:jQuery(this).val(),
							catadm:jQuery('#catadm').val()
						},
						function(valor) // Carrega o resultado acima para o campo catadm
						{
							jQuery("select[name=areageral]").html(valor);
						}
					)
		jQuery.post("procura_orgacad.php?ano=2010&modensino=on",
						{
							orgacad:jQuery(this).val(),
							catadm:jQuery('#catadm').val()
						},
						function(valor) // Carrega o resultado acima para o campo catadm
						{
							jQuery("select[name=modensino]").html(valor);
						}
					)
		jQuery.post("procura_orgacad.php?ano=2010&grauacad=on",
						{
							orgacad:jQuery(this).val(),
							catadm:jQuery('#catadm').val()
						},
						function(valor) // Carrega o resultado acima para o campo catadm
						{
							jQuery("select[name=grauacad]").html(valor);
						}
					)
		jQuery.post("procura_orgacad.php?ano=2010&nivelacad=on",
						{
							orgacad:jQuery(this).val(),
							catadm:jQuery('#catadm').val()
						},
						function(valor) // Carrega o resultado acima para o campo catadm
						{
							jQuery("select[name=nivelacad]").html(valor);
						}
					)
	})
	//SELECT DO FILTRO UF
	jQuery("select[name=uf]").change(function()
	{
		jQuery("select[name=municipio]").html('<option value="0">Carregando...</option>');
		jQuery("select[name=areageral]").html('<option value="0">Carregando...</option>');
		jQuery("select[name=modensino]").html('<option value="0">Carregando...</option>');
		jQuery("select[name=grauacad]").html('<option value="0">Carregando...</option>');
		jQuery("select[name=nivelacad]").html('<option value="0">Carregando...</option>');
		jQuery.post("procura_uf.php?ano=2010&municipio=on",
						{
							uf:jQuery(this).val(),
							ies:jQuery('#ies').val(),
							orgacad:jQuery('#orgacad').val(),
							catadm:jQuery('#catadm').val()
						},
						function(valor) // Carrega o resultado acima para o campo catadm
						{
							jQuery("select[name=municipio]").html(valor);
						}
					)
		jQuery.post("procura_uf.php?ano=2010&areageral=on",
						{
							uf:jQuery(this).val(),
							ies:jQuery('#ies').val(),
							orgacad:jQuery('#orgacad').val(),
							catadm:jQuery('#catadm').val()
						},
						function(valor) // Carrega o resultado acima para o campo catadm
						{
							jQuery("select[name=areageral]").html(valor);
						}
					)
		jQuery.post("procura_uf.php?ano=2010&modensino=on",
						{
							uf:jQuery(this).val(),
							ies:jQuery('#ies').val(),
							orgacad:jQuery('#orgacad').val(),
							catadm:jQuery('#catadm').val()
						},
						function(valor) // Carrega o resultado acima para o campo catadm
						{
							jQuery("select[name=modensino]").html(valor);
						}
					)
		jQuery.post("procura_uf.php?ano=2010&grauacad=on",
						{
							uf:jQuery(this).val(),
							ies:jQuery('#ies').val(),
							orgacad:jQuery('#orgacad').val(),
							catadm:jQuery('#catadm').val()
						},
						function(valor) // Carrega o resultado acima para o campo catadm
						{
							jQuery("select[name=grauacad]").html(valor);
						}
					)
		jQuery.post("procura_uf.php?ano=2010&nivelacad=on",
						{
							uf:jQuery(this).val(),
							ies:jQuery('#ies').val(),
							orgacad:jQuery('#orgacad').val(),
							catadm:jQuery('#catadm').val()
						},
						function(valor) // Carrega o resultado acima para o campo catadm
						{
							jQuery("select[name=nivelacad]").html(valor);
						}
					)
	})
	//SELECT DO FILTRO CIDADE
	jQuery("select[name=municipio]").change(function()
	{
		jQuery("select[name=uf]").html('<option value="0">Carregando...</option>');
		jQuery("select[name=areageral]").html('<option value="0">Carregando...</option>');
		jQuery("select[name=modensino]").html('<option value="0">Carregando...</option>');
		jQuery("select[name=grauacad]").html('<option value="0">Carregando...</option>');
		jQuery("select[name=nivelacad]").html('<option value="0">Carregando...</option>');
		jQuery.post("procura_municipio.php?ano=2010&uf=on",
						{
							municipio:jQuery(this).val(),
							ies:jQuery('#ies').val(),
							orgacad:jQuery('#orgacad').val(),
							catadm:jQuery('#catadm').val()
						},
						function(valor) // Carrega o resultado acima para o campo catadm
						{
							jQuery("select[name=uf]").html(valor);
						}
					)
		jQuery.post("procura_municipio.php?ano=2010&areageral=on",
						{
							municipio:jQuery(this).val(),
							ies:jQuery('#ies').val(),
							orgacad:jQuery('#orgacad').val(),
							catadm:jQuery('#catadm').val()
						},
						function(valor) // Carrega o resultado acima para o campo catadm
						{
							jQuery("select[name=areageral]").html(valor);
						}
					)
		jQuery.post("procura_municipio.php?ano=2010&modensino=on",
						{
							municipio:jQuery(this).val(),
							ies:jQuery('#ies').val(),
							orgacad:jQuery('#orgacad').val(),
							catadm:jQuery('#catadm').val()
						},
						function(valor) // Carrega o resultado acima para o campo catadm
						{
							jQuery("select[name=modensino]").html(valor);
						}
					)
		jQuery.post("procura_municipio.php?ano=2010&grauacad=on",
						{
							municipio:jQuery(this).val(),
							ies:jQuery('#ies').val(),
							orgacad:jQuery('#orgacad').val(),
							catadm:jQuery('#catadm').val()
						},
						function(valor) // Carrega o resultado acima para o campo catadm
						{
							jQuery("select[name=grauacad]").html(valor);
						}
					)
		jQuery.post("procura_municipio.php?ano=2010&nivelacad=on",
						{
							municipio:jQuery(this).val(),
							ies:jQuery('#ies').val(),
							orgacad:jQuery('#orgacad').val(),
							catadm:jQuery('#catadm').val()
						},
						function(valor) // Carrega o resultado acima para o campo catadm
						{
							jQuery("select[name=nivelacad]").html(valor);
						}
					)
	})
	//SELECT DO FILTRO AREA GERAL
	jQuery("select[name=areageral]").change(function()
	{
		jQuery("select[name=modensino]").html('<option value="0">Carregando...</option>');
		jQuery("select[name=grauacad]").html('<option value="0">Carregando...</option>');
		jQuery("select[name=nivelacad]").html('<option value="0">Carregando...</option>');
		jQuery.post("procura_areageral.php?ano=2010&modensino=on",
						{
							areageral:jQuery(this).val(),
							ies:jQuery('#ies').val(),
							orgacad:jQuery('#orgacad').val(),
							catadm:jQuery('#catadm').val(),
							municipio:jQuery('#municipio').val(),
							uf:jQuery('#uf').val()
						},
						function(valor) // Carrega o resultado acima para o campo catadm
						{
							jQuery("select[name=modensino]").html(valor);
						}
					)
		jQuery.post("procura_areageral.php?ano=2010&grauacad=on",
						{
							areageral:jQuery(this).val(),
							ies:jQuery('#ies').val(),
							orgacad:jQuery('#orgacad').val(),
							catadm:jQuery('#catadm').val(),
							municipio:jQuery('#municipio').val(),
							uf:jQuery('#uf').val()
						},
						function(valor) // Carrega o resultado acima para o campo catadm
						{
							jQuery("select[name=grauacad]").html(valor);
						}
					)
		jQuery.post("procura_areageral.php?ano=2010&nivelacad=on",
						{
							areageral:jQuery(this).val(),
							ies:jQuery('#ies').val(),
							orgacad:jQuery('#orgacad').val(),
							catadm:jQuery('#catadm').val(),
							municipio:jQuery('#municipio').val(),
							uf:jQuery('#uf').val()
						},
						function(valor) // Carrega o resultado acima para o campo catadm
						{
							jQuery("select[name=nivelacad]").html(valor);
						}
					)
	})
	//SELECT DO FILTRO MOD. ENSINO
	jQuery("select[name=modensino]").change(function()
	{
		jQuery("select[name=grauacad]").html('<option value="0">Carregando...</option>');
		jQuery("select[name=nivelacad]").html('<option value="0">Carregando...</option>');
		jQuery.post("procura_modensino.php?ano=2010&grauacad=on",
						{
							modensino:jQuery(this).val(),
							ies:jQuery('#ies').val(),
							orgacad:jQuery('#orgacad').val(),
							catadm:jQuery('#catadm').val(),
							municipio:jQuery('#municipio').val(),
							uf:jQuery('#uf').val(),
							areageral:jQuery('#areageral').val()
						},
						function(valor) // Carrega o resultado acima para o campo catadm
						{
							jQuery("select[name=grauacad]").html(valor);
						}
					)
		jQuery.post("procura_modensino.php?ano=2010&nivelacad=on",
						{
							modensino:jQuery(this).val(),
							ies:jQuery('#ies').val(),
							orgacad:jQuery('#orgacad').val(),
							catadm:jQuery('#catadm').val(),
							municipio:jQuery('#municipio').val(),
							uf:jQuery('#uf').val(),
							areageral:jQuery('#areageral').val()
						},
						function(valor) // Carrega o resultado acima para o campo catadm
						{
							jQuery("select[name=nivelacad]").html(valor);
						}
					)
	})
	//SELECT DO FILTRO GRAU ACAD.
	jQuery("select[name=grauacad]").change(function()
	{
		jQuery("select[name=nivelacad]").html('<option value="0">Carregando...</option>');
		jQuery.post("procura_grauacad.php?ano=2010&nivelacad=on",
						{
							grauacad:jQuery(this).val(),
							ies:jQuery('#ies').val(),
							orgacad:jQuery('#orgacad').val(),
							catadm:jQuery('#catadm').val(),
							municipio:jQuery('#municipio').val(),
							uf:jQuery('#uf').val(),
							areageral:jQuery('#areageral').val(),
							modensino:jQuery('#modensino').val()
						},
						function(valor) // Carrega o resultado acima para o campo catadm
						{
							jQuery("select[name=nivelacad]").html(valor);
						}
					)
	})
})	