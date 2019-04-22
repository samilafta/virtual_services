<?php

namespace App\Http\Controllers;

use App\Category;
use App\Order;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ShopFrontController extends Controller
{

    public function index() {

        return view('index')
            ->with('categories', Category::all())
            ->with('first_cat', Category::orderBy('created_at', 'desc')->first())
            ->with('second_cat', Category::orderBy('created_at', 'desc')->skip(1)->take(1)->get()->first())
            ->with('third_cat', Category::orderBy('created_at', 'desc')->skip(2)->take(1)->get()->first())
            ->with('fourth_cat', Category::orderBy('created_at', 'desc')->skip(3)->take(1)->get()->first())
            ->with('fifth_cat', Category::orderBy('created_at', 'desc')->skip(4)->take(1)->get()->first())
            ->with('products', Product::take(8)->get());

    }

    public function categoryPage($id) {

        $category = Category::find($id);
        $products = Product::where('category_id', '=', $id)->get();
        $categories = Category::all();

//        dd($products);

        return view('shop.categories', compact('products', 'categories', 'category'));

    }

    public function productDetail($id) {

        $product = Product::find($id);
        $categories = Category::all();

        return view('shop.product-detail', compact('product', 'categories'));

    }

    public function productsDisplay() {

        $products = Product::all();
        $categories = Category::all();

//        dd($products->all());

        return view('shop.products', compact('products', 'categories'));

    }

    public function displayCart() {

        $categories = Category::all();
        return view('shop.cart', compact('categories'));

    }

    public function displayCheckout() {

        $categories = Category::all();
        return view('shop.checkout', compact('categories'));

    }

    public function displayOrders() {

        $categories = Category::all();
        $orders = Order::where('customer_id', Auth::guard('customer')->user()->id)
            ->orderBy('created_at', 'desc')->get();

//        dd($orders->all());

        return view('shop.orders', compact('categories', 'orders'));

    }

    public function search(Request $request){

        $categories = Category::all();
        $products = Product::where('name', 'LIKE', '%' . $request->search . '%')->get();

        return view('shop.search', compact('products', 'categories'));

    }


}
