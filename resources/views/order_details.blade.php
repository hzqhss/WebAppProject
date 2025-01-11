<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Details</title>
    <!-- Add Bootstrap or Tailwind CSS for styling -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Order Details</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Order #{{ $order->id }}</h5>
                <p><strong>Customer Name:</strong> {{ $order->customer_name }}</p>
                <p><strong>Items Ordered:</strong></p>
                <ul>
                    @foreach($order->items as $item)
                        <li>{{ $item->name }} - {{ $item->quantity }} x RM{{ $item->price }}</li>
                    @endforeach
                </ul>
                <p><strong>Total Price:</strong> RM{{ $order->total_price }}</p>
                <p><strong>Status:</strong> {{ $order->status }}</p>
            </div>
        </div>
        <a href="/orders" class="btn btn-primary mt-3">Back to Orders</a>
    </div>
</body>
</html>
