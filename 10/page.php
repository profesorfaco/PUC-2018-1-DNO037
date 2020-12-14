<?php include('header.php');?>

<?php
$csv = array_map('str_getcsv', file('https://raw.githubusercontent.com/profesorfaco/dno037-2018-10/master/data/top-20.csv'));
      array_walk($csv, function(&$a) use ($csv) {
      $a = array_combine($csv[0], $a);
      });
      array_shift($csv);
?>

<main role="main" class="container">
<h1 class="mb-4">Top 20</h1>
<div class="row">

<?php for($t = 0; $t < count($csv); $t++){?>
    <div class="col-sm-4 col-md-3 py-3">
    <h3 class="border-top pt-3">M <?php print($csv[$t]['mag'])?></h3>
    
    <figure style="height:120px; overflow:hidden;">
    
    <img src="
    <?php if ($csv[$t]['img'] == NULL){
        print ("img/gris.png");
    } else {
        print ($csv[$t]['img']);
    };?>" 

    class="img-fluid">
    </figure>

    <?php if ($csv[$t]['name'] == NULL){
        print '<h5><a href="'.($csv[$t]['url']).'">'.($csv[$t]['location']).'</a></h5>';
    } else {
        print '<h5><a href="'.($csv[$t]['url']).'">'.($csv[$t]['name']).'</a></h5>';
    }?>

    </div>
<?php };?>
</div>

</main>
<?php include('footer.php');?>