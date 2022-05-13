<?php 
include('conn.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/2fd8caf48c.js" crossorigin="anonymous"></script>
    <title>C.P.M. COUNSELOR</title>
</head>

<body>
    <!-- navbar -->

    <nav class="navbar" style="background-color: #EA8FFF;">
        <div class="container-fluid" style="justify-content: center;">
            <a class="navbar-brand" style="text-align: center; font-size: x-large; font-family: Poppins; color: #ffff;"
                href="#">Clara Piraino Martínez</a>
        </div>
    </nav>
    <!-- Bienvenida -->
    <div class="container mt-5">
        <div class="row justify-content-around align-items-center presen">
            <div class="col-md-6 description">
                <h2>Clara Piraino Martínez</h2>
                <h4>Counselor</h4>
                <p>Recibida en HOLOS SANCHEZ BODA</p>
                <h4>Tarotista</h4>
                <p>"Alma en evolución"</p>
                <h4>Astrología (en curso)</h4>
                <p>Estudiante en la escuela "Somos Alma"</p>
                <div class="mt-5 mb-5">
                    <a href="/img/clara.pdf" download class="button mt-5">DESCARGA MI CV</a>
                </div>
            </div>
            <div class="col-md-6 foto-persona">

            </div>
            <hr style="border: 5px solid #e016dc; border-radius: 10px; margin-top: 20px;">

        </div>
        <!-- fin primer row -->

        <!-- EXPERIENCIAS -->
        <!-- experiencia1 -->
        <div class="row justify-content-around align-items-center">
            <h2 class="text-center mb-5" style="color:#e016dc;">EXPERIENCIAS</h2>
            <div class="col-md-6 text-center">
                <img src="/img/rh.png" alt="" style="width: 275px;">
            </div>
            <div class="col-md-6 mt-2">
                <h4 style=" font-weight: 900;">RECLUTADORA FREELANCER</h4>
                <p style="font-size: small;  font-weight: 200;">Grupo Servicemen - Profesional independiente
                    abr. 2022 - actualidad</p>
                <p>Soy reclutadora Freelance para la consultora Grupo servicemen. Me encargo de hacer contacto y
                    entrevistar personal según sea necesario.</p>
            </div>

            <hr style="border: 5px solid #e016dc; border-radius: 10px; margin-top: 20px;">

        </div>
        <!-- experiencia2 -->
        <div class="row justify-content-around align-items-center">
            <div class="col-md-6 mt-2">
                <h4 style=" font-weight: 900;">LICENSED MENTAL HEALTH COUNSELOR</h4>
                <p style="font-size: small;  font-weight: 200;">Profesional independiente
                    dic. 2020 - actualidad</p>
                <p>Soy Consultora Psicológica, y ofrezco un espacio de escucha terapéutica y acompañamiento.</p>
            </div>
            <div class="col-md-6 text-center">
                <img src="/img/terapia.png" alt="" style="width: 275px;">
            </div>


            <hr style="border: 5px solid #e016dc; border-radius: 10px; margin-top: 20px;">

        </div>

        <!-- experiencia3 -->
        <div class="row justify-content-around align-items-center">
            <div class="col-md-6 text-center">
                <img src="/img/ingles.png" alt="" style="width: 275px;">
            </div>

            <div class="col-md-6 mt-2">
                <h4 style=" font-weight: 900;">DOCENTE DE INGLES</h4>
                <p style="font-size: small;  font-weight: 200;">Docente titular - INSTITUTO ANTONIO BERNI
                    abr. 2017 - feb. 2022</p>
                <p>Experiencia trabajando con centro de aprendizaje de libre eleccion. Inteligencia y capacitacion
                    emocional.</p>
            </div>


            <hr style="border: 5px solid #e016dc; border-radius: 10px; margin-top: 20px;">

        </div>
        <!-- formulario -->
        <div class="row justify-content-around align-items-center">
            <div class="col-md-6">
                <h2>Enviame tu consulta</h2>
                <form action="https://formsubmit.co/rojasgonzalo23@gmail.com" method="post">
                        <label for="name" class="form-label">Nombre</label>
                        <input name="nombre" type="text" class="form-control" required autocomplete="off">
                        <label for="" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" required  autocomplete="off">
                        <label for="" class="form-label">Telefono</label>
                        <input type="number" name="telefono" class="form-control" required  autocomplete="off">
                        <label for="" class="form-label">Mensaje</label>
                        <textarea name="mensaje" id="" cols="30" rows="10" class="form-control" required autocomplete="off"></textarea>
                        <button type="submit" name='submit' class="btn btn-success mt-5">ENVIAR</button>
                        
                </form>
            </div>
        </div>

        <!-- divs redondos -->
        <div class="row justify-content-around align-items-center mt-5">
           
                <div class="redes-container">
                <ul>
                    <li><a href="https://www.instagram.com/clarapmcounselor" target="leblank_"><i class="fab fa-instagram fa-x"></i></a></li>
                    <li><a href="http://wa.link/i763di" target="leblank_"><i class="fab fa-whatsapp"></i></a></li>
                    <li><a href="https://www.linkedin.com/in/clara-luna-piraino-mart%C3%ADnez-a68715207/" target="leblank_"><i class="fab fa-linkedin"></i></a></li>

                </ul>
            </div>
           </div>


    <!-- FOOTER -->
    <footer class="bg-light text-center text-lg-start">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: #EA8FFF;">
          © 2022 Copy:
          <a class="text-dark" href="http://gonzalorojas.000webhostapp.com/">Gonzalo Rojas</a>
        </div>
        <!-- Copyright -->
      </footer>

      <!-- CIERRE DIV -->
    </div>


</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
    crossorigin="anonymous"></script>

</html>