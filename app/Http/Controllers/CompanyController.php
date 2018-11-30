<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Company as Company;

class CompanyController extends Controller
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

    public function addCompany(Request $request)
    {
      $company = new Company;

      $validator = Validator::make($request->all(),[
            'name' => 'required|string|max:30|min:2',
      ]);

      if ($validator->fails()) {
        return response()->json([
                'state' => 'error',
                'response' => $validator->errors(),
            ]);
      }else {
        $company->name = $request->input('name');
        $company->logo = $request->input('logo');

        $company->save();
      }
    }

    public function deleteCompany(Request $request, $id)
    {
      $company = Company::where('id', $id)->get()->first();

      if ($company) {
        $company->delete();
        return response()->json([
              'state' => 'success',
              'response'=> 'Delete Ok',
            ]);
      }else {
        return response()->json([
            'state' => 'error',
            'response' => 'Company not found',
          ]);
      }
    }

    public function updateCompany(Request $request, $id)
    {
      $company = Company::where('id', $id)->get()->first();

      $validator = Validator::make($request->all(),[
            'name' => 'required|string|max:30|min:2',
      ]);

      if ($company) {

        if ($validator->fails()) {
          return response()->json([
                  'state' => 'error',
                  'response' => $validator->errors(),
              ]);
        }else {
          if ($request->input('name') != "") {
              $company->name = $request->input('name');
          }
          $company->save();
              return response()->json([
                'state' => 'success',
                'response'=> 'Modification done',
              ]);
        }
      }else {
        return response()->json([
                'state' => 'error',
                'response' => 'Company not found',
            ]);
      }
    }
}
