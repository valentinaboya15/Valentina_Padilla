@extends('main')
@section('contenido')
<h1> Bienvenidos A La Tienda Consintiendo A Mi Mascota </h2>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://estaticos.muyinteresante.es/uploads/images/article/570b65e55bafe88a438b456a/perro_0.jpg" class="d-block w-100" alt="..." height ="550">
            </div>
            <div class="carousel-item">
                <img src="https://img.bekiamascotas.com/articulos/portada/103000/103020.jpg" class="d-block w-100" alt="..." height ="550">
            </div>
            <div class="carousel-item">
                <img src="https://m.eltiempo.com/files/image_640_428/uploads/2020/01/24/5e2b3d39116e4.jpeg" class="d-block w-100" alt="..." height ="550">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

@stop