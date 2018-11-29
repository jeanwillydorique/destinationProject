<?php

namespace App\Http\Controllers;

use App\Destination as Destination;
use App\ArrivalAirport as ArrivalAirport;
use App\DepartureAirport as DepartureAirport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ViewsController extends Controller
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

    public function getDestination(){

            $destinations = Destination::All();
            $arrivalairports = ArrivalAirport::All();
            $departureairports = DepartureAirport::All();

            dd($destinations);

            if ($destinations) {
                        
                return response()->json([
                    'results' => $destinations,
                    ]);
    
            } else {
                
                return response()->json([
                    'State' => "error",
                    'Description' => "cette utilisateur n'existe pas",
                    ]);  
            }
    }

    //
}
