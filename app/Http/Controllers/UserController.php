<?php

namespace App\Http\Controllers;

use App\User as User;

class UserController extends Controller
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

    public function index()
    {
        return response()->json([
            'state' => 'success',
            'description' => 'c\'est good', 
            ]);
    }

    public function getUsers()
    {
        $results = app('db')->select("SELECT * FROM users");
        $data = app('db')->select("SELECT name, address FROM users");

        $allname = array(
            "listname" => array()
        );
        $alladdress = array(
            "listadress" => array()
        );
        $alladdressandname = array(
            "content" => array(),
        );
        
        $i = 1;  
        foreach ($results as $result) {
            $allname['listname'][] = array(
              'name[' . $i . ']'  => $result->name,
            );
            $alladdress['listadress'][] = array(
                'address[' . $i . ']' => $result->address,
            );
            $alladdressandname['content'][] = array(
                'name[' . $i . ']' => $result->name,
                'address[' . $i . ']' => $result->address,
            );
            $i++;
        };
        $insert = User::All();
        return response()->json([
            'results' => $results,
            'allname' => $allname,
            'alladdress' => $alladdress,
            'allddaressandname' => $alladdressandname,
            ]);
    }

    public function getUser($id)
    {
        $results = User::where('id', $id)->get()->first();
        $insert = User::All();

        if ($results) {
                    
            return response()->json([
                'results' => $results,
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
