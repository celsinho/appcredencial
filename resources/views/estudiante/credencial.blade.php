<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Credencial</title>

<style>
*{
    margin: 0px;
    padding: 0px;
}
@page{
    margin: 0px 0px;          
}
h4{
    font-family: Calibri, sans-serif;
    font-size: 10px; 
    color: #1565C0;
}
.contenido-cara{
    position: absolute;
    /*border: 1px solid #000;*/
    width: 8.64cm;
    height: 5.39cm;
}

/*----------- CABECERA ----------*/
.cred-cabecera{
    height: 53px;
    width: 100%;
    margin-top: -5px;
    padding-top: 5px;
}
.cabecera-logo{
    margin-top: 5px; 
    margin-left: 10px;
    height: 47px;
    width: 26px;
    float: left;
}
.cabecera-titulo{
    margin-top: 10px;
    margin-left: -35px;
    text-align: center;
    float: left;
}

/*------------ LINEAS -----------*/
.linea-rojo{
    background-color: #E53935; 
    height: 5px;
    width: 95%;
    margin: 0 auto;
}
.linea-azul{
    background-color: #1565C0; 
    height: 5px;
    width: 95%;
    margin: 0 auto;
}

/*--------- CUERPO -------------*/
.cred-cuerpo{
    height: 98px;
    width: 100%;
}
.cuerpo-foto{
    margin: 0px;
    margin-top: 5px;
    padding: 0px;
    width: 2.9cm;
    heigth: 100%;
    float: left;
    text-align: center;
}
.cuerpo-foto-estudiante{
    height: 95px;
    width: 95px;
    margin-left: 10px;
}
.cuerpo-datos{
    margin: 0px;
    margin-top: 0px;
    padding: 0px;
    width: 5.4cm;
    heigth: 100%; 
    float: left;
}

.cuerpo-datos-campos{
    font-family: Calibri, sans-serif;
    font-size: 14px; 
    color: #1176A8;
}
.cuerpo-datos-estudiante{
    color: #757575;
    font-size: 10px; 
}

.cuerpo-estudiantes{
    height: 1.8cm;
    margin-top: 0.8cm;
}

.cuerpo-carrera{
    float: left;
    margin-top: 5px;
    width: 100%;
    text-align: center;

}

.cuerpo-carrera-eco, .cuerpo-carrera-admin, .cuerpo-carrera-conta{
    font-family: Calibri, sans-serif;
    font-size: 11px; 
    font-weight: bold;
    padding-top: 0.1cm;
    padding-bottom: 0.1cm;
}
.cuerpo-carrera-eco{  
    color: #827717;
    background-color: #FFEE58;
}
.cuerpo-carrera-admin{
    color: #01579B;
    background-color: #4FC3F7;
}
.cuerpo-carrera-conta{
    color: #1B5E20;
    background-color: #81C784;    
}
.cuerpo-barcode{
    padding-top: 1px;
    text-align: center;
}

/*--------- CONTENIDO ATRAS -----------*/
.contenido-atras{
    text-align: center;
}
.tabla-atras{
    margin-left: 5px; 
    margin-top: 10px; 
    width: 8cm;
}
.titulo-atras{
    text-align: center;
}
.texto-atras{
    font-size: 12px; 
    text-align: justify; 
    color: #000;
}
.caducidad-atras{
    text-align: right; 
    font-size: 13px; 
    font-weight: bold;
}

</style>
</head>
<body>
    <!--pagina frontal del credencial-->
    <div class="contenido-cara">
        <div class="cred-cabecera">
            <div class="cabecera-logo">
                <img src="{{ public_path('images/logo.gif') }}" alt="" height="46px" width="26px">
            </div>
            <div class="cabecera-titulo">
                <h4>UNIVERSIDAD MAYOR DE SAN ANDRÉS</h4>
                <h4>FACULTAD DE CIENCIAS ECONÓMICAS Y FINANCIERAS</h4>
                <h4>Proceso de Admisión Facultativa 2018</h5>
            </div>
        </div>

        <div class="linea-rojo"></div>
        <div class="linea-azul"></div>
        
        <div class="cred-cuerpo">
            <table>
                <tr>
                    <td>
                        <div class="cuerpo-foto">
                            <div class="cuerpo-foto-estudiante">
                                @if($estudiante->idCarrera == "EC")
                                <img src="{{ public_path('fotos/EC/'.$estudiante->nombreFoto) }}" height="94px" width="94px">
                                @endif
                                @if($estudiante->idCarrera == "AD")
                                <img src="{{ public_path('fotos/AD/'.$estudiante->nombreFoto) }}" height="94px" width="94px">
                                @endif
                                @if($estudiante->idCarrera == "CO")
                                <img src="{{ public_path('fotos/CO/'.$estudiante->nombreFoto) }}" height="94px" width="94px">
                                @endif
                            </div>
                            <p class="cuerpo-datos-campos">{{ $estudiante->ci }}</p>            
                        </div>
                    </td>
                    <td>
                        <div class="cuerpo-datos">
                            <div class="cuerpo-carrera">
                                @if($estudiante->idCarrera == "EC")
                                    <p class="cuerpo-carrera-eco">ECONOMÍA</p>
                                @endif
                                @if($estudiante->idCarrera == "AD")
                                    <p class="cuerpo-carrera-admin">ADMINISTRACIÓN DE EMPRESAS</p>
                                @endif
                                @if($estudiante->idCarrera == "CO")
                                    <p class="cuerpo-carrera-conta">CONTADURÍA PÚBLICA</p>
                                @endif
                            </div>
                            <div class="cuerpo-estudiantes">
                                <p class="cuerpo-datos-campos"><span class="cuerpo-datos-estudiante">PATERNO: </span>{{ $estudiante->paterno }}</p>
                                <p class="cuerpo-datos-campos"><span class="cuerpo-datos-estudiante">MATERNO: </span>{{ $estudiante->materno }}</p>
                                <p class="cuerpo-datos-campos"><span class="cuerpo-datos-estudiante">NOMBRES: </span>{{ $estudiante->nombres }}</p>
                            </div>
                            <div class="cuerpo-barcode">
                                <!--{!! DNS1D::getBarcodeHTML("$estudiante->ci", "C39E",1,30,"black") !!}--> 
                                <img src="data:image/png;base64,{{DNS1D::getBarcodePNG($estudiante->ci, 'C128',1,30)}}" height="35px" width="150px" alt="barcode" />
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </div> 
    </div>

    <!-- Página trasera del credencial -->
    <div class="contenido-atras">
        <table class="tabla-atras">
            <tr>
                <th class="titulo-atras"><h3>I M P O R T A N T E</h3></th>
            </tr>
            <tr>
                <td class="texto-atras">
                    Para el ingreso al examen, el postulante deberá portar su Credencial y su Cédula de identidad de manera obligatoria.
                </td>
            </tr>
            <tr>
                <td class="caducidad-atras">Válido hasta Noviembre de 2018</td>
            </tr>
            <tr>
                <td>
                    <img src="{{ public_path('images/posterior.png') }}" height="100px" >
                </td>
            </tr>
        </table>
    </div>

</body>
</html>