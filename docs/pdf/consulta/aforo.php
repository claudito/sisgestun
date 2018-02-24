<?php $fecha  =  $_GET['fecha'];  ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Aforo</title>
<link rel="stylesheet" href="css/style-aforo.css">
</head>
<body>

<br><br><br>

<img src="img/banner.JPG" alt="" style="padding-left: 40px" height="60">

<h1 style="padding-left: 40px" class="center">REGISTRO DE AFORO VEHICULAR</h1>


<table class="cabecera" style="width: 30%">
<tr>
<td class="cabecera-td" style="background-color: #949496">FECHA: </td>
<td class="cabecera-td" ><?php echo date_format(date_create($fecha),'d/m/Y'); ?></td>
</tr>
</table>

<table  class="cabecera">

<thead>
<tr>
<th class="cabecera-td center" rowspan="3" style="background-color: #949496">TURNO</th>
<th class="cabecera-td center" colspan="6" style="background-color: #949496">AFORO VEHICULAR</th>
</tr>

<tr>
<th class="cabecera-td center" colspan="3" style="background-color: #949496">TUNEL VENTANILLA</th>
<th class="cabecera-td center" colspan="3" style="background-color: #949496">TUNEL CALLAO</th>
</tr>

<tr>
<th class="cabecera-td" style="background-color: #949496">VEHICULOS LIGEROS</th>
<th class="cabecera-td" style="background-color: #949496">VEHICULOS PESADOS</th>
<th class="cabecera-td" style="background-color: #949496">VELOCIDAD PROMEDIO</th>
<th class="cabecera-td" style="background-color: #949496">VEHICULOS LIGEROS</th>
<th class="cabecera-td" style="background-color: #949496">VEHICULOS PESADOS</th>
<th class="cabecera-td" style="background-color: #949496">VELOCIDAD PROMEDIO</th>
</tr>

</thead>

<tbody>
<?php 
$a=0;
$b=0;
$c=0;
$d=0;
$e=0;
$f=0;

foreach (Aforo::lista_pdf($fecha) as $key => $value): ?>
<tr>
<td class="detalle-td">
<?php  
        switch ($value['codigo_turno']) {
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

		?> </td>
<td class="detalle-td center"><?php echo round($value['liviano_s2'],2); ?></td>
<td class="detalle-td center"><?php echo round($value['pesado_s2'],2); ?></td>
<td class="detalle-td center"><?php echo round($value['velocidad_s2'],2); ?></td>
<td class="detalle-td center"><?php echo round($value['liviano_s1'],2); ?></td>
<td class="detalle-td center"><?php echo round($value['pesado_s1'],2); ?></td>
<td class="detalle-td center"><?php echo round($value['velocidad_s1'],2); ?></td>
</tr>
<?php 
$a =  $a+$value['liviano_s2'];
$b =  $b+$value['pesado_s2'];
$c =  $c+$value['velocidad_s2']/3;
$d =  $d+$value['liviano_s1'];
$e =  $e+$value['pesado_s1'];
$f =  $f+$value['velocidad_s1']/3;

 ?>

<?php endforeach ?>
<tr>
<td class="detalle-td center" style="background-color: #949496">TOTAL</td>
<td class="detalle-td center" style="background-color: #949496"><?php echo $a; ?></td>
<td class="detalle-td center" style="background-color: #949496"><?php echo $b; ?></td>
<td class="detalle-td center" style="background-color: #949496"><?php echo round($c); ?></td>
<td class="detalle-td center" style="background-color: #949496"><?php echo $d; ?></td>
<td class="detalle-td center" style="background-color: #949496"><?php echo $e; ?></td>
<td class="detalle-td center" style="background-color: #949496"><?php echo round($f); ?></td>
</tr>
</tbody>



</table>

<p style="text-align: right;"><strong>Reporte de Sidera Reports</strong></p>



<div id="piedepagina" style="padding-left: 200px"><strong>Área de TI - Tunel Gambetta - <?php echo date('Y') ?></strong></div>

</body>
</html>