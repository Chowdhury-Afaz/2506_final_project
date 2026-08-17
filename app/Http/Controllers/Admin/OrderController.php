<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
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