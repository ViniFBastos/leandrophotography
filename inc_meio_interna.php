
<?php

switch ($_GET["referencia"])
{
	case "blog":
		include("interna_blog.php");
	break;
	
	case "sobre":
		include("interna_sobre.php");
	break;
	
	case "servicos":
		include("interna_servicos.php");
	break;

	case "portfolio":
		include("interna_portfolio.php");
	break;
	
	case "contato":
		include("interna_contato.php");
	break;
	
	case "fazenda":
		include("interna_fazenda.php");
	break;
	
	case "rocknbeer":
		include("interna_rocknbeer.php");
	break;

		
}

?>


