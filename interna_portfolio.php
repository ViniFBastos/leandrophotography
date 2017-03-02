<?php 
	if( isset($_GET["galeria"] ) && !empty($_GET["galeria"]))
		include("./modulos/portfolio/view_portfolio_detalhado.php");
	else
		include("./modulos/portfolio/view_todos_portfolios.php");
		
?>	

