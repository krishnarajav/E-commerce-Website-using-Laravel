<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;
use Illuminate\Support\Facades\Validator;
use App\Models\Product;
use App\Models\CartItem;
use Illuminate\Support\Facades\Redirect;
use App\Models\Order;
use Illuminate\Support\Facades\DB;

class AppManager extends Controller
{
    function login() {
        if (Auth::check()) {
            return redirect(route('homepage'));
        }
        return view('login');
    }

    function registration() {
        if (Auth::check()) {
            return redirect(route('homepage'));
        }
        return view('registration');
    }

    function loginPost(Request $request) {
        $credentials  = $request->only('email', 'password');
        if(Auth::attempt($credentials)) {
            return redirect()->intended(route('homepage'));
        }
        return redirect(route('login'))->with('error', 'Login details are not valid.');
    }

    function registrationPost(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
        ]);

        if ($validator->fails()) {
            $errorMessage = $validator->errors()->first();
            return redirect(route('registration'))->with('error', $errorMessage);
        }

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $emailParts = explode('@', $data['email']);
        $displayname = $emailParts[0];
        $data['displayname'] = $displayname;
        $data['password'] = Hash::make($request->password);
        $user = User::create($data);
        if(!$user){
            return redirect(route('registration'))->with('error', 'Registration failed, try again.');
        }
        return redirect(route('login'))->with('success', 'Registration successful. Login to access the application.');
    }

    function logout() {
        Session::flush();
        Auth::logout();
        return redirect(route('homepage'));
    }

    function writemessagePost (Request $request) {
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;
        $data['subject'] = $request->subject;
        $data['message'] = $request->message;
        ContactMessage::create($data);
        return redirect(route('contact'))->with('success', 'Message sent successfully.');
    }

    public function myaccount()
    {
        $user = auth()->user();
        return view('.include.user.myaccount', compact('user'));
    }

    public function myaccountupdate(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'displayname' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . auth()->id(),
        ]);

        auth()->user()->update($request->only('name', 'displayname', 'email'));

        return redirect('myaccount')->with('success', 'Account details updated successfully!');
    }

    public function cart(Request $request)
    {
        // Find the product
        $product = Product::find($request->input('product_id'));
        // Find the current user
        $user = Auth::user();

        // Find an existing cart item for the current user and the specified product
        $cartItem = CartItem::where([
            'user_id' => $user->id,
            'product_id' => $product->id,
        ])->first();

        if ($cartItem) {
            // If the item already exists, increment the quantity
            $cartItem->increment('quantity', $request->input('quantity', 1));
        } else {
            // If the item doesn't exist, create a new cart item
            $cartItem = CartItem::create([
                'user_id' => $user->id,
                'product_id' => $product->id,
                'quantity' => $request->input('quantity', 1),
                'user_name' => $user->name,
                'user_email' => $user->email,
                'product_name' => $product->name,
                'product_price' => $product->price,
                'product_image' => $product->image1, // Adjust this based on your product image logic
            ]);
        }

        // Retrieve the entire cart for the current user
        $cart = CartItem::where('user_id', $user->id)->with('product')->get();

        // Calculate the totalamount
        $totalamount = $cart->sum(function ($item) {
            return $item->quantity * $item->product->price;
        });

        return view('include.store.cart', compact('product', 'cart', 'totalamount'));
    }

    public function showCartView()
    {
        // Retrieve the entire cart for the current user
        $user = Auth::user();
        $cart = CartItem::where('user_id', $user->id)->with('product')->get();

        // Calculate the total amount
        $totalamount = $cart->sum(function ($item) {
            return $item->quantity * $item->product->price;
        });

        // Return the cart view with the cart and totalamount data
        return view('include.store.cart', compact('cart', 'totalamount'));
    }

    public function updatedCart(Request $request)
    {
        // Find the product
        $product = Product::find($request->input('product_id'));
        // Find the current user
        $user = Auth::user();

        // Find an existing cart item for the current user and the specified product
        $cartItem = CartItem::where([
            'user_id' => $user->id,
        ])->first();

        if ($cartItem) {
            // If the item already exists, update the quantity
            $cartItem->update(['quantity' => $request->input('quantity', $cartItem->quantity)]);
        } else {
            // If the item doesn't exist, create a new cart item
            $cartItem = CartItem::create([
                'user_id' => $user->id,
                'product_id' => $product->id,
                'quantity' => $request->input('quantity', 1),
                'user_name' => $user->name,
                'user_email' => $user->email,
                'product_name' => $product->name,
                'product_price' => $product->price,
                'product_image' => $product->image1, // Adjust this based on your product image logic
            ]);
        }

        // Retrieve the entire cart for the current user
        $cart = CartItem::where('user_id', $user->id)->with('product')->get();

        // Calculate the totalamount
        $totalamount = $cart->sum(function ($item) {
            return $item->quantity * $item->product->price;
        });

        return view('include.store.cart', compact('product', 'cart', 'totalamount'));
    }


    public function updateCart(Request $request)
    {
        // Validate the request
        $request->validate([
            'items.*' => 'required|integer|min:1|max:50',
        ]);

        // Loop through the submitted quantities and update the cart items
        foreach ($request->input('items') as $itemId => $quantity) {
            $cartItem = CartItem::findOrFail($itemId);
            $cartItem->update(['quantity' => $quantity]);
        }

        // Retrieve the entire cart for the current user
        $user = Auth::user();
        $cart = CartItem::where('user_id', $user->id)->with('product')->get();

        // Calculate the total amount
        $totalamount = $cart->sum(function ($item) {
            return $item->quantity * $item->product->price;
        });

        // Redirect back to the cart view with updated data
        return redirect()->route('updatedcart');
    }

    public function dropItems(Request $request)
    {
        $user = Auth::user();

        // Delete all cart items for the current user
        CartItem::where('user_id', $user->id)->delete();

        // Redirect to the cart view
        return redirect()->route('cartview')->with('success', 'All items dropped from the cart.');
    }

    public function orderdetails()
    {
        // Retrieve the entire cart for the current user
        $user = Auth::user();
        $cart = CartItem::where('user_id', $user->id)->with('product')->get();

        // Calculate the total amount
        $totalamount = $cart->sum(function ($item) {
            return $item->quantity * $item->product->price;
        });

        // Assuming you have a shipping fee logic, you can adjust this accordingly
        $shippingFee = 200;

        // Return the orderdetails view with the cart and totalamount data
        return view('.include.order.orderdetails', compact('cart', 'totalamount', 'shippingFee'));
    }

    public function placeOrder(Request $request)
    {
        $user = Auth::user();

        $order_id = 'ORD' . now()->timestamp . $user->id;

        $data['user_id'] = $user->id; 
        $data['name'] = $request->name;
        $data['phone'] = $request->phone;
        $data['email'] = $request->email;
        $data['address'] = $request->address;
        $data['city'] = $request->city;
        $data['state'] = $request->state;
        $data['pin'] = $request->pin;
        $data['payment_method'] = $request->payment_method;
        $data['order_id'] = $order_id;
            
        DB::transaction(function () use ($data, $user) {
            $order = Order::create($data);
  
            CartItem::where('user_id', $user->id)->delete();
        });

        return redirect(route('orders'))->with('success', 'Order placed successfully.');
    }

    public function orders()
    {   
        $orders = Order::where('user_id', Auth::id())->get();

        return view('.include.user.orders', compact('orders'));
    }

    public function addresses()
    {   
        $orders = Order::where('user_id', Auth::id())->get();

        return view('.include.user.addresses', compact('orders'));
    }
}
