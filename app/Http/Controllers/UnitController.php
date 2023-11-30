<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    public function index()
    {
        $units = Unit::paginate(5);
        return view('unit.unit',compact('units'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('unit.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|unique:units,name',
        ]);
        Unit::create([
            'name'=>$request->name,
            'unit_slug'=>Str::slug($request->name),
            'description'=>$request->description,
            'status'=>$request->status
        ]);
        $notification = array('alert-type'=>'success','message'=>'Unit Created Successfully');
        return redirect()->route('admin.unit.index')->with($notification);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Unit $unit)
    {
        return view('unit.edit_unit',compact('unit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Unit $unit)
    {
        $request->validate([
            'name'=>'required|unique:units,name',
        ]);
        $unit->update([
            'name'=>$request->name,
            'unit_slug'=>Str::slug($request->name),
            'description'=>$request->description,
            'status'=>$request->status
        ]);
        $notification = array('alert-type'=>'success','message'=>'Unit Updated');
        return redirect()->route('admin.unit.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Unit $unit)
    {
        $unit->delete();
        $notification = array('alert-type'=>'error','message'=>'Unit Deleted');
        return redirect()->route('admin.unit.index')->with($notification);
    }
}
