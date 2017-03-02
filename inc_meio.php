<?
	include("./modulos/banner/view_banner.php");
?>


<div class="quem-somos">
	<div class="mascara-quemsomos"></div>
	<div class="container">
		<div class="texto-banner">
	        <div class="content-texto">
	            <div class="text-inner">
	            	<h1>Leandro Silva</h1>
	            	<p>Não sou muito bom em palavras quando o assunto é "EU"... mais para que esta descrição de "Sobre Mim" fique preenchida, vou deixar aberto para que vocês conheçam um pouco do meu trabalho e possa tirar suas próprias conclusões. positivas e negativas eu vou agradecer ao máximo. Porque é através deste contato que eu posso crescer, e cada vez mais saber atender a cada cliente que hoje chega ate "MIM" e me pede para registrar e eternizar momentos importantes da suas vidas.</p>
	            </div>
	        </div>
	    </div>
	</div>
</div>

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