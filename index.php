<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Taller3</title>
<link href="css/bootstrap.min.css" rel="stylesheet"
</head>
<body>
<a class="navbar-brand" href="">Universidad Mariano Galvez de Guatemala</a>
</div>
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<ul class="nav navbar-nav navbar-right">
<li><a href="#" data-toggle="modal" data-target=".bs-example-modal-sm">Iniciar Sesion</a></li>
<li><a href="#" data-toggle="modal" data-target=".bs-example-modal-sm-registrar">Registrate</a></li>
</ul>
</div>
</div>
</nav>
      
      								<!--iniciar Sesion-->
<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
<div class="modal-dialog modal-sm">
<h2>Iniciar sesión</h2>
</div>
<div class="modal-body">
<form action="archivo_destino.php" method="post" enctype="application/x-www-form-urlencoded">
<div class="form-group">
<label for="control1_nombre">Usuario</label>
<input type="text" name="datos_introducidos_usuario" class="form-control" id="control1_nombre" placeholder="Username" required>
</div>
<div class="form-group">
<label for="control1_contraseña">Contraseña</label>
<input type="password" name="datos_introducidos_contraseña" class="form-control" id="control1_contraseña" placeholder="Password" required>
</div>
<button type="submit" class="btn btn-success btn-block">Entrar</button>
</form>
</div>
</div>
</div>
</div>
  
                                               <!--registrarse-->
<div class="modal fade bs-example-modal-sm-registrar" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
<div class="modal-dialog modal-sm">
<h2>Regístrate</h2>
</div>
<div class="modal-body">
<form action="archivo_registrar.php" method="post" enctype="application/x-www-form-urlencoded">
<div class="form-group">
<label for="control2_nombre">Usuario</label>
<input type="text" name="datos_registrar_usuario" class="form-control" id="control2_nombre" placeholder="Username" required>
</div>
<div class="form-group">
<label for="control2_contraseña">Contraseña</label>
<input type="password" name="datos_registrar_contraseña" class="form-control" id="control2_contraseña" placeholder="Password" required>
</div>
<button type="submit" class="btn btn-success btn-block">Registrar</button>
</form>
</div>
</div>
</div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>