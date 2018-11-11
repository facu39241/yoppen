<?php

namespace App\Http\Controllers;
use App\Provisioner;
use Illuminate\Http\Request;
use App\Http\Requests\ProvisionerRequest;

class ProvisionerController extends Controller
{
 
    public function index()
    {
        $provisioners=Provisioner::all();
        
        //echo $provisioner->articles;
        
        $provisioners = Provisioner::all();
        return view('provisioners.index')->with(['provisioners' => $provisioners]);
    }

  
    public function create()
    {
      
    }

  
    public function store(ProvisionerRequest $request)
    {
        $provisioner = new Provisioner;
        $provisioner->fill(
            $request->only(
                'name',
                'direccion',
                'phone',
                'cuit'
            )
        );
        $provisioner->save();
        return redirect()->to('provisioners');
    }

  
    public function show($id)
    {
        //
    }

  
    public function edit($id)
    {
        //
    }

    public function update(Provisioner $provisioner, ProvisionerRequest $request)
    {
        $provisioner->update(
            $request-> only(
                'name',
                'direccion',
                'phone',
                'cuit'
            )
        );

        return redirect()->to('provisioners');
    }

  
    public function destroy($id)
    {
        //
    }
}
