<?php
include("conectar/conectar.php");
$mensaje="";

if ($conexion) {
    try {
        // Verificar datos del formulario
        if (isset($_POST['txtnombre'], $_POST['txtcorreo'], $_POST['txttelefono'], $_POST['txtdetalle'])) {
            // Datos del nuevo registro
            $nombre = $_POST['txtnombre'];
            $correo = $_POST['txtcorreo'];
            $telefono = $_POST['txttelefono'];
            $detalle = $_POST['txtdetalle'];
            $fecha = date('Y-m-d');

            // Preparar la consulta SQL
            $sql = "INSERT INTO contacto (nombre, correo, telefono, detalle, fecha) VALUES (:nombre, :correo, :telefono, :detalle, :fecha)";

            // Preparar la declaración
            $stmt = $conexion->prepare($sql);

            // Vincular parámetros
            $stmt->bindParam(':nombre', $nombre);
            $stmt->bindParam(':correo', $correo);
            $stmt->bindParam(':telefono', $telefono);
            $stmt->bindParam(':detalle', $detalle);
            $stmt->bindParam(':fecha', $fecha);

            // Ejecutar la consulta
            $stmt->execute();

            $mensaje = "Registro insertado con éxito";
            $_POST['txtnombre'] = $_POST['txtcorreo'] = $_POST['txttelefono'] = $_POST['txtdetalle'] = "";
        } else {
            echo "";
        }
    } catch (PDOException $e) {
        $mensaje = "Error al insertar el registro: " . $e->getMessage();
    } finally {
        // Cerrar la conexión
        $conexion = null;
    }
}
?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <meta name="copyright" content="COLEGIO ROBERTO FRANSEN">
    <meta name="description" content="COLEGIO ROBERTO FRANSEN">
    <meta name="description" content="FRANSEN">
    <meta name="description" content="fransen Colegio">
    <link rel="shortcut icon" href="img/logo2024.png" type="image/x-icon">
<link rel="stylesheet" href="css/estilo.css">
    <title>COLEGIO ROBERTO FRANSEN</title>
