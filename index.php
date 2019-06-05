<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
    <script defer src="https://use.fontawesome.com/releases/v5.8.2/js/all.js" 
      integrity="sha384-DJ25uNYET2XCl5ZF++U8eNxPWqcKohUUBUpKGlNLMchM7q4Wjg2CUpjHLaL8yYPH" 
      crossorigin="anonymous"></script>
    <link rel="stylesheet" 
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>

<nav class="navbar navbar-dark bg-primary">
  <a class="navbar-brand">
    <img src="img/logo.png" height="30" class="d-inline-block align-top" alt="">
    MovoBus
  </a>
  <form class="form-inline">
      <a href="http://fmcomunicarte.com"><button class="btn btn-outline-success my-2 my-sm-0" type="submit">Volver</button></a>
  </form>
</nav>

<div class="container">
  <?php include("jumbotron.html"); ?>

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

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>





