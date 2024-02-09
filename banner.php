<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Banner</title>
<script type="text/javascript" src="mod_includes/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="js/jquery.cycle.all.min.js"></script>
<script type="text/javascript"> 
	jQuery(document).ready(function(){
		jQuery('#slide_fotos').cycle({
			fx: 'none',
			pager: '#pager' ,
			timeout: 4000,
			next:   '#next',
			prev:   '#prev',
			pause: 1
		});
	
		jQuery('#pause').click(function() { 
			jQuery('#slide_fotos').cycle('pause'); 
		});
		
		jQuery('#play').click(function() { 
			jQuery('#slide_fotos').cycle('resume'); 
		});
	
	});
</script>
<!--[if IE 7]>
<style>
#slideshow {width: 946px;height: 350px;	position: relative; margin:0 auto;}
#slideshow img { width: 960px; height: 350px; position: absolute;left:-40px; border:none;}
<style>
<![endif]-->

<style  type="text/css">
#slideshow 					{ width:960px;height: 350px;position:relative; margin:0 auto;}
#slide_fotos p 				{ position: absolute;right:0;top:210px;z-index:3;padding:10px 20px;}
#slide_fotos 				{ height: 100%;overflow: hidden;}
#slide_fotos  img			{ border:none;}
#pager 						{ position:relative; z-index:10; margin:0 auto; text-align:center; display:inline; margin-left:0px; top:-58px;}
#pager a 					{ text-decoration:none; color:#000;width:10px;height:10px;line-height:10px;text-align:center;display:inline-block;font-size:1px;font-family:Arial, Helvetica, sans-serif; margin:4px; color:#507364; background:#507364;-moz-border-radius:10px; -webkit-border-radius:10px; border-radius:10px;  border:1px solid #EFEFEF;}
#pager a.activeSlide 		{ color:#2E483D; text-decoration:underline; background:#2E483D;-moz-border-radius:10px; -webkit-border-radius:10px; border-radius:10px; border:1px solid #EFEFEF;}
#slideshow-control #prev 	{ position:absolute; left:-40px; top:100px; z-index:9999; border:none;}
#slideshow-control #next 	{ position:absolute; right:-40px; top:100px; z-index:9999; border:none;}
#comandos					{ margin:0 auto; margin-top:15px; text-align:center; z-index:9999;}
</style>

</head>

<body>
    <div id="slideshow">
        <div id="slideshow-control">
            <a id="prev" href="#"><img src="imagens/prev.png" alt="Anterior" border='0' /></a>
            <a id="next" href="#"><img src="imagens/next.png" alt="Próximo" border='0' /></a>
        </div>
        <ul id="slide_fotos">
            <li><a href='#' target='_blank'><img src='imagens/banner-01.jpg' border='0' /></a></li>
            <li><a href='#' target='_blank'><img src='imagens/banner-02.jpg' border='0' /></a></li>
        </ul>
    </div>
    <div id="comandos">
        <div id="pager"></div><!-- /pager -->
    </div>
</body>
</html>