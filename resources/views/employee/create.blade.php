
@extends('layouts.app')

@section('content')
<div class="">
  <div class="d-flex">
    <h3 class="mx-auto mt-4">New Employee Infomation</h3>
  </div>
  <div class="form d-flex ms-2">
    <form class="form-group form-control-md col-md-4 border p-1  mx-auto  bg-light font-weight-bold "  action="{{ url('store') }}" method="post" id="add-employee-form">
      @csrf
            <label for="name" class="ml-md-2">Name</label>
            <input class="input-group" name="name"><br>
            <label for="address" class="ml-md-2">Address</label>
            <input class="input-group"  name="address"><br>
            <label for="city" class="ml-md-2">City</label>
            <input  class="input-group" name="city"><br>
            <label for="state" class="ml-md-2">State</label>
            <input  class="input-group" name="state"><br>
            <label for="zipcode" class="ml-md-2">Zipcode</label>
            <input  class="input-group" name="zipcode">
            <button class= "m-2 rounded" type="submit">Submit</button>
    </form>
  </div>   
</div>
@endsection
