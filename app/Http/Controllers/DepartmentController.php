<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Http\Requests;

use App\Department;

use Session;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $depts = Department::where(function($query) use ($request) {
            
            if (($term = $request->get('term'))) {

            $query->orWhere('depname','like','%' . $term . '%');
            // $query->orWhere('depcode','like','%' . $term . '%');
            // $query->orWhere('depacro','like','%' . $term . '%');
            // $query->orWhere('dephead','like','%' . $term . '%');

        }
    })
                   
        ->orderBy('id', 'desc')
        ->paginate(8);

        return view('admin.department.index', compact('depts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.department.create');
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
        'depname' => 'required|max:100)',
        
    ]);

    $input = $request->all();

    Department::create($input);
    //$request->session()->flash('alert-success', 'User was successful added!');

    return redirect('/department');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $depts = Department::findOrFail($id);

        return view('admin.department.index', compact('depts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $depts = Department::findOrFail($id);

        return view('admin.department.edit', compact('depts'));
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
        $depts = Department::findOrFail($id);

        $input = $request->all();

        $depts->update($input);

        return redirect('/department');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $depts = Department::findOrFail($id);
        $depts->delete();

        return redirect('/department');
    }
}
