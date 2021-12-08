<!DOCTYPE html>



<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- ETIQUETAS REFERENCIALES -->
    <meta name="description" content="Tienda Online logistica">
    <meta name="keywords" content="tienda, compras, precio, ventas, ecomerce, comercio, online, store, TEM, tecnología">
    <!--<meta http-equiv="author" content="Abdias Alvarado">-->
    <title>Logistica</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="style/bootstrap.min.css" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="style/font-awesome.min.css">

    <!-- Hoja de estilo personalizada -->
    <link type="text/css" rel="stylesheet" href="style/custom.css" />

    <link rel="stylesheet" type="text/css" href="home.css">
    <title> Home</title>
</head>

<body>




    @foreach ($agentes as $agente)




    <!-- product -->
    <div class="col-md-3 col-xs-6">
        <div class="product">
            <div class="product-img">
                <img class="imgagente" src="{{asset($agente->url)}}" alt="">
            </div>
            <div class="product-body">
                <p class="product-category">Agente</p>
                <h3 class="product-name"><a href="#">{{$agente->nombre}}</a></h3>
                <div class="valoracion">
                    <input id="radio1" type="radio" name="estrellas" value="5">
                    <label for="radio1"><i class="fa fa-star"></i></label>
                    <input id="radio2" type="radio" name="estrellas" value="4">
                    <label for="radio2"><i class="fa fa-star"></i></label>
                    <input id="radio3" type="radio" name="estrellas" value="3">
                    <label for="radio3"><i class="fa fa-star"></i></label>
                    <input id="radio4" type="radio" name="estrellas" value="2">
                    <label for="radio4"><i class="fa fa-star"></i></label>
                    <input id="radio5" type="radio" name="estrellas" value="1">
                    <label for="radio5"><i class="fa fa-star"></i></label>
                </div>
                <h4 class="product-price">Ver mas</h4>
                <p>Teléfono:
                    {{$agente->telefono}}
                    <i class="glyphicon glyphicon-envelope">
                        {{$agente->email}}
                    </i>
                </p>
                <div class="product-btns">
                    <button class="add-to-wishlist"><i class="fa fa-heart-o"></i></button>
                    <button class="add-to-cart"><i class="fa fa-shopping-cart"></i></button>
                </div>
            </div>
        </div>
    </div>
    <!-- /product -->




    <body>


        @endforeach



    </body>

</html>