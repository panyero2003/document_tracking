<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\PurchaseRequest;

use App\Department;

use App\Source;

use App\TransactionType;

use App\Status;

class PurchaseRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prs = PurchaseRequest::orderBy('id', 'desc')->paginate(4);
        return view('admin.pr.index', compact('prs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = Department::lists('depname','id')->all();

        $sources = Source::lists('name','id')->all();

        $status = Status::lists('name','id')->all();

        $transactions = TransactionType::lists('name','id')->all();

        return view('admin.pr.create', compact('departments','transactions','status','sources'));
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
        'bacprno' => 'required|max:100',
        
        ]);

       $input = $request->all();

        PurchaseRequest::create($input);

        return redirect('/purchase_request');
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
        $prs = PurchaseRequest::findOrFail($id);

        $dept = Department::lists('depname','id')->all();

        $source = Source::lists('name','id')->all();

        $status = Status::lists('name','id')->all();

        $transactions = TransactionType::lists('name','id')->all();

        
        return view('admin.pr.edit', compact('prs','dept','source','transactions','status'));
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
        PurchaseRequest::findOrFail($id)->update($request->all());

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
        PurchaseRequest::findOrFail($id)->delete();

        return redirect()->back();
    }
}
