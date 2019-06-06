<!DOCTYPE html>
<html lang="en">
<?php include("_includes/head.php"); ?>
<body>

<?php include("_includes/navbar.php"); ?>

<div class="container">
  <?php include("_includes/jumbotron.php"); ?>

  <div class="jumbotron">
    <div class="alert alert-info" role="alert">
      <i class="far fa-clock"></i> Para comenzar, seleccione una localidad de origen
    </div>

    <div class="form-group">
      <b><label for="selectorPartida">Seleccione localidad de origen</label></b>
      <select class="form-control" id="selectorPartida" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
        <option value="">Seleccione una</option>
        <option value="cities/lopez">López</option>
        <option value="cities/santa-fe">Santa Fe</option>
      </select>
    </div>
  </div>
</div>



<div class="container lista"> 
  <ul class="timeline">
    <li class="clave"><span>16:05</span> López </li>
    <li><span>16:20</span> Gálvez <small>Llega</small></li>
    <li><span>16:25</span> Gálvez <small>Sale</small></li>
    <li class="clave"><span>18:35</span> Santa Fe</li>

  </ul>
</div>

<?php include("_includes/footer.php"); ?>

</body>
</html>





