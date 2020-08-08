<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CompanyRequest;

use App\Company;
use Illuminate\Support\Facades\Storage;
class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company = Company::first();
        return view('company.index')->with(['company' => $company ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $company = new Company;
     $company->fill(
          $request->only(
             'company_id',
             'name',
             'email',
             'responsable',
             'direction',
             'city',
             'date_init',
             'phone',
             'cuit'
          )
     );
     $company->save();
     return redirect()->to('company');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(company $company)
    {
        $company->name = request()->name;
        $company->email = request()->email;
        $company->responsable = request()->responsable;
        $company->direction = request()->direction;
        $company->city = request()->city;
        $company->date_init = request()->date_init;
        $company->phone = request()->phone;
        $company->cuit = request()->cuit;
        
        $company->save();

        return redirect('/company'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
