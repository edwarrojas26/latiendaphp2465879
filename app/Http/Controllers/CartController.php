<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //MOSTRAR LA VARIABLE DE SESSION "cart"

       //var_dump(session('cart'));
       return view('cart.index');
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
    public function store(Request $request)
    {
        //ESTRUCTURAR LA INFORMACION DEL PRODUCTO EN UN ARRAY
        $producto = [ 
                        [
                    "nombre" => $request -> prod_nom,
                    "id" => $request ->prod_id,
                    "cantidad" => $request->cantidad,
                    "precio" => $request->prod_pre

                    ]
                ];

        if(!session('cart')){
            //no existe la variable de sesion
            //crear el estado de sesion del cart
            $auxiliar[] = $producto;
            session(['cart' => $auxiliar]);

        }else{
            //existe la variable de session
            //extraer el contenido de la session 'cart'
            $auxiliar = session('cart');
            //agregar el nuevo item al arreglo
            $auxiliar[] = $producto;
            //volver a  rear la session 'cart'
            //con el contenido añadido
            session(['cart' => $auxiliar]);
        }
        //CREAR EL ESTADO DE SESSION 'CART'

       //redireccionar al catalogo de productos
       //con mensaje de exito

       return redirect('productos')
       ->with('mensajito' , 'Producto añadido al carrito');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //echo "Eliminar carrito";
        session()->forget('cart');
        return redirect('cart')
            ->with('mensaje' , "carrito eliminar");
    }
}
