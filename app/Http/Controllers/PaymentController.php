<?php

namespace App\Http\Controllers;

use App\Product;
use App\Shipping;
use Session;
use App\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payments = Payment::all();

        return view('/admin.manage_payment')->with('payments',$payments);
    }

    public function shippings()
    {
        $shippings = Shipping::all();

        return view('/admin.shippings')->with('shippings',$shippings);
    }

    public function view_shipping_single($id)
    {
        $shipping = Shipping::find($id);
        $product = Product::find($id);
        $payments = Payment::find($id);

        return view('/admin.view_shipping')->with('shipping',$shipping)
                                              ->with('product', $product)
                                              ->with('payments', $payments);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $payment = Payment::find($id);

        $payment->delete();

        Session::flash('message','Payment deleted successful.');

        return redirect()->back();
    }

    public function ship_destroy($id)
    {
        $shipping = Shipping::find($id);

        $shipping->delete();

        Session::flash('message','Sjipping deleted successful.');

        return redirect()->back();
    }
}
