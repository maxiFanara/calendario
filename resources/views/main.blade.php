<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar-scheduler@6.1.15/index.global.min.js'></script>

    @yield('header')
    <title>Calendario S21</title>
</head>

<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                Calendario S21
            </a>

            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="btn btn-success" aria-current="page" href="/nuevoEvento">Nuevo evento</a>

                </li>
            </ul>

            <ul class="nav justify-content-end">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <li class="nav-item">
                        <a class="btn btn-secondary" aria-current="page" href="/">Mes</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-secondary" href="/semana">Semana</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-secondary" href="/dia">Día</a>
                    </li>
                </div>
            </ul>
        </div>
    </nav>
    <div class="container">
        @yield('contenido')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>