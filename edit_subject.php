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
 </nav>
        
<article>
            
            <h2>Edit Subject: <?php echo $sel_s['menu_name']; ?></h2>
            <br/>
            <form action="edit_subject.php" method="post">
            	<p>Subject
                <input type="text" name="menu_name" value="" id="menu_name" /></p>
            <br/>
                <p>Position
                <select name="position">
                <?php
							$result_set = getAllSubjects();
							$num = mysql_num_rows($result_set);
							
							for($count = 1; $count <= $num;$count ++)
							{
								                      echo"<option value=\"{$count}\">{$count}</option>";
							}
				?>
				</select></p>
            <br/>
            	<p>Visible
                <input type="radio" name="visible" value="0">No</input>
                <input type="radio" name="visible" value="1">Yes</input></p>
            <br/>
            	<input type="submit" class="botao" value="Adicionar"></input>
                <a href="content.php"><input type="submit" class="botao" value="Cancelar"></input></a>
            </form>

<?php
	require("includes/footer.php");
?>     