<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Voucher;

use App\Department;

use App\Claimant;

use App\SupplierContractor;

use App\Source;

use App\Status;

class VoucherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vouchers = Voucher::paginate(5);

        return view('admin.voucher.index', compact('vouchers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $source = Source::lists('name','id')->all();

        $contractors = SupplierContractor::lists('constname','id')->all();

        $departments = Department::lists('depname','id')->all();

        $claimants = Claimant::lists('claimantname','id')->all();

        $status = Status::lists('name','id')->all();

        return view('admin.voucher.create', compact('departments','claimants','contractors','source','status'));

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
        // 'dep_id' => 'required|max:2)',
        // 'claimant_id' => 'required|max:2',
        // 'const_id' => 'required|max:2',
        'pboobrno' => 'required|max:15',
        //'payee' => 'required|max:50',
        
        ]);

       $input = $request->all();

        Voucher::create($input);

        return redirect('/bud_vouchers');
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
        $vouchers = Voucher::findOrFail($id);

        $contractors = SupplierContractor::lists('constname','id')->all();

        $departments = Department::lists('depname','id')->all();

        $claimants = Claimant::lists('claimantname','id')->all();

        
        return view('admin.voucher.edit', compact('departments','claimants','contractors','vouchers'));
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
        $vouchers =Voucher::findOrFail($id);

        $input = $request->all();

        $vouchers->update($input);

        return redirect('/bud_prs');
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
