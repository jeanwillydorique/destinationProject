<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\ArrivalAirport as ArrivalAirport;

class ArrivalAirportController extends Controller
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

    public function addArrivalAirport(Request $request)
    {
      $arrivalAirport = new ArrivalAirport;

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
        $arrivalAirport->name = $request->input('name');
        $arrivalAirport->code = $request->input('code');
        $arrivalAirport->logo = $request->input('logo');

        $arrivalAirport->save();
      }
    }
    public function deleteArrivalAirport(Request $request, $id)
    {
      $arrivalAirport = ArrivalAirport::where('id', $id)->get()->first();

      if ($arrivalAirport) {
        $arrivalAirport->delete();
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

    public function updateArrivalAirport(Request $request, $id)
    {
      $arrivalAirport = ArrivalAirport::where('id', $id)->get()->first();

      $validator = Validator::make($request->all(),[
            'name' => 'required|string|max:30|min:2',
            'code' => 'required|string|max:3|min:3',
      ]);

      if ($arrivalAirport) {

        if ($validator->fails()) {
          return response()->json([
                  'state' => 'error',
                  'response' => $validator->errors(),
              ]);
        }else {
          if ($request->input('name') != "") {
              $arrivalAirport->name = $request->input('name');
              $arrivalAirport->code = $request->input('code');
          }
          $arrivalAirport->save();
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
