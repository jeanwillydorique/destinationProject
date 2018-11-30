<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\DepartureAirport as DepartureAirport;

class DepartureAirportController extends Controller
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

    public function addDepartureAirport(Request $request)
    {
      $departureAirport = new DepartureAirport;

      $validator = Validator::make($request->all(),[
            'name' => 'required|string|max:30|min:2',
            'code' => 'required|string|max:3|min:3',
      ]);

      if ($validator->fails()) {
        return response()->json([
                'state' => 'error',
                'response' => $validator->errors(),
            ]);
      }else {
        $departureAirport->name = $request->input('name');
        $departureAirport->code = $request->input('code');
        $departureAirport->logo = $request->input('logo');

        $departureAirport->save();
      }
    }
    public function deleteDepartureAirport(Request $request, $id)
    {
      $departureAirport = DepartureAirport::where('id', $id)->get()->first();

      if ($departureAirport) {
        $departureAirport->delete();
        return response()->json([
              'state' => 'success',
              'response'=> 'Delete Ok',
            ]);
      }else {
        return response()->json([
            'state' => 'error',
            'response' => 'Airport not found',
          ]);
      }
    }

    public function updateDepartureAirport(Request $request, $id)
    {
      $departureAirport = DepartureAirport::where('id', $id)->get()->first();

      $validator = Validator::make($request->all(),[
            'name' => 'required|string|max:30|min:2',
            'code' => 'required|string|max:3|min:3',
      ]);

      if ($departureAirport) {

        if ($validator->fails()) {
          return response()->json([
                  'state' => 'error',
                  'response' => $validator->errors(),
              ]);
        }else {
          if ($request->input('name') != "") {
              $departureAirport->name = $request->input('name');
              $departureAirport->code = $request->input('code');
          }
          $departureAirport->save();
              return response()->json([
                'state' => 'success',
                'response'=> 'Modification done',
              ]);
        }
      }else {
        return response()->json([
                'state' => 'error',
                'response' => 'Airport not found',
            ]);
      }
    }
}
