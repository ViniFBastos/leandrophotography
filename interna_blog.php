<?php 
	if( isset($_GET["post"] ) && !empty($_GET["post"]))
		include("./modulos/blog/view_post.php");
	elseif( isset($_GET["categoria"] ) && !empty($_GET["categoria"]))
		include("./modulos/blog/view_posts_categoria.php");
	elseif( isset($_GET["busca"] ) && !empty($_GET["busca"]))
		include("./modulos/blog/view_busca_posts.php");
	else
		include("./modulos/blog/view_todos_posts.php");
		
?>	


