
<?php include"header.php"; ?>

	<?php 
		foreach($_REQUEST as $__opt => $__val) {
			$$__opt = $__val;
		}
		
		if(empty($pagina)) {
			include("nav/inicio.php");
		}
		elseif (substr($pagina,0,4)=='http' or substr($pagina,0,1)=="/" or substr($pagina,0,1)==".") 
		{
			echo '<br><font face=arial size=11px><br><b>A página não existe.</b><br>Por favor selecione uma página a partir do menu';
		}
		else{
			include("$pagina.php");
		}
	?>

<?php include"footer.php"; ?>

