@extends('layouts.app')

@section('content')
<div style="padding:80px 10%;">

    <h1 class="section-title">My Orders</h1>

    <div class="trend-container" style="margin-top:40px;">
        @foreach($orders as $order)
        <div class="trend-card" style="width:320px; padding:25px;">
            
            <h3 style="color:#6b4bff;">{{ $order->product_name }}</h3>
            <span style="font-size:15px;">Rp {{ number_format($order->price) }}</span>

            <p style="margin-top:8px; font-size:14px; color:#666;">
                Status: <b>{{ strtoupper($order->status) }}</b>
            </p>

            {{-- Review Section --}}
            @if(!$order->review)
                <form method="POST" action="{{ route('orders.review', $order->id) }}" style="margin-top:20px;">
                    @csrf
                    <label>Rating</label>
                    <select name="rating" style="width:100%; padding:10px; border-radius:12px; margin-bottom:12px;">
                        <option value="5">⭐⭐⭐⭐⭐</option>
                        <option value="4">⭐⭐⭐⭐</option>
                        <option value="3">⭐⭐⭐</option>
                        <option value="2">⭐⭐</option>
                        <option value="1">⭐</option>
                    </select>

                    <textarea name="comment" rows="3"
                    style="width:100%; padding:12px; border-radius:12px; border:1px solid #ddd;"
                    placeholder="Write a review..."></textarea>

                    <button style="
                        width:100%; padding:12px;
                        background:#ff7eb8; color:white;
                        border:none; border-radius:14px;
                        margin-top:12px;
                    ">Submit Review</button>
                </form>

            @else
                <div style="margin-top:18px; background:rgba(255,255,255,0.6); padding:15px; border-radius:14px;">
                    <p><b>⭐ {{ $order->review->rating }}/5</b></p>
                    <p style="font-size:14px; margin-top:6px;">
                        {{ $order->review->comment }}
                    </p>
                </div>
            @endif

        </div>
        @endforeach
    </div>

</div>
@endsection
