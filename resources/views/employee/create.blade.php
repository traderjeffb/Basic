
@extends('layouts.app')

@section('content')
<div class="">
  <div class="d-flex">
    <h3 class="mx-auto">New Employee Infomation</h3>
  </div>
  <div class="form d-flex ms-2">
    <form class="form-group form-control-md col-md-4 border p-1  mx-auto  bg-light"  action="{{ url('store') }}" method="post" id="add-employee-form">
      @csrf
            <label for="name">Name</label>
            <input class="input-group" name="name"><br>
            <label for="address">Address</label>
            <input class="input-group"  name="address"><br>
            <label for="city">City</label>
            <input  class="input-group" name="city"><br>
            <label for="state">State</label>
            <input  class="input-group" name="state"><br>
            <label for="zipcode">Zipcode</label>
            <input  class="input-group" name="zipcode">
            <button class= "m-2 rounded" type="submit">Submit</button>
    </form>
  </div>   
</div>
@endsection
