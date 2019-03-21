<!doctype html>
<html lang="es"><!-- para cambiar idioma -->
  <head>
     <!--INICIO DEL HEAD-->
    <?php include 'includes/head.php'; ?>
     <!--INICIO DEL HEAD-->


  <title>Contactos - Fio Infolibreria</title>
  </head>
  <body>
      <!--INICIO DEL HEADER-->
      <?php include 'includes/header.php'; ?>
      <!--FIN DEL HEADER-->
  <main>
      <section>
        <div class="container">
        
        <div class="col-md-12">
         
          <div class="row">
            <div class="col-md-12 titulo-seccion">
              <h2>Contactanos aqui</h2>
              <hr>
            </div>
          </div>

          <div class="row">
            <div class="col-md-3">
              <h2>Informaciones</h2>
              <div class="media">
              <i class="material-icons">
                email
              </i>
              <div class="media-body">
              <h5 class="mt-0">e-mail</h5>
              eligiomolinas@gmail.com
              </div>
            </div>

            <hr>
            <div class="media">
              <i class="material-icons">
              contact_phone
              </i>
              <div class="media-body">
              <h5 class="mt-0">Telefono</h5>
              0973 543 311
              </div>
            </div>

            <hr>

            <div class="media">
              <i class="material-icons">
              edit_location
              </i>
              </i>
              <div class="media-body">
              <h5 class="mt-0">direccion</h5>
              MG-AP-PY
              </div>
            </div>


            </div>
            <div class="col-md-9">
              <h2>Formulario</h2>

              <form method="GET" action="">
                <label>Nombre</label>
                <input type="text" name="nombre" class="form-control" required>

                <label>E-mail</label>
                <input type="email" name="email" class="form-control" required>

                <label>Telefono</label>
                <input type="text" name="telefono" class="form-control">

                <label>Asunto</label>
                <input type="text" name="asunto" class="form-control">

                <label>Mensaje</label>
                <textarea class="form-control" cols="30" rows="10" name="mensaje" required></textarea>

                <br>

                <input type="submit" name="enviar" value="Enviar" class="btn btn-success">

              </form>

            </div>
          </div>
          
         

          </div>
       
        </div>


      </section>

      <section> <!-- una nueva section -->
        <div class="container-fluid">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14403.479553783354!2d-54.6295968!3d-25.5093855!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb12fbfc9747b41e3!2sCapacit!5e0!3m2!1ses!2spy!4v1552603379299" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          
        </div>        
      </section>
      
    </main>
    <!--INICIO DEL FOOTER-->
      <?php include 'includes/footer.php'; ?>
       <!--FIN DEL FOOTER-->


        <!--INICIO DEL SCRIPT-->
      <?php include 'includes/script.php'; ?>
       <!--FIN DEL SCRIPT-->
  </body>
</html>