

  <div class="wood center" style="width:904px">
   
  <div id="eventos" class="slide">

      <?php do { ?>
      
        <img src="<?php echo $row_Slideshow_Produtos['img']; ?>" width="902" height="280">
        
      <?php } while ($row_Slideshow_Produtos = mysql_fetch_assoc($Slideshow_Produtos)); ?>
          
  </div>
 
  </div>
  
<h1 style="padding-top:10px; padding-bottom:10px;">Shows</h1>

  <div class="wood center" style="width:904px">
   
  <div id="shows" class="slide">

      <?php do { ?>

          <img src=" <?php echo $row_Slideshow_Eventos['img']; ?>" width="902" height="280">

        <?php } while ($row_Slideshow_Eventos = mysql_fetch_assoc($Slideshow_Eventos)); ?>
    
  </div>
 
  </div>

<h1 style="padding-top:10px; padding-bottom:10px;">Mural</h1>

  <div class="wood center" style="width:904px">
  
  		<div id="mural">
        
        </div>

  </div> 

</div>

</div>

<aside id="right_content" name="right_content">
Meu Carrinho
</aside>

<footer>

</footer>



		$sel_categoria = confirmaConsulta(mysql_query("SELECT nome FROM categoria WHERE id=".($_GET["categoria"])));
