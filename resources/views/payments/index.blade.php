@extends('layout')
@props(['tags'])
@php
    
@endphp

@section('title')
    Home
@endsection
@section('content')
    <div class="container">
        <div class="w-100 mt-5">
            <h1 align="center" class="text-light">Transactions</h1>
            <form action="/payments" method="POST" class="d-flex">
                @csrf
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th scope="col">
                                <input class="pt-1 pb-1 form-control bg-dark text-light" type="text" name="name"
                                    id="input-name" placeholder="name" />
                                @error('name')
                                    <p class="text-danger"></p>
                                @enderror
                            </th>
                            <th scope="col">
                                <input class="pt-1 pb-1 form-control bg-dark text-light" type="text" name="amount"
                                    id="input-amount" placeholder="amount" />
                            </th>

                            <th scope="col">
                                <input class="pt-1 pb-1 form-control bg-dark text-light" type="text" name="currency"
                                    id="input-currency" placeholder="currency" value="CZK" />
                            </th>
                            <th scope="col">
                                <input class="pt-1 pb-1 form-control bg-dark text-light" type="text" name="payer"
                                    id="input-payer" placeholder="payer" />
                            </th>
                            <th scope="col">
                                <input class="pt-1 pb-1 form-control bg-dark text-light" class="class" type="text"
                                    name="debtors" id="input-debtors" placeholder="debtors" />
                            </th>
                            <th>
                                <button id="input-submit-button" type="submit"
                                    class="btn btn-primary mt-1 form-control bg-dark">
                                    add
                                </button>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="colgroup" colspan="6">
                                <textarea placeholder="note" name="note" id="note"
                                    class="form-control pt-1 pb-1 form-control bg-dark text-light ">
                                </textarea>
                            </th>
                        </tr>
                    </tbody>
                </table>
            </form>
            <form action="/">
                <table class="table table-dark">
                    <tbody>
                        <tr>
                            <th scope="row">
                                <form action="/" method="get">
                                    <div class="row ">

                                        <div class="col-md-10">
                                            <input type="search"
                                                class="pt-1 pb-1 form-control bg-dark text-light"id="search"
                                                aria-describedby="emailHelp" placeholder="search" name="search">
                                        </div>

                                        <div class="col-md input-group h-100">
                                            <button type="submit" class="btn btn-primary form-control bg-dark">
                                                search</i></button>
                                        </div>

                                    </div>
                            </th>
                        </tr>
                    </tbody>
                </table>
            </form>
            <table class="table table-dark">
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
                    @foreach ($payments as $payment)
                        <tr>
                            <th scope="col">{{ $payment->id }}</th>
                            <th scope="col"><a href={{ '/payments/' . $payment->id }}>
                                    {{ $payment->name }}
                                </a></th>

                            <th scope="col">{{ $payment->amount }}</th>
                            <th scope="col">{{ $payment->currency }}</th>
                            <th scope="col">{{ $payment->payer }}</th>
                            <th scope="col">{{ $payment->debtors }}</th>
                            <th scope="col">{{ date('d/m/Y', strtotime($payment->date)) }}</th>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
@endsection
