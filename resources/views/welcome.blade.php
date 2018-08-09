<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"> 
        <link rel="stylesheet" href="{{ asset('css/estiloindex.css') }}"> 
    </head>
    <body>
        
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-8">
                    <div class="titulos">
                        <h3>UNIVERSIDAD MAYOR DE SAN ANDRÉS</h3>
                        <h4>FACULTAD DE CIENCIAS ECONÓMICAS Y FINANCIERAS</h4>
                        <h5>PROCESO DE ADMISIÓN FACULTATIVA 2018</h5>
                        <br>
                        <br>
                        <a href="{{ url('estudiantes') }}" class="btn btn-info btn-lg">Estudiantes</a>
                        <p class="descripcion-btn">Listado de Estudiantes y Generador de credenciales</p>
                    </div>
                    <hr>
                </div>
                
            </div>   
        </div>
        <script src="{{ asset('js/jquery-3.3.1.slim.min.js') }}"></script>
        <script src="{{ asset('js/popper.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/fontawesome-all.min.js') }}"></script>
    </body>
</html>
