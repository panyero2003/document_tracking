<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Payroll;

use App\Department;

use App\Status;

use App\Claimant;

class PGOPayrollController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       $payrolls = Payroll::where(function($query) use ($request) {
            
            if (($term = $request->get('term'))) {

            $query->orWhere('dep_id','like','%' . $term . '%');
            $query->orWhere('claimant_id','like','%' . $term . '%');
            $query->orWhere('pboobrno','like','%' . $term . '%');
            $query->orWhere('payee','like','%' . $term . '%');

            }
        })
                   
        ->orderBy('id', 'desc')
        ->where('is_released_pgo','<>','1')
        ->paginate(5);


        //$vouchers = Voucher::paginate(5);

        
        return view('pgo.payroll.index', compact('payrolls'));
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
        //
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
        $payrolls = Payroll::findOrFail($id);

        $dept = Department::lists('depname','id')->all();

        $status = Status::lists('name','id')->all();

        $claimant = Claimant::lists('claimantname','id')->all();

        
        
        return view('pgo.payroll.edit', compact('payrolls','dept','status','claimant'));
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
        Payroll::findOrFail($id)->update($request->all());

        return redirect('/pgo_payrolls');
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
