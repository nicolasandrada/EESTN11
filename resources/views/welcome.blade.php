<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EEST 11</title>
</head>
<body>
    <h1>EEST 11 - Islas Malvinas </h1>
    <div>
        <h2>Docentes en lista </h2>
        @foreach ($docentes as $d)
        <div style="background-color: gold; margin-bottom: 20px">
            <img src="storage/{{$d->foto}}" alt="">
            <h3>id {{ $d->id }}</h3>
            <h3>nombre {{$d->nombre}}</h3>
            <h3>apellido {{$d->apellido}}</h3>


            <form action="/docente/{{ $d->id }}/edit" method="get">

                <input type="submit" value="Modificar" >
            </form>

            <form action="/docente/{{ $d->id }}" method="post">
                @csrf
                {{ method_field('DELETE') }}
                <input type="submit" value="Eliminar" onclick="return confirm('Esta seguro que quiere eliminar???')">
            </form>

        </div>
        @endforeach

        {{$docentes->links()}}
    </div>
</body>
</html>
