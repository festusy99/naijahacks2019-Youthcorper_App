<?php

namespace App\Http\Controllers;

use App\Lodge;
use Illuminate\Http\Request;

class LodgeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lodges = Lodge::latest()->paginate(5);
  
        // return view('home')->with('lodges', $lodges);
        return view('/home',compact('lodges'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'lodge_name' => 'required',
            'lodge_type' => 'required',
            'description' => 'required',
            'state' => 'required',
            'local_govt' => 'required',
            'address' => 'required',
        ]);
  
        Lodge::create($request->all());
   
        return redirect()->route('home')
                        ->with('success','Lodges created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Lodge  $lodge
     * @return \Illuminate\Http\Response
     */
    public function show(Lodge $lodge)
    {
        return view('lodges.show',compact('lodge'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lodge  $lodge
     * @return \Illuminate\Http\Response
     */
    public function edit(Lodge $lodge)
    {
        return view('lodges.edit',compact('lodge'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Lodge  $lodge
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lodge $lodge)
    {
        $request->validate([
            'lodge_name' => 'required',
            'lodge_type' => 'required',
            'description' => 'required',
            'state' => 'required',
            'local_govt' => 'required',
            'address' => 'required',
        ]);
  
        $lodge->update($request->all());
  
        return redirect()->route('lodges.index')
                        ->with('success','Lodge updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lodge  $lodge
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lodge $lodge)
    {
        $lodge->delete();
  
        return redirect()->route('lodges.index')
                        ->with('success','Lodge deleted successfully');
    }
}
