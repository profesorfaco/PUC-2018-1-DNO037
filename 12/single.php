<?php include('header.php');?>
<main role="main" class="container">
<?php
$csv = array_map('str_getcsv', file('data.csv'));
      array_walk($csv, function(&$a) use ($csv) {
      $a = array_combine($csv[0], $a);
      });
      array_shift($csv);

$linea = $_GET['url']; 

?>
<p><a href="index.php"><i class="fas fa-arrow-left"></i> Volver</a></p>
<h1><?php print($csv[$linea]['indicacion']);?></h1>
<h4>Detalles</h4>
<p><?php print($csv[$linea]['detalle']);?></p>
<h4>Ejemplo</h4>
<blockquote class="blockquote"><?php print($csv[$linea]['ejemplo']);?></blockquote>
<h4>Prevalencia</h4>
<p>
	<?php $casos = $csv[$linea]['prevalencia'];?>
	<?php for($lleno = 0; $lleno < $casos; $lleno++){?>
		<i class="fas fa-circle"></i>
	<?php };?>
	<?php for($vacio = 0; $vacio < 10-$casos; $vacio++){?>
		<i class="far fa-circle"></i>
	<?php };?>	
</p>
</main>
<?php include('footer.php');?>
