<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EEST 11</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</head>
<body>
    <h1>EEST 11 - Islas Malvinas </h1>
    <div class="row ">
        <form class="col-6" action="/docente" method="post" enctype="multipart/form-data">
            @csrf
            <label for="">Nombre</label>
            <input type="text" name="nombre" id="">

            <label for="">Apellido</label>
            <input type="text" name="apellido" id="">

            <label for="">Dni</label>
            <input type="number" name="dni" id="">

            <label for="">Cuil</label>
            <input type="number" name="cuil" id="">

            <label for="">Fecha de nacimiento</label>
            <input type="date" name="fecha_nacimiento" id="">

            <label for="">Foto</label>
            <input type="file" name="foto" id="">

            <input type="submit" value="Guardar">
        </form>
    </div>
</body>
</html>
