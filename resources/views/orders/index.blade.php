@extends('layouts.app')

@section('content')
    <h1>Orders</h1>
    <a href="{{ route('orders.create') }}">+ Create Order</a>

    @if (session('success'))
        <p style="color:green">{{ session('success') }}</p>
    @endif

    <ul>
        @foreach ($orders as $order)
            <li>
                {{ $order->name }} - {{ $order->quantity }}
                <br>
                <a href="{{ route('orders.edit', $order->id) }}">Edit</a>
                <form action="{{ route('orders.destroy', $order->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
