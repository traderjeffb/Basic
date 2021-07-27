<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sale;


class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    public function sale()
    {
        // $request->validate([
        //     'product_name'=>'required',
        //     'product_number'=>'required',
        //     'product_department'=>'required',
        //     'price'=>'required'
        // ]);
        // dd($request->all());
        $cart = session()->get('cart');
dd($cart);


        $sale = new sale();
        $sale->product_name = $request->get('product_name');
        $sale->product_number = $request->get('product_number');
        $sale->product_department = $request->get('product_department');
        $sale->product_description = $request->get('description');
        $sale->price = $request->get('price');
        $sale->save();
        Session::forget('cart');

        //session()->pull('cart', $cart);
        // session()->destroy;  //???????????????
        return redirect('product.indexInternal')->with('success', 'Successfully Created');
    }
}
