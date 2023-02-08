<?php

namespace App\Http\Controllers;

use App\Models\PaymentType;
use Illuminate\Http\Request;

class PaymentTypeController extends Controller
{
    public function index()
    {
        return PaymentType::query()->get();
    }

    public function create()
    {
        return view('paymentTypes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'min:3', 'max:255'],
        ]);
        $paymentType = PaymentType::create($request->all());
        return redirect()->route('paymentTypes.show', $paymentType);
    }

    public function show(PaymentType $paymentType)
    {
        return $paymentType;
    }

    public function edit(PaymentType $paymentType)
    {
        return view('paymentTypes.edit', compact('paymentType'));
    }

    public function update(Request $request, PaymentType $paymentType)
    {
        $paymentType->update($request->all());
        return redirect()->route('paymentTypes.show', $paymentType);
    }

    public function destroy(PaymentType $paymentType)
    {
        $paymentType->delete();
        return redirect()->route('paymentTypes.index');
    }
}

