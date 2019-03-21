<!doctype html>
<html lang="es">

<head>
    <!-- se corto la meta y los link al head.php -->
    <?php include "includes/head.php"; ?>

    <title>Servicios-progrmacionWeb</title>
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

<!-- inicio del footer -->
<?php include "includes/footer.php"; ?><!-- se copia en el head del index -->
<!-- fin del footer -->

<!-- inicio del scrip -->
<?php include "includes/scrip.php"; ?><!-- se copia en el head del index -->
<!-- fin del scrip -->



</body>

</html>