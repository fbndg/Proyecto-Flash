<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Imagen;
use App\Categoria;
use App\Marca;
use App\Modelo;



class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $desk = Producto::where("idCategoria", "=", 1) ->where("rating", ">", 7)
                              ->orderBy("rating", "DESC")
                              ->get();
        $note = Producto::where("idCategoria", "=", 2) ->where("rating", ">", 7)
                              ->orderBy("rating", "DESC")
                              ->get();
        $imp = Producto::where("idCategoria", "=", 3) ->where("rating", ">", 7)
                              ->orderBy("rating", "DESC")
                              ->get();
        $imagenes = Imagen::all();
        $vac = compact('desk', 'note', 'imp', 'imagenes');
        return view("index", $vac);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $productos = Producto::all();
        $imagenes = Imagen::all();
        $vac = compact('productos', 'imagenes');
        return view("productos", $vac);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function productosBorrados()
    {
        $productos = Producto::where("borrar", "=", 1)
                              ->orderBy("idProducto")
                              ->get();
        $imagenes = Imagen::all();
        $vac = compact('productos', 'imagenes');
        return view("productos", $vac);
    }

    public function category($id)
    {

      $productos = Producto::where("idCategoria", "=", $id)
                            ->orderBy("idProducto")
                            ->get();
      $imagenes = Imagen::all();
      $vac = compact('productos', 'imagenes');
      return view("productos", $vac);


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function detalle($id)
    {
        $producto = Producto::find($id);
        $vac = compact('producto');
        return view("producto", $vac);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
     public function crear()
     {
        $categorias = Categoria::all();
        $marcas = Marca::all();
        $vac = compact('marcas', 'categorias');
         return view("crear", $vac);
     }

     /**
      * Show the form for editing the specified resource.
      *
      * @param  \App\Producto  $producto
      * @return \Illuminate\Http\Response
      */
    public function crearPost(Request $req)
    {

        $reglas = [
          "nombreProducto" => "string|max:120",
          "nombreModelo" => "string",
          "stock" => "numeric",
          "precio" => "numeric",
          "oferta" => "numeric",
          "cat" => "numeric",
          "marca" => "numeric",
          "imagen" => "file|image"
        ];

        $mensajes = [
          "string" => "El campo :attribute solo admite texto",
          "max" => "Esté campo :attribute solo admite :max caracteres",
          "numeric" => "En este campo :attribute solo se admiten numeros",
          "file" => "Estó no es un archivo",
          "image" => "Solo se permiten imagenes"
        ];

        $this->validate($req, $reglas, $mensajes);

        $productoNuevo = new Producto();
        $imagenNueva = new Imagen();
        $modeloNuevo = new Modelo();

        $ruta = $req->file("imagen")->store("public");
        $nombreImagen = basename($ruta);

        $imagenNueva->imagen = $nombreImagen;
        $imagenNueva->save();
        $modeloNuevo->modelo = $req["nombreModelo"];
        $modeloNuevo->save();

        $nuevoModelos = Modelo::where("modelo", "=", $req["nombreModelo"])
                              ->get();
        foreach ($nuevoModelos as $nuevoModelo) {
          $productoNuevo->idModelo = $nuevoModelo->idModelo;
        }


        $nuevaImagenes = Imagen::where("imagen", "=", $nombreImagen)
                              ->get();
        foreach ($nuevaImagenes as $nuevaImagen) {
        $productoNuevo->idImagen = $nuevaImagen["idImagen"];
        }

        $productoNuevo->nombreProducto = $req["nombreProducto"];
        $productoNuevo->stock = $req["stock"];
        $productoNuevo->precioUnitario = $req["precio"];
        $productoNuevo->precioferta = $req["oferta"];
        $productoNuevo->idCategoria = $req["cat"];
        $productoNuevo->idMarca = $req["marca"];

        $productoNuevo->save();

        $news = Producto::where("nombreProducto", "=", $req["nombreProducto"])
                              ->get();
        foreach ($news as $new) {
          $id = $new;
        }
        return redirect("/Producto/$id->idProducto");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */


     public function editver($id)
     {
         $producto = Producto::find($id);
         $categorias = Categoria::all();
         $marcas = Marca::all();
         $modelo = Modelo::all();
         $vac = compact('producto', 'categorias', 'marcas', 'modelo');
         return view("edit", $vac);
     }

     /**
      * Show the form for editing the specified resource.
      *
      * @param  \App\Producto  $producto
      * @return \Illuminate\Http\Response
      */
      public function edit($id, Request $req)
      {

          if ($req["borrar"]) {
            $producto = Producto::find($id);
            if ($producto->borrar == 1) {
              $producto->borrar = 0;
            }else {
              $producto->borrar = 1;
            }

            $producto->save();
            return redirect("/Store");
          }


          $reglas = [
          "nombreProducto" => "string|max:120",
          "nombreModelo" => "string",
          "stock" => "numeric",
          "precio" => "numeric",
          "oferta" => "numeric",
          "cat" => "numeric",
          "marca" => "numeric",
          "imagen" => "file|image"
          ];

          $mensajes = [
            "string" => "El campo :attribute solo admite texto",
            "max" => "Esté campo :attribute solo admite :max caracteres",
            "numeric" => "En este campo :attribute solo se admiten numeros",
            "file" => "Estó no es un archivo",
            "image" => "Solo se permiten imagenes"
          ];

          $this->validate($req, $reglas, $mensajes);

          $producto = Producto::find($id);

          $idImagen = $producto->idImagen;
          $imagen = Imagen::find($idImagen);
          $ruta = $req->file("imagen")->store("public");
          $nombreImagen = basename($ruta);
          $imagen->imagen = $nombreImagen;
          $imagen->save();

          $idModelo = $producto->idModelo;
          $Modelo = Modelo::find($idModelo);
          $Modelo->modelo = $req["nombreModelo"];
          $Modelo->save();

          $producto->nombreProducto = $req["nombreProducto"];
          $producto->stock = $req["stock"];
          $producto->precioUnitario = $req["precio"];
          $producto->precioferta = $req["oferta"];
          $producto->idCategoria = $req["cat"];
          $producto->idMarca = $req["marca"];

          $producto->save();

          return redirect("/Producto/$id");


      }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        //
    }
}
