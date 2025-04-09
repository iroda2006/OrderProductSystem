@extends('layouts.app')

@section('content')
    <h1>Create Product</h1>

    <form method="POST" action="{{ route('products.store') }}">
        @csrf
        <input type="text" name="name" placeholder="Name" required>
        <input type="number" step="0.01" name="price" placeholder="Price" required>
        <textarea name="description" placeholder="Description"></textarea>
        <button type="submit">Save</button>
    </form>
@endsection
