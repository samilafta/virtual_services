<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Validator;

class CartController extends Controller
{

//    protected $loginPath = 'customer/login';
//
//    public function __construct()
//    {
//        $this->middleware('auth:customer');
//    }


    public function addTocart(Request $request) {

        if(Session::get('cart_instance') === null) {

            $session = bin2hex(random_bytes(10));
            Session::put('cart_instance', $session);

        }

        $instance = Session::get('cart_instance');

        $duplicates = Cart::instance($instance)->search(function ($cartItem, $rowId) use ($request) {
            return $cartItem->id === $request->id;
        });

        if (!$duplicates->isEmpty()) {
            return redirect(route('shop.cart'))->withSuccessMessage('Item is already in your cart!');
        }

        \App\Cart::create([

            'cart_id' => $instance,
            'product_id' => $request->id,
            'product_name' => $request->name,
            'quantity' => $request->quantity,
            'amount' => $request->quantity * $request->price

        ]);

        Cart::instance($instance)->add($request->id, $request->name, $request->quantity, $request->price)->associate(Product::class);

        return redirect(route('shop.cart'))->withSuccessMessage('Item was added to your cart!');


    }

    public function updateQty(Request $request, $id)
    {

        $session = Session::get('cart_instance');
        // Validation on max quantity
        $validator = Validator::make($request->all(), [
            'quantity' => 'required|numeric|between:1,5'
        ]);

        if ($validator->fails()) {
            session()->flash('error_message', 'Quantity must be between 1 and 5.');
            return response()->json(['success' => false]);
        }

        Cart::instance($session)->update($id, $request->quantity);
        session()->flash('success_message', 'Quantity was updated successfully!');

        return response()->json(['success' => true]);

    }

    public function destroy($id)
    {
        $session = Session::get('cart_instance');
        Cart::instance($session)->remove($id);
        return redirect(route('shop.cart'))->withSuccessMessage('Item has been removed!');
    }

    public function emptyCart()
    {
        $session = Session::get('cart_instance');
        Cart::instance($session)->destroy();
        $hash = bin2hex(random_bytes(10));
        Session::put('cart_instance', $hash);
        return redirect(route('shop.cart'))->withSuccessMessage('Your cart has been cleared!');
    }

    public function checkout(Request $request) {

        $this->validate($request, [
            'address' => 'required',
            'p_method' => 'required'
        ]);

//        dd($request->all());

        $session = Session::get('cart_instance');

//        dd($request->all());

        Order::create([
            'cart_id' => $session,
            'customer_id' => $request->customer_id,
            'order_code' => $this->randomString(6),
            'total_amount' => $request->total_amount,
            'payment_method' => $request->p_method,
            'address' => $request->address,
            'message' => $request->message,
            'payment_status' => 0,
            'status' => 0
        ]);

        Cart::instance($session)->store($session);

        $hash = bin2hex(random_bytes(10));
        Session::put('cart_instance', $hash);

        return redirect(route('shop.orders'));

    }

    public function randomString($length) {
        $str = "";
        $characters  = array_merge(range("A", "Z"), range("0", "9"));
        $max = count($characters) - 1;

        for ($i = 0; $i < $length; $i++)  {
            $rand = mt_rand(0, $max);
            $str .= $characters[$rand];
        }
        return $str;
    }



}
