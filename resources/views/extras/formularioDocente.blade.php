<label for="">Nombre</label>
<input class="form-control" type="text" name="nombre" id="" value="{{isset($docente->nombre)?$docente->nombre:""}}">

<label for="">Apellido</label>
<input class="form-control" type="text" name="apellido" id="" >

<label for="">Dni</label>
<input class="form-control" type="number" name="dni" id="" >

<label for="">Cuil</label>
<input class="form-control" type="number" name="cuil" id="" >

<label for="">Fecha de nacimiento</label>
<input class="form-control" type="date" name="fecha_nacimiento" id="" >

<label for="">Foto</label>

<input class="form-control" type="file" name="foto" id="">

<input class="form-control" type="submit" value="Guardar">
