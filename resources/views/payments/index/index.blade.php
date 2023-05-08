@extends('layout')
@props(['tags'])

@section('title')
    transactions
@endsection
@section('content')
    <div class="container mt-5">
        <div class="mt-5 container">.</div>
        <h1 align="center" class="text-light">transactions</h1>
        @include('payments.index.components.create')

        @include('payments.index.components.search')

        @include('payments.index.components.table')

    </div>
@endsection
