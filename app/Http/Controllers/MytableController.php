<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mytable;
use DB;

class MytableController extends Controller
{
    public function index()
    {
        $data = DB::table("mytables")
        ->select("id","name","city")
        ->get();
        return view('/index',compact('data'));
        //     print_r($req->input());
    }
    
    // Mass Assignment
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'city'=> 'required'
        ]);
        Mytable::create($request->all());
        return redirect('index')->with('success', 'Data saved successfully!');

    }

    public function edit($id)
    {
        $data = Mytable::find($id);
        return view('edit',compact('data'));
    }

    public function update(Request $request)
    {   
        $request->validate([
            'name'=>'required',
            'city'=> 'required'
        ]);
        $data = Mytable::find($request->id);
        $data->name=$request->name;
        $data->city=$request->city;
        $data->save();
        return redirect('index')->with('success', 'Data Updated successfully!');
    }

    public function delete($id)
    {
        $data = Mytable::find($id);
        $data->delete();
        return redirect()->back()->with('success','Data Deleted Successfully');
    }
}
