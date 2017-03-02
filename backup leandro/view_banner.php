<!-- Ínicio BANNER ROTATIVO  -->
  <div class="light-wrapper">
    <div class="container inner bp0">
      <div class="tp-banner-container">
        <div class="tp-banner" >
          <ul>
		  
			<?

			$cont = 1;
			$sql = "SELECT * FROM banner WHERE (status='1' AND data_inicio <= CURDATE() AND data_termino >= CURDATE()) OR (status='1' AND data_inicio <= CURDATE() AND expirar = '2') ORDER BY rand() LIMIT 5";
			$resultado = mysql_query($sql)
			or die ("Não foi possível realizar a consulta ao banco de dados");

			while ($linha=mysql_fetch_array($resultado)) {

				$titulo	 		 = $linha["titulo"];
				$foto	 		 = $linha["foto"];
				$tipo	 		 = $linha["tipo"];
				
				if($tipo == 2)
				{
				?>
					<li data-transition="fade" data-delay="9000"  data-saveperformance="on"  data-title="<?=$titulo?>"> <img src="./fotos/<?=$foto?>"  alt="" data-lazyload="./fotos/<?=$foto?>" data-bgposition="right top" data-kenburns="on" data-duration="12000" data-ease="Power0.easeInOut" data-bgfit="115" data-bgfitend="100" data-bgpositionend="center bottom">
					  <div class="caption sfr title light-layer" data-x="45" data-y="400" data-speed="700" data-start="2300" data-easing="Sine.easeOut"><?=$titulo?></div>
					</li>				
				<?	
				}
				else{
				?>
					<li data-transition="fade" data-delay="5000"> <img src="./fotos/m_<?=$foto?>" alt="" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat" />
					  <div class="caption sfr title light-layer" data-x="45" data-y="400" data-speed="700" data-start="2300" data-easing="Sine.easeOut"><?=$titulo?></div>
					</li>				
				<?
				}
			}			
			?>					  
		  

          </ul>
          <div class="tp-bannertimer tp-bottom"></div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.light-wrapper -->
<!-- FIM BANNER ROTATIVO  -->
