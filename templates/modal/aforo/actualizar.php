<?php 

include'../../../autoload.php';
Session::validity();

$id       =  $_GET['id'];   

 ?>


<form role="form" id="actualizar" autocomplete="off">

<input type="hidden" name="id" value="<?php echo $id; ?>">


<div class="form-group">
<label>Fecha:</label>
<input type="date" name="fecha"  class="form-control" required value="<?php  echo Aforo::consulta($id,'fecha');?>" readonly>
</div>

<div class="form-group">
<label>Turno:</label>
<input type="text" name="turno"  class="form-control" 
value="
<?php 
switch (Aforo::consulta($id,'codigo_turno')) {
        	case 'CODTUR001':
            echo "MAÑANA";
        		break;
        	case 'CODTUR002':
            echo "TARDE";
        		break;
        	case 'CODTUR003':
            echo "NOCHE";
        		break;
        	default:
        	echo "no existe";
        		break;
        }

 ?>" 
 readonly>
</div>

<div class="form-group">
<label>Sentido:</label>
<input type="text" name="sentido"  class="form-control" 
value="
<?php 
switch (Aforo::consulta($id,'codigo_sentido')) {
            case 'CODSEN001':
            echo "CALLAO";
                break;
            case 'CODSEN002':
            echo "VENTANILLA";
                break;
            default:
            echo "no existe";
                break;
        }

 ?>" 
 readonly>
</div>



<div class="form-group">
<label>Total Liviano:</label>
<input type="number"  step="any" name="total_liviano"  class="form-control" value="<?php  echo round(Aforo::consulta($id,'total_liviano'),2);?>" required>
</div>

<div class="form-group">
<label>Total Pesado:</label>
<input type="number"  step="any" name="total_pesado"  class="form-control" value="<?php  echo round(Aforo::consulta($id,'total_pesado'),2);?>" required>
</div>


<div class="form-group">
<label>Velocidad:</label>
<input type="number"  step="any" name="velocidad"  class="form-control" value="<?php  echo round(Aforo::consulta($id,'velocidad'),2);?>" required>
</div>



<button class="btn btn-primary">Actualizar</button>

</form>

<?php  Assets::modal_actualizar('aforo'); ?>
