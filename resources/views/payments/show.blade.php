@extends('layout')
@section('title')
    Payment {{ $payment->id }}
@endsection
@section('content')
    <div class="container">
        <table class="table table-dark mt-5">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">name</th>
                    <th scope="col">amount</th>
                    <th scope="col">currency</th>
                    <th scope="col">payer</th>
                    <th scope="col">debtors</th>
                    <th scope="col">date</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="col">{{ $payment->id }}</th>
                    <th scope="col"> {{ $payment->name }}</th>

                    <th scope="col">{{ $payment->amount }}</th>
                    <th scope="col">{{ $payment->currency }}</th>
                    <th scope="col">{{ $payment->payer }}</th>
                    <th scope="col">{{ $payment->debtors }}</th>
                    <th scope="col">{{ date('d/m/Y', strtotime($payment->date)) }}</th>
                </tr>
            </tbody>
        </table>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th>note</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>{{ $payment->note }}</th>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
