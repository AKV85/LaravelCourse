<?php

namespace App\Http\Controllers;

use App\Http\Requests\PaymentRequest;
use App\Managers\PaymentManager;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{

    public function __construct(protected PaymentManager $manager)
    {
    }
    public function index()
    {
        $payments = Payment::query()->with(['order','paymentType','status'])->get();
        return view('payments.index',['payments'=>Payment::orderBy("id")->paginate(6)]);
    }
    public function create()
    {
        return view('payments.create');
    }
    public function store(PaymentRequest $request)
    {
        $payment = Payment::create($request->all());
        return redirect()->route('payments.show',$payment);
    }
    public function show(Payment $payment)
    {
        return view('payments.show', ['payment' => $payment]);
    }
    public function edit(Payment $payment)
    {
        return view('payments.edit',compact('payment'));
    }
    public function update(PaymentRequest $request, Payment $payment)
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

