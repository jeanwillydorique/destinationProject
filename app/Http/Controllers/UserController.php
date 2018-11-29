<?php

namespace App\Http\Controllers;

use App\User as User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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

        return view('getusers', ['users' => $results]);
        // return response()->json([
        //     'results' => $results,
        //     'allname' => $allname,
        //     'alladdress' => $alladdress,
        //     'allddaressandname' => $alladdressandname,
        //     ]);
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

    public function adduser(Request $request)
    {

        $user = new User;

        $validator = Validator::make($request->all(),[
            'name' => 'required|string|',
            // 'email' => 'required|email|unique:users',
            // 'address' => 'required|string|',
            // 'role_id' => 'required|integer|'
        ]);

        if($validator->fails()){

            return response()->json([
                'State' => "error",
                'Description' => $validator->errors(),
                ]);
        } else {
                
            $user->name = $request->name;
            $user->address = "";//$request->address;
            $user->email = "";//$request->email;
            $user->role_id = 1;//$request->role_id;
            $user->avatar = $request->avatar;
            $user->content = $request->content;
            $user->ATK = $request->ATK;
            $user->DEF = $request->DEF;
            $user->type = $request->type;

            $user->save();


            return response()->json([
                'State' => "success",
                'Description' => "Un utilisateur a été crée",
                ]);
        }

    }

    public function updateuser(Request $request, $id)
    {
        $user = User::where('id', $id)->get()->first();

        if ($user) {
                
            if ($request->input('name') != " ") {
                $user->name = $request->name;
            }
            if ($request->input('avatar') != " ") {
                $user->avatar = $request->avatar;
            }
            if ($request->input('ATK') != " ") {
                $user->ATK = $request->ATK;
            }
            if ($request->input('DEF') != " ") {
                $user->DEF = $request->DEF;
            }
            if ($request->input('type') != " ") {
                $user->type = $request->type;
            }
            if ($request->input('content') != " ") {
                $user->content = $request->content;
            }

            $user->save();


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

    public function deleteuser($id)
    {
        $user = User::where('id', $id)->get()->first();
        $user->delete();
        return response()->json([
                'State' => "success",
                'Description' => "Un utilisateur a été supprimé",
                ]);
    }

    //
}
