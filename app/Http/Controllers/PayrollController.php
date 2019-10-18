<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Payroll;

use App\Department;

use App\Claimant;

use App\Status;

use App\Source;

class PayrollController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payrolls = Payroll::orderBy('id', 'desc')->paginate(2);
        return view('budget.payrolls.index', compact('payrolls'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = Department::lists('depname','id')->all();

        $claimants = Claimant::lists('claimantname','id')->all();

        $status = Status::lists('name','id')->all();

        $sources = Source::lists('name','id')->all();

        return view('budget.payrolls.create', compact('departments','claimants','status','sources'));
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
        // 'claimant_id' => 'required|max:2',
        // 'pboobrno' => 'required|max:15',
        'payee' => 'required|max:50',
        
        ]);

       $input = $request->all();

        Payroll::create($input);

        return redirect('/bud_payrolls');
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

        $departments = Department::lists('depname','id')->all();

        $claimants = Claimant::lists('claimantname','id')->all();

        $status = Status::lists('name','id')->all();

        
        return view('admin.payroll.edit', compact('departments','claimants','payrolls','status'));
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
