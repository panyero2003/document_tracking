<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\PurchaseOrder;


class TreasurerPurchaseOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $purchase_orders = PurchaseOrder::where(function($query) use ($request) {
            
            if (($term = $request->get('term'))) {

            $query->orWhere('const_id','like','%' . $term . '%');
            $query->orWhere('claimant_id','like','%' . $term . '%');
            $query->orWhere('pboobrno','like','%' . $term . '%');
            $query->orWhere('payee','like','%' . $term . '%');

            }
        })
                   
        ->orderBy('id', 'desc')
        ->where('is_released','<>','1')
        ->paginate(3);


        //$vouchers = Voucher::paginate(5);

        
        return view('treasurer.purchase_order.index', compact('purchase_orders'));
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
