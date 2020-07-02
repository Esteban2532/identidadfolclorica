<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <!-- Fonts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">   
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"  rel="stylesheet">     
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">

        
        
    </head>
    <body >
        <div id="app"></div>
        <div class="flex-center position-ref full-height">   
            
        @include('includes/navbar')  
        
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 slider">                    
                    <img src="{{ asset('img/slider.jpg') }}" alt="">
                </div>
            </div>
        </div>

        <div id="nosotros">
        <div class="container informacion mt-5">
            <hr class="my-4">
            <div class="titulo"><h1 class="">NOSOTROS</h1></div>
            <hr class="my-4">
            <div class="row">               
                <div class="col-sm-4 imagen">
                    <div><img src="{{ asset('img/nosotros.jpg') }}" alt=""></div>
                </div>
                <div class="col-sm-8">                    
                  
                    <p class="contenido"><span>IDENTIDAD FOLCLÓRICA</span>  somos una agrupación que aporta la música de nuestras raíces y buscamos  perder
                        la tradición, se esmeran en hacer ameno cualquier tipo de festividad e integrar a las personas
                        hacer parte temporal del grupo, interpretando cualquiera de sus instrumentos y sintiendo la
                        música desde una perspectiva de ejecutante recordando y sintiendo ritmos de Cumbias, Porros,                        
                        Pasillos y Bambucos que nos identifican como Colombianos.</p>
                </div>
                          
            </div>
        </div>
    </div>
   
        <div id="historia" class="jumbotron jumbotron-fluid mt-5">           
            <div class="container">  
                    <h1 class="display-4">NUESTRA HISTORIA</h1> 
                    <hr class="my-4">      
                    <p class="lead"><span>IDENTIDAD FOLCLÓRICA</span>  nació en Manizales como un proyecto de amigos y ex integrantes del 
                        programa de bandas de diferentes municipios, especialmente del municipio de La Merced Caldas, y así, conformar una agrupación tradicional que interpretara reconocido repertorio Colombiano y conservar la tradición de estas músicas tan nuestras que nos identifican como Colombianos. Además  ser un complemento a nuestras vidas reuniéndonos hacer lo que más nos gusta, 
                        Música, y compartirla con ustedes, desde los más pequeños, hasta los adultos mayores. <br/>La agrupación Identidad Folclórica inició en el año 2016 conformado por 6 integrantes, repartidos entre instrumentos melódicos y de percusión</p>
                </div>               
        </div>

        <div id="eventos" class="container eventos mt-5">
            <div class="row"> 
                <div class="col-sm-12">
                    <h1 class="titulo">EVENTOS</h1>
                </div>
                <div class="col-sm-6 imagen">
                    <div class="card mt-5 mb-5">                        
                        <div class="card-body">
                            <img src="{{ asset('img/nosotros.jpg') }}" alt="">
                            <div class="info mt-2">
                            <div class="card-title">XXX Fiestas de la Cordialidad</div>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam quos, 
                            molestias voluptatem sapiente voluptas corrupti ipsum impedit voluptates animi quae facilis
                            nobis dolor sint obcaecati ullam ea quasi tenetur quo.
                            <br><span class="badge badge-success">Manzanares 2017</span> </div>                                                    
                        </div>                       
                    </div>
                </div>  
                <div class="col-sm-6 imagen">
                    <div class="card mt-5 mb-5">                        
                        <div class="card-body">
                            <img src="{{ asset('img/nosotros.jpg') }}" alt="">
                            <div class="info mt-2">
                            <div class="card-title">Encuentro de egresados colegio Monseñor Antonio <br> José Giraldo Gomez</div>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam quos, 
                            molestias voluptatem sapiente voluptas corrupti ipsum impedit voluptates animi quae facilis
                            nobis dolor sint obcaecati ullam ea quasi tenetur quo.
                            <br> <span class="badge badge-success">La Merced 2017</span> </div>                                                    
                        </div>                       
                    </div>
                </div>  
                <div class="col-sm-6 imagen">
                    <div class="card mt-5 mb-5">                        
                        <div class="card-body">
                            <img src="{{ asset('img/nosotros.jpg') }}" alt="">
                            <div class="info mt-2">
                            <div class="card-title">Eventos secretaria de infancia y adolescencia </div>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam quos, 
                            molestias voluptatem sapiente voluptas corrupti ipsum impedit voluptates animi quae facilis
                            nobis dolor sint obcaecati ullam ea quasi tenetur quo.
                            <br><span class="badge badge-success">Manizales 2019</span> </div>                                                    
                        </div>                       
                    </div>
                </div>  
                <div class="col-sm-6 imagen">
                    <div class="card mt-5 mb-5">                        
                        <div class="card-body">
                            <img src="{{ asset('img/nosotros.jpg') }}" alt="">
                            <div class="info mt-2">
                            <div class="card-title">XXI Fiestas de la Cordialidad</div>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam quos, 
                            molestias voluptatem sapiente voluptas corrupti ipsum impedit voluptates animi quae facilis
                            nobis dolor sint obcaecati ullam ea quasi tenetur quo.
                            <br><span class="badge badge-success">Manzanares 2019</span> </div>                                                    
                        </div>                       
                    </div>
                </div>  
                <div class="col-sm-6 imagen">
                    <div class="card mt-5 mb-5">                        
                        <div class="card-body">
                            <img src="{{ asset('img/nosotros.jpg') }}" alt="">
                            <div class="info mt-2">
                            <div class="card-title">64ª Ferias de Manizales</div>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam quos, 
                            molestias voluptatem sapiente voluptas corrupti ipsum impedit voluptates animi quae facilis
                            nobis dolor sint obcaecati ullam ea quasi tenetur quo.
                            <br><span class="badge badge-success">Manizales 2019</span> </div>                                                    
                        </div>                       
                    </div>
                </div>  
                <div class="col-sm-6 imagen">
                    <div class="card mt-5 mb-5">                        
                        <div class="card-body">
                            <img src="{{ asset('img/nosotros.jpg') }}" alt="">
                            <div class="info mt-2">
                            <div class="card-title">Eventos privados</div>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam quos, 
                            molestias voluptatem sapiente voluptas corrupti ipsum impedit voluptates animi quae facilis
                            nobis dolor sint obcaecati ullam ea quasi tenetur quo.
                            <br> <span class="badge badge-success">Manizales 2018-2019</span>
                            <span class="badge badge-success">Villamaria 2018-2019</span> </div>                                                    
                        </div>                       
                    </div>
                </div>                 
               
            
            </div>
        </div>    
       {{--  <div id="integrantes" class="container bg-dark integrantes mt-5">
            <div class="row">
                <div class=""></div>
            </div>
        </div>    
          <div id="galeria" class="container-fluid bg-dark galeria mt-5">
              <div class="row">                  
                  <div class=""></div>
              </div>
          </div>  
           --}}
          @include('includes/footer')
    </body>
</html>
