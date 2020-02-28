@extends('plantilla')

@section('css')
  <link rel="stylesheet" href="/css/formstylereg.css">
@endsection

@section('titulo')Editar | {{$producto["nombreProducto"]}} @endsection

@section('principal')


    <div class="row cont2">
      <div class="col-12 mx-auto entero2">
        <div class="card card-signin flex-row my-5">
          <div class="card-body">
            <form class="form-signin" method="POST" action="/Editar/{{$producto["idProducto"]}}" enctype="multipart/form-data">
              {{csrf_field()}}
              <!--          ##IMAGEN ARTICULO##          -->
              <h5 class="card-title text-center">Editar Articulo</h5>

              <div class="mx-auto">
                    <a href="" class="mx-auto"><img style="width:308px; margin-bottom:20px" src="/storage/{{$producto->imagen->imagen}} "></a>
              </div>
              
              <div class="form-label-group">
                <label for="">Imagen del Producto</label> <br><br>
                <input type="file" name="imagen" class="form-control" id="">
              </div>


              <!--          ##MODELO##          -->
              <div class="form-row">
                <div class="form-label-group col">
                  <input type="text" id="nombreProducto" name="nombreProducto" class="form-control" placeholder="Nombre Producto"  autofocus value="{{$producto["nombreProducto"]}}">
                  <label class="ml-1" for="nombreProducto">Nombre Modelo</label>
                </div>

                <div class="form-label-group col">
                  <input type="text" id="nombreModelo" name="nombreModelo" class="form-control" placeholder="nombreModelo" required autofocus value="{{$producto->modelo->modelo}}">
                  <label class="ml-1" for="nombreModelo">Modelo</label>
                </div>
              </div>
              <hr>

              <!--          ##PRECIO-STOCK-OFERTA##          -->
              <div class="form-row">
                <div class="form-label-group col">
                  <input type="text" id="stock" name="stock" class="form-control" placeholder="Stock" required value="{{$producto["stock"]}}">
                  <label class="ml-1" for="stock">Stock</label>
                </div>

                <div class="form-label-group col">
                  <input type="precio" id="precio" name="precio" class="form-control" placeholder="Precio" required value="{{$producto["precioUnitario"]}}">
                  <label class="ml-1" for="precio">Precio</label>
                </div>

                <div class="form-label-group col">
                  <input type="oferta" id="oferta" name="oferta" class="form-control" placeholder="Oferta" required value="{{$producto["precioferta"]}}">
                  <label class="ml-1" for="oferta">Oferta</label>
                </div>
              </div>
              <hr>

              <!--          ##IMAGEN CATEGORIAO##          -->
              <div class="form-group">
                <label for="cat">Categoria</label>
                <select class="form-control" name="cat" id="cat">

                  @foreach ($categorias as $categoria)
                      <option @if ($producto["idCategoria"] == $categoria["idcategoria"]) selected @endif class="pl-2" value="{{$categoria["idcategoria"]}}">{{$categoria["categoria"]}}</option>
                  @endforeach

                </select>
              </div>

              <hr>

              <!--          ##MARCA##          -->
              <div class="form-group">
                <label for="marca">Marca</label>
                <select class="form-control" name="marca" id="marca">

                  @foreach ($marcas as $marca)
                      <option @if ($producto["idMarca"] == $marca["idMarca"]) selected @endif class="pl-2" value="{{$marca["idMarca"]}}">{{$marca["marca"]}}</option>
                  @endforeach

                </select>
              </div>

              <hr>

              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="edit" value="edit">Ingresar datos</button>
              <hr class="my-4">
              <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit" name="borrar" value="borrar">Borrar</button>

            </form>
          </div>
        </div>
      </div>
    </div>


@endsection
