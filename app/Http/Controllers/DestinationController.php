<?php

namespace App\Http\Controllers;
use App\Destination as Destination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class DestinationController extends Controller
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

    public function addDestination(Request $request)
    {

        $destination = new Destination;


        $validator = Validator::make($request->all(),[
            'name' => 'required|string|',
            'country' => 'required|string|',
            // 'address' => 'required|string|',
            // 'role_id' => 'required|integer|'
        ]);

        if($validator->fails()){

            return response()->json([
                'State' => "error",
                'Description' => $validator->errors(),
                ]);
        } else {
                
            $destination->name = $request->name;
            $destination->img = $request->img;
            $destination->country = $request->country;
            $destination->type_id = $request->type_id;
            $destination->departure_airport_id = $request->departure_airport_id;
            $destination->arrival_airport_id = $request->arrival_airport_id;
            $destination->company_id = $request->company_id;
            $destination->hotel_id = $request->hotel_id;

            $destination->save();


            return response()->json([
                'State' => "success",
                'Description' => "Un utilisateur a été crée",
                ]);
        }

    }

    public function updateDestination(Request $request, $id)
    {
        $destination = Destination::where('id', $id)->get()->first();

        if ($destination) {
                
            if ($request->input('name') != " ") {
                $destination->name = $request->name;
            }
            if ($request->input('img') != " ") {
                $destination->img = $request->img;
            }
            if ($request->input('country') != " ") {
                $destination->country = $request->country;
            }
            if ($request->input('type_id') != " ") {
                $destination->type_id = $request->type_id;
            }
            if ($request->input('departure_airport_id') != " ") {
                $destination->departure_airport_id = $request->departure_airport_id;
            }
            if ($request->input('arrival_airport_id') != " ") {
                $destination->arrival_airport_id = $request->arrival_airport_id;
            }
            if ($request->input('hotel_id') != " ") {
                $destination->hotel_id = $request->hotel_id;
            }
            if ($request->input('company_id') != " ") {
                $destination->company_id = $request->company_id;
            }

            $destination->save();


            return response()->json([
                'State' => "success",
                'Description' => "Un utilisateur a été modifié",
                ]);

        } else {
            
            return response()->json([
                'State' => "error",
                'Description' => "cette utilisateur n'existe pas",
                ]);
        }

    }

    public function deleteDestination($id)
    {
        $destination = Destination::where('id', $id)->get()->first();
        $destination->delete();
        return response()->json([
                'State' => "success",
                'Description' => "Un utilisateur a été supprimé",
                ]);
    }

    //
}
