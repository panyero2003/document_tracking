<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\VoucherNoOBR;

use App\Department;

use App\Claimant;

use App\SupplierContractor;

class VoucherNoOBRController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vnoobrs = VoucherNoOBR::orderBy('id', 'desc')->paginate(7);
        return view('admin.vouchernoobr.index', compact('vnoobrs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contractors = SupplierContractor::lists('constname','id')->all();

        $departments = Department::lists('depname','id')->all();

        $claimants = Claimant::lists('claimantname','id')->all();

        return view('admin.vouchernoobr.create', compact('departments','claimants','contractors'));
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
        'dep_id' => 'required|max:2)',
        'claimant_id' => 'required|max:2',
        'const_id' => 'required|max:2',
        'dvno' => 'required|max:15',
        'payee' => 'required|max:50',
        
        ]);

       $input = $request->all();

        VoucherNoOBR::create($input);

        return redirect('/vnoobrs');
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
       $vnoobrs = VoucherNoOBR::findOrFail($id);

        $contractors = SupplierContractor::lists('constname','id')->all();

        $departments = Department::lists('depname','id')->all();

        $claimants = Claimant::lists('claimantname','id')->all();

        
        return view('admin.vouchernoobr.edit', compact('departments','claimants','contractors','vnoobrs'));
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
        $vnoobrs =VoucherNoOBR::findOrFail($id);

        $input = $request->all();

        $vnoobrs->update($input);

        return redirect('/vnoobrs');
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
