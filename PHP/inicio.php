<?php
include ('header.php')
    ?>

<!-- Carousel -->
<div class="container mt-1">
    <div class="row">
        <div class="col-12 col-md-3 text-center">
            <img src="../imagenes/industria  logo.png" class="img-fluid mx-auto d-block mt-3" alt="">
        </div>
        <div class="col-12 col-md-6">
            <hr>
            <b>
                <h1 class="text-center" id="titulo">Industria Militar</h1>
            </b>
            <hr>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10">
            <div id="carouselExampleCaptions" class="carousel slide mt-5" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../imagenes/Otros/20.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <div class="descripcion">
                                <div class="container" id="misionyvision">
                                    <div class="row mt-5">
                                        <div class="col-12 col-md-8 mx-auto">
                                            <h3 class="text-center">MISIÓN</h3>
                                            <p class="text-center">
                                                Fabricar, importar, comercializar y distribuir artículos, bienes,
                                                equipos, armas y suministros de toda clase, que requiera el Ejército de
                                                Guatemala.
                                            </p>
                                            <img src="../imagenes/industria.png" alt="" class="mx-auto d-block">
                                        </div>
                                    </div>
                                    <div class="row mt-5 mb-5">
                                        <div class="col-12 col-md-8 mx-auto">
                                            <h3 class="text-center"> VISIÓN</h3>
                                            <p class="text-center">
                                                Ser la industria líder en satisfacer las necesidades administrativas y
                                                operativas del Ejército de Guatemala, proveyendo calzado, vestuario y
                                                equipo militar de la más alta calidad.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="../imagenes/Otros/11.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../imagenes/Otros/03.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../imagenes/Otros/01.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../imagenes/Otros/02.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Categorias -->
<section class="container py-5 mt-5">
    <div class="row text-center pt-3">
        <div class="col-lg-6 m-auto">
            <h1 class="h1">Categoria de Productos</h1>
            <p>
                En nuestra tienda Militar se pueden encontrar diversidad de Articulos Militares.
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-4 p-5 mt-3">
            <a href="./uniformes.php"><img src="../imagenes/Uniformes.jpg" class="rounded-circle img-fluid border"></a>
            <h5 class="text-center mt-3 mb-3">Uniformes</h5>
            <p class="text-center"><a href="Uniformes_FT.php" class="btn btn-success ">Ver Mas</a></p>
        </div>
        <div class="col-12 col-md-4 p-5 mt-3">
            <a href="./calzado.php"><img src="../imagenes/calzado.jpeg" class="rounded-circle img-fluid border"></a>
            <h2 class="h5 text-center mt-3 mb-3">Calzado</h2>
            <p class="text-center"><a href="calzado.php" class="btn btn-success">Ver Mas</a></p>
        </div>
        <div class="col-12 col-md-4 p-5 mt-3">
            <a href="parches.php"><img src="../imagenes/condecoraciones.jpeg" class="rounded-circle img-fluid border"></a>
            <h2 class="h5 text-center mt-3 mb-3">Distintivos y Condecoraciones</h2>
            <p class="text-center"><a class="btn btn-success">Ver Mas</a></p>
        </div>
    </div>
</section>



<?php
include ('footer.php');
?>