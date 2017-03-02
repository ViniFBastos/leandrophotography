<?
	include("./modulos/banner/view_banner.php");
?>


  <div class="light-wrapper">
    <div class="container inner">
      <h1 class="intro text-center">Olá! Eu sou o Leandro Silva</h1>
      <p class="lead main text-center">Para entender meus clientes, procuro sempre entrar em seus mundos e sentir o que passa em cada um.</p>
      <h3 class="section-title pull-left">Meus últimos cliques</h3>

	   <? include("./modulos/portfolio/view_portfolio_home.php"); ?>
	
      <div class="divide70"></div>
      <h3 class="section-title text-center">Será um prazer trabalhar com você</h3>
      <div class="text-center"> <a href="interna.php?referencia=portfolio" class="btn btn-large fixed-width">Ver mais trabalhos</a> <a href="interna.php?referencia=contato" class="btn btn-large btn-maroon fixed-width">Entrar em contato</a> </div>
    </div>
    <!-- /.container --> 
  </div>
  <!-- /.light-wrapper -->
  
	<!-- Serviços -->
	<? include("./modulos/servicos/view_servicos.php"); ?>
	
	<!-- Clientes -->
	<? include("./modulos/clientes/view_clientes.php"); ?>

	<!-- Depoimentos -->
	<? include("./modulos/depoimentos/view_depoimentos.php"); ?>

  
	<!-- Blog - Posts Home -->
	<? include("./modulos/blog/view_posts_home.php"); ?>

  
	<!-- Instagram -->
	<? include("./modulos/instagram/view_instagram.php"); ?>
  


 </div>