<?php
session_start();
//si hay una sesión 
if (isset($_SESSION['name'])){
//se muestra el contenido de la página web
?>
<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Home</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-default">
<div class="container-fluid">
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
<span class="sr-only">Toggle navigation</span>
</button>
<a class="navbar-brand" href="#"></a>
</div>

    
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<ul class="nav navbar-nav navbar-right">
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php print $_SESSION['name'];?> <span class="caret"></span></a>
<ul class="dropdown-menu">
<li><a href="cerrar_sesion.php">Salir</a></li>
</ul>
</li>
</ul>
</div>
</div>
</nav>
      
<article style="text-align: center;">
<h1>¡Bienvenido <?php print $_SESSION['name'];?>!</h1>
</article>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
<?php
}//si no hay sesión
else{
    //se redirecciona
    header ('location: ./');
}
?>