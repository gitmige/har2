<h1>Opiskelijat</h1>
<a href="<?php echo site_url('oppilas/lisays_lomake'); ?>"><button type="button" class="btn btn-primary">Lisää opiskelija</button></a>
<table class="table table-bordered table-striped table-hover">
  <tr><th>Etunimi</th><th>Sukunimi</th><th>Syntymavuosi</th><th>Poista</th></tr>
<?php
  foreach ($oppilaat as $r){
    echo '<tr>';
    echo '<td>'.$r['Etunimi'].'</td>';
    echo '<td>'.$r['Sukunimi'].'</td>';
    echo '<td>'.$r['Syntymavuosi'].'</td>';
    echo '<td><button class="btn btn-danger"><a href="'.site_url('oppilas/poista_oppilas').'/'.$r['idOpiskelija'].'">Poista</a></button></td>';
    echo '</tr>';
  }
?>
