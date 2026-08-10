<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    // Display the customer dashboard.
    public function dashboard()
    {
        return view('frontend.customer_dashboard.dashboard');
    }

    // Display customer orders.
    public function orders()
    {
        return view('frontend.customer_dashboard.orders');
    }
}