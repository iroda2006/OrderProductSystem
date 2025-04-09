@extends('layouts.app')

@section('content')
    <h1>Edit Order</h1>

    <form method="POST" action="{{ route('orders.update', $order->id) }}">
        @csrf
        @method('PUT')
        <input type="text" name="name" value="{{ $order->name }}" required>
        <input type="number" name="quantity" value="{{ $order->quantity }}" required>
        <button type="submit">Update</button>
    </form>
@endsection
