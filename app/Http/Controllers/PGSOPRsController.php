<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\PurchaseRequest;

class PGSOPRsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       {
        // $payrolls = Payroll::orderBy('id', 'desc')->paginate(5);
        // return view('accounting.payrolls.index', compact('payrolls'));

        $prs = PurchaseRequest::where(function($query) use ($request) {
            
            if (($term = $request->get('term'))) {

            $query->orWhere('dep_id','like','%' . $term . '%');
            $query->orWhere('claimant_id','like','%' . $term . '%');
            $query->orWhere('pboobrno','like','%' . $term . '%');
            $query->orWhere('payee','like','%' . $term . '%');

            }
        })
                   
        ->orderBy('id', 'desc')
        ->where('is_released_pgso','<>','1')
        ->paginate(4);


     
        return view('pgso.purchase_request', compact('prs'));

    
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
        //
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
        //
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
