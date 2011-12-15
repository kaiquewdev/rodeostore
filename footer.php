
</tr>
</table>
<footer>

<h4 style="text-align:right; color:#EBCD56; margin-right:60px;">Todos os direitos reservados à RodeoStore&copy;.</h4>

</footer>
</body>
</html>

<?php 

if (isset($connection))
{
mysql_close($connection);
}
else
{
	die("variável não definida");
}
?>