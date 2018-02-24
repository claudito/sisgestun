<?php 
include'../../../autoload.php';
Session::validity();
 ?>

 <?php if ( count(Usuario::lista()) > 0): ?>
<div class="panel panel-info">
  <div class="panel-heading">
    <h3 class="panel-title">USUARIOS</h3>
  </div>
  <div class="panel-body">

  <div class="table-responsive">
  <table  id="consulta" class="table table-bordered table-condensed">
    <thead>
      <tr class="info">
        <th>CODIGO</th>
        <th>USUARIO</th>
        <th>FECHA DE CREACIÓN</th>
        <th>ESTADO</th>
        <th style="text-align: center;">ACCIONES</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach (Usuario::lista() as $key => $value): ?>
    <tr>
    <td><?php echo $value['codigo']; ?>        </td>
    <td><?php echo $value['usuario']; ?> </td>
    <td><?php echo date_format(date_create($value['fregistro']),'d-m-Y H:i:s'); ?> </td>
    <td><?php echo ($value['estado']=='1') ? "ACTIVO" : "INACTIVO" ; ?></td>
    <td style="text-align: center;">
    <a data-codigo="<?php echo $value['codigo'];?>" id=""  class="btn btn-permiso btn-sm btn-warning"><i class="glyphicon glyphicon-lock"></i></a>
     <a data-id="<?php echo $value['id'];?>" id=""  class="btn btn-edit btn-sm btn-info"><i class="glyphicon glyphicon-refresh"></i></a>
    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#dataDelete" data-id="<?php echo $value['id']; ?>"><i class="glyphicon glyphicon-trash"></i></button>
    </td>
    </tr>
    <?php endforeach ?>
    </tbody>
  </table>

    </div>


  </div>
</div>


  <!-- Modal  Actualizar-->
  <script>
    $(".btn-edit").click(function(){
      id = $(this).data("id");
      $.get("../vista/modal/usuario/actualizar.php","id="+id,function(data){
        $("#form-edit").html(data);
      });
      $('#modal-actualizar').modal('show');
    });
  </script>
  <div class="modal fade" id="modal-actualizar" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Actualizar</h4>
        </div>
        <div class="modal-body">
        <div id="form-edit"></div>
        </div>

      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal  Actualizar-->

<!-- Modal  Permisos-->
  <script>
    $(".btn-permiso").click(function(){
      codigo = $(this).data("codigo");
      $.get("../templates/modal/usuario/permisos.php","codigo="+codigo,function(data){
        $("#form-permiso").html(data);
      });
      $('#modal-permiso').modal('show');
    });
  </script>
  <div class="modal fade" id="modal-permiso" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Permisos</h4>
        </div>
        <div class="modal-body">
        <div id="form-permiso"></div>
        </div>

      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal  Permisos-->

  <script>
  $(document).ready(function(){
  $('#consulta').DataTable();
  });
  </script>
 <?php else: ?>
 <p class="alert alert-warning">No existen Registros.</p>
 <?php endif ?>

