<!doctype html>
<html lang="es">

<head>
    <!-- se corto la meta y los link al head.php -->
    <?php include "includes/head.php"; ?>

    <title>Inicio-progrmacionWeb</title>
</head>

<body>
    <!-- el header va a contener todo el menu principal -->
     <!-- contenido del header se corto y pego en header.php -->

    <!-- Se crea la sintaxis del php y se enlaza en includes del header.php -->
    
    <!-- inicio del header -->
    <?php include "includes/header.php"; ?><!-- se copia en el head del index -->
    <!-- fin del header -->

    <main> <!-- main: abarca todo el contenido visible -->
        <!-- contenido del mismo se corto y se pego en el header-->
        

        <div class="container-fluid banner">
            <div class="container">
                <h1>Desarrollo de páginas web y tiendas online</h1>
                <h2>Subtitulo de la pagina</h2>
                <a href="#" class="btn btn-info btn-lg">Detalles</a>
            </div>
        </div>    

    <section id = "servicios-destacados">
        <div class="container">
            <div class="row">
                <div class="col-md-12 titulo-seccion">
                    <h2>Servicios destacados</h2>
                    <hr>
                </div>
            </div>
            <div class="row"> <!-- filas -->
                <div class="col-md-4"> <!-- columna -->
                    <h3>Diseño Web</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo dignissimos
                            labore porro tempora corporis architecto fugiat, nisi nemo sed beatae quas
                            consequuntur, eaque et praesentium numquam corrupti quibusdam dolorem! Quis.</p>
                        <a href="detalle.php" class="btn btn-success">Detalles</a>
                </div> 
                <div class="col-md-4"> <!-- columna -->
                    <h3>Diseño gráfico</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo dignissimos
                            labore porro tempora corporis architecto fugiat, nisi nemo sed beatae quas
                            consequuntur, eaque et praesentium numquam corrupti quibusdam dolorem! Quis.</p>
                        <a href="detalle.php" class="btn btn-success">Detalles</a>
                </div> 
                <div class="col-md-4"> <!-- columna -->
                    <h3>SEO</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo dignissimos
                            labore porro tempora corporis architecto fugiat, nisi nemo sed beatae quas
                            consequuntur, eaque et praesentium numquam corrupti quibusdam dolorem! Quis.</p>
                        <a href="detalle.php" class="btn btn-success">Detalles</a>
                </div> 
            </div>
        </div>        
    </section>

    <section id="banner-medio">
        <div class="container-fluid">
            <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident amet possimus autem.</h2>
            <a href="#" class="btn btn-warning">Click</a>
        </div>
    </section>

    <!-- footer -->
    <section id="equipo">
        <div class="container">

                <div class="row">
                <div class="col-md-12 titulo-seccion">
                    <h2>Servicios destacados</h2>
                    <hr>
                </div>
            </div>
            

            <div class="row">
                <h2>Titulo</h2>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <img src="./images/fawkes_pic.JPG" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                                content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="./images/fawkes_pic.JPG" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                                content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="./images/fawkes_pic.JPG" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                                content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="./images/fawkes_pic.JPG" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                                content.</p>
                            <a href="detalle.php" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
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