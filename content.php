<?php
	require_once("includes/connection.php");
?>
<?php
	require_once("includes/functions.php");
?>                
<?php
	include("includes/header.php");
?>    
<?php
		findRequired();
?>
<nav>
	<?php navigation(); ?>
    
        <br/>
        <a href="new_subject.php">+ Adicionar assunto</a>
</nav>
        
<article>
            
            <h2>
			<?php if(isset($sel_s))
			{
				echo urldecode($sel_s["menu_name"]);
			}
			else if(isset($sel_p))
			{
				echo urldecode($sel_p["menu_name"]);
			}?>
            
            </h2><br/>
            <?php	if(isset($sel_p))
				{
				echo urldecode($sel_p["content"]);
				}
			?>	

<?php
	require("includes/footer.php");
?>     