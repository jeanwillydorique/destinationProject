<?php

namespace App\Http\Controllers;

use App\Destination as Destination;
use App\ArrivalAirport as ArrivalAirport;
use App\DepartureAirport as DepartureAirport;
use App\Hotel as Hotel;
use App\Company as Company;
use App\Type as Type;
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

    public function getDestinations(){

            $destinations = Destination::All();
            $arrivalairports = ArrivalAirport::All();
            $departureairports = DepartureAirport::All();


            if ($destinations) {
                        
                return view('home', ['destinations' => $destinations]);
                // return response()->json([
                //     'results' => $destinations,
                //     ]);
    
            } else {
                
                return response()->json([
                    'State' => "error",
                    'Description' => "cette utilisateur n'existe pas",
                    ]);  
            }
    }


    public function getDestination($id){

        $destination = Destination::where('id', $id)->get()->first();

        if ($destination) {
                    
            return view('destinationPage', ['destination' => $destination]);
            // return response()->json([
            //     'results' => $destinations,
            //     ]);

        } else {
            
            return response()->json([
                'State' => "error",
                'Description' => "cette utilisateur n'existe pas",
                ]);  
        }
    }

    public function CRUDPage(){

        $destinations = Destination::All();
        $arrivalairports = ArrivalAirport::All();
        $departureairports = DepartureAirport::All();
        $hotel = Hotel::All();
        $company = Company::All();
        $type = Type::All();


        if ($destinations) {
                    
            return view('CRUDPage', [
                'destination' => $destinations,
                'arrivalairports' => $arrivalairports,
                'departureairports' => $departureairports,
                'hotel' => $hotel,
                'company' => $company,
                'type' => $type,
                ]);
            // return response()->json([
            //     'results' => $destinations,
            //     ]);

        } else {
            
            return response()->json([
                'State' => "error",
                'Description' => "cette utilisateur n'existe pas",
                ]);  
        }
    }

    //
}
