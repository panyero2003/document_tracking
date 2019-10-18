<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\SupplierContractor;

class SupplierContractorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $contractors = SupplierContractor::where(function($query) use ($request) {
            
            if (($term = $request->get('term'))) {

            $query->orWhere('constname','like','%' . $term . '%');
            $query->orWhere('address','like','%' . $term . '%');
            

            }
        })
                   
        ->orderBy('id', 'desc')
        ->paginate(5);
       // $contractors = SupplierContractor::paginate(5);

        return view('admin.suppliercontractor.index', compact('contractors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.suppliercontractor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
        'constname' => 'required|max:100)',
        'address' => 'required|max:100',
        
        ]);

       $input = $request->all();

        SupplierContractor::create($input);

        return redirect('/contractor');
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
        $contractors = SupplierContractor::findOrFail($id);

        return view('admin.suppliercontractor.edit', compact('contractors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $contractors = SupplierContractor::findOrFail($id);

        $input = $request->all();

        $contractors->update($input);

        return redirect('/contractor');
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
