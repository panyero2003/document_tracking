<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\PurchaseRequest;

use App\Department;

use App\Status;

use App\Source;


class BudgetPRsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $prs = PurchaseRequest::where(function($query) use ($request) {
            
            if (($term = $request->get('term'))) {

            $query->orWhere('dep_id','like','%' . $term . '%');
            $query->orWhere('bacprno','like','%' . $term . '%');
            $query->orWhere('pboobrno','like','%' . $term . '%');
            $query->orWhere('pboacctcode','like','%' . $term . '%');

            }
        })
                   
        ->orderBy('id', 'desc')
        ->where('is_released','<>','1')
        ->paginate(5);

        //$prs = PurchaseRequest::orderBy('id', 'desc')->paginate(4);
        return view('budget.prs.index', compact('prs'));
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
        

        $prs = PurchaseRequest::findOrFail($id);

        $dept = Department::lists('depname','id')->all();

        $source = Source::lists('name','id')->all();

        $status = Status::lists('name','id')->all();

        //$categories = Categoryclient::lists('name','id')->all();

       

        return view('budget.prs.edit', compact('prs','dept','status','source'));
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

        return redirect('/bud_prequest');
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
