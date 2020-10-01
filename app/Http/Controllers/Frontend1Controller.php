<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Item;
use App\Subcategory;
use App\Category;
use App\Brand;

class Frontend1Controller extends Controller
{
    //
    public function index()
    {
        //
        $items=Item::limit(8)->get();
        $subcategories=Subcategory::all();
        return view('frontend1.index',compact('items'));
    }

    public function subcategory($id)
    {

    	//$items=Item::all();
    	$subcategory=Subcategory::find($id);
    	$category_id=$subcategory->category_id;
    	$subcategories=Subcategory::where('category_id',$id)->get();
    	$subcategoryitems=Item::where('subcategory_id',$id)->get();
        /*dd($subcategoryitems);*/
    	$items=Item::where('subcategory_id',$id)->paginate(6);
    	return view('frontend1.subcategory',compact('subcategoryitems','subcategory'));
    }

    public function brand($id)
    {
        $brand=Brand::find($id);
        $branditems=Item::where('brand_id',$id)->get();
        return view('frontend1.brand',compact('branditems'));
    }

    public function promotion(){
        $discountitems=Item::whereNotNull('discount')->take(4)->get();
        /*dd($discountitems);*/
        return view('frontend1.promotion',compact('discountitems'));
    }

    public function cart()
    {
        return view('frontend1.cart');
    }

    public function order(Request $request)
    {
        $auth=Auth::user();

        $userid=$auth->id;

        $carts=json_decode($request->data);
        $total=0;

        foreach ($carts as $row) {
            $price=$row->price;
            $discount=$row->discount;

            if($discount){
                $price=$discount;
            }else{
                $price=$price;
            }
            $subtotal+=$price*$row->qty;

            $total+=$subtotal++;
        }

        $orderdate=Carbon::now();
        $voucherno=uniqid();
        $note=$request->note;
        $status='Order';

        $order=new Order;
        $order->orderdate=$orderdate;
        $order->voucherno=$voucherno;
        $order->total=$total;
        $order->note=$note;
        $order->status=$status;
        $order->user_id=$userid;
        $order->save();

        foreach ($carts as $value) {
            $order->items()->attach($value->id,['qty'=>$value->qty]);
        }
        return response()->json([
            'status'=>'Order Successfully created!'
        ]);
    }

    public function ordersuccess(){
        return view('frontend1.ordersuccess');
    }
}
