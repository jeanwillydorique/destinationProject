<?php

namespace App\Http\Controllers;
use App\Hotel as Hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class HotelController extends Controller
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

    public function addHotel(Request $request)
    {

        $hotel = new Hotel;


        $validator = Validator::make($request->all(),[
            'name' => 'required|string|',
            'logo' => 'required|string|',
            // 'address' => 'required|string|',
            // 'role_id' => 'required|integer|'
        ]);

        if($validator->fails()){

            return response()->json([
                'State' => "error",
                'Description' => $validator->errors(),
                ]);
        } else {
                
            $hotel->name = $request->name;
            $hotel->logo = $request->logo;

            $hotel->save();


            return response()->json([
                'State' => "success",
                'Description' => "Un hotel a été crée",
                ]);
        }

    }

    public function updateHotel(Request $request, $id)
    {
        $hotel = Hotel::where('id', $id)->get()->first();

        if ($hotel) {
                
            if ($request->input('name') != " ") {
                $hotel->name = $request->name;
            }
            if ($request->input('img') != " ") {
                $hotel->logo = $request->logo;
            }

            $hotel->save();


            return response()->json([
                'State' => "success",
                'Description' => "Un hotel a été modifié",
                ]);

        } else {
            
            return response()->json([
                'State' => "error",
                'Description' => "cet hotel n'existe pas",
                ]);
        }

    }

    public function deleteHotel($id)
    {
        $hotel = Hotel::where('id', $id)->get()->first();
        $hotel->delete();
        return response()->json([
                'State' => "success",
                'Description' => "Un hotel a été supprimé",
                ]);
    }

    //
}
