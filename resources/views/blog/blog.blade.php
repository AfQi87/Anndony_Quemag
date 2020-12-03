@extends('principal.master')
@section('content')
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ url('/assets/bootstrap/img/img1.jpg')}}" class="d-block w-100" alt="No Se ha Popido Cargar la Imagen Actualiza La Pagina" style="height: 500px;width: 700px;">
    </div>
    <div class="carousel-item">
      <img src="{{ url('/assets/bootstrap/img/img2.jpg')}}" class="d-block w-100" alt="No Se ha Popido Cargar la Imagen Actualiza La Pagina" style="height: 500px;width: 700px;">
    </div>
    <div class="carousel-item">
      <img src="{{ url('/assets/bootstrap/img/img3.jpg')}}" class="d-block w-100" alt="No Se ha Popido Cargar la Imagen Actualiza La Pagina" style="height: 500px;width: 700px;">
    </div>
    <div class="carousel-item">
      <img src="{{ url('/assets/bootstrap/img/img4.jpg')}}" class="d-block w-100" alt="No Se ha Popido Cargar la Imagen Actualiza La Pagina" style="height: 500px;width: 700px;">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div>
    <h1 style="text-align: center;"></br></br>«Somos músicos pensando en músicos»</br></br></h1>
    <p style="text-align: justify;">
        <b>SOUNDS PARTY</b> es una empresa colombiana, dedicada a la importación y distribución de una gama amplia de productos, sobre todo de instrumentos
         musicales, sonido y aparatos electrónicos. <b>SOUNDS PARTY</b>, nace a comienzos del mes de noviembre de 2008, con el objetivo de suplir las 
         necesidades de los músicos y profesionales de nuestro país. Nos dedicamos al asesoramiento y venta de instrumentos musicales, equipos de audio 
         profesional y accesorios.Contamos con un equipo altamente especializado y el personal profesional adecuado en el asesoramiento de la venta y la 
         post venta para que la adquisición de cualquiera de nuestros productos, satisfaga las necesidades de nuestros clientes.Estamos ubicados en Ocaña 
         Norte de Santander, Cúcuta Norte de Santander y Aguachica Cesar.</br></br>
    </p>
    <h3>NUESTROS VALORES</br></br></h3>
    <p style="text-align: justify;">
        A lo largo de nuestro desarrollo nos ha caracterizado llevar a cabo nuestras labores bajo la integridad, cumplimiento, respaldo, garantía, 
        calidad y valentía y esto nos ha permitido posicionarnos en la distribución exclusiva y no exclusiva de marcas de talla internacional, como 
        BOSE, DAS, CUSTOM, BRIDGEWOOD, JMS, GIBSON, EPIPHONE, BEHRINGER, TAKSTAR, DADDARIO, ERNIE BALL, LA BELLA, VIC FIRTH, HOHNER, NUX, VANDOREN, 
        BIGGEST, YAMAHA y muchas más…</br></br>
    </p>
</div>

<div>
    <img src="{{ url('/assets/bootstrap/img/img2.png')}}" alt="Imagen no cargo Actualice la pagina" style="height: 800px;width: 1534px;margin-left: -220px;"/>
    <h1 style="margin-top: -550px;text-align: right;color: blanchedalmond;">Visión</h1>
    <p style="text-align: right;color: blanchedalmond;">
        Nuestra visión es en el 2024 ser la empress</br>
        número uno en la venta y distribución</br>
        de instrumentos musicales y sonido</br>
        posicionando nuestras propias</br>
        marcas de alta calidad en el mercado.</br>
    </p>
</div>

<div style="margin-top: 370px;">
    <img src="{{ url('/assets/bootstrap/img/img5.jpg')}}" alt="Imagen no cargo Actualice la pagina" style="height: 650px;width: 1534px;margin-left: -220px;"/>
    <h1 style="margin-top: -550px;text-align: left;color: blanchedalmond;">Misión</h1>
    <p style="text-align: justify;color: blanchedalmond;">
        Jazz Music Sound tiene como prioridad satisfacer, a las personas, empresas e instituciones relacionadas con una de las mejores actividades 
        desempeñadas por el ser humano, la música. Pretende ser una empresa de alta calidad y competencia, en cuanto a la atención, servicio, garantía 
        de la venta y distribución que satisfaga las expectativas de nuestros clientes especialmente los profesionales de la música y el sonido quienes
         noblemente se dedican a este arte.
    </p>
</div>
@stop