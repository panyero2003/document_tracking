<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Claimant;

use App\Categoryclient;

class ClaimantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $claimants = Claimant::where(function($query) use ($request) {
            
            if (($term = $request->get('term'))) {

            $query->orWhere('claimantname','like','%' . $term . '%');
            $query->orWhere('address','like','%' . $term . '%');
            $query->orWhere('claimanttype','like','%' . $term . '%');
            $query->orWhere('claimantno','like','%' . $term . '%');

        }
    })
                   
        ->orderBy('id', 'desc')
        ->paginate(5);

        //$claimants = Claimant::paginate(2);

        return view('admin.claimant.index', compact('claimants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categoryclient::lists('name','id')->all();

        return view('admin.claimant.create', compact('categories'));

        //return view('admin.claimant.create');
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
        'claimantname' => 'required|max:100)',
        'address' => 'required|max:100',
        'claimantno' => 'required|max:100',
        
        ]);

       $input = $request->all();

        Claimant::create($input);

        return redirect('/claimant');
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

       
        $claims = Claimant::findOrFail($id);

        $categories = Categoryclient::lists('name','id')->all();

        return view('admin.claimant.edit', compact('claims','categories'));
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
        $claimant = Claimant::findOrFail($id);

        $input = $request->all();

        $claimant->update($input);

        return redirect('/claimant');
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
