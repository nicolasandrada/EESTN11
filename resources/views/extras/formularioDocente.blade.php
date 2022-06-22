<label for="">Nombre</label>
            <input type="text" name="nombre" id="" value={{$docente->nombre}}>

            <label for="">Apellido</label>
            <input type="text" name="apellido" id="" value={{$docente->apellido}}>

            <label for="">Dni</label>
            <input type="number" name="dni" id="" value={{$docente->dni}}>

            <label for="">Cuil</label>
            <input type="number" name="cuil" id="" value={{$docente->cuil}}>

            <label for="">Fecha de nacimiento</label>
            <input type="date" name="fecha_nacimiento" id="" value={{$docente->fecha_nacimiento}}>

            <label for="">Foto</label>
            <img src="/storage/{{$docente->foto}}" alt="">
            <input type="file" name="foto" id="">

            <input type="submit" value="Guardar">
