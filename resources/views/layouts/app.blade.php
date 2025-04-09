<!DOCTYPE html>
<html>
<head>
    <title>My App</title>
</head>
<body>
    <nav>
        <a href="{{ route('products.index') }}">Products</a> |
        <a href="{{ route('orders.index') }}">Orders</a>
    </nav>

    <hr>

    @yield('content')
</body>
</html>

