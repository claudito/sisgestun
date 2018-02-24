<nav class="navbar navbar-default">
<div class="container-fluid">
<!-- Brand and toggle get grouped for better mobile display -->
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href ="<?php echo URL; ?>"><i class="fa fa-cube"></i>  SISGESTUN</a>
</div>

<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<ul class="nav navbar-nav">
<?php 
foreach (Menu::lista_nav() as $key => $value): ?>

<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $value['descripcion']; ?><span class="caret"></span></a>
<ul class="dropdown-menu">

<?php
foreach (Submenu::lista_nav($value['id']) as $key => $value): ?>
<?php 
    $permiso = new Permiso($value['id'],$_SESSION[KEY.CODIGO]);
if ($permiso->permiso_nav('estado')==1): ?>
<li><a href="<?php echo URL.$value['ruta'] ?>"><?php echo $value['descripcion']; ?></a></li> 
<?php else: ?>
<li class="disabled"><a href="#"><?php echo $value['descripcion']; ?></a></li>
<?php endif ?>
<?php endforeach ?>
</ul>
</li>
<?php endforeach ?>

</ul>

<ul class="nav navbar-nav navbar-right">
<li><a href="#"><i class="glyphicon glyphicon-user text-success"></i> <?php echo $_SESSION[KEY.NOMBRES].' '.$_SESSION[KEY.APELLIDOS]; ?></a></li>
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="caret"></span></a>
<ul class="dropdown-menu">
<li><a style="cursor:pointer;"  onclick="logout();">Salir</a></li>
</ul>
</li>
</ul>
</div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>