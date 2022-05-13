<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$db = 'webclara';

$conn = mysqli_connect($hostname, $username, $password, $db);

    if (isset($_POST['submit'])) {

        $nombre = trim($_POST["nombre"]);
        $email = trim($_POST["email"]);
        $telefono = trim($_POST["telefono"]);
        $mensaje=trim($_POST["mensaje"]);
        $inserciondecontacto = "INSERT INTO contacto(nombre, email, telefono, mensaje) VALUES ('$nombre', '$email', '$telefono', '$mensaje')";
        $ppp= mysqli_query($conn,$inserciondecontacto);
            if($ppp){
        echo"<script>alert('Mensaje Enviado')</script>";
    }
    };

 ?>

?>