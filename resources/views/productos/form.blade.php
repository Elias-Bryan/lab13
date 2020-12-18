
<form>
    <div class="form-group">
        <label for="Nombre">{{'Nombres'}}</label>
        <input class="form-control" type="text" name="Nombre" id="Nombre" value="{{ isset($producto->Nombre)?$producto->Nombre:''}}">
    </div>
    <div class="form-group">
        <label for="Categoria">{{'Apellidos'}}</label>
        <input class="form-control" type="text" name="Categoria" id="Categoria" value="{{ isset($producto->Categoria)?$producto->Categoria:''}}">
    </div>
    <div class="form-group">
        <label for="Cantidad">{{'Edad'}}</label>
        <input class="form-control" type="text" name="Cantidad" id="Cantidad" value="{{ isset($producto->Cantidad)?$producto->Cantidad:''}}">
    </div>
    <div class="form-group">       
        <label for="Precio">{{'Celular'}}</label>
        <input class="form-control" type="text" name="Precio" id="Precio" value="{{ isset($producto->Precio)?$producto->Precio:''}}">       
    </div>
    <div class="form-group">
        <label for="Foto">{{'Foto'}}</label>   
    </div>

@if(isset($producto))
<br/>
<img src="{{ asset('storage').'/'. $producto->Foto}}" class="img-thumbnail img-fluid" alt="" width="100">
<br/>
@endif
<input type="file" name="Foto" id="Foto" value="">
</br>

<input class="form-control"  type="submit" value="{{ $Modo=='crear' ? 'Agregar' :'Modificar'}}">

<a class ="btn btn-danger"href="{{url('productos')}}">Regresar</a>