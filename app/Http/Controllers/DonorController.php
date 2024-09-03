<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donor;

class DonorController extends Controller
{

    public function index()
    {
        $donors = Donor::all();
        return view('donors.index0',compact('donors'));
    }

    public function create()
    {
        return view('donors.create');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
                 'name' => 'required|string|max:255',
                 'phone' => 'required',
                 'address' => 'required|string|max:255',
                 'amount' => 'required|string|max:255',
        ]);
        Donor::Create($validateData0);
        return redirect()->route('donors.index')->with('success','Successfully Completeed');
    }
    public function show(Donor $donor)
    {
        return view('donors.show',compact('donor'));
    }


    public function edit(Donor $donor)
    {
        return view('donors.edit',compact(donor));
    }


    public function update(Request $request, Donor $donor)
    {
                $validateData = $request->validate([
                    'name' => 'required|string|max:255',
                    'phone' => 'required',
                    'address' => 'required|string|max:255',
                    'amount' => 'required|string|max:255',
                ]);

                $donor->update($validateData);
                return redirect()->route('donors.index')->with('success','updated Successfully');
    }

    public function destroy(Donor $donor)
    {
        $donor->delete();
        return redirect()->route('donors.index')->with('success','deleted successfully');
    }
}
