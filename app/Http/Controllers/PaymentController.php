<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\PaymentMethod;

class PaymentController extends Controller
{

    public function index()
    {
        $payments = PaymentMethod::all();
        return view('payments.index',compact('payments'));
    }

    public function create()
    {
        return view('payments.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
              'name' => 'required|string|max:255',
        ]);

        PaymentMethod::create($validateData);
        return redirect()->route('payments.index')->with('success','payment added successfully');
    }


    public function show(PaymentMethod $payment)
    {
       return view('payments.show',compact('payment'));
    }


    public function edit(PaymentMethod $payment)
    {
     return view('payments.edit',compact('payment'));
    }

    public function update(Request $request,PaymentMethod $payment)
    {
        $validateData = $request->validate([
            'name' => 'required|string|max:255',
      ]);
      $payment->update($validateData);
    }

    public function destroy(PaymentMethod $payment)
    {
        $payment->delete();
        return redirect()->route('payments.index')->with('success','Deleted Successfully');
    }
}
