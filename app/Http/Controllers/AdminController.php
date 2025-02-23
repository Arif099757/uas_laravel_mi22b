<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $productCount = Product::count();
        $categoryCount = Category::count();
        $userCount = User::count();

        return view('admin.index', compact('user', 'productCount', 'categoryCount', 'userCount'));
    }
}