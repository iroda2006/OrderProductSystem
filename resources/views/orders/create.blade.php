@extends('layouts.app')

@section('content')
    <h1>Create Order</h1>

    <form method="POST" action="{{ route('orders.store') }}">
        @csrf
        <input type="text" name="name" placeholder="Order Name" required>
        <input type="number" name="quantity" placeholder="Quantity" required>
        <button type="submit">Save</button>
    </form>
@endsection