</head>
<body>
<?php if (!empty($mensaje)) : ?>
        <script>alert('<?php echo $mensaje; ?>');</script>
    <?php endif; ?>
    <div id="contenido">
        <div id="cabecera">
            
            <div id="menu">
                <ul id="menuCabecera">
                    <li><a href="index.html">INICIO</a></li>     
                </ul>
            </div>
            <div id="contenidoPortadaPortal">
            <div id="contenidoPortada">
            <div id="bordeAzul"></div>
            <div id="logoPortada">
                <img class="logoFestejo" src="img/logo2024.png" alt="">
            </div>
            <div id="imagenColegio">
                 <img src="img/portada.jpg" alt="" width="95%">
            </div>
            <div id="datosPortada">
                <h3>ESTE 2024</h3>
                <p>El COLEGIO CATÓLICO ROBERTO FRANSEN está de fiesta. El 2024 es un año muy importante para todos los que formamos parte de la familia robertina. Cumplimos 40 AÑOS!!!   </p>
                <div id="botonPortada">SABER MAS</div>
            </div>
            </div>
        </div>

        </div>
        <div id="espacio"></div>
        <div id="cuerpo">
          <div id="cuerpoAnuncio">
            <div id="marcoAnuncioCuerpo" class="marcoAnuncioCuerpo-1">
              <img src="img/logo2024.png" class="logoAnuncio" >
              <h4>FORMULARIO VACANTE INICIAL</h4>
              <p>FORMULARIO NO ASEGURA EL INGRESO DEL ASPIRANTE,  NI GENERA COMPROMISO DE
                MATRÍCULA Y ENTREVISTA.   ESTARÁ SUJETO  A LA DISPONIBILIDAD DE
                VACANTES.
            </p>
            <div id="botonPortada"><a href="https://docs.google.com/forms/d/1LgbQh_AfXOYob66kkABA86MH0cfTh2ScgELYn2f4XhE/edit" target="_blank">VER</a></div>
            </div>
            <div id="marcoAnuncioCuerpo" class="marcoAnuncioCuerpo-2">
                <img src="img/logo2024.png" class="logoAnuncio">
                <h4>FORMULARIO VACANTE SECUNDARIA</h4>
                <p>ESTIMADA FAMILIA: EL SIGUIENTE FORMULARIO NO ASEGURA EL INGRESO DEL ASPIRANTE, NI GENERA COMPROMISO DE MATRICULA Y ENTREVISTA. ESTARÁ SUJETO A LA DISPONIBILIDAD DE VACANTES. 
              </p>
              <div id="botonPortada"><a href="https://docs.google.com/forms/d/1-3dbjRwTcjaFHeJCLoNQ-603YQpijlfad7Xn-fAu8os/viewform?edit_requested=true" target="_blank">VER</a></div>
              </div>
              <div id="marcoAnuncioCuerpo" class="marcoAnuncioCuerpo-1">
                <img src="img/logo2024.png" class="logoAnuncio">
                <h4>FORMULARIO VACANTE PRIMARIA</h4>
                <p>ESTIMADA FAMILIA: EL SIGUIENTE FORMULARIO NO ASEGURA EL INGRESO DEL ASPIRANTE, NI GENERA COMPROMISO DE MATRICULA Y ENTREVISTA. ESTARÁ SUJETO A LA DISPONIBILIDAD DE VACANTES. 
              </p>
              <div id="botonPortada"><a href="https://docs.google.com/forms/d/1-3dbjRwTcjaFHeJCLoNQ-603YQpijlfad7Xn-fAu8os/viewform?edit_requested=true" target="_blank">VER</a></div>
              </div>
          </div>
          <h2>COLEGIO CAtÓLICO ROBERTO FRANSEN</h2>

        </div>
        <footer>
            <div id="margenFooter">
                <div id="menuFooter">
                    <nav>
                        <a href="index.html">Inicio</a>
                        <a href="index.html"></a>
                    </nav>
                </div>
                <div id="datosEmpresa">
                    Calle Avda. General Federico Román esq. 6 de agosto</br>
                    Barrio del Carmen. Guayaramerin. Beni. Bolivia</br>
                    <span class="tituloLetra" id="correo">Correo:</span> <a href="mailto:colegiocatolico.robertofransen@gmail.com">colegiocatolico.robertofransen@gmail.com</a></br>
                    <span class="tituloLetra" id="telefono">Télefono:</span> 72810101
                    <div id="redeSociales">
                        <ul id="imagenesRedesSociales">
                            <li><a href="https://www.facebook.com/profile.php?id=100079080578395" target="_blank"><img src="img/redesSociales/facebook.png" title="Facebook"></a></li>
                            <li><a href="https://api.whatsapp.com/send?phone=59172810101&text=COLEGIO CATÓLICO ROBERTO FRANSEN" target="_blank"><img src="img/redesSociales/whatsapp.png" title="Whatsapp"></a></li>
                            <li><a href="https://www.google.com/maps/place/Colegio+Catolico+ROBERTO+FRANSEN/@-10.809849,-65.351585,18z/data=!4m14!1m7!3m6!1s0x93d3c4e99ab27cdf:0x8b34bd0f5568d22c!2sColegio+Catolico+ROBERTO+FRANSEN!8m2!3d-10.8099939!4d-65.3505014!16s%2Fg%2F11g9nlpkq5!3m5!1s0x93d3c4e99ab27cdf:0x8b34bd0f5568d22c!8m2!3d-10.8099939!4d-65.3505014!16s%2Fg%2F11g9nlpkq5?entry=ttu" target="_blank"><img src="img/redesSociales/ubicacion.png" title="Ubicación"></a></li>
                            <li><a href="https://www.instagram.com/col.roberto.fransen/?img_index=1" target="_blank"><img src="img/redesSociales/instagram.png" title="Instagram"></a></li>


                        </ul>
                    </div>
                </div>
                <div id="formularioEmpresa">
                    <form id="formulario" method="POST" action="index.php">
                        <h4>FORMULARIO CONTACTO</h4>
                        <input name="txtnombre" type="text" value="<?php echo htmlspecialchars($_POST['txtnombre']); ?>" placeholder="Ingrese su nombre y apellido">
                        <input name="txtcorreo" type="text" value="<?php echo htmlspecialchars($_POST['txtcorreo']); ?>" placeholder="Ingrese Direccion de correo">
                        <input name="txttelefono" type="text" value="<?php echo htmlspecialchars($_POST['txttelefono']); ?>" placeholder="Ingrese número de teléfono">
                        <input name="txtfecha" type="hidden" value="">
                        <textarea name="txtdetalle" placeholder="Detalle su consulta (max 100 caracteres)" maxlength="100"><?php echo htmlspecialchars($_POST['txtdetalle']); ?></textarea>
                        <input type="submit" value="ENVIAR" id="botonPortada">
                    </form>
                </div>
            </div>

        </footer>
    </div>
    

</body>
</html>