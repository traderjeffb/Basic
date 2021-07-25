@extends('layouts.app')

@section('content')


<div class="d-flex">
  <h2 class="mx-auto mt-4">ORDER FORM</h2>
</div>
{{-- <div class="d-flex justify-content-center">  <a  href= {{ route('product.createInternal') }}><h5>Add a New Product</h5></a></div> --}}
<div class="d-flex justify-content-center">
</div>
<div>
  @if(Session::has('success'))
  <div class="alert alert-success text-center">
      {{Session::get('success')}}
  </div>
  @elseif(Session::has('danger'))
  <div class="alert alert-danger text-center">
    {{Session::get('danger')}}
  </div> 
@endif
</div>
<div class="container">  
  
 {{-- <button class="p-2 m-1 mb-3 rounded center"><a href="{{ url('cart.cart') }}">Order Complete</button> --}}
  {{-- @$itemCount = count(session['cart']); --}}
  <button type="button" class="btn btn-primary position-relative p-2 m-3 mb-3">
    <a href="{{ url('cart.cart') }}" class="text-white">View Cart <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-secondary">5 <span class="visually-hidden">Items</span></span>
  </button>

  <table id="productInternal" class="table table-bordered table-striped table-hover rounded">
    <thead class="thead-dark">
      <tr class="text-center">
        <th>Add to Order</th>
        {{--  <th>Quanity</th>  --}}
        <th class="">Product Name</th>
        <th>Product Number</th>
        <th>Department</th>
        <th>Description</th>
        <th>Price</th>
        {{--  <th>Action</th>  --}}
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach($products as $product)
        <td ><button class="rounded"><a href="{{ url('cart.addToCart/'.$product['id']) }}">Add to Order</button> </td>
        {{--  <td  class ="text-center" ><input class ="text-center" id="quanity"           name="quanity" style="width: 3em;" type="input" value=""></td>  --}}
        <td class="text-center" >{{ $product['product_name'] }}</td>
        <td class="text-center" >{{ $product['product_number'] }}</td>
        <td class="text-center" >{{ $product['product_department'] }}</td>
        <td class="text-center" >{{ $product['description'] }}</td>
        <td class="text-center" >{{ $product['price'] }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div> 
</div>   
@endsection


