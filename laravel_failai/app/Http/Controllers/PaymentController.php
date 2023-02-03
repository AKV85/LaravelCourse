<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller

{

    public function index()
    {
        return Payment::query()->with(['order','paymentType','status'])->get();
    }
    public function create()
    {
        return view('payments.create');
    }
    public function store(Request $request)
    {
        $payment = Payment::create($request->all());
        return redirect()->route('payments.show',$payment);
    }
    public function show(Payment $payment)
    {
        return $payment;
    }
    public function edit(Payment $payment)
    {
        return view('payments.edit',compact('payment'));
    }
    public function update(Request $request, Payment $payment)
    {
        $payment->update($request->all());
        return redirect()->route('payments.show',$payment);
    }
    public function destroy(Payment $payment)
    {
        $payment->delete();
        return redirect()->route('payments.index');
    }
}

