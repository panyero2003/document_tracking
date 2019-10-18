<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\RequisitionSlip;

use App\Department;

use App\Status;

class RequisitionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $requisitions = RequisitionSlip::orderBy('id', 'desc')->paginate(4);
        return view('admin.ris.index', compact('requisitions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = Department::lists('depname','id')->all();

        $status = Status::lists('name','id')->all();

        //$transactions = TransactionType::lists('name','id')->all();

        return view('admin.ris.create', compact('departments','status'));


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
        'dep_id' => 'required|max:100)',
        'pgsorisno' => 'required|max:100',
        
        ]);

       $input = $request->all();

        RequisitionSlip::create($input);

        return redirect('/requisition');
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
        $requisitions = RequisitionSlip::findOrFail($id);

        $department = Department::lists('depname','id')->all();

        $status = Status::lists('name','id')->all();

        //$transactions = TransactionType::lists('name','id')->all();

        
        return view('admin.ris.edit', compact('department','requisitions','status'));
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
        $ris =RequisitionSlip::findOrFail($id);

        $input = $request->all();

        $ris->update($input);

        return redirect('/requisition');
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
