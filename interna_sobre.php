  <div class="light-wrapper">
    <div class="container inner">
      <h3 class="section-title">Sobre Mim</h3>
      <div class="row team">
        <div class="col-sm-10">
			<?
			$sql = "SELECT * FROM empresa WHERE empresa='1'";
			$resultado = mysql_query($sql)
			or die ("Não foi possível realizar a consulta ao banco de dados");
						

			while ($linha=mysql_fetch_array($resultado)) {	
				$descricao_br  = $linha["descricao"];	
				$descricao  	 = str_replace("<br />", "", $descricao_br) ;
				$descricao			 = str_replace("../uploads/", "./uploads/", $descricao) ;	
				
				echo "$descricao";
			}
			?>
        </div>
      </div>
    </div>
  </div>
  <!-- /.light-wrapper -->
  
	<!-- Depoimentos -->
	<? include("./modulos/depoimentos/view_depoimentos.php"); ?>
	
	<!-- Instagram -->
	<? include("./modulos/instagram/view_instagram.php"); ?>