
<?php

$link = mysqli_connect("localhost", "root", "", "veterinaria");
 
if($link == false){
    die("ERROR: No se pudo conectar " . mysqli_connect_error());
}


$nombre = $_POST['Nombre'];
$especie = $_POST['Especie'];
$raza = $_POST['Raza'];
$sexo = $_POST['Sexo'];
$pelaje = $_POST['Pelaje'];
$fecha_1 = $_POST["Fecha_nacimiento"];
$Fecha_nacimiento = strftime($fecha_1);
$Fecha_nacimiento = date('yyyy-mm-dd',$Fecha_nacimiento);
$id_dueño = $_POST['id_dueño'];


$sql = "INSERT INTO veterinaria.animal (Nombre, Especie, Raza, Sexo, Pelaje, Fecha_nacimiento, id_dueño, estado) VALUES (\"$nombre\", '$especie', '$raza', '$sexo', '$pelaje', '$Fecha_nacimiento', '$id_dueño', '1')";
if(mysqli_query($link, $sql)){
    echo "Se almacenó correctamente el animal";
} else{
    echo "ERROR: No fue posible ejecutar $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);

?>