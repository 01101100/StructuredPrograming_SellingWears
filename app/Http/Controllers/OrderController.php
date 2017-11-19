<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Model\Orderline;
use App\Model\Product;
use App\Model\Order;
use Illuminate\Support\Facades\Auth;
use Session;

class OrderController extends Controller
{

	/**
	 * [__construct description]
	 * @param ProductRepositoryInterface $product [description]
	 */
	// public function __construct(RepositoryInterface $order) {
	// 	$this->order = $order;
	// }

    public function order()
    {
        return view('customers.order');
    }

    /**
     * Proceed To Checkout
     * @return echo
     */
	public function store(Request $request){
		dd($this->order);
		// $order = Session('cart')? Session::get('cart'):null;
		// $total_price = (Session::get('cart'))->totalPrice;
		// $product_cart = $order->items;
		// $bill = array('customer_id' => 'Auth::user()->id','total_amount' => '$total_price');
		// $this->order->create($bill);
		// // $bill = new Order;
		// // $bill->customer_id = Auth::user()->id;
		// foreach($product_cart as $item){
			
		// }
		//return view('customers.proceedtocheckout', compact('request'));
	}

}
