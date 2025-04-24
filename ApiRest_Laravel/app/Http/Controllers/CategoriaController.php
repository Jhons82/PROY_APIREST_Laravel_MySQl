<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categoria;

class categoriacontroller extends Controller
{
    public function getCategoria(){
        /* Metodo Listar */
        /* Retorno de todos los registros */
        return response()->json(categoria::all(),200);
    }

    public function getCategoriaById($id){
        /* Metodo Buscar */
        $categoria = categoria::find($id);
        /* Condicional para retorno de datos o Mensaje de Error */
        if(is_null($categoria)){
            /* json para Error 404 */
            return response()->json(['Mensaje'=>'Registro no Encontrado'],404);
        }
        return response()->json($categoria::find($id),200);
    }

    public function insertCategoria(Request $request) {
        $categoria = categoria::create($request->all());
        return response()->json($categoria, 201);
    }
    
    public function updateCategoria(Request $request, $id) {
        $categoria = categoria::find($id);
        if(is_null($categoria)){
            return response()->json(['Mensaje'=>'Registro no Encontrado'],404);
        }
        $categoria->update($request->all());
        return response($categoria, 200);
    }

    public function deleteCategoria(Request $request, $id) {
        $categoria = categoria::find($id);
        if(is_null($categoria)) {
            return response()->json(['Mensaje'=>'Registro no Encontrado'],404);
        }
        /* Cambiar Estado de Categoria desde Postman */
        $categoria->update($request->only('estado'));
        return response()->json(['Mensaje'=>'Registro Eliminado'],200);

        /* Eliminar Registro de DB (No es buena practica) */
        /* if(is_null($categoria)){
            return response()->json(['Mensaje'=>'REgistro no Encontrado'],404);
        }
        $categoria->delete();
        return response()->json(['Mensaje'=>'Registro Eliminado'],200); */
    }
}
