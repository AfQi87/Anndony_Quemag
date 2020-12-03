@extends('principal.master')
@section('content')

    <div>
        <h1 style="text-align: center;"> </br> Catalogo De Instrumentos De Viento</h1>
            <table >
                <tr>
                    <td>
                        <div class="card" style="width: 18rem; margin-right: 120px;margin-bottom: 50px;" >
                            <img src="{{ url('/assets/bootstrap/img/viento1.png')}}" class="card-img-top" alt="No se puedo cargar la imagen actualiza l apagina" style="width: 300px;height: 300px;">
                            <div class="card-body">
                            @foreach ($iv1 as $v1)    
                                <h5 class="card-title">{{ $v1}}</h5>
                            @endforeach 
                            <a href="" class="btn btn-success" style="margin-left: 170px;">Comprar</a>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="card" style="width: 18rem; margin-right: 120px;margin-bottom: 50px;" >
                            <img src="{{ url('/assets/bootstrap/img/viento2.png')}}" class="card-img-top" alt="No se puedo cargar la imagen actualiza l apagina" style="width: 300px;height: 300px;">
                            <div class="card-body">
                            @foreach ($iv2 as $v2)    
                                <h5 class="card-title">{{ $v2}}</h5>
                            @endforeach 
                            <a href="" class="btn btn-success" style="margin-left: 170px;">Comprar</a>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="card" style="width: 18rem; margin-right: 120px;margin-bottom: 50px;" >
                            <img src="{{ url('/assets/bootstrap/img/viento3.jpg')}}" class="card-img-top" alt="No se puedo cargar la imagen actualiza l apagina" style="width: 300px;height: 300px;">
                            <div class="card-body">
                            @foreach ($iv3 as $v3)    
                                <h5 class="card-title">{{ $v3}}</h5>
                            @endforeach 
                            <a href="" class="btn btn-success" style="margin-left: 170px;">Comprar</a>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="card" style="width: 18rem; margin-right: 120px;margin-bottom: 50px;" >
                            <img src="{{ url('/assets/bootstrap/img/viento4.png')}}" class="card-img-top" alt="No se puedo cargar la imagen actualiza l apagina" style="width: 300px;height: 300px;">
                            <div class="card-body">
                            @foreach ($iv4 as $v4)    
                                <h5 class="card-title">{{ $v4}}</h5>
                            @endforeach 
                            <a href="" class="btn btn-success" style="margin-left: 170px;">Comprar</a>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="card" style="width: 18rem; margin-right: 120px;margin-bottom: 50px;" >
                            <img src="{{ url('/assets/bootstrap/img/viento5.jpg')}}" class="card-img-top" alt="No se puedo cargar la imagen actualiza l apagina" style="width: 18rem;height: 300px;">
                            <div class="card-body">
                            @foreach ($iv5 as $v5)    
                                <h5 class="card-title">{{ $v5}}</h5>
                            @endforeach 
                            <a href="" class="btn btn-success" style="margin-left: 170px;">Comprar</a>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="card" style="width: 18rem; margin-right: 120px;margin-bottom: 50px;" >
                            <img src="{{ url('/assets/bootstrap/img/viento6.jpg')}}" class="card-img-top" alt="No se puedo cargar la imagen actualiza l apagina" style="width: 300px;height: 300px;">
                            <div class="card-body">
                            @foreach ($iv6 as $v6)    
                                <h5 class="card-title">{{ $v6}}</h5>
                            @endforeach 
                            <a href="" class="btn btn-success" style="margin-left: 170px;">Comprar</a>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
    </div>



    <div>
        <h1 style="text-align: center;"> </br> Catalogo De Instrumentos De Cuerda</h1>
    </br>
            <table >
                <tr>
                    <td>
                        <div class="card" style="width: 18rem; margin-right: 120px;margin-bottom: 50px;" >
                            <img src="{{ url('/assets/bootstrap/img/cuerda1.png')}}" class="card-img-top" alt="No se puedo cargar la imagen actualiza l apagina" style="width: 300px;height: 300px;">
                            <div class="card-body">
                            @foreach ($ic1 as $c1)    
                                <h5 class="card-title">{{ $c1}}</h5>
                            @endforeach 
                            <a href="" class="btn btn-success" style="margin-left: 170px;">Comprar</a>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="card" style="width: 18rem; margin-right: 120px;margin-bottom: 50px;" >
                            <img src="{{ url('/assets/bootstrap/img/cuerda2.png')}}" class="card-img-top" alt="No se puedo cargar la imagen actualiza l apagina" style="width: 300px;height: 300px;">
                            <div class="card-body">
                            @foreach ($ic2 as $c2)    
                                <h5 class="card-title">{{ $c2}}</h5>
                            @endforeach 
                            <a href="" class="btn btn-success" style="margin-left: 170px;">Comprar</a>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="card" style="width: 18rem;height: 510px; margin-right: 120px;margin-bottom: 50px;" >
                            <img src="{{ url('/assets/bootstrap/img/cuerda3.png')}}" class="card-img-top" alt="No se puedo cargar la imagen actualiza l apagina" style="width: 300px;height: 300px;">
                            <div class="card-body">
                            @foreach ($ic3 as $c3)    
                                <h5 class="card-title">{{ $c3}}</h5>
                            @endforeach 
                            <a href="" class="btn btn-success" style="margin-left: 170px;">Comprar</a>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="card" style="width: 18rem; margin-right: 120px;margin-bottom: 50px;" >
                            <img src="{{ url('/assets/bootstrap/img/cuerda4.png')}}" class="card-img-top" alt="No se puedo cargar la imagen actualiza l apagina" style="width: 300px;height: 300px;">
                            <div class="card-body">
                            @foreach ($ic4 as $c4)    
                                <h5 class="card-title">{{ $c4}}</h5>
                            @endforeach 
                            <a href="" class="btn btn-success" style="margin-left: 170px;">Comprar</a>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="card" style="width: 18rem; margin-right: 120px;margin-bottom: 50px;" >
                            <img src="{{ url('/assets/bootstrap/img/cuerda5.jpg')}}" class="card-img-top" alt="No se puedo cargar la imagen actualiza l apagina" style="width: 18rem;height: 300px;">
                            <div class="card-body">
                            @foreach ($ic5 as $c5)    
                                <h5 class="card-title">{{ $c5}}</h5>
                            @endforeach 
                            <a href="" class="btn btn-success" style="margin-left: 170px;">Comprar</a>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="card" style="width: 18rem; margin-right: 120px;margin-bottom: 50px;" >
                            <img src="{{ url('/assets/bootstrap/img/cuerda6.png')}}" class="card-img-top" alt="No se puedo cargar la imagen actualiza l apagina" style="width: 300px;height: 300px;">
                            <div class="card-body">
                            @foreach ($ic6 as $c6)    
                                <h5 class="card-title">{{ $c6}}</h5>
                            @endforeach 
                            <a href="" class="btn btn-success" style="margin-left: 170px;">Comprar</a>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
    </div>
@stop