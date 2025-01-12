@extends('layouts.app')

@section('content')
<div class="order-details">
    <h1 class="page-title">Order Details</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="order-id">Order ID: #{{ $order->id }}</h5>
            <p><strong>Customer Name:</strong> {{ $order->customer_name }}</p>
            <p><strong>Order Items:</strong></p>
            <ul class="order-items">
                @foreach ($order->items as $item)
                    <li class="item">
                        <span class="item-name">{{ $item->name }}</span>
                        <span class="item-quantity">x{{ $item->quantity }}</span>
                        <span class="item-price">RM{{ $item->price }}</span>
                    </li>
                @endforeach
            </ul>
            <p class="total-price"><strong>Total Price:</strong> RM{{ $order->total_price }}</p>
            <p class="status"><strong>Status:</strong> {{ $order->status }}</p>
        </div>
    </div>
    <a href="/orders" class="btn btn-primary">Back to Orders</a>
</div>
@endsection
