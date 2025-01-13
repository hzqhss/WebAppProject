@extends('layouts.app')
{{-- MUHAMMAD GHAZI BIN KHAIRI 2229607 --}}
@section('title', 'Order Details')

@push('styles')
<style>
    .order-details {
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .order-title {
        font-size: 24px;
        color: #333;
        margin-bottom: 15px;
    }

    .order-items {
        list-style: none;
        padding: 0;
    }

    .order-items .item {
        display: flex;
        justify-content: space-between;
        margin-bottom: 10px;
    }

    .total-price {
        font-weight: bold;
        margin-top: 20px;
        color: #007bff;
    }
</style>
@endpush

@section('content')
<div class="order-details">
    <h2 class="order-title">Order Details</h2>
    <ul class="order-items">
        @foreach ($order->items as $item)
            <li class="item">
                <span>{{ $item->name }}</span>
                <span>x{{ $item->quantity }}</span>
                <span>RM{{ $item->price }}</span>
            </li>
        @endforeach
    </ul>
    <p class="total-price">Total: RM{{ $order->total_price }}</p>
</div>
@endsection

