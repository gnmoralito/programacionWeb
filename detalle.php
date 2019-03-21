<!doctype html>
<html lang="es">

<head>
    <!-- se corto la meta y los link al head.php -->
    <?php include "includes/head.php"; ?>

    <title>Detalle-progrmacionWeb</title>
</head>

<body>
    <!-- el header va a contener todo el menu principal -->
     <!-- contenido del header se corto y pego en header.php -->

    <!-- Se crea la sintaxis del php y se enlaza en includes del header.php -->
    
    <!-- inicio del header -->
    <?php include "includes/header.php"; ?><!-- se copia en el head del index -->
    <!-- fin del header -->

    <main> <!-- main: abarca todo el contenido visible -->

        <!-- Inicio del contenido-->
        
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <img src="images/img.jpg" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </section>

        <!-- Fin del contenido-->
        

        
    </main>

    <!-- inicio del footer -->
    <?php include "includes/footer.php"; ?><!-- se copia en el head del index -->
    <!-- fin del footer -->

    <!-- inicio del scrip -->
    <?php include "includes/scrip.php"; ?><!-- se copia en el head del index -->
    <!-- fin del scrip -->
    

    
</body>

</html>