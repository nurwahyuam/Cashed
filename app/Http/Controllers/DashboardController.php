<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use App\Models\Category;
use App\Models\OrderDetail;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $orderDetail = OrderDetail::query()->sum('qty');
        $orders = Order::all();
        $ordersRevenue = Order::query()->sum('total');
        $categories = Category::all();
        $products = Product::all();
        $users = User::all();

        $recentOrders = Order::query()
            ->orderBy('created_at', 'desc')
            ->limit(3)
            ->get();

        return view('dashboard', [
            'orders' => $orders,
            'categories' => $categories,
            'products' => $products,
            'users' => $users,
            'recentOrders' => $recentOrders,
            'orderDetail' => $orderDetail,
            'ordersRevenue' => $ordersRevenue,
        ]);
    }
}
