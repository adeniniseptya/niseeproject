<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\Review;

class OrderController extends Controller
{
    /**
     * Apply auth middleware
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show list of orders for the authenticated user
     */
    public function index()
    {
        // ambil semua order milik user beserta review (jika ada), terbaru dulu
        $orders = Auth::user()
            ->orders()
            ->with('review')
            ->latest()
            ->get();

        return view('orders', compact('orders'));
    }

    /**
     * Show single order detail (optional)
     */
    public function show(Order $order)
    {
        // pastikan order ini milik user yang sedang login
        if ($order->user_id !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }

        $order->load('review');

        // buat view resources/views/order-show.blade.php jika ingin detail page
        return view('order-show', compact('order'));
    }

    /**
     * Submit a review for an order
     */
    public function review(Request $request, Order $order)
    {
        // pastikan order milik user
        if ($order->user_id !== Auth::id()) {
            return back()->with('error', 'You are not allowed to review this order.');
        }

        // jangan izinkan review ganda untuk order yang sama
        if ($order->review) {
            return back()->with('error', 'You have already reviewed this order.');
        }

        // validasi input
        $data = $request->validate([
            'rating'  => 'required|integer|min:1|max:5',
            'comment' => 'required|string|max:1000',
        ]);

        // buat review
        Review::create([
            'order_id' => $order->id,
            'user_id'  => Auth::id(),
            'rating'   => $data['rating'],
            'comment'  => $data['comment'],
        ]);

        return back()->with('success', 'Thank you — your review has been submitted.');
    }
}
