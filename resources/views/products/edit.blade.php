@extends('layouts.app')

@section('content')
    <h1>Edit Product</h1>

    <form method="POST" action="{{ route('products.update', $product->id) }}">
        @csrf
        @method('PUT')
        <input type="text" name="name" value="{{ $product->name }}" required>
        <input type="number" step="0.01" name="price" value="{{ $product->price }}" required>
        <textarea name="description">{{ $product->description }}</textarea>
        <button type="submit">Update</button>
    </form>
@endsection
