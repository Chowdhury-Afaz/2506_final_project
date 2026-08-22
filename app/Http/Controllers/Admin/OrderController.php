<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
   
    public function store(Request $request)
    {
        $request->validate([
            'first_name'     => 'required|string',
            'last_name'      => 'required|string',
            'street_address' => 'required|string',
            'city'           => 'required|string',
            'phone'          => 'required|string',
            'email'          => 'required|email',
        ]);

  
        $order = new Order();
        $order->transaction_id = 'ORD-' . strtoupper(uniqid());
        $order->name           = $request->first_name . ' ' . $request->last_name;
        $order->email          = $request->email;
        $order->phone          = $request->phone;
        $order->amount         = $request->total ?? $request->subtotal ?? 0;
        $order->address        = $request->street_address . ', ' . $request->city;
        $order->currency       = 'BDT';
        $order->status         = 'pending';
        $order->gateway        = $request->payment_method ?? 'Cash on Delivery';
        
        $order->save();

      
        return redirect()->route('order.success')->with([
            'success_order' => $order
        ]);
    }

   
    public function orderSuccess()
    {
        if (!session()->has('success_order')) {
            return redirect()->route('homepage');
        }

        $order = session('success_order');
        return view('order-success', compact('order'));
    }

    public function index()
    {
        return view('backend.orders');
    }

    public function show($id = null)
    {
        return view('backend.order-view', compact('id'));
    }

    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:pending,processing,shipped,completed,cancelled',
        ]);

        return back()->with(
            'success',
            'Order status updated successfully.'
        );
    }

    public function destroy($id)
    {
        return redirect()
            ->route('admin.orders')
            ->with(
                'success',
                'Order deleted successfully.'
            );
    }
}