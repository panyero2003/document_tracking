<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Payroll;

use App\Department;

use App\Claimant;

use App\Status;
class PayrollBudgetController extends Controller
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
        ->where('is_released','<>','1')
        ->paginate(5);


        //$vouchers = Voucher::paginate(5);

        
        return view('budget.payrolls.index', compact('payrolls'));
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
        $prs = Payroll::findOrFail($id);

        $depts = Department::lists('depname','id')->all();

        //$source = Source::lists('name','id')->all();

        $status = Status::lists('name','id')->all();

       
        $payrolls = Payroll::findOrFail($id);

      

        return view('budget.payrolls.edit', compact('payrolls','depts','status'));
    }

        
    //     return view('budget.payrolls.edit', compact('departments','claimants','payrolls','status'));
    // }

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

        return redirect('/bud_payrolls');
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
