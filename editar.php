<?php 

include 'conexion.php';

$no = ($_GET['no']);
$nombre = $_POST['nombre2'];
$apellidos = $_POST['apellidos2'];
$edad = $_POST['edad2'];
$curso = $_POST['curso2'];
$correo = $_POST['correo2'];

$ej= "UPDATE estudiantes SET nombre='".$nombre."', apellidos='".$apellidos."', edad='".$edad."', curso='".$curso."', correo='".$correo."' WHERE id='".$no."'";
$conexion->query($ej);



?>


<script type=text/javascript>
    alert("Estudiante editado");
    window.location.href="tabla_general.php";
</script>