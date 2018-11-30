<?php

namespace App\Http\Controllers;
use App\Type as Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class TypeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function addType(Request $request)
    {

        $type = new Type;


        $validator = Validator::make($request->all(),[
            'content' => 'required|string|',
            // 'address' => 'required|string|',
            // 'role_id' => 'required|integer|'
        ]);

        if($validator->fails()){

            return response()->json([
                'State' => "error",
                'Description' => $validator->errors(),
                ]);
        } else {
                
            $type->content = $request->content;

            $type->save();


            return response()->json([
                'State' => "success",
                'Description' => "Un type a été crée",
                ]);
        }

    }

    public function updateType(Request $request, $id)
    {
        $type = Type::where('id', $id)->get()->first();

        if ($type) {
                
            if ($request->input('content') != " ") {
                $type->content = $request->content;
            }

            $type->save();


            return response()->json([
                'State' => "success",
                'Description' => "Un type a été modifié",
                ]);

        } else {
            
            return response()->json([
                'State' => "error",
                'Description' => "ce type n'existe pas",
                ]);
        }

    }

    public function deleteType($id)
    {
        $type = Type::where('id', $id)->get()->first();
        $type->delete();
        return response()->json([
                'State' => "success",
                'Description' => "Un type a été supprimé",
                ]);
    }

    //
}
