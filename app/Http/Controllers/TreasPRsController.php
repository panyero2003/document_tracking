<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\PurchaseRequest;

use App\Department;

use App\Source;

use App\Status;

class TreasPRsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->user =  \Auth::user();
    }
    
    public function index(Request $request)
    {
        $prs = PurchaseRequest::where(function($query) use ($request) {
            
            if (($term = $request->get('term'))) {

            $query->orWhere('pboacctcode','like','%' . $term . '%');
            $query->orWhere('bacprno','like','%' . $term . '%');
            $query->orWhere('pboobrno','like','%' . $term . '%');
            // $query->orWhere('payee','like','%' . $term . '%');

            }
        })
                   
        ->orderBy('id', 'desc')
        ->where('is_released_treas','<>','1')
        ->paginate(5);


            
        return view('treasurer.prs.index', compact('prs'));
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

        //$transactions = TransactionType::lists('name','id')->all();

        
        return view('treasurer.prs.edit', compact('prs','dept','source','status'));
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

        return redirect('/treas_prs');
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
