<?php
if ($_SERVER [' REQUEST_METHOD'] != 'POST'); {
header (" Location: contacto.html");
}

$Nombre = $_POST ['Nombre'];
$Email = $_POST ['Email'];
$Telefono = $_POST ['Telefono'];
$Mensaje = $_POST ['Mensaje'];

$body = <<< html
   <h1> Contacto desde la web</h1>
    <p> De: $Nombre $Email / $Telefono </p>
   <h2>Mensaje</h2>
   $Mensaje
html;


var_dump($nombre);
mail(to: 'libreriakisomi@gmail.com' , subject: "Mensaje desde la web: $Mensaje"  ,);
var_dump($rta);

?>

'lfdjeroherhnxlquu'