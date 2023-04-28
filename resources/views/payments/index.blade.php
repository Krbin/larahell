@extends('layout')
@props(['tags'])

@section('title')
    Home
@endsection
@section('content')
    <div class="container mt-5">
        <h1 align="center" class="text-light">Transactions</h1>

        <form action="/payments" method="POST" class="d-flex">
            @csrf
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">
                            <input value="{{ old('name') }}" class="pt-1 pb-1 form-control bg-dark text-light"
                                type="text" name="name" id="input-name" placeholder="name" />
                            @error('name')
                                <p class="text-danger" style="position: absolute">{{ $message }}</p>
                            @enderror
                        </th>

                        <th scope="col">
                            <input value="{{ old('amount') }}"class="pt-1 pb-1 form-control bg-dark text-light"
                                type="text" name="amount" id="input-amount" placeholder="amount" />
                            @error('amount')
                                <p class="text-danger" style="position: absolute">{{ $message }}</p>
                            @enderror
                        </th>

                        <th scope="col">
                            <input value="{{ old('payer') }}" class="pt-1 pb-1 form-control bg-dark text-light"
                                type="text" name="payer" id="input-payer" placeholder="payer" />
                            @error('payer')
                                <p class="text-danger" style="position: absolute">{{ $message }}</p>
                            @enderror
                        </th>

                        <th scope="col">
                            <input value="{{ old('debtors') }}" class="pt-1 pb-1 form-control bg-dark text-light"
                                class="class" type="text" name="debtors" id="input-debtors" placeholder="debtors" />
                            @error('debtors')
                                <p class="text-danger" style="position: absolute">{{ $message }}</p>
                            @enderror

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
                            <textarea value="{{ old('note') }}" placeholder="note" name="note" id="note"
                                class="form-control pt-1 pb-1 form-control bg-dark text-light "></textarea>
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
                    <th scope="col">payer</th>
                    <th scope="col">debtors</th>
                    <th scope="col"></th>
                </tr>
            </thead>

            <tbody>
                @foreach ($payments as $payment)
                    <tr>
                        <th scope="col">{{ $payment->id }}</th>
                        <th scope="col">
                            <a href={{ '/payments/' . $payment->id }}>{{ $payment->name }}</a>
                        </th>
                        <th scope="col">{{ $payment->amount }}</th>
                        <th scope="col">{{ $payment->payer }}</th>
                        <th scope="col">{{ $payment->debtors }}</th>
                        <th scope="col">
                            <div class="d-inline-flex justify-content-end">
                                <button onclick="window.location.href='/payments/{{ $payment->id }}/edit'" type="button"
                                    class="btn btn-info">edit</button>
                                <form method="POST" action="/payments/{{ $payment->id }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">delete</button>
                                </form>
                            </div>
                        </th>
                    </tr>
                @endforeach
            </tbody>

        </table>

    </div>
@endsection
