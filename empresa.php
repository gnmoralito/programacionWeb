<!doctype html>
<html lang="es">

<head>
    <!-- se corto la meta y los link al head.php -->
    <?php include "includes/head.php"; ?>

    <title>Empresa-progrmacionWeb</title>
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

    <!-- inicio del footer -->
    <?php include "includes/footer.php"; ?><!-- se copia en el head del index -->
    <!-- fin del footer -->

    <!-- inicio del scrip -->
    <?php include "includes/scrip.php"; ?><!-- se copia en el head del index -->
    <!-- fin del scrip -->
    

    
</body>

</html>