<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PaymentTypeRequest;
use App\Managers\PaymentTypeManager;
use App\Models\PaymentType;

class PaymentTypeController extends Controller
{
    public function __construct(protected PaymentTypeManager $manager)
    {
    }
    public function index()
    {
        $paymentTypes = PaymentType::query()->get();
        return view('paymentTypes.index',['paymentTypes'=>PaymentType::orderBy("id")->paginate(6)]);

    }

    public function create()
    {
        return view('paymentTypes.create');
    }

    public function store(PaymentTypeRequest $request)
    {
        $paymentType = PaymentType::create($request->all());
        return redirect()->route('paymentTypes.show', $paymentType);
    }

    public function show(PaymentType $paymentType)
    {
        return view('paymentTypes.show', ['paymentType' => $paymentType]);
    }

    public function edit(PaymentType $paymentType)
    {
        return view('paymentTypes.edit', compact('paymentType'));
    }

    public function update(PaymentTypeRequest $request, PaymentType $paymentType)
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

