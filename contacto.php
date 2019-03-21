<!doctype html>
<html lang="es">

<head>
    <!-- se corto la meta y los link al head.php -->
    <?php include "includes/head.php"; ?>

    <title>Contactos-progrmacionWeb</title>
</head>

<body>
    <!-- el header va a contener todo el menu principal -->
     <!-- contenido del header se corto y pego en header.php -->

    <!-- Se crea la sintaxis del php y se enlaza en includes del header.php -->
    
    <!-- inicio del header -->
    <?php include "includes/header.php"; ?><!-- se copia en el head del index -->
    <!-- fin del header -->

    <main>


        <section>
            <div class="container">
                <div class="col-md-12">
                    <img src="images/img.jpg" class="img-fluid">
                </div>
            

            <div class="row">
                    <div class="col-md-12 titulo-seccion">
                        <h2>Sobre Nosotros</h2>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <p>lorem Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora obcaecati eos quibusdam ut rerum quam praesentium cum exercitationem quas, impedit aperiam, explicabo suscipit dolorem facilis corporis, placeat molestiae. Perferendis</p>
                    
                </div>
            </div>
        </section>
        
    
    </main>


        <section class="pd-20">
            <div class="container">
                <div class="col-md-12">
                    <!--<img src="images/img.jpg" class="img-fluid">-->
                </div>
            

            <div class="row">
                    <div class="col-md-12 titulo-seccion">
                        <h2>Nuestros Servicios</h2>
                        <hr>
                    </div>
                </div>
                <div class="row"> <!-- filas -->
                    <div class="col-md-4"> <!-- columna -->
                        <h3>Diseño Web</h3>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo dignissimos
                                labore porro tempora corporis architecto fugiat, nisi nemo sed beatae quas
                                consequuntur, eaque et praesentium numquam corrupti quibusdam dolorem! Quis.</p>
                            <a href="#" class="btn btn-success">Detalles</a>
                    </div> 
                    <div class="col-md-4"> <!-- columna -->
                        <h3>Diseño gráfico</h3>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo dignissimos
                                labore porro tempora corporis architecto fugiat, nisi nemo sed beatae quas
                                consequuntur, eaque et praesentium numquam corrupti quibusdam dolorem! Quis.</p>
                            <a href="#" class="btn btn-success">Detalles</a>
                    </div> 
                    <div class="col-md-4"> <!-- columna -->
                        <h3>SEO</h3>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo dignissimos
                                labore porro tempora corporis architecto fugiat, nisi nemo sed beatae quas
                                consequuntur, eaque et praesentium numquam corrupti quibusdam dolorem! Quis.</p>
                            <a href="#" class="btn btn-success">Detalles</a>
                    </div> 
                </div>
            </div>
        </section>
        
    
        </main>


        <section>
            <div class="container">
                
            <div class="row">
                    <div class="col-md-12 titulo-seccion">
                        <h2>Contacto</h2>
                        <hr>
                    </div>
                </div>

                <div class="row">
                   <div class="col-md-3">
                       <h2>Informaciones</h2>

                       <div class="media">
                        <!--<img src="..." class="mr-3" alt="...">-->
                        <!-- For IE9 or below. -->

                        <i class="material-icons">email</i>
                        <div class="media-body">
                          <h5 class="mt-0">Email</h5>
                          gnmorales99@gmail.com
                      </div>

                   </div>
                <hr>    
                   <div class="media">
                    <!--<img src="..." class="mr-3" alt="...">-->
                    <!-- For IE9 or below. -->

                    <i class="material-icons">phone</i>
                    <div class="media-body">
                      <h5 class="mt-0">Telefono</h5>
                      0993-554-545
                  </div>
               </div>
               <hr>

               <div class="media">
                <!--<img src="..." class="mr-3" alt="...">-->
                <!-- For IE9 or below. -->

                    <i class="material-icons">home</i>
                    <div class="media-body">
                    <h5 class="mt-0">Direccion</h5>
                    Pdte. Franco
                    </div>
                </div>

                    </div>

                   <div class="col-md-9">
                        <h2>Formulario</h2>
                        <form method="GET" action="">
                            <label for="">Nombre</label>
                            <input type="text" name="nombre"class="form-control" required>

                            <label for="">Email</label>
                            <input type="email" name="email"class="form-control"required>

                            <label for="">Telefono</label>
                            <input type="text" name="telefono"class="form-control">

                            <label for="">Asunto</label>
                            <input type="text" name="asunto"class="form-control">

                            <label for="">Mensaje</label>
                            <textarea name="mensaje"class="form-control" id="" cols="30" rows="10"></textarea>

                            <br>
                            <!--Boton enviar-->
                            <input type="submit"name="enviar" value="Enviar" class="btn btn-success">
                        </form>
                    </div>
                </div>
            </div>
        </section>
        
        <section>
            <div class="container-fluid">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14403.479553783354!2d-54.6295968!3d-25.5093855!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb12fbfc9747b41e3!2sCapacit!5e0!3m2!1ses-419!2spy!4v1552603385795"
                    width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
        </section>
        
    
        </main>

<!-- inicio del footer -->
<?php include "includes/footer.php"; ?><!-- se copia en el head del index -->
<!-- fin del footer -->

<!-- inicio del scrip -->
<?php include "includes/scrip.php"; ?><!-- se copia en el head del index -->
<!-- fin del scrip -->



</body>

</html>