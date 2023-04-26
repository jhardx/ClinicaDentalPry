<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="container-fluid">
        <img src="{{asset('images/inicio-img.jpg')}}" alt="" class="inicio-img">

        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <div class="navbar-collapse nav-flex" id="navbarNav">
                    <ul class="navbar-nav nav-flex">
                        <li class="nav-item">
                            <span><img src="{{asset('images/logo-clinica.jpg')}}" alt="" class="logo-inicio"></span>
                        </li>
                        <li class="nav-item">
                            <span>123123213123</span>
                        </li>
                        <li class="nav-item">
                            <span>Av.Las flores</span>
                        </li>
                        <li class="nav-item">
                            <span>Lun/Vier - 8:00am a 10pm </span>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <nav class="navbar sticky-top navbar-expand-lg">
            <div class="container-fluid">
                <button class="navbar-toggler bg-secondary" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse nav-flex" id="navbarNav">
                    <ul class="navbar-nav ">
                        <li class="nav-item">
                            <a class="nav-link" href="#scrollspyHeading1">INICIO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#scrollspyHeading2">SERVICIOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#scrollspyHeading3">NOSOTROS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#scrollspyHeading4">CONTACTANO</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    
    <div class="">
    </div>
</body>

</html>
