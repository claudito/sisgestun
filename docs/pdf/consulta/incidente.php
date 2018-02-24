<?php $codigo = $_GET['codigo']; ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Incidente</title>
<link rel="stylesheet" href="css/style-incidente.css">
</head>
<body>
<br><br><br>

<img src="img/banner.JPG" alt="" style="padding-left: 40px" height="60">

<h1 style="padding-left: 40px;text-align: center;" >Registro de Incidentes</h1>

<table class="cabecera" >
<tr >
<td class="cabecera-th" width="8%">INCIDENTE:</td>
<td class="cabecera-th"><?php echo $codigo; ?></td>
<td class="cabecera-th" width="10%">COORDINADOR:</td>
<td class="cabecera-th"><?php echo Operacion::consulta($codigo,'coordinador'); ?></td>
</tr>
<tr >
<td class="cabecera-th"><strong>Fecha Inicio:</strong></td>
<td class="cabecera-th">07/02/2018 &nbsp; <strong>H.Inicio:</strong>21:48</td>
<td class="cabecera-th">OPERADOR1:</td>
<td class="cabecera-th"><?php echo Operacion::consulta($codigo,'operador1'); ?></td>
</tr>
<tr >
<td class="cabecera-th"><strong>Fecha Fin:</strong></td>
<td class="cabecera-th">07/02/2018 &nbsp; <strong>H.Fin&nbsp;&nbsp;&nbsp;&nbsp;:</strong>21:48</td>
<td class="cabecera-th">OPERADOR2:</td>
<td class="cabecera-th"><?php echo Operacion::consulta($codigo,'operador2'); ?></td>
</tr>
<tr >
<td class="cabecera-th">SENTIDO:</td>
<td class="cabecera-th"><?php echo Operacion::consulta($codigo,'sentido'); ?></td>
<td class="cabecera-th">TI:</td>
<td class="cabecera-th"><?php echo Operacion::consulta($codigo,'ti'); ?></td>
</tr>
<tr>
<td class="cabecera-th">TURNO:</td>
<td class="cabecera-th"><?php echo Operacion::consulta($codigo,'turno'); ?></td>
<td class="cabecera-th">EPI:</td>
<td class="cabecera-th"><?php echo Operacion::consulta($codigo,'epi'); ?></td>
</tr>
<tr>
<td class="cabecera-th">INCIDENTE:</td>
<td class="cabecera-th"><?php echo Operacion::consulta($codigo,'valor_incidente').' '.Operacion::consulta($codigo,'descripcion_incidente'); ?></td>
<td class="cabecera-th">SEGURIDAD:</td>
<td class="cabecera-th"><?php echo Operacion::consulta($codigo,'seguridad'); ?></td>
</tr>
<tr>
<td></td>
<td></td>
<td class="cabecera-th">MÓVIL:</td>
<td class="cabecera-th"><?php echo Operacion::consulta($codigo,'movil'); ?></td>
</tr>

</table>




<br>
<?php if (count(Operacion_det::lista($codigo))>0): ?>
<label style="padding-left: 40px;font-size: 14px;font-weight: bold" class="left">Eventos</label>

<table class="cabecera">
<tr style="background-color: #949496">
<th class="cabecera-td">Sistema</th>
<th class="cabecera-td">Tipo de Equipo</th>
<th class="cabecera-td">Equipo</th>
<th class="cabecera-td">Acciones</th>
<th class="cabecera-td">H. INICIO</th>
<th class="cabecera-td">F. INICIO</th>
<th class="cabecera-td">H. FIN</th>
<th class="cabecera-td">F. FIN</th>
<th class="cabecera-td">TIEMPO</th>
</tr>

<?php foreach (Operacion_det::lista($codigo) as $key => $value): ?>
<tr>
<td class="cabecera-td"><?php echo $value['sistema'] ?></td>
<td class="cabecera-td"><?php echo $value['tipo_equipo'] ?></td>
<td class="cabecera-td"><?php echo $value['equipo'] ?></td>
<td class="cabecera-td"><?php echo $value['acciones_descripcion'] ?></td>
<td class="cabecera-td"><?php echo date_format(date_create($value['hora_inicio']),'H:i'); ?></td>
<td class="cabecera-td"><?php echo date_format(date_create($value['fecha_inicio']),'d/m/Y'); ?></td>
<td class="cabecera-td"><?php echo date_format(date_create($value['hora_fin']),'H:i'); ?></td>
<td class="cabecera-td"><?php echo date_format(date_create($value['fecha_fin']),'d/m/Y'); ?></td>
<td class="cabecera-td"><?php echo Funciones::restar_horas(date_format(date_create($value['hora_inicio']),'H:i'),date_format(date_create($value['hora_fin']),'H:i')) ?></td>
</tr>
<?php endforeach ?>

</table>
<?php else: ?>
<table class="cabecera">
<tr>
<td class="cabecera-td" ><strong>SIN INCIDENTES</strong></td>
</tr>
</table>
<?php endif ?>



<br>
<label style="padding-left: 40px;font-size: 14px;font-weight: bold" class="left">Observaciones</label>
<table class="cabecera">
<tr>
<td class="cabecera-td"><?php echo Operacion::consulta($codigo,'observaciones'); ?></td>
</tr>
</table>


	
<footer>
<div id="piedepagina">
<table style="width: 100%;padding-left: 200px;">
<tr>
<td style="text-align: center;">______________________________________</td>
<td style="text-align: center;">______________________________________</td>
</tr>
<tr>
<td style="text-align: center;">Coordinador <br> Enrique Luis Torre Carrillo</td>
<td style="text-align: center">Operador <br> <?php echo $_SESSION[KEY.NOMBRES].' '.$_SESSION[KEY.APELLIDOS]; ?></td>
</tr>
</table>
</div>
</footer>


</body>
</html>