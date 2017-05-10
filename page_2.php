<?php include('header.php');?>
<?php $aqui = "En este lugar corresponde algo con PHP"?>
<div class="inner cover">
<h2 class="cover-heading">Ataques sexuales registrados durante el 2011</h2>
<p class="lead"><?php echo $aqui;?></p>
</div>
<?php
    // basta con la línea de PHP para llamar al imdb-movies.csv y asignarlo a la variable $csv
    $csv = array_map('str_getcsv', file('data/sexual_violence.csv'));
    // pero debo hacer un pequeño ajuste, para eliminar del arreglo el encabezado del imdb-movies.csv
    array_walk($csv, function(&$a) use ($csv) {$a = array_combine($csv[0], $a);});
    array_shift($csv);
    // ahora puedo crear un bucle "for(){}" que examine lo asignado como contenido a la variable $csv
    // lo que esté contenido en la variable se repetirá tantas veces como arreglos tenga la variable $csv
    for($a = 0; $a < $total = count($csv); $a++){?>
      <article class="row">
        <hr>
        <div>
          <h3><?php echo($a+1);?>. <?php echo $csv[$a]['Country name'];?></h3>
          <h5><?php echo $csv[$a]['2011'];?> casos. </h5>
        </div>
      </article>
    <?php };?>
</div>
<?php include('footer.php');?>
