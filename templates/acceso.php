<?php 
Assets::title('Iniciar Sesión');
Assets::sweetalert();
?>
<script src="ajax/login.js"></script>
<?php Assets::head(); ?>


<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">
<br><br>
<center>
<img src="http://www.pcquest.com/wp-content/uploads/2016/08/ogin.png"  alt="login" class="img-responsive" 
 width="250">
</center>
<br>
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title text-center">ACCESO SISTEMA SISGESTUN</h3>
  </div>
  <div class="panel-body">

  <div  id="mensaje"></div>

  <form  method="post" autocomplete="off">

  <div class="form-group">
  <label>Usuario</label>
  <input type="text" name="usuario" id="user" class="form-control" required autofocus="">
  </div>

  <div class="form-group">
  <label>Contraseña</label>
  <input type="password"  placeholder="Contraseña"  class="form-control" id="pass"  />
  </div>

  <input type="hidden" id="url" value="<?php echo URL; ?>">

  <input type="submit" id="login" class="btn btn-primary"  value="Iniciar Sesión">

  </form>

  </div>
</div>
</div>

</div>



<?php Assets::footer(); ?>