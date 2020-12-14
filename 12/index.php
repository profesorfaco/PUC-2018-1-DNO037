<?php include('header.php');?>

<?php
$csv = array_map('str_getcsv', file('data.csv'));
      array_walk($csv, function(&$a) use ($csv) {
      $a = array_combine($csv[0], $a);
      });
    array_shift($csv);
?>

<main role="main" class="container">
<h1 class="mb-4">Lineamientos y recomendaciones a la Planta Académica para la  prevención de hechos de violencia sexual en la relación con estudiantes</h1>
<div class="row">
<div class="col-12 border-bottom pb-2 mb-4">
<p class="lead">Basado en la implementación de la política de Prevención y Apoyo a Víctimas de Violencia Sexual de la UC, la universidad presenta al cuerpo académico un conjunto de recomendaciones de buenas prácticas para facilitar una adecuada convivencia con los estudiantes, un correcto manejo de los límites en dicha relación y la prevención de conductas confusas o inapropiadas que generen situaciones donde se cuestione su comportamiento frente a los estudiantes de pre y postgrado o que constituyan directamente hechos de violencia sexual.</p>
<p><a href="http://www.uc.cl/images/stories/docs/lineamientos_plantaacademica_14052018_v2.pdf"> <i class="fas fa-file-pdf"></i> Descarga el documento</a></p>
</div>
<?php for($l = 0; $l < count($csv); $l++){?>
    <div class="col-sm-6 col-md-4 py-3">
    <img src="<?php if ($csv[$l]['imagen'] == NULL){ print ("img/gris.png"); } else { print ($csv[$l]['imagen']); }?>" class="img-fluid">
    <h4><?php print($csv[$l]['indicacion'])?></h4>
    <p><a href="single.php?url=<?php print $l?>">Ver detalles <i class="fas fa-arrow-right"></i></a></p>
	</div>
<?php };?>
</main>
<?php include('footer.php');?>