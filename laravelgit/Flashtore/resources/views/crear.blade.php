@extends('plantilla')

@section('css')
  <link rel="stylesheet" href="/css/formstylereg.css">
@endsection

@section('titulo') Crear Producto @endsection

@section('principal')

  <div class="row cont2">
    <div class="col-12 mx-auto entero2">
      <div class="card card-signin flex-row my-5">
        <div class="card-body">
          @foreach ($errors->all() as $error)
            <p class="alert alert-danger alert-dismissable">
            	<button type="button" class="close" data-dismiss="alert">&times;</button>
            	{{$error}}
            </p>
          @endforeach
          <form class="form-signin" method="POST" action="/Crear" enctype="multipart/form-data">
            {{csrf_field()}}
            <!--          ##IMAGEN ARTICULO##          -->
            <h5 class="card-title text-center">Agregar Articulo</h5>
            <div class="form-label-group">
              <label for="">Imagen del Producto</label> <br><br>
              <input type="file" name="imagen" class="form-control " id="">
            </div>


            <!--          ##MODELO##          -->
            <div class="form-row">
              <div class="form-label-group col">
                <input type="text" id="nombreProducto" name="nombreProducto" class="form-control" placeholder="Nombre Producto"  autofocus value="{{old("nombreProducto")}}">
                <label class="ml-1" for="nombreProducto">Nombre Producto</label>

              </div>

              <div class="form-label-group col">
                <input type="text" id="nombreModelo" name="nombreModelo" class="form-control" placeholder="nombreModelo" required autofocus value="{{old("nombreModelo")}}">
                <label class="ml-1" for="nombreModelo">Modelo</label>

              </div>
            </div>
            <hr>

            <!--          ##PRECIO-STOCK-OFERTA##          -->
            <div class="form-row">
              <div class="form-label-group col">
                <input type="text" id="stock" name="stock" class="form-control" placeholder="Stock" required value="{{old("stock")}}">
                <label class="ml-1" for="stock">Stock</label>

              </div>

              <div class="form-label-group col">
                <input type="precio" id="precio" name="precio" class="form-control" placeholder="Precio" required value="{{old("precio")}}">
                <label class="ml-1" for="precio">Precio</label>

              </div>

              <div class="form-label-group col">
                <input type="oferta" id="oferta" name="oferta" class="form-control" placeholder="Oferta" required value="{{old("oferta")}}">
                <label class="ml-1" for="oferta">Oferta</label>

              </div>
            </div>
            <hr>

            <!--          ##IMAGEN CATEGORIA##          -->
            <div class="form-group">
              <label for="cat">Categoria</label>
              <select class="form-control" name="cat" id="cat">

                  @foreach ($categorias as $categoria)
                    <option @if (old("cat") == $categoria["idcategoria"]) selected @endif class="pl-2" value="{{$categoria["idCategoria"]}}">{{$categoria["categoria"]}}</option>
                  @endforeach

              </select>
            </div>
            

            <hr>
            <!--          ##MARCA##          -->
            <div class="form-group">
              <label for="marca">Marca</label>
              <select class="form-control" name="marca" id="marca">

                  @foreach ($marcas as $marca)
                    <option @if (old("marca") == $marca["idMarca"]) selected @endif class="pl-2" value="{{$marca["idMarca"]}}">{{$marca["marca"]}}</option>
                  @endforeach

              </select>
            </div>

            <!--          ##DESCRIPCION##          -->

            <hr>


            <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="new" value="new">Ingresar datos</button>
            <hr class="my-4">

          </form>
        </div>
      </div>
    </div>
  </div>

@endsection
