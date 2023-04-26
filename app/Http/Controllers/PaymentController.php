<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;

class PaymentController extends Controller
{
    public function index()
    {
        return view('payments.index', [
            'heading' => 'Home',
            'payments' => Payment::latest()->filter(request(['search']))->get()
        ]);
    }

    public function show(Payment $payment)
    {
        return view('payments.show', ['payment' => $payment]);
    }

    public function store()
    {
        $formFields = request()->validate([
            'name' => 'required',
            'amount' => 'required',
            'currency' => 'required',
            'payer' => 'required',
            'debtors' => 'required',
            'note' => 'nullable',
        ]);

        return redirect('/');
    }
}
